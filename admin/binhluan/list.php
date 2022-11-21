<script>
      document.title = "Quản Lý Bình Luận";
      document.title;
</script>
<div class="tree-container">
      <div class="container">
        <div class="tree-box-newproduct">
          <h4 class="title-list-product text-success">Danh sách bình luận</h4>
        </div>

        <div class="listtypepro">
            <table class="table">
                <thead class="hh-table">
                  <tr>
                    <th scope="">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Nội dung bình luận</th>
                    <th scope="col">IDUSER</th>
                    <th scope="col">IDPRODUCT</th>
                    <th scope="col">Ngày bình luận</th>

                    <th scope="col"></th>
                  </tr>
                </thead>

                <tbody>
                    <?php
                        foreach ($listbinhluan as $binhluan) {
                            extract($binhluan);
                            $xoabl="index.php?act=xoabl&id=".$id;
                            echo '<tr>
                                    <th scope=""><input type="checkbox" name="" id=""></th>
                                    <td>'.$id.'</td>
                                    <td>'.$noidung.'</td>
                                    <td>'.$iduser.'</td>
                                    <td>'.$idpro.'</td>
                                    <td>'.$ngaybinhluan.'</td>

                                    <td><a href="'.$xoabl.'"><input class="d-sp_incart btn btn-success" type="button" value="Xóa"></a></td>
                                </tr>';
                        }
                    ?>

                </tbody>
              </table>
        </div>

      </div>

    </div>