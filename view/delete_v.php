<?if (isset($error)):?>
<p><?=$error;?></p>
<p><a href="<?='index.php'?>">To the main file</a></p>
<?else:?>
  <p>File was deleted successfully</p>
  <p><a href="<?='index.php'?>">To the main file</a></p>
<?endif;?>

