<?php session_start() ?>
<?php 


function myConnect(){
    $db=mysqli_connect('localhost','root','','member'); 
if($db==true){
    return $db;
}else{
    echo"Connect error".mysqli_connect_error();
}
}
function insertUser($name,$address,$email,$password){
    
    $password = passGen($password);
    $curTime = getMyTimeNow();
    $connection = myConnect();
    $qry = "SELECT * FROM membership WHERE email = '$email';";
    $result = mysqli_query($connection,$qry);
    if(mysqli_num_rows($result)>0){
        echo "Email is already exist";
    }else{
        $qry = "INSERT INTO membership(name,address,email,password,created_at,updated_at)
        VALUES('$name','$address','$email','$password','$curTime','$curTime')";
$result = mysqli_query($connection,$qry);
if($result == 1){
    return "Register Success";
}else{
    return "Register Fail";
}

    }
   
};

function loginUser($email,$password){
    $connection = myConnect();
    $password = passGen($password);
    $qury = "SELECT name FROM membership WHERE email='$email' AND password = '$password';";
    $result = mysqli_query($connection,$qury);
   
    $username = "";
    
    foreach($result as $res){
        $username= $res['name'];
    }
    if($username){
      
        $_SESSION['name'] = $username;
        $_SESSION['email'] =$email;
        // $_SESSION['password']=$password;

        return "Login Success";

    }else{
        return "Login Fail";
    }
   

}

function getProfile(){
    // $password = passGen($password);
    $curTime = getMyTimeNow();
    $connection = myConnect();
    $qry = "SELECT * FROM membership";
    $result = mysqli_query($connection,$qry);
    return $result;
}


function getMyTimeNow(){
    date_default_timezone_set("Asia/Yangon");
    return date("Y-m-d H:m:s", time());
}

function passGen($pass){
    $pass = md5($pass);
    $pass = sha1($pass);
    $pass = crypt($pass,$pass);
    return $pass;

}


?>