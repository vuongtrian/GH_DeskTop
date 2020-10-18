<div class="col-xl-12 ftco-animate">
						<form action="admin.php?ctrller=product&act=insertproduct" method="post" enctype="multipart/form-data" class="billing-form">
							<h3 class="mb-4 billing-heading">Thêm Sản Phẩm</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-12">
	                <div class="form-group">
	                	<label for="firstname">Tên Sản Phẩm</label>
	                  <input type="text" class="form-control" name="name">
	                </div>
	              </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Giá</label>
	                  <input type="text" class="form-control" name="price">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Cân nặng</label>
	                  <input type="text" class="form-control" name="weight" >
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Loại Sản Phẩm</label><br>
                        <select name="cateid" class="form-control">
                        <?php 
                            foreach ($cat as $c) {
                                echo'<option value="'.$c['id'].'">'.$c['name'].'</option>';
                            }
                        ?>

                        </select>
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Hình đại diện</label>
	                  <input type="file" class="form-control" name="img">
	                </div>
                </div>
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
	                	<label for="streetaddress">Mô tả</label>
	                  <input type="text" class="form-control" name="detail">
	                </div>
		            </div>
                <div class="w-100"></div>
                <div class="col-md-12">
				<button class="btn btn-primary py-3 px-4" type="submit" name="submit">Thêm Sản phẩm</button>
                </div>
	            </div>
	          </form><!-- END -->
					</div>