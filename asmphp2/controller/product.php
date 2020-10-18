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
        $cat=$p->getcategory();
        if(isset($_GET['catid']))
        {$id=$_GET['catid'];}
        else{$id=0;}
        $pro=$p->loadcata($id);
        include 'view/product/shop.php';
        break;
    case "detail":
        $id=$_GET['id'];
        $proid=$p->getProductById($id);
        $cat=$p->getcategory();
        include 'view/product/product-single.php';
        break;
        case 'search':
            $textSearch=$_POST['search'];
            $pro=$p->searchProductByName($textSearch);
            include 'view/product/shop.php';
        break;
}

?>