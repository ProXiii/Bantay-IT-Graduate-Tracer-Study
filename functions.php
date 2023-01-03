<?php

function check_login($con)
{
    if (isset($_SESSION['StudentID'])) {
        $id = $_SESSION['StudentID'];
        $query = "select * from alumni_accounts where StudentID = '$id' limit 1";

        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    echo '<script>alert("YOU NEED TO LOGIN!")</script>';
    die("<script>window.location = 'login.php';</script>");

}

function check_loginAdmin($con)
{
    if (isset($_SESSION['AdminID'])) {
        $id = $_SESSION['AdminID'];
        $query = "select * from admin_account where AdminID = '$id' limit 1";

        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    echo '<script>alert("YOU NEED TO LOGIN!")</script>';
    die("<script>window.location = 'admin_login.php';</script>");
}

function check_loginPartner($con)
{
    if (isset($_SESSION['PartnerID'])) {
        $id = $_SESSION['PartnerID'];
        $query = "select * from partner_account where PartnerID = '$id' limit 1";

        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    echo '<script>alert("YOU NEED TO LOGIN!")</script>';
    die("<script>window.location = 'partner_login.php';</script>");
}

// function view_alumni($con)
// {
//     if (isset($_SESSION['currentlyViewingAlumni'])) {
//         // $id2 = $_SESSION['currentlyViewingAlumni'];
//         $query2 = "SELECT * from form_answers where alumni_StudentNumber = $_SESSION[currentlyViewingAlumni] limit 1";

//         $result2 = mysqli_query($con, $query2);
//         if ($result2 && mysqli_num_rows($result2) > 0) {
//             $view_alumni = mysqli_fetch_assoc($result2);
//             return $view_alumni;
//         }
//     }

//     // header("Location: login.php");
//     // die;
// }

// function check_form($con)
// {
//     if (isset($_SESSION['alumni_StudentNumber'])) {
//         header("Location: alumni_dashboard.php");
//         die;
//     }
//     if (isset($_SESSION['alumni_StudentNumber'])) {
//         $id = $_SESSION['alumni_StudentNumber'];
//         $query = "select * from alumni_form where alumni_StudentNumber = '$id' limit 1";

//         $result = mysqli_query($con, $query);
//         if ($result && mysqli_num_rows($result) > 0) {
//             $user_form = mysqli_fetch_assoc($result);
//             return $user_form;
//         }
//     }

//     header("Location: login.php");
//     die;
// }
