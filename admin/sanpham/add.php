<div class="book-container">
      <div class="container">
        <div class="book-box-newproduct">
          <h4 class="text-success">Thêm truyện</h4>
        </div>
        <div class="listtypepro ">
          <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="">Danh mục:</label><br>
              <select name="iddm" id="">
                <?php
                  foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    echo'<option value="'.$id.'">'.$name.'</option>';

                  }


                ?>

              </select>
            </div>
            <div class="form-group">
              <label for="tensp">Tên truyện:</label><br>
              <input type="text" name="tensp">
            </div>
            <div class="form-group">
              <label for="tacgia">Tác giả:</label><br>
              <input type="text" name="tacgia">
            </div>
            <div class="form-group">
              <label for="hinh">Hình:</label><br>
              <input type="file" name="hinh">
            </div>
            <div class="form-group">
              <label for="mota">Mô tả:</label><br>
              <textarea name="mota" id="" cols="30" rows="10"></textarea>
            </div>

            <input type="submit" name="them" id="" value="Thêm">
            <input type="reset" name="" id="" value="Hủy">
            <a href="index.php?act=listsp"><input type="button" name="" id="" value="Danh sách"></a>

            <?php
              if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>

          </form>
        </div>

      </div>

    </div>