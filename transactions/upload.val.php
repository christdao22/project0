<?php
session_start();
$error = 0;
$_SESSION['profile_pic'] = 'default.png';
$error_image_array = array(
    ' Image should not more than 10mb to upload',
    ' Invalid Type'
); 

if (isset($_FILES["imageToUpload"])) {
    $image = $_FILES["imageToUpload"];
    $name = $image['name'];
    $type = $image['type'];
    $size = $image['size'];
    $tmp = $image['tmp_name'];

    $error = validateImage($size, $type, $name, $tmp);
    if($error == 0){
        $destination = "../uploads/" . basename($name);
        upload($name, $tmp, $destination);
        if($_SESSION['actionType'] == 0){
            echo "register";
            $_SESSION['profile_pic'] = $name;           
            header("location: form.php?user=".$_SESSION['username']);
        }
        
        if ($_SESSION['actionType'] == 1){
            global $conn;
            $_SESSION['profile_pic'] = $name;
            $destination = "uploads/" . basename($name);
            $userid = $_SESSION['userid'];
            $sql = "UPDATE users set profilePic = '$destination' where userid = '$userid'";
            mysqli_query($conn, $sql); 
            header("location: ../admin/account.php?user=".$userid);
        } 
    }
}
 
?>