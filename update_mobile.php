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
$ViewQuery = "SELECT * FROM mobile WHERE mobie_id = '$update_record'";
$Execute = mysqli_query($connection,$ViewQuery);
while($DataRow = mysqli_fetch_array($Execute)){
	
    $Update_Id = $DataRow['mobie_id'];
	$MN = $DataRow['mobile_name'];
	$MBN = $DataRow['brand_name'];
	$MMN = $DataRow['model_number'];
	$MOS = $DataRow['OS'];
    $MPRO = $DataRow['processor'];
    $MCORE= $DataRow['cpu_core'];
    $MSPEED = $DataRow['cpu_speed'];
    $MGPU = $DataRow['gpu'];
    $MTYPE = $DataRow['display_type'];
    $MSIZE = $DataRow['display_size'];
    $MRES = $DataRow['resolution'];
    $MMEM = $DataRow['memory'];
    $MRAM = $DataRow['ram'];
    $MF= $DataRow['front_camera'];
    $MB= $DataRow['back_camera'];
    $MBF= $DataRow['back_camera_feature'];
    $MBT= $DataRow['battery_type'];
    $MC= $DataRow['colors'];
    $MP= $DataRow['price'];
	
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
    <title>update mobile</title>
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
<h1>Update Mobile</h1>
<div class="centre">
	<form action = 'update_mobile.php?Update=<?php echo $Update_Id; ?>' method = 'post' >
	<fieldset>
    <div class="form-group"><label>Name:</label><br><input class="form-control" type = 'text' name = 'MOBN' value = '<?php echo $MN; ?>'></input><br></div>
    <div class="form-group"><label>Brand Name:</label><br><input class="form-control" type = 'text' name = 'MOBBN' value = '<?php echo $MBN; ?>' ></input><br></div>
    <div class="form-group"><label>Model Number:</label><br><input  class="form-control" type = 'text' name = 'MOBMN' value = '<?php echo $MMN; ?>'></input><br></div>
    <div class="form-group"><label>Operating System:</label><br><input class="form-control" type = 'text' name = 'MOBOS' value = '<?php echo $MOS; ?>'  ></input><br></div>
    <div class="form-group"><label>Processor:</label><br><input class="form-control" type = 'text' name = 'MOBP' value = '<?php echo $MPRO; ?>'  ></input><br></div>
    <div class="form-group"><label>CPU Core:</label><br><input class="form-control" type = 'text' name = 'MOBCORE' value = '<?php echo $MCORE; ?>' ></input><br></div>
    <div class="form-group"><label>CPU Speed:</label><br><input class="form-control" type = 'text' name = 'MOBSPEED' value = '<?php echo $MSPEED; ?>'></input><br></div>
    <div class="form-group"><label>GPU:</label><br><input class="form-control" type = 'text' name = 'MOBGPU' value = '<?php echo $MGPU; ?>'></input><br></div>
    <div class="form-group"><label>Display Type:</label><br><input class="form-control" type = 'text' name = 'MOBDT' value = '<?php echo $MTYPE; ?>'></input><br></div>
    <div class="form-group"><label>Display Size:</label><br><input class="form-control" type = 'text' name = 'MOBDS' value = '<?php echo $MSIZE; ?>'></input><br></div>
    <div class="form-group"><label>Resolution:</label><br><input class="form-control" type = 'text' name = 'MOBRES' value = '<?php echo $MRES; ?>'></input><br></div>
    <div class="form-group"><label>Memory:</label><br><input class="form-control" type = 'text' name = 'MOBM' value = '<?php echo $MMEM; ?>'></input><br></div>
    <div class="form-group"><label>RAM:</label><br><input class="form-control" type = 'text' name = 'MOBRAM' value = '<?php echo $MRAM; ?>'></input><br></div>
    <div class="form-group"><label>Front Camera:</label><br><input class="form-control" type = 'text' name = 'MOBFCAM' value = '<?php echo $MF; ?>'></input><br></div>
    <div class="form-group"><label>Back Camera:</label><br><input class="form-control" type = 'text' name = 'MOBBCAM' value = '<?php echo $MB; ?>'></input><br></div>
    <div class="form-group"><label>Back Camera Feature:</label><br><input class="form-control" type = 'text' name = 'MOBBCAMFEA' value = '<?php echo $MBF; ?>'></input><br></div>
    <div class="form-group"><label>Battery Type:</label><br><input class="form-control" type = 'text' name = 'MOBBT' value = '<?php echo  $MBT ; ?>'></input><br></div>
    <div class="form-group"><label>Colors:</label><br><input class="form-control" type = 'text' name = 'MOBCOLOR' value = '<?php echo $MC; ?>'></input><br></div>
    <div class="form-group"><label>Price:</label><br><input class="form-control" type = 'text' name = 'MOBPRICE' value = '<?php echo $MP; ?>'></input><br></div>
		<input class="btn btn-primary mb-2" type = 'submit' name = 'submit' ></input><br>
		</fieldset>
    </form>
</div>
</div>
</div>
</body>

<?php
$Error = "";
$a = 0;
$p = 0;
$t = 0;
$b = $c = $d = $e = $f = $g = $h = $i = $j = $k = $l = $m = $n = $o =  $q = $r = $s  = '';
if(isset($_POST['submit'])){
		
		
    #header("location: login.php");
   
       
    
	
       $b = $_POST['MOBN'];
    
   
   
        $c = $_POST['MOBMN'];
    
	
        $d = $_POST['MOBBN'];
    
   
   
        $e = $_POST['MOBOS'];
   
        $f = $_POST['MOBP'];
    
   
        $g = $_POST['MOBCORE'];
    
    
        $h = $_POST['MOBSPEED'];
    
    
        $i = $_POST['MOBGPU'];
    
    
        $j = $_POST['MOBDT'];
    
   
        $k = $_POST['MOBDS'];
    
    
        $l = $_POST['MOBRES'];
    
        $m = $_POST['MOBM'];
    
   
        $n = $_POST['MOBRAM'];
    
    
        $o = $_POST['MOBFCAM'];
    
   
        $p = $_POST['MOBBCAM'];
    
    
        $q = $_POST['MOBBCAMFEA'];
    
   
        $r = $_POST['MOBBT'];
    
   
        $s = $_POST['MOBCOLOR'];
    
    
        $t = $_POST['MOBPRICE'] ;
   
    
    
    $connection = mysqli_connect('localhost','root','','ecommapp');
    $UpdateQuery = "UPDATE mobile SET 
	mobile_name = '$b' , brand_name = '$c', model_number = '$d',
    OS = '$e', processor = '$f', cpu_core = '$g',
    cpu_speed = '$h',gpu = '$i',display_type = '$j',
    display_size = '$k',resolution = '$l',memory = '$m',ram = '$n',
    front_camera = '$o',back_camera = '$p',back_camera_feature = '$q',
    battery_type = '$r',colors = '$s', price = '$t' WHERE mobie_id = '$update_record'";
	
    $Execute = mysqli_query($connection,$UpdateQuery);
	if ( $Execute === FALSE ) {
		printf("error: %s\n", mysqli_error($connection));
	  }
	  else {
		echo '<script>window.open("view_mobile.php?Updated=Record Updated Sucessfully","_self")</script>';
	  }
    
    
}

?>