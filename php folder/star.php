<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <?php  include_once("../assets/csslink.php")?>
  </head>
  <body>
  <?php  include_once("../assets/nav.php")?>
    <div class="wrapper">
      <div class="rating-box">
        <div class="rating-header">
          <div class="title">Reviews</div>
          <div class="info-review">
            <img src="img/customer/customer1.jpg" alt="" />
            <div class="text-container">
              <span class="txt">Please,give me rate of our burger taste.</span>
              <span class="author">Homiedev</span>
            </div>
          </div>
          <!-- end left -->
          <div class="right">$29.99</div>
        </div>
        <!-- end info review -->
        <div class="info-rating">
          <div class="star-count"><span class="avg">4.9</span>OUT OF 5</div>
          <div class="star">
            <div class="avg-stars">
              <i class="fas fs-star"></i>
              <i class="fas fs-star"></i>
              <i class="fas fs-star"></i>
              <i class="fas fs-star"></i>
              <i class="fas fs-star"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php  include_once("../assets/footer.php")?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
  </body>
</html>
