<?php session_start(); ?>
<?php 
   if(!isset($_SESSION['name'])){
    header("location: please_log.php");
}else{
   echo "";
}


?>
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
  </head>
  <body>
  <?php  include_once("../assets/nav.php")?>
    <div class="container">
      <h1
        class="text-center my-3"
        style="
          color: rgb(2, 1, 0);
          font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS',
            sans-serif;
        "
      >
        The menu of Desserts
      </h1>
      <div class="row">
        <!-- card1 -->
        <div
          class="col-lg-3"
          style="font-family: Georgia, 'Times New Roman', Times, serif"
        >
          <div
            class="card-header justify-content-center align-items-center tex-center border shadow box-shadow"
          >
            <img
              src="../assets/img/food/dessert/desert9.jpg"
              alt=""
              class="img-fluid tex-center mx-auto"
              style="width: 100%; height: 200px"
            />
          </div>
          <div
            class="border"
            style="
              background: linear-gradient(
                345deg,
                rgb(120, 120, 241),
                rgb(231, 131, 131),
                rgb(239, 239, 139),
                rgb(248, 119, 228)
              );
            "
          >
            <div class="text-center">
              <h4 class="my-2">Louis Burgur</h4>
              <h5>12$</h5>
            </div>
            <div class="justify-content-between d-flex">
              <button class="btn btn-light my-2 mx-2">
                <a href="" class="nav-link">Order Now</a>
              </button>
              <button class="btn btn-light my-2 mx-2">
                <a href="" class="nav-link">Add to chart</a>
              </button>
            </div>
          </div>
        </div>

        <!-- card2 -->
        <div
          class="col-lg-3"
          style="font-family: Georgia, 'Times New Roman', Times, serif"
        >
          <div
            class="card-header justify-content-center align-items-center tex-center border shadow box-shadow"
          >
            <img
              src="../assets/img/food/dessert/desert7.jpg"
              alt=""
              class="img-fluid tex-center mx-auto"
              style="width: 100%; height: 200px"
            />
          </div>
          <div
            class="border"
            style="
              background: linear-gradient(
                345deg,
                rgb(120, 120, 241),
                rgb(231, 131, 131),
                rgb(239, 239, 139),
                rgb(248, 119, 228)
              );
            "
          >
            <div class="text-center">
              <h4 class="my-2">Louis Burgur</h4>
              <h5>12$</h5>
            </div>
            <div class="justify-content-between d-flex">
              <button class="btn btn-light my-2 mx-2">
                <a href="" class="nav-link">Order Now</a>
              </button>
              <button class="btn btn-light my-2 mx-2">
                <a href="" class="nav-link">Add to chart</a>
              </button>
            </div>
          </div>
        </div>

        <!-- card3 -->

        <div
          class="col-lg-3"
          style="font-family: Georgia, 'Times New Roman', Times, serif"
        >
          <div
            class="card-header justify-content-center align-items-center tex-center border shadow box-shadow"
          >
            <img
              src="../assets/img/food/dessert/desert6.jpg"
              alt=""
              class="img-fluid tex-center mx-auto"
              style="width: 100%; height: 200px"
            />
          </div>
          <div
            class="border"
            style="
              background: linear-gradient(
                345deg,
                rgb(120, 120, 241),
                rgb(231, 131, 131),
                rgb(239, 239, 139),
                rgb(248, 119, 228)
              );
            "
          >
            <div class="text-center">
              <h4 class="my-2">Louis Burgur</h4>
              <h5>12$</h5>
            </div>
            <div class="justify-content-between d-flex">
              <button class="btn btn-light my-2 mx-2">
                <a href="" class="nav-link">Order Now</a>
              </button>
              <button class="btn btn-light my-2 mx-2">
                <a href="" class="nav-link">Add to chart</a>
              </button>
            </div>
          </div>
        </div>

        <!-- card4 -->

        <div
          class="col-lg-3"
          style="font-family: Georgia, 'Times New Roman', Times, serif"
        >
          <div
            class="card-header justify-content-center align-items-center tex-center border shadow box-shadow"
          >
            <img
              src="../assets/img/food/dessert/desert5.jpg"
              alt=""
              class="img-fluid tex-center mx-auto"
              style="width: 100%; height: 200px"
            />
          </div>
          <div
            class="border"
            style="
              background: linear-gradient(
                345deg,
                rgb(120, 120, 241),
                rgb(231, 131, 131),
                rgb(239, 239, 139),
                rgb(248, 119, 228)
              );
            "
          >
            <div class="text-center">
              <h4 class="my-2">Louis Burgur</h4>
              <h5>12$</h5>
            </div>
            <div class="justify-content-between d-flex">
              <button class="btn btn-light my-2 mx-2">
                <a href="" class="nav-link">Order Now</a>
              </button>
              <button class="btn btn-light my-2 mx-2">
                <a href="" class="nav-link">Add to chart</a>
              </button>
            </div>
          </div>
        </div>

        <!-- card5 -->

        <div
          class="col-lg-3 my-3 my-3"
          style="font-family: Georgia, 'Times New Roman', Times, serif"
        >
          <div
            class="card-header justify-content-center align-items-center tex-center border shadow box-shadow"
          >
            <img
              src="../assets/img/food/dessert/desert4.png"
              alt=""
              class="img-fluid tex-center mx-auto"
              style="width: 100%; height: 200px"
            />
          </div>
          <div
            class="border"
            style="
              background: linear-gradient(
                345deg,
                rgb(120, 120, 241),
                rgb(231, 131, 131),
                rgb(239, 239, 139),
                rgb(248, 119, 228)
              );
            "
          >
            <div class="text-center">
              <h4 class="my-2">Louis Burgur</h4>
              <h5>12$</h5>
            </div>
            <div class="justify-content-between d-flex">
              <button class="btn btn-light my-2 mx-2">
                <a href="" class="nav-link">Order Now</a>
              </button>
              <button class="btn btn-light my-2 mx-2">
                <a href="" class="nav-link">Add to chart</a>
              </button>
            </div>
          </div>
        </div>

        <!-- card6 -->

        <div
          class="col-lg-3 my-3"
          style="font-family: Georgia, 'Times New Roman', Times, serif"
        >
          <div
            class="card-header justify-content-center align-items-center tex-center border shadow box-shadow"
          >
            <img
              src="../assets/img/food/dessert/desert3.jpg"
              alt=""
              class="img-fluid tex-center mx-auto"
              style="width: 100%; height: 200px"
            />
          </div>
          <div
            class="border"
            style="
              background: linear-gradient(
                345deg,
                rgb(120, 120, 241),
                rgb(231, 131, 131),
                rgb(239, 239, 139),
                rgb(248, 119, 228)
              );
            "
          >
            <div class="text-center">
              <h4 class="my-2">Louis Burgur</h4>
              <h5>12$</h5>
            </div>
            <div class="justify-content-between d-flex">
              <button class="btn btn-light my-2 mx-2">
                <a href="" class="nav-link">Order Now</a>
              </button>
              <button class="btn btn-light my-2 mx-2">
                <a href="" class="nav-link">Add to chart</a>
              </button>
            </div>
          </div>
        </div>

        <!-- card7 -->

        <div
          class="col-lg-3 my-3"
          style="font-family: Georgia, 'Times New Roman', Times, serif"
        >
          <div
            class="card-header justify-content-center align-items-center tex-center border shadow box-shadow"
          >
            <img
              src="../assets/img/food/dessert/desert2.jpg"
              alt=""
              class="img-fluid tex-center mx-auto"
              style="width: 100%; height: 200px"
            />
          </div>
          <div
            class="border"
            style="
              background: linear-gradient(
                345deg,
                rgb(120, 120, 241),
                rgb(231, 131, 131),
                rgb(239, 239, 139),
                rgb(248, 119, 228)
              );
            "
          >
            <div class="text-center">
              <h4 class="my-2">Louis Burgur</h4>
              <h5>12$</h5>
            </div>
            <div class="justify-content-between d-flex">
              <button class="btn btn-light my-2 mx-2">
                <a href="" class="nav-link">Order Now</a>
              </button>
              <button class="btn btn-light my-2 mx-2">
                <a href="" class="nav-link">Add to chart</a>
              </button>
            </div>
          </div>
        </div>

        <!-- card8 -->

        <div
          class="col-lg-3 my-3"
          style="font-family: Georgia, 'Times New Roman', Times, serif"
        >
          <div
            class="card-header justify-content-center align-items-center tex-center border shadow box-shadow"
          >
            <img
              src="../assets/img/food/dessert/desert1.jpg"
              alt=""
              class="img-fluid tex-center mx-auto"
              style="width: 100%; height: 200px"
            />
          </div>
          <div
            class="border"
            style="
              background: linear-gradient(
                345deg,
                rgb(120, 120, 241),
                rgb(231, 131, 131),
                rgb(239, 239, 139),
                rgb(248, 119, 228)
              );
            "
          >
            <div class="text-center">
              <h4 class="my-2">Louis Burgur</h4>
              <h5>12$</h5>
            </div>
            <div class="justify-content-between d-flex">
              <button class="btn my-2 mx-2 btn-light">
                <a href="" class="nav-link">Order Now</a>
              </button>
              <button class="btn btn-light my-2 mx-2">
                <a href="" class="nav-link">Add to chart</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php  include_once("../assets/footer.php")?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <script src="../assets/js/star.js"></script>
  </body>
</html>
