<?php
include_once 'model/customer.php';
$o=new CUSTOMER();
$action="index";
if(isset($_GET['id']))
    $action=$_GET['id'];
if(isset($_GET['act']))
    $action=$_GET['act'];
switch($action){
    case "index":
        $cus=$o->getAllcustomer();
        include 'view/admin/order/order.php';
        break;
    case "detail":
        $id=$_GET['id'];
        $od=$o->getorderById($id);
        $items=$o->getorderdetail($id);
        include 'view/admin/order/editorder.php';
        break;
    case "update":
        $id=$_POST['id'];
        $status=$_POST['status'];
        $o->updatestatus($id,$status);
        header("location:admin.php?ctrller=order");
        break;
    case "del":
        $id=$_GET['id'];
        $o->delorder($id);
        $o->delcustomer($id);
        header("location:admin.php?ctrller=order");
    break;
    case 'search':
        $textSearch=$_POST['search'];
        $cus=$o->searchCustomerByName($textSearch);
        include 'view/admin/order/order.php';
    break;
    case 'sendmail':
        $id=$_GET['id'];
        $tomail=$_GET['mail'];
        $status=$_GET['stat'];
        $data=$o->getorderdetail($id);
        sendMail($data,$tomail,$status);
        $cus=$o->getAllcustomer();
        include 'view/admin/order/order.php';
    break;
}
function sendMail($data,$tomail,$status)
{
require_once 'Mail.php';
require_once 'Mail/mime.php';

$smtp=array();
$smtp['host']='ssl://smtp.gmail.com';
$smtp['port']='465';
$smtp['auth']=true;
$smtp['username']='levanluyenphu1939@gmail.com';
$smtp['password']='qsohxwbrvvbuosst';

$mailer=Mail::factory('smtp',$smtp);

$from = "levanluyenphu1939@gmail.com";

$to = $tomail;
$subject="Thông tin đơn hàng";

$header = array ('From' => $from,'To' => $to, 'Subject' => $subject);
$mime = new Mail_mime();
$body = '<html><head><meta charset="utf-8"></head><body>';
$body .= '<h1 style="text-align: center;"><span style="color:#82ae46;">HOAQUAFRESH</span></h1>';
if($status==1){$body .='<h2 style="text-align: center;">Đơn hàng đã giao thành công</h2>';}
elseif($status==-1){$body .='<h2 style="text-align: center;">Đã hủy đơn hàng</h2>';}else{$body .='<h2 style="text-align: center;">Đã tiếp nhận đơn hàng</h2>';}
$body .= '<br><br>
        Chi tiết đơn hàng:<br><br>';
$body .= '<table width="900px" border="1">
        <tr>
            <td>Hinh</td>
            <td>Sản phẩm</td>
            <td>Giá</td>
            <td>Số lượng</td>
            <td>Thành tiền</td>
        </tr>';
foreach($data as $d)
{
    $body .='<tr>
    <td><img src="assets/images/'.$d['img'].'" width="50px"></td>
    <td>'.$d['name'].'</td>
    <td>'.$d['price'].'đ</td>
    <td>'.$d['quantity'].'</td>
    <td>'.$d['quantity']*$d['price'].'đ</td>
    </tr>';
    $mime->addHTMLImage('assets/images/'.$d['img'], 'image/png');
    $mime->addAttachment('assets/images/'.$d['img'], 'image/png');
    
}
$body .='</table>';
$body .='</body></html>';
    $mime->setHTMLBody($body);

    $mimeparams['text_encoding']="8bit";
    $mimeparams['text_charset']="UTF-8";
    $mimeparams['html_charset']="UTF-8";
    $mimeparams['head_charset']="UTF-8";
    $mimeparams["debug"] = "True";

    $body=$mime->get($mimeparams);
    $header = $mime->headers($header);
    $mail=$mailer->send($to, $header ,$body);
    if (PEAR::isError($mail))
{
    $alert="<p>" . $mail->getMessage() . "</p>";
    return false;
}
else
{
    $alert="<p>Message successfully sent!</p>";
    return true;
}
}
    ?>