
<?php include_once("../system/reviewpost.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <?php  include_once("../assets/csslink.php")?>
    <?php  include_once("../assets/nav.php");
    
    if(!isset($_SESSION['name'])){
      header("location: please_log.php");
  }else{
     echo "";
  }


    ?>
    
  </head>
  <body>
  
        <?php
        if(isset($_GET["reviewId"])){
            $reviewId = $_GET['reviewId'];
            $result = editReview($reviewId);
            foreach($result as $item){
                $id = $item['id'];
                $username = $item['username'];
                $fileselect = $item['fileselect'];
                $area = $item['area'];
                $created_at = $item['created_at'];
                $updated_at = $item['updated_at'];
      
     
          
    }
}
       
        ?>
      

    <div class="container">

    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
       
            <div class = "container">
        <form id="contact-form" action="" method="post" role="form"  enctype="multipart/form-data">
            <img class="card-img-top my-3" src="../system/uploaded/<?php echo $fileselect ?>" alt="Card image cap"  style="width:150px" />

            

            <div class="controls">

                <div class="row">
                    <div class="col-md-6 my-3">
                        <div class="form-group">
                            <label for="form_name">Username</label>
                            <input id="form_name" type="text" value="<?php echo $username ?>" name="name" class="form-control">
                            
                        </div>
                        
                    </div>

                    <div class="col-md-6 my-3">
                    <div class="mb-3 form-group" >
                           <label for="file">Change profile</label>
                           <input class="form-control w-100" type="file"   name="file" multiple />
                           <input class="form-control w-100" type="hidden"  name="oldimg" vaule="<?php echo $fileselect ?>"/>
                   </div>
                   </div>
                   
                </div>
                <div class="row my-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_edit">Edited_at</label>
                            <input id="form_edit" type="text" value="<?php echo $updated_at ?>" name="updated_at" class="form-control">
                            
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="uploaded">Uploaded_at</label>
                            <input id="uploaded" value="<?php echo $created_at ?>" name="created_at" type="text" class="form-control">
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Your Review</label>
                            <textarea id="form_message" name="area" class="form-control"  rows="4"><?php echo $area ?></textarea
                                >
                            </div>

                        </div>


                    <div class="col-md-12 my-3">
                        
                        <input type="submit" class="btn btn-success btn-send pt-2 btn-block
                            " value="Edit Review" name="submit" >
                    
                </div>
          
                </div>


        </div>
     </form>
    </div>
    </div>


    </div>
        <!-- /.8 -->

    </div>
    <!-- /.row-->

</div>
</div>

<?php
$imglink1 = "";
if(isset($_POST["submit"])){
    $reviewId1 = $_GET["reviewId"];
    $username1 = $_POST['name'];
    $area1 = $_POST['area'];
    $updated1 = $_POST['updated_at'];
    $created1 = $_POST['created_at'];
    $file = $_FILES['file'];
    
    $imglink1 = ($_FILES["file"]['name']) ? $_FILES['file']['name'] : $_POST['oldimg'];
    move_uploaded_file($_FILES["file"]["tmp_name"],"../system/uploaded/".$imglink1);
    // echo $imglink1;
    $result = regetReview($reviewId1,$username1,$imglink1,$area1,$created1,$updated1);
};
?>

 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    
  </body>
</html>
