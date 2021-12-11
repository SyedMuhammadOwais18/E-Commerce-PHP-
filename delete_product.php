
<?php
session_start();
$count = count($_SESSION['cart']);
echo $count;
print_r($_SESSION['cart']);
// foreach($_SESSION['cart'] as $key => $value)
// {
//     if($value["id"] == $_GET['product_id']){
//         //  unset($_SESSION['cart'][$key]);
//         // $SESSION['cart'][$key] = array_merge($SESSION['cart'][$key]);
       
//         array_splice($_SESSION['cart'][$key],$_SESSION['cart'][$key]['id']);
//         print_r($_SESSION['cart']);
//         // echo "<script>alert('product has been deleted')</script>";
//         // echo "<script>window.location='cart.php'</script>";
//     }
    
//     //print_r($_SESSION['cart']);
// }
for($i = 0 ;$i < $count ; $i++)
{     $id = $_SESSION['cart'][$i]['id'];
    //    echo $id;
    if($id == $_GET['product_id'])
    {
        unset($_SESSION['cart'][$i]);
        $_SESSION['cart']= array_values($_SESSION['cart']);
          echo "<script>alert('product has been deleted')</script>";
          echo "<script>window.location='latest_cart.php'</script>";
        //print_r($_SESSION['cart'][$i]);
        //print_r($_SESSION['cart'][$i]['id']);
        //print_r($_SESSION['cart'][0]);
        
    }
   
}

?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel = "stylesheet" href = "styles.css">
	<!--<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">-->
	
	<title>Cart Page</title>

</head>


<body>
<form action = 'End_page.php' method = 'POST'>
<button type = 'submit' name = 'submit' class = 'btn btn-success flex-fill'>Buy</button>
</form>


</body>
</html>

