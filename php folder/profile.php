<?php include_once("../system/reviewpost.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food-Shopping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <?php  include_once("../assets/csslink.php")?>
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/profile.css">

</head>
<body>
<?php  include_once("../assets/nav.php");
include_once("../system/dbconnect.php");
$res = getProfile();
$name = "";
$address ="";
$email = "";
$password = "";
$created = "";
$updated ="";
foreach($res as $item){
    $name = $item['name'];
    $address =$item['address'];
    $email = $item['email'];
    $password = $item['password'];
    $created = $item['created_at'];
    $updated = $item['updated_at'];
}
?>


<div class="container rounded bg-white mt-5 mb-5 " style="width: 750px">
    <form action="">
    <div class="row ">
        <div class="col-md-6 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold"><?php echo $name ?></span><span class="text-black-50"></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Username</label><input type="text" class="form-control" value="<?php echo $name ?>"></div>
                   
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" value="<?php echo $address ?>"></div>
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control"  value="<?php echo $email ?>"></div>
                    <div class="col-md-12"><label class="labels">passord</label><input type="password" class="form-control"value="<?php echo $password ?>"></div>
                    
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Created_at</label><input type="text" class="form-control" value="<?php echo $created ?>"></div>
                    <div class="col-md-6"><label class="labels">Updated_at</label><input type="text" class="form-control" value="<?php echo $updated ?>"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Edit Profile</button></div>
            </div>
        </div>

    </div>
</div>
</div>
    </form>
</div>


<?php  include_once("../assets/footer.php")?>


  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        
    </script>
</body>
</html>