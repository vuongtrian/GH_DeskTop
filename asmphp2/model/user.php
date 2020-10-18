<?php
 include('database.php');
 class USER extends DATABASE
 {
     function __construct()
     {
         parent::__construct();
     }
     function CheckLogin($username,$pass)
     {
         $this->SetQuery("SELECT * FROM user where username='$username' AND password='$pass'");
         $this->result=$this->ThucHienTruyVan();
         $rows_affected = $this->result->rowCount();
         if ($rows_affected == 0)
         {
             return false;
         }
         return true;
     }
     function updatepass($u,$np)
     {
     $this->SetQuery("UPDATE user SET password='$np' WHERE username='$u'");
     $this->result=$this->ThucHienTruyVan();
     return $this->result;}
}
?>