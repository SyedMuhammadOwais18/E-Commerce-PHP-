<?php

$UserNameError = '';
$EmailError = '';
$FirstNameError = '';
$LastNameError = '';
$PasswordError = '';
$AddressError = '';
$ContactNoError = '';
$Name = '';
$Email = '';
$FName = '';
$LName = '';
$Password = '';
$Address = '';
$ContactNo = '';
$e=0;
$c=0;

	if(isset($_POST['submit'])){
		
		
		#header("location: login.php");
		if(empty($_POST['UName']))
		{
			$e++;
			
			$UserNameError = "Name is Required";
		}
		else
		{
			$Name  = Test_User_Input($_POST['UName']);
		
			if(!preg_match('/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}/',$Name)){
				$c++;
				$UserNameError = "length should be 7 to 15 characters long";
			}
		}
		if(empty($_POST['email']))
			
		{
			$e++;
			$EmailError = "email is Required";
		}
		else
		{
			$Email  = Test_User_Input($_POST['email']);
			
			if(!preg_match('/[a-zA-Z._0-9]{3,}@[a-zA-Z._-]{3,}[.][a-zA-Z._-]{2,}/',$Email)){
				$c++;
				$EmailError = "Not a valid Email";
			}
		}
		if(empty($_POST['FName'])){
			$e++;
			
			$FirstNameError = "First Name is Required";
			
			
		}
		else
		{
			$FName  = Test_User_Input($_POST['FName']);
		
			if(!preg_match('/^[A-Za-z \. ]*$/',$FName)){
				$c++;
				$FirstNameError = "only letters and whitespaces are allowed";
			}
		}
		if(empty($_POST['LName'])){
			
			$e++;
			$LastNameError = "Last Name is Required";
			
			
		}
		else
		{
			$LName  = Test_User_Input($_POST['LName']);
			
			if(!preg_match('/^[A-Za-z \. ]*$/',$LName)){
				$c++;
				$LastNameError = "only letters and whitespaces are allowed";
			}
		}
		if(empty($_POST['password'])){
			$e++;
			
			$PasswordError = "Password is Required";
			
			
		}
		else
		{
			$Password  = Test_User_Input($_POST['password']);
			
			if(!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/',$Password)){
				$c++;
				$PasswordError = "Must include one lower,upper,special letter and one numeric digit";
			}
		}
		if(empty($_POST['address'])){
			$e++;
			
			$AddressError = "Address is Required";
			
			
		}
		else
		{
			$Address  = Test_User_Input($_POST['address']);
			if(!preg_match('/^[A-Za-z0-9\-,. ]*/',$Address)){
				$c++;
				$AddressError = "Not a valid format";
			}
		}
		if(empty($_POST['contactno'])){
			$e++;
			
			$ContactNoError = "Contact Number is Required";
			
			
		}
		else
		{
			$ContactNo  = Test_User_Input($_POST['contactno']);
			if(!preg_match('/^[03]{2}[0-9]{2}[0-9]{7}$/',$ContactNo)){
				$c++;
				$ContactNoError = "Not a valid format";
			}
			
			
		}
		//to check if image is set or not
		/*if(isset($_FILES['product_img'])){
			//specify folder name
			$target_dir = "img_uploads/";
			//to get the image name
			$target_file = basename($_FILES['product_img']["name"]);
			//to get the image type .png etc
			$file_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$target_path = $target_dir . uniqid($prefix = 'img_') . "." . $file_type;

			if(!move_uploaded_file($_FILES['product_img']['tmp_name'], $target_path)){
				$target_path = "";
			}
			
			
			
		}*/
			

		
		
		if($e==0&&$c==0)
		{
			
		$connection = mysqli_connect('localhost','root','','ecommapp');
		$Query = "INSERT INTO users(username,email,first_name,last_name,password,Address,mobileno)
		VALUES('$Name','$Email','$FName','$LName','$Password','$Address','$ContactNo')";
		$Execute = mysqli_query($connection,$Query);
		if ( $Execute === FALSE ) {
			printf("error: %s\n", mysqli_error($connection));
		  }
		  else {
			echo " <script type='text/javascript'>
          window.location.href = 'login.php';
                  </script>" ;
		}
		
		}
		
		
		
		
		
	}

function Test_User_Input($Data)
	{
		return $Data;
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel = "stylesheet" href = "header.css">
    <link rel = "stylesheet" href = "styles.css">
    <link rel="stylesheet" href="sidenav.css">
    <link rel="stylesheet" type="text/css" href="signup1.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <title>LOGIN</title>
    <style>
      /* .login,
.image {
  min-height: 100vh;
}

.bg-image {
  background-image: url('https://res.cloudinary.com/mhmd/image/upload/v1555917661/art-colorful-contemporary-2047905_dxtao7.jpg');
  background-size: cover;
  background-position: center center;
} */
.Error{
	color:red;
}
    </style>
</head>
<body>
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
        <a class="nav-link"  href="login.php">login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active"  href="signup.php" style="color: #052490; font-weight:bold">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link "   href="view_mobile.php">Admin</a>
      </li>    
    </ul>
    </div>
</nav>
<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image"></div>


        <!-- The content half -->
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h3 class="display-4">Sign Up</h3>
                            <p class="text-muted mb-4">Enter into World of Technology</p>
                            <form action = 'signup.php' method ='post' enctype = 'multipart/form-data'>
                                <div class="form-group mb-3">
                                <p><b>Username</b></p><span class = 'Error'><?php echo $UserNameError; ?></span><input id="inputEmail" name = 'UName' placeholder="Username" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
                                <div class="form-group mb-3">
                                <p><b>Password</b></p><input id="inputEmail" name = 'password' type="password" placeholder="Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                </div>
                                <div class="form-group mb-3">
                                <p><b>First Name</b></p><span class = 'Error'><?php echo $FirstNameError; ?></span><input id="inputEmail" name = 'FName' type="text" placeholder="" required="" class="form-control rounded-pill border-0 shadow-sm px-4 ">
                                </div>
                                <div class="form-group mb-3">
                                <p><b>Last Name</b></p><span class = 'Error'><?php echo $LastNameError;?></span><input id="inputEmail" name = 'LName' type="text" placeholder="" required="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
                                <div class="form-group mb-3">
                                <p><b>Email</b></p><span class = 'Error'><?php echo $EmailError; ?></span><input id="inputEmail" name = 'email' type="Email" placeholder="" required="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
								<div class="form-group mb-3">
                                <p><b>Address</b></p><span class = 'Error'><?php echo $AddressError; ?></span><input id="inputEmail" name = 'address' type="text" placeholder="" required="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
                                <div class="form-group mb-3">
                                <p><b>Contact No</b></p><span class = 'Error'><?php echo $ContactNoError;?></span><input id="inputEmail" name = 'contactno' type="text" placeholder="03XXXXXXXXX" required="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
                                <input type="submit" name = 'submit' class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm"></input>
                            </form>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
</div>
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
		<p><span>ABC Street </span> Delhi, India</p>
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
