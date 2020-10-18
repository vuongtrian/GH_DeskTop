<?php
    include_once('database.php');
    class PRODUCT extends DATABASE
    {
        function __construct()
        {
            parent::__construct();
        }
        function getAllProduct()
        {
            $this->SetQuery("SELECT * from product");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }
        function loadcata($idcat=0){
            $query="select * from product where 1";
            if($idcat>0){
                $query.=" and cateid=".$idcat;
            }
            $query.=" order by id desc";
            $this->SetQuery($query);
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }
        function getProductbybuy()
        {
            $this->SetQuery("SELECT * from product order by buy desc limit 8");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }
        function getcategory()
        {
            $this->SetQuery("SELECT * from category");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }
        function getProductById($id)
        {
            $this->SetQuery("SELECT * from product where id=$id");
            $this->result=$this->ThucHienTruyVan();
            $row=$this->result->fetch(pdo::FETCH_ASSOC);
            return $row;
        }
        function getProductByCate($id)
        {
            $this->SetQuery("SELECT * from product where cateid=$id");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }
        function searchProductByName($txt)
        {
            $this->SetQuery("Select * from product where name like '%".$txt."%'");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }
        function insertproduct($name,$price,$detail,$img,$weight,$cateid)
        {
            $query = "INSERT INTO `product`(`name`, `price`, `detail`, `img`, `weight`, `cateid`) 
            VALUES ('".$name."','".$price."','".$detail."','".$img."','".$weight."','".$cateid."')";
               $this->SetQuery($query);
               $this->result=$this->ThucHienLenh();
        }
        function delproduct($id)
        {
            $query="delete from product where id=$id";
            $this->SetQuery($query);
            $this->result=$this->ThucHienLenh();
        }
        function updateproduct($id,$name,$price,$detail,$img,$weight,$cateid)
        {
            $query="";
            if($img!=""){
            $query = "update product set name='".$name."',price='".$price."',
            detail='".$detail."',img='".$img."',weight='".$weight."',
            cateid='".$cateid."' where id='".$id."'";}
            else{$query = "update product set name='".$name."',price='".$price."',
                detail='".$detail."',weight='".$weight."',
                cateid='".$cateid."' where id='".$id."'";}
               $this->SetQuery($query);
               $this->result=$this->ThucHienLenh();
        }
    }
?>