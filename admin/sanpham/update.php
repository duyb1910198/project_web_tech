<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath="../upload/".$img;
    if(is_file($hinhpath)){
        $hinh="<img src='".$hinhpath."' height='80'>";
    }else{
        $hinh="no photo";
    }
?>
<div class="book-container">
      <div class="container">
        <div class="book-box-newproduct">
          <h4>Cập nhật truyện</h4>
        </div>
        <div class="listtypepro ">
          <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="form-group">
            <input type="hidden" name="id" value="<?=$id?>">
            <select name="iddm" id="">
                <option value="0" selected>Tất cả</option>
                <?php
                  foreach($listdanhmuc as $danhmuc){

                    if($iddm==$danhmuc['id']) $s="selected"; else $s="";
                    echo'<option value="'.$danhmuc['id'].'" '.$s.'>'.$danhmuc['name'].'</option>';
                  }
                ?>

              </select>
            </div>
            <div class="form-group">
              <label for="tensp">Tên truyện:</label><br>
              <input type="text" name="tensp" value="<?=$name?>">
            </div>
            <div class="form-group">
              <label for="tacgia">Tác giả:</label><br>
              <input type="text" name="tacgia" value="<?=$author?>">
            </div>
            <div class="form-group">
              <label for="hinh">Hình:</label><br>
              <input type="file" name="hinh">
              <?=$hinh?>
            </div>
            <div class="form-group">
              <label for="mota">Mô tả:</label><br>
              <textarea name="mota" id="" cols="30" rows="10" value="<?=$mota?>"></textarea>
            </div>

            <input type="submit" name="capnhat" id="" value="Cập nhật">
            <input type="reset" name="" id="" value="Hủy">
            <a href="index.php?act=listsp"><input type="button" name="" id="" value="Danh sách"></a>

            <?php
              if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>

          </form>
        </div>

      </div>

    </div>