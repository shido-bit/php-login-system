
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
<form class="uk-form-stacked">
<h2>REGISTRATION</h2>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Email</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" required="required" type="text" placeholder="abcd@efg.com">
        </div>
    </div>


    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">password</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text-" required="required" type="password" placeholder="Your password">
        </div>
    </div>
   <div class="uk-margin">
        <button class="uk.button uk.button.default" type="submit">LOGIN</button>
    </div>

 <?php require_once "inc/footer.php"?>  

</form>
</body>
</html>