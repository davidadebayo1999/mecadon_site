<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

?>

<!doctype html>
<html class="no-js" lang="en">
  <base href="/">
    

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Mecadon | Golf</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <?= $this->Html->css(['bootstrap.min.css','animate.css','owl.carousel.css','font-awesome.min.css','nivo-slider.css','slicknav.min.css','flexslider.css','style.css','responsive.css']) ?>
      
      
		 
    
       
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		<!-- preloader-start -->
		<div id="preloader"></div>
		<!-- preloader-end -->
		<!-- header-start -->
		<header>
			<!-- header-top-area-start -->
			<div class="header-top-area hidden-xs">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<!-- login-area-start -->
							<div class="login-area">
								<ul>
									<li><a href="/login">Login/Register</a></li>
									<li><a href="/about">About us</a></li>
									<li><a href="/contact">Contact us</a></li>
									<li><a href="/faq">Faq </a></li>
								</ul>
							</div>
							<!-- login-area-end -->
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<!-- right-top-start -->
							<div class="right-top">
								<a href="/">Welcome to Mecadon Golf  </a>
							</div>
							<!-- right-top-end -->
						</div>
					</div>
				</div>
			</div>
			<!-- header-top-area-end -->
			<!-- header-mid-area-start -->
			<div class="header-mid-area ptb-30">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<!-- logo-area-start -->
							<div class="logo-area">
								<a href="/">
                                <?= $this->Html->image('../images/logo.jpg',['style'=>'width:150px'], ['fullBase' => true]); ?>
                               </a>
							</div>
							<!-- logo-area-end -->
						</div>
						<div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
							<!-- search-area-start -->
							<div class="search-area">
								<form action="#">
									<input type="text" placeholder="Seatce entire store here" />
									<select id="sorter" class="header-option hidden-xs" data-role="sorter">
										<option value="Categories " selected="selected">All Categories</option>
                                        <?php
                                         $cats=$this->get('cats');
                                            foreach($cats as $row){?>
                                            <option value="Cookware">
                                              <?= $row->categoryname?>
                                            </option>
                                               
                                           <?php }
                                        ?>
										
									
									</select>
									<a href="#"><i class="fa fa-search"></i></a>
								</form>
							</div>
							<!-- search-area-end -->
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 hidden-xs">
							<!-- cart-area-start -->
							<div class="cart-area">
								<ul>
									<li class="bag"><a href="/cart"><i class="fa fa-shopping-bag"></i><span class="total-product">2</span></a></li>
									<li class="number"><a href="/cart">My Cart <span>3 items(s) - $500.00</span></a></li>
								</ul>
							</div>
							<!-- cart-area-end -->
						</div>
					</div>
				</div>
			</div>
			<!-- header-mid-area-end -->
			<!-- header-bottom-area-start -->
			<div class="header-bottom-area hidden-xs" id="sticky">
				<div class="container">
					<div class="row">
					
						<div class="col-lg-12 col-md-12">
							<!-- menu-area-start -->
							<div class="menu-area">
								<nav>
									<ul id="menu">
										<li class="active"><a href="/">Home</a>									
										</li>
                                        <?php
                                         $cats=$this->get('cats');
                                            foreach($cats as $row){?>

                                        <li><a href="/maincategories/<?= $row->id?>">
                                        <?= $row->categoryname?>
                                        
                                        <i class="fa fa-angle-down"></i></a>
											<ul class="sub-menu">
                                              <?php foreach($row->sub_categories as $sub) {?>
												<li><a href="/subcategories/<?= $sub->id?>"> <?=$sub->categoryname ?> </a></li>
                                              <?php } ?>							
											</ul>
										</li>
                                         
                                               
                                           <?php }
                                        ?>
									
									
									</ul>
								</nav>
							</div>
							<!-- menu-area-end -->
						</div>
			
					</div>
				</div>
			</div>
			<!-- header-bottom-area-end -->
		</header>
    <!-- header-end -->
    
        
    <?= $this->fetch('content') ?>
    
  
		<footer>
			<!-- footer-top-area-start -->
			<div class="footer-top-area ptb-100">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<!-- single-footer-start -->
							<div class="single-footer mb-4">
								<div class="footer-title">
									<h2>About Us<i class="fa fa-long-arrow-right"></i></h2>
								</div>
								<div class="single-content">
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed </p>
									<form action="#">
										<input type="text" placeholder="Enter your email"/>
										<a href="#"><i class="fa fa-paper-plane"></i></a>
									</form>
								</div>
							</div>
							<!-- single-footer-end -->
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<!-- single-footer-start -->
							<div class="single-footer mb-4">
								<div class="footer-title">
									<h2>Archives<i class="fa fa-long-arrow-right"></i></h2>
								</div>
								<div class="single-content">
									<ul>
										<li><a href="#"><i class="fa fa-check-square"></i>June 2016</a></li>
										<li><a href="#"><i class="fa fa-check-square"></i>May 2016</a></li>
										<li><a href="#"><i class="fa fa-check-square"></i>April 2016</a></li>
										<li><a href="#"><i class="fa fa-check-square"></i>March 2016</a></li>
										<li><a href="#"><i class="fa fa-check-square"></i>February 2016</a></li>
									</ul>
								</div>
							</div>
							<!-- single-footer-end -->
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<!-- single-footer-start -->
							<div class="single-footer">
								<div class="footer-title">
									<h2>Twitter<i class="fa fa-long-arrow-right"></i></h2>
								</div>
								<div class="single-content-2">
									<ul>
										<li><span>@engadget:</span> Google's first indie gaming festival comes to San Francisco this fall https://t.co/NsAr2gcykp2 weeks ago</li>
										<li><span>@engadget:</span> Google's first indie gaming festival comes to San Francisco this fall https://t.co/NsAr2gcykp2 weeks ago</li>
									</ul>
								</div>
							</div>
							<!-- single-footer-end -->
						</div>
					</div>
				</div>
			</div>
			<!-- footer-top-area-end -->
			<!-- footer-bottom-area-start -->
			<div class="footer-bottom-area ptb-40">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<!-- copy-rigth-area-start -->
							<div class="copy-rigth-area mb-4">
								<p>© Copyright 2018 <a href="#">- jsoft.</a> All Rights Reserved.</p>
							</div>
							<!-- copy-rigth-area-end -->
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<!-- payment-area-start -->
							<div class="payment-area text-right">
								<a href="#"><img src="img/payment/1.png" alt="payment" /></a>
							</div>
							<!-- payment-area-end -->
						</div>
					</div>
				</div>
			</div>
			<!-- footer-bottom-area-end -->
		</footer>
		<!-- footer-area-end -->


        <?= $this->Html->script(['vendor/modernizr-2.8.3.min.js', 'vendor/jquery-1.12.0.min.js', 'bootstrap.min.js','owl.carousel.min.js','wow.min.js','jquery.nivo.slider.js','jquery.slicknav.min.js','jquery.flexslider.js','jquery.countdown.min.js','plugins.js','main.js']) ?>
	   



    </body>

</html>
