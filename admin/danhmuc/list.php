<script>
      document.title = "Quản Lý Danh Mục";
      document.title;
</script>
<div class="book-container">
      <div class="container">
        <div class="book-box-newproduct">
          <h4 class="title-list-product text-success">Danh sách danh mục</h4>
        </div>

        <div class="listtypepro">
            <table class="table">
                <thead class="hh-table">
                  <tr>
                    <th scope="">#</th>
                    <th scope="col">Mã loại</th>
                    <th scope="col">Tên loại</th>
                    <th scope="col">Chọn</th>
                  </tr>
                </thead>

                <tbody>
                    <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            $suadm="index.php?act=suadm&id=".$id;
                            $xoadm="index.php?act=xoadm&id=".$id;
                            echo '<tr>
                                    <th scope=""><input type="checkbox" name="" id=""></th>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td><a href="'.$suadm.'"><input class="d-sp_incart btn btn-info" type="button" value="Sửa"></a> | <a href="'.$xoadm.'"><input class="d-sp_incart btn btn-success" type="button" value="Xóa"></a></td>
                                </tr>';
                        }
                    ?>
                </tbody>
              </table>
        </div>

        <a href="index.php?act=adddm"><input class="btn btn-info float-right" type="button" name="" id="" value="Thêm mới danh mục"></a>
      </div>

    </div>