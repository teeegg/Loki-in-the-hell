<?php
session_start();
//$username = mysqli_real_escape_string($_POST['username']);
//prevent sql injection by using mysqli_real_escape_string()
include '../conn.php';

$email = mysqli_real_escape_string($connection,$_POST["email"]);
$password = mysqli_real_escape_string($connection,$_POST["password"]);

// sql statement protected by prepare statement
	$user_query = $connection->prepare("select * from user where email = ?");
    $user_query->bind_param("s", $uemail);

    $uemail = $email;
    
    $user_query->execute();
    
	$result = $user_query->get_result();


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
        header("Location: ../mypage.html");
    }else{
        echo 'password not correct.';
    }


 ?>
