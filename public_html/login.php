<?php

//ログイン

require_once(__DIR__ . '/../config/config.php');

//$app = new MyApp\Controller\Login();
//
//$app->run();

//echo 'login screen';
//exit;

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div id="container">
    <form action="" method="POST">
      <p>
        <input type="text" name="email" placeholder="email">
      </p>
      <p>
        <input type="text" name="password" placeholder="password">
      </p>
      <div class="btn">
        Log In
      </div>
      <p class="fs12"><a href="/public_html/signup.php">
        Sign Up
      </a></p>
    </form>
  </div>
</body>
</html>