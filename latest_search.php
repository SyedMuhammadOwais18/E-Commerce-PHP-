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
  .row-content{
    margin: 0px auto;
    padding: 50px 0px 50px 0px;
    border-bottom: 1px ridge;
    min-height:400px;
}
  .center {
    padding-left: 20%;
}
.s_head{
            color: #052490;
            font-weight: bold;
        }
        .s_hr{
            color: #052490;
        }
        .s_pad{
            padding-left: 5%;
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
        <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="laptop_cat.php">Laptops</a>
          <a class="dropdown-item" href="mobile_cat.php">Mobiles</a>
          <a class="dropdown-item"  href="gpu_cat.php">GPU</a>
          <a class="dropdown-item" href="ram_cat.php">RAM</a>
          <a class="dropdown-item" href="psu_cat.php">Power Supply</a>
          <a class="dropdown-item" href="processor_cat.php">Processor</a>
          <a class="dropdown-item" href="mobo_cat.php">Motherboard</a>
          <a class="dropdown-item" href="storagedevice_cat.php">Storage Device</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="login.php">login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="signup.php">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"   href="view_mobile.php">Admin</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link active" style="color: #052490; font-weight:bold;"   href="latest_search.php"><i class = 'fa fa-search' aria-hidden = "true" >Search</i></a>
      </li>   
    </ul>
    </div>
</nav>
<div class="mains">

<div class="center">
    <form action="" method="post">
        <div class="form-row">
        <div class="col">
        <input  class="form-control" name="searched" type="text" placeholder=" Search ElectroMate">
        </div>
        <div class="col">
        <select class="form-control" name="category" id="category">
            <option value="name">Laptop</option>
            <option value="name1">Mobile</option>
            <option value="name2">Ram</option>
            <option value="name3">Processor</option>
            <option value="name4">Psu</option>
            <option value="name5">Gpu</option>
            <option value="name6">Storage Device</option>
            <option value="name7">Motherboard</option>
        </select>
        </div>
        <div class="col">
        <button class="btn btn-primary " type="submit" value="search" name="submit"><span class="fa fa-search form-control-feedback"></span></button>
        </div>
        </div>
    </form>
    </div>

</div>

<?php
$sql = '';
$connection = mysqli_connect('localhost','root','','ecommapp');
if($connection)
    {
    // echo"connected";
    }  
    
if(isset($_POST['submit'])){
    $search_value = $_POST['searched'];
    $search_cat = $_POST['category'];
    $sql = '';
    if($search_cat == 'name'){
        $sql="select * from laptop where laptop_name like '%{$search_value}%'";
        $Execute = mysqli_query($connection , $sql);
        if (!$Execute) {
            printf("Error: %s\n", mysqli_error($connection));
            exit();
        }
        while($DataRow1 = mysqli_fetch_assoc($Execute)){
            $l_id = $DataRow1['laptop_id'];
            $l1_name = $DataRow1['laptop_name'];
            $l1_img1 =  $DataRow1['img1'];
            $l1_price =  $DataRow1['laptop_price'];
            echo "<div class='s_pad'>";
            echo "<br>";
            echo "<h3 class='s_head'> Name : {$l1_name} </h3>";
            echo "<h6 class='s_price'> Price : {$l1_price}</h6>";
            echo " <button class = 'btn btn-primary'  ><a href = 'laptop_detail.php?laptop_id={$l_id}' style = 'color:white'>More Details</a></button>";
            echo"</div>";
            echo"<hr class='s_hr'>";
            
            
         }
         
    }
    if($search_cat == 'name1'){
        $sql="select * from mobile where mobile_name like '%{$search_value}%'";
        $Execute = mysqli_query($connection,$sql);

  while($DataRow = mysqli_fetch_assoc($Execute)){
    $m1_id = $DataRow['mobie_id'];
     $m1_name= $DataRow['mobile_name'];
     $m1_img1= $DataRow['img1'];
    $m1_price= $DataRow['price'];
    echo "<div class='s_pad'>";
    echo "<br>";
    echo "<h3 class='s_head'> Name : {$m1_name} </h3>";
    echo "<h6 class='s_price'> Price : {$m1_price}</h6>";
    echo " <button class = 'btn btn-primary  flex-fill'  ><a href = 'mobile_detail.php?mobile_id={$m1_id}' style = 'color:white' >More Details</a></button>";
    echo"</div>";
    echo"<hr class='s_hr'>";
  
     } 
    }
   
    if($search_cat == 'name2'){
        $sql="select * from ram where ram_name like '%{$search_value}%'";
        $Execute = mysqli_query($connection,$sql);
        while($DataRow = mysqli_fetch_array($Execute)){
            $r_id = $DataRow['ram_id'];
            $r_name = $DataRow['ram_name'];
          
            $r_img1=$DataRow['img1'];
            $r_price=$DataRow['ram_price'];
            echo "<div class='s_pad'>";
            echo "<br>";
            echo "<h3 class='s_head'> Name : {$r_name} </h3>";
    echo "<h6 class='s_price'> Price : {$r_price}</h6>";
    echo " <button class = 'btn btn-primary  flex-fill'  ><a href = 'ram_detail.php?ram_id={$r_id}' style = 'color:white'> More Details</a></button>";
    echo"</div>";
    echo"<hr class='s_hr'>";
            
        
            
        }
       
    }
    if($search_cat == 'name3'){
        $sql="select * from processor where pre_name like '%{$search_value}%'";
        $Execute = mysqli_query($connection,$sql);
        while($DataRow = mysqli_fetch_array($Execute)){
            $pr_id = $DataRow['pre_id'];
            $pr_name = $DataRow['pre_name'];
           
            $pr_img1=$DataRow['img1'];
            $pr_price=$DataRow['pre_price'];
            echo "<div class='s_pad'>";
            echo "<br>";
            echo "<h3 class='s_head'> Name : {$pr_name} </h3>";
    echo "<h6 class='s_price'> Price : {$pr_price}</h6>";
    echo " <button class = 'btn btn-primary  flex-fill'  ><a href = 'processor_detail.php?processor_id={$pr_id}' style = 'color:white' >More Details</a></button>";
    echo"</div>";
    echo"<hr class='s_hr'>";
            
            
        
            
        }

    }
    if($search_cat == 'name4'){
        $sql="select * from psu where psu_name like '%{$search_value}%'";
        $Execute = mysqli_query($connection,$sql);
        while($DataRow = mysqli_fetch_array($Execute)){
            $p_id = $DataRow['psu_id'];
            $p_name = $DataRow['psu_name'];
           
            $p_img1=$DataRow['img1'];
            $p_price=$DataRow['psu_price'];
            
            echo "<div class='s_pad'>";
            echo "<br>";
            echo "<h3 class='s_head'> Name : {$p_name} </h3>";
            echo "<h6 class='s_price'> Price : {$p_price}</h6>";
            echo " <button class = 'btn btn-primary  flex-fill' ><a href = 'psu_detail.php?psu_id={$p_id}' style = 'color:white'> More Details</a></button>";
            echo"</div>";
            echo"<hr class='s_hr'>";
            
        }
    }
    if($search_cat == 'name5'){
        $sql="select * from gpu where gpu_name like '%{$search_value}%'";
        $Execute = mysqli_query($connection,$sql);
        while($DataRow = mysqli_fetch_array($Execute)){
            $g_id = $DataRow['gpu_id'];
            $g_name = $DataRow['gpu_name'];
           
            $g_img1=$DataRow['img1'];
            $g_price=$DataRow['gpu_price'];
            
            echo "<div class='s_pad'>";
            echo "<br>";
            echo "<h3 class='s_head'> Name : {$g_name} </h3>";
            echo "<h6 class='s_price'> Price : {$g_price}</h6>";
            echo " <button class = 'btn btn-primary  flex-fill'  ><a href = 'gpu_detail.php?gpu_id={$g_id}' style = 'color:white'>More Details</a></button>";
            echo"</div>";
            echo"<hr class='s_hr'>";
            
        }

    }
    if($search_cat == 'name6'){
        $sql="select * from storage_device where storage_name like '%{$search_value}%'";
        $Execute = mysqli_query($connection,$sql);
        while($DataRow = mysqli_fetch_array($Execute)){
            $s_id = $DataRow['sd_id'];
            $s_name = $DataRow['storage_name'];
            
            $s_img1=$DataRow['img1'];
            $s_price=$DataRow['sd_price'];
            
            echo "<div class='s_pad'>";
            echo "<br>";
            echo "<h3 class='s_head'> Name : {$s_name} </h3>";
            echo "<h6 class='s_price'> Price : {$s_price}</h6>";
            echo " <button class = 'btn btn-primary  flex-fill' ><a href = 'storagedevice_detail.php?sd_id={$s_id}' style = 'color:white'> More Details</a></button>";
            echo"</div>";
            echo"<hr class='s_hr'>";
        }
    }
    if($search_cat == 'name7'){
         $sql="select * from motherboard where mobd_name like '%{$search_value}%'";
         $Execute = mysqli_query($connection,$sql);
         while($DataRow = mysqli_fetch_array($Execute)){
            $m_id = $DataRow['mobd_id'];
            $m_name = $DataRow['mobd_name'];
            
            $m_img1=$DataRow['img1'];
            $m_price=$DataRow['mobd_price'];
            // echo "<img src = '{$m_img1}' alt = 'img1' class = 'img-responsive' height = '150' 
            // style = 'width : 150px;'>";
            echo "<div class='s_pad'>";
            echo "<br>";
            echo "<h3 class='s_head'> Name : {$m_name} </h3>";
            echo "<h6 class='s_price'> Price : {$m_price}</h6>";
            echo " <button class = 'btn btn-primary  flex-fill'  ><a href = 'motherboard_detail.php?motherboard_id={$m_id}'style = 'color:white'> More Details</a></button>";
            echo"</div>";
            echo"<hr class='s_hr'>";
            
            
        }

     }
   
    
   

}


?>




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