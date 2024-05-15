<?php
include('../db/connect.php');
include('../backend/common_function.php');
session_start();

$username = $_SESSION['admin_username'];


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="profile_style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HRX | Admin | Products</title>

    <link rel="shortcut icon" href="../img/fab.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="side_bar">
        <div class="logo-details">
            <img src="../img/icon.png" alt="" style="width:100px;height:50px !important">
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="profile.php">
                    <i class="fa-thin fa"></i>
                    <i class='bx bx-user'></i>
                    <span class="links_name">Profile</span>
                </a>

            </li>
            <li>
                <a href="products.php" class="active">
                    <i class="fa-thin fa"></i>
                    <?php
                    $product_quantity = ProductQuantity();
                    if ($product_quantity > 0) {
                        echo "<i class='bx bx-cart-alt bx-flashing' style='color:#f0f238' ><sup>!</sup></i>";
                    } else {
                        echo "<i class='bx bx-cart-alt'></i>";
                    }
                    ?>
                    <!-- <i class='bx bxs-cart-download bx-tada' style='color:#fffcfc'></i> -->
                    <span class="links_name">View Products</span>
                </a>
            </li>
            <li>
                <a href="view_orders.php">
                    <i class="fa-thin fa"></i>
                    <?php
                    $orders = PendingOrders();
                    if ($orders > 0) {
                        echo "<i class='bx bxs-cart-download bx-tada' style='color:#fffcfc'><sup>$orders</sup></i>";
                    } else {
                        echo "<i class='bx bxs-cart-download' style='color:#fffcfc'><sup>$orders</sup></i>";
                    }
                    ?>
                    <!-- <i class='bx bxs-cart-download bx-tada' style='color:#fffcfc'><sup><?php echo PendingOrders(); ?></sup></i> -->
                    <span class="links_name">Đơn hàng chờ xác nhận</span>
                </a>

            </li>

            <li>
                <a href="view_admins.php">
                    <i class="fa-thin fa"></i>
                    <i class='bx bx-user-check' style='color:#ffffff'></i>
                    <span class="links_name">Xem tài khoản admin</span>
                </a>

            </li>


            <li>
                <a href="setting.php">
                    <i class="fa-thin fa"></i>
                    <i class='bx bx-cog bx-spin' style='color:#ffffff'></i>
                    <span class="links_name">Cài đặt</span>
                </a>

            </li>
            <li class="profile">
                <div class="profile-details">
                    <!--<img src="profile.jpg" alt="profileImg">-->
                    <div class="name_job">
                        <div class="name"><?php echo $username; ?></div>
                    </div>
                </div>
                <a href="logout.php"><i class='bx bx-log-out' id="log_out" style="left:100px !important"></i></a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="text">Sản phẩm

            <button type="button" class="btn btn-primary add_product_btn" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border:none !important">Thêm sản phẩm mới</button>

        </div>
        <div class="text-2">
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Từ khoá</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Số lượng</th>
                        <th colspan="2" class="text-center"> Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 1;
                    $query = "select * from product order by rand()";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        while ($data = mysqli_fetch_array($result)) {
                            $p_id = $data['p_id'];
                            $quantity = $data['p_quantity'];
                            if ($quantity > 0) {
                                echo '<tr>
                            <th scope="row">' . $count++ . '</th>
                            <td><img src="../page/Men/img/' . $data["p_img1"] . '" alt="" style="width:100px; height:100px; object-fit:contain; !important"></img></td>
                            <td>' . $data['p_name'] . '</td>
                            <td>' . $data['p_details'] . '</td>
                            <td>' . $data['p_keyword'] . '</td>
                            <td>' . number_format($data['p_price'] , 0, ',', '.') . ' VNĐ' .'</td>
                            <td>' . $data['p_quantity'] . '</td>
                            <td>
                            <a href="edit_product.php?id=' . $p_id . '" style=""><i class="bx bx-edit fa-2x" style="color:#00cc88" ></i></button></a>
                            </td>
                            <td>
                            <a href="delete_product.php?id=' . $p_id . '" onclick="return Message()"><i class="bx bx-trash fa-2x" style="color:#f80e0e" ></i></a>
                            </td>
                        </tr>';
                            } else {
                                echo '<tr class="table-warning">
                            <th scope="row">' . $count++ . '</th>
                            <td><img src="../page/Men/img/' . $data["p_img1"] . '" alt="" style="width:100px; height:100px; object-fit:contain; !important"></img></td>
                            <td>' . $data['p_name'] . '</td>
                            <td>' . $data['p_details'] . '</td>
                            <td>' . $data['p_keyword'] . '</td>
                            <td>'. number_format($data['p_price'] , 0, ',', '.') . ' VNĐ' .'</td>
                            <td>' . $data['p_quantity'] . '</td>
                            <td>
                            <a href="edit_product.php?id=' . $p_id . '" style=""><i class="bx bx-edit fa-2x" style="color:#00cc88" ></i></button></a>
                            </td>
                            <td>
                            <a href="delete_product.php?id=' . $p_id . '"  onclick="return Message()"><i class="bx bx-trash fa-2x" style="color:#f80e0e" ></i></a>
                            </td>
                        </tr>';
                            }
                        }
                    }
                    // <i class="bx bxs-edit" style="color:#3a3a3a" ></i> edit icon
                    // <i class="bx bxs-trash" style="color:#3a3a3a" ></i> delete icon

                    ?>


                </tbody>
            </table>
            <div class="d-flex justify-content-center mb-2">
                <!-- <button type="button" class="btn btn-primary">Add Product</button> -->
                <!-- <a href=""><button type="button" class="btn btn-outline-primary ms-1"><i class='bx bxs-edit' style='color:#3a3a3a'></i> Edit</button></a> -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border:none !important">Thêm sản phẩm mới</button>
            </div>
        </div>


    </section>

   

    <?php
    include('back_to_top.php');
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>

    <script>
        function Message() {
            return Confirm("Xác nhận xoá?");
        }
    </script>

</body>

</html>