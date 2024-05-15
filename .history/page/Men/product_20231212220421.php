<?php
session_start();
include('../../db/connect.php');
include '../../backend/common_function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../../style.css">

  <link rel="shortcut icon" href="../../img/fab.png" type="image/x-icon">

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://res.cloudinary.com/veseylab/raw/upload/v1636192990/magicmouse/magic_mouse-1.2.1.cdn.min.js"></script>
  <script src="../../js/js_own.js"></script>

  <title>HRX | Products</title>
</head>

<body>
  <header>
    <div class="logo"><a href="index.php"><img src="img/icon.png" alt="" srcset=""></a></div>
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
    <form action="search_products.php" method="post"><input class="search" type="search" name="search_key" id="" placeholder="search for products, bands and more"></form>

    <div class="dropdown2">
      <?php
      if (isset($_SESSION['username'])) {
        echo '<a href="../../backend/user_logout.php" style="top:-20px; color: white; !important">
        <img src="img/profile.png" alt="" srcset=""  style="width:20px; !important">
        <p>Profile</p>
      </a>';
      } else {
        echo '<button type="submit" class="dropbtn2" onclick="loginpage()">Login</button>';
      }
      ?>
      <!-- <button type="submit" class="dropbtn2" onclick="loginpage()">Login</button> -->

      <div class="dropdown-content2" style="display:none" id="LoginForm">

        <form action="../../backend/user_login.php" method="post">
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
                <label class="form-check-label" for="form2Example31"> Nhớ mật khẩu </label>
              </div>
            </div>

            <div class="col">

              <a href="../forgot_password.php">Quên mật khẩu?</a>
            </div>
          </div>


          <button type="submit" class="btn btn-primary btn-block mb-4" name="login">Đăng nhập</button>


          <div class="text-center">
            <p>Chưa có tài khoản? <a href="../reg.php">Đăng ký</a></p>
            <p>hoặc đăng nhập bằng:</p>
            <button type="button" class="btn btn-link btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
              <i class="fab fa-google"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
              <i class="fab fa-github"></i>
            </button>
          </div>
        </form>

      </div>
    </div>



    </div>
    <div class="uper  side2">

      <div class="dropdown headerimg">
        <a href="../cart.php">
          <img src="img/cart.png" alt="" srcset=""><sup><?php $cart = ItemInCart();
                                                        echo $cart; ?></sup>
          <p>Cart</p>
        </a>
      </div>
    </div>
  </header>
  <div>
    <h3 class="link_w"> <a href="../../index.php">Home /</a> <a href="../men.php">Men /</a>
    </h3>

  </div>

  <!-- Fetch product details from database -->
  <?php
  // include('../../db/connect.php');

  if (isset($_GET['id'])) {
    $p_id = $_GET['id'];
    $sql = "select * from product where p_id='$p_id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
      $row = mysqli_fetch_array($res);
      $p_name = $row['p_name'];
      $p_details = $row['p_details'];
      $p_price = $row['p_price'];
      $p_img1 = $row['p_img1'];
      $p_img2 = $row['p_img2'];
      $p_img3 = $row['p_img3'];
      $p_img4 = $row['p_img4'];
    } else {
      die(mysqli_error($conn));
    }
   
  }

  ?>


  <!-- product details-->
  <div class="image ">
    <img class="none" src="img/<?php echo $p_img1; ?>" data-thumb="" alt="" />
    <img class="none" src="img/<?php echo $p_img2; ?>" data-thumb="demo/images/up.jpg" alt="" title="" />
    <img src="img/<?php echo $p_img3; ?>" data-thumb="demo/images/walle.jpg" alt="" data-transition="slideInLeft" />
    <img src="img/<?php echo $p_img4; ?>" data-thumb="demo/images/nemo.jpg" alt="" title="" />
  </div>







  <div class="details">
    <h1><?php echo $p_name; ?></h1>
    <h2 class="detailsx"><?php echo $p_details; ?></h2>
    <button class="rateing"> <b>4.5*</b> <i>| 1.1k lượt mua</i> </button>

    <h2 class="detailsy"><?php echo number_format($p_price, 0, ',', '.') . ' VNĐ'  ?> 
      <del>
        <?php
        echo number_format($p_price * 1.3, 0, ',', '.') . ' VNĐ';
        ?>
      </del>
      <div class="orange">(Giá iu thương)</div>
    </h2>
    <h3>Chọn size <a href="#"> ></a></h3>



    <div class="radio-toolbar">
      <input type="radio" id="radio38" name="radioFruit" value="38">
      <label class="mlxl" for="radio38">38</label>

      <input type="radio" id="radio40" name="radioFruit" value="40">
      <label for="radio40">40</label>

      <input type="radio" id="radio42" name="radioFruit" value="42">
      <label for="radio42">42</label>
      <input type="radio" id="radio44" name="radioFruit" value="44">
      <label for="radio44">44</label>
      <input type="radio" id="radio46" name="radioFruit" value="46">
      <label for="radio46">46</label>
    </div>
    <p>&nbsp;</p>

    <a href="../../add_to_cart.php?add_to_cart=<?php echo $p_id . '/' . $p_price; ?>"><button class="addbagb">Thêm vào giỏ hàng</button></a>
    <!-- <button class="wishlistb">WISHLIST</button> -->

   
    
  </div>
  <div class="productsdetails">
    <h2 class="productsdetailsh2">Mô tả sản phẩm</h2>
    
    <h3>Mô tả sản phẩm</h3>
    
    <h3>100 % Cotton co giãn hai chiều</h3>
    


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
  <!-- footer start-->






  <footer>
    <div class="footermain">
      <div class="app">
        <a href="#">
          <img src="img/google_play.png" alt="" srcset="">
        </a>
        <br>
        <a href="#">
          <img src="img/apple_store.png" alt="" srcset="">
        </a>
      </div>
      
      <div class="social">
        <ul>
          <li><a href="#"><img src="img/fb.png" alt="" srcset=""></a></li>
          <li><a href="#"><img src="img/insta.png" alt="" srcset=""></a></li>
          <li><a href="#"><img src="img/twitter.png" alt="" srcset=""></a></li>
          <li><a href="#"><img src="img/link.png" alt="" srcset=""></a></li>
        </ul>
      </div>

    </div>
  </footer>
</body>

</html>