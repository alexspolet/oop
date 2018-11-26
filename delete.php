<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.11.18
 * Time: 12:03
 */

session_start();
require_once 'Models/system_m.php';
require_once 'Models/ArticleModel.php';

$auth = isAuth();
if (!$auth) {
  header('location: index.php');
  exit();
}

$id = $_GET['aid'];
$error = '';
$db = connectDb();
$article = getArticle($db, $id);

if (!$article) {
  $error = 'Article not found';
} else {
  $res = deleteArticle($db, $article['id']);
  if (!$res) {
    $error = 'Cannot delete this article';
  }
}

$path = getPath();
$content = renderHtml($path, [
    'mainfile' => 'index.php',
    'error' => $error
]);

$html = renderHtml('view/main_v.php' , [
    'title' => 'delete',
    'content' => $content
]);

echo $html;

