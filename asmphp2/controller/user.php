<?php
include_once 'model/user.php';
$userObj=new USER();
$action="index";
if(isset($_GET['act']))
    $action=$_GET['act'];
switch($action){
    case "index":
        include 'view/admin/account/login.php';
        break;
    case "login":
        $u=$_POST['username'];
        $p=$_POST['password'];
        if($userObj->CheckLogin($u,$p))
        {
            $_SESSION["admin"]=$u;
        }
        header("location:admin.php?ctrller=product");
        break;
        case 'logout':
            unset($_SESSION['admin']);
            header("location:index.php");
        break;
        case "changepassword":
            include 'view/admin/account/changep.php';
            break;
        case 'change':
            $u=$_POST['username'];
            $op=$_POST['opassword'];
            $np=$_POST['npassword'];
            if($userObj->CheckLogin($u,$op))
            {
                $userObj->updatepass($u,$np);
                header("location:admin.php?ctrller=product");
            }
            else{include 'view/admin/account/changep.php';}
        break;
}

?>