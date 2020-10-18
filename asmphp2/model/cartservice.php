<?php
include_once "product.php";
include_once "customer.php";
    class CARTSERVICE 
    {
        function AddToCart($pro_id) 
        {
          $i=0;
          $fonud=false;
          if(!isset($_SESSION['cart_items']))
          {
              $_SESSION['cart_items']=array(0=>array("pro_id"=>$pro_id, "quantity"=>1));
          }
          else
          {
              foreach ($_SESSION['cart_items'] as $item) {
                  $i++;
                  while(list($key, $value)=each($item))
                  {
                      if($key="pro_id" && $value==$pro_id)
                      {
                          array_splice($_SESSION['cart_items'],$i-1,1,array(array("pro_id"=>$pro_id, "quantity"=>$item["quantity"]+1)));
                          $fonud=true;
                      }
                  }
              }
              if($fonud==false)
              {
                  array_push($_SESSION['cart_items'],array("pro_id"=>$pro_id, "quantity"=>1));
              }
          }      
        }
        function insertdetail($id)
        {
            $c=new CUSTOMER();
            foreach ($_SESSION['cart_items'] as $item) {
                $c->insertorderdetail($id,$item['pro_id'],$item['quantity']);
            }
        }
        function getcart()
        {
            $p=new PRODUCT();
            $items=array();
            foreach($_SESSION['cart_items'] as $item)
            {
                $temp=$p->getProductById($item['pro_id']);
                $temp["quantity"]=$item['quantity'];
                array_push($items,$temp);
            }
            return $items;
        }
        function ClearCart() 
        {
         unset($_SESSION['cart_items']);
         session_unset();
        }
        
    }
?>