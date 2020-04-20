<?php
session_start();
$unErrors = $passErrors = 0;
$_SESSION['actionType'] = 0;
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
 