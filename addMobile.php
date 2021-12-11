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
$p = 0;
$t = 0;
$b = $c = $d = $e = $f = $g = $h = $i = $j = $k = $l = $m = $n = $o =  $q = $r = $s  = '';

if(isset($_POST['submit'])){
		
		
    #header("location: login.php");
   if(empty($_POST['MOBID']))
    {
        
        
        $Error = " All Fields Are Required";
    }
    else
    {
       $a = $_POST['MOBID'];
    }
	if(empty($_POST['MOBN']))
    {
        
        
        $Error = " All Fields Are Required";
    }
    else
    {
       $b = $_POST['MOBN'];
    }
   
    if(empty($_POST['MOBBN']))
    {
        $Error = " All Fields Are Required";
    }
    else
    {
        $c = $_POST['MOBBN'];
    }
	if(empty($_POST['MOBMN']))
    {
        $Error = " All Fields Are Required";
    }
    else
    {
        $d = $_POST['MOBMN'];
    }
   
    if(empty($_POST['MOBOS']))
    {
        $Error = " All Fields Are Required";
    }
    else
    {
        $e = $_POST['MOBOS'];
    }
    if(empty($_POST['MOBP']))
    {
        $Error = " All Fields Are Required";
    }
    else
    {
        $f = $_POST['MOBP'];
    }
    if(empty($_POST['MOBCORE']))
    {
        $Error = " All Fields Are Required";
    }
    else
    {
        $g = $_POST['MOBCORE'];
    }
    if(empty($_POST['MOBSPEED']))
    {
        $Error = " All Fields Are Required";
    }
    else
    {
        $h = $_POST['MOBSPEED'];
    }
    if(empty($_POST['MOBGPU']))
    {
        $Error = " All Fields Are Required";
    }
    else
    {
        $i = $_POST['MOBGPU'];
    }
    if(empty($_POST['MOBDT']))
    {
        $Error = " All Fields Are Required";
    }
    else
    {
        $j = $_POST['MOBDT'];
    }
    if(empty($_POST['MOBDS']))
    {
        $Error = " All Fields Are Required";
    }
    else
    {
        $k = $_POST['MOBDS'];
    }
    if(empty($_POST['MOBRES']))
    {
        $Error = " All Fields Are Required";
    }
    else
    {
        $l = $_POST['MOBRES'];
    }
    if(empty($_POST['MOBM']))
    {
        $Error = " All Fields Are Required";
    }
    else
    {
        $m = $_POST['MOBM'];
    }
    if(empty($_POST['MOBRAM']))
    {
        $Error = " All Fields Are Required";
    }
    else
    {
        $n = $_POST['MOBRAM'];
    }
    if(empty($_POST['MOBFCAM']))
    {
        $Error = " All Fields Are Required";
    }
    else
    {
        $o = $_POST['MOBFCAM'];
    }
    if(empty($_POST['MOBBCAM']))
    {
        $Error = " All Fields Are Required";
    }
    else
    {
        $p = $_POST['MOBBCAM'];
    }
    if(empty($_POST['MOBBCAMFEA']))
    {
        $Error = " All Fields Are Required";
    }
    else
    {
        $q = $_POST['MOBBCAMFEA'];
    }
    if(empty($_POST['MOBBT']))
    {
        $Error = " All Fields Are Required";
    }
    else
    {
        $r = $_POST['MOBBT'];
    }
    if(empty($_POST['MOBCOLOR']))
    {
        $Error = " All Fields Are Required";
    }
    else
    {
        $s = $_POST['MOBCOLOR'];
    }
    if(empty($_POST['MOBPRICE']))
    {
        $Error = " All Fields Are Required";
    }
    else
    {
        $t = $_POST['MOBPRICE'] ;
    }
    if(empty($_POST['stock']))
    {
        $Error = " All Fields are Required";
    }
    else
    {
        $u = $_POST['stock'];
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
    
    print_r($_FILES);
    
    
    $connection = mysqli_connect('localhost','root','','ecommapp');
    if($connection)
    {
        echo "connected";
    }
	$Query = "INSERT INTO mobile(mobie_id,mobile_name,brand_name,model_number,OS,processor,cpu_core,cpu_speed,gpu,display_type,
    display_size,resolution,memory,ram,front_camera,back_camera,
    back_camera_feature,battery_type,colors,price,img1,img2,img3)
        VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o',
        '$p','$q','$r','$s','$t','$target_path1','$target_path2','$target_path3')";
    $Execute = mysqli_query($connection,$Query);
	if ( $Execute === FALSE ) {
		printf("error: %s\n", mysqli_error($connection));
	  }
	  else {
		echo 'done.';
	  }
      $Query1 = "INSERT INTO product(mobile_id,stock_quantity,name,Price)
      VALUES('$a','$u','$b','$t')";
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
    <title>ADD MOBILE</title>
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
<div class="container">
<h1>Add Mobile</h1>
    <div class="centre">
	<form action = '#' method = 'post' enctype = 'multipart/form-data'>
		<fieldset>
        <div class="noerror"><span class = 'Error'><b><?php  echo $Error;?></b></span></div>
		<div class="form-group"><label>Mobile_Id: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'MOBID' value = '' placeholder = "Between 1 to 100"></input><br></div>
		<div class="form-group"><label>Name: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'MOBN' value = ''placeholder = "Enter Name(e.g:Samsung S7)"></input><br></div>
		<div class="form-group"><label>Brand Name: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'MOBBN' value = '' placeholder = "Enter Brand Name (e.g:Samsung)"></input><br></div>
		<div class="form-group"><label>Model Number: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'MOBMN' value = '' placeholder = "Enter Brand Name (e.g:CPH-999)"></input><br></div>
		<div class="form-group"><label>Operating System: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'MOBOS' value = ''  placeholder = "Enter OS (e.g:Android 11)"></input><br></div>
		<div class="form-group"><label>Processor: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'MOBP' value = ''  placeholder = "Enter Brand Name (e.g:CPH-999)"></input><br></div>
		<div class="form-group"><label>CPU Core: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'MOBCORE' value = ''placeholder = 'Enter CPU Core (e.g:Quad Core)' ></input><br></div>
        <div class="form-group"><label>CPU Speed: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'MOBSPEED' value = ''placeholder = 'Enter CPU Speed (e.g:3.5Ghz)'></input><br></div>
        <div class="form-group"><label>GPU: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'MOBGPU' value = ''placeholder = 'Enter GPU (e.g:Adrino,mali)'></input><br></div>
        <div class="form-group"><label>Display Type: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'MOBDT' value = ''placeholder = 'Enter Display Type (e.g:IPS-LCD)'></input><br></div>
        <div class="form-group"><label>Display Size: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'MOBDS' value = ''placeholder = 'Enter Display Size (e.g:4.7-inch)'></input><br></div>
        <div class="form-group"><label>Resolution: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'MOBRES' value = ''placeholder = 'Enter Resolution (e.g:1080 x 1920)'></input><br></div>
        <div class="form-group"><label>Memory: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'MOBM' value = ''placeholder = 'Enter Memory Size (e.g:32GB)'></input><br></div>
        <div class="form-group"><label>RAM: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'MOBRAM' value = ''placeholder = 'Enter RAM (e.g:4GB)'></input><br></div>
        <div class="form-group"><label>Front Camera: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'MOBFCAM' value = ''placeholder = 'Enter Front Camera (e.g:8MP)'></input><br></div>
        <div class="form-group"><label>Back Camera: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'MOBBCAM' value = ''placeholder = 'Enter Number of Back Camera a Mobile have (e.g:2,3...)'></input><br></div>
        <div class="form-group"><label>Back Camera Feature: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'MOBBCAMFEA' value = ''placeholder = 'Enter Back Camera Feature (e.g:12MP,8MP)'></input><br></div>
        <div class="form-group"><label>Battery Type: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'MOBBT' value = ''placeholder = 'Enter Battery Type (e.g:500MH)'></input><br></div>
        <div class="form-group"><label>Colors: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'MOBCOLOR' value = ''placeholder = 'Enter Mobile Color (e.g:black,blue,...etc)'></input><br></div>
        <div class="form-group"><label>Price: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'MOBPRICE' value = ''placeholder = 'Enter Mobile price (e.g:35000)'></input><br></div>
        <div class="form-group"><label>Stock: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'stock' value = ''placeholder = '100' ></input><br></div>
        <div class="form-group"><label>Image: <span class="req"><b>*</b></label><br><input class="form-control" type = 'file' name = 'img1' value = '' placeholder = 'www.google.com/image' ></input><br></div>
        <div class="form-group"><label>Image: <span class="req"><b>*</b></label><br><input class="form-control" type = 'file' name = 'img2' value = '' placeholder = 'www.google.com/image' ></input><br></div>
        <div class="form-group"><label>Image: <span class="req"><b>*</b></label><br><input class="form-control" type = 'file' name = 'img3' value = '' placeholder = 'www.google.com/image' ></input><br></div>
		<!--Image:<br><input type = 'file' name = 'product_img'/><br>-->
		<input class="btn btn-primary mb-2"  type = 'submit' name = 'submit' value = 'ADD RAM'></input><br>
		</fieldset>	
	</form>

</div>
</div>
</div>
</body>