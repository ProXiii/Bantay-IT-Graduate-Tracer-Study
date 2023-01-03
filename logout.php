<?php
session_start();

if(isset($_SESSION['StudentID'])){
    unset($_SESSION['StudentID']);
}
if(isset($_SESSION['alumni_StudentNumber'])){
    unset($_SESSION['alumni_StudentNumber']);
}
if(isset($_SESSION['AdminID'])){
    unset($_SESSION['AdminID']);
}
if(isset($_SESSION['PartnertID'])){
    unset($_SESSION['PartnertID']);
}

header("Location: login.php");
die;