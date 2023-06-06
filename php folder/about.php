<?php session_start(); ?>
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
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="../assets/css/about.css" />
    <?php  include_once("../assets/csslink.php")?>
  </head>
  <body>
    <div class="container con">
      <div class="hero-pic">
        <img src="../assets/img/customer/custsomer10.jpg" alt="" />
      </div>
      <div class="hero-text">
        <h5>Hi I'm <span class="input">PHP Developer</span></h5>
        <h1>Shin Min Thant</h1>
        <p>
          Firstly,I want to introduce myself.I am Shin Min Thant and was born in
          2003.I am learning programming and German language. I like programming
          very much and I am really happy when I am coding.So, I have other
          hobbys.I like watching movies,listening music and learning
          programming.
        </p>
        <div class="btn-group">
          <a href="../assets/img/customer/CV.jpg" downloaded class="btn">Download CV</a>
          <a href="" class="btn">Contact</a>
        </div>

        <div class="social">
          <a href=""><i class="fa-brands fa-facebook"></i></a>
          <a href=""><i class="fa-brands fa-linkedin"></i></a>
          <a href=""><i class="fa-brands fa-instagram"></i></a>
          <a href=""><i class="fa-brands fa-pintrest"></i></a>
        </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.0/typed.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>

    <script>
      var typed = new Typed(".input", {
        strings: ["PHP Developer", "Backend-Developer", "Web Designer"],
        typedSpeed: 70,
        backSpeed: 55,
        loop: true,
      });
    </script>
  </body>
</html>
