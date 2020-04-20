<?php
session_start();
$uid = $_SESSION['userid'];
if($_SESSION['usertype'] == 'Admin'){
    $sql = "SELECT * from users left join faculty on users.userid = faculty.userid where users.userid = '$uid'";
    $row = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($row);
    $id = $result['faculty_id'];
}
elseif($_SESSION['usertype'] == 'Student'){
    $sql = "SELECT * from users left join student on users.userid = student.userid where users.userid = '$uid'";
    $row = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($row);
    $id = $result['student_id'];
    $guardian = $result['guardian'];
    $year_level = $result['year_level'];
    $course = $result['course'];
    $school_year = $result['school_year'];
}
$picture = $result['profilePic'];
$lname = $result['lastname'];
$fname = $result['firstname'];
$mname = $result['middlename'];
$email = $result['email'];
$usertype = $result['usertype'];
$address = $result['address'];
$DOB = $result['dob'];
$PlaceOfBirth = $result['place_of_birth'];
$gender = $result['gender'];
$civilStatus = $result['civil_status'];
$contact_Number = $result['contact_number'];