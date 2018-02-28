
	   <!-- breadcrumb-area-start -->
	   <div class="breadcrumb-area ptb-80"  
       style="background: url(<?= $url.'/files/MainCategories/category_logo/'.$mainCategory->category_logo ?>");
        background-repeat: no-repeat; background-position: center center;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumb-content text-center">
							<div class="title">
								<h2> <?=$mainCategory->categoryname?></h2>
							</div>
							
						</div>
					</div>
				</div>
			</div>
	   </div>



  <!-- shop-main-area-start -->
  <div class="shop-main-area bg ptb-30">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
						<div class="shop-left-area">
							<div class="single-left-shop mb-40">
								<div class="shop-title mb-20">
									<h3>categories</h3>
								</div>
								<div class="shop-menu">
									<ul>
                                    <?php
                                       foreach($mainCategory->sub_categories as $sub){ ?>
                                        <li><a href="/subcategories/<?= $sub->id?>"><i class="fa fa-angle-right"></i> <?= $sub->categoryname?> </a></li>
                                      <?php }
                                     ?>
										
								
									</ul>
								</div>
							</div>
						
							<div class="single-left-shop mb-40">
								<div class="shop-title mb-20">
									<h3>size</h3>
								</div>
								<div class="shop-menu">
									<ul>
										<li><a href="#"><i class="fa fa-angle-right"></i>s</a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i>m</a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i>l</a></li>
									</ul>
								</div>
							</div>
							<div class="single-left-shop mb-40">
								<div class="shop-title mb-20">
									<h3>color</h3>
								</div>
								<div class="shop-menu">
									<ul>
										<li><a href="#"><i class="fa fa-angle-right"></i>orange</a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i>blue</a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i>green</a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i>white</a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i>black</a></li>
									</ul>
								</div>
							</div>
						
						</div>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
						<div class="shop-right-area">
							<div class="page-bar">
								<div class="shop-tab">
									<ul>
										<li class="active"><a href="" data-toggle="tab"><i class="fa fa-list"></i></a></li>
										<li><a href="" data-toggle="tab"><i class="fa fa-th"></i></a></li>
									</ul>
								</div>
								<div class="control">
								
								</div>
							</div>
							<!-- tab-area-start -->
							<div class="tab-content">
								<div class="tab-pane active" id="th">
									<div class="row">

                                    <?php 
                                        foreach($products as $p){ ?>

<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<!-- product-wrapper-start -->
											<div class="product-wrapper text-center mb-40">
												<div class="product-img">
													<a href="/product_details/<?= $p->id?>">
														<img src="<?= $url.'/files/Images/name/'.$p->images[0]->name?>" alt="phone"
                                                         class="img img-responsive"  style="height:250px"/>
													</a>
													
													<div class="product-icon">
														<ul>
															<li><a href="#"><i class="fa fa-cart-plus"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product-content">
													<span><?= $p->sub_category->categoryname?></span>
													<h4><a href="/product_details/<?= $p->id?>"><?= $p->name ?></a></h4>
													<div class="rating">
														<ul>
                                                        <?php  
                                                            for($index=0;$index<$p->rating;$index++){ ?>
                                                            <li><a ><i class="fa fa-star"></i></a></li>

                                                           <?php }
                                                        ?>
															
														
														</ul>
													</div>
													<div class="price">
														<ul>
															<li class="new-price">$<?= $p->price ?></li>
															<li class="old-price"><?= $p->price+25 ?></li>
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
								<div class="tab-pane fade" id="td">
									<div class="row">
										<!-- product-wrapper-start -->
										<div class="product-wrapper product-wrapper-2 mb-40">
											<div class="product-img">
												<a href="#">
													<img src="img/product/5.jpg" alt="phone" />
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
												<p>Lorem ipsum dolor sit amet, elit molestie, pellentesque posuere feugiat in pede eleifend consequat. Morbi wisi vitae, posuere hac massa sed wisi sit, aenean donec consequat fusce eget. Suspendisse enim nunc quis, vestibulum ac ornare amet nullam, sed ante eu sollicitudin mauris. Urna et dui vivamus ipsum elit convallis, eu lacus vitae commodo, feugiat eleifend non aenean wisi tempus adipiscing, risus commodo sollicitudin duis habitant interdum.</p>
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
										<!-- product-wrapper-start -->
										<!-- product-wrapper-start -->
										<div class="product-wrapper product-wrapper-2 mb-40">
											<div class="product-img">
												<a href="#">
													<img src="img/product/1.jpg" alt="phone" />
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
												<p>Lorem ipsum dolor sit amet, elit molestie, pellentesque posuere feugiat in pede eleifend consequat. Morbi wisi vitae, posuere hac massa sed wisi sit, aenean donec consequat fusce eget. Suspendisse enim nunc quis, vestibulum ac ornare amet nullam, sed ante eu sollicitudin mauris. Urna et dui vivamus ipsum elit convallis, eu lacus vitae commodo, feugiat eleifend non aenean wisi tempus adipiscing, risus commodo sollicitudin duis habitant interdum.</p>
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
										<!-- product-wrapper-start -->
										<!-- product-wrapper-start -->
										<div class="product-wrapper product-wrapper-2 mb-40">
											<div class="product-img">
												<a href="#">
													<img src="img/product/2.jpg" alt="phone" />
												</a>
												<span>new</span>
												<div class="product-icon">
													<ul>
														<li><a href="#"><i class="fa fa-cart-plus"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product-content">
												<span>Mobiles & Accesosaries</span>
												<h4><a href="#">vehicula  tincidunt suscipit</a></h4>
												<p>Lorem ipsum dolor sit amet, elit molestie, pellentesque posuere feugiat in pede eleifend consequat. Morbi wisi vitae, posuere hac massa sed wisi sit, aenean donec consequat fusce eget. Suspendisse enim nunc quis, vestibulum ac ornare amet nullam, sed ante eu sollicitudin mauris. Urna et dui vivamus ipsum elit convallis, eu lacus vitae commodo, feugiat eleifend non aenean wisi tempus adipiscing, risus commodo sollicitudin duis habitant interdum.</p>
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
										<!-- product-wrapper-start -->
										<!-- product-wrapper-start -->
										<div class="product-wrapper product-wrapper-2 mb-40">
											<div class="product-img">
												<a href="#">
													<img src="img/product/3.jpg" alt="phone" />
												</a>
												<span>new</span>
												<div class="product-icon">
													<ul>
														<li><a href="#"><i class="fa fa-cart-plus"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product-content">
												<span>Vertual Reality</span>
												<h4><a href="#">Aenean acest ac metus varius</a></h4>
												<p>Lorem ipsum dolor sit amet, elit molestie, pellentesque posuere feugiat in pede eleifend consequat. Morbi wisi vitae, posuere hac massa sed wisi sit, aenean donec consequat fusce eget. Suspendisse enim nunc quis, vestibulum ac ornare amet nullam, sed ante eu sollicitudin mauris. Urna et dui vivamus ipsum elit convallis, eu lacus vitae commodo, feugiat eleifend non aenean wisi tempus adipiscing, risus commodo sollicitudin duis habitant interdum.</p>
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
										<!-- product-wrapper-start -->
										<!-- product-wrapper-start -->
										<div class="product-wrapper product-wrapper-2 mb-40">
											<div class="product-img">
												<a href="#">
													<img src="img/product/4.jpg" alt="phone" />
												</a>
												<span>new</span>
												<div class="product-icon">
													<ul>
														<li><a href="#"><i class="fa fa-cart-plus"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product-content">
												<span>Electronics Products</span>
												<h4><a href="#">Nam ac elit iaculis</a></h4>
												<p>Lorem ipsum dolor sit amet, elit molestie, pellentesque posuere feugiat in pede eleifend consequat. Morbi wisi vitae, posuere hac massa sed wisi sit, aenean donec consequat fusce eget. Suspendisse enim nunc quis, vestibulum ac ornare amet nullam, sed ante eu sollicitudin mauris. Urna et dui vivamus ipsum elit convallis, eu lacus vitae commodo, feugiat eleifend non aenean wisi tempus adipiscing, risus commodo sollicitudin duis habitant interdum.</p>
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
										<!-- product-wrapper-start -->
									</div>	
								</div>
							</div>
							<!-- tab-area-end -->
							<!-- pagination-area-start -->
							<div class="pagination-area">
								<ul>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
								</ul>
							</div>
							<!-- pagination-area-end -->
						</div>
					</div>
				</div>
			</div>
		</div>
	   <!-- shop-main-area-end -->
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