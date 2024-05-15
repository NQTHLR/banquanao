<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <link rel="shortcut icon" href="img/fab.png" type="../image/x-icon">

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://res.cloudinary.com/veseylab/raw/upload/v1636192990/magicmouse/magic_mouse-1.2.1.cdn.min.js"></script>
  <script src="js/js_own.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <title>HRX | Điều khoản và điều kiện</title>
</head>

<body>
  <style>
    body {
      width: 70%;
      margin: 20px;
      margin-left: 7%;
      text-align: left;
      background-color: #ffe8fe;

    }



    #toTopBtn {
      position: fixed;
      bottom: 26px;
      right: 39px;
      z-index: 98;
      padding: 21px;
      background-color: hsla(5, 76%, 62%, .8);

    }

    .js .cd-top--fade-out {
      opacity: .5;
    }

    .js .cd-top--is-visible {
      visibility: visible;
      opacity: 1;
    }

    .js .cd-top {
      visibility: hidden;
      opacity: 0;
      transition: opacity .3s, visibility .3s, background-color .3s;
    }

    .cd-top {
      position: fixed;
      bottom: 20px;
      bottom: var(--cd-back-to-top-margin);
      right: 20px;
      right: var(--cd-back-to-top-margin);
      display: inline-block;
      height: 40px;
      height: var(--cd-back-to-top-size);
      width: 40px;
      width: var(--cd-back-to-top-size);
      box-shadow: 0 0 10px rgba(0, 0, 0, .05) !important;
      background: url(https://res.cloudinary.com/dxfq3iotg/image/upload/v1571057658/cd-top-arrow.svg) no-repeat center 50%;
      background-color: hsla(5, 76%, 62%, .8);
      background-color: hsla(var(--cd-color-3-h), var(--cd-color-3-s), var(--cd-color-3-l), 0.8);
    }

    .height {
      height: 3000px;
    }
  </style>
  <script>
    $(document).ready(function() {
      $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
          $('#toTopBtn').fadeIn();
        } else {
          $('#toTopBtn').fadeOut();
        }
      });

      $('#toTopBtn').click(function() {
        $("html, body").animate({
          scrollTop: 0
        }, 1000);
        return false;
      });
    });
  </script>
  <!-- Back to top button -->
  <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>



  <h2 style="text-align: center;"><b>Điều khoản và điều kiện</b></h2>
  <p><a href="reg.php">Quay lại</a></p>
  <p>Cập nhật lần cuối: 2023-11-16</p>
  <h3>1. <b>Giới thiệu</b></h3>
  
</body>

</html>