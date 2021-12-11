<?php
session_start();
$count =0;
// session_unset();
// session_destroy();
// print_r($_SESSION);

if(!isset($_SESSION['user_username']) && !isset($_SESSION['user_password'])){

  echo " <script type='text/javascript'>
          window.location.href = 'login.php';
                  </script>" ;
  
}
if(isset($_SESSION['cart'])){
$count = count($_SESSION['cart']);
}

?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel = "stylesheet" href = "header.css">
    <link rel = "stylesheet" href = "styles.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="carousel.css">
    <link rel="stylesheet" href="cart.css">
    <script src="checkError.js"></script>
    <title>cart</title>
    <style>
      .mains {
    /* margin-left: 160px; Same as the width of the sidenav */
    font-size: 15px;/* Increased text to enable scrolling */
    padding: 25px 10px;
  }
  .req{
      color: red;
  }
  
    </style>
    <script src="checkError.js"></script>
</head>
<body onload="checkError()">
<nav class="navbar sticky-top navbar-expand-sm navbar-light bg-light">
  <a class="navbar-brand" href="home.php"><img width="150" src="logo big col.png" /><span style="color:#052490; font-weight: bold;">ELECTROMATE</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item" >
        <a class="nav-link "href="home.php">Home </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color: #052490; font-weight:bold"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="laptop_cat.php">Laptops</a>
          <a class="dropdown-item" href="mobile_cat.php">Mobiles</a>
          <a class="dropdown-item active" style="color: #052490; font-weight:bold" href="gpu_cat.php">GPU</a>
          <a class="dropdown-item" href="ram_cat.php">RAM</a>
          <a class="dropdown-item" href="psu_cat.php">Power Supply</a>
          <a class="dropdown-item" href="processor_cat.php">Processor</a>
          <a class="dropdown-item" href="mobo_cat.php">Motherboard</a>
          <a class="dropdown-item" href="storagedevice_cat.php">Storage Device</a>
        </div>
      </li>
  <?php
  
if(isset($_SESSION['user_username']) && isset($_SESSION['user_password'])){
  
    echo '<li class="nav-item">
        <a class="nav-link"  href="logout_user.php">logout</a>
  </li>';
}
else
{
  
    echo'<li class="nav-item">
    <a class="nav-link"  href="login.php">login</a>
  </li>';
}
?>
      <li class="nav-item">
        <a class="nav-link"  href="signup.php">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"   href="view_mobile.php">Admin</a>
      </li>   
      <li class="nav-item">
     
     <a class="nav-link" href="latest_cart.php" class="icon-shopping-cart" style="font-size: 17px">
     <i style="color:black" class="fa fa-shopping-cart"></i>
     <span ID="lblCartCount"><b> <?php echo $count;   ?></b></span>
     </a>
     </li>  
     <li class="nav-item">
       <a class="nav-link active" style="color: #052490; font-weight:bold"   href="latest_search.php"><i class = 'fa fa-search' aria-hidden = "true" >Search</i></a>
     </li>  
    </ul>
    </div>
</nav>
<div class="mains">
<div class='container'>
	<table id='cart1' class='table table-hover table-condensed'>
    				<thead>
						<tr>
							<th style='width:50%'>Product</th>
							<th style='width:10%'>Price</th>
							<th style='width:8%'>Quantity</th>
							<th style='width:22%' class='text-center'>Subtotal</th>
							<th style='width:10%'></th>
						</tr>
					</thead>
					<tbody>




<?php


$total1 = 0;

$connection = mysqli_connect('localhost','root','','ecommapp');
if($connection)
    {
    // echo"connected";
    }    
$index = 0;
//    session_unset();
//    session_destroy();
//function
function cart($id1,$name,$price,$quantity,$total)
{
  
   $GLOBALS['total1'] = $GLOBALS['total1'] + $total;
         
    echo "<form action = 'latest_cart.php' method = 'post'>
    <tr>
    <td data-th='Product'>
        <div class='row'>
            <div class='col-sm-10'>
                <h4 class='nomargin'>{$name}</h4>
            </div>
        </div>
    </td>
    <td data-th='Price'>{$price}</td>
    <td data-th='Quantity'>
        <input maxlength='1' min='1' max='2' type='number' name='qty' class='form-control text-center' value={$quantity}>
    </td>
    <td data-th='Subtotal' class='text-center'>{$total}</td>
    <td class='actions' data-th=''>
    
     <input type = 'hidden' name = 'id' value = '{$id1}'>
        <button class='btn btn-info btn-sm' type = 'submit' name = 'submit1'><i class='fa fa-refresh'></i></button>
    
    
        <button class='btn btn-danger btn-sm'><a style = 'color:white' href = 'delete_product.php?product_id={$id1}'><i class='fa fa-trash-o'></i></a></button>								
    </td>
</tr></form>";

 
if(isset($_POST['submit1']))

{
  $check_stock = $SESSION['stock'] - $POST['qty'];
  if($check_stock<0)
  {
  
      echo "<script>alert('Not enough stock')</script>";
      // echo "<script>windows.location.href = 'mobo_cat.php'</script>";
      return 0;
  }
  else
  {
  //echo $id1;
    //echo "<a href = 'update_quantity.php?product_id=<?php{$id}&quantity={$_POST['qty']}
    echo "<script>window.location='update_quantity.php?product_id={$_POST['id']}&quantity={$_POST['qty']}'</script>";
  }
}

    
            
       
     
}



//end function
if(isset($_SESSION['cart'])){
$cart[] = $_SESSION['cart'];
$count = count($_SESSION['cart']);

//print_r( $cart[0][0]['quantity']);
date_default_timezone_set('UTC');
$today = date("d/m/y");
// echo $today;
for($index = 0 ; $index < $count ; $index++)
{
    $id = $cart[0][$index]['id'];
    
    // $id = $cart[0][$index]['id'];
    // $id = $cart[0][$index]['id'];
    
    if($id>=1 && $id<101)
    {
        //echo $id;
        $quantity = $cart[0][$index]['quantity'];
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
       // $total1 = $total1+$total;
        cart($ID,$MN,$Pr,$quantity,$total);
        //echo $total;
        ?>
        <!-- <p>ID : <?php echo $ID; ?></p>
        <p>Product Name : <?php echo $MN; ?></p>
        <p>Price : <?php echo $Pr; ?></p>
        <p>Quantity : <?php echo $quantity; ?></p>
        <p>Total : <?php echo $total; ?></p>
        <button class = 'btn btn-danger flex-fill' ><a href = 'delete_product.php?product_id=<?php echo $ID; ?>' 
        style = 'color:white'>Remove</a></button> -->
   <?php  
      // echo "<p $Pr ></p>";
      
    }


    if($id>=101 && $id<201)
    {
        $quantity = $cart[0][$index]['quantity'];
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
       // $total1 = $total1+$total;
        cart($ID,$MN,$Pr,$quantity,$total);
        //echo $total;
        
        ?>
        
        <!-- <p>ID : <?php echo $ID; ?></p>
        <p>Product Name : <?php echo $MN; ?></p>
        <p>Product Price : <?php echo $Pr; ?></p>
        <p>Quantity : <?php echo $quantity; ?></p>
        <p>Total : <?php echo $total; ?></p>
        <button class = 'btn btn-danger flex-fill' ><a href = 'delete_product.php?product_id=<?php echo $ID; ?>' 
        style = 'color:white'>Remove</a></button> -->
        
        <?php 
       
    }
    if($id>=201 && $id<301)
    {
        $quantity = $cart[0][$index]['quantity'];
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
       // $total1 = $total1+$total;
        cart($ID,$MN,$Pr,$quantity,$total);
        //echo $total;
        ?>
        <!-- <p>ID : <?php echo $ID; ?></p>
        <p>Product Name : <?php echo $MN; ?></p>
        <p>Price : <?php echo $Pr; ?></p>
        <p>Quantity : <?php echo $quantity; ?></p>
        <p>Total : <?php echo $total; ?></p>
        <button class = 'btn btn-danger flex-fill' ><a href = 'delete_product.php?product_id=<?php echo $ID; ?>' 
        style = 'color:white'>Remove</a></button> -->
        <?php 
    }
    if($id>=301 && $id<401)
    {
        $quantity = $cart[0][$index]['quantity'];
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
        //$total1 = $total1+$total;
        cart($ID,$MN,$Pr,$quantity,$total);

        //echo $total;
        
        ?>

        <!-- <p>ID : <?php echo $ID; ?></p>
        <p>Product Name : <?php echo $MN; ?></p>
        <p>Price : <?php echo $Pr; ?></p>
        <p>Quantity : <?php echo $quantity; ?></p>
        <p>Total : <?php echo $total; ?></p>
        <button class = 'btn btn-danger flex-fill' ><a href = 'delete_product.php?product_id=<?php echo $ID; ?>' 
        style = 'color:white'>Remove</a></button> -->
        <?php 
    }
    if($id>=401 && $id<501)
    {
        $quantity = $cart[0][$index]['quantity'];
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
       // $total1 = $total1+$total;
        cart($ID,$MN,$Pr,$quantity,$total);
       // echo $total;
        ?>
        <!-- <p>ID : <?php echo $ID; ?></p>
        <p>Product Name : <?php echo $MN; ?></p>
        <p>Price : <?php echo $Pr; ?></p>
        <p>Quantity : <?php echo $quantity; ?></p>
        <p>Total : <?php echo $total; ?></p>
        <button class = 'btn btn-danger flex-fill' ><a href = 'delete_product.php?product_id=<?php echo $ID; ?>' 
        style = 'color:white'>Remove</a></button> -->
        <?php 
    }
    if($id>=501 && $id<601)
    {
        $quantity = $cart[0][$index]['quantity'];
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
        //$total1 = $total1+$total;
        cart($ID,$MN,$Pr,$quantity,$total);
        
        ?>
       
        <!-- <p>ID : <?php echo $ID; ?></p>
        <p>Product Name : <?php echo $MN; ?></p>
        <p>Price : <?php echo $Pr; ?></p>
        <p>Quantity : <?php echo $quantity; ?></p>
        <p>Total : <?php echo $total; ?></p>
        <button class = 'btn btn-danger flex-fill' ><a href = 'delete_product.php?product_id=<?php echo $ID; ?>' 
        style = 'color:white'>Remove</a></button> -->
        <?php 
    }
    if($id>=601 && $id<701)
     {
        $quantity = $cart[0][$index]['quantity'];
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
       // $total1 = $total1+$total;
        cart($ID,$MN,$Pr,$quantity,$total);
        //echo $total;
        ?>
        <!-- <p>ID :<?php echo $ID; ?></p>
        <p>Product Name :<?php echo $MN; ?></p>
        <p>Price : <?php echo $Pr; ?></p>
        <p>Quantity :  <?php echo $quantity; ?></p>
        <p>Total : <?php echo $total; ?></p>
        <button class = 'btn btn-danger flex-fill' ><a href = 'delete_product.php?product_id=<?php echo $ID; ?>' 
        style = 'color:white'>Remove</a></button> -->
        <?php     
    }
    if($id>=701 && $id<801)
    {
        $quantity = $cart[0][$index]['quantity'];
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
       // $total1 = $total1+$total;
        cart($ID,$MN,$Pr,$quantity,$total);
        //echo $total;
        ?>
        <!-- <p> ID: <?php echo $ID; ?></p>
        <p> Product Name: <?php echo $MN; ?></p>
        <p> Price : <?php echo $Pr; ?></p>
        <p> Quantity : <?php echo $quantity; ?></p>
        <p> Total :<?php echo $total; ?></p>
        <button class = 'btn btn-danger flex-fill' ><a href = 'delete_product.php?product_id=<?php echo $ID; ?>' 
        style = 'color:white'>Remove</a></button> -->
        <?php 
    }
    
    
}
}


?>




</tbody>
					<tfoot>
						<tr>
							<td><a href='home.php' class='btn btn-primary'><i class='fa fa-angle-left'></i> Continue Shopping</a></td>
							<td colspan='2' class="hidden-xs"></td>
							<td class='hidden-xs text-center'><strong>Total <?php echo $GLOBALS['total1']; ?></strong></td>
							<td><a href='End_page.php' class='btn btn-success btn-block'>Checkout <i class='fa fa-angle-right'></i></a></td>
						</tr>
					</tfoot>
				</table>
</div>



</div>
<div>
		<footer class="footer-distributed">
 
		<div class="footer-left">
 
		<h3>Electro<span>Mate</span></h3>
 
		<p class="footer-links">
		<a href="home.php">Home</a>
	·
		<a href="#products">Products</a>
	·
		<a href="login.php">Login</a>
	·
		<a href="signup.php">Signup</a>
	·
		<a href="view_mobile.php">Admin</a>
	·
		</p>
 
		<p class="footer-company-name">electromate &copy; 2020</p>
		</div>
 
		<div class="footer-center">
 
		<div>
		<i class="fa fa-map-marker"></i>
		<p><span>ABC Street </span> Karachi, Pakistan</p>
		</div>
 
		<div>
		<i class="fa fa-phone"></i>
		<p>+92 311 0237524</p>
		</div>
 
		<div>
		<i class="fa fa-envelope"></i>
		<p><a href="mailto:support@company.com">ahsan@electromate.com</a></p>
		</div>
 
		</div>
 
		<div class="footer-right">
 
		<p class="footer-company-about">
		<span>About the company</span>
    ElectroMate is a online platform for buying pc components,laptops &mobile
		</p>
 
		<div class="footer-icons">
 
		<a href="#"><i class="fa fa-facebook"></i></a>
		<a href="#"><i class="fa fa-twitter"></i></a>
		<a href="#"><i class="fa fa-linkedin"></i></a>
		<a href="#"><i class="fa fa-github"></i></a>
 
		</div>
 
		</div>
 
		</footer>
    </div>
</body>