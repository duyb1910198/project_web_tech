<script>
      document.title = "Truyện";
      document.title;
</script>
<div class="container">
    <div class="book-container ">

            <div class="book-title-list-product">
            <h4 class="title-list-product text-success">Truyện</h4>

            </div>
            <div class="container">
            <div class="row">
                <?php
                foreach($dssp as $sp){
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