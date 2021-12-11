<?php
session_start();
if(isset($_SESSION['user_username']) && isset($_SESSION['user_password'])){  



  // session_unset();
  // session_Destroy();

if(isset($_SESSION['cart']))
{
$count = count($_SESSION['cart']);

// echo $count;
$customer_name = $_SESSION['user_username'];
// $customer_id = $cart[0][$index]['customer_id'];
date_default_timezone_set('UTC');
$today = date("d/m/y");
echo $today;
$connection = mysqli_connect('localhost','root','','ecommapp');
 if($connection)
     {
     echo"connected";
     } 
     // retrieve query start
     $Retrieve = "SELECT id FROM users WHERE username = '$customer_name'";
     $Execute1 = mysqli_query($connection,$Retrieve);
     if (!$Execute1) {
      printf("Error: %s\n", mysqli_error($connection));
  //     exit();
       }
       while($DataRow = mysqli_fetch_array($Execute1)){
         $customer_id = $DataRow['id'];
       }
       // retrieve query end

     $ViewQuery = "INSERT into customer_order(customer_id)values('$customer_id')";
     $Execute = mysqli_query($connection,$ViewQuery);
     if (!$Execute) {
    printf("Error: %s\n", mysqli_error($connection));
//     exit();
     }
    




for($index = 0 ; $index < $count ; $index++)
{
     
    // $id = $cart[0][$index]['id'];
    $id = $_SESSION['cart'][$index]['id'];
    echo $id;
    
    if($id>=1 && $id<101)
    {
        //echo $id;
        $quantity = $_SESSION['cart'][$index]['quantity'];
        $stock = $_SESSION['cart'][$index]['stock'];
        $ViewQuery = "SELECT mobile.mobie_id,mobile.mobile_name,mobile.price
        FROM mobile  where mobile.mobie_id = '$id'";
        $Execute = mysqli_query($connection,$ViewQuery);
        if (!$Execute) {
        printf("Error: %s\n", mysqli_error($connection));
        exit();
        }
        while($DataRow = mysqli_fetch_array($Execute)){
	
	    $ID = $DataRow['mobie_id'];
	    $MN = $DataRow['mobile_name'];
        $Pr = $DataRow['price'];
        
        }
        $total = $quantity * $Pr;
        //echo $total;
           // echo "<p $Pr ></p>";
           $Order = "SELECT customer_order.order_id
        FROM customer_order  where customer_order.customer_id = '$customer_id'";
           $Execute = mysqli_query($connection,$Order);
           if (!$Execute) {
           printf("Error: %s\n", mysqli_error($connection));
           exit();
           }
            while($DataRow1 = mysqli_fetch_array($Execute)){
	
	       $order = $DataRow1['order_id'];
	        
        
        }
        $InsertQuery = "INSERT into order_product(order_id,product_id, 
        product_price, quantity, PUR_DATE, Total)values('$order','$ID','$Pr','$quantity',
        '$today','$total')";
        $Execute = mysqli_query($connection,$InsertQuery);
        if (!$Execute) {
        printf("Error: %s\n", mysqli_error($connection));
        exit();
        }
        $check_stock = $stock - $quantity;
        $UpdateQuery = "UPDATE product SET 
           stock_quantity = '$check_stock'
           WHERE mobile_id = '$id'";
           $Execute = mysqli_query($connection,$UpdateQuery);
           if ( $Execute === FALSE ) {
              printf("error: %s\n", mysqli_error($connection));
           }
           
       
           
    
    }


    if($id>=101 && $id<201)
    {
      $quantity = $_SESSION['cart'][$index]['quantity'];
      $stock = $_SESSION['cart'][$index]['stock'];
        $ViewQuery = "SELECT laptop_id,laptop_name,laptop_price
        FROM laptop  where laptop.laptop_id = '$id'";
        $Execute = mysqli_query($connection,$ViewQuery);
        if (!$Execute) {
        printf("Error: %s\n", mysqli_error($connection));
        exit();
        }
        while($DataRow = mysqli_fetch_array($Execute)){
	
	    $ID = $DataRow['laptop_id'];
	    $MN = $DataRow['laptop_name'];
        $Pr = $DataRow['laptop_price'];
        
        }
        $total = $quantity * $Pr;
        //echo $total;
        
         $Order = "SELECT customer_order.order_id
         FROM customer_order  where customer_order.customer_id = '$customer_id'";
           $Execute = mysqli_query($connection,$Order);
           if (!$Execute) {
           printf("Error: %s\n", mysqli_error($connection));
           exit();
           }
           while($DataRow1 = mysqli_fetch_array($Execute)){
	
            $order = $DataRow1['order_id'];
             
         
         }
           $InsertQuery = "INSERT into order_product(order_id,product_id, 
        product_price, quantity, PUR_DATE, Total)values('$order','$ID','$Pr','$quantity',
        '$today','$total')";
        $Execute = mysqli_query($connection,$InsertQuery);
        if (!$Execute) {
        printf("Error: %s\n", mysqli_error($connection));
        exit();
        }
        $check_stock = $stock - $quantity;
        $UpdateQuery = "UPDATE product SET 
           stock_quantity = '$check_stock'
           WHERE laptop_id = '$id'";
           $Execute = mysqli_query($connection,$UpdateQuery);
           if ( $Execute === FALSE ) {
              printf("error: %s\n", mysqli_error($connection));
           }
           
        
    }
    if($id>=201 && $id<301)
    {
      $quantity = $_SESSION['cart'][$index]['quantity'];
      $stock = $_SESSION['cart'][$index]['stock'];
        $ViewQuery = "SELECT gpu_id,gpu_name,gpu_price
        FROM gpu  where gpu_id = '$id'";
        $Execute = mysqli_query($connection,$ViewQuery);
        if (!$Execute) {
        printf("Error: %s\n", mysqli_error($connection));
        exit();
        }
        while($DataRow = mysqli_fetch_array($Execute)){
	
	    $ID = $DataRow['gpu_id'];
	    $MN = $DataRow['gpu_name'];
        $Pr = $DataRow['gpu_price'];
        
        }
        $total = $quantity * $Pr;
        //echo $total;
        $Order = "SELECT customer_order.order_id
         FROM customer_order  where customer_order.customer_id = '$customer_id'";
           $Execute = mysqli_query($connection,$Order);
           if (!$Execute) {
           printf("Error: %s\n", mysqli_error($connection));
           exit();
           }
            while($DataRow1 = mysqli_fetch_array($Execute)){
	
            $order = $DataRow1['order_id'];
             
         
         }
        
        $InsertQuery = "INSERT into order_product(order_id,product_id, 
        product_price, quantity, PUR_DATE, Total)values('$order','$ID','$Pr','$quantity',
        '$today','$total')";
        $Execute = mysqli_query($connection,$InsertQuery);
        if (!$Execute) {
        printf("Error: %s\n", mysqli_error($connection));
        exit();
        }

        $check_stock = $stock - $quantity;
        $UpdateQuery = "UPDATE product SET 
           stock_quantity = '$check_stock'
           WHERE gpu_id = '$id'";
           $Execute = mysqli_query($connection,$UpdateQuery);
           if ( $Execute === FALSE ) {
              printf("error: %s\n", mysqli_error($connection));
           }
           
    }
    if($id>=301 && $id<401)
    {
      $quantity = $_SESSION['cart'][$index]['quantity'];
      $stock = $_SESSION['cart'][$index]['stock'];
        $ViewQuery = "SELECT sd_id,storage_name,sd_price
        FROM storage_device  where sd_id = '$id'";
        $Execute = mysqli_query($connection,$ViewQuery);
        if (!$Execute) {
        printf("Error: %s\n", mysqli_error($connection));
        exit();
        }
        while($DataRow = mysqli_fetch_array($Execute)){
	
	    $ID = $DataRow['sd_id'];
	    $MN = $DataRow['storage_name'];
        $Pr = $DataRow['sd_price'];
        
        }
        $total = $quantity * $Pr;
        //echo $total;
        $Order = "SELECT customer_order.order_id
         FROM customer_order  where customer_order.customer_id = '$customer_id'";
           $Execute = mysqli_query($connection,$Order);
           if (!$Execute) {
           printf("Error: %s\n", mysqli_error($connection));
           exit();
           }
        
           while($DataRow1 = mysqli_fetch_array($Execute)){
	
            $order = $DataRow1['order_id'];
             
         
         }
           $InsertQuery = "INSERT into order_product(order_id,product_id, 
           product_price, quantity, PUR_DATE, Total)values('$order','$ID','$Pr','$quantity',
           '$today','$total')";
           $Execute = mysqli_query($connection,$InsertQuery);
           if (!$Execute) {
           printf("Error: %s\n", mysqli_error($connection));
           exit();
           }

           $check_stock = $stock - $quantity;
           $UpdateQuery = "UPDATE product SET 
              stock_quantity = '$check_stock'
              WHERE sd_id = '$id'";
              $Execute = mysqli_query($connection,$UpdateQuery);
              if ( $Execute === FALSE ) {
                 printf("error: %s\n", mysqli_error($connection));
              }
              
    }
    if($id>=401 && $id<501)
    {
      $quantity = $_SESSION['cart'][$index]['quantity'];
      $stock = $_SESSION['cart'][$index]['stock'];
        $ViewQuery = "SELECT ram_id,ram_name,ram_price
        FROM ram  where ram_id = '$id'";
        $Execute = mysqli_query($connection,$ViewQuery);
        if (!$Execute) {
        printf("Error: %s\n", mysqli_error($connection));
        exit();
        }
        while($DataRow = mysqli_fetch_array($Execute)){
	
	    $ID = $DataRow['ram_id'];
	    $MN = $DataRow['ram_name'];
        $Pr = $DataRow['ram_price'];
        
        }
        $total = $quantity * $Pr;
       // echo $total;
       $Order = "SELECT customer_order.order_id
         FROM customer_order  where customer_order.customer_id = '$customer_id'";
           $Execute = mysqli_query($connection,$Order);
           if (!$Execute) {
           printf("Error: %s\n", mysqli_error($connection));
           exit();
           }
        
           while($DataRow1 = mysqli_fetch_array($Execute)){
	
            $order = $DataRow1['order_id'];
             
         
         }
       $InsertQuery = "INSERT into order_product(order_id,product_id, 
       product_price, quantity, PUR_DATE, Total)values('$order','$ID','$Pr','$quantity',
       '$today','$total')";
       $Execute = mysqli_query($connection,$InsertQuery);
       if (!$Execute) {
       printf("Error: %s\n", mysqli_error($connection));
       exit();
       }


       $check_stock = $stock - $quantity;
       $UpdateQuery = "UPDATE product SET 
          stock_quantity = '$check_stock'
          WHERE ram_id = '$id'";
          $Execute = mysqli_query($connection,$UpdateQuery);
          if ( $Execute === FALSE ) {
             printf("error: %s\n", mysqli_error($connection));
          }
          
    }
    if($id>=501 && $id<601)
    {
      $quantity = $_SESSION['cart'][$index]['quantity'];
      $stock = $_SESSION['cart'][$index]['stock'];
        $ViewQuery = "SELECT pre_id,pre_name,pre_price
        FROM processor  where pre_id = '$id'";
        $Execute = mysqli_query($connection,$ViewQuery);
        if (!$Execute) {
        printf("Error: %s\n", mysqli_error($connection));
        exit();
        }
        while($DataRow = mysqli_fetch_array($Execute)){
	
	    $ID = $DataRow['pre_id'];
	    $MN = $DataRow['pre_name'];
        $Pr = $DataRow['pre_price'];
        
        }
        $total = $quantity * $Pr;
        
        $Order = "SELECT customer_order.order_id
         FROM customer_order  where customer_order.customer_id = '$customer_id'";
           $Execute = mysqli_query($connection,$Order);
           if (!$Execute) {
           printf("Error: %s\n", mysqli_error($connection));
           exit();
           }
        
           while($DataRow1 = mysqli_fetch_array($Execute)){
	
            $order = $DataRow1['order_id'];
             
         
         }
           $InsertQuery = "INSERT into order_product(order_id,product_id, 
           product_price, quantity, PUR_DATE, Total)values('$order','$ID','$Pr','$quantity',
           '$today','$total')";
           $Execute = mysqli_query($connection,$InsertQuery);
           if (!$Execute) {
           printf("Error: %s\n", mysqli_error($connection));
           exit();
           }

           $check_stock = $stock - $quantity;
           $UpdateQuery = "UPDATE product SET 
              stock_quantity = '$check_stock'
              WHERE pre_id = '$id'";
              $Execute = mysqli_query($connection,$UpdateQuery);
              if ( $Execute === FALSE ) {
                 printf("error: %s\n", mysqli_error($connection));
              }
              
    }
    if($id>=601 && $id<701)
     {
      $quantity = $_SESSION['cart'][$index]['quantity'];
      $stock = $_SESSION['cart'][$index]['stock'];
        $ViewQuery = "SELECT mobd_id,mobd_name,mobd_price
        FROM motherboard  where mobd_id = '$id'";
        $Execute = mysqli_query($connection,$ViewQuery);
        if (!$Execute) {
        printf("Error: %s\n", mysqli_error($connection));
        exit();
        }
        while($DataRow = mysqli_fetch_array($Execute)){
	
	    $ID = $DataRow['mobd_id'];
	    $MN = $DataRow['mobd_name'];
        $Pr = $DataRow['mobd_price'];
        
        }
        $total = $quantity * $Pr;
        //echo $total;
        $Order = "SELECT customer_order.order_id
        FROM customer_order  where customer_order.customer_id = '$customer_id'";
          $Execute = mysqli_query($connection,$Order);
          if (!$Execute) {
          printf("Error: %s\n", mysqli_error($connection));
          exit();
          }
       
          while($DataRow1 = mysqli_fetch_array($Execute)){
   
           $order = $DataRow1['order_id'];
            
        
        }
           $InsertQuery = "INSERT into order_product(order_id,product_id, 
           product_price, quantity, PUR_DATE, Total)values('$order','$ID','$Pr','$quantity',
           '$today','$total')";
           $Execute = mysqli_query($connection,$InsertQuery);
           if (!$Execute) {
           printf("Error: %s\n", mysqli_error($connection));
           exit();
           }

           $check_stock = $stock - $quantity;
           $UpdateQuery = "UPDATE product SET 
              stock_quantity = '$check_stock'
              WHERE mobo_id = '$id'";
              $Execute = mysqli_query($connection,$UpdateQuery);
              if ( $Execute === FALSE ) {
                 printf("error: %s\n", mysqli_error($connection));
              }
              
    }
    if($id>=701 && $id<801)
    {
      $quantity = $_SESSION['cart'][$index]['quantity'];
      $stock = $_SESSION['cart'][$index]['stock'];
        $ViewQuery = "SELECT psu_id,psu_name,psu_price
        FROM psu  where psu_id = '$id'";
        $Execute = mysqli_query($connection,$ViewQuery);
        if (!$Execute) {
        printf("Error: %s\n", mysqli_error($connection));
        exit();
        }
        while($DataRow = mysqli_fetch_array($Execute)){
	
	    $ID = $DataRow['psu_id'];
	    $MN = $DataRow['psu_name'];
        $Pr = $DataRow['psu_price'];
        
        }
        $total = $quantity * $Pr;
        //echo $total;
        $Order = "SELECT customer_order.order_id
         FROM customer_order  where customer_order.customer_id = '$customer_id'";
           $Execute = mysqli_query($connection,$Order);
           if (!$Execute) {
           printf("Error: %s\n", mysqli_error($connection));
           exit();
           }
        
           while($DataRow1 = mysqli_fetch_array($Execute)){
	
            $order = $DataRow1['order_id'];
             
         
         }
           $InsertQuery = "INSERT into order_product(order_id,product_id, 
           product_price, quantity, PUR_DATE, Total)values('$order','$ID','$Pr','$quantity',
           '$today','$total')";
           $Execute = mysqli_query($connection,$InsertQuery);
           if (!$Execute) {
           printf("Error: %s\n", mysqli_error($connection));
           exit();
           }

           $check_stock = $stock - $quantity;
           $UpdateQuery = "UPDATE product SET 
              stock_quantity = '$check_stock'
              WHERE psu_id = '$id'";
              $Execute = mysqli_query($connection,$UpdateQuery);
              if ( $Execute === FALSE ) {
                 printf("error: %s\n", mysqli_error($connection));
              }
              
    }
  }
    
    
}
unset($_SESSION['cart']);
}
else
{ 
  echo " <script type='text/javascript'>
        window.location.href = 'login.php';
                </script>" ;

}




?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel = "stylesheet" href = "styles.css">
	<!--<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">-->
	
	<title>View Gpu</title>

</head>


<body>
<h1>thankyou for shoppng</h1>
</body>
</html>