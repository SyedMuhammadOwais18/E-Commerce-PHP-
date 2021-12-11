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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel = "stylesheet" href = "header.css">
    <link rel="stylesheet" href="sidenav.css">
    <link rel="stylesheet" href="styles.css">
    <script src="checkError.js"></script>
    <title>VIEW GPU</title>
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
  <a href="view_laptop.php">Laptops</a>
  <a href="view_ram.php">RAM</a>
  <a class="active" href="view_gpu.php">GPU</a>
  <a href="view_storagedevice.php">Storage Device</a>
  <a href="view_processor.php">Processor</a>
  <a href="view_motherboard.php">Motherboard</a>
  <a href="view_psu.php">PSU</a>
  <a href="showing_order.php">View order</a>
</div>
<div class="mains">
<h1>GPU Products</h1>
<button class="btn btn-primary" type="button" >
        <a href = 'addGpu.php' style  = 'color : white; '>Add Gpu</a>
      </button>
      
      
<div>
<br>
<br>
<!-- <form action = 'view_gpu.php' , method = 'GET'>
	<fieldset>
		<input type = 'text' name = 'search' value ='' placeholder = 'Search by id'></input>
		<input type = 'submit' name = 'SearchButton' value = 'search'></input>
	
	</fieldset> -->
	<!-- <form class="form-inline md-form mr-auto mb-4">
  <input class="form-control mr-sm-2" type="text" name = 'search' value ='' placeholder = 'Search by id'>
  <button class="btn btn-primary btn-sm" type="submit" name = 'SearchButton' value = 'search'>Search</button>
</form>
</form> -->
<form action = 'view_gpu.php' , method = 'GET'>
<div class="input-group">
    <input type="text" class="form-control" name = 'search' value ='' placeholder = 'Search by id'>
    <div class="input-group-append">
    
      <button class="btn btn-primary" type="submit" name = 'SearchButton' value = 'search' >

        <i class="fa fa-search"></i>
      </button>

    </div>
  </div>
</form>
</div>
<br>
<?php

$connection = mysqli_connect('localhost','root','','ecommapp');
if(isset($_GET['SearchButton'])){
	$Search = $_GET['search'];
	$SearchQuery = "SELECT * FROM gpu WHERE gpu_id = '$Search' ";
	$Execute = mysqli_query($connection,$SearchQuery);
while($DataRow = mysqli_fetch_array($Execute)){
	$ID = $DataRow['gpu_id'];
	$GN = $DataRow['gpu_name'];
	$GBN = $DataRow['gpu_brand'];
	$GMN = $DataRow['gpu_model_number'];
	$GT = $DataRow['gpu_type'];
    $GMEM = $DataRow['gpu_memory_size'];
    $GBC= $DataRow['gpu_boost_clock'];
    $GF = $DataRow['gpu_fans'];
    $GPO = $DataRow['gpu_ports'];
    $GPR = $DataRow['gpu_price'];
?>
<table width = "1000" align = "center">
		<caption>Search</caption>
		<tr class="heading">
			
			<th>Gpu_Id</th>
			<th>Name</th>
			<th>Brand Name</th>
			<th>Model Number</th>
			<th>Type</th>
            <th>Memory</th>
            <th>Boost Clock</th>
            <th>Fans</th>
            <th>Ports</th>
            <th>Price</th>
            
		</tr>
		<tr class="data-row">
<td><?php echo $ID;  ?> </td>
<td><?php echo $GN; ?> </td>
<td><?php echo $GBN;  ?> </td>
<td><?php echo $GMN;  ?> </td>
<td><?php echo $GMN;  ?> </td>
<td><?php echo $GT;  ?> </td>
<td><?php echo $GMEM;  ?> </td>
<td><?php echo $GBC;  ?> </td>
<td><?php echo $GF;  ?> </td>
<td><?php echo $GPO;  ?> </td>
<td><?php echo $GPR;  ?> </td>
<td><a href = 'view_gpu.php'>Search Again</td>
</tr>

<?php
}
}

?>
<table width = "1000" align = "center">
		<caption>View</caption>
		<tr class="heading">
			<th>Gpu_Id</th>
			<th>Name</th>
			<th>Stock</th>
			
            
		</tr>

		
<?php
$connection = mysqli_connect('localhost','root','','ecommapp'); 
$ViewQuery = "SELECT gpu.gpu_id,gpu.gpu_name,product.stock_quantity 
FROM gpu inner join product ON gpu.gpu_id = product.gpu_id";
$Execute = mysqli_query($connection,$ViewQuery);
if (!$Execute) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
}
while($DataRow = mysqli_fetch_array($Execute)){
	
	$ID = $DataRow['gpu_id'];
	$GN = $DataRow['gpu_name'];
	// $GBN = $DataRow['gpu_brand'];
	// $GMN = $DataRow['gpu_model_number'];
	// $GT = $DataRow['gpu_type'];
    // $GMEM = $DataRow['gpu_memory_size'];
    // $GBC= $DataRow['gpu_boost_clock'];
    // $GF = $DataRow['gpu_fans'];
    // $GPO = $DataRow['gpu_ports'];
    // $GPR = $DataRow['gpu_price'];
   $stock = $DataRow['stock_quantity'];

	
	
?>
<tr class="data-row">
<td><?php echo $ID;  ?> </td>
<td><?php echo $GN; ?> </td>
<td><?php echo $stock;  ?> </td>


<td><a href= 'view_gpu.php?Delete1=<?php echo $ID; ?>'>Delete</a></td>
<td><a href= 'Update_gpu.php?Update=<?php echo $ID; ?>'>Update</a></td>
</tr>
<?php } ?>
	</table>
	<?php

$connection = mysqli_connect('localhost','root','','ecommapp'); 
$Delete_record =  $_GET['Delete1'];
$Delete_Query1 = "DELETE FROM product WHERE gpu_id = '$Delete_record'";
$Execute = mysqli_query($connection,$Delete_Query1);
if (!$Execute) {
  printf("Error: %s\n", mysqli_error($connection));
  exit();
}
$Delete_Query = "DELETE FROM gpu WHERE gpu_id = '$Delete_record'";
$Execute = mysqli_query($connection,$Delete_Query);
?>
</div>
</body>