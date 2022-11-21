<script>
      document.title = "Quản Lý Truyện";
      document.title;
</script>
<div class="book-container">
      <div class="container">
        <div class="book-box-newproduct">
          <h4 class="title-list-product text-success">Danh sách truyện</h4>
        </div>

        <div class="listtypepro ">
            <form class="mb-2 mt-2" action="index.php?act=listsp" method="post">
              <input class="in-typesp" type="text" name="keyw">
              <select class="in-sesp" name="iddm" id="">
                <option value="0" selected>Tất cả</option>
                <?php
                   foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    echo'<option value="'.$id.'">'.$name.'</option>';

                  }
                ?>

              </select>
              <input class="d-sp_incart btn btn-danger" type="submit" name="listok" value="Go">

            </form>

            <table class="table">
                <thead class="hh-table">
                  <tr>
                    <th scope="">#</th>
                    <th scope="col">Mã truyện</th>
                    <th scope="col">Tên truyện</th>
                    <th scope="col">Tác giả</th>
                    <th scope="col">Hình</th>
                    <th scope="col">View</th>
                    <th scope="col"></th>
                  </tr>
                </thead>

                <tbody>
                    <?php
                        foreach ($listsanpham as $sanpham) {
                            extract($sanpham);
                            $suasp="index.php?act=suasp&id=".$id;
                            $xoasp="index.php?act=xoasp&id=".$id;
                            $hinhpath="../upload/".$img;
                            if(is_file($hinhpath)){
                              $hinh="<img src='".$hinhpath."' height='80'>";
                            }else{
                              $hinh="no photo";
                            }


                            echo '<tr>
                                    <th scope=""><input type="checkbox" name="" id=""></th>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td>'.$author.'</td>
                                    <td>'.$hinh.'</td>
                                    <td>'.$xem.'</td>
                                    <td><a href="'.$suasp.'"><input class="d-sp_incart btn btn-info" type="button" value="Sửa"></a> | <a href="'.$xoasp.'"><input class="d-sp_incart btn btn-success" type="button" value="Xóa"></a></td>
                                </tr>';
                        }
                    ?>
                </tbody>
              </table>
        </div>

        <a href="index.php?act=addsp"><input class="btn btn-info float-right" type="button" name="" id="" value="Thêm mới truyện"></a>
      </div>

    </div>