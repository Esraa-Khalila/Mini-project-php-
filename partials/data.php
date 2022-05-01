<?php

session_start(); 
if(isset($_SESSION['product_Name'])){
     $name= $_SESSION['product_Name'];
      $dec= $_SESSION['product_Description'];
    
}
else{
  $name=[];
}
if(isset($_POST['product_Name'])){
$name[]=$_POST['product_Name'];
$dec[]=$_POST['product_Description'];


}
$_SESSION['product_Name']=$name;
$_SESSION['product_Description']=$dec;

?>

