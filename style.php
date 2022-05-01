<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");


$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '2rem';
$border = '1px solid';
?>
table {
margin: 8px;
 display:flex;
    justify-content:center;
     
}

th {
font-family: <?=$font_family?>;
font-size: <?=$font_size?>;
background: #e2c58c;
color: black;
padding: 2px 6px;
border-collapse: separate;
border: <?=$border?> #000;
}

td {
font-family: <?=$font_family?>;
font-size: <?=$font_size?>;
border: <?=$border?> #DDD;
}
.all{

height: 600px;
display: flex;
flex-wrap: wrap;
flex-direction: row;
align-items: center;
margin: 150px;
margin-left:100px;

}
 img{
width:200px
}
.item {
flex: 0 0 0;
margin: 50px;
border:1px solid black;
padding:50px;
 border-radius:20px;
 
}
.item a{
font-size:15px;
 margin:20px;
 padding:25px;
 color:black;

}
.item button{
 border-radius:20px;
 padding:10px;
 background-color:#e2c58c;
}
.card-title{
    font-size:15px; 
    text-align:center ;
    font-family: <?=$font_family?>;
    margin:5px;
}
