<?php 
session_start();
include_once("includes/dbconn.php");
include_once("functions.php");
?>
<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
	<head>
		<title>Online Auction - Product Page </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!--meta info-->
		<meta name="author" content="">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="icon" type="image/ico" href="images/fav.ico">
		<!--stylesheet include-->
		<link rel="stylesheet" type="text/css" media="all" href="css/jquery.fancybox-1.3.4.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/jquery.custom-scrollbar.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
		<!--font include-->
		<link href="css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body>
		<!--wide layout-->
		<div class="wide_layout relative">
			<!--[if (lt IE 9) | IE 9]>
				<div style="background:#fff;padding:8px 0 10px;">
				<div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix" style="padding:9px 0 0;float:left;width:83%;"><i class="fa fa-exclamation-triangle scheme_color f_left m_right_10" style="font-size:25px;color:#e74c3c;"></i><b style="color:#e74c3c;">Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:16%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_4 r_corners bg_scheme_color color_light d_inline_b t_align_c" target="_blank" style="margin-bottom:2px;">Update Now!</a></div></div></div></div>
			<![endif]-->
			<!--markup header-->
			<?php include_once("includes/header1.php");?>
			<!-- Getting product info -->
			<?php
				$prodid = $_GET['prodid'];

				$sql="SELECT * FROM product WHERE visibility=1 AND id=$prodid";
				$result=mysqlexec($sql);
				$row=mysqli_fetch_assoc($result);

				$name=$row['name'];
				$descr=$row['descr'];
				$category=$row['category'];
				$baseval=$row['minbid'];
				$pic1=$row['pic1'];
				$pic2=$row['pic2'];
				$pic3=$row['pic3'];
				$pic4=$row['pic4'];
				$pic5=$row['pic5'];
				$seller=$row['seller'];
				$bidstartdate=$row['bidstartdate'];
				$bidenddate=$row['bidenddate'];
				
				$unit=$row['unit'];
				$imgpath="products/". $seller . "/" . $prodid . "/" ;

				$sql1 = "SELECT * FROM users WHERE id=$seller";
				$result1=mysqlexec($sql1);
				$row1=mysqli_fetch_assoc($result1);

				$sellername = $row1['name'];

$sql3="SELECT * FROM biddetails WHERE productid = $prodid";
$result3=mysqlexec($sql3);
$row3=mysqli_fetch_assoc($result3);
$highbid=$row3['bid'];
$highbidby=$row3['bidder'];
$sql4="SELECT name FROM users WHERE id=$highbidby";
$result4=mysqlexec($sql4);
$highbidbyname='';
if ($result4) {
	$row4=mysqli_fetch_assoc($result4);
	$highbidbyname=$row4['name'];
}

$yourbid=$highbid+1;
$minbid=$highbid;
			?>
			<!-- End Getting product info -->
			<!--content-->
			<div class="page_content_offset">
				<div class="container">
					<div class="clearfix m_bottom_30 t_xs_align_c">
						<div class="photoframe type_2 shadow r_corners f_left f_sm_none d_xs_inline_b product_single_preview relative m_right_30 m_bottom_5 m_sm_bottom_20 m_xs_right_0 w_mxs_full">
							<span class="hot_stripe"><img src="images/sale_product.png" alt=""></span>
							<div class="relative d_inline_b m_bottom_10 qv_preview d_xs_block">
								<img id="zoom_image" src="<?php echo $imgpath . $pic1 ; ?>" data-zoom-image="<?php echo $imgpath . $pic1 ; ?>" class="tr_all_hover" alt="">
								<a href="<?php echo $imgpath . $pic1 ; ?>" class="d_block button_type_5 r_corners tr_all_hover box_s_none color_light p_hr_0">
									<i class="fa fa-expand"></i>
								</a>
							</div>
							<!--carousel-->
							<div class="relative qv_carousel_wrap">
								<button class="button_type_11 bg_light_color_1 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_single_prev">
									<i class="fa fa-angle-left "></i>
								</button>
								<ul class="qv_carousel_single d_inline_middle">
									<a href="#" data-image="<?php echo $imgpath . $pic1 ; ?>" data-zoom-image="<?php echo $imgpath . $pic1 ; ?>"><img src="<?php echo $imgpath . $pic1 ; ?>" alt=""></a>
									<a href="#" data-image="<?php echo $imgpath . $pic2 ; ?>" data-zoom-image="<?php echo $imgpath . $pic2 ; ?>"><img src="<?php echo $imgpath . $pic2 ; ?>" alt=""></a>
									<a href="#" data-image="<?php echo $imgpath . $pic3 ; ?>" data-zoom-image="<?php echo $imgpath . $pic3 ; ?>"><img src="<?php echo $imgpath . $pic3 ; ?>" alt=""></a>
									<a href="#" data-image="<?php echo $imgpath . $pic4 ; ?>" data-zoom-image="<?php echo $imgpath . $pic4 ; ?>"><img src="<?php echo $imgpath . $pic4 ; ?>" alt=""></a>
									<a href="#" data-image="<?php echo $imgpath . $pic5 ; ?>" data-zoom-image="<?php echo $imgpath . $pic5 ; ?>"><img src="<?php echo $imgpath . $pic5 ; ?>" alt=""></a>
								</ul>
								<button class="button_type_11 bg_light_color_1 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_single_next">
									<i class="fa fa-angle-right "></i>
								</button>
							</div>
						</div>
						<div class="p_top_10 t_xs_align_l">
							<!--description-->
							<h2 class="color_dark fw_medium m_bottom_10"><?php echo $name; ?></h2>
							<div class="m_bottom_10"><!--rating-->
								
							</div>
							<hr class="m_bottom_10 divider_type_3">
							<table class="description_table m_bottom_10">
								<tr>
									<td>Sold By:</td>
									<td><a href="#" class="color_dark"><?php echo $sellername; ?></a></td>
								</tr>
								<tr>
									<td>Product Code:</td>
									<td><?php echo $prodid; ?></td>
								</tr>
								<tr>
									<td>Auction Started : </td>
									<td><?php echo $bidstartdate;?></td>
								</tr>
								<tr>
									<td>Auction Ends On:</td>
									<td><?php echo $bidenddate;?>."</td>
								</tr>
							</table>
							<hr class="divider_type_3 m_bottom_10">
							<p class="m_bottom_10"><?php echo $descr; ?></p>
							<hr class="divider_type_3 m_bottom_15">
							<?php echo "<span class=\"v_align_b f_size_big m_left_5 scheme_color fw_medium\">Base Value &#8377; ".$baseval."</span>\n";?>
							<table class="description_table type_2 m_bottom_15">
								
								<tr>
									<td class="v_align_m">Your Bid:</td>
									<?php
									echo "									<td class=\"v_align_m\">\n";
echo "										<div class=\"clearfix quantity r_corners d_inline_middle f_size_medium color_dark\">\n";
echo "											<button class=\"bg_tr d_block f_left\" data-direction=\"down\">-</button>\n";
echo "<input type=\"text\" id=\"bid_amt".$prodid."\" name=\"req_qty\" value=\"".$yourbid."\" class=\"f_left\">\n";
echo "											<button class=\"bg_tr d_block f_left\" data-direction=\"up\">+</button>\n";
echo "										</div>\n";
echo "									</td>\n";
echo"								</tr>";
echo"						</table>";
echo "<form action=\"bidder.php\" onsubmit=\"set_bid(".$prodid.")\" method=\"get\">";
echo "<input type=\"hidden\" id=\"sendbid".$prodid."\" name=\"sendbid\" value=\"\">";
echo "<input type=\"hidden\" name=\"minbid\" value=\"".$minbid."\">";
echo "<input type=\"hidden\" name=\"prodid\" value=\"".$prodid."\">";
echo "<button class=\"button_type_12 r_corners bg_scheme_color color_light tr_delay_hover f_left f_size_large\" type=\"submit\">Bid Now</button>\n";
echo "</form>";
?>

<script type="text/javascript">
	function set_bid(prodid){
	var req=document.getElementById('bid_amt'+prodid).value;
	document.getElementById('sendbid'+prodid).value=req;
}	
</script>
							<p class="d_inline_middle">Share this:</p>
							<div class="d_inline_middle m_left_5 addthis_widget_container">
								<!-- AddThis Button BEGIN -->
								<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
								<a class="addthis_button_preferred_1"></a>
								<a class="addthis_button_preferred_2"></a>
								<a class="addthis_button_preferred_3"></a>
								<a class="addthis_button_preferred_4"></a>
								<a class="addthis_button_compact"></a>
								<a class="addthis_counter addthis_bubble_style"></a>
								</div>
								<!-- AddThis Button END -->
							</div>
						</div>
					</div>
					<!--tabs-->
					<hr class="divider_type_3 m_bottom_15">
					<a href="index.php" role="button" class="d_inline_b bg_light_color_2 color_dark tr_all_hover button_type_4 r_corners"><i class="fa fa-reply m_left_5 m_right_10 f_size_large"></i>Back to: Home</a>
				</div>
			</div>
			<!--markup footer-->
			<?php include_once("footer.php");?>
		</div>
		<!--custom popup-->
		<div class="popup_wrap d_none" id="quick_view_product">
			<section class="popup r_corners shadow">
				<button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
				<div class="clearfix">
					<div class="custom_scrollbar">
						<!--left popup column-->
						<div class="f_left half_column">
							<div class="relative d_inline_b m_bottom_10 qv_preview">
								<span class="hot_stripe"><img src="images/sale_product.png" alt=""></span>
								<img src="images/quick_view_img_1.jpg" class="tr_all_hover" alt="">
							</div>
							<!--carousel-->
							<div class="relative qv_carousel_wrap m_bottom_20">
								<button class="button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_prev">
									<i class="fa fa-angle-left "></i>
								</button>
								<ul class="qv_carousel d_inline_middle">
									<li data-src="images/quick_view_img_1.jpg"><img src="images/quick_view_img_4.jpg" alt=""></li>
									<li data-src="images/quick_view_img_2.jpg"><img src="images/quick_view_img_5.jpg" alt=""></li>
									<li data-src="images/quick_view_img_3.jpg"><img src="images/quick_view_img_6.jpg" alt=""></li>
									<li data-src="images/quick_view_img_1.jpg"><img src="images/quick_view_img_4.jpg" alt=""></li>
									<li data-src="images/quick_view_img_2.jpg"><img src="images/quick_view_img_5.jpg" alt=""></li>
									<li data-src="images/quick_view_img_3.jpg"><img src="images/quick_view_img_6.jpg" alt=""></li>
								</ul>
								<button class="button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_next">
									<i class="fa fa-angle-right "></i>
								</button>
							</div>
							<div class="d_inline_middle">Share this:</div>
							<div class="d_inline_middle m_left_5">
								<!-- AddThis Button BEGIN -->
								<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
								<a class="addthis_button_preferred_1"></a>
								<a class="addthis_button_preferred_2"></a>
								<a class="addthis_button_preferred_3"></a>
								<a class="addthis_button_preferred_4"></a>
								<a class="addthis_button_compact"></a>
								<a class="addthis_counter addthis_bubble_style"></a>
								</div>
								<!-- AddThis Button END -->
							</div>
						</div>
						<!--right popup column-->
						<div class="f_right half_column">
							<!--description-->
							<h2 class="m_bottom_10"><a href="#" class="color_dark fw_medium">Eget elementum vel</a></h2>
							<div class="m_bottom_10">
								<!--rating-->
								<ul class="horizontal_list d_inline_middle type_2 clearfix rating_list tr_all_hover">
									<li class="active">
										<i class="fa fa-star-o empty tr_all_hover"></i>
										<i class="fa fa-star active tr_all_hover"></i>
									</li>
									<li class="active">
										<i class="fa fa-star-o empty tr_all_hover"></i>
										<i class="fa fa-star active tr_all_hover"></i>
									</li>
									<li class="active">
										<i class="fa fa-star-o empty tr_all_hover"></i>
										<i class="fa fa-star active tr_all_hover"></i>
									</li>
									<li class="active">
										<i class="fa fa-star-o empty tr_all_hover"></i>
										<i class="fa fa-star active tr_all_hover"></i>
									</li>
									<li>
										<i class="fa fa-star-o empty tr_all_hover"></i>
										<i class="fa fa-star active tr_all_hover"></i>
									</li>
								</ul>
								<a href="#" class="d_inline_middle default_t_color f_size_small m_left_5">1 Review(s) </a>
							</div>
							<hr class="m_bottom_10 divider_type_3">
							<table class="description_table m_bottom_10">
								<tr>
									<td>Manufacturer:</td>
									<td><a href="#" class="color_dark">Chanel</a></td>
								</tr>
								<tr>
									<td>Availability:</td>
									<td><span class="color_green">in stock</span> 20 item(s)</td>
								</tr>
								<tr>
									<td>Product Code:</td>
									<td>PS06</td>
								</tr>
							</table>
							<h5 class="fw_medium m_bottom_10">Product Dimensions and Weight</h5>
							<table class="description_table m_bottom_5">
								<tr>
									<td>Product Length:</td>
									<td><span class="color_dark">10.0000M</span></td>
								</tr>
								<tr>
									<td>Product Weight:</td>
									<td>10.0000KG</td>
								</tr>
							</table>
							<hr class="divider_type_3 m_bottom_10">
							<p class="m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit. </p>
							<hr class="divider_type_3 m_bottom_15">
							<div class="m_bottom_15">
								<s class="v_align_b f_size_ex_large">$152.00</s><span class="v_align_b f_size_big m_left_5 scheme_color fw_medium">$102.00</span>
							</div>
							<table class="description_table type_2 m_bottom_15">
								<tr>
									<td class="v_align_m">Size:</td>
									<td class="v_align_m">
										<div class="custom_select f_size_medium relative d_inline_middle">
											<div class="select_title r_corners relative color_dark">s</div>
											<ul class="select_list d_none"></ul>
											<select name="product_name">
												<option value="s">s</option>
												<option value="m">m</option>
												<option value="l">l</option>
											</select>
										</div>
									</td>
								</tr>
								<tr>
									<td class="v_align_m">Quantity:</td>
									<td class="v_align_m">
										<div class="clearfix quantity r_corners d_inline_middle f_size_medium color_dark">
											<button class="bg_tr d_block f_left" data-direction="down">-</button>
											<input type="text" name="" readonly value="1" class="f_left">
											<button class="bg_tr d_block f_left" data-direction="up">+</button>
										</div>
									</td>
								</tr>
							</table>
							<div class="clearfix m_bottom_15">
								<button class="button_type_12 r_corners bg_scheme_color color_light tr_delay_hover f_left f_size_large">Add to Cart</button>
								<button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0"><i class="fa fa-heart-o f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Wishlist</span></button>
								<button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0"><i class="fa fa-files-o f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Compare</span></button>
								<button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0 relative"><i class="fa fa-question-circle f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Ask a Question</span></button>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
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
		<button class="t_align_c r_corners tr_all_hover type_2 animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>
		<!--scripts include-->
		<script src="js/jquery-2.1.0.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/jquery-migrate-1.2.1.min.js"></script>
		<script src="js/retina.js"></script>
		<script src="js/elevatezoom.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.tweet.min.js"></script>
		<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.custom-scrollbar.js"></script>
		<script src="js/jquery.fancybox-1.3.4.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>