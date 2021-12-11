<?php

$order_id =  $_GET['Delivered'];
$connection = mysqli_connect('localhost','root','','ecommapp'); 


$UpdateQuery = "UPDATE customer_order SET 
delivered = '1' WHERE order_id = '$order_id'";
$Execute = mysqli_query($connection,$UpdateQuery);
if ( $Execute === FALSE ) {
    printf("error: %s\n", mysqli_error($connection));
  }
  else {
    echo '<script>window.open("showing_order.php?Delivered=Delivered Sucessfully","_self")</script>';
  }



?>