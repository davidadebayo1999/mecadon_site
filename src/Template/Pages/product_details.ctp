

	   <!-- product-details-start -->
	   <div class="product-details ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
						<div class="flexslider">
							<ul class="slides" style="margin-top:-80px">

                            <?php
                                foreach($product->images as $img){ ?>
                                	<li data-thumb="<?= $url.'/files/Images/name/'.$img->name?>">
									<img src="<?= $url.'/files/Images/name/'.$img->name?>" alt="phone"
                                                         class="img img-responsive"  />
								</li>

                               <?php }
                            ?>
							
						
							</ul>
						</div>
					</div>
					<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
						<div class="product-info-main mb-3 mb-0">
							<div class="product-title mb-30">
								<h1><?= $product->name?></h1>
							</div>
							<div class="product-content-3">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
								<div class="price">
									<ul>
										<li class="new-price"><?= $product->price?></li>
										<li class="old-price"><?= $product->price + 65?></li>
									</ul>
								</div>
								<a href="#" style="color:white!important"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
							<div class="social-sharing">
								<span>share</span>
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-youtube"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
	   </div>
	   <!-- product-details-end -->
	   <!-- latest-products-area-start -->
		<div class="top-selling-area pb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<!-- section-titile-start -->
						<div class="section-titile text-center mb-50">
							<h2>Related Products</h2>
						</div>
						<!-- section-titile-end -->
					</div>
					<div class="product-active-3">

                    <?php  
                       foreach($product_list as $p){?>
	<div class="col-lg-12">
							<!-- product-wrapper-start -->
							<div class="product-wrapper text-center">
								<div class="product-img">
								
                                    <a href="/product_details/<?= $p->id?>">
														<img src="<?= $url.'/files/Images/name/'.$p->images[0]->name?>" alt="phone"
                                                         class="img img-responsive"  style="height:250px"/>
													</a>
								
									<span>new</span>
									<div class="product-icon">
										<ul>
											<li><a href="#"><i class="fa fa-cart-plus"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="product-content">
									<span>Furniture & Tables</span>
									<h4><a href="#">Aenean acest ac metus varius</a></h4>
									<div class="rating">
										<ul>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
										</ul>
									</div>
									<div class="price">
										<ul>
											<li class="new-price">$220</li>
											<li class="old-price">$260</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- product-wrapper-end -->
						</div>
                      <?php }
                    ?>
					
					
					</div>
				</div>
			</div>
		</div>
	   <!-- latest-products-area-end -->
	   <!-- newslatter-area-start -->
		<div class="newslatter-area ptb-90">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="newslatter-form text-center">
							<form action="#">
								<input type="text" placeholder="Your email address here...  "/>
								<a href="#">Subcribe!</a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	   <!-- newslatter-area-end -->