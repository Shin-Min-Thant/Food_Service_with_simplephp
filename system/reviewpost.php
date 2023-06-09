<?php 
include_once("dbconnect.php");


function insertReview($username,$file,$area){
    $db = myConnect();
    $date = getMyTimeNow();
    $qry = "INSERT INTO review (username,fileselect,area,created_at,updated_at)
    VALUES('$username','$file','$area','$date','$date'); ";
   $result = mysqli_query($db,$qry);
   return $result;
}

function getReview(){
    $db = myConnect();
    $date = getMyTimeNow();
    $qry = "SELECT * FROM review";
    $result = mysqli_query($db,$qry);
    return $result;
}
?>