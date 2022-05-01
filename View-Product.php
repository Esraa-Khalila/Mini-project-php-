<?php include('./partials/data.php')?>
<?php include('./partials/menu.php')?>

  

    <div class='all'>
        <?php  foreach($name as $key=>$value): ?>   
          <div class='item' >
          <img src='./images/cream.jpg' alt="picture"
          class='card-img-top'
          alt='...'
        /> 
        <div class='card-body'>
         <h5 class='card-title'><?php echo$name[$key]?></h5> <br>
         <p class='card-title' ><?php echo$dec[$key]?></p>     
        <button><a href='#' class='btn btn-primary'>view Cart</a></button>

       </div> 
      </div>      
<?php endforeach; ?>
    </div>
   