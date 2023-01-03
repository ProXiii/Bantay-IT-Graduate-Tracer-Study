<?php
session_start();

if(isset($_SESSION['currentlyViewingAlumni'])){
    unset($_SESSION['currentlyViewingAlumni']);
}

header("Location: admin_viewAlumni.php");
die;