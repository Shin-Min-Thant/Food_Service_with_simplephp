
<?php session_start() ?>
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
    <link rel="stylesheet" href="../assets/css/style.css" />
    <?php  include_once("../assets/csslink.php")?>
  </head>
  <body>
  <?php  include_once("../assets/nav.php")?>
  <?php  require_once("../system/registerconnect.php"); ?>
  <?php
  if(isset($_POST['submit'])){
    $username = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // echo $name . $address . $email . $password;
  
    $ret = RegisterUser($username,$address,$email,$password);
    $message = "";
    switch($ret){
      case "Email is already exist": 
        $message = "Email is already exist";
        break;
      case "Register Success": 
        $message = "Register Success";
        $_SESSION['name'] = $username;
        $_SESSION['address'] = $address;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header("location: index.php");
        break;
      case "Register Fail" : 
        $message = "Register Fail";
        break;
      case "Fail":
        $message = "Authentication Fail";
        break;
      default:
      break;
    };
    echo "<container><div  class='alert alert-info container'>
    .$message.
    </div></container>";
    
  };

  ?>
    <div
      class="container d-flex justify-content-center align-items-center text-center min-vh-100"
    >
      <div class="row border rounded-5 p-3 bg-white shadow box-shadow">
        <div
          class="col-lg-6 right-box d-flex rounded-4 align-items-center justify-content-center flex-column"
          style="background: rgb(253, 193, 119)"
        >
          <div class="featured-img">
            <img
              src="../assets/img/customer/signup.png"
              alt=""
              class="img-fluid"
              style="width: 300px"
            />
          </div>
          <h4 class="text-light pt-3">Can get happiness with our website</h4>
        </div>

        <div class="col-lg-6 left-box">
          <div class="row align-items-center">
            <div class="header-text">
              <h3>Sing Up with our website</h3>
              <p>We are happy about your registerion</p>
            </div>
            <form action="signup.php" method="post">
              <div class="input-group mb-3">
                <input
                  type="text"
                  class="form-control form-control-lg bg-light fs-6"
                  placeholder="Enter your username"
                  name="name"
                />
              </div>
              <div class="input-group mb-3">
                <input
                  type="address"
                  class="form-control form-control-lg bg-light fs-6"
                  placeholder="Enter your address"
                  name="address"
                />
              </div>
              <div class="input-group mb-3">
                <input
                  type="email"
                  class="form-control form-control-lg bg-light fs-6"
                  placeholder="Enter your email"
                  name="email"
                />
              </div>
              <div class="input-group mb-3">
                <input
                  type="password"
                  class="form-control form-control-lg bg-light fs-6"
                  placeholder="Enter your password"
                  name="password"
                />
              </div>
              <div class="input-group mb-5 d-flex justify-content-between">
                <div class="form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="formCheck"
                  />
                  <label for="formCheck"><small>Remember Me</small></label>
                </div>
                <!-- <div class="forgot">
                  <small><a href="">Forgot Password</a></small>
                </div> -->
              </div>
  
              <div class="input-group mb-3">
                <button class="btn btn-lg btn-primary w-100 fs-6" name="submit">Sign Up</button>
              </div>
              <h6>If you have already registered,try Log In.</h6>
              <a href="login.php" class="text-center">Log In</a>
            </div>
         
      
          </div>
        </div>
      </div>
   
            </form>
         

            <?php  include_once("../assets/footer.php")?>


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
