

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel = "stylesheet" href = "header.css">
    <link rel = "stylesheet" href = "styles.css">
    <link rel = "stylesheet" href = "footer.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <title>Search</title>
</head>
<style>
.mains {
    /* margin-left: 160px; Same as the width of the sidenav */
    font-size: 15px;/* Increased text to enable scrolling */
    padding: 25px 0px;
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
</style>
<body>
    <form action="" method="post">
        <input name="searched" type="text" placeholder="Search ElectroMate">
        <select name="category" id="category">
            <option value="name">Laptop</option>
            <option value="name1">Mobile</option>
            <option value="name2">Ram</option>
            <option value="name3">Processor</option>
            <option value="name4">Psu</option>
            <option value="name5">Gpu</option>
            <option value="name6">Storage Device</option>
            <option value="name7">Motherboard</option>
        </select>
        <input type="submit" value="search" name="submit">
    </form>
</body>
</html>

<?php
$sql = '';
$connection = mysqli_connect('localhost','root','','ecommapp');
if($connection)
    {
    echo"connected";
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
            echo "<h6> Name : {$l1_name} </h6>";
            echo "<h6> Price : {$l1_price}</h6>";
            echo " <button class = 'btn btn-danger flex-fill' ><a href = '#' 
            style = 'color:white'>More Details</a></button>";
            
            
         }
         
    }
    if($search_cat == 'name1'){
        $sql="select * from mobile where mobile_name like '%{$search_value}%'";
        $Execute = mysqli_query($connection,$sql);

  while($DataRow = mysqli_fetch_assoc($Execute)){
     $m1_name= $DataRow['mobile_name'];
     $m1_img1= $DataRow['img1'];
    $m1_price= $DataRow['price'];
    echo "<h6> Name : {$m1_name} </h6>";
    echo "<h6> Price : {$m1_price}</h6>";
    echo " <button class = 'btn btn-danger flex-fill' ><a href = '#' 
    style = 'color:white'>More Details</a></button>";
  
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
            echo "<h6> Name : {$r_name} </h6>";
    echo "<h6> Price : {$r_price}</h6>";
    echo " <button class = 'btn btn-danger flex-fill' ><a href = '#' 
    style = 'color:white'>More Details</a></button>";
            
        
            
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
            echo "<h6> Name : {$pr_name} </h6>";
    echo "<h6> Price : {$pr_price}</h6>";
    echo " <button class = 'btn btn-danger flex-fill' ><a href = '#' 
    style = 'color:white'>More Details</a></button>";
            
            
        
            
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
            
            
            echo "<h6> Name : {$p_name} </h6>";
            echo "<h6> Price : {$p_price}</h6>";
            echo " <button class = 'btn btn-danger flex-fill' ><a href = '#' 
            style = 'color:white'>More Details</a></button>";
            
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
            
            
            echo "<h6> Name : {$g_name} </h6>";
            echo "<h6> Price : {$g_price}</h6>";
            echo " <button class = 'btn btn-danger flex-fill' ><a href = '#' 
            style = 'color:white'>More Details</a></button>";
            
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
            
            
            echo "<h6> Name : {$s_name} </h6>";
            echo "<h6> Price : {$s_price}</h6>";
            echo " <button class = 'btn btn-danger flex-fill' ><a href = '#' 
            style = 'color:white'>More Details</a></button>";
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
            echo "<h6> Name : {$m_name} </h6>";
            echo "<h6> Price : {$m_price}</h6>";
            echo " <button class = 'btn btn-danger flex-fill' ><a href = '#' 
            style = 'color:white'>More Details</a></button>";
            
            
        }

     }
   
    
   

}


?>