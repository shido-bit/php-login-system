<?php 

    // Allow the config
    define('_CONFIG_', true);
    // Require the config
    require_once "../inc/config.php"; 
    //always return json format
    
   
   if($_SERVER['REQUEST_METHOD']=='POST') {
      header("Content-Type: application/json");
      
      $return=[];
      $return['redirect']='php_login_course/index.php?this-was-a-redirect';
      $return['name']="rohan rathore";
echo json_encode($return,JSON_PRETTY_PRINT); exit;

   } else {
   	exit('test');
   }



 
?>
