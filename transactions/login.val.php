<?php
if(isset($_POST['submit'])){
    session_start();    
    $password = $_POST['password'];
    $user = $_POST['username'];
    
    $sql = "SELECT * from users where username = '$user' and password = '$password'";
    $row = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($row);
    
    if(mysqli_num_rows($row) != 0){
        $_SESSION['userid'] = $userid = $result["userid"];
        $_SESSION['usertype'] = $result["usertype"];
        $user = $result["username"];
        $usertype = $result["usertype"];

        if($usertype == 'Admin'){ 
            proceed($userid, $user, 'admin');
        }
        elseif($usertype == 'Student'){
            proceed($userid, $user, 'my');
        }
    }
    else{
        echo "<div class='alert alert-danger role='alert' style='border:1px solid red; color:red; font-size:11px'>The username and password you've entered doesn't match any account</div>";
    }
}

function proceed($userid, $user, $destination){
    include 'utilities/dbconnect.util.php'; 
    $sql = "UPDATE users set last_login = sysdate() where userid = '$userid'";
    mysqli_query($conn, $sql);
    header('location:'.$destination.'?user='.$user);
}

?>