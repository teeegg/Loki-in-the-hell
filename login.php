<?php
session_start();
//$username = mysqli_real_escape_string($_POST['username']);
$email = $_POST["email"];
$password = $_POST["password"];



	include 'conn.php';
	$user_query = "select * from user where email = '$email'";
	$result = mysqli_query($connection,$user_query);
    $row = mysqli_fetch_array($result);
	$hashed_pass = $row['password'];
	$decrypt_hash = password_verify($password, $hashed_pass);
    /*
	if ($hash == 0){
		header("Location: index.html")

	}else {
		$user_query = "select * from user where username = '$username' and password = '$hashed_pass';';";
		$result = mysqli_query($connection,$user_query);
		$row = mysqli_fetch_array($result);
  if (!($row)){
    echo 'Please enter the correct username or register a new account.';
  }else{
		$_SESSION['username'] = $row['username'];
		header("Location: ../mypage.php")
	}
}
    */
    
    if ($decrypt_hash == true){
        $_SESSION['email'] = $email;
        header("Location: index.html");
    }else{
        echo 'password not correct.';
    }


 ?>
