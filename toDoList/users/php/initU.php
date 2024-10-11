<?php
require_once 'functionsU.php';

spl_autoload_register(function($class){
  require_once $_SERVER['DOCUMENT_ROOT'].'/users/class/'.$class.'.php';
});
 ?>
