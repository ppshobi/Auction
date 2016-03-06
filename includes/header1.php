<header role="banner">
				<!--header top part-->
				<section class="h_top_part">
					<div class="container">
						<div class="row clearfix">
							<div class="col-lg-4 col-md-4 col-sm-5 t_xs_align_c">
								<p class="f_size_small">Welcome visitor can you	<a href="#" data-popup="#login_popup">Log In</a> or <a href="#">Create an Account</a> </p>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-2 t_align_c t_xs_align_c">
								<p class="f_size_small">Call us toll free: <b class="color_dark">(123) 456-7890</b></p>
							</div>
							<nav class="col-lg-4 col-md-4 col-sm-5 t_align_r t_xs_align_c">
								<ul class="d_inline_b horizontal_list clearfix f_size_small users_nav">
									<li><a href="checkout.php" class="default_t_color">Checkout</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</section>
				<!--header bottom part-->
				<!--header bottom part-->
				<section class="h_bot_part container">
					<div class="clearfix row">
						<div class="col-lg-6 col-md-6 col-sm-4 t_xs_align_c">
							<a href="index.php" class="logo m_xs_bottom_15 d_xs_inline_b">
								<img src="images/logo.png" alt="">
							</a>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-8 t_align_r t_xs_align_c">
							<ul class="d_inline_b horizontal_list clearfix t_align_l site_settings">
								<!--like-->
								
								<!--language settings-->
								<li class="m_left_5 relative container3d">
									<a role="button" href="#" class="button_type_2 color_dark d_block bg_light_color_1 r_corners tr_delay_hover box_s_none" id="lang_button"><img class="d_inline_middle m_right_10 m_mxs_right_0" src="images/flag_en.jpg" alt=""><span class="d_mxs_none">English</span></a>
									<ul class="dropdown_list top_arrow color_light">
										<li><a href="#" class="tr_delay_hover color_light"><img class="d_inline_middle" src="images/flag_en.jpg" alt="">English</a></li>
										
									</ul>
								</li>
								<!--currency settings-->
								<li class="m_left_5 relative container3d">
									<a role="button" href="#" class="button_type_2 color_dark d_block bg_light_color_1 r_corners tr_delay_hover box_s_none" id="currency_button"><span class="scheme_color">&#8377;</span> <span class="d_mxs_none">Ruppee</span></a>
									<ul class="dropdown_list top_arrow color_light">
										<li><a href="#" class="tr_delay_hover color_light"><span class="scheme_color">&#8377;</span>Ruppee</a></li>
									</ul>
								</li>
								<!--shopping cart-->
								<li class="m_left_5 relative container3d" id="shopping_button">
									<a role="button" href="#" class="button_type_3 color_light bg_scheme_color d_block r_corners tr_delay_hover box_s_none">
										<span class="d_inline_middle shop_icon m_mxs_right_0">
											<i class="fa fa-shopping-cart"></i>
											<span class="count tr_delay_hover type_2 circle t_align_c">
											<?php
											if (isset($_SESSION['cart'])) {
											echo count($_SESSION['cart']);										
											}?>
											</span>
										</span>
										<b class="d_mxs_none"><?php 
										if (isset($_SESSION['cart'])) {
											echo "&#8377;". $_SESSION['totalcost'];										
											}?></b>
									</a>
									<div class="shopping_cart top_arrow tr_all_hover r_corners">
										<div class="f_size_medium sc_header">Recently added item(s)</div>
										<ul class="products_list">
										<?php
											
											if (isset($_SESSION['cart'])){
												$items=$_SESSION['cart'];
												foreach($items as $key => $product){
													$prodid=$product['id'];
													$name=$product['name'];
													$price=$product['price'];
													$qty=$product['qty'];
													$img=$product['img'];

												 	echo "<li>\n"; 
													echo " <div class=\"clearfix\">\n"; 
													echo "	<!--product image-->\n"; 
													echo "<img class=\"f_left m_right_10\" width=\"50px\" height=\"50px\" src=\"".$img."\""." alt=\"\">\n"; 
													echo "			<!--product description-->\n"; 
													echo "				<div class=\"f_left product_description\">\n"; 
													echo "					<a href=\"#\" class=\"color_dark m_bottom_5 d_block\">".$name."</a>\n"; 
													echo "						<span class=\"f_size_medium\">Product Code ".$prodid."</span>\n"; 
													echo "				</div>\n"; 
													echo "			<!--product price-->\n"; 
													echo "				<div class=\"f_left f_size_medium\">\n"; 
													echo "						<div class=\"clearfix\">\n"; 
													echo $qty ." x <b class=\"color_dark\">&#8377;".$price." </b>\n"; 
													echo "				 				</div>\n"; 
													echo "	<button class=\"close_product color_dark tr_hover\"><i class=\"fa fa-times\"></i>Remove Item</button>\n"; 
													echo "				</div>\n"; 
													echo "	</div>\n"; 
													echo "</li>\n";

												}
											}
										?>
										</ul>
										<!--total price-->
										<ul class="total_price bg_light_color_1 t_align_r color_dark">
											<li>Total: <b class="f_size_large bold scheme_color sc_price t_align_l d_inline_b m_left_15"><?php if(isset($_SESSION['cart'])){echo "&#8377 ".$_SESSION['totalcost'];}?></b></li>
										</ul>
										<div class="sc_footer t_align_c">
											<a href="#" role="button" class="button_type_4 d_inline_middle bg_light_color_2 r_corners color_dark t_align_c tr_all_hover m_mxs_bottom_5">View Cart</a>
											<a href="checkout.php" role="button" class="button_type_4 bg_scheme_color d_inline_middle r_corners tr_all_hover color_light">Checkout</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</section>
				<!--main menu container-->
				<section class="menu_wrap relative">
					<div class="container clearfix">
						<!--button for responsive menu-->
						<button id="menu_button" class="r_corners centered_db d_none tr_all_hover d_xs_block m_bottom_10">
							<span class="centered_db r_corners"></span>
							<span class="centered_db r_corners"></span>
							<span class="centered_db r_corners"></span>
						</button>
						<!--main menu-->
						<nav role="navigation" class="f_left f_xs_none d_xs_none">	
							<ul class="horizontal_list main_menu clearfix">
								<li class="relative f_xs_none m_xs_bottom_5"><a href="index.php" class="tr_delay_hover color_light tt_uppercase"><b>Home</b></a>
									
								</li>
								<li class="relative f_xs_none m_xs_bottom_5"><a href="category_grid.php" class="tr_delay_hover color_light tt_uppercase"><b>Shop</b></a>
									<!--sub menu-->
									<div class="sub_menu_wrap top_arrow d_xs_none tr_all_hover clearfix r_corners w_xs_auto">
										<div class="f_left f_xs_none">
											<b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">Spices</b>
											<ul class="sub_menu first">
												<li><a class="color_dark tr_delay_hover" href="#">Pepper</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Cardamom</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Vanilla</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Ginger</a></li>
											</ul>
										</div>
										<div class="f_left m_left_10 m_xs_left_0 f_xs_none">
											<b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">Food Items</b>
											<ul class="sub_menu">
												<li><a class="color_dark tr_delay_hover" href="#">Rice</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Vegetables</a></li>
											</ul>
										</div>
										<div class="f_left m_left_10 m_xs_left_0 f_xs_none">
											<b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">Seeds</b>
											<ul class="sub_menu">
												<li><a class="color_dark tr_delay_hover" href="#">Mango</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Orange</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Guava</a></li>
											</ul>
										</div>
										<img src="images/woman_image_1.jpg" class="d_sm_none f_right m_bottom_10" alt="">
									</div>
								</li>								
							
								<li class="relative f_xs_none m_xs_bottom_5"><a href="contact.php" class="tr_delay_hover color_light tt_uppercase"><b>Contact</b></a></li>
							</ul>
						</nav>
						<button class="f_right search_button tr_all_hover f_xs_none d_xs_none">
							<i class="fa fa-search"></i>
						</button>
					</div>
					<!--search form-->
					<div class="searchform_wrap tf_xs_none tr_all_hover">
						<div class="container vc_child h_inherit relative">
							<form role="search" class="d_inline_middle full_width">
								<input type="text" name="search" placeholder="Type text and hit enter" class="f_size_large">
							</form>
							<button class="close_search_form tr_all_hover d_xs_none color_dark">
								<i class="fa fa-times"></i>
							</button>
						</div>
					</div>
				</section>
			</header>
		