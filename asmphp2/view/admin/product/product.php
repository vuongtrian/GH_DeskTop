<div style="margin-bottom: 5px;height: 38px;">
          <div class="col-md-3 d-flex align-items-center" style="height: 28px;float: right;padding:0">
<form action="admin.php?ctrller=product&act=search" method="post"  class="subscribe-form">
                <div class="form-group d-flex">
              <input type='text' class="form-control" name="search" placeholder="Tìm kiếm sản phẩm" style="border: solid 1px;border-radius:0px">
              <input type="submit" value="Search" class="submit px-3">
</div>
              </form>
</div>
<a href="admin.php?ctrller=product&act=addnew" style="float: left;"class="btn btn-primary">Thêm sản phẩm</a>
</div>
<table class="table">
    <thead class="thead-primary">
        <tr class="text-center">
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Cân nặng</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($pro as $sp) {
        echo'<tr class="text-center">
        <td class="product-remove"><a href="admin.php?ctrller=product&act=delete&id='.$sp['id'].'"><span class="ion-ios-close"></span></a>
        <a href="admin.php?ctrller=product&act=edit&id='.$sp['id'].'"><span class="ion-md-build"></span></a></td>
        <td class="image-prod"><div class="img" style="background-image:url(assets/images/'.$sp['img'].');"></div></td>
        <td class="product-name">
            <h3>'.$sp['name'].'</h3>
        </td>
        <td class="price">'.$sp['price'].'đ</td>
        <td class="price">'.$sp['weight'].'kg</td>
    </tr>';
    }  
    ?>

    </tbody>
        
    </table>