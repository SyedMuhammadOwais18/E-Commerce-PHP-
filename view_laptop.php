<?php

session_start();
//  session_unset();
//  session_destroy();


if(isset($_SESSION['admin_username']) && isset($_SESSION['admin_password'])){
  
  if($_SESSION['admin_username']=='owais'&&$_SESSION['admin_password']=='owais')
  {
        
  }
  else
  {
    ?>

    <script type="text/javascript">
    window.location.href = 'login.php';
    </script>
    
    <?php
  }
  
  
  
}
else
{
  ?>

				<script type="text/javascript">
				window.location.href = 'login.php';
				</script>
				
				<?php
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
    <link rel = "stylesheet" href = "header.css">
    <link rel = "stylesheet" href = "styles.css">
    <link rel="stylesheet" href="sidenav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="checkError.js"></script>
    <title>VIEW LAPTOPS</title>
    <style>
      .mains {
     margin-left: 160px; /*Same as the width of the sidenav */
    font-size: 15px;/* Increased text to enable scrolling */
    padding: 25px 10px;
  }
  .req{
      color: red;
  }
  .heading{
        background-color: #052490;
        color: white;
    }
    .data-row{
        background-color: #f5f5f5;
        color: black;
    }
    </style>
    <script src="checkError.js"></script>
</head>
<body onload="checkError()">
<nav class="navbar sticky-top navbar-expand-sm navbar-light bg-light">
  <a class="navbar-brand" href="#"><img width="150" src="logo big col.png" /><span style="color:#052490; font-weight: bold;">ELECTROMATE</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item" >
        <a class="nav-link "href="home.php">Home </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="laptop_cat.php">Laptops</a>
          <a class="dropdown-item" href="mobile_cat.php">Mobile</a>
          <a class="dropdown-item" href="gpu_cat.php">GPU</a>
          <a class="dropdown-item" href="ram_cat.php">RAM</a>
          <a class="dropdown-item" href="psu_cat.php">Power Supply</a>
          <a class="dropdown-item" href="processor_cat.php">Processor</a>
          <a class="dropdown-item" href="mobo_cat.php">Motherboard</a>
          <a class="dropdown-item" href="storagedevice_cat.php">Storage Device</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="logout.php">logout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="signup.php">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" style="color: #052490; font-weight:bold"  href="#">Admin</a>
      </li>    
    </ul>
    </div>
</nav>
<div class="sidenav" >
  <h2>Products</h2>
  <a href="view_mobile.php">Mobiles</a>
  <a class="active" href="view_laptop.php">Laptops</a>
  <a href="view_ram.php">RAM</a>
  <a href="view_gpu.php">GPU</a>
  <a href="view_storagedevice.php">Storage Device</a>
  <a href="view_processor.php">Processor</a>
  <a href="view_motherboard.php">Motherboard</a>
  <a href="view_psu.php">PSU</a>
  <a href="showing_order.php">View order</a>
</div>
<div class="mains">
<h1>Laptop Products</h1>
<button class="btn btn-primary" type="button" >
        <a href = 'addlaptop.php' style  = 'color : white; '>Add Laptop</a>
      </button>
<div>
<br>
<br>
<form action = 'view_laptop.php' , method = 'GET'>
<div class="input-group">
    <input type="text" class="form-control" name = 'search' value ='' placeholder = 'Search by id'>
    <div class="input-group-append">
      <button class="btn btn-primary" type="submit" name = 'SearchButton' value = 'search'>
        <i class="fa fa-search"></i>
      </button>
    </div>
  </div>
</form>
</div>
<?php
$connection = mysqli_connect('localhost','root','','ecommapp');
if(isset($_GET['SearchButton'])){
$Search = $_GET['search'];
$Searchquery = "SELECT * FROM laptop where laptop_id = '$Search'";
$Execute = mysqli_query($connection , $Searchquery);
if (!$Execute) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
}
while($DataRow = mysqli_fetch_array($Execute)){

    $ID = $DataRow['laptop_id'];
	$LN = $DataRow['laptop_name'];
	$LBN = $DataRow['brand_name'];
	$LMN = $DataRow['model_number'];
    $LPRO = $DataRow['processor'];
    $LRAM = $DataRow['ram'];
    $LSSD = $DataRow['sdd'];
    $LHDD = $DataRow['hdd'];
    $LGPU = $DataRow['gpu'];
    $LBB = $DataRow['battery_backup'];
    $LSS = $DataRow['screen_size'];
    $LP = $DataRow['laptop_price'];

?>

<table width = "1000"  align = "center">
		<caption>Search</caption>
		<tr class="heading">
			
			<th>Laptop_Id</th>
			<th>Name</th>
			<th>Brand Name</th>
			<th>Model Number</th>
			<th>Processor</th>
            <th>RAM</th>
            <th>SSD</th>
            <th>HDD</th>
            <th>GPU</th>
            <th>Battery Backup</th>
            <th>Screen Size</th>
            <th>Price</th>
            
		
		</tr>
        <tr class="data-row">
<td><?php echo $ID;  ?> </td>
<td><?php echo $LN; ?> </td>
<td><?php echo $LBN;  ?> </td>
<td><?php echo $LMN;  ?> </td>
<td><?php echo $LPRO;  ?> </td>
<td><?php echo $LRAM;  ?> </td>
<td><?php echo $LSSD;  ?> </td>
<td><?php echo $LHDD;  ?> </td>
<td><?php echo $LGPU;  ?> </td>
<td><?php echo $LBB;  ?> </td>
<td><?php echo $LSS;  ?> </td>
<td><?php echo $LP;  ?> </td>
<td><a href = 'view_laptop.php'>Search Again</td>
</tr>
<?php
}
}
?>

<table width = "1000" align = "center">
		<caption>View</caption>
		<tr class="heading">
			
			<th>Laptop_Id</th>
			<th>Name</th>
		    <th>Stock</th>
            
		
		</tr>
  

<?php
$connection = mysqli_connect('localhost','root','','ecommapp'); 
$ViewQuery = "SELECT laptop.laptop_id,laptop.laptop_name,product.stock_quantity 
FROM laptop inner join product ON laptop.laptop_id = product.laptop_id";
$Execute = mysqli_query($connection,$ViewQuery);
if (!$Execute) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
}
while($DataRow = mysqli_fetch_array($Execute)){
	
	$ID = $DataRow['laptop_id'];
	$LN = $DataRow['laptop_name'];
	// $LBN = $DataRow['brand_name'];
	// $LMN = $DataRow['model_number'];
    // $LPRO = $DataRow['processor'];
    // $LRAM = $DataRow['ram'];
    // $LSSD = $DataRow['sdd'];
    // $LHDD = $DataRow['hdd'];
    // $LGPU = $DataRow['gpu'];
    // $LBB = $DataRow['battery_backup'];
    // $LSS = $DataRow['screen_size'];
    // $LP = $DataRow['laptop_price'];
    $stock = $DataRow['stock_quantity'];
   
	

	
	
?>
<tr class="data-row">
<td><?php echo $ID;  ?> </td>
<td><?php echo $LN; ?> </td>

<td><?php echo $stock;  ?> </td>

<td><a href= 'view_laptop.php?Delete=<?php echo $ID; ?>'>Delete</a></td>
<td><a href= 'Update_laptop.php?Update=<?php echo $ID; ?>'>Update</a></td>
</tr>
<?php } ?>
	</table>
	<?php

$connection = mysqli_connect('localhost','root','','ecommapp'); 
$Delete_record =  $_GET['Delete1'];
$Delete_Query1 = "DELETE FROM product WHERE laptop_id = '$Delete_record'";
$Execute = mysqli_query($connection,$Delete_Query1);
if (!$Execute) {
  printf("Error: %s\n", mysqli_error($connection));
  exit();
}
$Delete_Query = "DELETE FROM laptop WHERE laptop_id = '$Delete_record'";
$Execute = mysqli_query($connection,$Delete_Query);

?>
</div>
</body>