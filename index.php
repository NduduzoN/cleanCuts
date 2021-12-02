<?php
  require_once('connection.php');
  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];


  } else {
    $controller = 'login';   //default controller
    $action     = 'viewhome';	//default action
  }

require_once('route.php');

?>
