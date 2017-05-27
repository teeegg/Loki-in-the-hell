<?php
include '../conn.php';
include 'PasswordStorage.php';
$username = $POST['username'];
$password = $POST['password'];

$encrypted_pass = password_hash($password,PASSWORD_DEFAULT);

$register_sql = 'INSERT INTO user (username,passsword);
VALUES ("$username", "$encrypted_pass");';

$check_username_existed_sql = 'SELECT $username FROM user;';
if ($result = mysqli_query($connection, $check_username_existed_sql)){
  echo "User name existed, please type in another one.";
}

$result = mysqli_query($connection, $register_sql);
header("Location: ../main.php");
 ?>
