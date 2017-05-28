<?php
session_start();
include '../conn.php';
if (isset($_POST['submit'])){
    // get the image file uploaded
    $file = $_FILES['file'];
    // get the title of the recipe and prevent it from being injected
    $name = mysqli_real_escape_string($connection,$_POST['name']);
    $steps = mysqli_real_escape_string($connection,$_POST['steps']);
    /*
    $ingredient = mysqli_real_escape_string($connection,$_POST['ingredient']);
    */
    // sql statement using prepare statement
    $add_query = $connection->prepare('Insert into recipes VALUES (?,?,?,?)');
    
    /*
    $add_ingredient = $connection->prepare('Insert into ingredient VALUES(?)');
    $add_r_i = $connection->prepare('INSERT INTO recipe_ingredient Values(?,?)');
    */
    
    // generate random unique number as recipe id
    $rid = uniqid('',true);
    $uid = $_SESSION['email'];
    // bind required parameter to the actual ones
    $add_query->bind_param("ssss",$prid,$puid,$pname,$psteps);
    /*
    $add_ingredient->bind_param("s",$pingredient);
    $add_r_i->bind_param("ss",$prid,$pringredient);
    */
    $puid = $uid;
    $prid = $rid;
    $pname = $name;
    $psteps = $steps;
    /*
    $pingredient = $ingredient;
    */
    
    $add_query->execute();
    /*
    $add_ingredient->execute();
    $add_r_i->execute();
    */
    $result = $add_query->get_result();
    
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    
    $fileExtension = strtolower(end(explode(".",$fileName)));
    
    // allowed extension of images
    $allowed_extension = ['jpg','jpeg','png','gif'];
    // check if the extension of uploaded file is correct
        
    if (!($fileError === 0)){
        echo $fileError;
    }   else{
    if ($fileSize > 5000000){
        echo 'Image is too big';
    }else{
    $newName = $rid.".".$fileExtension;
    // file destination
    $fileDes = '../uploads/'.$newName;
    // move file from temp to destination
    move_uploaded_file($fileTmpName,$fileDes);
    
    
    header("Location: ../mypage.html");
    }}
}else{
    echo "Submit not successfully.";
}

?>