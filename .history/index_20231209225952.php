<?php
session_start();
include 'db/connect.php';
include 'backend/common_function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="shortcut icon" href="img/fab.png" type="image/x-icon">

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://res.cloudinary.com/veseylab/raw/upload/v1636192990/magicmouse/magic_mouse-1.2.1.cdn.min.js"></script>
  <script src="js/js_own.js"></script>

  <title>HRX | Home</title>
</head>

<body>

  <header>
    <div class="logo"></div>
    <div>
      <div class="uper">

      <form action="" method="get">
          <div class="dropdown">
            <button class="dropbtn">Nam</button>
            <div class="dropdown-content">
              <a href="page/Men/topware.php?ctg=Men/Đồ thể thao nam" name="ctg">Đồ thể thao vip</a>
              <a href="page/Men/topware.php?ctg=Men/Áo khoác nam" name="ctg">Áo khoác vip</a>
              <a href="page/Men/topware.php?ctg=Men/Quần nam" name="ctg">Quần vip</a>
              <a href="page/Men/topware.php?ctg=Men/Quần áo nam" name="ctg">Quần áo vip</a>

              <a href="page/Men/topware.php?ctg=Men/Giầy nam" name="ctg">Giầy vip</a>
              <a href="page/Men/topware.php?ctg=Men/Phụ kiện nam" name="ctg">Phụ kiện vip</a>
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn">Nữ</button>
            <div class="dropdown-content">
              <a href="page/Men/topware.php?ctg=Woman/Áo nữ">Áo</a>
              <a href="page/Men/topware.php?ctg=Woman/Váy">Váy</a>
              <a href="page/Men/topware.php?ctg=Woman/Trang sức">Trang sức</a>
              <a href="page/Men/topware.php?ctg=Woman/Đồ thể thao nữ">Đồ thể thao vip</a>
              <a href="page/Men/topware.php?ctg=Woman/Giầy nữ">Giầy vip</a>
              <a href="page/Men/topware.php?ctg=Woman/Phụ kiện nữ">Phụ kiện vip</a>
            </div>
          </div>

          <div class="dropdown">
            <button class="dropbtn">Trẻ em</button>
            <div class="dropdown-content">
              <a href="page/Men/topware.php?ctg=Kid/Quần áo bé nam">Quần áo bé nam</a>
              <a href="page/Men/topware.php?ctg=Kid/Quần áo bé nữ">Quần áo bé nữ</a>
              <a href="page/Men/topware.php?ctg=Kid/Giầy bé nam">Giầy bé nam</a>
              <a href="page/Men/topware.php?ctg=Kid/Giầy bé nữ">Giầy bé nữ</a>
              <a href="page/Men/topware.php?ctg=Kid/Sơ sinh">Sơ sinh</a>
              <a href="page/Men/topware.php?ctg=Kid/Phụ kiện cho trẻ">Phụ kiện cho trẻ</a>

            </div>
          </div>

          
          <div class="dropdown">
            <button class="dropbtn">Phụ kiện</button>
            <div class="dropdown-content">
              <a href="page/Men/topware.php?ctg=Accessories/Đồng hồ">Đồng hồ</a>
              <a href="page/Men/topware.php?ctg=Accessories/Kính">Kính</a>
              <a href="page/Men/topware.php?ctg=Accessories/Thắt lưng">Thắt lưng</a>
              <a href="page/Men/topware.php?ctg=Accessories/Khác">Khác</a>
            </div>
          </div>
        </form>


      </div>
    </div>
    <form action="page/Men/search_products.php" method="post"><input class="search" type="search" name="search_key" id="" placeholder="search for products, bands and more"></form>

    <div class="dropdown2">
      <?php
      if (isset($_SESSION['username'])) {
        echo '<a href="user_area/profile.php" style="top:-20px; color: white; !important">
        <img src="img/profile.png" alt="" srcset=""  style="width:20px; !important">
        <p>Profile</p>
      </a>';
      } else {
        echo '<button type="submit" class="dropbtn2" onclick="loginpage()">Login</button>';
      }
      ?>
      <!-- <button type="submit" class="dropbtn2" onclick="loginpage()">Login</button> -->

      <div class="dropdown-content2" style="display:none" id="LoginForm">

        <form action="backend/user_login.php" method="post">
          <div class="form-outline mb-4">
            <input type="username" id="form2Example1" class="form-control" name="username" placeholder="username" />
            <!-- <label class="form-label" for="form2Example1">Email address</label> -->
          </div>


          <div class="form-outline mb-4">
            <input type="password" id="form2Example2" class="form-control" name="password" placeholder="password" />
            <!-- <label class="form-label" for="form2Example2">Password</label> -->
          </div>


          <div class="row mb-4">
            <div class="col d-flex justify-content-center">

              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                <label class="form-check-label" for="form2Example31"> Remember me </label>
              </div>
            </div>

            <div class="col">

              <a href="page/forgot_password.php">Forgot password?</a>
            </div>
          </div>


          <button type="submit" class="btn btn-primary btn-block mb-4" name="login">Sign in</button>


          <div class="text-center">
            <p>Not a member? <a href="page/reg.php">Register</a></p>
            <!-- <p>or sign up with:</p>
            <button type="button" class="btn btn-link btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
              <i class='bx bxl-facebook-circle fa-5x' style='color:#4b5af6'></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
              <i class="fab fa-google"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
              <i class="fab fa-github"></i>
            </button> -->
          </div>
        </form>

      </div>
    </div>



    </div>
    <div class="uper  side2">

      <div class="dropdown headerimg">
        <a href="page/cart.php">
          <img src="img/cart.png" alt="" srcset=""><sup><?php $cart = ItemInCart();
                                                        echo $cart; ?></sup>
          <p>Cart</p>
        </a>
      </div>
    </div>
  </header>
  <h1 class=bg_write>Bộ sưu tập</h1>

  <div class="index_pro_show">
    <h2>Sản phẩm mới</h2>
    <div class="p_show">
      <?php
      $sql = "select * from product order by p_date desc limit 9";
      $res = mysqli_query($conn, $sql);
      if ($res) {
        while ($row = mysqli_fetch_array($res)) {
          $p_id = $row["p_id"];
          $p_name = $row["p_name"];
          $p_price = $row["p_price"];
          $p_img = $row["p_img1"];

          echo '<div class="ctag_u">
          <a href="page/Men/product.php?id=' . $p_id . '">
            <div class="c_img_bg_u ">
              <img class="ctag_img_u" src="page/Men/img/' . $p_img . '" alt="">
              <h3>' . $p_name . '</h3>
              <h4>' . CURRENCY . $p_price . '</h4>
          </a>
          <a href="add_to_cart.php?add_to_cart=' . $p_id . "/" . $p_price . '"><button class="add_to_cart"> Add to Cart </button></a>
        </div>';
        }
      } else {
        die(mysqli_error($conn));
      }
      ?>

    </div>

  </div>
  <div class="deal_of_the_day">
    <h1>Một số sản phẩm khác</h1>

  </div>

  <!-- Catagoris start -->
  <div class="catag reveal">
    <a href="page/men.php">
      <div class="c_img_bg">
        <img src="img/men.png" alt="">
        <h3>Đực</h3>

      </div>
    </a>
    <a href="page/Men/all_product.php?ctg=Woman">
      <div class="c_img_bg">
        <img src="img/woman.png" alt="">
        <h3>Cái</h3>
      </div>
    </a>
    <a href="page/Men/all_product.php?ctg=Bagpack">
      <div class="c_img_bg">
        <img class="bag_img" src="img/bag.png" alt="">
        <h3>Balo</h3>
      </div>
    </a>
    <a href="page/Men/all_product.php?ctg=shoes">
      <div class="c_img_bg">
        <img src="img/shoes.png" alt="">
        <h3>Giày</h3>
      </div>
    </a>
    <a href="page/Men/all_product.php?ctg=Asscories">
      <div class="c_img_bg ">
        <img src="img/asscories.png" alt="">
        <h3>Vòng tay</h3>
      </div>
    </a>
    <a href="page/Men/all_product.php?ctg=Wareable">
      <div class="c_img_bg">
        <img src="img/watch.png" alt="">
        <h3>Đồng hồ</h3>
      </div>
    </a>
    <a href="page/Men/all_product.php?ctg=Sunglass">
      <div class="c_img_bg">
        <img src="img/sunglass1.png" alt="">
        <h3>Kính</h3>
      </div>
    </a>
    <a href="page/Men/all_product.php?ctg=Fitness">
      <div class="c_img_bg ">
        <img class="fitness" src="img/fitness1.png" alt="">
        <h3>GYM</h3>
      </div>
    </a>


  </div>




  <script>
    function loginpage() {
      var x = document.getElementById("LoginForm");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
  </script>







  <!-- Footer File call -->
  <?php
  include 'footer.php';
  ?>
</body>

</html>