<script>
      document.title = "Quản Lý Tài Khoản";
      document.title;
</script>
<div class="book-container">
      <div class="container">
        <div class="book-box-newproduct">
          <h4 class="title-list-product text-success">Danh sách tài khoản</h4>
        </div>

        <div class="listtypepro">
            <table class="table">
                <thead class="hh-table">
                  <tr>
                    <th scope="">#</th>
                    <th scope="col">Mã tk</th>
                    <th scope="col">Tên tk</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mật khẩu</th>
                    <th scope="col">Rule</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">SĐT</th>

                    <th scope="col"></th>
                  </tr>
                </thead>

                <tbody class="scroll-h">
                    <?php
                        foreach ($listtaikhoan as $taikhoan) {
                            extract($taikhoan);
                            $suatk="index.php?act=suatk&id=".$id_taikhoan;
                            $xoatk="index.php?act=xoatk&id=".$id_taikhoan;
                            echo '<tr>
                                    <th scope=""><input type="checkbox" name="" id=""></th>
                                    <td>'.$id_taikhoan.'</td>
                                    <td>'.$hoten.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$matkhau.'</td>
                                    <td>'.$rule.'</td>
                                    <td>'.$address.'</td>
                                    <td>'.$tel.'</td>

                                    <td><a href="'.$xoatk.'"><input class="d-sp_incart btn btn-success" type="button" value="Xóa"></a></td>
                                </tr>';
                        }
                    ?>
                </tbody>
              </table>
        </div>

      </div>

    </div>