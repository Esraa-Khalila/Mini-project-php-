<?php include('./partials/menu.php')?>
<?php include('./partials/data.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<div class='form1'>
    <div class="container">
    <form method='post' action=''  enctype="multipart/form-data" >
    <h3>Add Product<h3>
    <input type="text" placeholder="Product Name" name='product_Name'  ><br>
    <input type="text" placeholder="Product Description" name='product_Description' required><br>
    <input type='file' name='image'> 
    <input type="submit" name='submit' value="Add" id='bgBtn'><br>
    <a href='View-Product.php'>Go to view page</a>
  </form>

</div>             
</div>
</div>

<hr>
<div class='cont' >
<table class='tb' >
  <tr >
  <th >S.N</th>
    <th >Name</th>
    <th  >dec</th>
    <th>image</th>
 </tr>
<?php 
$count = 0 ;
foreach($name as $key=>$value){
  $count++;
  print "<tr style='border:1px solid black'>
   <td  style='border:1px solid black ; padding:20px'>$count</td>
  <td  style='border:1px solid black ; padding:15px'>$name[$key]</td>
  <td  style='border:1px solid black ; padding:15px'>$dec[$key]</td>

  </td>

  <tr>
";

}   
?>
      <td class="text-primary">
                                <?php 
                                if($image!='')
                                {
                                  ?>
                                  <img src="http://localhost:8080/mini-project-php-/images/category/<?php echo $image;?>" width='120px'>
                                  <?php
                              } 
                              else 
                              {
                                  echo "<div class='error'>image not added</div>";
                              }
                              ?>
                          </td>

</table>
</div>
<?php include('./partials/footer.php')?>
</body>
</html>