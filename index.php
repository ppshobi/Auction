<?php 
session_start();
include_once("includes/dbconn.php");
include_once("functions.php");
?>
<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
	<head>
		<title>Farmercart - Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!--meta info-->
		<meta name="author" content="">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="icon" type="image/ico" href="images/fav.ico">
		<!--stylesheet include-->
		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/camera.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/owl.transitions.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/jquery.custom-scrollbar.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
		<!--font include-->
		<link href="css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body>
		<!--boxed layout-->
		<div class="boxed_layout relative w_xs_auto">
			<!--[if (lt IE 9) | IE 9]>
				<div style="background:#fff;padding:8px 0 10px;">
				<div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix" style="padding:9px 0 0;float:left;width:83%;"><i class="fa fa-exclamation-triangle scheme_color f_left m_right_10" style="font-size:25px;color:#e74c3c;"></i><b style="color:#e74c3c;">Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:16%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_4 r_corners bg_scheme_color color_light d_inline_b t_align_c" target="_blank" style="margin-bottom:2px;">Update Now!</a></div></div></div></div>
			<![endif]-->
			<!--markup header-->
			<?php include_once("includes/header1.php");?>
			<!--content-->
			<div class="page_content_offset">
				<div class="container">
					<h2 class="tt_uppercase m_bottom_20 color_dark heading1 animate_ftr">All Products</h2>
					<!--filter navigation of products-->
					<ul class="horizontal_list clearfix tt_uppercase isotope_menu f_size_ex_large">
						<li class="active m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter="*">All</button></li>
						<li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter=".featured">Featured</button></li>
						<li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter=".new">New</button></li>
						<li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter=".specials">Specials</button></li>
						<li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter=".hit">Hit</button></li>
						<li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter=".random">Random</button></li>
						<li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter=".rated">Rated</button></li>
					</ul>
					<!--products-->
					<section class="products_container clearfix m_bottom_25 m_sm_bottom_15">
						<!--product item-->
						<?php
						$sql="SELECT * FROM product WHERE visibility=1 ORDER BY id DESC";
						$result=mysqlexec($sql);
						while($row=mysqli_fetch_assoc($result))
						{
							$prodid=$row['id'];
							$name=$row['name'];
							$descr=$row['descr'];
							$category=$row['category'];
							$price=$row['price'];
							$offerprice=$row['offerprice'];
							$pic1=$row['pic1'];
							$pic2=$row['pic2'];
							$pic3=$row['pic3'];
							$pic4=$row['pic4'];
							$pic5=$row['pic5'];
							$seller=$row['seller'];

						echo "<div class=\"product_item\">";
							echo "<figure class=\"r_corners photoframe shadow relative hit animate_ftb long\">";
								echo "<!--product preview-->";
								echo "<a href=\"#\" class=\"d_block relative pp_wrap\">";
									
									echo "<img src=\"products/". $seller . "/" . $prodid . "/" .$pic1 . "\"" . "class=\"tr_all_hover\" alt=\"\" width=\"230px\" height=\"230px\">";
									echo "<span data-popup=\"#quick_view_product". $prodid. "\"" . "class=\"button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none\">Quick View</span>\"";
								echo "</a>";
								echo "<!--description and price of product-->";
								echo "<figcaption>";
									echo "<h5 class=\"m_bottom_10\"><a href=\"#\" class=\"color_dark\">". $name . "</a></h5>";
									echo "<div class=\"clearfix\">";
										echo "<p class=\"scheme_color f_left f_size_large m_bottom_15\">" ; if($offerprice<$price){
												echo"<s>RS ". $price ."</s>";
												echo " RS ". $offerprice ."</p>";
											}else{
												echo " RS ". $price ."</p>";
											}
										
										
									echo "</div>";
									echo "<button class=\"button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0\">Add to Cart</button>";
								echo "</figcaption>";
							echo "</figure>";
						echo "</div>";


//quickview custom popup start
						echo "<!--custom popup-->\n";
echo "<div class=\"popup_wrap d_none\" id=\"quick_view_product". $prodid ."\">\n";
echo "		<section class=\"popup r_corners shadow\">\n";
echo "			<button class=\"bg_tr color_dark tr_all_hover text_cs_hover close f_size_large\"><i class=\"fa fa-times\"></i></button>\n";
echo "			<div class=\"clearfix\">\n";
echo "				<div class=\"custom_scrollbar\">\n";
echo "					<!--left popup column-->\n";
echo "					<div class=\"f_left half_column\">\n";
echo "						<div class=\"relative d_inline_b m_bottom_10 qv_preview\">\n";
echo "							<span class=\"hot_stripe\"><img src=\"images/sale_product.png\" alt=\"\"></span>\n";
echo "								<img src=\"products/". $seller . "/" . $prodid . "/" .$pic1 . "\"" ."class=\"tr_all_hover\" alt=\"\">\n";
echo "							</div>\n";
echo "							<!--carousel-->\n";
echo "							<div class=\"relative qv_carousel_wrap m_bottom_20\">\n";
echo "								<button class=\"button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_prev\">\n";
echo "									<i class=\"fa fa-angle-left \"></i>\n";
echo "								</button>\n";
echo "								<ul class=\"qv_carousel d_inline_middle\">\n";
echo "								<li data-src=\"products/". $seller . "/" . $prodid . "/" .$pic1 . "\">" . "<img src=\"products/". $seller . "/" . $prodid . "/" .$pic1 . "\"". "alt=\"\"></li>\n";
echo "									<li data-src=\"products/". $seller . "/" . $prodid . "/" .$pic2 . "\">" . "<img src=\"products/". $seller . "/" . $prodid . "/" .$pic2 . "\"". "alt=\"\"></li>\n";
echo "									<li data-src=\"products/". $seller . "/" . $prodid . "/" .$pic3 . "\">" . "<img src=\"products/". $seller . "/" . $prodid . "/" .$pic3 . "\"". "alt=\"\"></li>\n";
echo "									<li data-src=\"products/". $seller . "/" . $prodid . "/" .$pic4 . "\">" . "<img src=\"products/". $seller . "/" . $prodid . "/" .$pic4 . "\"". "alt=\"\"></li>\n";
echo "									<li data-src=\"products/". $seller . "/" . $prodid . "/" .$pic5 . "\">" . "<img src=\"products/". $seller . "/" . $prodid . "/" .$pic5 . "\"". "alt=\"\"></li>\n";
echo "								</ul>\n";
echo "								<button class=\"button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_next\">\n";
echo "									<i class=\"fa fa-angle-right \"></i>\n";
echo "								</button>\n";
echo "							</div>\n";
echo "							<div class=\"d_inline_middle\">Share this:</div>\n";
echo "							<div class=\"d_inline_middle m_left_5\">\n";
echo "								<!-- AddThis Button BEGIN -->\n";
echo "								<div class=\"addthis_toolbox addthis_default_style addthis_32x32_style\">\n";
echo "								<a class=\"addthis_button_preferred_1\"></a>\n";
echo "								<a class=\"addthis_button_preferred_2\"></a>\n";
echo "								<a class=\"addthis_button_preferred_3\"></a>\n";
echo "								<a class=\"addthis_button_preferred_4\"></a>\n";
echo "								<a class=\"addthis_button_compact\"></a>\n";
echo "								<a class=\"addthis_counter addthis_bubble_style\"></a>\n";
echo "								</div>\n";
echo "								<!-- AddThis Button END -->\n";
echo "							</div>\n";
echo "						</div>\n";
echo "						<!--right popup column-->\n";
echo "						<div class=\"f_right half_column\">\n";
echo "							<!--description-->\n";
echo "							<h2 class=\"m_bottom_10\"><a href=\"#\" class=\"color_dark fw_medium\">Eget elementum vel</a></h2>\n";
echo "							<div class=\"m_bottom_10\">\n";
echo "								<!--rating-->\n";
echo "								<ul class=\"horizontal_list d_inline_middle type_2 clearfix rating_list tr_all_hover\">\n";
echo "									<li class=\"active\">\n";
echo "										<i class=\"fa fa-star-o empty tr_all_hover\"></i>\n";
echo "										<i class=\"fa fa-star active tr_all_hover\"></i>\n";
echo "									</li>\n";
echo "									<li class=\"active\">\n";
echo "										<i class=\"fa fa-star-o empty tr_all_hover\"></i>\n";
echo "										<i class=\"fa fa-star active tr_all_hover\"></i>\n";
echo "									</li>\n";
echo "									<li class=\"active\">\n";
echo "										<i class=\"fa fa-star-o empty tr_all_hover\"></i>\n";
echo "										<i class=\"fa fa-star active tr_all_hover\"></i>\n";
echo "									</li>\n";
echo "									<li class=\"active\">\n";
echo "										<i class=\"fa fa-star-o empty tr_all_hover\"></i>\n";
echo "										<i class=\"fa fa-star active tr_all_hover\"></i>\n";
echo "									</li>\n";
echo "									<li>\n";
echo "										<i class=\"fa fa-star-o empty tr_all_hover\"></i>\n";
echo "										<i class=\"fa fa-star active tr_all_hover\"></i>\n";
echo "									</li>\n";
echo "								</ul>\n";
echo "								<a href=\"#\" class=\"d_inline_middle default_t_color f_size_small m_left_5\">1 Review(s) </a>\n";
echo "							</div>\n";
echo "							<hr class=\"m_bottom_10 divider_type_3\">\n";
echo "							<table class=\"description_table m_bottom_10\">\n";
echo "								<tr>\n";
echo "									<td>Manufacturer:</td>\n";
echo "									<td><a href=\"#\" class=\"color_dark\">Chanel</a></td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<td>Availability:</td>\n";
echo "									<td><span class=\"color_green\">in stock</span> 20 item(s)</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<td>Product Code:</td>\n";
echo "									<td>PS06</td>\n";
echo "								</tr>\n";
echo "							</table>\n";
echo "							<h5 class=\"fw_medium m_bottom_10\">Product Dimensions and Weight</h5>\n";
echo "							<table class=\"description_table m_bottom_5\">\n";
echo "								<tr>\n";
echo "									<td>Product Length:</td>\n";
echo "									<td><span class=\"color_dark\">10.0000M</span></td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<td>Product Weight:</td>\n";
echo "									<td>10.0000KG</td>\n";
echo "								</tr>\n";
echo "							</table>\n";
echo "							<hr class=\"divider_type_3 m_bottom_10\">\n";
echo "							<p class=\"m_bottom_10\">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit. </p>\n";
echo "							<hr class=\"divider_type_3 m_bottom_15\">\n";
echo "							<div class=\"m_bottom_15\">\n";
echo "								<s class=\"v_align_b f_size_ex_large\">Rs 152.00</s><span class=\"v_align_b f_size_big m_left_5 scheme_color fw_medium\">Rs 102.00</span>\n";
echo "							</div>\n";
echo "							<table class=\"description_table type_2 m_bottom_15\">\n";
echo "								<tr>\n";
echo "									<td class=\"v_align_m\">Size:</td>\n";
echo "									<td class=\"v_align_m\">\n";
echo "										<div class=\"custom_select f_size_medium relative d_inline_middle\">\n";
echo "											<div class=\"select_title r_corners relative color_dark\">s</div>\n";
echo "											<ul class=\"select_list d_none\"></ul>\n";
echo "											<select name=\"product_name\">\n";
echo "												<option value=\"s\">s</option>\n";
echo "												<option value=\"m\">m</option>\n";
echo "												<option value=\"l\">l</option>\n";
echo "											</select>\n";
echo "										</div>\n";
echo "									</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<td class=\"v_align_m\">Quantity:</td>\n";
echo "									<td class=\"v_align_m\">\n";
echo "										<div class=\"clearfix quantity r_corners d_inline_middle f_size_medium color_dark\">\n";
echo "											<button class=\"bg_tr d_block f_left\" data-direction=\"down\">-</button>\n";
echo "											<input type=\"text\" name=\"\" readonly value=\"1\" class=\"f_left\">\n";
echo "											<button class=\"bg_tr d_block f_left\" data-direction=\"up\">+</button>\n";
echo "										</div>\n";
echo "									</td>\n";
echo "								</tr>\n";
echo "							</table>\n";
echo "							<div class=\"clearfix m_bottom_15\">\n";
echo "								<button class=\"button_type_12 r_corners bg_scheme_color color_light tr_delay_hover f_left f_size_large\">Add to Cart</button>\n";
echo "								<button class=\"button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0\"><i class=\"fa fa-heart-o f_size_big\"></i><span class=\"tooltip tr_all_hover r_corners color_dark f_size_small\">Wishlist</span></button>\n";
echo "								<button class=\"button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0\"><i class=\"fa fa-files-o f_size_big\"></i><span class=\"tooltip tr_all_hover r_corners color_dark f_size_small\">Compare</span></button>\n";
echo "								<button class=\"button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0 relative\"><i class=\"fa fa-question-circle f_size_big\"></i><span class=\"tooltip tr_all_hover r_corners color_dark f_size_small\">Ask a Question</span></button>\n";
echo "							</div>\n";
echo "						</div>\n";
echo "					</div>\n";
echo "				</div>\n";
echo "			</section>\n";
echo "		</div>\n";
//custom pop upend
						

						}
						
?>
						
					</section>
					<!--banners-->
					<section class="row clearfix m_bottom_45 m_sm_bottom_35">
						<div class="col-lg-6 col-md-6 col-sm-6 animate_half_tc">
							<a href="#" class="d_block banner wrapper r_corners relative m_xs_bottom_30">
								<img src="images/banner_img_1.png" alt="">
								<span class="banner_caption d_block vc_child t_align_c w_sm_auto">
									<span class="d_inline_middle">
										<span class="d_block color_dark tt_uppercase m_bottom_5 let_s">New Collection!</span>
										<span class="d_block divider_type_2 centered_db m_bottom_5"></span>
										<span class="d_block color_light tt_uppercase m_bottom_25 m_xs_bottom_10 banner_title"><b>Colored Fashion</b></span>
										<span class="button_type_6 bg_scheme_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">Shop Now!</span>
									</span>
								</span>
							</a>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 animate_half_tc">
							<a href="#" class="d_block banner wrapper r_corners type_2 relative">
								<img src="images/banner_img_2.png" alt="">
								<span class="banner_caption d_block vc_child t_align_c w_sm_auto">
									<span class="d_inline_middle">
										<span class="d_block scheme_color banner_title type_2 m_bottom_5 m_mxs_bottom_5"><b>-50%</b></span>
										<span class="d_block divider_type_2 centered_db m_bottom_5 d_sm_none"></span>
										<span class="d_block color_light tt_uppercase m_bottom_15 banner_title_3 m_md_bottom_5 d_mxs_none">On All<br><b>Sunglasses</b></span>
										<span class="button_type_6 bg_dark_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">Shop Now!</span>
									</span>
								</span>
							</a>
						</div>
					</section>
					
					<!--banners-->
					<div class="row clearfix">
						<div class="col-lg-4 col-md-4 col-sm-4">
							<a href="#" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners red t_align_c tt_uppercase vc_child n_sm_vc_child">
								<span class="d_inline_middle">
									<img class="d_inline_middle m_md_bottom_5" src="images/banner_img_3.png" alt="">
									<span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
										<b>100% Satisfaction</b><br><span class="color_dark">Guaranteed</span>
									</span>
								</span>
							</a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4">
							<a href="#" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners green t_align_c tt_uppercase vc_child n_sm_vc_child">
								<span class="d_inline_middle">
									<img class="d_inline_middle m_md_bottom_5" src="images/banner_img_4.png" alt="">
									<span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
										<b>Free Shipping</b><br><span class="color_dark">On All Items</span>
									</span>
								</span>
							</a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4">
							<a href="#" class="d_block animate_ftb h_md_auto banner_type_2 r_corners orange t_align_c tt_uppercase vc_child n_sm_vc_child">
								<span class="d_inline_middle">
									<img class="d_inline_middle m_md_bottom_5" src="images/banner_img_5.png" alt="">
									<span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
										<b>Great Daily Deals</b><br><span class="color_dark">Shop Now!</span>
									</span>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!--markup footer-->
			<footer id="footer">
				<div class="footer_top_part">
					<div class="container">
						<div class="row clearfix">
							<div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
								<h3 class="color_light_2 m_bottom_20">About</h3>
								<p class="m_bottom_25">Ut pharetra augue nec augue. Nam elit agna, endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque.</p>
								<!--social icons-->
								<ul class="clearfix horizontal_list social_icons">
									<li class="facebook m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Facebook</span>
										<a href="#" class="r_corners t_align_c tr_delay_hover f_size_ex_large">
											<i class="fa fa-facebook"></i>
										</a>
									</li>
									<li class="twitter m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Twitter</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-twitter"></i>
										</a>
									</li>
									<li class="google_plus m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Google Plus</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-google-plus"></i>
										</a>
									</li>
									<li class="rss m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Rss</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-rss"></i>
										</a>
									</li>
									<li class="pinterest m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Pinterest</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-pinterest"></i>
										</a>
									</li>
									<li class="instagram m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Instagram</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-instagram"></i>
										</a>
									</li>
									<li class="linkedin m_bottom_5 m_sm_left_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">LinkedIn</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-linkedin"></i>
										</a>
									</li>
									<li class="vimeo m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Vimeo</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-vimeo-square"></i>
										</a>
									</li>
									<li class="youtube m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Youtube</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-youtube-play"></i>
										</a>
									</li>
									<li class="flickr m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Flickr</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-flickr"></i>
										</a>
									</li>
									<li class="envelope m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Contact Us</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-envelope-o"></i>
										</a>
									</li>
								</ul>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
								<h3 class="color_light_2 m_bottom_20">The Service</h3>
								<ul class="vertical_list">
									<li><a class="color_light tr_delay_hover" href="#">My account<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Order history<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Wishlist<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Vendor contact<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Front page<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Virtuemart categories<i class="fa fa-angle-right"></i></a></li>
								</ul>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
								<h3 class="color_light_2 m_bottom_20">Information</h3>
								<ul class="vertical_list">
									<li><a class="color_light tr_delay_hover" href="#">About us<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">New collection<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Best sellers<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Manufacturers<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Privacy policy<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Terms &amp; condition<i class="fa fa-angle-right"></i></a></li>
								</ul>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3">
								<h3 class="color_light_2 m_bottom_20">Newsletter</h3>
								<p class="f_size_medium m_bottom_15">Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
								<form id="newsletter">
									<input type="email" placeholder="Your email address" class="m_bottom_20 r_corners f_size_medium full_width" name="newsletter-email">
									<button type="submit" class="button_type_8 r_corners bg_scheme_color color_light tr_all_hover">Subscribe</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!--copyright part-->
				<div class="footer_bottom_part">
					<div class="container clearfix t_mxs_align_c">
						<p class="f_left f_mxs_none m_mxs_bottom_10">&copy; 2014 <span class="color_light">Farmercart</span>. All Rights Reserved.</p>
						<ul class="f_right horizontal_list clearfix f_mxs_none d_mxs_inline_b">
							<li><img src="images/payment_img_1.png" alt=""></li>
							<li class="m_left_5"><img src="images/payment_img_2.png" alt=""></li>
							<li class="m_left_5"><img src="images/payment_img_3.png" alt=""></li>
							<li class="m_left_5"><img src="images/payment_img_4.png" alt=""></li>
							<li class="m_left_5"><img src="images/payment_img_5.png" alt=""></li>
						</ul>
					</div>
				</div>
			</footer>
		</div>
		<!--social widgets-->
		<ul class="social_widgets d_xs_none">
			<!--facebook-->
			<li class="relative">
				<button class="sw_button t_align_c facebook"><i class="fa fa-facebook"></i></button>
				<div class="sw_content">
					<h3 class="color_dark m_bottom_20">Join Us on Facebook</h3>
					<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;width=235&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=438889712801266" style="border:none; overflow:hidden; width:235px; height:258px;"></iframe>
				</div>
			</li>
			<!--twitter feed-->
			<li class="relative">
				<button class="sw_button t_align_c twitter"><i class="fa fa-twitter"></i></button>
				<div class="sw_content">
					<h3 class="color_dark m_bottom_20">Latest Tweets</h3>
					<div class="twitterfeed m_bottom_25"></div>
					<a role="button" class="button_type_4 d_inline_b r_corners tr_all_hover color_light tw_color" href="https://twitter.com/fanfbmltemplate">Follow on Twitter</a>
				</div>	
			</li>
			<!--contact form-->
			<li class="relative">
				<button class="sw_button t_align_c contact"><i class="fa fa-envelope-o"></i></button>
				<div class="sw_content">
					<h3 class="color_dark m_bottom_20">Contact Us</h3>
					<p class="f_size_medium m_bottom_15">Lorem ipsum dolor sit amet, consectetuer adipis mauris</p>
					<form id="contactform" class="mini">
						<input class="f_size_medium m_bottom_10 r_corners full_width" type="text" name="cf_name" placeholder="Your name">
						<input class="f_size_medium m_bottom_10 r_corners full_width" type="email" name="cf_email" placeholder="Email">
						<textarea class="f_size_medium r_corners full_width m_bottom_20" placeholder="Message" name="cf_message"></textarea>
						<button type="submit" class="button_type_4 r_corners mw_0 tr_all_hover color_dark bg_light_color_2">Send</button>
					</form>
				</div>	
			</li>
			<!--contact info-->
			<li class="relative">
				<button class="sw_button t_align_c googlemap"><i class="fa fa-map-marker"></i></button>
				<div class="sw_content">
					<h3 class="color_dark m_bottom_20">Store Location</h3>
					<ul class="c_info_list">
						<li class="m_bottom_10">
							<div class="clearfix m_bottom_15">
								<i class="fa fa-map-marker f_left color_dark"></i>
								<p class="contact_e">8901 Marmora Road,<br> Glasgow, D04 89GR.</p>
							</div>
							<iframe class="r_corners full_width" id="gmap_mini" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=ru&amp;geocode=&amp;q=Manhattan,+New+York,+NY,+United+States&amp;aq=0&amp;oq=monheten&amp;sll=37.0625,-95.677068&amp;sspn=65.430355,129.814453&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%9C%D0%B0%D0%BD%D1%85%D1%8D%D1%82%D1%82%D0%B5%D0%BD,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E+%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA&amp;ll=40.790278,-73.959722&amp;spn=0.015612,0.031693&amp;z=13&amp;output=embed"></iframe>
						</li>
						<li class="m_bottom_10">
							<div class="clearfix m_bottom_10">
								<i class="fa fa-phone f_left color_dark"></i>
								<p class="contact_e">800-559-65-80</p>
							</div>
						</li>
						<li class="m_bottom_10">
							<div class="clearfix m_bottom_10">
								<i class="fa fa-envelope f_left color_dark"></i>
								<a class="contact_e default_t_color" href="mailto:#">info@companyname.com</a>
							</div>
						</li>
						<li>
							<div class="clearfix">
								<i class="fa fa-clock-o f_left color_dark"></i>
								<p class="contact_e">Monday - Friday: 08.00-20.00 <br>Saturday: 09.00-15.00<br> Sunday: closed</p>
							</div>
						</li>
					</ul>
				</div>	
			</li>
		</ul>
		<!--login popup-->
		<div class="popup_wrap d_none" id="login_popup">
			<section class="popup r_corners shadow">
				<button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
				<h3 class="m_bottom_20 color_dark">Log In</h3>
				<form>
					<ul>
						<li class="m_bottom_15">
							<label for="username" class="m_bottom_5 d_inline_b">Username</label><br>
							<input type="text" name="" id="username" class="r_corners full_width">
						</li>
						<li class="m_bottom_25">
							<label for="password" class="m_bottom_5 d_inline_b">Password</label><br>
							<input type="password" name="" id="password" class="r_corners full_width">
						</li>
						<li class="m_bottom_15">
							<input type="checkbox" class="d_none" id="checkbox_10"><label for="checkbox_10">Remember me</label>
						</li>
						<li class="clearfix m_bottom_30">
							<button class="button_type_4 tr_all_hover r_corners f_left bg_scheme_color color_light f_mxs_none m_mxs_bottom_15">Log In</button>
							<div class="f_right f_size_medium f_mxs_none">
								<a href="#" class="color_dark">Forgot your password?</a><br>
								<a href="#" class="color_dark">Forgot your username?</a>
							</div>
						</li>
					</ul>
				</form>
				<footer class="bg_light_color_1 t_mxs_align_c">
					<h3 class="color_dark d_inline_middle d_mxs_block m_mxs_bottom_15">New Customer?</h3>
					<a href="#" role="button" class="tr_all_hover r_corners button_type_4 bg_dark_color bg_cs_hover color_light d_inline_middle m_mxs_left_0">Create an Account</a>
				</footer>
			</section>
		</div>
		
		<button class="t_align_c r_corners tr_all_hover animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>
		<!--scripts include-->
		<script src="js/jquery-2.1.0.min.js"></script>
		<script src="js/jquery-migrate-1.2.1.min.js"></script>
		<script src="js/retina.js"></script>
		<script src="js/camera.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.isotope.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.tweet.min.js"></script>
		<script src="js/jquery.custom-scrollbar.js"></script>
		<script src="js/scripts.js"></script>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>
	</body>
</html>