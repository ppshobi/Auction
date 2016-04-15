<?php
include_once("functions.php");
?>
<header role="banner">
				<!--header top part-->
				<section class="h_top_part">
					<div class="container">
						<div class="row clearfix">
							<div class="col-lg-4 col-md-4 col-sm-5 t_xs_align_c">
								<p class="f_size_small">Welcome visitor can you	<a href="#" data-popup="#login_popup" id="loginbutton">Log In</a> or <a href="#" data-popup="#reg_popup">Create an Account</a> </p>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-2 t_align_c t_xs_align_c">
								<p class="f_size_small">Call us toll free: <b class="color_dark">(123) 456-7890</b></p>
							</div>
							<nav class="col-lg-4 col-md-4 col-sm-5 t_align_r t_xs_align_c">
								<ul class="d_inline_b horizontal_list clearfix f_size_small users_nav">
									<li><a href="logout.php" class="default_t_color">Logout</a></li>
									<li><a href="seller/index.php" class="default_t_color">Goto Seller</a></li>
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
								<li class="relative f_xs_none m_xs_bottom_5"><a href="#" class="tr_delay_hover color_light tt_uppercase"><b>Categories</b></a>
									<!--sub menu-->
									<div class="sub_menu_wrap top_arrow d_xs_none tr_all_hover clearfix r_corners w_xs_auto">
										<div class="f_left f_xs_none">
											<b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">Categories</b>
											<ul class="sub_menu first">
											<?php 
											$sql="SELECT * FROM category";
											$result=mysqlexec($sql);
											if($result){
												while ($row=mysqli_fetch_assoc($result)) {
													echo "<li><a class=\"color_dark tr_delay_hover\" href=\"\">".$row['cat']."</a></li>";
												}
											}
											?>
												
											</ul>
										</div>
										
										
									</div>
								</li>								
							
								<li class="relative f_xs_none m_xs_bottom_5"><a href="contact.php" class="tr_delay_hover color_light tt_uppercase"><b>Contact</b></a></li>
							</ul>
						</nav>
					</div>
				</section>
			</header>
		