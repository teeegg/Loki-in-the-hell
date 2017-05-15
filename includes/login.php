<?php
$session_start();
//$username = mysqli_real_escape_string($_POST['username']);
$username = $_POST["username"];
$password = $_POST["password"];

if ($username == "" || $password == ""){
	echo "<script>alert('Please enter your username/password;'>";
}
else{
	include '../conn.php';
	$user_query = "select * from user where username = '$username'';";
	$result = mysqli_query($connection,$user_query);
  $row = mysqli_fetch_array($result);
	$hashed_pass = $row['password'];
	$decrypt_hash = password_verify($password, $hashed_pass);
	if ($hash == 0){
		header("Location: ../main.php")

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
}

 ?>
