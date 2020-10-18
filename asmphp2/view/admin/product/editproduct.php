<div class="col-xl-12 ftco-animate">
						<form action="admin.php?ctrller=product&act=updateproduct" method="post" enctype="multipart/form-data" class="billing-form">
							<h3 class="mb-4 billing-heading">Cập nhật sản phẩm</h3>
							<input type="hidden" name="id" value="<?php echo $pro['id'] ?>">
	          	<div class="row align-items-end">
	          		<div class="col-md-12">
	                <div class="form-group">
	                	<label for="firstname">Tên Sản Phẩm</label>
	                  <input type="text" class="form-control" name="name" value="<?php echo $pro['name'] ?>">
	                </div>
	              </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Giá</label>
	                  <input type="text" class="form-control" name="price" value="<?php echo $pro['price'] ?>">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Cân nặng</label>
	                  <input type="text" class="form-control" name="weight" value="<?php echo $pro['weight'] ?>">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Loại Sản Phẩm</label><br>
                        <select name="cateid" class="form-control">
						<option value="<?php echo $pro['cateid'] ?>">Chọn danh mục khác</option>
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
	                  <input type="text" class="form-control" name="detail" value="<?php echo $pro['detail'] ?>">
	                </div>
		            </div>
                <div class="w-100"></div>
                <div class="col-md-12">
				<button class="btn btn-primary py-3 px-4" type="submit" name="submit">Cập nhật</button>
                </div>
	            </div>
	          </form><!-- END -->
					</div>