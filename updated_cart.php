

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel = "stylesheet" href = "header.css">
    <link rel = "stylesheet" href = "styles.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="cart.css">


</head>
<body>
<div class='container'>
	<table id='cart1' class='table table-hover table-condensed'>
    				<thead>
						<tr>
							<th style='width:50%'>Product</th>
							<th style='width:10%'>Price</th>
							<th style='width:8%'>Quantity</th>
							<th style='width:22%' class='text-center'>Subtotal</th>
							<th style='width:10%'></th>
						</tr>
					</thead>
					<tbody>




<?php

session_start();
$total1 = 0;
print_r($_SESSION['cart']);
$connection = mysqli_connect('localhost','root','','ecommapp');
if($connection)
    {
    echo"connected";
    }    
$index = 0;
//    session_unset();
//    session_destroy();
//function
function cart($id,$name,$price,$quantity,$total)
{
   $GLOBALS['total1'] = $GLOBALS['total1'] + $total;
         
    echo "<form action = 'updated_cart.php' method = 'post'>
    <tr>
    <td data-th='Product'>
        <div class='row'>
            <div class='col-sm-10'>
                <h4 class='nomargin'>{$name}</h4>
            </div>
        </div>
    </td>
    <td data-th='Price'>{$price}</td>
    <td data-th='Quantity'>
        <input maxlength='1' min='1' max='2' type='number' name='qty' class='form-control text-center' value={$quantity}>
    </td>
    <td data-th='Subtotal' class='text-center'>{$total}</td>
    <td class='actions' data-th=''>
    
        <button class='btn btn-info btn-sm' type = 'submit' name = 'submit1'><i class='fa fa-refresh'></i></button>
    
    
        <button class='btn btn-danger btn-sm'><a style = 'color:white' href = 'delete_product.php?product_id={$id}'><i class='fa fa-trash-o'></i></a></button>								
    </td>
    </form></tr>";

 
if(isset($_POST['submit1']))
{
    //echo "<a href = 'update_quantity.php?product_id=<?php{$id}&quantity={$_POST['qty']}
    echo "<script>window.location='update_quantity.php?product_id={$id}&quantity={$_POST['qty']}'</script>";
}

    
            
       
     
}



//end function

$cart[] = $_SESSION['cart'];
$count = count($_SESSION['cart']);

//print_r( $cart[0][0]['quantity']);
date_default_timezone_set('UTC');
$today = date("d/m/y");
echo $today;
for($index = 0 ; $index < $count ; $index++)
{
    $id = $cart[0][$index]['id'];
    
    // $id = $cart[0][$index]['id'];
    // $id = $cart[0][$index]['id'];
    
    if($id>=1 && $id<101)
    {
        //echo $id;
        $quantity = $cart[0][$index]['quantity'];
        $ViewQuery = "SELECT mobile.mobie_id,mobile.mobile_name,mobile.price
        FROM mobile  where mobile.mobie_id = '$id'";
        $Execute = mysqli_query($connection,$ViewQuery);
        if (!$Execute) {
        printf("Error: %s\n", mysqli_error($connection));
        exit();
        }
        while($DataRow = mysqli_fetch_array($Execute)){
	
	    $ID = $DataRow['mobie_id'];
	    $MN = $DataRow['mobile_name'];
        $Pr = $DataRow['price'];
        
        }
        $total = $quantity * $Pr;
       // $total1 = $total1+$total;
        cart($ID,$MN,$Pr,$quantity,$total);
        //echo $total;
        ?>
        <!-- <p>ID : <?php echo $ID; ?></p>
        <p>Product Name : <?php echo $MN; ?></p>
        <p>Price : <?php echo $Pr; ?></p>
        <p>Quantity : <?php echo $quantity; ?></p>
        <p>Total : <?php echo $total; ?></p>
        <button class = 'btn btn-danger flex-fill' ><a href = 'delete_product.php?product_id=<?php echo $ID; ?>' 
        style = 'color:white'>Remove</a></button> -->
   <?php  
      // echo "<p $Pr ></p>";
      
    }


    if($id>=101 && $id<201)
    {
        $quantity = $cart[0][$index]['quantity'];
        $ViewQuery = "SELECT laptop_id,laptop_name,laptop_price
        FROM laptop  where laptop.laptop_id = '$id'";
        $Execute = mysqli_query($connection,$ViewQuery);
        if (!$Execute) {
        printf("Error: %s\n", mysqli_error($connection));
        exit();
        }
        while($DataRow = mysqli_fetch_array($Execute)){
	
	    $ID = $DataRow['laptop_id'];
	    $MN = $DataRow['laptop_name'];
        $Pr = $DataRow['laptop_price'];
        
        }
        $total = $quantity * $Pr;
       // $total1 = $total1+$total;
        cart($ID,$MN,$Pr,$quantity,$total);
        //echo $total;
        
        ?>
        
        <!-- <p>ID : <?php echo $ID; ?></p>
        <p>Product Name : <?php echo $MN; ?></p>
        <p>Product Price : <?php echo $Pr; ?></p>
        <p>Quantity : <?php echo $quantity; ?></p>
        <p>Total : <?php echo $total; ?></p>
        <button class = 'btn btn-danger flex-fill' ><a href = 'delete_product.php?product_id=<?php echo $ID; ?>' 
        style = 'color:white'>Remove</a></button> -->
        
        <?php 
       
    }
    if($id>=201 && $id<301)
    {
        $quantity = $cart[0][$index]['quantity'];
        $ViewQuery = "SELECT gpu_id,gpu_name,gpu_price
        FROM gpu  where gpu_id = '$id'";
        $Execute = mysqli_query($connection,$ViewQuery);
        if (!$Execute) {
        printf("Error: %s\n", mysqli_error($connection));
        exit();
        }
        while($DataRow = mysqli_fetch_array($Execute)){
	
	    $ID = $DataRow['gpu_id'];
	    $MN = $DataRow['gpu_name'];
        $Pr = $DataRow['gpu_price'];
        
        }
        $total = $quantity * $Pr;
       // $total1 = $total1+$total;
        cart($ID,$MN,$Pr,$quantity,$total);
        //echo $total;
        ?>
        <!-- <p>ID : <?php echo $ID; ?></p>
        <p>Product Name : <?php echo $MN; ?></p>
        <p>Price : <?php echo $Pr; ?></p>
        <p>Quantity : <?php echo $quantity; ?></p>
        <p>Total : <?php echo $total; ?></p>
        <button class = 'btn btn-danger flex-fill' ><a href = 'delete_product.php?product_id=<?php echo $ID; ?>' 
        style = 'color:white'>Remove</a></button> -->
        <?php 
    }
    if($id>=301 && $id<401)
    {
        $quantity = $cart[0][$index]['quantity'];
        $ViewQuery = "SELECT sd_id,storage_name,sd_price
        FROM storage_device  where sd_id = '$id'";
        $Execute = mysqli_query($connection,$ViewQuery);
        if (!$Execute) {
        printf("Error: %s\n", mysqli_error($connection));
        exit();
        }
        while($DataRow = mysqli_fetch_array($Execute)){
	
	    $ID = $DataRow['sd_id'];
	    $MN = $DataRow['storage_name'];
        $Pr = $DataRow['sd_price'];
        
        }
        $total = $quantity * $Pr;
        //$total1 = $total1+$total;
        cart($ID,$MN,$Pr,$quantity,$total);

        //echo $total;
        
        ?>

        <!-- <p>ID : <?php echo $ID; ?></p>
        <p>Product Name : <?php echo $MN; ?></p>
        <p>Price : <?php echo $Pr; ?></p>
        <p>Quantity : <?php echo $quantity; ?></p>
        <p>Total : <?php echo $total; ?></p>
        <button class = 'btn btn-danger flex-fill' ><a href = 'delete_product.php?product_id=<?php echo $ID; ?>' 
        style = 'color:white'>Remove</a></button> -->
        <?php 
    }
    if($id>=401 && $id<501)
    {
        $quantity = $cart[0][$index]['quantity'];
        $ViewQuery = "SELECT ram_id,ram_name,ram_price
        FROM ram  where ram_id = '$id'";
        $Execute = mysqli_query($connection,$ViewQuery);
        if (!$Execute) {
        printf("Error: %s\n", mysqli_error($connection));
        exit();
        }
        while($DataRow = mysqli_fetch_array($Execute)){
	
	    $ID = $DataRow['ram_id'];
	    $MN = $DataRow['ram_name'];
        $Pr = $DataRow['ram_price'];
        
        }
        $total = $quantity * $Pr;
       // $total1 = $total1+$total;
        cart($ID,$MN,$Pr,$quantity,$total);
       // echo $total;
        ?>
        <!-- <p>ID : <?php echo $ID; ?></p>
        <p>Product Name : <?php echo $MN; ?></p>
        <p>Price : <?php echo $Pr; ?></p>
        <p>Quantity : <?php echo $quantity; ?></p>
        <p>Total : <?php echo $total; ?></p>
        <button class = 'btn btn-danger flex-fill' ><a href = 'delete_product.php?product_id=<?php echo $ID; ?>' 
        style = 'color:white'>Remove</a></button> -->
        <?php 
    }
    if($id>=501 && $id<601)
    {
        $quantity = $cart[0][$index]['quantity'];
        $ViewQuery = "SELECT pre_id,pre_name,pre_price
        FROM processor  where pre_id = '$id'";
        $Execute = mysqli_query($connection,$ViewQuery);
        if (!$Execute) {
        printf("Error: %s\n", mysqli_error($connection));
        exit();
        }
        while($DataRow = mysqli_fetch_array($Execute)){
	
	    $ID = $DataRow['pre_id'];
	    $MN = $DataRow['pre_name'];
        $Pr = $DataRow['pre_price'];
        
        }
        $total = $quantity * $Pr;
        //$total1 = $total1+$total;
        cart($ID,$MN,$Pr,$quantity,$total);
        
        ?>
       
        <!-- <p>ID : <?php echo $ID; ?></p>
        <p>Product Name : <?php echo $MN; ?></p>
        <p>Price : <?php echo $Pr; ?></p>
        <p>Quantity : <?php echo $quantity; ?></p>
        <p>Total : <?php echo $total; ?></p>
        <button class = 'btn btn-danger flex-fill' ><a href = 'delete_product.php?product_id=<?php echo $ID; ?>' 
        style = 'color:white'>Remove</a></button> -->
        <?php 
    }
    if($id>=601 && $id<701)
     {
        $quantity = $cart[0][$index]['quantity'];
        $ViewQuery = "SELECT mobd_id,mobd_name,mobd_price
        FROM motherboard  where mobd_id = '$id'";
        $Execute = mysqli_query($connection,$ViewQuery);
        if (!$Execute) {
        printf("Error: %s\n", mysqli_error($connection));
        exit();
        }
        while($DataRow = mysqli_fetch_array($Execute)){
	
	    $ID = $DataRow['mobd_id'];
	    $MN = $DataRow['mobd_name'];
        $Pr = $DataRow['mobd_price'];
        
        }
        $total = $quantity * $Pr;
       // $total1 = $total1+$total;
        cart($ID,$MN,$Pr,$quantity,$total);
        //echo $total;
        ?>
        <!-- <p>ID :<?php echo $ID; ?></p>
        <p>Product Name :<?php echo $MN; ?></p>
        <p>Price : <?php echo $Pr; ?></p>
        <p>Quantity :  <?php echo $quantity; ?></p>
        <p>Total : <?php echo $total; ?></p>
        <button class = 'btn btn-danger flex-fill' ><a href = 'delete_product.php?product_id=<?php echo $ID; ?>' 
        style = 'color:white'>Remove</a></button> -->
        <?php     
    }
    if($id>=701 && $id<801)
    {
        $quantity = $cart[0][$index]['quantity'];
        $ViewQuery = "SELECT psu_id,psu_name,psu_price
        FROM psu  where psu_id = '$id'";
        $Execute = mysqli_query($connection,$ViewQuery);
        if (!$Execute) {
        printf("Error: %s\n", mysqli_error($connection));
        exit();
        }
        while($DataRow = mysqli_fetch_array($Execute)){
	
	    $ID = $DataRow['psu_id'];
	    $MN = $DataRow['psu_name'];
        $Pr = $DataRow['psu_price'];
        
        }
        $total = $quantity * $Pr;
       // $total1 = $total1+$total;
        cart($ID,$MN,$Pr,$quantity,$total);
        //echo $total;
        ?>
        <!-- <p> ID: <?php echo $ID; ?></p>
        <p> Product Name: <?php echo $MN; ?></p>
        <p> Price : <?php echo $Pr; ?></p>
        <p> Quantity : <?php echo $quantity; ?></p>
        <p> Total :<?php echo $total; ?></p>
        <button class = 'btn btn-danger flex-fill' ><a href = 'delete_product.php?product_id=<?php echo $ID; ?>' 
        style = 'color:white'>Remove</a></button> -->
        <?php 
    }
    
    
}


?>




</tbody>
					<tfoot>
						<tr>
							<td><a href='home.php' class='btn btn-primary'><i class='fa fa-angle-left'></i> Continue Shopping</a></td>
							<td colspan='2' class="hidden-xs"></td>
							<td class='hidden-xs text-center'><strong>Total $1.99</strong></td>
							<td><a href='End_page.php' class='btn btn-success btn-block'>Checkout <i class='fa fa-angle-right'></i></a></td>
						</tr>
					</tfoot>
				</table>
</div>

</body>
</html>


<!-- <!DOCTYPE html>
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
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">-->
	
	<!-- <title>Cart Page</title>

</head>


<body>
<form action = 'End_page.php' method = 'POST'>
<button type = 'submit' name = 'submit' class = 'btn btn-success flex-fill'>Buy</button>
</form>


</body>
</html> --> -->


