<?php 
session_start();
include_once("includes/dbconn.php");
include_once("functions.php");
?>
<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
	<head>
		<title>Farmercart - Checkout</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!--meta info-->
		<meta name="author" content="">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="icon" type="image/ico" href="images/fav.ico">
		<!--stylesheet include-->
		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/owl.transitions.css">
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
			<!--breadcrumbs-->
			<section class="breadcrumbs">
				<div class="container">
					<ul class="horizontal_list clearfix bc_list f_size_medium">
						<li class="m_right_10 current"><a href="#" class="default_t_color">Home<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
						<li class="m_right_10 current"><a href="#" class="default_t_color">Checkout<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
						<li><a href="#" class="default_t_color">Shopping Cart</a></li>
					</ul>
				</div>
			</section>
			<!--content-->
			<div class="page_content_offset">
				<div class="container">
					<div class="row clearfix">
						<!--left content column-->
						<section class="col-lg-12 col-md-9 col-sm-9 m_xs_bottom_30">
							<h2 class="tt_uppercase color_dark m_bottom_25">Cart</h2>
							<!--cart table-->

							<table class="table_type_4 responsive_table full_width r_corners wraper shadow t_align_l t_xs_align_c m_bottom_30">
								<thead>
									<tr class="f_size_large">
										<!--titles for td-->
										<th>Product Name</th>
										<th>Product Code</th>
										<th>Price</th>
										<th>Quantity</th>
										<th>Subtotal</th>
									</tr>
								</thead>
								<tbody>
								<?php
								if (isset($_SESSION['cart'])){
												$items=$_SESSION['cart'];
												foreach($items as $key => $product){
													$prodid=$product['id'];
													$name=$product['name'];
													$price=$product['price'];
													$qty=$product['qty'];
													$img=$product['img'];
								
echo "	<tr>\n"; 
echo "	<!--Product name and image-->\n"; 
echo "		<td data-title=\"Product Image &amp; name\" class=\"t_md_align_c\">\n"; 
echo "			<img width=\"100px\" height=\"100px;\" src=\"".$img."\" alt=\"\" class=\"m_md_bottom_5 d_xs_block d_xs_centered\">\n"; 
echo "											<a href=\"#\" class=\"d_inline_b m_left_5 color_dark\">".$name."</a>\n"; 
echo "										</td>\n"; 
echo "										<!--product key-->\n"; 
echo "										<td data-title=\"SKU\">".$prodid."</td>\n"; 
echo "										<!--product price-->\n"; 
echo "										<td data-title=\"Price\">\n"; 
echo "											<p class=\"f_size_large color_dark\">".$price."</p>\n"; 
echo "										</td>\n"; 
echo "										<!--quanity-->\n"; 
echo "										<td data-title=\"Quantity\">\n"; 
echo "											<div class=\"clearfix quantity r_corners d_inline_middle f_size_medium color_dark m_bottom_10\">\n"; 
echo "												<button class=\"bg_tr d_block f_left\" data-direction=\"down\">-</button>\n"; 
echo "												<input type=\"text\" name=\"\" readonly value=\"".$qty."\" class=\"f_left\">\n"; 
echo "												<button class=\"bg_tr d_block f_left\" data-direction=\"up\">+</button>\n"; 
echo "											</div>\n"; 
echo "											<div>\n"; 
echo "												<a href=\"#\" class=\"color_dark\"><i class=\"fa fa-times f_size_medium m_right_5\"></i>Remove</a><br>\n"; 
echo "											</div>\n"; 
echo "										</td>\n"; 
echo "										<!--subtotal-->\n"; 
echo "										<td data-title=\"Subtotal\">\n"; 
echo "											<p class=\"f_size_large fw_medium scheme_color\"> &#8377; ".$price*$qty."</p>\n"; 
echo "										</td>\n"; 
echo "									</tr>\n";

									}
									}?>
									<!--prices-->
									<!--total-->
									<tr>
										<td colspan="4" class="v_align_m d_ib_offset_large t_xs_align_l">
											
											
											<p class="fw_medium f_size_large t_align_r scheme_color p_xs_hr_0 d_inline_middle half_column d_ib_offset_normal d_xs_block w_xs_full t_xs_align_c">Total:</p>
										</td>
										<td colspan="1" class="v_align_m">
											<p class="fw_medium f_size_large scheme_color m_xs_bottom_10"><?php 
											echo "&#8377; ";
											if(isset($_SESSION['totalcost'])){
												echo $_SESSION['totalcost'];
											} 
											?>
											</p>
										</td>
									</tr>
								</tbody>
							</table>
							<!--tabs-->
							<?php
							if(isuserloggedin()){

echo "<h2 class=\"color_dark tt_uppercase m_bottom_25\">Bill To &amp; Shipment Information</h2>\n"; 
echo "							<div class=\"bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45\">\n"; 
echo "								<div class=\"row clearfix\">\n"; 
echo "									<div class=\"col-lg-12 col-md-6 col-sm-6 m_xs_bottom_30\">\n"; 
echo "										<h5 class=\"fw_medium m_bottom_15\">Bill To</h5>\n"; 
echo "										<form>\n"; 
echo "											<ul>\n"; 
echo "												<li class=\"m_bottom_15\">\n"; 
echo "													<label for=\"c_name_1\" class=\"d_inline_b m_bottom_5\">Company Name</label>\n"; 
echo "													<input type=\"text\" id=\"c_name_1\" name=\"\" class=\"r_corners full_width\">\n"; 
echo "												</li>\n"; 
echo "												<li class=\"m_bottom_15\">\n"; 
echo "													<label class=\"d_inline_b m_bottom_5\">Title</label>\n"; 
echo "													<!--product name select-->\n"; 
echo "													<div class=\"custom_select relative\">\n"; 
echo "														<div class=\"select_title type_2 r_corners relative color_dark mw_0\">Mr</div>\n"; 
echo "														<ul class=\"select_list d_none\"></ul>\n"; 
echo "														<select name=\"product_name\">\n"; 
echo "															<option value=\"Mr 1\">Mr 1</option>\n"; 
echo "															<option value=\"Ms\">Ms</option>\n"; 
echo "														</select>\n"; 
echo "													</div>\n"; 
echo "												</li>\n"; 
echo "												<li class=\"m_bottom_15\">\n"; 
echo "													<label for=\"f_name_1\" class=\"d_inline_b m_bottom_5 required\">First Name</label>\n"; 
echo "													<input type=\"text\" id=\"f_name_1\" name=\"\" class=\"r_corners full_width\">\n"; 
echo "												</li>\n"; 
echo "												<li class=\"m_bottom_15\">\n"; 
echo "													<label for=\"m_name_1\" class=\"d_inline_b m_bottom_5 required\">Middle Name</label>\n"; 
echo "													<input type=\"text\" id=\"m_name_1\" name=\"\" class=\"r_corners full_width\">\n"; 
echo "												</li>\n"; 
echo "												<li class=\"m_bottom_15\">\n"; 
echo "													<label for=\"l_name_1\" class=\"d_inline_b m_bottom_5 required\">Last Name</label>\n"; 
echo "													<input type=\"text\" id=\"l_name_1\" name=\"\" class=\"r_corners full_width\">\n"; 
echo "												</li>\n"; 
echo "												<li class=\"m_bottom_15\">\n"; 
echo "													<label for=\"address_1\" class=\"d_inline_b m_bottom_5 required\">Address 1</label>\n"; 
echo "													<input type=\"text\" id=\"address_1\" name=\"\" class=\"r_corners full_width\">\n"; 
echo "												</li>\n"; 
echo "												<li class=\"m_bottom_15\">\n"; 
echo "													<label for=\"address_1_1\" class=\"d_inline_b m_bottom_5 required\">Address 2</label>\n"; 
echo "													<input type=\"text\" id=\"address_1_1\" name=\"\" class=\"r_corners full_width\">\n"; 
echo "												</li>\n"; 
echo "												<li class=\"m_bottom_15\">\n"; 
echo "													<label for=\"code_1\" class=\"d_inline_b m_bottom_5 required\">Zip / Postal Code</label>\n"; 
echo "													<input type=\"text\" id=\"code_1\" name=\"\" class=\"r_corners full_width\">\n"; 
echo "												</li>\n"; 
echo "												<li class=\"m_bottom_15\">\n"; 
echo "													<label for=\"city_1\" class=\"d_inline_b m_bottom_5 required\">City</label>\n"; 
echo "													<input type=\"text\" id=\"city_1\" name=\"\" class=\"r_corners full_width\">\n"; 
echo "												</li>\n"; 
echo "												<li class=\"m_bottom_15\">\n"; 
echo "													<label class=\"d_inline_b m_bottom_5 required\">Country</label>\n"; 
echo "													<!--product name select-->\n"; 
echo "													<div class=\"custom_select relative\">\n"; 
echo "														<div class=\"select_title type_2 r_corners relative color_dark mw_0\">Please select</div>\n"; 
echo "														<ul class=\"select_list d_none\"></ul>\n"; 
echo "														<select name=\"product_name\">\n"; 
echo "															<option value=\"England\">England</option>\n"; 
echo "															<option value=\"Australia\">Australia</option>\n"; 
echo "															<option value=\"Austria\">Austria</option>\n"; 
echo "														</select>\n"; 
echo "													</div>\n"; 
echo "												</li>\n"; 
echo "												<li class=\"m_bottom_15\">\n"; 
echo "													<label class=\"d_inline_b m_bottom_5 required\">State / Province / Region</label>\n"; 
echo "													<!--product name select-->\n"; 
echo "													<div class=\"custom_select relative\">\n"; 
echo "														<div class=\"select_title type_2 r_corners relative color_dark mw_0\">Please select</div>\n"; 
echo "														<ul class=\"select_list d_none\"></ul>\n"; 
echo "														<select name=\"product_name\">\n"; 
echo "															<option value=\"1\">1</option>\n"; 
echo "															<option value=\"2\">2</option>\n"; 
echo "														</select>\n"; 
echo "													</div>\n"; 
echo "												</li>\n"; 
echo "												<li class=\"m_bottom_15\">\n"; 
echo "													<label for=\"phone_1\" class=\"d_inline_b m_bottom_5\">Phone</label>\n"; 
echo "													<input type=\"text\" id=\"phone_1\" name=\"\" class=\"r_corners full_width\">\n"; 
echo "												</li>\n"; 
echo "												<li class=\"m_bottom_15\">\n"; 
echo "													<label for=\"m_phone_1\" class=\"d_inline_b m_bottom_5\">Mobile Phone</label>\n"; 
echo "													<input type=\"text\" id=\"m_phone_1\" name=\"\" class=\"r_corners full_width\">\n"; 
echo "												</li>\n"; 
echo "												<li>\n"; 
echo "													<label for=\"fax_1\" class=\"d_inline_b m_bottom_5\">Fax</label>\n"; 
echo "													<input type=\"text\" id=\"fax_1\" name=\"\" class=\"r_corners full_width\">\n"; 
echo "												</li>\n"; 
echo "											</ul>\n"; 
echo "										\n"; 
echo "									</div>\n"; 
echo "								</div>\n"; 
echo "							</div>\n"; 
echo "							<h2 class=\"tt_uppercase color_dark m_bottom_30\">Shipment Information</h2>\n"; 
echo "							<div class=\"bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45\">\n"; 
echo "								<figure class=\"block_select clearfix relative m_bottom_15\">\n"; 
echo "									<input type=\"radio\" checked name=\"radio_1\" class=\"d_none\">\n"; 
echo "									<img src=\"images/shipment_logo.jpg\" alt=\"\" class=\"f_left m_right_20 f_mxs_none m_mxs_bottom_10\">\n"; 
echo "									<figcaption>\n"; 
echo "										<h5 class=\"color_dark fw_medium m_bottom_15 m_sm_bottom_5\">Via India Post</h5>\n"; 
echo "										<p>For more than 150 years, the Department of Posts (DoP) has been the backbone of the country’s communication and has played a crucial role in the country’s socio-economic development. It touches the lives of Indian citizens in many ways: delivering mails, accepting deposits under Small Savings Schemes, </p>\n"; 
echo "									</figcaption>\n"; 
echo "								</figure>\n"; 
echo "								<hr class=\"m_bottom_20\">\n"; 
echo "							</div>\n"; 
echo "							<h2 class=\"tt_uppercase color_dark m_bottom_30\">Payment</h2>\n"; 
echo "							<div class=\"bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45\">\n"; 
echo "								<figure class=\"block_select clearfix relative m_bottom_15\">\n"; 
echo "									<input type=\"radio\" checked name=\"radio_2\" class=\"d_none\">\n"; 
echo "									<img src=\"images/payment_logo.jpg\" alt=\"\" class=\"f_left m_right_20 f_mxs_none m_mxs_bottom_10\">\n"; 
echo "									<figcaption class=\"d_table d_sm_block\">\n"; 
echo "										<div class=\"d_table_cell d_sm_block p_sm_right_0 p_right_45 m_mxs_bottom_5\">\n"; 
echo "											<h5 class=\"color_dark fw_medium m_bottom_15 m_sm_bottom_5\">Paypal</h5>\n"; 
echo "											<p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turp. Donec sit amet eros. </p>\n"; 
echo "										</div>\n"; 
echo "										\n"; 
echo "									</figcaption>\n"; 
echo "								</figure>\n"; 
echo "								<hr class=\"m_bottom_20\">\n"; 
echo "								\n"; 
echo "							</div>\n"; 
echo "							<h2 class=\"tt_uppercase color_dark m_bottom_30\">Terms of service</h2>\n"; 
echo "							<div class=\"bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45\">\n"; 
echo "								<p class=\"m_bottom_10\">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. </p>\n"; 
echo "								<p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar. </p>\n"; 
echo "							</div>\n"; 
echo "							<h2 class=\"tt_uppercase color_dark m_bottom_30\">Place Order</h2>\n"; 
echo "							<!--requests table-->\n"; 
echo "							<table class=\"table_type_5 full_width r_corners wraper shadow t_align_l\">\n"; 
echo "								<tr>\n"; 
echo "									<td colspan=\"2\">\n"; 
echo "										<input type=\"checkbox\" name=\"checkbox_8\" id=\"checkbox_8\" class=\"d_none\"><label for=\"checkbox_8\">I agree to the Terms of Service (Terms of service)</label>\n"; 
echo "									</td>\n"; 
echo "								</tr>\n"; 
echo "								<tr>\n"; 
echo "									<td colspan=\"2\">\n"; 
echo "										<button class=\"button_type_6 bg_scheme_color f_size_large r_corners tr_all_hover color_light m_bottom_20\">Confirm Purchase</button>\n"; 
echo "									</td>\n"; 
echo "									</form>\n"; 
echo "								</tr>\n"; 
echo "							</table>\n";

							}else{
									
echo "<div class=\"tabs m_bottom_45\">\n"; 
echo "<!--tabs navigation-->\n"; 
echo "	<nav>\n"; 
echo "		<ul class=\"tabs_nav horizontal_list clearfix\">\n"; 
echo "			<li><a href=\"#tab-1\" class=\"bg_light_color_1 color_dark tr_delay_hover r_corners d_block\">Login</a></li>\n"; 
echo "		</ul>\n"; 
echo "	</nav>\n"; 
echo "	<section class=\"tabs_content shadow r_corners\">\n"; 
echo "			<div id=\"tab-1\">\n"; 
echo "				<!--login form-->\n"; 
echo "				<h5 class=\"fw_medium m_bottom_15\">I am Already Registered</h5>\n"; 
echo "					<form action=\"auth/auth.php\" method=\"post\">\n"; 
echo "						<ul>\n"; 
echo "							<li class=\"clearfix m_bottom_15\">\n"; 
echo "								<div class=\"half_column type_2 f_left\">\n"; 
echo "									<label for=\"username\" class=\"m_bottom_5 d_inline_b\">Username</label>\n"; 
echo "									<input type=\"text\" id=\"username\" name=\"username\" class=\"r_corners full_width m_bottom_5\">\n"; 
// echo "										<a href=\"#\" class=\"color_dark f_size_medium\">Forgot your username?</a>\n"; 
echo "			</div>\n"; 
echo "			<div class=\"half_column type_2 f_left\">\n"; 
echo "				<label for=\"pass\" class=\"m_bottom_5 d_inline_b\">Password</label>\n"; 
echo "					<input type=\"password\" id=\"pass\" name=\"password\" class=\"r_corners full_width m_bottom_5\">\n"; 
// echo "						<a href=\"#\" class=\"color_dark f_size_medium\">Forgot your password?</a>\n"; 
echo "			</div>\n"; 
echo "							</li>\n"; 
echo "							<li class=\"m_bottom_15\">\n"; 
// echo "							<input type=\"checkbox\" class=\"d_none\" name=\"checkbox_4\" id=\"checkbox_4\"><label for=\"checkbox_4\">Remember me</label>\n"; 
echo "														</li>\n"; 
echo "														<li><button type=\"submit\" class=\"button_type_4 r_corners bg_scheme_color color_light tr_all_hover\">Log In</button></li>\n"; 
echo "													</ul>\n"; 
echo "												</form>\n"; 
echo "											</div>\n"; 
echo "											<div id=\"tab-2\">\n"; 
echo "											</div>\n"; 
echo "										</section>\n"; 
echo "									</div>\n";

							}//end of if
?>
							
						</section>
						
					</div>
				</div>
			</div>
			<!--markup footer-->
<?php include_once("includes/footer.php"); ?>