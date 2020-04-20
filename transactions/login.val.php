<?php
session_start();
if(isset($_POST['submit'])){   
    $password = $_POST['password'];
    $uname = $_POST['username'];
    
    $sql = "SELECT * from users where username = '$uname' and password = '$password'";
    $row = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($row);
    
    if(mysqli_num_rows($row) != 0){
        $_SESSION['userid'] = $userid = $result["userid"];
        $_SESSION['usertype'] = $result["usertype"];
        $_SESSION['actionType'] = 1;
        $uname = $result["username"];
        $usertype = $result["usertype"];

        if($usertype == 'Admin'){ 
            $_SESSION['directory'] = "admin";
            proceed($userid, $uname, 'admin');
        }
        elseif($usertype == 'Student'){
            $_SESSION['directory'] = "my";
            proceed($userid, $uname, 'my');
        }
    }
    else{
        echo "<div class='alert alert-danger role='alert' style='border:1px solid red; color:red; font-size:11px'>The username and password you've entered doesn't match any account</div>";
    }
}

function proceed($userid, $uname, $destination){
    include 'utilities/dbconnect.util.php'; 
    $sql = "UPDATE users set last_login = sysdate() where userid = '$userid'";
    mysqli_query($conn, $sql);
    header('location:'.$destination.'?user='.$uname);
}

?>