<?php
// php file used to connect with db
include '../conn.php';
// used to hash and salt 
include 'PasswordStorage.php';
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if ($password != $cpassword){
    die("Password not the same!");
}
// create hashed and salted pwd
$encrypted_pass = password_hash($password,PASSWORD_DEFAULT);


// if email already existed in db, refuse this request
$check_username_existed_sql = 'SELECT "$email" FROM user';
$result = mysqli_query($connection,$check_username_existed_sql);
$row = mysqli_fetch_array($result);
if (is_null($row)){
  echo "Email existed, please type in another one.";
}else{


// insert email and pwd to the db
$register_sql = "INSERT INTO user
VALUES ('$email', '$encrypted_pass')";

$result = mysqli_query($connection, $register_sql);
header('Location:index.php');
}
 ?>
