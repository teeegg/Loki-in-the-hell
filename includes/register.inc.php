<?php    
// php file used to connect with db
include '../conn.php';

$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if ($password != $cpassword){
    die("Password not the same!");
}

// if email already existed in db, refuse this request
$check_username_existed_sql = $connection->prepare('SELECT ? FROM user');
$check_username_existed_sql->bind_param("s",$puid);
$puid = $email;
$check_username_existed_sql->execute();
$result = $check_username_existed_sql->get_result();
$row = mysqli_fetch_array($result);
if (!(is_null($row))){
  echo "Email existed, please type in another one.";
}else{
    // used to hash and salt 
    include '../PasswordStorage.php';
    $pass = new PasswordStorage;
    // create hashed and salted pwd
    $encrypted_pass = $pass->create_hash($password);
    // insert email and pwd to the db
    $register_sql =$connection->prepare("INSERT INTO user
    VALUES (?, ?)");
    $register_sql->bind_param("ss",$uemail,$pass);
    $uemail = $email;
    $pass = $encrypted_pass;
    $register_sql->execute();
    header('Location:../index.php');
}
 ?>
