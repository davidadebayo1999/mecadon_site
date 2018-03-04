  <!-- slider-area-start -->
  <div class="slider-area">
        <div id="slider">
          <img src="images/sliders/slider1.png" alt="slider-img" title="#caption1" />
          <img src="images/sliders/slider2.png" alt="slider-img" title="#caption2" />
        </div>
        <div class="nivo-html-caption" id="caption1" >
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="slider-text text-right">
                  <h4 class="wow fadeInLeft" data-wow-delay=".6s">Complete Golf set</h4>
                  <h1 class="wow fadeInLeft" data-wow-delay=".9s">Golf</h1>
                  <h3 class="wow fadeInLeft" data-wow-delay="1.3s">$356.25</h3>
                  <a href="#" class=" wow bounceInRight" data-wow-delay="1.5s">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="nivo-html-caption" id="caption2" >
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="slider-text text-right">
                  <h4 class="wow fadeInLeft" data-wow-delay=".6s">Cobra Men's KING F6 Driver </h4>
                  <h1 class="wow fadeInLeft" data-wow-delay=".9s">Golf</h1>
                  <h3 class="wow fadeInLeft" data-wow-delay="1.3s">$169.99- $419.00 </h3>
                  <a href="#" class=" wow bounceInRight" data-wow-delay="1.5s">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       <!-- slider-area-end -->
       
      <!-- banner-area-start -->
      <div class="banner-area ptb-100">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <!-- single-banner-img-start -->
              <div class="single-banner mb-4">
                <div class="banner-img">
                  <a href="#"><img src="images/f2.png" alt="banner" /></a>
                </div>
                <div class="banner-content">
                  <h4>Golf Shirts for Men - Dry Fit </h4>
                  <h2>Cotton Polo Shirt </h2>
                  <span>$12.00</span>
                </div>
              </div>
              <!-- single-banner-img-end -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <!-- single-banner-img-start -->
              <div class="single-banner">
                <div class="banner-img">
                  <a href="#"><img src="images/f1.png" alt="banner" /></a>
                </div>
                <div class="banner-content banner-content-2">
                  <h4>Confidence Junior Golf Club </h4>
                  <h2>Set with Stand Bag</h2>
                  <span>$259.99</span>
                </div>
              </div>
              <!-- single-banner-img-end -->
            </div>
          </div>
        </div>
      </div>
      <!-- banner-area-end -->
  
    
       <!-- latest-products-area-start -->
      <div class="top-selling-area ptb-100">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- section-titile-start -->
              <div class="section-titile text-center mb-50">
                <h2>Latest Products</h2>
              </div>
              <!-- section-titile-end -->
            </div>
            
            <div class="product-active-3">

            <?php 
                                        foreach($products as $p){ ?>

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
		<!-- footer-area-start -->