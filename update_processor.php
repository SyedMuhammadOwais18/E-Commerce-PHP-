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
$connection = mysqli_connect('localhost','root','','ecommapp'); 
$update_record =  $_GET['Update'];
$ViewQuery = "SELECT * FROM processor WHERE pre_id = '$update_record'";
$Execute = mysqli_query($connection,$ViewQuery);
while($DataRow = mysqli_fetch_array($Execute)){
	
	$Update_Id = $DataRow['pre_id'];
	$MN = $DataRow['pre_name'];
	$MBN = $DataRow['pre_brand'];
	$MMN = $DataRow['pre_model_number'];
	$MOS = $DataRow['pre_technology'];
    $MPRO = $DataRow['pre_n_o_t'];
    $MCORE= $DataRow['pre_n_o_c'];
    $MSPEED = $DataRow['pre_b_freq'];
    $MGPU = $DataRow['pre_turbo_freq'];
    $MTYPE = $DataRow['pre_cache_size'];
    $MSIZE = $DataRow['pre_price'];
    
	

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
<div class="container">
<h1>Update Processor</h1>
<div class="centre">
	<form action = 'update_processor.php?Update=<?php echo $Update_Id; ?>' method ='post' enctype = 'multipart/form-data'>
		<fieldset>
		<div class="form-group"><label>Name:</label><br><input class="form-control" type = 'text' name = 'Name' value = '<?php echo $MN; ?>' ></input><br></div>
		<div class="form-group"><label>Brand:</label><br><input class="form-control" type = 'text' name = 'Brand' value = '<?php echo $MBN; ?>' ></input><br></div>
		<div class="form-group"><label>Model No:</label><br><input class="form-control" type = 'text' name = 'Model No' value = '<?php echo $MMN; ?>'  ></input><br></div>
		<div class="form-group"><label>Technology:</label><br><input class="form-control" type = 'Text' name = 'Technology' value = '<?php echo $MOS; ?>' ></input><br></div>
        <div class="form-group"><label>Number of threads:</label><br><input class="form-control" type = 'text' name = 'N_o_t' value = '<?php echo $MPRO; ?>'  ></input><br></div>
        <div class="form-group"><label>Number of Cores:</label><br><input class="form-control" type = 'text' name = 'N_o_c' value = '<?php echo $MCORE; ?>'  ></input><br></div>
	    <div class="form-group"><label>Base Frequency:</label><br><input class="form-control" type = 'text' name = 'BaseF' value = '<?php echo $MSPEED; ?>'  ></input><br></div>
        <div class="form-group"><label>Turbo Frequency:</label><br><input class="form-control" type = 'text' name = 'TurboF' value = '<?php echo $MGPU; ?>' ></input><br></div>
        <div class="form-group"><label>Cache Size:</label><br><input class="form-control" type = 'text' name = 'CacheS' value = '<?php echo $MTYPE; ?>'  ></input><br></div>
        <div class="form-group"><label>Price:</label><br><input class="form-control" type = 'text' name = 'PreP' value = '<?php echo $MSIZE; ?>' ></input><br></div>
        <!--:<br><input type = 'file' name = 'product_img'/><br>-->
        <input class="btn btn-primary mb-2"  type = 'submit' name = 'submit' value = 'Update'></input><br>
        </fieldset>
    </form>
    </div>
    </div>
</div>
</body>

<?php
$Error="";
$a = 0;
$k = 0;
$j = 0;
$b = $c = $d = $e = $f = $g = $i = $h = $l = $m = $n = $o =  $q = $r = $s = $t = '';
if(isset($_POST['submit'])){
    
        
  
        $b = $_POST['Name'];
   
        $c = $_POST['Brand'];
   
        $d = $_POST['Model No'];
   
        $e = $_POST['Technology'];
   
        $f = $_POST['N_o_t'];
   
        $g = $_POST['N_o_c'];
   
        $h = $_POST['BaseF'];
    
        $i = $_POST['TurboF'];
   
        $j = $_POST['CacheS'];
    
        $k = $_POST['PreP'];
    
    $connection = mysqli_connect('localhost','root','','ecommapp');
    if($connection)
    {
        echo "connected";
    }
    $UpdateQuery = "UPDATE processor SET 
	pre_name = '$b' , pre_brand = '$c', pre_model_number = '$d',
    pre_technology = '$e', pre_n_o_t = '$f', pre_n_o_c = '$g',
    pre_b_freq = '$h',pre_turbo_freq = '$i',pre_cache_size = '$j',
    pre_price = '$k' WHERE pre_id = '$update_record'";
    $Execute = mysqli_query($connection,$UpdateQuery);
	if ( $Execute === FALSE ) {
		printf("error: %s\n", mysqli_error($connection));
	  }
	  else {
		echo '<script>window.open("view_processor.php?Updated=Record Updated Sucessfully","_self")</script>';
	  }

}

?>