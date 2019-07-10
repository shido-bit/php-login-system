 <?php

 function forcelogin() {
   if(isset($_SESSION['user_id'])) {
    //the user is allowed
   } else{
    // the user is not allowed
    header("Location:/php_login_course/login.php");
    exit;
   }
}
function forcedashboard() {
   if(isset($_SESSION['user_id'])) {
   header("Location:/php_login_course/dashboard.php");
    //the user is allowed
   } else{
    // the user is not allowed
    
    exit;
   }
}

?>