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

function editReview($id){
    $db = myConnect();
    $date = getMyTimeNow();
    $qry = "SELECT * FROM review WHERE id = '$id';";
    $result = mysqli_query($db,$qry);
    return $result;
}

function regetReview ($id,$username,$fileselect,$area,$created_at,$updated_at){
    $db = myConnect();
    $date = getMyTimeNow();
    $qry = "UPDATE review SET username ='$username',fileselect='$fileselect',area='$area',created_at='$created_at',updated_at='$updated_at' WHERE id=$id ";
    $result = mysqli_query($db,$qry);
    if($result){
       return"Edit Success";
    }else{
        return "Edit Fail";
    }
}
?>