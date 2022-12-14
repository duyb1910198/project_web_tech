<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web đọc sách</title>

    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/fonts/fontawesome-free-6.0.0-web/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="view/js/jQuery.js"></script>
    <script src="view/js/jquery.validator.js"></script>
</head>

<!--lưu các thông tin tài khoản trong session-->
<?php
  session_Start();
  if(isset($_SESSION['username']) && isset($_SESSION['rule'])){
    $user = $_SESSION['username'];
    $rule = $_SESSION['rule'];
    $id_user=$_SESSION['id_user'];
  }
?>

<body>
  <!--Phần header-->
  <div class="book-header">
    <!--Phần nav chính-->
    <div class="book-nav">
      <div class="container">
        <div class="row">

          <!--Phần logo-->
          <div class="col-sm-3 d-flex justify-content-center">
            <a class="text-success book-logo justify-content-center" href="index.php?act=home">
              <img src="view/images/logo.png" alt="..." width="80" height="80">Truyện Mon
            </a>
          </div>

          <!--Phần search-->
          <div class="col-sm-6 d-flex">
            <div class="book-search-group">
              <form action="index.php?act=sanpham" method="post">
                <input type="text" name="kyw" placeholder="Tìm truyện, danh mục">
                <button type="submit" class="btn btn-success "><i class="justify-content-center fa-solid fa-magnifying-glass"></i></i></button>
              </form>
            </div>
          </div>

          <!--Phần Access-->
          <div class="col">
            <div class="book-subnamenav row">

              <!--Phần user-->
              <div class="col">
                <a class="text-success user" href="#" data-toggle="modal" data-target="#exampleModal">
                  <i class="fa-solid fa-user"></i>
                  <span class="px-1">
                    <?php
                      if(isset($user))
                        echo $user;
                      else
                        echo 'Tài khoản';
                    ?>
                  </span>
                </a>
                <!-- Button trigger modal -->
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalLabel">
                          <?php
                            if(isset($user)){
                              echo 'Bạn muốn đăng xuất';
                            }else{
                              echo 'Bạn đã có tài khoản chưa';
                            }
                          ?>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-footer">
                        <a href="#" class="mr-auto btn btn-info"><i class="fa-solid fa-bell"></i> Thông báo</a>
                        <?php
                          if(isset($user)){
                            echo ' <a href="index.php?act=capnhattk&user='.$user.'" class="btn btn-success">Cập Nhật</a>
                              <a href="index.php?act=logout" class="btn btn-danger">Đăng Xuất</a>';
                          }else{
                            echo '<a href="index.php?act=dangnhap" class="btn btn-success">Đăng Nhập</a>
                                  <a href="index.php?act=dangky" class="btn btn-success">Đăng Ký</a>';
                          }
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Phần nav phụ-->
    <div class="book-subnav">
      <ul class="nav justify-content-center">

        <li class="nav-item">
          <a class="nav-link text-success" href="index.php">Trang chủ</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-success" href=""><i class="fas fa-bars"></i> Danh mục</a>
          <ul class="book-type-product">
            <?php
              $dsdm=loadall_danhmuc();
              foreach($dsdm as $dm){
                extract($dm);
                $linkdm="index.php?act=sanpham&iddm=".$id;
                echo '<li>
                        <a class="text-success" href="'.$linkdm.'">'.$name.'</a>
                      </li>';
              }
            ?>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link text-success" href="index.php?act=sanpham">Tất cả truyện</a>
        </li>

      </ul>
    </div>
  </div>



