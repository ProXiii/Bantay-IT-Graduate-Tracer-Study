<?php

session_start();

$con = mysqli_connect("localhost","root","","bantayit_gts");

if(isset($_POST['Submit'])){
    $type= $_POST['Type'];
    // echo $type;

    // foreach($type as $choice){
    //     echo $choice . "<br>";
    //     $insert_query = ("INSERT INTO `educational_attainment`(`Degree`, `Date`)
    //     VALUES(
    //         '$alumni_degree', '$alumni_degreeDate')") or die('query failed');
    
    //     $con->query($insert_query) or die($con->error);
    // }
    
    $i = 0;
    while ($i < count($type)){
        echo $type[$i],", \n";
        $i++;
    }
}

if (isset($_POST['Submit'])) {


    $alumni_Type = $_POST['Type'];
    $i = 0;
    while ($i < count($alumni_Type)) {
        echo $alumni_Type[$i], ", \n";
        $i++;
    }

    $insert_query = ("INSERT INTO `employed_type`(`Type`)
    VALUES(
        '$alumni_Type')") or die('query failed');
};