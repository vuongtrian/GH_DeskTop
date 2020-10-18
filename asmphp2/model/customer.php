<?php
    include_once('database.php');
    class CUSTOMER extends DATABASE
    {
        function __construct()
        {
            parent::__construct();
        }
        function insert($name,$address,$city,$zip,$phone,$email,$time) 
        {
            $this->SetQuery("INSERT INTO `customer` (`name`, `address`, `city`, `zip`, `phone`, `email`, `time`) 
            VALUES ('".$name."','".$address."','".$city."','".$zip."','".$phone."','".$email."','".$time."')");
            $this->result=$this->ThucHienLenh();
            return $this->LastInsertID();
        }
        function insertorderdetail($customer_id,$product_id,$quantity) 
        {
            $this->SetQuery("INSERT INTO `orderdetail`(`customer_id`, `product_id`,
             `quantity`)VALUES ('".$customer_id."','".$product_id."','".$quantity."')");
            $this->result=$this->ThucHienLenh();
        }
        function getAllcustomer()
        {
            $this->SetQuery("SELECT * from customer ORDER BY STATUS");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }
        function getorderById($id)
        {
            $this->SetQuery("SELECT * from customer where id=$id");
            $this->result=$this->ThucHienTruyVan();
            $row=$this->result->fetch(pdo::FETCH_ASSOC);
            return $row;
        }
        function updatestatus($id,$status)
        {
            $query = "UPDATE customer SET status='".$status."' where id='".$id."'";
               $this->SetQuery($query);
               $this->result=$this->ThucHienLenh();
        }
        function delorder($id)
        {
            $query="delete from orderdetail where customer_id=$id";
            $this->SetQuery($query);
            $this->result=$this->ThucHienLenh();
        }
        function delcustomer($id)
        {
            $query="delete from customer where id=$id";
            $this->SetQuery($query);
            $this->result=$this->ThucHienLenh();
        }
        function getorderdetail($id)
        {
            $this->SetQuery("select name,img,price,quantity from product,orderdetail 
            WHERE product.id=orderdetail.product_id and customer_id='$id'");
            $this->result=$this->ThucHienTruyVan();
            return $this->result; 
        }
        function searchCustomerByName($txt)
        {
            $this->SetQuery("Select * from customer where name like '%".$txt."%'");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }
    }
    ?>