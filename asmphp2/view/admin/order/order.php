<div style="margin-bottom: 5px;height: 38px;">
          <div class="col-md-3 d-flex align-items-center" style="height: 28px;float: right;padding:0">
<form action="admin.php?ctrller=order&act=search" method="post"  class="subscribe-form">
                <div class="form-group d-flex">
              <input type='text' class="form-control" name="search" placeholder="Tìm kiếm khách hàng" style="border: solid 1px;border-radius:0px">
              <input type="submit" value="Search" class="submit px-3">
</div>
              </form>
</div></div>
<table class="table">
    <thead class="thead-primary">
        <tr class="text-center">
        <th>Khách hàng</th>
        <th>Email</th>
        <th>Tình trạng</th>
        <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($cus as $sp) {
        $status="";
        if($sp['status']==0){$status="Đang xử lý";}
        elseif($sp['status']==1){$status="Thành công";}
        else{$status="Hủy đơn hàng";}
        echo'<tr class="text-center">
        <td class="product-name">
            <h3>'.$sp['name'].'</h3>
        </td>
        
        <td class="price">'.$sp['email'].'</td>
        <td class="price">'.$status.'</td>
        <td class="product-remove"><a href="admin.php?ctrller=order&act=detail&id='.$sp['id'].'"><span class="ion-md-build"></span></a>
        <a href="admin.php?ctrller=order&act=sendmail&id='.$sp['id'].'&mail='.$sp['email'].'&stat='.$sp['status'].'"><span class="ion-md-mail"></span></a>
        <a href="admin.php?ctrller=order&act=del&id='.$sp['id'].'"><span class="ion-ios-close"></span></a></td>
    </tr>';
    }  
    ?>

    </tbody>
        
    </table>