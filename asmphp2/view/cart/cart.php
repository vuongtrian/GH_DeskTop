
    <div class="hero-wrap hero-bread" style="background-image: url('assets/images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Giỏ hàng</span></p>
            <h1 class="mb-0 bread">Giỏ hàng của tôi</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
					<?php 
							if(!isset($_SESSION['cart_items'])){echo'<h4 style="text-align: center;">Bạn Không có đơn hàng nào</h4>';}else{
							?>
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Tên sản phẩm</th>
						        <th>Giá</th>
						        <th>Số lượng</th>
						        <th>Thành tiền</th>
						      </tr>
							</thead>
						    <tbody>
								<?php
									foreach ($items as $it){
										echo'<tr class="text-center">
										<td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
										
										<td class="image-prod"><div class="img" style="background-image:url(assets/images/'.$it['img'].');"></div></td>
										
										<td class="product-name">
											<h3>'.$it['name'].'</h3>
										</td>
										
										<td class="price">'.$it['price'].'đ</td>
										
										<td class="quantity">
											<div class="input-group mb-3">
											 <input type="text" name="quantity" class="quantity form-control input-number" value="'.$it['quantity'].'" min="1" max="100">
										  </div>
									  </td>
										
										<td class="total">'.$it['price']*$it['quantity'].'đ</td>
									  </tr>';
									}
								?>
						      

							</tbody>
								
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
						<form action="index.php?ctrller=cart&act=checkout" method="post" class="billing-form">
							<h3 class="mb-4 billing-heading">Chi tiết đơn hàng</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-12">
	                <div class="form-group">
	                	<label for="firstname">Họ và tên</label>
	                  <input type="text" class="form-control" name="name" placeholder=""
					  value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>" required>
					  <span style="color:red"><?php if(isset($errname)) echo $errname;?></span>
	                </div>
	              </div>
		            <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
	                	<label for="streetaddress">Địa chỉ</label>
	                  <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ"
					  value="<?php if(isset($_POST['address'])) echo $_POST['address'];?>" required>
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Thành phố</label>
	                  <input type="text" class="form-control" name="city" placeholder=""
					  value="<?php if(isset($_POST['city'])) echo $_POST['city'];?>" required>
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Mã Bưu điện</label>
	                  <input type="text" class="form-control" name="zip" placeholder=""
					  value="<?php if(isset($_POST['zip'])) echo $_POST['zip'];?>" required>
					  <span style="color:red"><?php if(isset($errzip)) echo $errzip;?></span>
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Số điện thoại</label>
	                  <input type="text" class="form-control" name="phone" placeholder=""
					  value="<?php if(isset($_POST['phone'])) echo $_POST['phone'];?>" required>
					  <span style="color:red"><?php if(isset($errphone)) echo $errphone;?></span>
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Địa chỉ email</label>
	                  <input type="text" class="form-control" name="email" placeholder=""
					  value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>" required>
					  <span style="color:red"><?php if(isset($erremail)) echo $erremail;?></span>
	                </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
				<button class="btn btn-primary py-3 px-4" type="submit" name="submit">Đặt hàng</button>
                </div>
	            </div>
	          </form><!-- END -->
					</div>
					<div class="col-xl-5">
	          <div class="row mt-5 pt-3">
	          	<div class="col-md-12 d-flex mb-5">
	          		<div class="cart-detail cart-total p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Tổng số giỏ hàng</h3>
	          			<p class="d-flex">
		    						<span>Tổng phụ</span>
		    						<span>$20.60</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Phí vận Chuyển</span>
		    						<span>$0.00</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Giảm giá</span>
		    						<span>$3.00</span>
		    					</p>
		    					<hr>
		    					<p class="d-flex total-price">
		    						<span>Tổng cộng</span>
		    						<span>$17.60</span>
		    					</p>
								</div>
	          	</div>
	          	
	          </div>
          </div> <!-- .col-md-8 -->
		</div>
		<?php } ?>
</div>
		</section>

		
