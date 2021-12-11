<?php
 $count = 0;
session_start();
//  session_unset();
//  session_destroy();
// print_R($_SESSION);
//$DataRow = '';
//$Images[] = '';

 $connection = mysqli_connect('localhost','root','','ecommapp'); 
 
 $ViewQuery = "SELECT * FROM gpu inner join product on gpu.gpu_id = product.gpu_id";
 
  $Execute = mysqli_query($connection,$ViewQuery);

  while($DataRow = mysqli_fetch_assoc($Execute)){
     
     

     $Images[] =  array('g_id' => $DataRow['gpu_id'],'g_name'=> $DataRow['gpu_name'],'g_img1'=> $DataRow['img1']
     ,'g_stock'=> $DataRow['stock_quantity'],'g_price'=> $DataRow['gpu_price']);
        //    $m1_name = $DataRow['mobile_name'];
        //     $m1_img1 = $DataRow['img1'];
        //   $m1_stock = $DataRow['stock_quantity'];
     

    
//  $count++;
    
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
//  echo $count;
 
 


?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel = "stylesheet" href = "styles.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="carousel.css">
    <script src="checkError.js"></script>
   
	<!--<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">-->
	
	<title>test image</title>
	
</head>
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
          <a class="dropdown-item "  href="laptop_cat.php">Laptops</a>
          <a class="dropdown-item" href="mobile_cat.php">Mobiles</a>
          <a class="dropdown-item" href="ram_cat.php">RAM</a>
          <a class="dropdown-item" href="gpu_cat.php">GPU</a>
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
        <a class="nav-link"   href="view_mobile.php">Admin</a>
      </li>  
      <li class="nav-item">
     
      <a class="nav-link" href="latest_cart.php" class="icon-shopping-cart" style="font-size: 17px">
      <i style="color:black" class="fa fa-shopping-cart"></i>
      <span ID="lblCartCount"><b> <?php echo $count;   ?></b></span>
      </a>
      </li>  
      <li class="nav-item">
        <a class="nav-link active" style="color: #052490; font-weight:bold"   href="latest_search.php"><i class = 'fa fa-search' aria-hidden = "true" >Search</i></a>
      </li> 
    </ul>
    </div>
</nav>
<div class = 'mains'>
<div class = 'container'>
    <div class = "row row-content">
            <div class = "col">
                <div id="mycarousel" class ="carousel slide" data-ride = "carousel" data-interval="2000">
                    <div class = "carousel inner" role = "listbox">
                        <div class = "carousel-item active">
                            <!-- this class is used to adjust the image to right position-->
                            <img 
                                src="img/carousel 1.jpg" alt="img1"/>
                            <div class = "carousel-caption d-none d-md-block" >

                            <h2 >Latest Product </h2>  
                                <p class = "d-none d-sm-block"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            </div>

                        </div>
                        <div class = "carousel-item  ">
                            <img class = "d-block image-fluid"
                              src="img/carousel 2.jpg" alt="img2"  />
                            <div class = "carousel-caption d-none d-md-block" >

                            <h2 >Latest Product </h2>  
                                <p class = "d-none d-sm-block"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            </div>

                        </div>
                        <div class = "carousel-item ">
                            <img class = "d-block image-fluid"
                            src="img/caurosel 3.jpg" alt="img3"  />
                            <div class = "carousel-caption d-none d-md-block" >
                            <h2 >Latest Product </h2>  
                                <p class = "d-none d-sm-block"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            </div>

                        </div>
                    </div>
                    <ol class = "carousel-indicators">
                        <li data-target="#mycarousel" data-slide-to="0" class = "active"></li>
                        <li data-target="#mycarousel" data-slide-to="1"></li>
                        <li data-target="#mycarousel" data-slide-to="2"></li>
                    </ol>
                    <a class = "carousel-control-prev" href= "#mycarousel"role = "button"data-slide = "prev">
                        <span class = "carousel-control-prev-icon"></span>
                    </a>
                    <a class = "carousel-control-next" href= "#mycarousel"role = "button"data-slide = "next">
                        <span class = "carousel-control-next-icon"></span>
                    </a>
                   
                        <button class ="btn btn-danger btn-sm" id = "carouselbutton">
                            <span class = " fa fa-pause"></span>
                        </button>

                    
                </div>
            </div>
        </div>
</div>

<!-- <div class = 'container'>
    <div class = 'row'>
        <div class = 'col-sm offset-sm-4'>
            <h1 style = 'margin-bottom:40px; margin-top:20px;'> MOBILE</h1>

        </div>


    </div>


</div> -->

<div class = 'row'>
 
  <?php 
      foreach($Images as $im)
      
      
        
      {?>
    <div class = 'col-sm-3 offset-sm-1'>
      
     
            <div class = 'card'>
                <div class = 'card-body'>
                    <img src = '<?php echo $im['g_img1']; ?> ' alt = 'img1' class = 'img-responsive' height = '150' style = 'width : 150px;  margin-left:auto; margin-right:auto; display:block;'>
        
                    <div style = 'text-align:center;'>
                        <a href = '#'> <?php echo $im['g_name']; ?></a>
                    </div><!-- for name-->
                    <div style = 'text-align:center;'>
                     Price : <?php echo $im['g_price']; ?>
                    </div>
                    <div style = 'text-align:center;'>
                     availability : <?php if($im['g_stock']>0){
                         
                         echo "in stock";
                     }else{
                       
                         echo "out stock";
                        } ?>
                </div><!-- for stock-->
                <div class = 'btn-group d-flex align-items-center' >
                <form action = 'gpu_cat.php' method = 'post'>
                            <input type = 'hidden' name = 'price' value = <?php echo $im['g_price'] ; ?>>
                            <input type = 'hidden' name = 'stock' value = <?php echo $im['g_stock'] ; ?>>
                            <input type = 'hidden' name = 'g_id' value = <?php echo $im['g_id'] ; ?>>
                        <b><span class="dark-grey">Quantity:</b></span><input maxlength="1" style="border-color:#f5f5f5" type="number" min="1" max="2"  name="qty" ></br>
                        <button type = 'submit' name = 'submit' class = 'btn btn-success flex-fill'>Add to cart</button>
                        <button class = 'btn btn-danger flex-fill'><a href = 'gpu_detail.php?gpu_id=<?php echo $im['g_id'];?>' style = 'color:white;'>More details</a> </button>
                        </form>
                        
                        <!-- <button class = 'btn btn-danger flex-fill'><a href = 'gpu_detail.php?gpu_id=<?php echo $im['g_id'];?>' style = 'color:white;'>More details</a> </button> -->

                </div>
                
                
            </div>
        </div>
      
    </div>
   

    
     <?php }?>
     
</div>
</div>
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

</html>


<?php


 if(isset($_POST['submit'])){

    if(isset($_SESSION['user_username']) && isset($_SESSION['user_password'])){  
    function check_stock(){
    $id = $_POST['g_id'];
    $gpu_stock = $_POST['stock'];
    $quantity = $_POST['qty'];
    $check_stock = $gpu_stock - $quantity;
    if($check_stock<0)
    {
    
        echo "<script>alert('Not enough stock')</script>";
        echo "<script>windows.location.href = 'gpu_cat.php'</script>";
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
        // WHERE gpu_id = '$id'";
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
    
            if(in_array($_POST['g_id'],$a)){

              echo "<script>alert('product id is already entered in the cart')</script>";
        //      echo "<script>windows.location = 'mobile_inf.php'</script>";
            }
            else
            {
            //  $count = count($_SESSION['cart']);
            //  echo $count;
            if(check_stock()){
             $item_array = array('id' => $_POST['g_id'],'quantity' => $_POST['qty'],'stock' => $_POST['stock']);
             //print_r($item_array);
              $_SESSION['cart'][$count] = $item_array;
              $count++;
            //   session_unset();
            //   session_destroy();
              print_r($_SESSION['cart']);
            }
            else
            {
            echo "<a href = 'gpu_cat.php'></a>";
            }
        //      print_r($_SESSION);
        // $count = count($_SESSION['cart']);
        // echo $count;
            }
    //     //print_r($_SESSION);

      }
      else
      {
        if(check_stock()){
          $item_array = array('id' => $_POST['g_id'],'quantity' => $_POST['qty'],'stock' => $_POST['stock']);
          $_SESSION['cart'][0] = $item_array;
          print_r($_SESSION['cart']);
        }
        else
            {
            echo "<a href = 'gpu_cat.php'></a>";
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