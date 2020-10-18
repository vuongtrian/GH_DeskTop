<section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url(assets/images/bg_1.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center">
	              <h1 class="mb-2">Chúng tôi phục vụ rau quả tươi</h1>
	            </div>

	          </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image: url(assets/images/bg_2.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-sm-12 ftco-animate text-center">
	              <h1 class="mb-2">Tươi 100% &amp; Thức ăn hữu cơ</h1>
	            </div>

	          </div>
	        </div>
	      </div>
	    </div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Free Shipping</h3>
                <span>Với đơn hàng trên 200.000đ</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Luôn tươi</h3>
                <span>Gói sản phẩm tốt</span>
              </div>
            </div>    
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Chất lượng cao</h3>
                <span>Sản phẩm được chọn lọc</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Hỗ trợ</h3>
                <span>Hỗ trợ 24/7</span>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

		<section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(assets/images/category.jpg);">
									<div class="text text-center">
										<h2>Rau Quả</h2>
										<p>Bảo vệ sức khỏe của mọi nhà</p>
										<p><a href="index.php?ctrller=product" class="btn btn-primary">Mua hàng ngay</a></p>
									</div>
								</div>
							</div>
							
							<?php 
								foreach ($cat as $ca)
								{
									$link="index.php?ctrller=product&act=category&catid=".$ca['id'];
									$i=$ca['id'];
									switch ($i) {
										case '1':
											echo'<div class="col-md-6">
											<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(assets/images/'.$ca['img'].');">
											<div class="text px-3 py-1">
												<h2 class="mb-0"><a href="'.$link.'">'.$ca['name'].'</a></h2>
											</div>
										</div>';
											break;
										
										case '2':
											echo'<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(assets/images/'.$ca['img'].');">
											<div class="text px-3 py-1">
												<h2 class="mb-0"><a href="'.$link.'">'.$ca['name'].'</a></h2>
											</div>
										</div>
										</div>
										</div>
										</div>';
											break;
										case '3':
											echo'<div class="col-md-4">
											<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(assets/images/'.$ca['img'].');">
											<div class="text px-3 py-1">
												<h2 class="mb-0"><a href="'.$link.'">'.$ca['name'].'</a></h2>
											</div>
										</div>';
											break;
											case '4':
											echo'<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(assets/images/'.$ca['img'].');">
											<div class="text px-3 py-1">
												<h2 class="mb-0"><a href="'.$link.'">'.$ca['name'].'</a></h2>
											</div>
										</div>
									</div>
								</div>
							</div>';
											break;
									}}

							?>
								
							

					
						
		</section>

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Sản phẩm nổi bật</span>
            <h2 class="mb-4">Sản phẩm của chúng tôi</h2>
            <p>Nhũng sản phẩm này được nhiêu người mua và quan tâm nhiều nhất</p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
				<?php 
					foreach ($prob as $pro)
					{
						echo'<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="product">
							<a href="index.php?ctrller=product&act=detail&id='.$pro['id'].'" class="img-prod"><img class="img-fluid" src="assets/images/'.$pro['img'].'" alt="Colorlib Template">
								<div class="overlay"></div>
							</a>
							<div class="text py-3 pb-4 px-3 text-center">
								<h3><a href="index.php?ctrller=product&act=detail&id='.$pro['id'].'">'.$pro['name'].'</a></h3>
								<div class="d-flex">
									<div class="pricing">
										<p class="price"><span>'.$pro['price'].'đ</span></p>
									</div>
								</div>
								<div class="bottom-area d-flex px-3">
									<div class="m-auto d-flex">
									<a href="index.php?ctrller=cart&act=addtocart&proid='.$pro['id'].'" class="buy-now d-flex justify-content-center align-items-center mx-1">
									<span><i class="ion-ios-cart"></i></span>
								</a>
								<a href="#" class="heart d-flex justify-content-center align-items-center ">
									<span><i class="ion-ios-heart"></i></span>
								</a>
									</div>
								</div>
							</div>
						</div>
					</div>';
					}
				?>
    			
    			
    		</div>
    	</div>
    </section>


    <hr>

		<section class="ftco-section ftco-partner">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="assets/images/partner-1.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="assets/images/partner-2.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="assets/images/partner-3.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="assets/images/partner-4.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="assets/images/partner-5.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    		</div>
    	</div>
    </section>

	