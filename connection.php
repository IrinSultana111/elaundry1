<?php

$conn= new mysqli('localhost','root','','elaundrydb');

if($conn-> connect_error)
{

  die('failed'.$conn->connect_error);
}




 ?>
