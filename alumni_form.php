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

if (isset($_POST['SubmitForm'])) {
    $alumni_lastName = $_POST['lastName'];
    $alumni_firstName = $_POST['firstName'];
    $alumni_middleName = $_POST['middleName'];
    $alumni_studentNum = $_POST['studentNum'];
    $alumni_emailAdd = $_POST['emailAdd'];
    $alumni_contactNum = $_POST['contactNum'];
    $alumni_presentAddress = $_POST['presentAddress'];
    $alumni_birthday = $_POST['birthday'];
    $alumni_AppSource = $_POST['AppSource'];
    $alumni_civilStat = $_POST['civilStat'];
    $alumni_yearGraduated = $_POST['yearGraduated'];

    $alumni_degree = $_POST['degree'];
    $degree = "";
    foreach ($alumni_degree as $degreePick) {
        $degree .= $degreePick . ", ";
    }

    $alumni_degreeDate = $_POST['degreeDate'];
    $degreeDate = "";
    foreach ($alumni_degreeDate as $degreeDatePick) {
        $degreeDate .= $degreeDatePick . ", ";
    }

    $alumni_seminar = $_POST['seminar'];
    $alumni_seminarDate = $_POST['seminarDate'];

    $alumni_license = $_POST['license'];
    $alumni_licenseDate = $_POST['licenseDate'];

    $alumni_certificate = $_POST['certificate'];
    $alumni_certificateDate = $_POST['certificateDate'];

    $alumni_skills = $_POST['skills'];

    $alumni_example = $_POST['example'];

    $alumni_Type = $_POST['Type'];
    $type = "";
    foreach ($alumni_Type as $pick) {
        $type .= $pick . ", ";
    }


    $alumni_companyName = $_POST['companyName'];
    $alumni_workPlace = $_POST['workPlace'];
    $alumni_position = $_POST['position'];
    $alumni_yearsEmployed = $_POST['yearsEmployed'];
    $alumni_initialGross = $_POST['initialGross'];
    $alumni_companyAdd = $_POST['companyAdd'];
    $alumni_howFirstJob = $_POST['howFirstJob'];
    $alumni_howLongFirstJob = $_POST['howLongFirstJob'];
    $alumni_example2 = $_POST['example2'];
    $alumni_example3 = $_POST['example3'];

    $alumni_reason = $_POST['reason'];
    $reasons = "";
    foreach ($alumni_reason as $pick) {
        $reasons .= $pick . ", ";
    }

    $alumni_otherReason = $_POST['otherReason'];

    $alumni_competencies = $_POST['competencies'];
    $alumni_whyUBLC = $_POST['whyUBLC'];
    $alumni_strengthsWeaknesses = $_POST['strengthsWeaknesses'];
    $alumni_improvements = $_POST['improvements'];
    $alumni_image = $_FILES['p_image']['name'];
    $alumni_image_tmp_name = $_FILES['p_image']['tmp_name'];
    $alumni_image_folder = './images/' . $alumni_image;

    $insert_query = ("INSERT INTO form_answers(alumni_Picture, alumni_LastName, alumni_FirstName, alumni_MiddleName, alumni_StudentNumber, alumni_Email, alumni_ContactNumber, alumni_Address, alumni_Birthday, alumni_Gender, alumni_CivilStatus, alumni_YearGraduated, alumni_Degree, alumni_DegreeDate, alumni_Seminar, alumni_SeminarDate, alumni_License, alumni_LicenseDate, alumni_Certificate, alumni_CertificateDate, alumni_Skills, alumni_EmployementStatus, alumni_EmployedType, alumni_EmployedCompany, alumni_EmployedPlaceOfWork, alumni_EmployedJobPosition, alumni_EmployedYearsEmployed, alumni_EmployedInitialGross, alumni_EmployedAddressOfWork, alumni_EmployedHowFirstJob, alumni_EmployedHowLongDidItTakeToFindFirstJob, alumni_JobRelatedToCourse, alumni_CurriculumRelevant, alumni_Competencies, alumni_ReasonUnemployment, alumni_OtherReasons, alumni_ThoughtsUBLC, alumni_Suggestions1, alumni_Suggestions2)
    VALUES(
        '$alumni_image', '$alumni_lastName', '$alumni_firstName', '$alumni_middleName', '$alumni_studentNum','$alumni_emailAdd','$alumni_contactNum',
        '$alumni_presentAddress', '$alumni_birthday', '$alumni_AppSource', '$alumni_civilStat', '$alumni_yearGraduated','$degree','$degreeDate',
        '$alumni_seminar', '$alumni_seminarDate', '$alumni_license', '$alumni_licenseDate', '$alumni_certificate','$alumni_certificateDate','$alumni_skills',
        '$alumni_example', '$type', '$alumni_companyName', '$alumni_workPlace', '$alumni_position','$alumni_yearsEmployed','$alumni_initialGross',
        '$alumni_companyAdd', '$alumni_howFirstJob', '$alumni_howLongFirstJob', '$alumni_example2', '$alumni_example3','$alumni_competencies','$reasons', '$alumni_otherReason',
        '$alumni_whyUBLC', '$alumni_strengthsWeaknesses', '$alumni_improvements')") or die('query failed');
    if ($insert_query) {
        move_uploaded_file($alumni_image_tmp_name, $alumni_image_folder);
        $message[] = 'Product Added Succesfully';
    } else {
        $message[] = 'Could Not Add The Product';
    }

    $con->query($insert_query) or die($con->error);

    $_SESSION['alumni_StudentNumber'] = $alumni_studentNum;

    if (isset($_SESSION['alumni_StudentNumber'])) {
        header("Location: alumni_dashboard.php");
        die;
    }
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
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

        <h2 style="color: #F9AE3B; bottom: 15px">ALUMNI FORM</h2>
        <!-- <a style="text-decoration: none;" href=""><h3 style="color: white; position: relative; top: 20px; left: 95px;">Alumni</h3></a>
        <a style="text-decoration: none;"  href="admin_login.php"><h3 style="color: white; position: relative; top: 20px; left: 50px;">Admin</h3></a>
        <a style="text-decoration: none;"  href="partner_login.php"><h3 style="color: white; position: relative; top: 20px; ">Partner</h3></a> -->


    </header>
    <div class="center">
        <!-- <h1>A. General Information</h1> -->

        <form action="" method="post" enctype="multipart/form-data">

            <div class="details">
                <h1>A. General Information</h1>
                <hr>
                <label style="letter-spacing: 6px;">INSERT PROFILE IMAGE : </label>
                <input style="margin-bottom:25px; padding-left:15px" type="file" name="p_image" accept="image/png, image/jpg, image/jpeg">

                <label style="position:relative; right:619px; top: 45px" for=""><span style="color: #680707;">* </span>N A M E :</label>
                <div style="width: 1150px; margin-top:30px" class="row">
                    <div style="width: 250px;" class="txt_field">
                        <!-- <label for="uname">Last Name</label> -->
                        <input type="text" name="lastName" placeholder="Last Name">
                    </div>
                    <div style="width: 300px;" class="txt_field">
                        <!-- <label for="uname">First Name</label> -->
                        <input type="text" name="firstName" placeholder="First Name">
                    </div>
                    <div style="width: 300px;" class="txt_field">
                        <!-- <label for="uname">Middle Name</label> -->
                        <input type="text" name="middleName" placeholder="Middle Name">
                    </div>
                </div>
                <label for=""><span style="color: #680707;">* </span>C O N T A C T S : </label>
                <div style="width: 1150px; margin-top:10px" class="row">
                    <?php

                    $query = mysqli_query($con, "SELECT * FROM alumni_accounts WHERE StudentID = $_SESSION[StudentID]");
                    if (mysqli_num_rows($query) > 0) {
                        while ($fetch_query = mysqli_fetch_assoc($query)) {

                    ?>
                            <div style="width: 250px;" class="txt_field">
                                <label for="uname"></label>
                                <input style="border-color: #680707;" type="text" name="studentNum" readonly value="<?php echo $fetch_query['StudentID']; ?>">
                            </div>
                    <?php

                        };
                    };
                    ?>
                    <div style="width: 300px;" class="txt_field">
                        <label></label>
                        <input type="email" name="emailAdd" placeholder="Email">
                    </div>
                    <div style="width: 300px;" class="txt_field">
                        <label></label>
                        <input type="text" name="contactNum" placeholder="Contact Number">
                    </div>
                </div>
                <label for=""><span style="color: #680707;">* </span>A D D R E S S : </label>
                <div style="width: 1150px; margin-top:10px" class="row">
                    <div style="width: 959px;" class="txt_field">
                        <input type="text" name="presentAddress" placeholder="Present Address">
                    </div>

                </div>


                <div style="position: relative; top:10px; margin-bottom:55px;" class="row">
                    <label for="start"><span style="color: #680707;">* </span>B I R T H D A Y : </label>

                    <!-- <input style="margin-left: 54px; margin-right:223px; width:185px" type="date" id="start" name="trip-start" value="2022-01-01" min="1990-01-01" max="2022-12-31"> -->
                    <div class="surveyOptions">

                        <input style="margin-left: 54px; margin-right:46px;width: 229px;" type="date" name="birthday" class="survey_options">
                    </div>

                    <label style="margin-right: 115px; "><span style="color: #680707;">* </span>G E N D E R : </label>
                    <input type="radio" name="AppSource" value=Male>Male
                    <input style="margin-left:18px" type="radio" name="AppSource" value=Female> Female

                </div>
                <div style="margin-bottom:55px; width: 1000px;" class="row">
                    <label style="margin-right: 15px; letter-spacing:3px"><span style="color: #680707;">*</span>CIVIL STATUS : </label>
                    <!-- <input type="password" id="password" name="password" > -->
                    <!-- Select your state: -->
                    <div class="surveyOptions">
                        <select style="width: 229px; margin-right:45px" name="civilStat">
                            <OPTION VALUE=>
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
                    <label style="margin-right: 15px; letter-spacing: 3px "><span style="color: #680707;">*</span>YEAR GRADUATED : </label>
                    <!-- <input type="password" id="password" name="password" > -->
                    <!-- Select your state: -->
                    <div class="surveyOptions">
                        <select style="width: 155px;" name="yearGraduated">
                            <OPTION VALUE=>
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
                    <input type="text" name="degree[]" class="survey_options" size="50" placeholder="Degree & Specialization">
                    <label style="margin-right: 10px;">DATE COMPLETED : </label>
                    <input style="width: 170px;" type="text" name="degreeDate[]" class="survey_options">
                </div>
                <div class="controls">
                    <a href="#" id="add_more_fields"><input type="button" value="Add More" name="SubmitDegree" onclick="return false"></a>

                </div>
                <div class="controls">
                    <a href="#" id="remove_fields"><input type="button" value="Remove" name="RemoveDegree" onclick="return false"></a>
                </div>
            </div>


            <div style="height: 100%; " class="details">
                <!-- <div style="position:relative; bottom:60px" class="group"> -->
                <label style="letter-spacing: 6px">SEMINAR(S) / TRAINING(S) ATTENDED :</label>
                <div class="surveyOptions" id="survey_options2">
                    <input type="text" name="seminar[]" class="survey_options" size="50" placeholder="Name of Seminar / Training Attended">
                    <label style="margin-right: 10px;">DATE COMPLETED : </label>
                    <input style="width: 170px;" type="text" name="seminarDate[]" class="survey_options">
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
                <label style="letter-spacing: 6px">PROFESSIONAL LICENSE PASSED:</label>
                <div class="surveyOptions" id="survey_options3">
                    <input type="text" name="license" class="survey_options" size="50" placeholder="Name of Examination">
                    <label style="margin-right: 10px;">DATE COMPLETED : </label>
                    <input style="width: 170px;" type="text" name="licenseDate" class="survey_options">
                </div>
                <div class="controls">
                    <a href="#" id="add_more_fields3"><input type="button" value="Add More" name="Submit" onclick="return false"></a>

                </div>
                <div class="controls">
                    <a href="#" id="remove_fields3"><input type="button" value="Remove" name="Submit" onclick="return false"></a>
                </div>

            </div>
            <div style="height: 100%; " class="details" id="profCertif">
                <!-- <div style="position:relative; bottom:170px" class="group"> -->
                <label style="letter-spacing: 6px">PROFESSIONAL CERTIFICATES :</label>
                <div class="surveyOptions" id="survey_options5">
                    <input type="text" name="certificate" class="survey_options" size="50" placeholder="Name of Certificate">
                    <label style="margin-right: 10px;">DATE COMPLETED : </label>
                    <input style="width: 170px;" type="text" name="certificateDate" class="survey_options">
                </div>
                <div class="controls">
                    <a href="#" id="add_more_fields5"><input type="button" value="Add More" name="Submit" onclick="return false"></a>

                </div>
                <div class="controls">
                    <a href="#" id="remove_fields5"><input type="button" value="Remove" name="Submit" onclick="return false"></a>
                </div>

                <label style="letter-spacing: 6px; display:block; margin-bottom:5px">ATTACH ALL ACQUIRED CERTIFICATES HERE:</label>
                <label style="letter-spacing: 3px;display:block">Insert file(s)</label>
                <!-- <form action=""> -->

                <input style="margin-bottom:15px; padding-left:15px" id="upload" accept=".doc, .docx, .pdf, image/png, image/jpg, image/jpeg" type="file" name="p_image" hidden>
                <label for="upload" class="uploadlabel">
                    <span><i class="fa fa-cloud-upload"></i></span>
                    <p>Click to upload</p>
                </label>
                <!-- </form> -->

            </div>
            <!-- <div style="height: 100%; " class="details">
                <div class="loc" id="goHere"></div>
                <h1>C. Proof of Certification</h1>
                <hr>
                <label style="letter-spacing: 6px;">INSERT FILE(s) : </label>
                <input style="margin-bottom:25px; padding-left:15px" type="file" name="p_image" multiple>
            </div> -->
            <!-- <div style="margin-bottom: 10px;position:relative;bottom:200px;" class="group"> -->
            <div style="height: 100%; " class="details">
                <h1>C. Expertise</h1>
                <hr>
                <label style="letter-spacing: 8px;">TECHNICAL SKILLS :</label>
                <div class="surveyOptions" id="survey_options4">
                    <input type="text" name="skills" class="survey_options" size="50" placeholder="Skill">
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
            <div style="height: 100%; " class="details">
                <h1>D. Relevant Sites <span style="font-size: 20px;">(e.g portfolio, github, etc.)</span></h1>
                <hr>
                <label style="letter-spacing: 8px;">LINKS :</label>
                <div class="surveyOptions" id="survey_options4">
                    <input type="text" name="skills" class="survey_options" size="50" placeholder="link">
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
            <div style="height: 100%; " class="details">
                <h1>E. Expertise</h1>
                <hr>
                <label style="letter-spacing: 8px;">TECHNICAL SKILLS :</label>
                <div class="surveyOptions" id="survey_options4">
                    <input type="text" name="skills" class="survey_options" size="50" placeholder="Skill">
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
                <h1>F. Employment Profile</h1>
                <hr>
                <div class="row">
                    <div style="width: 600px;" class="txt_field">
                        <label style="letter-spacing: 6px"><span style="color: #680707;">*</span>EMPLOYMENT STATUS :</label>
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
                            <input style="margin-bottom: 0px;" type="text" name="companyName" placeholder="">
                        </div>
                        <div style="margin-bottom: 0px;" class="txt_field">
                            <label style="margin-right: 15px; letter-spacing:3px">Place of Work </label>

                            <div class="surveyOptions">
                                <select style="width: 285px; margin-right:45px;margin-bottom: 0px;" name="workPlace">
                                    <OPTION VALUE=>
                                    <OPTION VALUE=Local>Local
                                    <OPTION VALUE=Abroad>Abroad

                                </select>
                            </div>
                        </div>
                        <div style="margin-bottom: 0px;" class="txt_field">
                            <label style="margin-top: 15px;letter-spacing:1px;">Position in the Company</label>
                            <input style="margin-bottom: 0px;width: 400px;" type="text" name="position" placeholder="">
                        </div>
                        <div style="margin-bottom: 0px;" class="txt_field">
                            <label style="margin-top: 15px;letter-spacing:1px;">Years Employed</label>
                            <input style="margin-bottom: 0px;width: 285px;" type="text" name="yearsEmployed" placeholder="">
                        </div>

                        <div style="margin-bottom: 0px;" class="txt_field">
                            <label style="margin-right: 15px; letter-spacing:3px">Monthly Earnings</label>

                            <div class="surveyOptions">
                                <select style="width: 739px; margin-right:45px;margin-bottom: 0px;" name="initialGross">
                                    <OPTION VALUE=>
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
                            <input style="width: 739px; margin-bottom:0px" type="text" name="companyAdd" placeholder="">
                        </div>

                        <div style="margin-bottom: 0px; width: 739px;" class="txt_field">
                            <label style="margin-right: 15px; letter-spacing:3px">How did you find your first job?</label>

                            <div class="surveyOptions">
                                <select style="width: 739px; margin-right:45px;margin-bottom: 0px;" name="howFirstJob">
                                    <OPTION VALUE=>
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
                                    <OPTION VALUE=>
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

                        <input type="checkbox" name="reason[]" value="Advance or further study">Advance or further study
                        <input style="margin-left: 100px;" type="checkbox" name="reason[]" value="Family concern and decided not to find a job">Family concern and decided not to find a job
                    </div>

                    <div class="row">

                        <input type="checkbox" name="reason[]" value="Health-related reason(s)">Health-related reason(s)
                        <input style="margin-left: 97px;" type="checkbox" name="reason[]" value="Lack of work experience">Lack of work experience
                    </div>

                    <div class="row">

                        <input type="checkbox" name="reason[]" value="No job opportunity">No job opportunity
                        <input style="margin-left: 150px;" type="checkbox" name="reason[]" value="Did not look for a job">Did not look for a job
                    </div>

                    <label>OTHER REASON(S) :</label>
                    <div style="margin-top: 15px; margin-bottom:15px" class="row">

                        <TEXTAREA name="otherReason" cols=105 rows=6 placeholder="Others..."></TEXTAREA>
                    </div>



                </div>

                <div id="box3">
                    <label style="margin-right: 15px; letter-spacing:3px;width: 600px;">If yes, what competencies learned in college did you find very useful in your first job? You may check (/) more than one answer.</label>

                    <div class="surveyOptions">
                        <select style="width: 739px; margin-right:45px;margin-bottom: 0px;" name="competencies">
                            <OPTION VALUE=>
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
                <h1>G. Why UBLC?</h1>
                <hr>
                Give your thoughts below:

                <div style="margin-top: 15px;" class="row">

                    <TEXTAREA name="whyUBLC" cols=130 rows=6></TEXTAREA>
                </div>


            </div>
            <div style="margin-top: 25px;" class="details">
                <h1>H. Suggestions</h1>
                <hr>
                What are the strengths and weaknesses of the program offered by UBLC as perceived by its graduates?

                <div style="margin-top: 15px; margin-bottom:15px" class="row">

                    <TEXTAREA name="strengthsWeaknesses" cols=130 rows=6></TEXTAREA>
                </div>
                Propose suggestions to improve the quality of education offered by CITEC.

                <div style="margin-top: 15px;" class="row">

                    <TEXTAREA name="improvements" cols=130 rows=6></TEXTAREA>
                </div>

            </div>

            <div style="width: 700px; position:relative; left:525px " class="button">
                <a href=""><input type="submit" value="Submit" name="SubmitForm"></a>
            </div>

            <!-- left:475px -->
            <!-- right:225px -->

        </form>

    </div>
    <script src="script.js"></script>
</body>

</html>