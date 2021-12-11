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
			
			if(!preg_match('/[a-zA-Z._-]{3,}@[a-zA-Z._-]{3,}[.][a-zA-Z._-]{2,}/',$Email)){
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
				$ContactError = "Not a valid format";
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
		$Query = "INSERT INTO users(username,email,first_name,last_name,passwword,Address,mobileno);
		VALUES('$Name','$Email','$FName','$LName','$Password','$Address','$ContactNo')";
		$Execute = mysqli_query($connection,$Query);
		header("location: login.php");
		}
		
		
		
		
		
	}

function Test_User_Input($Data)
	{
		return $Data;
	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<!--<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">-->
	
	<title>Sign Up</title>
	<h1>Sign Up</h1>
</head>
<style type = 'text/css'>
input[type = 'text'],input[type = 'password']{
	
	border:1px solid dashed;
	width : 400px;
	background-color:rgb(221,216,212);
	padding:0.5em;
	font-size:1.0em;
	
}
div{
	
width :700px;

	
}
.Error{
	color:red;
}
</style>
<body>
<div >
<!--<div class = 'row'>-->
<!--<div class = 'col-sm-11'>-->
	<form action = 'Signup.php' method ='post' enctype = 'multipart/form-data'>
		<fieldset>
		
		UserName:<br><input type = 'text' name = 'UName' value = ''placeholder = "Enter username"></input>*<span class = 'Error'><?php echo $UserNameError; ?></span><br>
		EmailAddress:<br><input type = 'text' name = 'email' value = ''></input>*<span class = 'Error'><?php echo $EmailError; ?></span><br>
		FirstName:<br><input type = 'text' name = 'FName' value = ''></input>*<span class = 'Error'><?php echo $FirstNameError; ?></span><br>
		LastName:<br><input type = 'text' name = 'LName' value = ''></input>*<span class = 'Error'><?php echo $LastNameError;?></span><br>
		Password:<br><input type = 'password' name = 'password' value = '' ></input>*<span class = 'Error'><?php echo $PasswordError; ?></span><br>
		Address:<br><input type = 'text' name = 'address' value = '' ></input>*<span class = 'Error'><?php echo $AddressError; ?></span><br>
		ContactNo:<br><input type = 'text' name = 'contactno' value = ''placeholder = '03XXXXXXXXX' ></input>*<span class = 'Error'><?php echo $ContactNoError;?></span><br>
		<!--Image:<br><input type = 'file' name = 'product_img'/><br>-->
		<br><input  type = 'submit' name = 'submit' value = 'Sign up'></input><br>
		
		
		</fieldset>
	
	
	
	</form>
	<!-- ending of col class -->
<!--</div>-->
	<!-- ending of row class-->
<!--</div>	-->
	<!-- ending of container class-->
</div>
<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script> 
<script src = "js/scripts.js"></script>
</body>

</html>