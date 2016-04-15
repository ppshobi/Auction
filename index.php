<?php 
session_start();
include_once("includes/dbconn.php");
include_once("functions.php");
registration();
$bidder=getuser();
if($bidder){
//there is a logged in user
}else{
	echo "<script>alert(\"Please Login\")</script>";
}

?>
<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
	<head>
		<title>Online Auction - Home</title>
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
				<!--slider-->
			<div class="camera_wrap m_bottom_0">
				<div data-src="images/slide_02.jpg" data-custom-thumb="images/slide_02.jpg">
					<div class="camera_caption_1 fadeFromTop t_align_c d_xs_none">
						<div class="f_size_large color_light tt_uppercase slider_title_3 m_bottom_5">Meet New Auction</div>
						<hr class="slider_divider d_inline_b m_bottom_5">
						<div class="color_light slider_title tt_uppercase t_align_c m_bottom_45 m_sm_bottom_20"><b>Cost Effective &amp; <br>user Friendly</b></div>
						
						<a href="#" role="button" class="tr_all_hover button_type_4 bg_scheme_color color_light r_corners tt_uppercase">Bid Now</a>
					</div>
				</div>
    			<div data-src="images/slide_01.jpg" data-custom-thumb="images/slide_01.jpg">
    				<div class="camera_caption_2 fadeIn t_align_c d_xs_none">
						
					</div>
    			</div>
    			<div data-src="images/slide_03.jpg" data-custom-thumb="images/slide_03.jpg">
    				<div class="camera_caption_3 fadeFromTop t_align_c d_xs_none">
						<img src="images/slider_layer_img.png" alt="" class="m_bottom_5">
						<div class="color_light slider_title tt_uppercase t_align_c m_bottom_60 m_sm_bottom_20"><b class="color_dark">Top Sellers From Worldwide</b></div>
						<a href="#" role="button" class="d_sm_inline_b button_type_4 bg_scheme_color color_light r_corners tt_uppercase tr_all_hover">Shop Now</a>
					</div>
    			</div>
			</div>
			<!--content-->
			<div class="page_content_offset">
				<div class="container">
					<h2 class="tt_uppercase m_bottom_20 color_dark heading1 animate_ftr">All Products</h2>
					<!--filter navigation of products-->
					<ul class="horizontal_list clearfix tt_uppercase isotope_menu f_size_ex_large">
						<li class="active m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter="*">All</button></li>
				
					</ul>
					<!--products-->
					<section class="products_container clearfix m_bottom_25 m_sm_bottom_15">
						<!--product item-->
						<?php
						$sql="SELECT * FROM product WHERE visibility=1 AND bidstatus IS NULL ORDER BY id DESC";
						$result=mysqlexec($sql);
						while($row=mysqli_fetch_assoc($result))
						{
							$prodid=$row['id'];
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
							$imgpath="products/". $seller . "/" . $prodid . "/" .$pic1 . "\"";

						echo "<div class=\"product_item\">";
							echo "<figure class=\"r_corners photoframe shadow relative hit animate_ftb long\">";
								echo "<!--product preview-->";
								echo "<a href=\"#\" class=\"d_block relative pp_wrap\">";
									
									echo "<img src=\"$imgpath\"" . "class=\"tr_all_hover\" alt=\"\" width=\"230px\" height=\"230px\">";
									echo "<span data-popup=\"#quick_view_product". $prodid. "\"" . "class=\"button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none\">Quick View</span>";
								echo "</a>";
								echo "<!--description and price of product-->";
								echo "<figcaption>";
									echo "<h5 class=\"m_bottom_10\"><a href=\"#\" class=\"color_dark\">". $name . "</a></h5>";
									echo "<div class=\"clearfix\">";
										echo "<p class=\"scheme_color f_left f_size_large m_bottom_15\">" ; 
											
												echo "Base Value &#8377; ". $baseval ."</p>";
										
									echo "</div>";
									echo "<a href=\"viewsingleproduct.php?prodid={$prodid}\">";
									echo "<button class=\"button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0\">View Product</button>";
									echo "</a>";
								echo "</figcaption>";
							echo "</figure>";
						echo "</div>";
$sql2="SELECT * FROM users WHERE id=$seller";
$result2=mysqlexec($sql2);
$row2=mysqli_fetch_assoc($result2);
$sellername=$row2['name'];

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
echo "							<h2 class=\"m_bottom_10\"><a href=\"#\" class=\"color_dark fw_medium\">". $name ."</a></h2>\n";
echo "							<div class=\"m_bottom_10\">\n";
echo "							</div>\n";
echo "							<hr class=\"m_bottom_10 divider_type_3\">\n";
echo "							<table class=\"description_table m_bottom_10\">\n";
echo "								<tr>\n";
echo "									<td>Sold By:</td>\n";
echo "									<td><a href=\"#\" class=\"color_dark\">".$sellername."</a></td>\n";
echo "								</tr>\n";			
echo "								<tr>\n";
echo "									<td>Product Code: </td>\n";
echo "									<td>".$prodid."</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<td>Auction Started : </td>\n";
echo "									<td>".$bidstartdate."</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<td>Auction Ends On:</td>\n";
echo "									<td>".$bidenddate."</td>\n";
echo "								</tr>\n";
echo "							</table>\n";						
echo "							<hr class=\"divider_type_3 m_bottom_10\">\n";
echo "							<p class=\"m_bottom_10\">".$descr."</p>\n";
echo "							<hr class=\"divider_type_3 m_bottom_15\">\n";
echo "							<div class=\"m_bottom_15\">\n";
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

echo "<span class=\"v_align_b f_size_big m_left_5 scheme_color fw_medium\">Highest Bid &#8377; ".$highbid. " By " . $highbidbyname ."</span>\n";
echo "<br/>";
echo "<span class=\"v_align_b f_size_small m_left_5 scheme_color fw_medium\">Base Value &#8377; ".$baseval."</span>\n";

echo "							</div>\n";
echo "							<table class=\"description_table type_2 m_bottom_15\">\n";
echo "								<tr>\n";
echo "									<td class=\"v_align_m\">Your Bid:</td>\n";
echo "									<td class=\"v_align_m\">\n";
echo "										<div class=\"clearfix quantity r_corners d_inline_middle f_size_medium color_dark\">\n";
echo "											<button class=\"bg_tr d_block f_left\" data-direction=\"down\">-</button>\n";
echo "<input type=\"text\" id=\"bid_amt".$prodid."\" name=\"req_qty\" value=\"".$yourbid."\" class=\"f_left\">\n";
echo "											<button class=\"bg_tr d_block f_left\" data-direction=\"up\">+</button>\n";
echo "										</div>\n";
echo "									</td>\n";
echo "								</tr>\n";
echo "							</table>\n";
echo "							<div class=\"clearfix m_bottom_15\">\n";
?>
<?php
echo "<form action=\"bidder.php\" onsubmit=\"set_bid(".$prodid.")\" method=\"get\">";
echo "<input type=\"hidden\" id=\"sendbid".$prodid."\" name=\"sendbid\" value=\"\">";
echo "<input type=\"hidden\" name=\"minbid\" value=\"".$minbid."\">";
echo "<input type=\"hidden\" name=\"prodid\" value=\"".$prodid."\">";
echo "<button class=\"button_type_12 r_corners bg_scheme_color color_light tr_delay_hover f_left f_size_large\" type=\"submit\">Bid Now</button>\n";
echo "</form>";
echo "							</div>\n";
echo "						</div>\n";
echo "					</div>\n";
echo "				</div>\n";
echo "			</section>\n";
echo "		</div>\n";
//custom pop upend
	}//end of while loop
						
?>
<script type="text/javascript">
	function set_bid(prodid){
	var req=document.getElementById('bid_amt'+prodid).value;
	document.getElementById('sendbid'+prodid).value=req;
}	
</script>
			
					</section>
					<!--banners-->
					<!--banners-->
					
				</div>
			</div>
			<!--markup footer-->
			<?php include_once("footer.php");?>
		</div>
		<!--social widgets-->
		<!--login popup-->
		<div class="popup_wrap d_none" id="login_popup">
			<section class="popup r_corners shadow">
				<button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
				<h3 class="m_bottom_20 color_dark">Log In</h3>
				<form action="seller/auth/auth.php" method="post">
					<ul>
						<li class="m_bottom_15">
							<label for="username" class="m_bottom_5 d_inline_b">Username</label><br>
							<input type="text" name="username" id="username" class="r_corners full_width">
						</li>
						<li class="m_bottom_25">
							<label for="password" class="m_bottom_5 d_inline_b">Password</label><br>
							<input type="password" name="password" id="password" class="r_corners full_width">
						</li>
						<li class="clearfix m_bottom_30">
							<button class="button_type_4 tr_all_hover r_corners f_left bg_scheme_color color_light f_mxs_none m_mxs_bottom_15" type="submit">Log In</button>
							<div class="f_right f_size_medium f_mxs_none">	
							</div>
						</li>
					</ul>
				</form>
			</section>
		</div>

		<!-- Registration popup -->
		<div class="popup_wrap d_none" id="reg_popup">
			<section class="popup r_corners shadow">
				<button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
				<h3 class="m_bottom_20 color_dark">Sign Up</h3>
				<form action="" method="post">
					<ul>
						<li class="m_bottom_15">
							<label for="username" class="m_bottom_5 d_inline_b">Username</label><br>
							<input type="text" name="username" id="username" class="r_corners full_width">
						</li>
						<li class="m_bottom_25">
							<label for="password" class="m_bottom_5 d_inline_b">Password</label><br>
							<input type="password" name="password" id="password" class="r_corners full_width">
						</li>
						<li class="m_bottom_25">
							<label for="name" class="m_bottom_5 d_inline_b">Name</label><br>
							<input type="text" name="name" id="name" class="r_corners full_width">
						</li>
						<li class="m_bottom_25">
							<label for="email" class="m_bottom_5 d_inline_b">Email</label><br>
							<input type="email" name="email" id="email" class="r_corners full_width">
						</li>
						<li class="m_bottom_25">
							<label for="phone" class="m_bottom_5 d_inline_b">Phone</label><br>
							<input type="phone" name="phone" id="phone" class="r_corners full_width">
						</li>
						<li class="m_bottom_25">
							<label for="address" class="m_bottom_5 d_inline_b">Address</label><br>
							<textarea cols="100" rows="3" name="address"></textarea>
						</li>
						<li class="clearfix m_bottom_30">
							<button class="button_type_4 tr_all_hover r_corners f_left bg_scheme_color color_light f_mxs_none m_mxs_bottom_15" type="submit">Sign Up</button>
							<div class="f_right f_size_medium f_mxs_none">	
							</div>
						</li>
					</ul>
				</form>
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