<div class="container">

<!--Phần slide-->
  <div class="slide">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="view/images/11.jpg" class="d-block w-100 img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src="view/images/22.jpg" class="d-block w-100 img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src="view/images/44.jpg" class="d-block w-100 img-fluid" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>
  </div>

      <div class="t-container mt-4 mb-4">
        <div class="book-title-list-product">
          <h4 class=" text-success">Truyện mới nhất</h4>
        </div>
        <div class="container">
          <div class="row">
            <?php
              foreach($spnew as $sp){
                extract($sp);
                $linksp="index.php?act=sanphamct&idsp=".$id;
                $hinh=$img_path.$img;

                echo '<div class="col-sm-3 mt-2">
                        <a href="'.$linksp.'"><img class="imgfr imgsp" src="'.$hinh.'" alt=""></a>
                        <div class="insp text-center">
                          <p class="prsp">'.$author.'</p>
                          <a class="nasp" href="'.$linksp.'">'.$name.'</a>
                        </div>
                      </div>';

                }
            ?>

          </div>
        </div>

      </div>
</div>
