<?php
if(isset($_FILES['image']['name'])){
$image=$_FILES['image']['name'];
if($image != "" ){}
$ext=(explode('.',$image));
$fileExtension = end($ext);
$image='Food_category_'.rand(000,999).'.'.$fileExtension;
$path=$_FILES['image']['tmp_name'];
$insid_path='../images/category/'.$image;
$upload=move_uploaded_file($path,$insid_path);
if($upload == false){
    $_SESSION['upload']="<div class='error'>Failed</div>";
    header('location:'.SITURL.'admin/add-category.php');
    dir();
}
}else {
$image='';
}

session_start(); 
if(isset($_SESSION['product_Name'])){
     $name= $_SESSION['product_Name'];
      $dec= $_SESSION['product_Description'];
      $image= $_SESSION['image'];
    
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
$_SESSION= ['image']=$image;

?>

