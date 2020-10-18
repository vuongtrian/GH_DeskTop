<div class="col-xl-12 ftco-animate">
						<form action="admin.php?ctrller=order&act=update" method="post" enctype="multipart/form-data" class="billing-form">
							<h3 class="mb-4 billing-heading">Thông tin khách hàng</h3>
							<input type="hidden" name="id" value="<?php echo $od['id'] ?>">
	          	<div class="row align-items-end">
	          		<div class="col-md-12">
	                <div class="form-group">
	                	<label for="firstname">Khách hàng</label>
	                  <input type="text" class="form-control" readonly value="<?php echo $od['name'] ?>">
	                </div>
	              </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Địa chỉ</label>
	                  <input type="text" class="form-control" readonly value="<?php echo $od['address'] ?>">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Thành phố</label>
	                  <input type="text" class="form-control" readonly value="<?php echo $od['city'] ?>">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Mã Bưu điện</label>
	                  <input type="text" class="form-control" readonly value="<?php echo $od['zip'] ?>">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">SĐT</label>
	                  <input type="text" class="form-control" readonly value="<?php echo $od['phone'] ?>">
	                </div>
		            </div>
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
	                	<label for="streetaddress">Email</label>
	                  <input type="text" class="form-control" readonly value="<?php echo $od['email'] ?>">
	                </div>
		            </div>
				<div class="w-100"></div>
				<div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Hành động</label>
						<select name="status" class="form-control">
						<option value="<?php echo $od['status'] ?>">Chọn hành động</option>
                        <option value="1">Đặt hàng thành công</option>
						<option value="0">Đang xử lý</option>
						<option value="-1">Hủy đơn hàng</option>
                        </select>
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
						<button class="btn btn-primary py-3 px-4" type="submit" name="submit">Cập nhật</button>
	                </div>
		            </div>
                <div class="w-100"></div>
                
	          </form><!-- END -->
					</div>
<h3 class="mb-4 billing-heading">Các đơn hàng</h3>
	<table class="table">
		<thead class="thead-primary">
			<tr class="text-center">
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
					
					<td class="image-prod"><div class="img" style="background-image:url(assets/images/'.$it['img'].');"></div></td>
					
					<td class="product-name">
						<h3>'.$it['name'].'</h3>
					</td>
					
					<td class="price">'.$it['price'].'đ</td>

					<td class="price">'.$it['quantity'].'</td>
					
					
					<td class="total">'.$it['price']*$it['quantity'].'đ</td>
					</tr>';
				}
			?>
			

		</tbody>
			
		</table>