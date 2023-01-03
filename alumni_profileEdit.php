<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
// $user_form = check_form($con);

if (!isset($_SESSION)) {
    session_start();
}

error_reporting(0);

$host = 'localhost';
$username = "root";
$password = "";
$database = "bantayit_gts";

$con = new mysqli($host, $username, $password, $database);

if ($con->connect_error) {
    echo $con->connect_error;
}



if (isset($_POST['edits'])) {
    $update_alumni_lastName = $_POST['lastName'];
    $update_alumni_firstName = $_POST['firstName'];
    $update_alumni_middleName = $_POST['middleName'];
    $update_alumni_studentNum = $_POST['studentNum'];
    $update_alumni_emailAdd = $_POST['emailAdd'];
    $update_alumni_contactNum = $_POST['contactNum'];
    $update_alumni_presentAddress = $_POST['presentAddress'];
    $update_alumni_birthday = $_POST['birthday'];
    $update_alumni_AppSource = $_POST['AppSource'];
    $update_alumni_civilStat = $_POST['civilStat'];
    $update_alumni_yearGraduated = $_POST['yearGraduated'];

    $update_alumni_degree = $_POST['degree'];
    $degree = "";
    foreach ($update_alumni_degree as $degreePick) {
        $degree .= $degreePick . ", ";
    }

    $update_alumni_degreeDate = $_POST['degreeDate'];
    $degreeDate = "";
    foreach ($update_alumni_degreeDate as $degreeDatePick) {
        $degreeDate .= $degreeDatePick . ", ";
    }

    $update_alumni_seminar = $_POST['seminar'];
    $seminar = "";
    foreach ($update_alumni_seminar as $seminarPick) {
        $seminar .= $seminarPick . ", ";
    }

    $update_alumni_seminarDate = $_POST['seminarDate'];
    $seminarDate = "";
    foreach ($update_alumni_seminarDate as $seminarDatePick) {
        $seminarDate .= $seminarDatePick . ", ";
    }

    $update_alumni_license = $_POST['license'];
    $license = "";
    foreach ($update_alumni_license as $licensePick) {
        $license .= $licensePick . ", ";
    }

    $update_alumni_licenseDate = $_POST['licenseDate'];
    $licenseDate = "";
    foreach ($update_alumni_licenseDate as $licenseDatePick) {
        $licenseDate .= $licenseDatePick . ", ";
    }


    $update_alumni_certificate = $_POST['certificate'];
    $certificate = "";
    foreach ($update_alumni_certificate as $certificatePick) {
        $certificate .= $certificatePick . ", ";
    }

    $update_alumni_certificateDate = $_POST['certificateDate'];
    $certificateDate = "";
    foreach ($update_alumni_certificateDate as $certificateDatePick) {
        $certificateDate .= $certificateDatePick . ", ";
    }

    $update_alumni_skills = $_POST['skills'];
    $skills = "";
    foreach ($update_alumni_skills as $skillsPick) {
        $skills .= $skillsPick . ", ";
    }

    $update_alumni_example = $_POST['example'];
    $update_alumni_Type = $_POST['Type'];
    $type = "";
    foreach ($update_alumni_Type as $pick) {
        $type .= $pick . ", ";
    }

    $update_alumni_companyName = $_POST['companyName'];
    $update_alumni_workPlace = $_POST['workPlace'];
    $update_alumni_position = $_POST['position'];
    $update_alumni_yearsEmployed = $_POST['yearsEmployed'];
    $update_alumni_initialGross = $_POST['initialGross'];
    $update_alumni_companyAdd = $_POST['companyAdd'];
    $update_alumni_howFirstJob = $_POST['howFirstJob'];
    $update_alumni_howLongFirstJob = $_POST['howLongFirstJob'];
    $update_alumni_example2 = $_POST['example2'];
    $update_alumni_example3 = $_POST['example3'];
    $update_alumni_reason = $_POST['reason'];
    $update_alumni_competencies = $_POST['competencies'];
    $update_alumni_whyUBLC = $_POST['whyUBLC'];
    $update_alumni_strengthsWeaknesses = $_POST['strengthsWeaknesses'];
    $update_alumni_improvements = $_POST['improvements'];
    $update_alumni_image = $_FILES['p_image']['name'];
    $update_alumni_image_tmp_name = $_FILES['p_image']['tmp_name'];
    $update_alumni_image_folder = './images/' . $update_alumni_image;

    $insert_query = mysqli_query($con, "UPDATE form_answers 
    SET alumni_Picture = '$update_alumni_image', alumni_LastName = '$update_alumni_lastName', alumni_FirstName = '$update_alumni_firstName', alumni_MiddleName = '$update_alumni_middleName',
    alumni_StudentNumber = '$update_alumni_studentNum', alumni_Email = '$update_alumni_emailAdd', alumni_ContactNumber = '$update_alumni_contactNum',
    alumni_Address = '$update_alumni_presentAddress', alumni_Birthday = '$update_alumni_birthday', alumni_Gender = '$update_alumni_AppSource',
     alumni_CivilStatus = '$update_alumni_civilStat', alumni_YearGraduated = '$update_alumni_yearGraduated', alumni_Degree = '$degree', 
     alumni_DegreeDate = '$degreeDate', alumni_Seminar = '$seminar', alumni_SeminarDate = '$seminarDate',
      alumni_License = '$license', alumni_LicenseDate = '$licenseDate', alumni_Certificate = '$certificate',
       alumni_CertificateDate = '$certificateDate', alumni_Skills = '$skills', alumni_EmployementStatus = '$update_alumni_example', 
       alumni_EmployedType = '$type', alumni_EmployedCompany = '$update_alumni_companyName', alumni_EmployedPlaceOfWork = '$update_alumni_workPlace',
        alumni_EmployedJobPosition = '$update_alumni_position', alumni_EmployedYearsEmployed = '$update_alumni_yearsEmployed',
         alumni_EmployedInitialGross = '$update_alumni_initialGross', alumni_EmployedAddressOfWork = '$update_alumni_companyAdd',
          alumni_EmployedHowFirstJob = '$update_alumni_howFirstJob', alumni_EmployedHowLongDidItTakeToFindFirstJob = '$update_alumni_howLongFirstJob',
           alumni_JobRelatedToCourse = '$update_alumni_example2', alumni_CurriculumRelevant = '$update_alumni_example3', alumni_Competencies = '$update_alumni_competencies',
            alumni_ReasonUnemployment = '$update_alumni_reason', alumni_ThoughtsUBLC = '$update_alumni_whyUBLC', alumni_Suggestions1 = '$update_alumni_strengthsWeaknesses',
             alumni_Suggestions2 = '$update_alumni_improvements' WHERE alumni_StudentNumber = $_SESSION[alumni_StudentNumber]");

    if ($insert_query) {
        move_uploaded_file($update_alumni_image_tmp_name, $update_alumni_image_folder);
        $message[] = 'Profile Updated Successfully';
        header('location:alumni_profile.php');
    } else {
        $message[] = 'Profile Could Not Be Updated';
        header('location:alumni_profile.php');
    }

    // $con->query($insert_query) or die($con->error);
};

// if (isset($_POST['SubmitDegree'])) {

//     $alumni_degree = $_POST['degree'];
//     $alumni_degreeDate = $_POST['degreeDate'];

//     $insert_query = ("INSERT INTO `educational_attainment`(`alumni_Degree`, `alumni_DegreeDate`)
//     VALUES(
//         '$alumni_degree', '$alumni_degreeDate', )") or die('query failed');

//     $con->query($insert_query) or die($con->error);
// };

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B a n t a y I T</title>
    <link rel="stylesheet" href="alumni_form.css">
    <link rel="icon" href="./images/UBlogo.png">
</head>

<body>
    <header>
        <a href="login.php" class="logo">
            <img src="./images/UBlogo.png" alt="">
        </a>
        <h1 style="color: white; position: relative; right: 265px">

            Bantay IT : Graduate Tracer
        </h1>

        <h2 style="color: #F9AE3B; bottom: 15px">EDIT ALUMNI FORM</h2>
        <!-- <a style="text-decoration: none;" href=""><h3 style="color: white; position: relative; top: 20px; left: 95px;">Alumni</h3></a>
        <a style="text-decoration: none;"  href="admin_login.php"><h3 style="color: white; position: relative; top: 20px; left: 50px;">Admin</h3></a>
        <a style="text-decoration: none;"  href="partner_login.php"><h3 style="color: white; position: relative; top: 20px; ">Partner</h3></a> -->


    </header>
    <div class="center">
        <!-- <h1>A. General Information</h1> -->
        <?php
        if (isset($_GET['edit'])) {
            $edit_id = $_GET['edit'];
            $edit_query = mysqli_query($con, "SELECT * FROM form_answers WHERE alumni_StudentNumber = $_SESSION[alumni_StudentNumber]");
            if (mysqli_num_rows($edit_query) > 0) {
                while ($fetch_edit = mysqli_fetch_assoc($edit_query)) {
        ?>

                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="details">
                            <h1>A. General Information</h1>
                            <hr>
                            <label style="letter-spacing: 6px;">INSERT PROFILE IMAGE : </label>
                            <input style="margin-bottom:25px; padding-left:15px" type="file" name="p_image" accept="image/png, image/jpg, image/jpeg">

                            <label style="position:relative; right:619px; top: 45px" for="">N A M E :</label>
                            <div style="width: 1150px; margin-top:30px" class="row">
                                <div style="width: 250px;" class="txt_field">
                                    <!-- <label for="uname">Last Name</label> -->
                                    <input type="text" name="lastName" placeholder="Last Name" value="<?php echo $fetch_edit['alumni_LastName']; ?>">
                                </div>
                                <div style="width: 300px;" class="txt_field">
                                    <!-- <label for="uname">First Name</label> -->
                                    <input type="text" name="firstName" placeholder="First Name" value="<?php echo $fetch_edit['alumni_FirstName']; ?>">
                                </div>
                                <div style="width: 300px;" class="txt_field">
                                    <!-- <label for="uname">Middle Name</label> -->
                                    <input type="text" name="middleName" placeholder="Middle Name" value="<?php echo $fetch_edit['alumni_MiddleName']; ?>">
                                </div>
                            </div>

                            <label for="">C O N T A C T S : </label>
                            <div style="width: 1150px; margin-top:10px" class="row">
                                <div style="width: 250px;" class="txt_field">
                                    <label for="uname"></label>
                                    <input type="text" name="studentNum" placeholder="Student Number" value="<?php echo $fetch_edit['alumni_StudentNumber']; ?>">
                                </div>
                                <div style="width: 300px;" class="txt_field">
                                    <label></label>
                                    <input type="email" name="emailAdd" placeholder="Email" value="<?php echo $fetch_edit['alumni_Email']; ?>">
                                </div>
                                <div style="width: 300px;" class="txt_field">
                                    <label></label>
                                    <input type="text" name="contactNum" placeholder="Contact Number" value="<?php echo $fetch_edit['alumni_ContactNumber']; ?>">
                                </div>
                            </div>
                            <label for="">A D D R E S S : </label>
                            <div style="width: 1150px; margin-top:10px" class="row">
                                <div style="width: 959px;" class="txt_field">
                                    <input type="text" name="presentAddress" placeholder="Present Address" value="<?php echo $fetch_edit['alumni_Address']; ?>">
                                </div>

                            </div>


                            <div style="position: relative; top:10px; margin-bottom:55px;" class="row">
                                <label for="start">B I R T H D A Y : </label>

                                <!-- <input style="margin-left: 54px; margin-right:223px; width:185px" type="date" id="start" name="trip-start" value="2022-01-01" min="1990-01-01" max="2022-12-31"> -->
                                <div class="surveyOptions">

                                    <input style="margin-left: 54px; margin-right:46px;width: 229px;" type="date" name="birthday" class="survey_options" value="<?php echo $fetch_edit['alumni_Birthday']; ?>">
                                </div>

                                <label style="margin-right: 115px; ">G E N D E R : </label>
                                <input type="radio" name="AppSource" value=Male>Male
                                <input style="margin-left:40px" type="radio" name="AppSource" value=Female> Female

                            </div>
                            <div style="margin-bottom:55px; width: 1000px;" class="row">
                                <label style="margin-right: 15px; letter-spacing:3px">CIVIL STATUS : </label>
                                <!-- <input type="password" id="password" name="password" > -->
                                <!-- Select your state: -->
                                <div class="surveyOptions">
                                    <select style="width: 229px; margin-right:45px" name="civilStat">
                                        <!-- <OPTION VALUE=> -->
                                        <OPTION VALUE=><?php echo $fetch_edit['alumni_CivilStatus']; ?>
                                        <OPTION VALUE="Single">Single
                                        <OPTION VALUE="Married">Married
                                        <OPTION VALUE="Seperated">Seperated
                                        <OPTION VALUE="Single Parent">Single Parent
                                        <OPTION VALUE="Widowed / Widower">Widowed / Widower
                                    </select>
                                </div>
                                <!-- <select style="width: 185px; margin-right:124px" name="yearGraduated">
                        <OPTION VALUE=>
                        <OPTION VALUE=single>Single
                        <OPTION VALUE=married>Married
                        <OPTION VALUE=seperated>Seperated
                        <OPTION VALUE=singleParent>Single Parent
                        <OPTION VALUE=widow>Widowed / Widower
                    </select> -->
                                <label style="margin-right: 15px; letter-spacing: 3px ">YEAR GRADUATED : </label>
                                <!-- <input type="password" id="password" name="password" > -->
                                <!-- Select your state: -->
                                <div class="surveyOptions">
                                    <select style="width: 185px;" name="yearGraduated">
                                        <OPTION VALUE=> "<?php echo $fetch_edit['alumni_YearGraduated']; ?>"
                                        <OPTION VALUE=2015>2015
                                        <OPTION VALUE=2016>2016
                                        <OPTION VALUE=2017>2017
                                        <OPTION VALUE=2018>2018
                                        <OPTION VALUE=2019>2019
                                        <OPTION VALUE=2020>2020
                                        <OPTION VALUE=2021>2021
                                        <OPTION VALUE=2022>2022
                                    </select>
                                </div>


                            </div>

                        </div>

                        <!-- <div class="surveyOptions" id="survey_options">
                <input type="text" name="survey_options[]" class="survey_options" size="50" placeholder="Degree & Specialization">
                <label style="margin-right: 10px;">Date Completed : </label>
                <input style="width: 170px;" type="date" name="survey_options[]" class="survey_options">
            </div>
            <div class="controls">
                <a href="#" id="add_more_fields"><input type="button" value="Add More" name="Submit" onclick="return false"></a>

            </div>
            <div class="controls">
                <a href="#" id="remove_fields"><input type="button" value="Remove" name="Submit" onclick="return false"></a>
            </div> -->


                        <!-- <div class=".surveyOptions" id="survey_options">
                <input type="text" name="survey_options[]" class="survey_options" size="50" placeholder="Degree & Specialization">
                <input type="date" name="survey_options[]" class="survey_options">
            </div>
            <div class="controls">
                <a href="#" id="add_more_fields"><input type="button" value="Add More" name="Submit" onclick="return false"></a>

            </div>
            <div class="controls">
                <a href="#" id="remove_fields"><input type="button" value="Remove" name="Submit" onclick="return false"></a>
            </div> -->

                        <div style="height: 100%; " class="details">
                            <div class="loc" id="goHere"></div>
                            <h1>B. Educational Background</h1>
                            <hr>
                            <label style="letter-spacing: 6px;">EDUCATIONAL ATTAINMENT :</label>

                            <!-- <div style="height:50px" id="educationalAttainment" class="row">
                    <div class="txt_field">

                        <input style="margin-top:15px; margin-bottom:35px; display:block" type="text" name="attainment" placeholder="Degree & Specialization">
                    </div>

                    <label for="start">Date Completed : </label>

                    <input style="margin-left: 15px; margin-right:50px; width:155px" type="date" id="start" name="trip-start" placeholder="Date Taken : " value="2022-01-01" min="1990-01-01" max="2022-12-31">
                </div>
               

                <div id="addEducationalAttainment" style="width: 400px; height:35px; " class="button">
                    <a href="#goHere"><input type="button" value="Add More" name="Submit"></a>


                </div>
                <div style="width: 400px; height:35px; position:relative; left: 250px; bottom: 60px" class="button">
                    <a href="#"><input id="removeEducationalAttainment" type="button" value="Remove" name="Submit"></a>
                </div> -->
                            <div class="surveyOptions" id="survey_options">
                                <input type="text" name="degree[]" class="survey_options" size="50" placeholder="Degree & Specialization" value="<?php echo $fetch_edit['alumni_Degree']; ?>">
                                <label style="margin-right: 10px;">DATE COMPLETED : </label>
                                <input style="width: 170px;" type="text" name="degreeDate[]" class="survey_options" value="<?php echo $fetch_edit['alumni_DegreeDate']; ?>">
                            </div>
                            <div class="controls">
                                <a href="#" id="add_more_fields"><input type="button" value="Add More" name="Submit" onclick="return false"></a>

                            </div>
                            <div class="controls">
                                <a href="#" id="remove_fields"><input type="button" value="Remove" name="Submit" onclick="return false"></a>
                            </div>
                        </div>


                        <div style="height: 100%; " class="details">
                            <!-- <div style="position:relative; bottom:60px" class="group"> -->
                            <label style="letter-spacing: 6px">SEMINAR(S) / TRAINING(S) ATTENDED :</label>
                            <div class="surveyOptions" id="survey_options2">
                                <input type="text" name="seminar[]" class="survey_options" size="50" placeholder="Name of Seminar / Training Attended" value="<?php echo $fetch_edit['alumni_Seminar']; ?>">
                                <label style="margin-right: 10px;">DATE COMPLETED : </label>
                                <input style="width: 170px;" type="text" name="seminarDate[]" class="survey_options" value="<?php echo $fetch_edit['alumni_SeminarDate']; ?>">
                            </div>
                            <div class="controls">
                                <a href="#" id="add_more_fields2"><input type="button" value="Add More" name="Submit" onclick="return false"></a>

                            </div>
                            <div class="controls">
                                <a href="#" id="remove_fields2"><input type="button" value="Remove" name="Submit" onclick="return false"></a>
                            </div>

                        </div>
                        <div style="height: 100%; " class="details">
                            <!-- <div style="position:relative; bottom:170px" class="group"> -->
                            <label style="letter-spacing: 6px">PROFESSIONAL LICENSE :</label>
                            <div class="surveyOptions" id="survey_options3">
                                <input type="text" name="license[]" class="survey_options" size="50" placeholder="Name of Examination" value="<?php echo $fetch_edit['alumni_License']; ?>">
                                <label style="margin-right: 10px;">DATE COMPLETED : </label>
                                <input style="width: 170px;" type="text" name="licenseDate[]" class="survey_options" value="<?php echo $fetch_edit['alumni_LicenseDate']; ?>">
                            </div>
                            <div class="controls">
                                <a href="#" id="add_more_fields3"><input type="button" value="Add More" name="Submit" onclick="return false"></a>

                            </div>
                            <div class="controls">
                                <a href="#" id="remove_fields3"><input type="button" value="Remove" name="Submit" onclick="return false"></a>
                            </div>

                        </div>
                        <div style="height: 100%; " class="details">
                            <!-- <div style="position:relative; bottom:170px" class="group"> -->
                            <label style="letter-spacing: 6px">PROFESSIONAL CERTIFICATE :</label>
                            <div class="surveyOptions" id="survey_options5">
                                <input type="text" name="certificate[]" class="survey_options" size="50" placeholder="Name of Certificate" value="<?php echo $fetch_edit['alumni_Certificate']; ?>">
                                <label style="margin-right: 10px;">DATE COMPLETED : </label>
                                <input style="width: 170px;" type="text" name="certificateDate[]" class="survey_options" value="<?php echo $fetch_edit['alumni_CertificateDate']; ?>">
                            </div>
                            <div class="controls">
                                <a href="#" id="add_more_fields5"><input type="button" value="Add More" name="Submit" onclick="return false"></a>

                            </div>
                            <div class="controls">
                                <a href="#" id="remove_fields5"><input type="button" value="Remove" name="Submit" onclick="return false"></a>
                            </div>

                        </div>
                        <!-- <div style="margin-bottom: 10px;position:relative;bottom:200px;" class="group"> -->
                        <div style="height: 100%; " class="details">
                            <h1>C. Expertise</h1>
                            <hr>
                            <label style="letter-spacing: 8px;">TECHNICAL SKILLS :</label>
                            <div class="surveyOptions" id="survey_options4">
                                <input type="text" name="skills[]" class="survey_options" size="50" placeholder="Skill" value="<?php echo $fetch_edit['alumni_Skills']; ?>">
                                <!-- <label style="margin-right: 10px;">DATE COMPLETED : </label> -->
                                <!-- <input style="width: 170px;" type="date" name="survey_options[]" class="survey_options"> -->
                            </div>
                            <div class="controls">
                                <a href="#" id="add_more_fields4"><input type="button" value="Add More" name="Submit" onclick="return false"></a>

                            </div>
                            <div class="controls">
                                <a href="#" id="remove_fields4"><input type="button" value="Remove" name="Submit" onclick="return false"></a>
                            </div>
                        </div>
                        <!-- <div class="details">
                <h1>C. Skillset</h1>
                <hr>
                <div class="row">
                    <div class="txt_field">
                        <label for="uname">Username</label>
                        <input type="text" id="uname" name="uname" >
                    </div>
                    <div class="txt_field">
                        <label>Email</label>
                        <input type="email" name="emailadd" >
                    </div>
                </div>

                <div class="txt_field">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" >
                </div>
                <div class="txt_field">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" name="cpassword" >
                </div>
            </div> -->



                        <!-- <div class="details">
                <h1>D. Seminar(s) / Training(s) Attended</h1>
                <hr>
                <div class="row">
                    <div class="txt_field">
                        <label for="uname">Username</label>
                        <input type="text" id="uname" name="uname" placeholder="Name of Seminar / Training Attended" >
                    </div>
                    <label for="start">Date Taken : </label>

                    <input style="margin-left: 15px; margin-right:50px; width:155px" type="date" id="start" name="trip-start" value="2022-01-01" min="1990-01-01" max="2022-12-31">
                </div>
            </div> -->

                        <!-- <div class="details">
                <h1>E. Professional Examinations</h1>
                <hr>
                <div class="row">
                    <div class="txt_field">
                        <label for="uname">Username</label>
                        <input type="text" id="uname" name="uname" placeholder="Name of Examination" >
                    </div>
                    <label for="start">Date Taken : </label>

                    <input style="margin-left: 15px; margin-right:50px; width:155px" type="date" id="start" name="trip-start" value="2022-01-01" min="1990-01-01" max="2022-12-31">
                </div>


            </div> -->


                        <div style="margin-top: 40px;" class="details">
                            <h1>D. Employment Profile</h1>
                            <hr>
                            <div class="row">
                                <div style="width: 600px;" class="txt_field">
                                    <label style="letter-spacing: 6px">EMPLOYMENT STATUS :</label>
                                </div>
                            </div>

                            <!-- <input type="radio" name="Status" value=unemployed>Employed
                <input style="margin-left:40px" type="radio" name="Status" value=employed>Unemployed -->

                            <div class="radios">
                                <input type="radio" id="show" name="example" value="Employed" />
                                <label for="show">Employed</label>
                            </div>

                            <div class="radios">
                                <input style="margin-left: 35px;" type="radio" id="shows" name="example" value="Unemployed" />
                                <label for="shows">Unemployed</label>
                            </div>

                            <div id="box">
                                <label>EMPLOYMENT TYPE :</label>

                                <input type="checkbox" name="Type[]" value="Full – Time" for="Status">Full – Time
                                <input style="margin-left: 35px;" type="checkbox" name="Type[]" value="Part – Time" for="Status2">Part – Time
                                <input style="margin-left: 35px;" type="checkbox" name="Type[]" value="Freelance" for="Status3">Freelance

                                <label style="margin-bottom: 0px;margin-top:30px">EMPLOYMENT DATA :</label>
                                <div class="surveyOptions" id="survey_options5">
                                    <!-- <input type="text" placeholder="Type of Organization"> -->
                                    <div style="margin-bottom: 0px;" class="txt_field">
                                        <label style="margin-top: 15px;">Name of the Company</label>
                                        <input style="margin-bottom: 0px;" type="text" name="companyName" placeholder="" value="<?php echo $fetch_edit['alumni_EmployedCompany']; ?>">
                                    </div>
                                    <div style="margin-bottom: 0px;" class="txt_field">
                                        <label style="margin-right: 15px; letter-spacing:3px">Place of Work </label>

                                        <div class="surveyOptions">
                                            <select style="width: 285px; margin-right:45px;margin-bottom: 0px;" name="workPlace">
                                                <OPTION VALUE=> <?php echo $fetch_edit['alumni_EmployedPlaceOfWork']; ?>
                                                <OPTION VALUE=Local>Local
                                                <OPTION VALUE=Abroad>Abroad

                                            </select>
                                        </div>
                                    </div>
                                    <div style="margin-bottom: 0px;" class="txt_field">
                                        <label style="margin-top: 15px;letter-spacing:1px;">Position in the Company</label>
                                        <input style="margin-bottom: 0px;width: 400px;" type="text" name="position" placeholder="" value="<?php echo $fetch_edit['alumni_EmployedJobPosition']; ?>">
                                    </div>
                                    <div style="margin-bottom: 0px;" class="txt_field">
                                        <label style="margin-top: 15px;letter-spacing:1px;">Years Employed</label>
                                        <input style="margin-bottom: 0px;width: 285px;" type="text" name="yearsEmployed" placeholder="" value="<?php echo $fetch_edit['alumni_EmployedYearsEmployed']; ?>">
                                    </div>

                                    <div style="margin-bottom: 0px;" class="txt_field">
                                        <label style="margin-right: 15px; letter-spacing:3px">Monthly Earnings</label>

                                        <div class="surveyOptions">
                                            <select style="width: 739px; margin-right:45px;margin-bottom: 0px;" name="initialGross">
                                                <OPTION VALUE=> <?php echo $fetch_edit['alumni_EmployedInitialGross']; ?>
                                                <OPTION VALUE="Below P5,000.00">Below P5,000.00
                                                <OPTION VALUE="P5,000.00 to less than P10,000.00">P5,000.00 to less than P10,000.00
                                                <OPTION VALUE="P10,000.00 to less than P15,000.00">P10,000.00 to less than P15,000.00
                                                <OPTION VALUE="P15,000.00 to less than P20,000.00">P15,000.00 to less than P20,000.00
                                                <OPTION VALUE="P20,000.00 to less than P25,000.00">P20,000.00 to less than P25,000.00
                                                <OPTION VALUE="P25,000.00 and above">P25,000.00 and above
                                                <OPTION VALUE="Prefer to not answer">Prefer to not answer

                                            </select>
                                        </div>
                                    </div>

                                    <!-- <div style="margin-bottom: 0px;" class="txt_field">
                            <label style="margin-top: 15px;letter-spacing:1px;">Position in the Company</label>
                            <input style="margin-bottom: 0px;width: 285px;" type="text" name="position" placeholder="">
                        </div> -->

                                    <div style="width: 800px; margin-bottom:0px" class="txt_field">
                                        <label for="">Address of the Company</label>
                                        <input style="width: 739px; margin-bottom:0px" type="text" name="companyAdd" placeholder="" value="<?php echo $fetch_edit['alumni_EmployedAddressOfWork']; ?>">
                                    </div>

                                    <div style="margin-bottom: 0px; width: 739px;" class="txt_field">
                                        <label style="margin-right: 15px; letter-spacing:3px">How did you find your first job?</label>

                                        <div class="surveyOptions">
                                            <select style="width: 739px; margin-right:45px;margin-bottom: 0px;" name="howFirstJob">
                                                <OPTION VALUE=> <?php echo $fetch_edit['alumni_EmployedHowFirstJob']; ?>
                                                <OPTION VALUE="Response to an advertisement">Response to an advertisement
                                                <OPTION VALUE="As walk-in applicant">As walk-in applicant
                                                <OPTION VALUE="Recommended by someone">Recommended by someone
                                                <OPTION VALUE="Information from friends">Information from friends
                                                <OPTION VALUE="Arranged by school's job placement officer">Arranged by school's job placement officer
                                                <OPTION VALUE="Family business">Family business
                                                <OPTION VALUE="Job fair or Public Employment Service Office (PESO)">Job fair or Public Employment Service Office (PESO)
                                                <OPTION VALUE="Other">Other
                                            </select>
                                        </div>
                                    </div>
                                    <div style="margin-bottom: 0px;width: 739px;" class="txt_field">
                                        <label style="margin-right: 15px; letter-spacing:3px;width: 600px;">How long did it take you to land your first job?</label>

                                        <div class="surveyOptions">
                                            <select style="width: 739px; margin-right:45px;margin-bottom: 0px;" name="howLongFirstJob">
                                                <OPTION VALUE=> <?php echo $fetch_edit['alumni_EmployedHowLongDidItTakeToFindFirstJob']; ?>
                                                <OPTION VALUE="Less the a month">Less the a month
                                                <OPTION VALUE="1 to 6 months">1 to 6 months
                                                <OPTION VALUE="7 to 11 months">7 to 11 months
                                                <OPTION VALUE="1 year to less than 2 years">1 year to less than 2 years
                                                <OPTION VALUE="2 years to less than 3 years">2 years to less than 3 years
                                                <OPTION VALUE="3 years to less than 4 years">3 years to less than 4 years
                                                <OPTION VALUE="4 years or more">4 years or more
                                            </select>
                                        </div>
                                    </div>
                                    <!-- <div style="margin-bottom: 0px;width: 739px;" class="txt_field">
                            <label style="margin-right: 15px; letter-spacing:3px" for="password">Is your first job related to the course you took up in college?</label>

                            <div class="surveyOptions">
                                <select style="width: 739px; margin-right:45px;margin-bottom: 0px;" name="yearGraduated">
                                    <OPTION VALUE=>
                                    <OPTION VALUE=single>LESS THAN A MONTH
                                    <OPTION VALUE=married>1 TO 6 MONTHS
                                    <OPTION VALUE=married>7 TO 11 MONTHS
                                    <OPTION VALUE=married>1 YEAR TO LESS THAN 2 YEARS
                                    <OPTION VALUE=married>2 YEARS TO LESS THAN 3 YEARS
                                    <OPTION VALUE=married>3 YEARS TO LESS THAN 4 YEARS
                                    <OPTION VALUE=married>4 YEARS OR MORE
                                </select>
                            </div>
                        </div> -->
                                    <div style="margin-bottom: 0px;width: 739px;" class="txt_field">
                                        <label style="margin-right: 15px; letter-spacing:3px">Is your first job related to the course you took up in college?</label>

                                        <input style="margin-right: 10px; width: 10px;height: 10px;display:inline" type="radio" id="shows3" name="example2" value="yes" />
                                        <label for="shows3" style="display:inline; margin-right:40px">Yes</label>

                                        <input style="margin-right: 10px; width: 10px;height: 10px;display:inline" type="radio" id="shows4" name="example2" value="no" />
                                        <label for="shows4" style="display:inline">No</label>
                                    </div>
                                    <div style="margin-bottom: 0px;width: 739px;" class="txt_field">
                                        <label style="margin-right: 15px; letter-spacing:3px">Was the curriculum you had in college relevant to your first job?</label>


                                        <input id="shows5" style="margin-right: 10px; width: 10px;height: 10px;display:inline" type="radio" name="example3" value="yes" />
                                        <label style="display:inline; margin-right:40px" for="shows5">Yes</label>

                                        <input id="shows6" style="margin-right: 10px; width: 10px;height: 10px;display:inline" type="radio" name="example3" value="no" />
                                        <label style="display:inline" for="shows6">No</label>
                                    </div>


                                    <!-- <div style="display:inline;" class="radios">
                            <input type="radio" id="show" name="example" value="show" />
                            <label for="show">Employed</label>
                        </div>

                        <div style="display:inline;" class="radios">
                            <input style="margin-left: 35px;" type="radio" id="shows" name="example" value="shows" />
                            <label for="shows">Unemployed</label>
                        </div> -->



                                    <!-- <div class="radios"> -->
                                    <!-- <input style="margin-left: 35px;" type="radio" id="shows" name="example" value="shows" /> -->
                                    <!-- <label for="shows">Unemployed</label> -->
                                    <!-- </div> -->

                                    <!-- <div class="txt_field"> -->



                                    <!-- </div> -->
                                    <!-- <input type="text" placeholder="Field of Work">
                        <input type="text" placeholder="Job Position "> -->




                                    <!-- <input type="text" placeholder="Employer"> -->
                                    <!-- <input type="text" placeholder="Monthly Income">

                        <input type="text" placeholder="Years Employed"> -->
                                    <!-- <input type="password" id="password" name="password" > -->
                                    <!-- Select your state: -->

                                </div>

                                <!-- <input type="radio" id="show" name="example" value="show" />
                    <label for="show">Employed</label> -->
                                <!-- <div class="radios">
                        <input type="radio" id="show" name="example" value="show" />
                        <label for="show">Employed</label>
                    </div>

                    <div class="radios">
                        <input style="margin-left: 35px;" type="radio" id="shows" name="example" value="shows" />
                        <label for="shows">Unemployed</label>
                    </div> -->

                            </div>

                            <div id="box2">
                                <label>REASON FOR UNEMPLOYMENT :</label>

                                <div class="row">

                                    <input type="checkbox" name="reason" value="Advance or further study">Advance or further study
                                    <input style="margin-left: 100px;" type="checkbox" name="reason" value="Family concern and decided not to find a job">Family concern and decided not to find a job
                                </div>

                                <div class="row">

                                    <input type="checkbox" name="reason" value="Health-related reason(s)">Health-related reason(s)
                                    <input style="margin-left: 97px;" type="checkbox" name="reason" value="Lack of work experience">Lack of work experience
                                </div>

                                <div class="row">

                                    <input type="checkbox" name="reason" value="noJobOpportunity">No job opportunity
                                    <input style="margin-left: 150px;" type="checkbox" name="reason" value="Did not look for a job">Did not look for a job
                                </div>
                                <div style="margin-top: 15px; margin-bottom:15px" class="row">

                                    <TEXTAREA name="reason" cols=105 rows=6 placeholder="Others..." value="<?php echo $fetch_edit['alumni_ReasonUnemployment']; ?>"></TEXTAREA>
                                </div>



                            </div>

                            <div id="box3">
                                <label style="margin-right: 15px; letter-spacing:3px;width: 600px;">If yes, what competencies learned in college did you find very useful in your first job? You may check (/) more than one answer.</label>

                                <div class="surveyOptions">
                                    <select style="width: 739px; margin-right:45px;margin-bottom: 0px;" name="competencies">
                                        <OPTION VALUE=> <?php echo $fetch_edit['alumni_Competencies']; ?>
                                        <OPTION VALUE="COMMUNICATION SKILLS">COMMUNICATION SKILLS
                                        <OPTION VALUE="HUMAN RELATIONS SKILLS">HUMAN RELATIONS SKILLS
                                        <OPTION VALUE="ENTREPRENEURIAL SKILLS">ENTREPRENEURIAL SKILLS
                                        <OPTION VALUE="INFORMATION TECHNOLOGY SKILLS">INFORMATION TECHNOLOGY SKILLS
                                        <OPTION VALUE="PROBLEM-SOLVING SKILLS">PROBLEM-SOLVING SKILLS
                                        <OPTION VALUE="CRITICAL THINKING SKILLS">CRITICAL THINKING SKILLS
                                            <!-- <OPTION VALUE=married>4 YEARS OR MORE -->
                                    </select>
                                </div>
                            </div>


                        </div>
                        <div style="margin-top: 20px;" class="details">
                            <h1>E. Why UBLC?</h1>
                            <hr>
                            Give your thoughts below:

                            <div style="margin-top: 15px;" class="row">

                                <TEXTAREA name="whyUBLC" cols=130 rows=6 value="<?php echo $fetch_edit['alumni_ThoughtsUBLC']; ?>"></TEXTAREA>
                            </div>


                        </div>
                        <div style="margin-top: 25px;" class="details">
                            <h1>F. Suggestions</h1>
                            <hr>
                            What are the strengths and weaknesses of the program offered by UBLC as perceived by its graduates?

                            <div style="margin-top: 15px; margin-bottom:15px" class="row">

                                <TEXTAREA name="strengthsWeaknesses" cols=130 rows=6 value="<?php echo $fetch_edit['alumni_Suggestions1']; ?>"></TEXTAREA>
                            </div>
                            Propose suggestions to improve the quality of education offered by CITEC.

                            <div style="margin-top: 15px;" class="row">

                                <TEXTAREA name="improvements" cols=130 rows=6 value="<?php echo $fetch_edit['alumni_Suggestions2']; ?>"></TEXTAREA>
                            </div>

                        </div>

                        <div style="width: 700px; position:relative; left:525px " class="button">
                            <a href=""><input type="submit" value="Update" name="edits"></a>
                        </div>

                        <!-- left:475px -->
                        <!-- right:225px -->

                    </form>
        <?php
                };
            };
        };
        ?>
    </div>
    <script src="script.js"></script>
</body>

</html>