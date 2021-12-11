
<?php

$e = 0;
$c = 0;
$UserNameError = '';
$Name = '';
$PasswordError = '';
$Password = '';
$user = 'owais';
$password = 'owais';
 

session_start();



if(isset($_POST['submit'])){
	/*$e = 0;
	$c = 0;
	$found = 0;
	
	if(empty($_POST['UName']))
		{
			$e++;
			
			$UserNameError = "Name is Required";
		}
		else
		{
			$Name  = Test_User_Input($_POST['UName']);
			$_SESSION['username'] = $Name;
		
			if(!preg_match('/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}/',$Name)){
				$c++;
				$UserNameError = "only letters and whitespaces are allowed";
			}
		}
		if(empty($_POST['password'])){
			$e++;
			
			$PasswordError = "Password is Required";
			
			
		}
		else
		{
			$Password  = Test_User_Input($_POST['password']);
			$_SESSION['password']= $Password;
			
			if(!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/',$Password)){
				$c++;
				$PasswordError = "Not a valid format";
			}
		}
		if($e = 0 && $c = 0){
			$connection = mysqli_connect('localhost','root','','ecommapp');
			$SearchQuery = "SELECT * FROM users";
			$Execute = mysqli_query($connection,$SearchQuery);
			while($DataRow = mysqli_fetch_array($Execute)){
	
			$username= $DataRow['username'];
			$password = $DataRow['password'];
			if($username === $_POST['UName'] && $password === $_POST['password'])
			{
				$found++;
				echo "found";
				break;
			}
			
			}*/
			
			if($_POST['UName'] = $user && $_POST['password'] = $password){
				$_SESSION['username'] = $user;
				$_SESSION['password']= $password;
				?>

				<script type="text/javascript">
				window.location.href = 'Admin.php';
				</script>
				
				<?php
				
			}
			
			
		}




?>


<!DOCTYPE html>
<html>

<head>
	<title>log in</title>
	<h1>Log In</h1>
</head>
<style type = 'text/css'>
input[type = 'text'],input[type = 'password']{
	
	border:1px solid dashed;
	width : 480px;
	background-color:rgb(221,216,212);
	padding:0.5em;
	font-size:1.0em;
	
}
div{
	
width :500px;

	
}
.Error{
	
	color:red;
	
}
</style>
<body>

<div>
	<form action = '#', method ='post'>
		<fieldset>
		UserName:<br><input type = 'text' name = 'UName' value = ''></input>*<span class = 'Error'><?php echo $UserNameError; ?></span><br>
		Password:<br><input type = 'password' name = 'password' value = '' ></input>*<span class = 'Error'><?php echo $PasswordError; ?></span><br>
		<br><input type = 'submit' name = 'submit' value = 'Log In'></input>
		<a href = 'Admin.php'>login</a>
		
		</fieldset>
	
	
	
	</form>

</div>
</body>
</html>