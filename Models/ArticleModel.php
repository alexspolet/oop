<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.11.18
 * Time: 9:32
 */

namespace Models;

Class ArticleModel extends BaseModel
{
  private static $instance;

  public static function getInstance(){
    if (self::$instance == null){
      self::$instance = new ArticleModel();
    }
    return self::$instance;
  }

  public function __construct()
  {
    parent::__construct();
    $this->table = 'articles';
    $this->pk = 'id';
  }
}