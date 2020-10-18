<?php
include_once 'model/product.php';
$p=new PRODUCT();
$action="index";
if(isset($_GET['id']))
    $action=$_GET['id'];
if(isset($_GET['act']))
    $action=$_GET['act'];
switch($action){
    case "index":
        $pro=$p->getAllProduct();
        include 'view/admin/product/product.php';
        break;
        case 'addnew':
            $cat=$p->getcategory();
            include "view/admin/product/addproduct.php";
        break;
        case 'insertproduct':
            $imgname=$_FILES['img']['name'];
            $dir="assets/images/";
            $file_path=$dir.$imgname;
            move_uploaded_file($_FILES['img']['tmp_name'], $file_path);
                $name=$_POST['name'];
                $price=$_POST['price'];
                $detail=$_POST['detail'];
                $weight=$_POST['weight'];
                $cateid=$_POST['cateid'];
                $p->insertproduct($name,$price,$detail,$imgname,$weight,$cateid);
            header ("location:admin.php?ctrller=product");
        break;
        case 'updateproduct':
            $id=$_POST['id'];
            $imgname=$_FILES['img']['name'];
            $dir="assets/images/";
            $file_path=$dir.$imgname;
            move_uploaded_file($_FILES['img']['tmp_name'], $file_path);
                $name=$_POST['name'];
                $price=$_POST['price'];
                $detail=$_POST['detail'];
                $weight=$_POST['weight'];
                $cateid=$_POST['cateid'];
                $p->updateproduct($id,$name,$price,$detail,$imgname,$weight,$cateid);
            header ("location:admin.php?ctrller=product");
        break;
        case 'delete':
            $id=$_GET['id'];
            $p->delproduct($id);
            $pro=$p->getAllproduct();
            include "view/admin/product/product.php";
        break;
        case 'edit':
            $id=$_GET['id'];
            $pro=$p->getProductById($id);
            $cat=$p->getcategory();
            include "view/admin/product/editproduct.php";
        break;
        case 'search':
            $textSearch=$_POST['search'];
            $pro=$p->searchProductByName($textSearch);
            include 'view/admin/product/product.php';
        break;
}

?>