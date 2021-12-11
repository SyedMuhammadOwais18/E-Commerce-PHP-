<?php
session_start();
$psu_id = $_GET['psu_id'];
//echo $gpu_id;
$connection = mysqli_connect('localhost','root','','ecommapp'); 
$ViewQuery = "SELECT * FROM psu inner join product ON psu.psu_id = '$psu_id' and product.psu_id = '$psu_id'";
$Execute = mysqli_query($connection,$ViewQuery);
if (!$Execute) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
}
while($DataRow = mysqli_fetch_array($Execute)){
  $ID = $DataRow['psu_id'];
	$MN = $DataRow['psu_name'];
	$MBN = $DataRow['model_number'];
	$MMN = $DataRow['brand_name'];
	$MOS = $DataRow['watts'];
    $MPRO = $DataRow['rgb_fan'];
    $MCORE= $DataRow['form_factor'];
    $MSPEED = $DataRow['fan_size'];
    $MGPU = $DataRow['psu_price'];
    $stock = $DataRow['stock_quantity'];
    $img1 = $DataRow['img1'];
  $img2 = $DataRow['img2'];
   
}
if(isset($_SESSION['user_username'])&& isset($_SESSION['user_password']))
  {
    if(isset($_SESSION['cart']))
    {
        //print_r($_SESSION['cart']);
    $count = count($_SESSION['cart']);
    echo $count;
    }
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="slideshow1.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
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
  #lblCartCount {
  font-size: 12px;
  background: #052490;
  color:white ;
  padding: 0 6px;
  vertical-align: top;
  border-radius:100%;
  
}
.carousel{
    background : black;

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
        <a class="nav-link active" style="color: #052490; font-weight:bold"  href="view_mobile.php">Admin</a>
      </li> 
      <li class="nav-item">
     
      <a class="nav-link" href="latest_cart.php" class="icon-shopping-cart" style="font-size: 17px">
      <i style="color:black" class="fa fa-shopping-cart"></i>
      <span ID="lblCartCount"><b> <?php if(isset($_SESSION['cart']))
    {
        //print_r($_SESSION['cart']);
    //$count = count($_SESSION['cart']);
    echo $count;
    }   ?></b></span>
      </a>
      </li>    
      <li class="nav-item">
        <a class="nav-link active" style="color: #052490; font-weight:bold;"   href="latest_search.php"><i class = 'fa fa-search' aria-hidden = "true" >Search</i></a>
      </li> 
    </ul>
    </div>
</nav>

<!-- DATA CHANGING START FROM HERE !-->

<div class="mains">
<div id="content-wrapper">
		

		<div class="column">
			<img id=featured src="img1.jpg">

			<div id="slide-wrapper" >
				<img id="slideLeft" class="arrow" src="arrow-left.png">

				<div id="slider">
					<img class="thumbnail active" src="<?php echo $img1;   ?>">
					<img class="thumbnail" src="<?php echo $img2;   ?>">
				</div>

				<img id="slideRight" class="arrow" src="arrow-right.png">
			</div>
		</div>

		<div class="column">
			<h1 class="product"><?php echo $MN;   ?></h1>
			<hr>
			<h3><?php echo $MGPU;   ?></h3><br>
            <p><span class="dark-grey"><b>Brand:</b></span><span class="light-grey"> <?php  echo $MBN;   ?> </span></p>
            <p><span class="dark-grey"><b>Model No:</b></span><span class="light-grey"> <?php  echo $MMN;   ?> </span></p>
            <form action = '#' method = 'post'>
                            <input type = 'hidden' name = 'price' value = <?php echo $MGPU; ?>>
                            <input type = 'hidden' name = 'stock' value = <?php echo $stock ; ?>>
                            <input type = 'hidden' name = 'p_id' value = <?php echo $ID ; ?>>
                        <b><span class="dark-grey">Quantity:</b></span><input maxlength="1" style="border-color:#f5f5f5" type="number" min="1" max="2"  name="qty" ></br>
                        <button type = 'submit' name = 'submit' class = 'btn btn-success flex-fill'>Add to cart</button>
                        </form>
            <!-- <b><span class="dark-grey">Quatity:     </b></span><input maxlength="1" style="border-color:#f5f5f5" type="number" min="1" max="2" value="1" name="qty" >
			<br><br><a class="btn btn-primary" style="background-color:#052490 ;" href="#"><i class="fas fa-shopping-cart"></i> Add to Cart</a> -->
		</div>

	</div>
	<script type="text/javascript">
		let thumbnails = document.getElementsByClassName('thumbnail')

		let activeImages = document.getElementsByClassName('active')

		for (var i=0; i < thumbnails.length; i++){

			thumbnails[i].addEventListener('mouseover', function(){
				console.log(activeImages)
				
				if (activeImages.length > 0){
					activeImages[0].classList.remove('active')
				}
				

				this.classList.add('active')
				document.getElementById('featured').src = this.src
			})
		}


		let buttonRight = document.getElementById('slideRight');
		let buttonLeft = document.getElementById('slideLeft');

		buttonLeft.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft -= 180
		})

		buttonRight.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft += 180
		})
    </script>
    <hr>
    <h2 style="padding-left: 60px;" class="product">Specifictaions<h2>
    <hr>
    <div style="padding-left: 100px;">
        
        
        <table width="600px" height="300px">
            <tr>
                <th class="spec">Watts</th>
                <td class="specify"><?php echo $MOS;  ?></td>
            </tr>
            <tr>
                <td class="spec">Rgb Fans</td>
                <td class="specify"><?php echo $MPRO;  ?></td>
            </tr>
            <tr>
                <td class="spec">Form Factor</td>
                <td class="specify"><?php echo $MCORE;  ?></td>
            </tr>
            <tr>
                <td class="spec">Fan Size</td>
                <td class="specify"><?php echo $MSPEED;  ?></td>
            </tr>

        </table>
    </div>
    </div>

    <!-- DATA CHANGING END HERE !-->

    <div>
		<footer class="footer-distributed">
 
		<div class="footer-left">
 
		<h3>Electro<span>Mate</span></h3>
 
		<p class="footer-links">
		<a href="#">Home</a>
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


<?php


 if(isset($_POST['submit'])){

  if(isset($_SESSION['user_username']) && isset($_SESSION['user_password'])){
  function check_stock(){
  $id = $_POST['p_id'];
  $mobile_stock = $_POST['stock'];
  $quantity = $_POST['qty'];
  $check_stock = $mobile_stock - $quantity;
  if($check_stock<0)
  {
  
      echo "<script>alert('Not enough stock')</script>";
      echo "<script>windows.location.href = 'psu_detail.php'</script>";
      return 0;
  }
  else
  {
      // $connection = mysqli_connect('localhost','root','','ecommapp');
      // if($connection)
      //     {
      //     echo "connected";
      //     }
      // $UpdateQuery = "UPDATE product SET 
      // stock_quantity = '$check_stock'
      // WHERE psu_id = '$id'";
      // $Execute = mysqli_query($connection,$UpdateQuery);
      // if ( $Execute === FALSE ) {
      //     printf("error: %s\n", mysqli_error($connection));
      //  }
        return 1;

  }
}
    
     //print_r($_SESSION);
      if(isset($_SESSION['cart']))

      {
        //print_r($_SESSION['cart']);
         $a = array_column($_SESSION['cart'],"id");
        // print_r($a);
         $count = count($_SESSION['cart']);
         //echo $count;
    //    $a = array_column($_SESSION['cart'],'product_id');
    //  // print_r($a);
   // print_r($_SESSION);
    
            if(in_array($_POST['p_id'],$a)){

              echo "<script>alert('product id is already entered in the cart')</script>";
        //      echo "<script>windows.location = 'mobile_inf.php'</script>";
            }
            else
            {
            //  $count = count($_SESSION['cart']);
            //  echo $count;
            if(check_stock()){
             $item_array = array('id' => $_POST['p_id'],'quantity' => $_POST['qty'],'stock' => $_POST['stock']);
             //print_r($item_array);
              $_SESSION['cart'][$count] = $item_array;
              $count++;
            //   session_unset();
            //   session_destroy();
              print_r($_SESSION['cart']);
            }
              else
                {
                  echo "<a href = 'psu_detail.php'></a>";
                }
        //      print_r($_SESSION);
            }
    //     //print_r($_SESSION);

      }
      else
      {
         if(check_stock()){
          $item_array = array('id' => $_POST['p_id'],'quantity' => $_POST['qty'],'stock' => $_POST['stock']);
          $_SESSION['cart'][0] = $item_array;
          print_r($_SESSION['cart']);
         }
          else
        {
        echo "<a href = 'psu_detail.php'></a>";
        }
      }
    }
    else
    { 
      echo " <script type='text/javascript'>
            window.location.href = 'login.php';
                    </script>" ;
  
    }
      
}

?> 