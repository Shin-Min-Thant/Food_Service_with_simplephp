
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
    <link rel="stylesheet" href="../assets/cs/style.css" />
    <?php  include_once("../assets/csslink.php")?>
  </head>
  <body>
  <?php  include_once("../assets/nav.php")?>
  <?php  require_once("../system/registerconnect.php"); ?>
  
  <?php
    if(isset($_POST['submit'])){
  
      $email = $_POST['email'];
      $password = $_POST['password'];
      $res = LoginName($email,$password);
      $message = "";
      switch($res){
        case "Login Success" : 
          $message = "Login Success";
          header("location: index.php");
          break;
          case "Fail" : 
            $message = "Authentication Fail";
            break;
        case "Login Fail":
          $message = "Login Fail";
          
          
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
      class="container d-flex flex-column justify-content-center align-items-center text-center min-vh-100" style="width: 350px"
    >
      <div
        class="row border shadow box-shadow rounded-5 p-2 justify-content-center align-items-center text-center"
      >
        <!-- <img src="img/customer/customer5.jpg" alt="" style="width: 100%" class="mx-auto" /> -->
        <h3>Welcome back from our website</h3>
        <p>Make your time with happiness</p>
        <form action="login.php" method="post" class="form-group">
          <div class="text-center justify-content-center align-items-center mt-3">
            <input
              type="email"
              class="form-control mb-3"
              placeholder="Enter your email"
              style="width: 100%"
              name="email"
            />
          </div>
          <input
            type="password"
            class="form-control mb-3"
            placeholder="Enter your password"
            style="width: 100%"
            name="password"
          />
          <div class="input-group mb-5 d-flex justify-content-between">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="formCheck" />
              <label for="formCheck"><small>Remember Me</small></label>
            </div>
            <div class="forgot">
              <small><a href="">Forgot Password</a></small>
            </div>
          </div>

          <div class="input-group mb-3">
            <button class="btn btn-lg btn-primary w-100 fs-6" name="submit">Login</button>
          </div>
          <h6>If you never have registered,register first.</h6>
          <a href="signup.php" class="text-center">Register</a>
        </div>
        </form>
      </div>
    </div>
    <?php  include_once("../assets/footer.php")?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

