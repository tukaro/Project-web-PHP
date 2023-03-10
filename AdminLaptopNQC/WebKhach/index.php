<?php
    require("./dbconfig.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop NQC</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./fontawesome/css/font-awesome.min.css">
    <script src="./JQuery/jquery-3.6.0.min.js"></script>
    <script src="./js/index.js"></script>
    <script language="javascript">
        $(document).ready(function (e){
            $(".hv").hover( 
		        function (e) { $(".subnav").fadeIn(200)},
		        function (e) { $(".subnav").fadeOut(100)}
	        );
            $(".hv2").hover( 
		        function (e) { $(".login").fadeIn(200)},
		        function (e) { $(".login").fadeOut(100)}
	        );
        });
    </script>
    <style>
        .product-price-km{
            text-decoration: line-through;
            font-size: 13px;
        }
    </style>
</head>
<body>
    <!-- header -->
    <div id="header">
        <div class="container">
            <div class="row navigation">
                <div class="col-xl-2 center">
                    <!-- <img src="./images/lenovo.png" alt=""> -->
                    <a href="index.php" class="logo">Laptop NQC</a>
                </div>
                <div class="col-xl-1 hv center">
                    <a href="" class="a">Laptop</a>
                        <div class="subnav">
                            <div class="row">
                                <div class="col-xl-2 ">
                                    <ul>
                                        <li><a href="laptopdell.php">Dell</a></li>
                                        <li><a href="">Inspiron</a></li>
                                        <li><a href="">Vostro</a></li>
                                        <li><a href="">XPS</a></li>
                                        <li><a href="">G-Gaming Series</a></li>
                                        <li><a href="">Alienware</a></li>
                                        <li><a href="">Latitude</a></li>
                                        <li><a href="">Precision</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-2 ">
                                    <ul>
                                        <li><a href="">Lenovo</a></li>
                                        <li><a href="">Inspiron</a></li>
                                        <li><a href="">IdeaPad</a></li>
                                        <li><a href="">Legion</a></li>
                                        <li><a href="">ThinkBook</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-2 ">
                                    <ul>
                                        <li><a href="">Razer</a></li>
                                        <li><a href="">Blade Stealth</a></li>
                                        <li><a href="">Blade 15"</a></li>
                                        <li><a href="">Blade Pro 17"</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-2 ">
                                    <ul>
                                        <li><a href="">HP</a></li>
                                        <li><a href="">Elitebook</a></li>
                                        <li><a href="">ZBook</a></li>
                                        <li><a href="">Envy</a></li>
                                        <li><a href="">Omen</a></li>
                                        <li><a href="">Pavilion</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-2 ">
                                    <ul>
                                        <li><a href="">Apple</a></li>
                                        <li><a href="">Macbook Pro 13</a></li>
                                        <li><a href="">Macbook Pro 15</a></li>
                                        <li><a href="">Macbook Pro 16</a></li>
                                        <li><a href="">Macbook Air</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-2 ">
                                    <p>T?? v???n mi???n ph??</p>
                                    <a href="">039 456 1950</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-2 ">
                                    <ul>
                                        <li><a href="">Microsoft</a></li>
                                        <li><a href="">Surface Laptop</a></li>
                                        <li><a href="">Surface Book</a></li>
                                        <li><a href="">Surface Pro</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-2 ">
                                    <ul>
                                        <li><a href="">Asus</a></li>
                                        <li><a href="">ExpertBook</a></li>
                                        <li><a href="">Zenbook</a></li>
                                        <li><a href="">Vivobook</a></li>
                                        <li><a href="">TUF/ROG Gaming</a></li>
                                        <li><a href="">ProArt Studio</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-2 ">
                                    <ul>
                                        <li><a href="">MSI</a></li>
                                        <li><a href="">GF Series</a></li>
                                        <li><a href="">Prestige</a></li>
                                        <li><a href="">Modern Series</a></li>
                                        <li><a href="">Alpha Series</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-2 ">
                                    <ul>
                                        <li><a href="">Acer</a></li>
                                        <li><a href="">Nitro</a></li>
                                        <li><a href="">Predator</a></li>
                                        <li><a href="">Swift</a></li>
                                        <li><a href="">Aspire</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-2 ">
                                    <ul>
                                        <li><a href="">LG</a></li>
                                        <li><a href="">Gram</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-2 ">
                                    <ul>
                                        <li><a href="">Theo nhu c???u</a></li>
                                        <li><a href="">V??n ph??ng</a></li>
                                        <li><a href="">Gaming</a></li>
                                        <li><a href="">Thi???t k??? ????? ho???</a></li>
                                        <li><a href="">????? ho??? media</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
                <script src="./js/modal.js"></script>
                <div class="col-xl-1 center">
                    <a href="" class="a">PC</a>
                </div>
                <div class="col-xl-1 center">
                    <a href="" class="a">Ph??? ki???n</a>
                </div>
                <div class="col-xl-4 search center">
                    <input type="text" name="" id="" placeholder="T??m ki???m">
                    <button><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
                <div class="col-xl-1 center icon">
                    <i class="fa fa-bell-o" aria-hidden="true"></i>
                </div>
                <div class="col-xl-1 center icon">
                    <a href="./cart.php" style="color: black;"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                    
                </div>
                <div class="col-xl-1 hv2 center icon">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    <div class="login">
                        <div id="login" onclick="abc();">????ng nh???p</div>
                        <div id="register" onclick="abc2();">????ng k??</div>
                    </div>
                    <div id="modal-login" class="modal1">
                        <div class="modal-content">
                            <p class="modal-title">
                                <span style="border-bottom: 3px solid #06c1d4;;" onclick="abc();">????ng nh???p</span>  
                                <span onclick="abc2();">????ng k??</span>  
                            </p>
                            <form method="post" action="khachhang.php">
                                <div class="form-group">
                                    <label for="sdt">S??? ??i???n tho???i</label>
                                    <input type="text" class="form-control" name="sdt" id="sdt" placeholder="S??? ??i???n tho???i ????ng nh???p">
                                </div>
                                <div class="form-group">
                                    <label for="sdt">M???t kh???u</label>
                                    <input type="password" class="form-control" name="sdt" id="sdt" placeholder="Nh???p m???t kh???u">
                                </div>
                                <button name="btn-login" class="btn btn-primary btn-block">????ng nh???p</button>
                            </form>
                        </div>
                    </div>
                    <div id="modal-register" class="modal1">
                        <div class="modal-content">
                            <p class="modal-title">
                                <span onclick="abc();">????ng nh???p</span>  
                                <span style="border-bottom: 3px solid #06c1d4;" onclick="abc2();">????ng k??</span>  
                            </p>
                            <form method="post" action="khachhang.php">
                                <div class="form-group">
                                    <label for="sdt">H??? t??n</label>
                                    <input type="text" class="form-control" name="sdt" id="sdt" placeholder="Nh???p h??? t??n">
                                </div>
                                <div class="form-group">
                                    <label for="sdt">S??? ??i???n tho???i</label>
                                    <input type="text" class="form-control" name="sdt" id="sdt" placeholder="S??? ??i???n tho???i ????ng nh???p">
                                </div>
                                <div class="form-group">
                                    <label for="sdt">M???t kh???u</label>
                                    <input type="password" class="form-control" name="sdt" id="sdt" placeholder="Nh???p m???t kh???u">
                                </div>
                                <div class="form-group">
                                    <label for="sdt">?????a ch???</label>
                                    <input type="text" class="form-control" name="sdt" id="sdt" placeholder="Nh???p ?????a ch???">
                                </div>
                                <button name="btn-register" class="btn btn-primary btn-block">????ng k??</button>
                            </form>
                        </div>
                    </div>
                    <script src="./js/modal.js"></script>
                </div>
            </div>
        </div>    
    </div>
        <!-- Slider -->
    <div id="slider">
        <div class="container">
            <div class="row slider-content">
                <div class="col-xl-8 col-md-8">
                    <img src="./images/slider1.jpg" alt="" id="anh_slider">
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="row">
                        <div class="col-xl-12 title col-md-12">
                            <a href="">Back2School Dream Set: B??ng n??? Si??u khuy???n m???i m??a Back To School t???i ThinkPro</a>
                            
                        </div>
                        <div class="col-xl-12 title col-md-12">
                            <a href="">S???m Nitro 5 ?????nh, nh???n code game kh???ng!</a>
                        </div>
                        <div class="col-xl-12 title col-md-12">
                            <a href="">????nh gi?? chi ti???t Acer Predator Helios 300 (2021): D??ng v??? c??, s???c m???nh m???i!</a>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div id="content">
        <div class="container">     
            <h2>Gi???m gi?? s???c</h2>
            <div class="product-container">
                <div class="row">
                    <div class="col-xl-2dot4 border product">
                        <div class="col-xl-12 product-img">
                            <a href=""><img src="./images/a-1-1.jpg" alt="" class="items-img"></a>
                        </div>
                        <div class="col-xl-12 product-information">
                            <a href="" class="product-name">Dell XPS 13 9310</a>
                            <div class="product-id">SKU: XPS931007NU</div>
                            <div class="product-price">29.990.000 ???</div>
                            <p class="product-km">Qu?? t???ng k??m</p>    
                        </div>
                    </div>
                    <div class="col-xl-2dot4 border product">
                        <div class="col-xl-12 product-img">
                            <a href=""><img src="./images/a-1-2.jpg" alt="" class="items-img"></a>
                        </div>
                        <div class="col-xl-12 product-information">
                            <a href="" class="product-name">Dell XPS 13 9305</a>
                            <div class="product-id">SKU: XPS930504NS</div>
                            <div class="product-price">34.990.000 ???</div>
                            <p class="product-km">Qu?? t???ng k??m</p>    
                        </div>
                    </div>
                    <div class="col-xl-2dot4 border product">
                        <div class="col-xl-12 product-img">
                            <a href=""><img src="./images/a-1-3.jpg" alt="" class="items-img"></a>
                        </div>
                        <div class="col-xl-12 product-information">
                            <a href="" class="product-name">Apple Macbook Air (M1, Late 2020 - Apple Silicon)</a>   
                            <div class="product-id">SKU: MacbookAir13L202001NU</div>
                            <div class="product-price">23.990.000 ???</div>
                            <p class="product-km">Qu?? t???ng k??m</p>    
                        </div>
                    </div>
                    <div class="col-xl-2dot4 border product">
                        <div class="col-xl-12 product-img">
                            <a href=""><img src="./images/a-1-4.jpg" alt="" class="items-img"></a>
                        </div>
                        <div class="col-xl-12 product-information">
                            <a href="" class="product-name">Acer Predator Helios 300 2021</a>
                            <div class="product-id">SKU: Helios3152101CF</div>
                            <div class="product-price">33.990.000 ???</div>
                            <p class="product-km">Qu?? t???ng k??m</p>    
                        </div>
                    </div>
                    <div class="col-xl-2dot4 border product">
                        <div class="col-xl-12 product-img">
                            <a href=""><img src="./images/a-1-5.jpg" alt="" class="items-img"></a>
                        </div>
                        <div class="col-xl-12 product-information">
                            <a href="" class="product-name">Dell XPS 13 9300</a>
                            <div class="product-id">SKU: XPS930008NU</div>
                            <div class="product-price">29.990.000 ???</div>
                            <p class="product-km">Qu?? t???ng k??m</p>    
                        </div>
                    </div>
                </div>

            </div>
            <div class="xemthem">
                <a href="" class="view-more">Xem t???t c???</a>
            </div>
            <h2>M??y t??nh s??ch tay</h2>
            <div class="row fillter-home">
                <div class="col-xl-12 fillter-home-content">
                    <div class="title">Th????ng hi???u</div>
                    <img src="./images/lenovo.png" alt="">
                    <img src="./images/razer.png" alt="">
                    <img src="./images/dell.png" alt="">
                    <img src="./images/asus.png" alt="">
                    <img src="./images/hp.png" alt="">
                    <img src="./images/microsoft.png" alt="">
                    <img src="./images/apple.png" alt="">
                    <img src="./images/5f6c4ee7ed9fd_1600933607.png" alt="">
                </div>
            </div>
            <div class="row fillter-home">
                <div class="col-xl-12 fillter-home-content">
                    <div class="title">Kho???ng gi??</div>
                    <label for="">Tr??n 50 tri???u</label>
                    <label for="">40 - 50 tri???u</label>
                    <label for="">30 - 40 tri???u</label>
                    <label for="">20 - 30 tri???u</label>
                    <label for="">15 - 20 tri???u</label>
                    <label for="">10 - 15 tri???u</label>
                    <label for="">D?????i 10 tri???u</label>
                </div>
            </div>
            <div class="product-container">
                <div class="row ">
                        <div class="col-xl-2dot4 border product">
                            <div class="col-xl-12 product-img">
                                <a href=""><img src="./images/a-2-1.jpg" alt="" class="items-img"></a>
                            </div>
                            <div class="col-xl-12 product-information">
                                <a href="" class="product-name">Acer Swift 5 14 (Ch??nh h??ng)</a>
                                <div class="product-id">SKU: Swift51402CF</div>
                                <div class="product-price">26.990.000 ???</div>
                                <p class="product-km">Qu?? t???ng k??m</p>
                                <!-- <a href=""><i class="fa fa-shopping-bag" aria-hidden="true"></i></a> -->
                                   
                            </div>
                        </div>

                        
                            <?php
                                $sql = "select * from sanpham";
                                $result_set = mysqli_query($links,$sql);
                                if(mysqli_num_rows($result_set))
                                {
                                    while($row = mysqli_fetch_row($result_set))
                                    {
                                        ?>
                                        <div class="col-xl-2dot4 border product">
                                            <div class="col-xl-12 product-img">
                                                <a href="./product-details.php?masp=<?php echo $row[0];?>"><img src="./images/<?php echo $row[2] ?>" alt="" class="items-img"></a>
                                            </div>
                                            <div class="col-xl-12 product-information">
                                                <a href="./product-details.php?masp=<?php echo $row[0];?>" class="product-name"><?php echo $row[1] ?></a>
                                                <div class="product-id">SKU: <?php echo $row[0] ?></div>
                                                <div class="product-price"><?php echo number_format($row[4],0,',','.'); ?> ???</div>
                                                <div class="product-price-km"><?php echo number_format($row[3],0,',','.'); ?> ???</div>                                     
                                                <p class="product-km">Qu?? t???ng k??m</p>    
                                            </div>
                                        </div>

                            <?php
                                    }
                                }
                            ?>
                            
                    
                        
                        <!-- <div class="col-xl-2dot4 border product">
                            <div class="col-xl-12 product-img">
                                <a href=""><img src="./images/a-2-2.jpg" alt="" class="items-img"></a>
                            </div>
                            <div class="col-xl-12 product-information">
                                <a href="" class="product-name">AVITA Liber V14 Intel</a>
                                <div class="product-id">SKU: LiberV14i01CF</div>
                                <div class="product-price">21.990.000 ???</div>
                                <p class="product-km">Qu?? t???ng k??m</p>    
                            </div>
                        </div>
                        <div class="col-xl-2dot4 border product">
                            <div class="col-xl-12 product-img">
                                <a href=""><img src="./images/a-2-3.jpg" alt="" class="items-img"></a>
                            </div>
                            <div class="col-xl-12 product-information">
                                <a href="" class="product-name">Dell Inspiron 15 5502</a>   
                                <div class="product-id">SKU: Inspiron550203NS</div>
                                <div class="product-price">18.990.000 ???</div>
                                <p class="product-km">Qu?? t???ng k??m</p>    
                            </div>
                        </div>
                        <div class="col-xl-2dot4 border product">
                            <div class="col-xl-12 product-img">
                                <a href=""><img src="./images/a-2-4.jpg" alt="" class="items-img"></a>
                            </div>
                            <div class="col-xl-12 product-information">
                                <a href="" class="product-name">Asus ZenBook 14 Q407iq</a>
                                <div class="product-id">SKU: ZenbookQ407iq01NS</div>
                                <div class="product-price">18.490.000 ???</div>
                                <p class="product-km">Qu?? t???ng k??m</p>    
                            </div>
                        </div>
                        <div class="col-xl-2dot4 border product">
                            <div class="col-xl-12 product-img">
                                <a href=""><img src="./images/a-2-5.jpg" alt="" class="items-img"></a>
                            </div>
                            <div class="col-xl-12 product-information">
                                <a href="" class="product-name">Dell Inspiron 15 5505</a>
                                <div class="product-id">SKU: Inspiron550502NS</div>
                                <div class="product-price">18.990.000 ???</div>
                                <p class="product-km">Qu?? t???ng k??m</p>    
                            </div>
                        </div>
                        <div class="col-xl-2dot4 border product">
                            <div class="col-xl-12 product-img">
                                <a href=""><img src="./images/a-3-1.jpg" alt="" class="items-img"></a>
                            </div>
                            <div class="col-xl-12 product-information">
                                <a href="" class="product-name">Lenovo IdeaPad 5 14 (Ch??nh h??ng - Intel Gen 11)</a>
                                <div class="product-id">SKU: Ideapad51401CF</div>
                                <div class="product-price">17.990.000 ???</div>
                                <p class="product-km">Qu?? t???ng k??m</p>    
                            </div>
                        </div>
                        <div class="col-xl-2dot4 border product">
                            <div class="col-xl-12 product-img">
                                <a href=""><img src="./images/a-1-2.jpg" alt="" class="items-img"></a>
                            </div>
                            <div class="col-xl-12 product-information">
                                <a href="" class="product-name">Dell XPS 13 9305</a>
                                <div class="product-id">SKU: XPS930504NS</div>
                                <div class="product-price">34.990.000 ???</div>
                                <p class="product-km">Qu?? t???ng k??m</p>    
                            </div>
                        </div>
                        <div class="col-xl-2dot4 border product">
                            <div class="col-xl-12 product-img">
                                <a href=""><img src="./images/a-3-3.jpg" alt="" class="items-img"></a>
                            </div>
                            <div class="col-xl-12 product-information">
                                <a href="" class="product-name">Lenovo IdeaPad 3 14 (AMD Ryzen 5000)</a>   
                                <div class="product-id">SKU: IDP314R500001CF</div>
                                <div class="product-price">14.290.000 ???</div>
                                <p class="product-km">Qu?? t???ng k??m</p>    
                            </div>
                        </div>
                        <div class="col-xl-2dot4 border product">
                            <div class="col-xl-12 product-img">
                                <a href=""><img src="./images/a-3-4s.jpg" alt="" class="items-img"></a>
                            </div>
                            <div class="col-xl-12 product-information">
                                <a href="" class="product-name"> Lenovo IdeaPad 3 14 Intel (Nh???p kh???u)</a>
                                <div class="product-id">SKU: ideapad314Ni01NF</div>
                                <div class="product-price">14.490.000 ???</div>
                                <p class="product-km">Qu?? t???ng k??m</p>    
                            </div>
                        </div>
                        <div class="col-xl-2dot4 border product">
                            <div class="col-xl-12 product-img">
                                <a href=""><img src="./images/a-3-5.jpg" alt="" class="items-img"></a>
                            </div>
                            <div class="col-xl-12 product-information">
                                <a href="" class="product-name">ASUS ZenBook Duo 14 UX482</a>
                                <div class="product-id">SKU: ZenbookUX48201CF</div>
                                <div class="product-price">33.990.000 ???</div>
                                <p class="product-km">Qu?? t???ng k??m</p>    
                            </div>
                        </div> -->
                    
                </div>
                <!-- <div class="row">
                    
                </div> -->
                <div class="xemthem">
                <a href="" class="view-more">Xem t???t c???</a>
                </div>
            </div>
        </div>

    </div>
    <div id="footer">
        <div class="container">
            <div class="row footer-top">
                <div class="col-xl-8">
                    <h2>LAPTOP NQC</h2>
                </div>
                <div class="col-xl-4 footer-top-right">
                    <div>
                        <div>Hotline</div>
                        <a href="">039.456.1950</a>
                    </div>
                    <div class="item">
                        <a href="https://youtube.com"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        <a href="https://facebook.com"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                        <a href="https://instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="row footer-content">
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-xl-3 link_list-items">
                            <h3>S???n ph???m v?? d???ch v???</h3>
                            <a href="" class="block">Laptop Dell</a>
                            <a href="" class="block">Laptop HP</a>
                            <a href="" class="block">Laptop ThinkPad</a>
                            <a href="" class="block">Laptop Lenovo</a>
                        </div>
                        <div class="col-xl-3 link_list-itemss">
                            <a href="" class="block">Alienware</a>
                            <a href="" class="block">Macbook</a>
                            <a href="" class="block">Laptop Razer</a>
                            <a href="" class="block">Ph??? ki???n</a>
                        </div>
                        <div class="col-xl-3 link_list-items">
                            <h3>Ch??nh s??ch</h3>
                            <a href="" class="block">B???o h??nh</a>
                            <a href="" class="block">V???n chuy???n</a>
                            <a href="" class="block">Thanh to??n</a>
                            <a href="./lienhe.html" class="block">Li??n h???</a>
                        </div>
                        <div class="col-xl-3 link_list-items">
                            <h3>V??? Laptop NQC</h3>
                            <a href="" class="block">L???ch s??? th??nh l???p</a>
                            <a href="" class="block">Gi?? tr??? c???t l??i</a>
                            <a href="" class="block">T???m nh??n, S??? m???nh</a>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4">
                    <h3>H??? th???ng c???a h??ng</h3>
                    <h3 class="city">H?? n???i:</h3>
                    <div>Khoa CNTT Tr?????ng ?????i h???c ??i???n L???c</div>
                    <div>235 Ho??ng Qu???c Vi???t, C??? Nhu???, Nam T??? Ni??m, H?? N???i</div>
                    <a href="" class="block map">Ch??? ???????ng</a>
                </div>
            </div>
            <hr>
            <p class="Copyright">B???n quy???n thu???c v??? Nguy???n Quang C?????ng D14CNPM6</p>
        </div>
    </div>
    <script>
        show_slider();
    </script>
</body>
</html>