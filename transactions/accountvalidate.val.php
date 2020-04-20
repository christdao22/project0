<?php
session_start();
$unErrors = $passErrors = 0;
global $cpass, $cusername;
if (isset($_POST['submit'])) {
    if($_SESSION['actionType'] != 1){
        $_SESSION['actionType'] = 0;
        $uname = $_POST['username'];
        $pass = $_POST['password'];
        $repass = $_POST['repass'];
        $usertype = 'student';
    
    
        $unErrors = validateUname($uname);
        $passErrors = validatePass($pass, $repass);
        if ($unErrors == 0 && $passErrors == 0) {
            move($uname, $pass, $usertype);
        }
    }
    else if($_SESSION['actionType'] == 1){
        $userid = $_SESSION['userid'];
        if($cpass){
            $oldpass = $_POST['oldpassword'];
            $pass = $_POST['password'];
            $repass = $_POST['repass'];
    
            $sql = "SELECT password from users where userid = $userid";
            $row = mysqli_query($conn, $sql);
            $result = mysqli_fetch_assoc($row);
    
            if($oldpass == $result['password']){
                // $passErrors = 12;
                $passErrors = validatePass($pass, $repass);
                if ($passErrors == 0) {
                    $sql = "UPDATE users SET password = '$pass' WHERE userid = '$userid'";
                    mysqli_query($conn, $sql);
                    header("location: ../admin/account.php?user=".$_SESSION['userid']);
                }
            }
    
            else {
                // You must enter the same password
                $passErrors = 15;
            }
        }
        elseif($cusername){
            $uname = $_POST['username'];
            $unErrors = validateUname($uname);
            if($unErrors == 0 ){
                $sql = "UPDATE users SET username = '$uname' WHERE userid = '$userid'";
                mysqli_query($conn, $sql);
                header("location: ../admin/account.php?user=".$_SESSION['userid']);
            }
        }
    }
}
 


//  change filename register to accountval