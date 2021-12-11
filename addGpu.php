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





<?php








$Error = "";

$a = 0;
$h = 0;
$j = 0;
$b = $c = $d = $e = $f = $g = $i  = $k = $l = $m = $n = $o =  $q = $r = $s = $t = '';

if(isset($_POST['submit'])){
		
		
    
    if(empty($_POST['GPUID']))
    {
        
        $Error = " All Fields are Required";
    }
    else
    {
        $a = $_POST['GPUID'];
    }
   
    if(empty($_POST['GPUN']))
    {
        $Error = " All Fields are Required";
    }
    else
    {
        $b = $_POST['GPUN'];
    }
   
    if(empty($_POST['GPUB']))
    {
        $Error = " All Fields are Required";
    }
    else
    {
        $c= $_POST['GPUB'];
    }
    
    if(empty($_POST['GPUMN']))
    {
        $Error = " All Fields are Required";
    }
    else
    {
        $d = $_POST['GPUMN'];
    }
    
    if(empty($_POST['GPUT']))
    {
        $Error = " All Fields are Required";
    }
    else
    {
        $e = $_POST['GPUT'];
    }
    
    if(empty($_POST['GPUM']))
    {
        $Error = " All Fields are Required";
    }
    else
    {
        $f = $_POST['GPUM'];
    }
   
    if(empty($_POST['GPUBC']))
    {
        $Error = " All Fields are Required";
    }
    else
    {
        $g = $_POST['GPUBC'];
    }
   
    if(empty($_POST['GPUF']))
    {
        $Error = " All Fields are Required";
    }
    else
    {
        $h = $_POST['GPUF'];
    }
    
    if(empty($_POST['GPUPO']))
    {
        $Error = " All Fields are Required";
    }
    else
    {
        $i = $_POST['GPUPO'];
    }
    
    if(empty($_POST['GPUPR']))
    {
        $Error = " All Fields are Required";
    }
    else
    {
        $j = $_POST['GPUPR'];
    }

    if(empty($_POST['stock']))
    {
        $Error = " All Fields are Required";
    }
    else
    {
        $k = $_POST['stock'];
    }
    if(isset($_FILES['img1'])){
        $tar_dir = "img/";
	    $tar_file = basename($_FILES['img1']['name']);
	    $file_type = strtolower(pathinfo($tar_file,PATHINFO_EXTENSION));
	    $target_path1 = $tar_dir . uniqid($prefix ="img_") . "." . $file_type;
	    if(!move_uploaded_file($_FILES['img1']['tmp_name'],$target_path1))
	    {
		$target_path1 = "";
		
	    }

    }
    if(isset($_FILES['img2'])){
        $tar_dir = "img/";
	    $tar_file = basename($_FILES['img2']['name']);
	    $file_type = strtolower(pathinfo($tar_file,PATHINFO_EXTENSION));
	    $target_path2 = $tar_dir . uniqid($prefix ="img_") . "." . $file_type;
	    if(!move_uploaded_file($_FILES['img2']['tmp_name'],$target_path2))
	    {
		    $target_path2 = "";
		
	    }
    }
    if(isset($_FILES['img3'])){
        $tar_dir = "img/";
	    $tar_file = basename($_FILES['img3']['name']);
	    $file_type = strtolower(pathinfo($tar_file,PATHINFO_EXTENSION));
	    $target_path3 = $tar_dir . uniqid($prefix ="img_") . "." . $file_type;
	    if(!move_uploaded_file($_FILES['img3']['tmp_name'],$target_path3))
	    {
		    $target_path3 = "";
		
	    }
    }
    $connection = mysqli_connect('localhost','root','','ecommapp');
    if($connection)
    {
        echo "connected";
    }
	$Query = "INSERT INTO gpu(gpu_id,gpu_name,gpu_brand,gpu_model_number,gpu_type,gpu_memory_size,
    gpu_boost_clock, gpu_fans,gpu_ports,gpu_price,img1,img2,img3)
        VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$target_path1','$target_path2','$target_path3')";
    $Execute = mysqli_query($connection,$Query);
	if ( $Execute === FALSE ) {
		printf("error: %s\n", mysqli_error($connection));
	  }
	  else {
		echo 'done.';
      }
      
      $Query1 = "INSERT INTO product(gpu_id,stock_quantity,name,Price)
        VALUES('$a','$k','$b','$j')";
        $Execute = mysqli_query($connection,$Query1);
    
    
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
    <script src="checkError.js"></script>
    <title>ADD PSU</title>
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
        <a class="nav-link active" style="color: #052490; font-weight:bold"  href="view_mobile.php">Admin</a>
      </li>    
    </ul>
    </div>
</nav>
<div class="mains">
<div>
    <div class="container">
        <h1>Add GPU</h1>
        <div class="centre">
	    <form action = '#' method ='post' enctype = 'multipart/form-data'>
		<fieldset>
		<div class="noerror"><span class = 'Error'><b><?php  echo $Error;?></b></span></div>
		<div class="form-group"><label>GPU Id: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'GPUID' value = ''placeholder = 'Enter GPU Id (e.g:Between 201 and 300)'></input><br></div>
		<div class="form-group"><label>GPU Name: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'GPUN' value = ''placeholder = 'Enter GPU Name (e.g:NVIDIA GeFORCE GTX 980 Ti)'></input><br></div>
		<div class="form-group"><label>GPU Brand: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'GPUB' value = ''placeholder = 'Enter GPU Brand (e.g:AMD,Intel)'></input><br></div>
		<div class="form-group"><label>GPU Model Number: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'GPUMN' value = ''placeholder = 'Enter GPU Model Number (e.g:R9 200)'></input><br></div>
		<div class="form-group"><label>GPU Type: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'GPUT' value = ''placeholder = 'Enter GPU Type (e.g:GDDR5)' ></input><br></div>
		<div class="form-group"><label>GPU Memory: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'GPUM' value = ''placeholder = 'Enter GPU Memory (e.g:4GB)' ></input><br></div>
		<div class="form-group"><label>GPU Boost Clock: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'GPUBC' value = ''placeholder = 'Enter GPU Boost Clock (e.g: 1.73 GHZ)' ></input><br></div>
        <div class="form-group"><label>GPU Fans: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'GPUF' value = '' placeholder = 'Enter GPU Fans (e.g: 1,2,3)' ></input><br></div>
        <div class="form-group"><label>GPU Ports: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'GPUPO' value = '' placeholder = 'Enter GPU Ports (e.g: DisplayPort x3 (v1.4a)/ HDMI 2.1 x 1)' ></input><br></div>
        <div class="form-group"><label>GPU Price: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'GPUPR' value = '' placeholder = 'Enter GPU Price (e.g: 10000)' ></input><br></div>
        <div class="form-group"><label>Stock: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'stock' value = ''placeholder = '100' ></input><br></div>
        <div class="form-group"><label>Image: <span class="req"><b>*</b></label><br><input class="form-control" type = 'file' name = 'img1' value = '' placeholder = 'www.google.com/image' ></input><br></div>
        <div class="form-group"><label>Image: <span class="req"><b>*</b></label><br><input class="form-control" type = 'file' name = 'img2' value = '' placeholder = 'www.google.com/image' ></input><br></div>
        <div class="form-group"><label>Image: <span class="req"><b>*</b></label><br><input class="form-control" type = 'file' name = 'img3' value = '' placeholder = 'www.google.com/image' ></input><br></div>
        <!--Image:<br><input type = 'file' name = 'product_img'/><br>-->
		<input class="btn btn-primary mb-2"  type = 'submit' name = 'submit' value = 'Add GPU'></input><br>
		</fieldset>
    </form>
    </div>
    </div>

</div>

</div>
</body>