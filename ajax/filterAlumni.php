<?php 
include("../connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sqlStmt = "SELECT `ID`, `alumni_Picture`, `alumni_StudentNumber`, `alumni_LastName`,`alumni_FirstName`, `alumni_StudentNumber` FROM `form_answers` ";
    $colGroup = [];
    $searchFilter = '';
    foreach ($_POST as $colName => $colValue){
        if($colName == 'searchFilter'){
            $searchFilter = $colValue;
            continue;
        }
        if($colValue != null){
            $colGroup[$colName] = explode(',',$colValue);
        }
    }
    if($colGroup){

        foreach ($colGroup as $colName => $colValue) {
            $currStmt = implode("' OR " . $colName . " = '", $colValue);
            $currStmt = "(" . $colName . " = '" . $currStmt . "' )";
            $colGroup[$colName] = $currStmt;
        }
        $sqlStmt.= "WHERE " . implode(" AND ", array_values($colGroup));
    }
    if($searchFilter){
        $concatStmt = "CONCAT (alumni_LastName, alumni_FirstName, alumni_StudentNumber) LIKE '%" . $searchFilter . "%'";
        if(preg_match("/WHERE/", $sqlStmt)){
            $sqlStmt.= " AND " . $concatStmt;
        }else{
            $sqlStmt.= "WHERE " . $concatStmt;
        }
    }
    $result = mysqli_query($con, $sqlStmt);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
header("Content-Type: application/json; charset=utf-8");

echo json_encode($row);

?>