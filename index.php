
<?php
//allow the config
 define('_CONFIG_',true);
 //require the config
 require_once "inc/config.php";
define('_allowfooter_',true);
?>
<!DOCTYPE html>
<html>
<head>
<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/css/uikit.min.css" />

	
</head>
<body>

<?php
echo "hello world.today is:";
$time=time();
$time+=19800;
echo date("M d Y,g:i a",$time);
echo "<br />";
?>
<p>
 <a href="login.php">login</a><br />
 <a href="registration.php">registration</a>
</p>
</body>
</html>