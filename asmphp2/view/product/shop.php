
    <div class="hero-wrap hero-bread" style="background-image: url('assets/images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Sản phẩm</span></p>
            <h1 class="mb-0 bread">Cửa hàng</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
						<li><a href="index.php?ctrller=product" style="color: red;" >All</a></li>
						<?php 
							foreach ($cat as $ca)
							{
								if(isset($_GET['catid']) && $ca['id']==$_GET['catid'])
								{$ac='class="active"';}else{$ac='';}
								echo'<li><a href="index.php?ctrller=product&catid='.$ca['id'].'" '.$ac.'>'.$ca['name'].'</a></li>';
							}
						?>
						<li>
			  <div class="d-flex align-items-center" >
<form action="index.php?ctrller=product&act=search" method="post"  class="subscribe-form">
                <div class="form-group d-flex">
              <input type='text' class="form-control" name="search" placeholder="tìm kiếm" style="border: solid 1px;border-radius:0px">
              <input type="submit" value="Search" class="submit px-3">
</div>
              </form>
</div>
			</li>
    				</ul>
    			</div>
    		</div>
    		<div class="row">
			<?php 
				foreach ($pro as $p) {
					echo'<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="index.php?ctrller=product&act=detail&id='.$p['id'].'" class="img-prod"><img class="img-fluid" src="assets/images/'.$p['img'].'" alt="Colorlib Template">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="index.php?ctrller=product&act=detail&id='.$p['id'].'">'.$p['name'].'</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>'.$p['price'].'đ</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="index.php?ctrller=cart&act=addtocart&proid='.$p['id'].'" onclick="muahang()" class="buy-now d-flex justify-content-center align-items-center mx-1">
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
    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>
