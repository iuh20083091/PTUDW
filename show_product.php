﻿<?php 
include ("./class/clsStatusLogin.php");
include ("class/clsProduct.php");

if(isset($_REQUEST['category']))
{
	$category_id = $_REQUEST['category'];
}
else
{
	$category_id = 0;	
}

$giaodien = new statusLogin();
$p = new product();

$tenDM = $p->getValue("SELECT tenDM FROM danhMuc WHERE maDM = {$category_id}");
?>
<!DOCTYPE html>
<html lang="en">

<!-- Tieu Long Lanh Kute -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons Icon -->
<link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<title>Sản phẩm</title>

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all">

<link rel="stylesheet" type="text/css" href="css/animate.css" media="all">
<link rel="stylesheet" type="text/css" href="css/revslider.css" >
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="css/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="css/style1.css" media="all">
<link rel="stylesheet" type="text/css" href="css/main.css">
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,700,900' rel='stylesheet' type='text/css'>
</head>

<body class="cms-index-index cms-home-page">
<div id="page"> 
   <!-- Header -->
	<?php
    	$giaodien->showHeader();
	?>
  <!-- end header -->
  <div class="mm-toggle-wrap">
    <div class="mm-toggle"><i class="icon-align-justify"></i><span class="mm-label">Menu</span> </div>
  </div>
  <!-- Navbar -->
  <nav>
    <div class="container">
      <div class="row">
        <div class="nav-inner col-lg-12">
          <ul id="nav" class="hidden-xs">
            <li class="level0 parent drop-menu "><a href="index.php"><span>Home</span></a>
             <!-- <ul class="level1">
                <li class="level1 first parent"><a href="index.html"><span>Home Version 1</span></a></li>
                <li class="level1 parent"><a href="../version_2/index.html"><span>Home Version 2</span></a></li>
                <li class="level1 parent"><a href="../version_3/index.html"><span>Home Version 3</span></a></li>
           
              </ul>-->
            </li>
            <li class="level0 parent drop-menu"><a href="#"><span>Trang</span></a>
              <ul class="level1">
                <li class="level1 first"><a href="show_product.php"><span>Danh mục sản phẩm</span></a></li>
               <!-- <li class="level1 nav-10-2"><a href="list.html"><span>List</span></a></li>-->
                <!--<li class="level1 nav-10-3"><a href="product_detail.html"><span>Product Detail</span></a></li>-->
                <li class="level1 nav-10-4"><a href="shopping_cart.php"><span>Giỏ hàng</span></a></li>
                <li class="level1 first parent"><a href="checkout.php"><span>Thanh toán</span></a>  </li>
               <!-- <li class="level1 nav-10-4"><a href="wishlist.html"><span>Wishlist</span></a></li>-->
              <!--  <li class="level1"><a href="dashboard.html"><span>Dashboard</span></a></li>
                <li class="level1"><a href="multiple_addresses.html"><span>Multiple Addresses</span></a></li>
                <li class="level1"><a href="about_us.html"><span>About us</span></a></li>
                <li class="level1"><a href="compare.html"><span>Compare</span></a></li>
                
                <li class="level1"><a href="faq.html"><span>FAQ</span></a></li>
                <li class="level1"><a href="quick_view.html"><span>Quick view </span></a></li>-->
                <li class="level1"><a href="login.php"><span>Đăng nhập</span></a></li>
                
                <li class="level1 first parent"><a href="blog.php"><span>Bài viết</span></a>
                 <!-- <ul class="level2 right-sub">
                    <li class="level2 nav-2-1-1 first"><a href="blog_detail.html"><span>Blog Detail</span></a></li>
                  </ul>-->
                </li>
                <li class="level1"><a href="contact_us.html"><span>Liên hệ</span></a></li>
               <!-- <li class="level1"><a href="404error.html"><span>404 Error Page</span></a></li>-->
              </ul>
            </li>
             <li class="mega-menu"><a href="gioithieu.php" class="level-top"><span>Giới thiệu</span></a></li>
            <li class="mega-menu active"><a href="show_product.php" class="level-top"><span>Book</span></a>
              <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                <div class="container">
                  <div class="level0-wrapper2">
                    <div class="col-1">
                      <div class="nav-block nav-block-center">
                        <ul class="level0">
                          <li class="level1 nav-6-1 parent item"><a href="show_product.php" class=""><span>Sách giáo khoa</span></a>
                            <!--<ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="grid.html" class=""><span>Clutch Handbags</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html" class=""><span>Diaper Bags</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html" class=""><span>Bags</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html" class=""><span>Hobo handbags</span></a></li>
                            </ul>-->
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--nav-block nav-block-center-->
               <!--     <div class="col-2">
                      <div class="menu_image"><a href="#" title=""><img src="images/menu_image.jpg" alt="menu_image"></a></div>
                      <div class="menu_image1"><a href="#" title=""><img src="images/menu_image1.jpg" alt="menu_image"></a></div>
                    </div>
                  </div>-->
                  <!--level0-wrapper2--><!-- </div>
              </div> 
            </li> -->
            <li class="mega-menu"><a href="show_product.php" class="level-top"><span>Từ điển</span></a>
              <!--<div  style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                <div class="container">
                  <div class="level0-wrapper2">
                    <div class="nav-block nav-block-center">
                      <ul class="level0">
                        <li class="level1 nav-6-1 parent item"><a href="grid.html" class=""><span>Shoes</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Sport Shoes</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Casual Shoes</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Leather Shoes</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>canvas shoes</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Dresses</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Casual Dresses</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Evening</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Designer</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Party</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Jackets</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Coats</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Formal Jackets</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Leather Jackets</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Blazers</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Watches</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Fasttrack</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Casio</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Titan</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Tommy-Hilfiger</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Sunglasses</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Ray Ban</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Fasttrack</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Police</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Oakley</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Accesories</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Backpacks</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Wallets</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Laptops Bags</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Belts</span></a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>-->
                    <!--level0-wrapper2-->
                 <!--   <div class="nav-add">
                      <div class="push_item">
                        <div class="push_img"><a href="#"><img alt="sunglass" src="images/menu_man_sunglass.png"></a></div>
                      </div>
                      <div class="push_item">
                        <div class="push_img"><a href="#"><img alt="watch" src="images/menu_man_watch.png"></a></div>
                      </div>
                      <div class="push_item">
                        <div class="push_img"><a href="#"><img alt="jeans" src="images/menu_man_jeans.png"></a></div>
                      </div>
                      <div class="push_item push_item_last">
                        <div class="push_img"><a href="#"><img alt="shoes" src="images/menu_man_shoes.png"></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>-->
            </li>
           <li class="mega-menu"><a href="show_product.php" class="level-top"><span>Truyện tranh</span></a>
             <!-- <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                <div class="container">
                  <div class="level0-wrapper2">
                    <div class="nav-block nav-block-center">
                      <ul class="level0">
                        <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Mobiles</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Samsung</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Nokia</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>IPhone</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Sony</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="grid.html" class=""><span>Accesories</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Mobile Memory Cards</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Cases &amp; Covers</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Mobile Headphones</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Bluetooth Headsets</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Cameras</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Camcorders</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Point &amp; Shoot</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Digital SLR</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Camera Accesories</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Audio &amp; Video</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>MP3 Players</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>IPods</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Speakers</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Video Players</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Computer</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>External Hard Disk</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Pendrives</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Headphones</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>PC Components</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Appliances</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Vaccum Cleaners</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Indoor Lighting</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Kitchen Tools</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Water Purifier</span></a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>-->
                  <!--level0-wrapper2-->
             <!--     <div class="nav-add">
                    <div class="push_item">
                      <div class="push_img"><a href="#"><img alt="phone" src="images/menu_ele_phone.png"></a></div>
                    </div>
                    <div class="push_item">
                      <div class="push_img"><a href="#"><img alt="camera" src="images/menu_ele_camera.png"></a></div>
                    </div>
                    <div class="push_item">
                      <div class="push_img"><a href="#"><img alt="ipod" src="images/menu_ele_ipod.png"></a></div>
                    </div>
                    <div class="push_item push_item_last">
                      <div class="push_img"><a href="#"><img alt="laptop" src="images/menu_ele_laptop.png"></a></div>
                    </div>
                  </div>
                </div>
              </div>-->
            </li>
         <li class="mega-menu"><a class="level-top" href="show_product.php"><span>Tiểu thuyết</span></a>
             <!--<div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                <div class="container">
                  <div class="level0-wrapper2">
                    <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                      <ul class="level0">
                        <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Living Room</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Racks &amp; Cabinets</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Sofas</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Chairs</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Tables</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="grid.html" class=""><span>Dining &amp; Bar</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Dining Table Sets</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Serving Trolleys</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Bar Counters</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Dining Cabinets</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Bedroom</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Beds</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Chest of Drawers</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid-2.html"><span>Wardrobes &amp; Almirahs</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Nightstands</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Kitchen</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Kitchen Racks</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Kitchen Fillings</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Wall Units</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Benches &amp; Stools</span></a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>-->
                    <!--nav-block nav-block-center-->
                   <!-- <div class="nav-block nav-block-right std grid12-4"><a href="#"><img src="images/menu_furniture_2.png" alt="furniture"></a> </div>-->
                    <!--nav-block nav-block-right std grid12-4--><!-- </div>
                </div>-->
                <!--level0-wrapper2--> 
             <!--</div> -->
            </li>
            <li class="level0 nav-8 level-top"><a href="show_product.php" class="level-top"><span>Đời sống</span></a></li>
           <!-- <li class="nav-custom-link mega-menu"> <a class="level-top" href="#"><span>Custom</span></a>
              <div class="level0-wrapper custom-menu" style="left: 0px; display: none;">
                <div class="container">
                  <div class="header-nav-dropdown-wrapper clearer">
                    <div class="grid12-5">
                      <div class="custom_img"><a href="#"><img src="images/custom-img1.jpg" alt="custom img1"></a></div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                      <button class="learn_more_btn" title="Add to Cart" type="button"><span>Learn More</span></button>
                    </div>
                    <div class="grid12-5">
                      <div class="custom_img"><a href="#"><img src="images/custom-img2.jpg" alt="custom img2"></a></div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                      <button class="learn_more_btn" title="Add to Cart" type="button"><span>Learn More</span></button>
                    </div>
                    <div class="grid12-5">
                      <div class="custom_img"><a href="#"><img src="images/custom-img3.jpg" alt="custom img3"></a></div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                      <button class="learn_more_btn" title="Add to Cart" type="button"><span>Learn More</span></button>
                    </div>
                    <div class="grid12-5">
                      <div class="custom_img"><a href="#"><img src="images/custom-img4.jpg" alt="custom img4"></a></div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                      <button class="learn_more_btn" title="Add to Cart" type="button"><span>Learn More</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </li>-->
          </ul>
          <div class="menu_top">
            <div class="top-cart-contain pull-right"> 
              <!-- Top Cart -->
              <div class="mini-cart">
                <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"><a href="shopping_cart.php"><span class="hidden-xs">Giỏ hàng(3)</span></a></div>
                <div>
                  <div class="top-cart-content" style="display: none;">
                    <div class="block-subtitle">
                      <div class="top-subtotal">3 items, <span class="price">$180.00</span> </div>
                      <!--top-subtotal-->
                      <div class="pull-right">
                        <button title="View Cart" class="view-cart" type="button"><a href="shopping_cart.php"><span>Xem giỏ hàng</span></a></button>
                      </div>
                      <!--pull-right--> 
                    </div>
                    <!--block-subtitle-->
                    <ul class="mini-products-list" id="cart-sidebar">
                      <li class="item first">
                        <div class="item-inner"><a class="product-image" title="Sample Product" href="#l"><img alt="Sample Product" src="images/book/image1.jpg"></a>
                          <div class="product-details">
                            <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                            <!--access--> <strong>1</strong> x <span class="price">$99.00</span>
                            <p class="product-name"><a href="product_detail.php">Người Giàu Có Nhất Thành Babylon</a></p>
                          </div>
                        </div>
                      </li>
                      <li class="item last">
                        <div class="item-inner"><a class="product-image" title="Sample Product" href="#"><img alt="Sample Product" src="images/book/image2.jpg"></a>
                          <div class="product-details">
                            <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                            <!--access--> <strong>1</strong> x <span class="price">$16.00</span>
                            <p class="product-name"><a href="product_detail.php">Doremon</a></p>
                          </div>
                        </div>
                      </li>
                      <li class="item last">
                        <div class="item-inner"><a class="product-image" title="Sample Product" href="#"><img alt="Sample Product" src="images/book/image3.png"></a>
                          <div class="product-details">
                            <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                            <!--access--> <strong>1</strong> x <span class="price">$65.00</span>
                            <p class="product-name"><a href="product_detail.php">Từ điển Anh-Việt</a></p>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <div class="actions">
                      <button class="btn-checkout" title="Checkout" type="button"><a href="shopping_cart.php"><span style="color:white;">Thanh toán</span></a></button>
                    </div>
                    <!--actions--> 
                  </div>
                </div>
              </div>
              <!-- Top Cart -->
              <div id="ajaxconfig_info" style="display:none"><a href="#/"></a>
                <input value="" type="hidden">
                <input id="enable_module" value="1" type="hidden">
                <input class="effect_to_cart" value="1" type="hidden">
                <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>


  <!-- end nav --> 
  <!-- Breadcrumbs -->
  <div class="breadcrumbs bounceInUp animated">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>» </span></li>
            <li class="">
			<?php
			  echo "<a title='Go to Home Page' href='show_product.php?category={$category_id}'>$tenDM</a>"; 
			?><span>» </span></li>
           <!-- <li class="category13"><strong>Tops & Tees</strong></li>-->
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  <!-- Main Container -->
  <section class="main-container col2-left-layout bounceInUp animated">
  <div class="page-header"><div class="container"><div class="row">
  <div class="col-xs-12">
              <h2>
              <?php
              	echo $tenDM;
			  ?>
              </h2></div></div></div>
            </div>
    <div class="container">
      <div class="row">
        <div class='col-main col-sm-9 col-sm-push-3'>
          <article class='col-main'>
            <div class='toolbar'>
              <div id='sort-by'>
                <label class='left'>Sắp xếp theo: </label>
                <ul>
                  <li><a href='#'>Vị trí<span class='right-arrow'></span></a>
                    <ul>
                      <li><a href='#'>Tên</a></li>
                      <li><a href='#'>Giá</a></li>
                      <li><a href='#'>Vị trí</a></li>
                    </ul>
                  </li>
                </ul>
                <a class='button-asc left' href='#' title='Set Descending Direction'><span class='glyphicon glyphicon-arrow-up'></span></a> </div>
              <div class='pager'>
                <div id='limiter'>
                  <label>Xem: </label>
                  <ul>
                    <li><a href='#'>15<span class='right-arrow'></span></a>
                      <ul>
                        <li><a href='#'>20</a></li>
                        <li><a href='#'>30</a></li>
                        <li><a href='#'>35</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <div class='pages'>
                  <label>Trang:</label>
                  <ul class='pagination'>
                    <li><a href='#'>&laquo;</a></li>
                    <li class='active'><a href='#'>1</a></li>
                    <li><a href='#'>2</a></li>
                    <li><a href='#'>3</a></li>
                    <li><a href='#'>4</a></li>
                    <li><a href='#'>5</a></li>
                    <li><a href='#'>&raquo;</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class='category-products'>
              <?php
                $p->showProducts($category_id);
              ?>
            </div>
          </article>
          <!--	///*///======    End article  ========= //*/// --> 
        </div>
        <div class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
          <aside class="col-left sidebar">
          <div class="side-nav-categories">
              <div class="block-title"> Danh mục </div>
              <!--block-title--> 
              <!-- BEGIN BOX-CATEGORY -->
              <div class="box-content box-category">
                <?php
                	$p->showCategory($category_id);
				?>
              </div>
              <!--box-content box-category--> 
            </div>
            <div class="block block-banner"><a href="#"><img alt="block-banner" src="images/silde/banner3.png" width="280" height="200"></a></div>
            <div class="block block-banner"><a href="#"><img alt="block-banner" src="images/silde/banner4.png" width="280" height="200"></a></div>

      </div>
    </div>
  </section>
  <!-- Main Container End --> 
  <div class="top-banner-section wow bounceInUp animated">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col add-banner1">
          <div class="top-b-text"></div></div>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col free-shipping"></div>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-6">
        <div class="col add-banner2">
         <div class="top-b-text"></div>
          </div> 
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col last offer"></div>
        </div>
      </div>
    </div>
  </div>
 <!-- end banner section -->
  <div class="brand-logo">
    <div class="container">
      <div class="slider-items-products">
        <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6">
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo1.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo2.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo3.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo4.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo5.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo6.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo1.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo4.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Footer -->
  <?php
  	$giaodien->showFooter();
  ?>
</div>
<div id="mobile-menu">
  <div class="mm-search">
    <form name="search">
      <div class="input-group">
        <div class="input-group-btn">
          <button class="btn-default" type="submit"><i class="icon-search"></i></button>
        </div>
        <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
      </div>
    </form>
  </div>
  <ul>
    <li> </li>
    <li>
      <div class="home"><a href="index.php"><i class="icon-home"></i>Home</a> </div>
    </li>
    <li><a href="#">Pages</a>
      <ul>
        <li><a href="show_product.php">Grid</a></li>
        <li> <a href="list.php">List</a></li>
        <li> <a href="product_detail.php">Product Detail</a></li>
        <li> <a href="shopping_cart.php">Shopping Cart</a></li>
        <li><a href="checkout.php">Checkout</a></li>
        <li> <a href="wishlist.html">Wishlist</a></li>
        <li> <a href="dashboard.html">Dashboard</a></li>
        <li> <a href="multiple_addresses.html">Multiple Addresses</a></li>
        <li> <a href="about_us.html">About us</a></li>
        <li><a href="compare.html">Compare</a></li>
 	   <li><a href="faq.html">FAQ</a></li>
        <li><a href="quick_view.php">Quick view</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="blog.php">Blog</a>
          <ul>
            <li><a href="blog_detail.php">Blog Detail</a></li>
          </ul>
        </li>
        <li><a href="contact_us.html">Contact us</a></li>
        <li><a href="404error.html">404 Error Page</a></li>
      </ul>
    </li>
    <li><a href="show_product.php">Sách </a>
      
    </li>
    <li><a href="show_product.php">Truyện tranh</a>
     <!-- <ul>
        <li> <a href="grid.html" class="">Shoes</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Sport Shoes</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Casual Shoes</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Leather Shoes</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">canvas shoes</a></li>
          </ul>
        </li>
        <li> <a href="#.html">Dresses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Casual Dresses</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Evening</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Designer</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Party</a></li>
          </ul>
        </li>
        <li> <a href="#.html">Jackets</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Coats</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Formal Jackets</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Leather Jackets</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Blazers</a></li>
          </ul>
        </li>
        <li> <a href="#.html">Watches</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Fasttrack</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Casio</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Titan</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Tommy-Hilfiger</a></li>
          </ul>
        </li>
        <li> <a href="#/sunglasses.html">Sunglasses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Ray Ban</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Fasttrack</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Police</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Oakley</a></li>
          </ul>
        </li>
        <li> <a href="grid.html">Sách kinh tế </a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Backpacks</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Wallets</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Laptops Bags</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Belts</a></li>
          </ul>
        </li>
      </ul>-->
    </li>
    <li><a href="show_product.php">Từ điển</a>
     <!-- <ul>
        <li> <a href="grid.html"><span>Mobiles</span></a>
          <ul>
            <li> <a href="grid.html"><span>Samsung</span></a></li>
            <li> <a href="grid.html"><span>Nokia</span></a></li>
            <li> <a href="grid.html"><span>IPhone</span></a></li>
            <li> <a href="grid.html"><span>Sony</span></a></li>
          </ul>
        </li>
        <li> <a href="grid.html" class=""><span>Accesories</span></a>
          <ul>
            <li> <a href="grid.html"><span>Mobile Memory Cards</span></a></li>
            <li> <a href="grid.html"><span>Cases &amp; Covers</span></a></li>
            <li> <a href="grid.html"><span>Mobile Headphones</span></a></li>
            <li> <a href="grid.html"><span>Bluetooth Headsets</span></a></li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Cameras</span></a>
          <ul>
            <li> <a href="grid.html"><span>Camcorders</span></a></li>
            <li> <a href="grid.html"><span>Point &amp; Shoot</span></a></li>
            <li> <a href="grid.html"><span>Digital SLR</span></a></li>
            <li> <a href="grid.html"><span>Camera Accesories</span></a></li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Audio &amp; Video</span></a>
          <ul>
            <li> <a href="grid.html"><span>MP3 Players</span></a></li>
            <li> <a href="grid.html"><span>IPods</span></a></li>
            <li> <a href="grid.html"><span>Speakers</span></a></li>
            <li> <a href="grid.html"><span>Video Players</span></a></li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Computer</span></a>
          <ul>
            <li> <a href="grid.html"><span>External Hard Disk</span></a></li>
            <li> <a href="grid.html"><span>Pendrives</span></a></li>
            <li> <a href="grid.html"><span>Headphones</span></a></li>
            <li> <a href="grid.html"><span>PC Components</span></a></li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Appliances</span></a>
          <ul>
            <li> <a href="grid.html"><span>Vaccum Cleaners</span></a></li>
            <li> <a href="grid.html"><span>Indoor Lighting</span></a></li>
            <li> <a href="grid.html"><span>Kitchen Tools</span></a></li>
            <li> <a href="grid.html"><span>Water Purifier</span></a></li>
          </ul>
        </li>
      </ul>-->
    </li>
    <li><a href="show_product.php">Tiểu thuyết</a>
      <!--<ul>
        <li> <a href="grid.html">Living Room</a>
          <ul>
            <li> <a href="grid.html">Racks &amp; Cabinets</a></li>
            <li> <a href="grid.html">Sofas</a></li>
            <li> <a href="grid.html">Chairs</a></li>
            <li> <a href="grid.html">Tables</a></li>
          </ul>
        </li>
        <li> <a href="grid.html" class="">Dining &amp; Bar</a>
          <ul>
            <li> <a href="grid.html">Dining Table Sets</a></li>
            <li> <a href="grid.html">Serving Trolleys</a></li>
            <li> <a href="grid.html">Bar Counters</a></li>
            <li> <a href="grid.html">Dining Cabinets</a></li>
          </ul>
        </li>
        <li> <a href="grid.html">Bedroom</a>
          <ul>
            <li> <a href="grid.html">Beds</a></li>
            <li> <a href="grid.html">Chest of Drawers</a></li>
            <li> <a href="grid.html">Wardrobes &amp; Almirahs</a></li>
            <li> <a href="grid.html">Nightstands</a></li>
          </ul>
        </li>
        <li> <a href="grid.html">Kitchen</a>
          <ul>
            <li> <a href="grid.html">Kitchen Racks</a></li>
            <li> <a href="grid.html">Kitchen Fillings</a></li>
            <li> <a href="grid.html">Wall Units</a></li>
            <li> <a href="grid.html">Benches &amp; Stools</a></li>
          </ul>
        </li>
      </ul>-->
    </li>
    <li><a href="show_product.php">Đời sống</a></li>
    <li><a href="contact_us.html">Contact Us</a></li>
  </ul>
</div>


<!-- End Footer --> 
<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/slider.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script> 
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script> 
<script src="https://kit.fontawesome.com/e9dbdfe1dd.js" crossorigin="anonymous"></script>
</body>

<!-- Tieu Long Lanh Kute -->
</html>