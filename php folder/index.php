
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

</head>
<body>
  <?php  include_once("../assets/nav.php")?>

  <?php 
   if(isset($_POST["submit"])){
    $username = $_POST['username'];
    $file = $_FILES['fileSelect']['name'];
    $area = $_POST['area'];
    move_uploaded_file($_FILES['fileSelect']['tmp_name'],'../system/uploaded/'.$file);
   
   $bol = insertReview($username,$file,$area);
   if($bol){
    echo "<container><div  class='alert alert-info container'>
    Review Successfully
    </div></container>";
   }else{
    echo "<container><div  class='alert alert-info container'>
    Review Fail
    </div></container>";
   }
   }
   ?>

    <section>
        <div class="container gradient">
        <div class="begin"></div>
         <div class="text-img  text-center">
            <h2 class="">Welcome to our Food Festival</h2>
            <p >You can buy food with flexible price</p>
         </div>
    
        </div>
    </section>

    <section>
        <div class="container review">
            <h4 class="text-center py-3 buy mt-3 ">You can buy many foods in one place</h4>
              <!-- Card1 -->
                <div class="row match-to-row choose text-center">
                    <div class="car col-lg-4 col-md-6 py-3">
                        <div class="card">
                            <div class="card-body">
                                <img src="../assets/img/food/main food/burger.jpg"   alt="">
                            </div>
                            <div class="card-footer">
                                <p>You can choose other types of burger.</p>
                                <a href="burger.php" class="btn btn-secondary">See More...</a>
                            </div>
                        </div>
                    </div>

                    <!--Card2  -->

                    <div class="car col-lg-4 py-3 col-sm-12 col-md-6">
                       <div class="card">
                        <div class="card-body">
                            <img src="../assets/img/food/main food/chicken.jpg" alt="">
                        </div>
                        <div class="card-footer">
                            <p>You can choose other types of chicken.</p>
                            <a href="chcken.php" class="btn btn-secondary">See More...</a>

                        </div>
                       </div> 
                        
                    </div>

                     <!-- Card3  -->
                    <div class="car col-lg-4 py-3 col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="../assets/img/food/main food/pasta.jpeg" alt="">
                            </div>
                            <div class="card-footer">
                                <p>You can choose other types of pasta.</p>
                                <a href="pasta.php" class="btn btn-secondary">See More...</a> 
                            </div>
                        </div>
                    </div>

                          <!-- Card 4 -->
                    <div class="car col-lg-4 py-3 col-sm-12 col-md-6">
                       <div class="card">
                        <div class="card-body">
                            <img src="../assets/img/food/main food/piza.jpg" alt="">
                        </div>
                        <div class="card-footer">
                            <p>You can choose other types of pizza.</p>
                                <a href="pizza.php" class="btn btn-secondary">See More...</a> 
                        </div>
                       </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="car col-lg-4 py-3 col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="../assets/img/food/main food/shshi.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="card-footer">
                                <p>You can choose other types of sushi.</p>
                                <a href="sushi.php" class="btn btn-secondary">See More...</a>
                            </div>
                        </div>
                    </div>
                    
                    <!--card 6  -->
                    <div class="car col-lg-4 py-3 col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="../assets/img/food/main food/desert.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="card-footer">
                                <p>You can choose other types of dessert.</p>
                                <a href="dessert.php" class="btn btn-secondary">See More...</a>
                            </div>
                        </div>
             
                </div>
            
            

        </div>
    </section>

       
   <!-- Review side -->
   <hr><br>

   <h1 class="text-center">You can give your feedback to our Page.</h1>
   <form action="index.php" method="post" enctype="multipart/form-data">
      <div
        class="container justify-content-center align-items-center text-center margin-auto d-flex flex-column my-3"
        style="
          background: linear-gradient(rgb(237, 154, 154), rgb(145, 145, 214));
        "
      >
   
        <div>
          <div class="mb-3 row mt-3">
            <label for="inputUser" class="col-sm-3 col-form-label"
              >Username</label
            >
            <div class="col-sm-9">
              <input type="text" class="form- w-100" id="inputUser" name="username" />
            </div>
          </div>

          <div class="mb-3">
            <input class="form-control w-100" type="file" id="" multiple name="fileSelect" />
          </div>

          <textarea
            name="area"
            id=""
            rows="8"
            cols="40"
            placeholder="You can review here"
            class="my-3"
          ></textarea>

          <button class="btn btn-lg btn-secondary w-50 fs-6 mb-3" name="submit">Give Feedback</button>
          <p class="mt-3">You can edit your review in customer review.</p>
        </div>
      </div>
    </form>

  
    
    
   <!-- Sign up -->
    <section>
        <div class="container" style="background: linear-gradient(rgb(219, 185, 237),rgb(252, 238, 149));">
            <div class="row">
              <div class="col-lg-6">
               <div class="d-flex flex-wrap border shadow box-shadow text-center justify-content-center py-3 bg-light" ;
               ;>
                <img src="../assets/img/food/main food/img1.jpg" alt="" class="img-fluid" style="width:300px">
                <img src="../assets/img/food/main food/img-2.jpg" alt="" class="img-fluid" style="width:300px">
                <img src="../assets/img/food/main food/img3.jpg" alt="" class="img-fluid" style="width:300px">
                <img src="../assets/img/food/main food/img4.jpg" alt="" class="img-fluid" style="width:300px">
               </div>
              </div>
              <div
                class="col-lg-6 text-center align-items-center justify-content-center"
              >
                <div class="py-3">
                    <div class="text-center">
                        <h3 class="">We can give you many happiness about our food</h3>
                      </div>
            
                      <div class="text-center ">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse,
                          laboriosam. Tenetur maiores possimus, quaerat labore, hic tempore
                          ex consectetur rerum odio itaque praesentium in nobis aliquam
                          quasi dignissimos. Impedit, fuga. Lorem ipsum dolor sit amet consectetur adipisicing elit. In blanditiis ut doloribus ex aspernatur, natus quidem earum enim fuga accusamus est sit veniam asperiores corporis tempora, minus quis? Quasi, id?
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam porro obcaecati temporibus quia totam nemo tempore vel numquam asperiores provident voluptates corrupti praesentium error quaerat atque quo perferendis, illo magni.
                        </p>
                      </div>
                      
                        <button class=" btn btn-primary mx-3"><a href="signup.html" class="nav-link">Sign Up</a></button>
                      
                </div>
              </div>
            </div>
          </div>
    </section>

    <?php  include_once("../assets/footer.php")?>

 

    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        
    </script>
</body>
</html>