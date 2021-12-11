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
$Error="";
$a = 0;
$k = 0;
$j = 0;
$b = $c = $d = $e = $f = $g = $i = $h = $l = $m = $n = $o =  $q = $r = $s = $t = '';
if(isset($_POST['submit'])){
    if(empty($_POST['PID']))
    {
        $Error = "All Fields are Required";
    }
    else
    {
        $a = $_POST['PID'];
    }
    if(empty($_POST['Name']))
    {
        $Error = "All Fields are Required";
    }
    else
    {
        $b = $_POST['Name'];
    }
    if(empty($_POST['Brand']))
    {
        $Error = "All Fields are Required";
    }
    else
    {
        $c = $_POST['Brand'];
    }
    if(empty($_POST['ModelNo']))
    {
        $Error = "All Fields are Required";
    }
    else
    {
        $d = $_POST['ModelNo'];
    }
    if(empty($_POST['Technology']))
    {
        $Error = "All Fields are Required";
    }
    else
    {
        $e = $_POST['Technology'];
    }
    if(empty($_POST['N_o_t']))
    {
        $Error = "All Fields are Required";
    }
    else
    {
        $f = $_POST['N_o_t'];
    }
    if(empty($_POST['N_o_c']))
    {
        $Error = "All Fields are Required";
    }
    else
    {
        $g = $_POST['N_o_c'];
    }
    if(empty($_POST['BaseF']))
    {
        $Error = "All Fields are Required";
    }
    else
    {
        $h = $_POST['BaseF'];
    }
    if(empty($_POST['TurboF']))
    {
        $Error = "All Fields are Required";
    }
    else
    {
        $i = $_POST['TurboF'];
    }
    if(empty($_POST['CacheS']))
    {
        $Error = "All Fields are Required";
    }
    else
    {
        $j = $_POST['CacheS'];
    }
    if(empty($_POST['PreP']))
    {
        $Error = "All Fields are Required";
    }
    else
    {
        $k = $_POST['PreP'];
    }

    if(empty($_POST['stock']))
    {
        $Error = " All Fields are Required";
    }
    else
    {
        $l = $_POST['stock'];
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
    $Query = "INSERT INTO processor(pre_id, pre_name, pre_brand, pre_model_number, pre_technology,
     pre_n_o_t, pre_n_o_c, pre_b_freq, pre_turbo_freq, pre_cache_size, 
    pre_price, img1, img2, img3)
    VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$target_path1','$target_path2','$target_path3')";
    $Execute = mysqli_query($connection,$Query);
	if ( $Execute === FALSE ) {
		printf("error: %s\n", mysqli_error($connection));
	  }
	  else {
		echo 'done.';
      }
      
      $Query1 = "INSERT INTO product(pre_id,stock_quantity,name,Price)
        VALUES('$a','$l','$b','$k')";
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
    <title>ADD PROCESSOR</title>
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
<h1>Add Processor</h1>
<div class="centre">
    <form action = '#' method ='post' enctype = 'multipart/form-data'>
    <div class="noerror"><span class = 'Error'><b><?php  echo $Error;?></b></span></div>
		<fieldset>    
		<div class="form-group"><label>ID: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'PID' value = '' placeholder="Between 501-600"></input><br></div>
		<div class="form-group"><label>Name:  <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'Name' value = '' placeholder=" Enter Processor Name(e.g:Intel CORE I7 10-000K)"></input><br></div>
		<div class="form-group"><label>Brand:  <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'Brand' value = '' placeholder="Enter Brand Name(e.g:Intel)"></input><span class = 'Error'><?php echo $Error;?></span><br></div>
		<div class="form-group"><label>Model No: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'ModelNo' value = ''  placeholder="Enter Model No(e.g:10-000k)"></input><br></div>
		<div class="form-group"><label>Processor Technology: <span class="req"><b>*</b></label><br><input class="form-control" type = 'Text' name = 'Technology' value = ''  placeholder="Enter Technology(e.g:10th GEN )"></input><br></div>
        <div class="form-group"><label>Number of threads: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'N_o_t' value = ''  placeholder="Enter Threads(e.g: 4 )"></input><br></div>
        <div class="form-group"><label>Number of Cores: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'N_o_c' value = ''  placeholder="Enter Cores(e.g:8 )"></input><br></div>
	    <div class="form-group"><label>Base Frequency: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'BaseF' value = ''  placeholder="Enter Base Frequency(e.g:3.5)"></input><br></div>
        <div class="form-group"><label>Turbo Frequency: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'TurboF' value = ''  placeholder="Enter Turbo Frequency(e.g:4 )"></input><br></div>
        <div class="form-group"><label>Cache Size: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'CacheS' value = ''  placeholder="Enter Cache Size(e.g: 10)"></input><br></div>
        <div class="form-group"><label>Price: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'PreP' value = ''placeholder = 'Enter  Price(e.g:40000)' ></input><br></div>
        <div class="form-group"><label>Stock: <span class="req"><b>*</b></label><br><input class="form-control" type = 'text' name = 'stock' value = ''placeholder = '100' ></input><br></div>
        <div class="form-group"><label>Image: <span class="req"><b>*</b></label><br><input class="form-control" type = 'file' name = 'img1' value = '' placeholder = 'www.google.com/image' ></input><br></div>
        <div class="form-group"><label>Image: <span class="req"><b>*</b></label><br><input class="form-control" type = 'file' name = 'img2' value = '' placeholder = 'www.google.com/image' ></input><br></div>
        <div class="form-group"><label>Image: <span class="req"><b>*</b></label><br><input class="form-control" type = 'file' name = 'img3' value = '' placeholder = 'www.google.com/image' ></input><br></div>
        <input class="btn btn-primary mb-2"  type = 'submit' name = 'submit' value = 'ADD RAM'></input><br>
		</fieldset>
    </form>
    </div>
    </div>
    
	<!-- ending of col class -->
<!--</div>-->
	<!-- ending of row class-->
<!--</div>	-->
	<!-- ending of container class-->
</div>
</div>
</body>