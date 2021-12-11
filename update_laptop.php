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
$ViewQuery = "SELECT * FROM laptop WHERE laptop_id = '$update_record'" ;
$Execute = mysqli_query($connection,$ViewQuery);
while($DataRow = mysqli_fetch_array($Execute)){
	
    $Update_Id = $DataRow['laptop_id'];
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
    <h1>Update Laptop</h1>
    <div class="centre">
	<form action = 'update_laptop.php?Update=<?php echo $Update_Id; ?>' method ='post' enctype = 'multipart/form-data'>
		<fieldset>
        <div class="form-group"><label>Laptop Name:</label><br><input class="form-control" type = 'text' name = 'LN' value = '<?php echo $LN; ?>'></input><br></div>
		<div class="form-group"><label>Laptop Brand Name:</label><br><input class="form-control" type = 'text' name = 'LBN' value = '<?php echo $LBN; ?>'></input><br></div>
		<div class="form-group"><label>Laptop Model Number:</label><br><input class="form-control" type = 'text' name = 'LMN' value = '<?php echo $LMN; ?>'></input><br></div>
		<div class="form-group"><label>Laptop Processor:</label><br><input class="form-control" type = 'text' name = 'LPROCESSOR' value = '<?php echo $LPRO; ?>'></input><br></div>
		<div class="form-group"><label>Laptop Ram:</label><br><input class="form-control" type = 'text' name = 'LRAM' value = '<?php echo $LRAM; ?>' ></input><br></div>
		<div class="form-group"><label>Laptop ssd:</label><br><input class="form-control" type = 'text' name = 'LSSD' value = '<?php echo $LSSD; ?>' ></input><br></div>
		<div class="form-group"><label>Laptop hdd:</label><br><input class="form-control" type = 'text' name = 'LHDD' value = '<?php echo $LHDD; ?>'></input><br></div>
        <div class="form-group"><label>Laptop Gpu:</label><br><input class="form-control" type = 'text' name = 'LGPU' value = '<?php echo $LGPU; ?>'></input><br></div>
        <div class="form-group"><label>Laptop Battery Backup:</label><br><input class="form-control" type = 'text' name = 'LBB' value = '<?php echo $LBB; ?>'></input><br></div>
        <div class="form-group"><label>Laptop Screen Size:</label><br><input class="form-control" type = 'text' name = 'LSS' value = '<?php echo $LSS; ?>'></input><br></div>
        <div class="form-group"><label>Laptop Price:</label><br><input class="form-control" type = 'text' name = 'LP' value = '<?php echo  $LP; ?>' ></input><br></div>
		<input class="btn btn-primary mb-2"  type = 'submit' name = 'submit' value = 'Update'></input><br>
		</fieldset>
	</form>
    </div>
    </div>
</div>
</body>
<?php
$Error = "";
$a = 0;
$l = 0;
$b = $c = $d = $e = $f = $g = $i = $j = $k = $l = $m = $n = $o =  $q = $r = $s = $t = '';


if(isset($_POST['submit'])){
		
		
    
  
        
   
        $c = $_POST['LBN'];
   
        $d = $_POST['LMN'];
    
   
        $e = $_POST['LPROCESSOR'];
    
        $f = $_POST['LRAM'];
   
        $g = $_POST['LSSD'];
    
        $h = $_POST['LHDD'];
    
    
        $i = $_POST['LGPU'];
   
        $j = $_POST['LBB'];
    
    
        $k = $_POST['LSS'];
    
   
        $l = $_POST['LP'];
    
    $connection = mysqli_connect('localhost','root','','ecommapp');
    if($connection)
    {
        echo "connected";
    }
    $UpdateQuery = "UPDATE laptop SET 
	laptop_name = '$b' , brand_name = '$c', model_number = '$d',
    processor = '$e', ram = '$f', sdd = '$g',
    hdd = '$h',gpu = '$i', battery_backup= '$j',
    screen_size = '$k', laptop_price = '$l'WHERE laptop_id = '$update_record'";
    $Execute = mysqli_query($connection,$UpdateQuery);
	if ( $Execute === FALSE ) {
		printf("error: %s\n", mysqli_error($connection));
	  }
	  else {
		echo '<script>window.open("view_laptop.php?Updated=Record Updated Sucessfully","_self")</script>';
	  }
    

}

?>