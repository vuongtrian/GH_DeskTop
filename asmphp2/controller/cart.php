<?php
session_start();
include 'model/cartservice.php';
$c=new CARTSERVICE();
$cr=new CUSTOMER();
$action="index";
if(isset($_GEdT['act']))
    $action=$_GET['act'];
switch($action){
    case "index":
        if(isset($_SESSION['cart_items'])){
            $items=$c->getcart();
        }
        include 'view/cart/cart.php';
        break;

    case 'addtocart':
           $id=$_GET['proid'];
           $c->AddToCart($id);
        header("location:index.php?ctrller=cart");
        break;
    case 'checkout':
        if(isset($_SESSION['cart_items'])){
            $items=$c->getcart();}
            $loi=false;
            $time=date('Y-m-d H:i:s');
            $name=$_POST['name'];
            $errname="";
                $kq=preg_match("/^[a-zA-Z ]*$/",$name);
                if($kq==0){
                $errname="chỉ nhập ký tự";
                $loi=true;
                }
            $address=$_POST['address'];
            $phone=$_POST['phone'];
            $errphone="";
                $kq=preg_match("/^[0-9]*$/",$phone);
                if($kq==0){
                $errphone="chỉ nhập số";
                $loi=true;
                }
            $city=$_POST['city'];
            $zip=$_POST['zip'];
            $errzip="";
                $kq=preg_match("/^[0-9]*$/",$zip);
                if($kq==0){
                $errzip="chỉ nhập số";
                $loi=true;
                }
            $email=$_POST['email'];
            $erremail="";
                $kq=preg_match("/[A-Za-z0-9-]+@[A-Za-z0-9-]/",$email);
                if($kq==0){
                $erremail="thiếu dấu @";
                $loi=true;
                }
            if($loi==false){
            $cid=$cr->insert($name,$address,$city,$zip,$phone,$email,$time);
            $c->insertdetail($cid);
            $c->ClearCart();
    header("location:index.php?ctrller=home");}
    else{include 'view/cart/cart.php';}
    break;
}

?>