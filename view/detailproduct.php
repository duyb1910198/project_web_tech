<script>
      document.title = "<?=$name?>";
      document.title;
</script>
<div class="container">


      <div class="book-container mt-4 mb-4">
        <?php
          extract($onesp);
        ?>
        <div class="book-title-list-product">
          <h4 class="title-list-product text-success"><?=$name?></h4>
        </div>
        <div class="row m-4">
          <div class="col-sm-6">
            <?php
              $img=$img_path.$img;
              echo '<img class="img-fluid imgsp" src="'.$img.'"><br>';
            ?>
          </div>
          <div class="col-sm-6 detail_sp">
            <?php
              echo '<div class="prsp">'.$author.'</div>';

            ?>
          </div>
        </div>
        <div class="row m-4">
            <?php
              echo '<div class="dessp ">'.$mota.'</div>
              ';
            ?>
        </div>


        <script>
          src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
        </script>

        <script>
          $(document).ready(function(){
              $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
          });
        </script>

        <div class="book-title-list-product">
          <h4 class="title-list-product text-success">Bình luận</h4>
        </div>
        <div class="container" id="binhluan">

        </div>



        <div class="book-title-list-product">
          <h4 class="title-list-product text-success">Truyện cùng loại</h4>
        </div>

        <div class="container">
          <div class="row">
            <?php
              foreach($sp_cungloai as $sp_cungloai){
                extract($sp_cungloai);
                $linksp="index.php?act=sanphamct&idsp=".$id;
                $hinh=$img_path.$img;
                echo '<div class="col-sm-3 mt-2">
                        <a href="'.$linksp.'"><img class="imgfr imgsp" src="'.$hinh.'" alt=""></a>
                        <div class="insp text-center" >
                          <p class="prsp">'.$author.'</p>
                          <a class="nasp" href="'.$linksp.'">'.$name.'</a>
                        </div>
                      </div>';;
              }
            ?>
          </div>
        </div>

      </div>
</div>