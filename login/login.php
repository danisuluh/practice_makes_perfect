<?php
if (isset($_POST['login'])){
  var_dump($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<h3>Form Login</h3>
<form action="" method="post">
  <input type="text" name="username" id="username" required autofocus><br>
  <input type="password" name="password" id="password" required><br>
  <button type="submit" name="login">Login</button>
  <button type="reset">Reset</button>
</form>
<body>

</body>

</html>