<?php
$count = 0;
//$DataRow = '';
//$Images[] = '';
 $connection = mysqli_connect('localhost','root','','ecommapp'); 
 
 $ViewQuery = "SELECT * FROM mobile inner join product on mobile.mobie_id = product.mobile_id";
 
  $Execute = mysqli_query($connection,$ViewQuery);

  while($DataRow = mysqli_fetch_assoc($Execute)){
   // $m_id = $DataRow['mobile_id'];

     $Images[] =  array('m1_id'=> $DataRow['mobie_id'],'m1_name'=> $DataRow['mobile_name'],'m1_img1'=> $DataRow['img1'],'m1_stock'=> $DataRow['stock_quantity']
     ,'m1_price'=> $DataRow['price']);
        //    $m1_name = $DataRow['mobile_name'];
        //     $m1_img1 = $DataRow['img1'];
        //   $m1_stock = $DataRow['stock_quantity'];
     

    
//  $count++;
    
  }  
 // print_r($Images);
 
 


?>


<?php
$count = 0;
 $connection = mysqli_connect('localhost','root','','ecommapp'); 
 $ViewQuery = "SELECT * FROM laptop inner join product on laptop.laptop_id = product.laptop_id";
$Execute = mysqli_query($connection,$ViewQuery);

 while($DataRow1 = mysqli_fetch_assoc($Execute)){
    $l_id = $DataRow1['laptop_id'];
    $Images1[] =  array('l1_id' => $DataRow1['laptop_id'],'l1_name'=> $DataRow1['laptop_name'],'l1_img1'=> $DataRow1['img1'],'l1_stock'=> $DataRow1['stock_quantity']
    ,'l1_price'=> $DataRow1['laptop_price']);
    
    
 }

 print_r($Images1);
?>


<?php
$connection = mysqli_connect('localhost','root','','ecommapp'); 
$ViewQuery = "SELECT * FROM motherboard inner join product on motherboard.mobd_id = product.mobo_id";
$Execute = mysqli_query($connection,$ViewQuery);
$count = 0;
while($DataRow = mysqli_fetch_array($Execute)){
    $m_id = $DataRow['mobd_id'];
	$m_name = $DataRow['mobd_name'];
    $m_stock = $DataRow['stock_quantity'];
    $m_img1=$DataRow['img1'];
    $m_price=$DataRow['mobd_price'];
    
break;
    
}



$ViewQuery = "SELECT * FROM ram inner join product on ram.ram_id = product.ram_id";
$Execute = mysqli_query($connection,$ViewQuery);
$count = 0;
while($DataRow = mysqli_fetch_array($Execute)){
    $r_id = $DataRow['ram_id'];
	$r_name = $DataRow['ram_name'];
    $r_stock = $DataRow['stock_quantity'];
    $r_img1=$DataRow['img1'];
    $r_price=$DataRow['ram_price'];
    
break;
    
}

$ViewQuery = "SELECT * FROM gpu inner join product on gpu.gpu_id = product.gpu_id";
$Execute = mysqli_query($connection,$ViewQuery);
$count = 0;
while($DataRow = mysqli_fetch_array($Execute)){
    $g_id = $DataRow['gpu_id'];
	$g_name = $DataRow['gpu_name'];
    $g_stock = $DataRow['stock_quantity'];
    $g_img1=$DataRow['img1'];
    $g_price=$DataRow['gpu_price'];
    
    
break;
    
}

$ViewQuery = "SELECT * FROM psu inner join product on psu.psu_id = product.psu_id";
$Execute = mysqli_query($connection,$ViewQuery);
$count = 0;
while($DataRow = mysqli_fetch_array($Execute)){
    $p_id = $DataRow['psu_id'];
	$p_name = $DataRow['psu_name'];
    $p_stock = $DataRow['stock_quantity'];
    $p_img1=$DataRow['img1'];
    $p_price=$DataRow['psu_price'];
    
    
break;
    
}

$ViewQuery = "SELECT * FROM processor inner join product on processor.pre_id = product.pre_id";
$Execute = mysqli_query($connection,$ViewQuery);
$count = 0;
while($DataRow = mysqli_fetch_array($Execute)){
    $pr_id = $DataRow['pre_id'];
	$pr_name = $DataRow['pre_name'];
    $pr_stock = $DataRow['stock_quantity'];
    $pr_img1=$DataRow['img1'];
    $pr_price=$DataRow['pre_price'];
    
    
break;
    
}



 $ViewQuery = "SELECT * FROM storage_device inner join product on storage_device.sd_id = product.sd_id";
$Execute = mysqli_query($connection,$ViewQuery);
$count = 0;
while($DataRow = mysqli_fetch_array($Execute)){
    $s_id = $DataRow['sd_id'];
	$s_name = $DataRow['storage_name'];
    $s_stock = $DataRow['stock_quantity'];
    $s_img1=$DataRow['img1'];
    $s_price=$DataRow['sd_price'];
    
    
break;
}




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
   
	<!--<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">-->
	
	<title>test image</title>
	
</head>
<style>
.row-content{
    margin: 0px auto;
    padding: 50px 0px 50px 0px;
    border-bottom: 1px ridge;
    min-height:400px;
}

.carousel{
    background : grey;

}
.carousel-item{
    height:300px;
}
.carousel-item img{
    position:absolute;
    top:0px;
    left:0px;
    min-height: 300px;
    width : 500px;
}
#carouselbutton{
    right:0px;
    position:absolute;
    bottom:0px;
}

</style>

<body>
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

                                <!-- <h2 >Uthappizza <span class = "badge badge-danger">HOT</span><span class = "badge badge-pill badge-secondary">$4.99</span> </h2>
                                <p class = "d-none d-sm-block"> A unique combination of Indian Uthappam (pancake) and Italian pizza, topped with Cerignola olives, ripe vine cherry tomatoes, Vidalia onion, Guntur chillies and Buffalo Paneer.</p> -->
                            </div>

                        </div>
                        <div class = "carousel-item  ">
                            <img class = "d-block image-fluid"
                              src="img/carousel 2.jpg" alt="img2"  />
                            <div class = "carousel-caption d-none d-md-block" >

                                <!-- <h2 >Weekend Grand Buffet <span class = "badge badge-danger">NEW</span></h2>
                                <p class = "d-none d-sm-block">Featuring mouthwatering combinations with a choice of five different salads, six enticing appetizers, six main entrees and five choicest desserts. Free flowing bubbly and soft drinks. All for just $19.99 per person </p> -->
                            </div>

                        </div>
                        <div class = "carousel-item ">
                            <img class = "d-block image-fluid"
                            src="img/caurosel 3.jpg" alt="img3"  />
                            <div class = "carousel-caption d-none d-md-block" >
                                <!-- <h2 >Alberto Somayya</h2>
                                <h4>Executive Chef</h4>
                                <p>Award winning three-star Michelin chef with wide International experience having worked closely with whos-who in the culinary world, he specializes in creating mouthwatering Indo-Italian fusion experiences. </p> -->
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

<div class = 'container'>
    <div class = 'row'>
        <div class = 'col-sm offset-sm-4'>
            <h1 style = 'margin-bottom:40px; margin-top:20px;'> MOBILE</h1>

        </div>


    </div>


</div>

<div class = 'row'>
 
  <?php 
      foreach($Images as $im)
        
      {?>
    <div class = 'col-sm-3 offset-sm-1'>
      
     
            <div class = 'card'>
                <div class = 'card-body'>
                    <img src = '<?php echo $im['m1_img1']; ?> ' alt = 'img1' class = 'img-responsive' height = '150' style = 'width : 150px;  margin-left:auto; margin-right:auto; display:block;'>
        
                    <div style = 'text-align:center;'>
                        <a href = 'mobile_inf.php'> <?php echo $im['m1_name']; ?></a>
                    </div><!-- for name-->
                    <div style = 'text-align:center;'>
                     Price : <?php echo $im['m1_price']; ?>
                    </div>
                    <div style = 'text-align:center;'>
                     availability : <?php if($im['m1_stock']>0){
                         echo "in stock";
                     }else{
                         echo "out stock";
                        } ?>
                </div><!-- for stock-->
                <div class = 'btn-group d-flex align-items-center' >
                <form action = 'processor_cat.php' method = 'post'>
                            <input type = 'hidden' name = 'price' value = <?php echo $im['pr_price'] ; ?>>
                            <input type = 'hidden' name = 'stock' value = <?php echo $im['pr_stock'] ; ?>>
                            <input type = 'hidden' name = 'pr_id' value = <?php echo $im['pr_id'] ; ?>>
                        <b><span class="dark-grey">Quantity:</b></span><input maxlength="1" style="border-color:#f5f5f5" type="number" min="1" max="2"  name="qty" ></br>
                        <button type = 'submit' name = 'submit' class = 'btn btn-success flex-fill'>Add to cart</button></br>
                        </form>
                        <button class = 'btn btn-danger flex-fill' ><a href = '#' style = 'color:white'>More Details</a></button>

                </div>
            </div>
        </div>
    </div>
    
     <?php }?>
     
</div>
     
        <!-- <div class = 'card'>
            <div class = 'card-body'>
                <img src = '<?php //echo $m1_img1;  ?> ' alt = 'img1' class = 'img-responsive' style = 'width:75%; 
                margin-left:auto; margin-right:auto; display:block;'  >
                <div style = 'padding-left:30%; padding-top:5%;'>
                    <a href = '#'> <?php// echo $m1_name; ?></a>
                </div>--><!-- for name-->
                <!-- <div style = 'padding-left:30%; padding-top:6%;'>
                    availability : <?php //if($m1_stock>0){
                    //     echo "in stock";
                    // }else{
                    //     echo "out stock";
                    // } ?>
                </div>--><!-- for stock-->
            <!-- </div>
        </div>
    </div> end column --> 
    <!-- <div class = 'col-sm-3'>
        <div class = 'card'>
            <div class= 'card-body'>
                <img src = '<?php //echo $m2_img1;  ?> ' alt = 'img2' class = 'img-responsive' style = 'width : 75%;
                margin-left:auto; margin-right:auto; display:block;' >
                <div style = 'padding-left:30%; '>
                <a href = '#' > <?php //echo $m2_name; ?></a>
                </div>
                <div style = 'padding-left:40%; padding-top:2.5%; margin-bottom:-1%;'>
                availability : <?//php if($m2_stock>0){
                    //     echo "in stock";
                    // }else{
                    //     echo "out stock";
                    // } ?>
                </div>  
            </div>
        </div>
    </div> -->
    <!-- <div class = 'col-sm-3'>
        <div class = 'card'>
            <div class = 'card-body'>
                <img src = '<?php //echo $m3_img1;  ?> ' alt = 'img3' class = 'img-responsive' style = 'width : 100%; 
                margin-left:auto; margin-right:auto; display:block; margin-bottom:13%;' >
                <div style = 'padding-left:40%; padding-top:5%;'>
                    <a href = '#'> <?php //echo $m3_name; ?></a>
                </div>
                <div style = 'padding-left:40%; padding-top:5%;'>
                availability : <?php //if($m3_stock>0){
                    //     echo "in stock";
                    // }else{
                    //     echo "out stock";
                    // } ?>
                </div>
            </div>
        </div>
    </div> 


</div> -->

<div class = 'container'>
    <div class = 'row'>
        <div class = 'col-sm offset-sm-4'>
            <h1 style = 'margin-bottom:40px; margin-top:20px;'> Laptop</h1>

        </div>


    </div>


</div>
<div class = 'row'>
<?php 
      foreach($Images1 as $im)
        
      {?>
    <div class = 'col-sm-3 offset-sm-1'>
        <div class = 'card'>
            <div class = 'card-body'>
                <img src = '<?php echo $im['l1_img1'];  ?> ' alt = 'img1' class = 'img-responsive' height = '150' style = 'width : 150px;
                margin-left:auto; margin-right:auto; display:block;'  >
                <div style = 'text-align:center;'>
                    <a href = 'laptop_inf.php'> <?php echo $im['l1_name']; ?></a>
                </div><!-- for name-->
                <div style = 'text-align:center;'>
                     Price : <?php echo $im['l1_price']; ?>
                    </div>
                <div style = 'text-align:center;'>
                availability : <?php if($im['l1_stock'] > 0){
                        echo "in stock";
                    }else{
                        echo "out stock";
                    } ?>
                </div><!-- for stock-->
                <div class = 'btn-group d-flex align-items-center' >
                <form action = 'processor_cat.php' method = 'post'>
                            <input type = 'hidden' name = 'price' value = <?php echo $im['pr_price'] ; ?>>
                            <input type = 'hidden' name = 'stock' value = <?php echo $im['pr_stock'] ; ?>>
                            <input type = 'hidden' name = 'pr_id' value = <?php echo $im['pr_id'] ; ?>>
                        <b><span class="dark-grey">Quantity:</b></span><input maxlength="1" style="border-color:#f5f5f5" type="number" min="1" max="2"  name="qty" ></br>
                        <button type = 'submit' name = 'submit' class = 'btn btn-success flex-fill'>Add to cart</button></br>
                        </form>
                        <button class = 'btn btn-danger flex-fill' ><a href = '#' style = 'color:white'>More Details</a></button>

                </div>
                
            </div>
        </div>
    </div> <!-- end column-->
    <?php }?>
</div>
    <!-- <div class = 'col-sm-3'>
        <div class = 'card'>
            <div class= 'card-body'>
                <img src = '<?php //echo $l2_img1;  ?> ' alt = 'img2' class = 'img-responsive' style = 'width:70%;
                margin-left:auto; margin-right:auto; display:block;' >
                <div style = 'padding-left:40%; padding-top:5%;'>
                    <a href = '#'> <?php// echo $l2_name; ?></a>
                </div>
                <div style = 'padding-left:40%; padding-top:5%;'>
                availability : <?php //if($l2_stock>0){
                    //     echo "in stock";
                    // }else{
                    //     echo "out stock";
                    // } ?>
                </div>  
            </div>
        </div>
    </div> 
    <div class = 'col-sm-3'>
        <div class = 'card'>
            <div class = 'card-body'>
                <img src = '<?php //echo $l3_img1;  ?> ' alt = 'img3' class = 'img-responsive' style = 'width : 80%;
                margin-left:auto; margin-right:auto; display:block;' >
                <div style = 'padding-left:40%; padding-top:13%;'>
                    <a href = '#'> <?php //echo $l3_name; ?></a>
                </div>
                <div style = 'padding-left:40%; padding-top:5%;'>
                availability : <?php //if($l3_stock>0){
                    //     echo "in stock";
                    // }else{
                    //     echo "out stock";
                    // } ?>
                </div>
            </div>
        </div>
    </div> 


</div>end row -->

<div class = 'container'>
    <div class = 'row'>
        <div class = 'col-sm offset-sm-4'>
            <h1 style = 'margin-bottom:40px; margin-top:20px;'> PC's</h1>

        </div>


    </div>


</div>
<div class = 'row'>
    <div class = 'col-sm-3 offset-sm-1'>
        <div class = 'card'>
            <div class = 'card-body' style = 'margin-bottom: 1%;'>
                <img src = '<?php echo $m_img1;  ?> ' alt = 'img1' class = 'img-responsive' height = '150' style = 'width : 150px; 
                margin-left:auto; margin-right:auto; display:block; '  >
                <div style = 'text-align:center;'>
                <a href = 'mobo_inf.php'> <?php echo $m_name; ?></a>
                </div><!-- for name-->
                <div style = 'text-align:center;'>
                     Price : <?php echo $m_price; ?>
                    </div>
                <div style = 'text-align:center;'>
                availability : <?php if($m_stock>0){
                        echo "in stock";
                    }else{
                        echo "out stock";
                    } ?>
                </div><!-- for stock-->
                <div class = 'btn-group d-flex align-items-center' >
                <form action = 'processor_cat.php' method = 'post'>
                            <input type = 'hidden' name = 'price' value = <?php echo $im['pr_price'] ; ?>>
                            <input type = 'hidden' name = 'stock' value = <?php echo $im['pr_stock'] ; ?>>
                            <input type = 'hidden' name = 'pr_id' value = <?php echo $im['pr_id'] ; ?>>
                        <b><span class="dark-grey">Quantity:</b></span><input maxlength="1" style="border-color:#f5f5f5" type="number" min="1" max="2"  name="qty" ></br>
                        <button type = 'submit' name = 'submit' class = 'btn btn-success flex-fill'>Add to cart</button></br>
                        </form>
                        <button class = 'btn btn-danger flex-fill' ><a href = '#' style = 'color:white'>More Details</a></button>

                </div>
            </div>
        </div>
    </div> <!-- end column-->
    <div class = 'col-sm-3 offset-sm-1'>
        <div class = 'card'>
            <div class= 'card-body'>
                <img src = '<?php echo $pr_img1;  ?> ' alt = 'img2' class = 'img-responsive' height = '150' style = 'width : 150px;
                margin-left:auto; margin-right:auto; display:block; ' >
                <div style = 'text-align:center;'>
                <a href = 'processor_inf.php'> <?php echo $pr_name; ?></a>
                </div>
                <div style = 'text-align:center;'>
                     Price : <?php echo $pr_price ?>
                    </div>
                <div style = 'text-align:center;'>
                availability : <?php if($pr_stock>0){
                        echo "in stock";
                    }else{
                        echo "out stock";
                    } ?>
                </div>  
                <div class = 'btn-group d-flex align-items-center' >
                <form action = 'processor_cat.php' method = 'post'>
                            <input type = 'hidden' name = 'price' value = <?php echo $im['pr_price'] ; ?>>
                            <input type = 'hidden' name = 'stock' value = <?php echo $im['pr_stock'] ; ?>>
                            <input type = 'hidden' name = 'pr_id' value = <?php echo $im['pr_id'] ; ?>>
                        <b><span class="dark-grey">Quantity:</b></span><input maxlength="1" style="border-color:#f5f5f5" type="number" min="1" max="2"  name="qty" ></br>
                        <button type = 'submit' name = 'submit' class = 'btn btn-success flex-fill'>Add to cart</button></br>
                        </form>
                        <button class = 'btn btn-danger flex-fill' ><a href = '#' style = 'color:white'>More Details</a></button>

                </div>
            </div>
        </div>
    </div> <!-- end column-->
    <div class = 'col-sm-3 offset-sm-1'>
        <div class = 'card'>
            <div class = 'card-body' >
                <img src = '<?php echo $p_img1;  ?> ' alt = 'img3' class = 'img-responsive' height = '150' style = 'width : 150px;
                margin-left:auto; margin-right:auto; display:block;' >
                <div style = 'text-align:center;'>
                    <a href = 'psu_inf.php'> <?php echo $p_name; ?></a>
                </div>
                <div style = 'text-align:center;'>
                     Price : <?php echo $p_price; ?>
                    </div>
                <div style = 'text-align:center;'>
                availability : <?php if($p_stock>0){
                        echo "in stock";
                    }else{
                        echo "out stock";
                    } ?>
                </div>
                <div class = 'btn-group d-flex align-items-center' >
                <form action = 'processor_cat.php' method = 'post'>
                            <input type = 'hidden' name = 'price' value = <?php echo $im['pr_price'] ; ?>>
                            <input type = 'hidden' name = 'stock' value = <?php echo $im['pr_stock'] ; ?>>
                            <input type = 'hidden' name = 'pr_id' value = <?php echo $im['pr_id'] ; ?>>
                        <b><span class="dark-grey">Quantity:</b></span><input maxlength="1" style="border-color:#f5f5f5" type="number" min="1" max="2"  name="qty" ></br>
                        <button type = 'submit' name = 'submit' class = 'btn btn-success flex-fill'>Add to cart</button></br>
                        </form>
                        <button class = 'btn btn-danger flex-fill' ><a href = '#' style = 'color:white'>More Details</a></button>

                </div>
            </div>
        </div>
    </div> <!-- end column-->


</div><!-- end row-->
<div class = 'row'>
    <div class = 'col-sm-3 offset-sm-1'>
        <div class = 'card'>
            <div class = 'card-body'>
                <img src = '<?php echo $r_img1;  ?> ' alt = 'img1' class = 'img-responsive' height = '150' style = 'width : 150px;
                margin-left:auto; margin-right:auto; display:block; '  >
                <div style = 'text-align:center;'>
                <a href = 'ram_inf.php'> <?php echo $r_name; ?></a>
                </div><!-- for name-->
                <div style = 'text-align:center;'>
                     Price : <?php echo $r_price ?>
                    </div>
                <div style = 'text-align:center;'>
                availability : <?php if($r_stock>0){
                        echo "in stock";
                    }else{
                        echo "out stock";
                    } ?>
                </div><!-- for stock-->
                <div class = 'btn-group d-flex align-items-center' >
                <form action = 'processor_cat.php' method = 'post'>
                            <input type = 'hidden' name = 'price' value = <?php echo $im['pr_price'] ; ?>>
                            <input type = 'hidden' name = 'stock' value = <?php echo $im['pr_stock'] ; ?>>
                            <input type = 'hidden' name = 'pr_id' value = <?php echo $im['pr_id'] ; ?>>
                        <b><span class="dark-grey">Quantity:</b></span><input maxlength="1" style="border-color:#f5f5f5" type="number" min="1" max="2"  name="qty" ></br>
                        <button type = 'submit' name = 'submit' class = 'btn btn-success flex-fill'>Add to cart</button></br>
                        </form>
                        <button class = 'btn btn-danger flex-fill' ><a href = '#' style = 'color:white'>More Details</a></button>

                </div>
            </div>
        </div>
    </div> <!-- end column-->
    <div class = 'col-sm-3 offset-sm-1'>
        <div class = 'card'>
            <div class= 'card-body'>
                <img src = '<?php echo $s_img1;  ?> ' alt = 'img2' class = 'img-responsive'height = '150' style = 'width : 150px;
                margin-left:auto; margin-right:auto; display:block;' >
                <div style = 'text-align:center;'>
                    <a href = 'storage_device_inf.php'> <?php echo $s_name; ?></a>
                </div>
                <div style = 'text-align:center;'>
                     Price : <?php echo $s_price; ?>
                    </div>
                <div style = 'text-align:center;'>
                availability : <?php if($s_stock>0){
                        echo "in stock";
                    }else{
                        echo "out stock";
                    } ?>
                </div>  
                <div class = 'btn-group d-flex align-items-center' >
                <form action = 'processor_cat.php' method = 'post'>
                            <input type = 'hidden' name = 'price' value = <?php echo $im['pr_price'] ; ?>>
                            <input type = 'hidden' name = 'stock' value = <?php echo $im['pr_stock'] ; ?>>
                            <input type = 'hidden' name = 'pr_id' value = <?php echo $im['pr_id'] ; ?>>
                        <b><span class="dark-grey">Quantity:</b></span><input maxlength="1" style="border-color:#f5f5f5" type="number" min="1" max="2"  name="qty" ></br>
                        <button type = 'submit' name = 'submit' class = 'btn btn-success flex-fill'>Add to cart</button></br>
                        </form>
                        <button class = 'btn btn-danger flex-fill' ><a href = '#' style = 'color:white'>More Details</a></button>

                </div>
            </div>
        </div>
    </div> <!-- end column-->
    <div class = 'col-sm-3 offset-sm-1'>
        <div class = 'card'>
            <div class = 'card-body'>
                <img src = '<?php echo $g_img1;  ?> ' alt = 'img3' class = 'img-responsive' height = '150' style = 'width : 150px;
                margin-left:auto; margin-right:auto; display:block; ' >
                <div style = 'text-align:center;'>
                    <a href = 'gpu_inf.php'> <?php echo $g_name; ?></a>
                </div>
                <div style = 'text-align:center;'>
                     Price : <?php echo $g_price; ?>
                    </div>
                <div style = 'text-align:center;'>
                availability : <?php if($g_stock>0){
                        echo "in stock";
                    }else{
                        echo "out stock";
                    } ?>
                </div>
                <div class = 'btn-group d-flex align-items-center' >
                <form action = 'processor_cat.php' method = 'post'>
                            <input type = 'hidden' name = 'price' value = <?php echo $im['pr_price'] ; ?>>
                            <input type = 'hidden' name = 'stock' value = <?php echo $im['pr_stock'] ; ?>>
                            <input type = 'hidden' name = 'pr_id' value = <?php echo $im['pr_id'] ; ?>>
                        <b><span class="dark-grey">Quantity:</b></span><input maxlength="1" style="border-color:#f5f5f5" type="number" min="1" max="2"  name="qty" ></br>
                        <button type = 'submit' name = 'submit' class = 'btn btn-success flex-fill'>Add to cart</button></br>
                        </form>
                        <button class = 'btn btn-danger flex-fill' ><a href = '#' style = 'color:white'>More Details</a></button>

                </div>
            </div>
        </div>
    </div> <!-- end column-->


</div><!-- end row-->


        


</body>

</html>