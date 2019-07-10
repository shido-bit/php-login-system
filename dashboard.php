<?php 

    // Allow the config
    define('_CONFIG_', true);
    // Require the config
    require_once "inc/config.php"; 
   
forcelogin();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <title>Page Title</title>

    <base href="/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />
  </head>

  <body>

    <div class="uk-section uk-container">
      dashboard  here: you are signed in as user:<?php echo $_SESSION['user_id'];?>
    </div>

    <?php require_once "inc/footer.php"; ?> 
  </body>
</html>
