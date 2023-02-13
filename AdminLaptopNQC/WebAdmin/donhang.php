<?php
    require("./dbconfig.php");
    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý admin</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/admin1.css">
    <script type="text/javascript">
        function edt_id(id)
        {
            if(confirm('Bạn chắc chắn muốn cập nhật ?'))
            {
                window.location.href='update_admin.php?edit_id='+id;
            }
        }
        function delete_id(id)
        {
            if(confirm('Bạn chắc chắn muốn xóa ?'))
            {
                window.location.href='admin.php?delete_id='+id;
            }
        }
    </script>
</head>
<body>
    <!-- link1 https://previewcode.net/code/do-an-bai-tap-lon-xay-dung-website-ban-laptop-bang-php-mysql-pro -->
    <!-- link2 https://sharecode.vn/source-code/web-ban-may-tinh-full-code-php-bs4-adminweb-giao-dien-dep-19145.htm -->
    <div class="container-fluid">
        <div class="row header">
            <div class="col-xl-2 header-left">
                <p>Admin Laptop NQC</p>
            </div>
            <div class="col-xl-10 header-right">
                <i class="fa fa-bars" aria-hidden="true"></i>
                <p><i class="fa fa-user-circle-o" aria-hidden="true" style="font-size: 20px;padding-right: 10px;"></i>Nguyễn Quang Cường</p>
            </div>
        </div>
        
    </div>
    <div class="container-fluid">
        <div class="row bl">
            <div class="col-xl-2 nav">
                <ul>
                <li><a href="./home.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                    <li><a href="./danhmuc.php"><i class="fa fa-list-alt" aria-hidden="true"></i>Danh mục</a></li>
                    <li><a href="./sanpham.php"><i class="fa fa-database" aria-hidden="true"></i>Sản phẩm</a></li>
                    <li><a href=""><i class="fa fa-pencil" aria-hidden="true"></i>Bài viết</a></li>
                    <li><a href="./khachhang.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Quản lý khách hàng</a></li>
                    <li><a href="./lienhe.php"><i class="fa fa-phone" aria-hidden="true"></i>Liên hệ</a></li>
                    <li><a href="./donhang.php"><i class="fa fa-book" aria-hidden="true"></i>Đơn hàng</a></li>
                    <li><a href="./admin.php"><i class="fa fa-users" aria-hidden="true"></i>Quản lý admin</a></li>
                    <li><a href="./thongtin_2.php"><i class="fa fa-users" aria-hidden="true"></i>Thông tin trưởng nhóm</a></li>
                    <li><a href="./thongtin.php"><i class="fa fa-users" aria-hidden="true"></i>Thông tin sinh viên </a></li>
                </ul>
            </div>
            <div class="col-xl-10 content"> 
                <p>Danh sách đơn hàng</p>
                <div class="row content-container">
                    <table class="table table-bordered table-hover table-responsive-md" style="font-size: 12px;">
                        <thead>
                            <tr>
                                <th>Mã HĐ</th>
                                <th>Tên khách hàng</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                <th>Ngày đặt</th>
                                <th>Ngày nhận</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "select * from hoadon";
                                $result_set = mysqli_query($links,$sql);
                                if(mysqli_num_rows($result_set))
                                {
                                    while($row = mysqli_fetch_row($result_set))
                                    {
                                        ?>
                                            <tr>
                                                <td><?php echo $row[0]; ?></td>
                                                <td><?php echo $row[1]; ?></td>
                                                <td><?php echo $row[2]; ?></td>
                                                <td><?php echo $row[3]; ?></td>
                                                <td><?php echo $row[4]; ?></td>
                                                <td><?php echo $row[5]; ?></td>
                                                <td>
                                                    <?php
                                                        if($row[6]==1)
                                                            echo "<span style=\"color: #fff;background:red;padding:5px;\">Chưa xử lý</span>";
                                                        else if($row[6]==2) echo "<span style=\"color: #fff;background:green;padding:5px;\">Đã xử lý</span>";
                                                        else if($row[6]==3) echo "<span style=\"color: #fff;background:#ffc310;padding:5px;\">Đang giao hàng</span>";
                                                        else if($row[6]==4) echo "<span style=\"color: #fff;background:#20c2ee;padding:5px;\">Đã hoàn thành</span>";
                                                        else echo "<span style=\"color: #fff;background:#000;padding:5px;\">Hủy đơn</span>";
                                                    ?>
                                                </td>
                                                <td>
                                                <a href="./ctdonhang.php?mahd=<?php echo $row[0]; ?>" class="xx xanh update" style="color: #000;"><i class="fa fa-pencil" aria-hidden="true"></i>Chi tiết</a>
                                                </td>
                                            </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                    <tr>
                                    <td colspan="7">No Data Found !</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                        </tbody>
                    </table>
                    
                </div>

            </div>
        </div>
    </div>

</body>
</html>