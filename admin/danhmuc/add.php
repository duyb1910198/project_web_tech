<div class="book-container">
  <div class="container">
    <div class="book-box-newproduct">
      <h4 class="title-list-product text-success">Thêm danh mục</h4>
</div>
<div class="listtypepro ">
      <form action="index.php?act=adddm" method="post">
        <div class="form-group">
              <label for="maloai">Mã loại:</label><br>
              <input type="text" name="maloai" disabled>
        </div>
        <div class="form-group">
              <label for="tenloai">Tên loại:</label><br>
              <input type="text" name="tenloai">
        </div>
            <input type="submit" name="them" id="" value="Thêm">
            <input type="reset" name="" id="" value="Hủy">
            <a href="index.php?act=listdm"><input type="button" name="" id="" value="Danh sách"></a>

            <?php
              if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>

      </form>
    </div>

  </div>

</div>