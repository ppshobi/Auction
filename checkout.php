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
											<p class="fw_medium f_size_large scheme_color m_xs_bottom_10"><?php echo "&#8377; " .$_SESSION['totalcost']; ?></p>
										</td>
									</tr>
								</tbody>
							</table>
							<!--tabs-->
							<?php
							if(isuserloggedin()){
									
echo "<div class=\"tabs m_bottom_45\">\n"; 
echo "<!--tabs navigation-->\n"; 
echo "	<nav>\n"; 
echo "		<ul class=\"tabs_nav horizontal_list clearfix\">\n"; 
echo "			<li><a href=\"#tab-1\" class=\"bg_light_color_1 color_dark tr_delay_hover r_corners d_block\">Login</a></li>\n"; 
echo "			<li><a href=\"#tab-2\" class=\"bg_light_color_1 color_dark tr_delay_hover r_corners d_block\">Register</a></li>\n"; 
echo "		</ul>\n"; 
echo "	</nav>\n"; 
echo "	<section class=\"tabs_content shadow r_corners\">\n"; 
echo "			<div id=\"tab-1\">\n"; 
echo "				<!--login form-->\n"; 
echo "				<h5 class=\"fw_medium m_bottom_15\">I am Already Registered</h5>\n"; 
echo "					<form>\n"; 
echo "						<ul>\n"; 
echo "							<li class=\"clearfix m_bottom_15\">\n"; 
echo "								<div class=\"half_column type_2 f_left\">\n"; 
echo "									<label for=\"username\" class=\"m_bottom_5 d_inline_b\">Username</label>\n"; 
echo "									<input type=\"text\" id=\"username\" name=\"\" class=\"r_corners full_width m_bottom_5\">\n"; 
echo "										<a href=\"#\" class=\"color_dark f_size_medium\">Forgot your username?</a>\n"; 
echo "			</div>\n"; 
echo "			<div class=\"half_column type_2 f_left\">\n"; 
echo "				<label for=\"pass\" class=\"m_bottom_5 d_inline_b\">Password</label>\n"; 
echo "					<input type=\"password\" id=\"pass\" name=\"\" class=\"r_corners full_width m_bottom_5\">\n"; 
echo "						<a href=\"#\" class=\"color_dark f_size_medium\">Forgot your password?</a>\n"; 
echo "			</div>\n"; 
echo "							</li>\n"; 
echo "							<li class=\"m_bottom_15\">\n"; 
echo "							<input type=\"checkbox\" class=\"d_none\" name=\"checkbox_4\" id=\"checkbox_4\"><label for=\"checkbox_4\">Remember me</label>\n"; 
echo "														</li>\n"; 
echo "														<li><button class=\"button_type_4 r_corners bg_scheme_color color_light tr_all_hover\">Log In</button></li>\n"; 
echo "													</ul>\n"; 
echo "												</form>\n"; 
echo "											</div>\n"; 
echo "											<div id=\"tab-2\">\n"; 
echo "												<form>\n"; 
echo "													<ul>\n"; 
echo "														<li class=\"m_bottom_25\">\n"; 
echo "															<label for=\"d_name\" class=\"d_inline_b m_bottom_5 required\">Displayed Name</label>\n"; 
echo "															<input type=\"text\" id=\"d_name\" name=\"\" class=\"r_corners full_width\">\n"; 
echo "														</li>\n"; 
echo "														<li class=\"m_bottom_5\">\n"; 
echo "															<input type=\"checkbox\" class=\"d_none\" name=\"checkbox_5\" id=\"checkbox_5\"><label for=\"checkbox_5\">Create an account</label>\n"; 
echo "														</li>\n"; 
echo "														<li class=\"m_bottom_15\">\n"; 
echo "															<label for=\"u_name\" class=\"d_inline_b m_bottom_5 required\">Username</label>\n"; 
echo "															<input type=\"text\" id=\"u_name\" name=\"\" class=\"r_corners full_width\">\n"; 
echo "														</li>\n"; 
echo "														<li class=\"m_bottom_15\">\n"; 
echo "															<label for=\"u_email\" class=\"d_inline_b m_bottom_5 required\">Email</label>\n"; 
echo "															<input type=\"email\" id=\"u_email\" name=\"\" class=\"r_corners full_width\">\n"; 
echo "														</li>\n"; 
echo "														<li class=\"m_bottom_15\">\n"; 
echo "															<label for=\"u_pass\" class=\"d_inline_b m_bottom_5 required\">Password</label>\n"; 
echo "															<input type=\"password\" id=\"u_pass\" name=\"\" class=\"r_corners full_width\">\n"; 
echo "														</li>\n"; 
echo "														<li>\n"; 
echo "															<label for=\"u_repeat_pass\" class=\"d_inline_b m_bottom_5 required\">Confirm Password</label>\n"; 
echo "															<input type=\"password\" id=\"u_repeat_pass\" name=\"\" class=\"r_corners full_width\">\n"; 
echo "														</li>\n"; 
echo "													</ul>\n"; 
echo "												</form>\n"; 
echo "											</div>\n"; 
echo "										</section>\n"; 
echo "									</div>\n";

							}
							?>
							<h2 class="color_dark tt_uppercase m_bottom_25">Bill To &amp; Shipment Information</h2>
							<div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
								<div class="row clearfix">
									<div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30">
										<h5 class="fw_medium m_bottom_15">Bill To</h5>
										<form>
											<ul>
												<li class="m_bottom_15">
													<label for="c_name_1" class="d_inline_b m_bottom_5">Company Name</label>
													<input type="text" id="c_name_1" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label class="d_inline_b m_bottom_5">Title</label>
													<!--product name select-->
													<div class="custom_select relative">
														<div class="select_title type_2 r_corners relative color_dark mw_0">Mr</div>
														<ul class="select_list d_none"></ul>
														<select name="product_name">
															<option value="Mr 1">Mr 1</option>
															<option value="Ms">Ms</option>
														</select>
													</div>
												</li>
												<li class="m_bottom_15">
													<label for="f_name_1" class="d_inline_b m_bottom_5 required">First Name</label>
													<input type="text" id="f_name_1" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label for="m_name_1" class="d_inline_b m_bottom_5 required">Middle Name</label>
													<input type="text" id="m_name_1" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label for="l_name_1" class="d_inline_b m_bottom_5 required">Last Name</label>
													<input type="text" id="l_name_1" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label for="address_1" class="d_inline_b m_bottom_5 required">Address 1</label>
													<input type="text" id="address_1" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label for="address_1_1" class="d_inline_b m_bottom_5 required">Address 2</label>
													<input type="text" id="address_1_1" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label for="code_1" class="d_inline_b m_bottom_5 required">Zip / Postal Code</label>
													<input type="text" id="code_1" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label for="city_1" class="d_inline_b m_bottom_5 required">City</label>
													<input type="text" id="city_1" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label class="d_inline_b m_bottom_5 required">Country</label>
													<!--product name select-->
													<div class="custom_select relative">
														<div class="select_title type_2 r_corners relative color_dark mw_0">Please select</div>
														<ul class="select_list d_none"></ul>
														<select name="product_name">
															<option value="England">England</option>
															<option value="Australia">Australia</option>
															<option value="Austria">Austria</option>
														</select>
													</div>
												</li>
												<li class="m_bottom_15">
													<label class="d_inline_b m_bottom_5 required">State / Province / Region</label>
													<!--product name select-->
													<div class="custom_select relative">
														<div class="select_title type_2 r_corners relative color_dark mw_0">Please select</div>
														<ul class="select_list d_none"></ul>
														<select name="product_name">
															<option value="1">1</option>
															<option value="2">2</option>
														</select>
													</div>
												</li>
												<li class="m_bottom_15">
													<label for="phone_1" class="d_inline_b m_bottom_5">Phone</label>
													<input type="text" id="phone_1" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label for="m_phone_1" class="d_inline_b m_bottom_5">Mobile Phone</label>
													<input type="text" id="m_phone_1" name="" class="r_corners full_width">
												</li>
												<li>
													<label for="fax_1" class="d_inline_b m_bottom_5">Fax</label>
													<input type="text" id="fax_1" name="" class="r_corners full_width">
												</li>
											</ul>
										</form>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
										<h5 class="fw_medium m_bottom_15">Ship To</h5>
										<form>
											<ul>
												<li class="m_bottom_5">
													<input type="checkbox" checked class="d_none" name="checkbox_6" id="checkbox_6"><label for="checkbox_6">Add/Edit shipment address</label>
												</li>
												<li class="m_bottom_15">
													<label for="a_name_1" class="d_inline_b m_bottom_5">Address Nickname</label>
													<input type="text" id="a_name_1" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label for="c_name_2" class="d_inline_b m_bottom_5">Company Name</label>
													<input type="text" id="c_name_2" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label for="f_name_2" class="d_inline_b m_bottom_5">First Name</label>
													<input type="text" id="f_name_2" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label for="m_name_2" class="d_inline_b m_bottom_5">Middle Name</label>
													<input type="text" id="m_name_2" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label for="l_name_2" class="d_inline_b m_bottom_5">Last Name</label>
													<input type="text" id="l_name_2" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label for="address_2" class="d_inline_b m_bottom_5">Address 1</label>
													<input type="text" id="address_2" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label for="address_1_2" class="d_inline_b m_bottom_5">Address 2</label>
													<input type="text" id="address_1_2" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label for="code_2" class="d_inline_b m_bottom_5">Zip / Postal Code</label>
													<input type="text" id="code_2" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label for="city_2" class="d_inline_b m_bottom_5">City</label>
													<input type="text" id="city_2" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label class="d_inline_b m_bottom_5">Country</label>
													<!--product name select-->
													<div class="custom_select relative">
														<div class="select_title type_2 r_corners relative color_dark mw_0">Please select</div>
														<ul class="select_list d_none"></ul>
														<select name="product_name">
															<option value="England">England</option>
															<option value="Australia">Australia</option>
															<option value="Austria">Austria</option>
														</select>
													</div>
												</li>
												<li class="m_bottom_15">
													<label class="d_inline_b m_bottom_5">State / Province / Region</label>
													<!--product name select-->
													<div class="custom_select relative">
														<div class="select_title type_2 r_corners relative color_dark mw_0">Please select</div>
														<ul class="select_list d_none"></ul>
														<select name="product_name">
															<option value="1">1</option>
															<option value="2">2</option>
														</select>
													</div>
												</li>
												<li class="m_bottom_15">
													<label for="phone_2" class="d_inline_b m_bottom_5">Phone</label>
													<input type="text" id="phone_2" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label for="m_phone_2" class="d_inline_b m_bottom_5">Mobile Phone</label>
													<input type="text" id="m_phone_2" name="" class="r_corners full_width">
												</li>
												<li>
													<label for="fax_2" class="d_inline_b m_bottom_5">Fax</label>
													<input type="text" id="fax_2" name="" class="r_corners full_width">
												</li>
											</ul>
										</form>
									</div>
								</div>
							</div>
							<h2 class="tt_uppercase color_dark m_bottom_30">Shipment Information</h2>
							<div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
								<figure class="block_select clearfix relative m_bottom_15">
									<input type="radio" checked name="radio_1" class="d_none">
									<img src="images/shipment_logo.jpg" alt="" class="f_left m_right_20 f_mxs_none m_mxs_bottom_10">
									<figcaption>
										<h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_5">Shipment Method 1</h5>
										<p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer. </p>
									</figcaption>
								</figure>
								<hr class="m_bottom_20">
								<figure class="block_select clearfix relative">
									<input type="radio" name="radio_1" class="d_none">
									<img src="images/shipment_logo.jpg" alt="" class="f_left m_right_20 f_mxs_none m_mxs_bottom_10">
									<figcaption>
										<h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_5">Shipment Method 2</h5>
										<p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros.</p>
									</figcaption>
								</figure>
							</div>
							<h2 class="tt_uppercase color_dark m_bottom_30">Payment</h2>
							<div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
								<figure class="block_select clearfix relative m_bottom_15">
									<input type="radio" checked name="radio_2" class="d_none">
									<img src="images/payment_logo.jpg" alt="" class="f_left m_right_20 f_mxs_none m_mxs_bottom_10">
									<figcaption class="d_table d_sm_block">
										<div class="d_table_cell d_sm_block p_sm_right_0 p_right_45 m_mxs_bottom_5">
											<h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_5">Payment Method 1</h5>
											<p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turp. Donec sit amet eros. </p>
										</div>
										<div class="d_table_cell d_sm_block discount">
											<h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_0">Discount/Fee</h5>
											<p class="color_dark">$8.48</p>
										</div>
									</figcaption>
								</figure>
								<hr class="m_bottom_20">
								<figure class="block_select clearfix relative">
									<input type="radio" name="radio_2" class="d_none">
									<img src="images/payment_logo.jpg" alt="" class="f_left m_right_20 f_mxs_none m_mxs_bottom_10">
									<figcaption>
										<h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_5">Payment Method 2</h5>
										<p>Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit. Mauris fermentum dictum magna. 
										Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.</p>
									</figcaption>
								</figure>
							</div>
							<h2 class="tt_uppercase color_dark m_bottom_30">Terms of service</h2>
							<div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
								<p class="m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. </p>
								<p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar. </p>
							</div>
							<h2 class="tt_uppercase color_dark m_bottom_30">Notes and special requests</h2>
							<!--requests table-->
							<table class="table_type_5 full_width r_corners wraper shadow t_align_l">
								<tr>
									<td colspan="2">
										<label for="notes" class="d_inline_b m_bottom_5">Notes and special requests:</label>
										<textarea id="notes" class="r_corners notes full_width"></textarea>
									</td>
								</tr>
								<tr>
									<td class="t_align_r">
										<p class="f_size_large fw_medium">Coupon Discount:</p>
									</td>
									<td>
										<p class="f_size_large fw_medium color_dark">$-74.96</p>
									</td>
								</tr>
								<tr>
									<td class="t_align_r">
										<p class="f_size_large fw_medium">Subtotal:</p>
									</td>
									<td>
										<p class="f_size_large fw_medium color_dark">$95.00</p>
									</td>
								</tr>
								<tr>
									<td class="t_align_r">
										<p class="f_size_large fw_medium">Payment Fee:</p>
									</td>
									<td>
										<p class="f_size_large fw_medium color_dark">$6.05</p>
									</td>
								</tr>
								<tr>
									<td class="t_align_r">
										<p class="f_size_large fw_medium">Shipment Fee:</p>
									</td>
									<td>
										<p class="f_size_large fw_medium color_dark">$0.00</p>
									</td>
								</tr>
								<tr>
									<td class="t_align_r">
										<p class="f_size_large fw_medium">Tax Total:</p>
									</td>
									<td>
										<p class="f_size_large fw_medium color_dark">$17.54</p>
									</td>
								</tr>
								<tr>
									<td class="t_align_r">
										<p class="f_size_large fw_medium scheme_color">Total:</p>
									</td>
									<td>
										<p class="f_size_large fw_medium scheme_color">$101.05</p>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<input type="checkbox" name="checkbox_8" id="checkbox_8" class="d_none"><label for="checkbox_8">I agree to the Terms of Service (Terms of service)</label>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<button class="button_type_6 bg_scheme_color f_size_large r_corners tr_all_hover color_light m_bottom_20">Confirm Purchase</button>
									</td>
								</tr>
							</table>
						</section>
						
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
		<button class="t_align_c r_corners tr_all_hover type_2 animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>
		<!--scripts include-->
		<script src="js/jquery-2.1.0.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/retina.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.tweet.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>