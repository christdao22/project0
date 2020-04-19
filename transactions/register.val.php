<?php
session_start();
$unErrors = $passErrors = 0;
if (isset($_POST['submit'])) {

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

function move($uname, $pass, $usertype){
    $_SESSION['username'] = $uname;
    $_SESSION['password'] = $pass;
    $_SESSION['usertype'] = $usertype;
    header("location: upload.php?user=" . $uname);
}

function validateUname($str)
{
    global $conn;
    $sql = "SELECT * from users where username='$str'";
    $row = mysqli_query($conn, $sql);
    if (isEmpty($str) || isLenLessthanTwo($str) || isStartWithSpecialChar(trim($str)) || isContainHtmlTag($str)) {
        return 11;
    }
    if (mysqli_num_rows($row) != 0) {
        return 10;
    }
}

function validatePass($pass, $repass){
    if (isPassValid($pass) || isPassValid($repass)) {
        return 13;
    } 
    if (($pass != $repass)) {
        return 12;
    }
}

function isPassValid($pass)
{
    if (isEmpty($pass) || isContainHtmlTag($pass)) {
        return true;
    }
}
