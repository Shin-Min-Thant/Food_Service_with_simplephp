
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
  <div class="container d-flex flex-column">
      <div class="row">
        <?php
        $res = getReview();
        foreach($res as $item){
          $id = $item['id'];
          echo'<div class="card mx-3 my-3 bg-info" style="width: 18rem heigh: 30px">
          <img class="card-img-top my-3" src="../system/uploaded/'.$item['fileselect'].'" alt="Card image cap" style="width:150px" />
          <div class="card-body">
            <h5 class="card-title " style="color: red">'.$item['username'].'</h5>
            <hr>
            <p class="card-text" >
            '.$item['area'].'
            </p>
          </div>
          <ul class="list-group list-group-flush my-3">
            <li class="list-group-item">uploaded_at('.$item['created_at'].')</li>
            <li class="list-group-item">edited_at('.$item['updated_at'].')</li>
            <li class="list-group-item">  <a href="customer_edit.php?reviewId='.$id.'" class="nav-link">Edit Feedback</a></li>
          </ul>
       
        </div>';
        }
        ?>
      
      </div>
    </div>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    
  </body>
</html>
