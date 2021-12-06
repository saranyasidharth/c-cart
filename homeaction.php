<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db.php";
?><!DOCTYPE html>
<html>
<head>
<style>
.dropbtn {
  background-color: #ffffff;
  color: white;
  /* padding: 16px;
  font-size: 16px; */
  border: none;
  cursor: pointer;
}

@red : #E2061B;
@blue: #20C2F7;
@green: #37D631;
@yellow: #ffcc00;

h1 {
    position: relative;
    font-size: 45px;
    margin: 15px 0;
    display: inline-block;
    
    &:after {
        content:'';
        position: absolute;
        bottom: -2px;
        left: 0;
        right: 0;
        height: 2px;
        background-color: #fff;
        border-radius: 0px;
    }
}

.link-cont {
    position: relative;
    font-size: 24px;
}

.link {
    display: inline-block;
    position: relative;
    text-decoration: none;
    padding: 10px 0;
    color: #fff;
}

.link-wrapper {
    position: relative;
    display: block;
    padding: 20px 0;
}

.inner-wrapper {
    position: relative;
    display: inline-block;
}

/* hover styles */
.hover-1 {
    &:after {
        content:'';
        position: absolute;
        width: 100%;
        height: 3px;
        bottom: 0;
        left: 0;
        background-color: @red;
        transform: scaleX(0);
        transform-origin: bottom right;
        transition: transform 0.3s;
    }

    &:hover {
        &:after {
            transform-origin: bottom left;
            transform: scaleX(1);
        }
    }
}

.hover-2 { 
    &:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100%;
        height: 3px;
        transform: scaleX(0);
        background-color: @blue;

        transition: transform 0.3s;
    }

    &:hover {
        &:after {
            transform: scaleX(1);    
        }
    }
}

.hover-3 { 
    &:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 3px;
        background-color: @green;
        transform: scaleX(0);
        transform-origin: bottom left;

        transition: transform 0.3s;
    }

    &:hover {
        &:after {
            transform: scaleX(1);
        }
    }
}

.hover-4 {  
    &:after {
        content: '';
        position: absolute;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 3px;
        background-color: @yellow;
        transform: scaleX(0);
        transform-origin: bottom right;

        transition: transform 0.3s;
    }

    &:hover {
        &:after {
            transform: scaleX(1);
        }
    }
}

.hover-5 {
    &:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100%;
        height: 3px;
        transform: scaleY(0);
        background-color: @red;

        transition: transform 0.3s;
    }

    &:hover {
        &:after {
            transform: scaleY(1);
        }
    }
}

.hover-6 {
    &:before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 50%;
        height: 3px;
        background-color: @blue;
        transform: scaleX(0);
        transform-origin: bottom left;

        transition: transform 0.3s;
    }

    &:after {
        content: '';
        position: absolute;
        bottom: 0;
        right: 0;
        left : 50%;
        height: 3px;
        background-color: @blue;
        transform: scaleX(0);
        transform-origin: bottom right;

        transition: transform 0.3s;
    }
body{
	background-color:#19171C;
}
    &:hover {
        &:before {
            transform: scaleX(1);
        }

        &:after {
            transform: scaleX(1);
        }
    }
}

.hover-7 {
    &:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 3px;
        background-color: @green;
        transform: scaleX(0);
        transform-origin: top left;

        transition: transform 0.3s;
    }

    &:after {
        content: '';
        position: absolute;
        bottom: 0;
        right: 0;
        width : 100%;
        height: 3px;
        background-color: @green;
        transform: scaleX(0);
        transform-origin: bottom right;

        transition: transform 0.3s;
    }

    &:hover {
        &:before {
            transform: scaleX(1);
        }

        &:after {
            transform: scaleX(1);
        }
    }
}

.hover-8 {
    &:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 3px;
        background-color: @yellow;
        transform: scaleX(0);
        transform-origin: top left;

        transition: transform 0.3s;
    }

    &:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 3px;
        background-color: @yellow;
        transform: scaleX(0);
        transform-origin: top left;

        transition: transform 0.3s;
    }

    &:hover {
    &:before,
        &:after {
            transform: scaleX(1);
        }
    }
}

.hover-9 {
    &:before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 3px;
        background-color: @red;
        transform: scaleX(0);
        transform-origin: top right;

        transition: transform 0.3s;
    }

    &:after {
        content: '';
        position: absolute;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 3px;
        background-color: @red;
        transform: scaleX(0);
        transform-origin: top right;

        transition: transform 0.3s;
    }

    &:hover {
    &:before,
        &:after {
            transform: scaleX(1);
        }
    }
}

.hover-10 {
    &:before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 3px;
        background-color: @blue;
        transform: scaleX(0);

        transition: transform 0.3s;
    }

    &:after {
        content: '';
        position: absolute;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 3px;
        background-color: @blue;
        transform: scaleX(0);

        transition: transform 0.3s;
    }

    &:hover {
    &:before,
        &:after {
            transform: scaleX(1);
        }
    }
}

.hover-11 {
    &:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
        height: 3px;
        transform: scaleY(0);
        background-color: @green;

        transition: transform 0.3s;
    }

    &:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100%;
        height: 3px;
        transform: scaleY(0);
        background-color: @green;

        transition: transform 0.2s;
    }

    &:hover {
    &:before,
        &:after {
            transform: scaleY(1);
        }
    }
}

.hover-12 {
    &:before {
        content:'';
        position: absolute;
        width: 100%;
        height: 3px;
        top: 0;
        left: 0;
        background-color: @yellow;
        transform: scaleX(0);
        transform-origin: top left;

        transition: transform 0.3s;
    }
    
    &:after {
        content:'';
        position: absolute;
        width: 100%;
        height: 3px;
        bottom: 0;
        right: 0;
        background-color: @yellow;
        transform: scaleX(0);
        transform-origin: bottom right;

        transition: transform 0.3s;
    }

    &:hover {
        &:before {
            transform-origin: top right;
            transform: scaleX(1);
        }
        
        &:after {
            transform-origin: bottom left;
            transform: scaleX(1);
        }
    }
}

.wrapper-13 {
    &:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 50%;
        height: 3px;
        background-color: @red;
        transform: scaleX(0);
        transform-origin: top left;

        transition: transform 0.3s;
    }

    &:after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        left : 50%;
        height: 3px;
        background-color: @red;
        transform: scaleX(0);
        transform-origin: top right;

        transition: transform 0.3s;
    }

    .hover-13 {
        &:before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 50%;
            height: 3px;
            background-color: @red;
            transform: scaleX(0);
            transform-origin: bottom left;

            transition: transform 0.3s;
        }

        &:after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            left: 50%;
            height: 3px;
            background-color: @red;
            transform: scaleX(0);
            transform-origin: bottom right;

            transition: transform 0.3s;
        }
        
        &:hover {
            &:before,
            &:after {
                transform: scaleX(1);
            }
        }
    }

    &:hover {
        &:before,
        &:after {
            transform: scaleX(1);
        }
    }
}

.wrapper-14 {
    &:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 3px;
        height: 100%;
        background-color: @blue;
        transform: scaleY(0);

        transition: transform 0.3s;
    }

    &:after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 3px;
        height: 100%;
        background-color: @blue;
        transform: scaleY(0);

        transition: transform 0.3s;
    }

    .hover-14 {
        padding: 10px;

        &:before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 3px;
            background-color: @blue;
            transform: scaleX(0);

            transition: transform 0.3s;
        }

        &:after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 3px;
            background-color: @blue;
            transform: scaleX(0);

            transition: transform 0.3s;
        }
    }

    &:hover {
        &:before, 
        &:after {
            transform: scaleY(1);
        }

        .hover-14 {
            &:before,
            &:after {
                transform: scaleX(1);
            }
        }
    }
}

.wrapper-15 {
    &:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 3px;
        height: 100%;
        background-color: @green;
        transform: scaleY(0);
        transform-origin: top left;

        transition: transform 0.3s;
    }

    &:after {
        content: '';
        position: absolute;
        bottom: 0;
        right: 0;
        width: 3px;
        height: 100%;
        background-color: @green;
        transform: scaleY(0);
        transform-origin: bottom right;

        transition: transform 0.3s;
    }

    .hover-15 {
        padding: 10px;

        &:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: @green;
            transform: scaleX(0);
            transform-origin: top left;

            transition: transform 0.3s;
        }

        &:after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 3px;
            background-color: @green;
            transform: scaleX(0);
            transform-origin: bottom right;

            transition: transform 0.3s;
        }
    }

    &:hover {
        &:before, 
        &:after {
            transform: scaleY(1);
        }

        .hover-15 {
            &:before,
            &:after {
                transform: scaleX(1);
            }
        }
    }
}

.wrapper-16 {
    &:before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 3px;
        height: 100%;
        background-color: @yellow;
        transform: scaleY(0);
        transform-origin: bottom left;

        transition: transform 0.3s;
    }

    &:after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 3px;
        height: 100%;
        background-color: @yellow;
        transform: scaleY(0);
        transform-origin: top right;

        transition: transform 0.3s;
    }

    .hover-16 {
        padding: 10px;
        
        &:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: @yellow;
            transform: scaleX(0);
            transform-origin: top left;

            transition: transform 0.3s;
        }

        &:after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 3px;
            background-color: @yellow;
            transform: scaleX(0);
            transform-origin: bottom right;

            transition: transform 0.3s;
        }
    }

    &:hover {
        &:before, 
        &:after {
            transform: scaleY(1);
        }

        .hover-16 {
            &:before,
            &:after {
                transform: scaleX(1);
            }
        }
    }
}

.wrapper-17 {
    &:before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 3px;
        height: 100%;
        background-color: @red;
        transform: scaleY(0);
        transform-origin: bottom left;
        transition: transform 0.2s;

    }

    &:after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 3px;
        height: 100%;
        background-color: @red;
        transform: scaleY(0);
        transform-origin: top right;
        transition: transform 0.2s 0.2s;
    }

    .hover-17 {
        padding: 10px;

        &:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: @red;
            transform: scaleX(0);
            transform-origin: top left;
            transition: transform 0.2s 0.3s;
        }

        &:after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 3px;
            background-color: @red;
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.2s 0.1s;
        }
    }

    &:hover {
        &:before {
            transform: scaleY(1);
            transition: transform 0.2s 0.3s;
        } 
        
        &:after {
            transform: scaleY(1);
            transition: transform 0.2s 0.1s;
        }

        .hover-17 {
            &:before {
                transform: scaleX(1);
                transition: transform 0.2s;
            }
            
            &:after {
                transform: scaleX(1);
                transition: transform 0.2s 0.2s;
            }
        }
    }
}


.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: none;
}
</style>
</head>
<body background="#19171C">



<?php
if(isset($_POST["categoryhome"])){
	$category_query = "SELECT * FROM categories";
    
	$run_query = mysqli_query($con,$category_query) or die(mysqli_error($con));
	echo "
		
            
            
				<!-- responsive-nav -->
				<div style='background:#19171C' id='responsive-nav' >
					<!-- NAV -->
					<ul class='main-nav nav navbar-nav link-wrapper'>
                    <li class='link hover-1'><a href='index.php'>Home </a></li>
			<div class='dropdown  link-wrapper' >
			<a href='store.php' class='link hover-1 active dropbtn' style='color:black;left:.5cm;'>Shop By Category</a>
			
			
	";
		echo "</div>
		</div></ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
               
			";
	}

if(isset($_POST["page"])){
	$sql = "SELECT * FROM products";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
	$pageno = ceil($count/2);
	for($i=1;$i<=$pageno;$i++){
		echo "
			<li><a href='#product-row' page='$i' id='page'>$i</a></li>
            
            
		";
	}
}
if(isset($_POST["getProducthome"])){
	$limit = 3;
	if(isset($_POST["setPage"])){
		$pageno = $_POST["pageNumber"];
		$start = ($pageno * $limit) - $limit;
	}else{
		$start = 0;
	}
	$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id LIMIT $start,$limit";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
            
            $cat_name = $row["cat_title"];
			echo "
				
                       <div class='product-widget'>
                                <a href='product.php?p=$pro_id'> 
									<div class='product-img'>
										<img src='product_images/$pro_image' alt=''>
									</div>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price'>$pro_price<del class='product-old-price'>$990.00</del></h4>
									</div></a>
								</div>
                        
			";
		}
	}
}


if(isset($_POST["gethomeProduct"])){
	$limit = 9;
	if(isset($_POST["setPage"])){
		$pageno = $_POST["pageNumber"];
		$start = ($pageno * $limit) - $limit;
	}else{
		$start = 0;
	}
    
	$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 71 AND 74";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
        
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
            
            $cat_name = $row["cat_title"];
            
			echo "
				
                        
                                <div class='col-md-3 col-xs-6'>
								<a href='product.php?p=$pro_id'><div class='product'>
									<div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'>-30%</span>
											<span class='new'>NEW</span>
										</div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price<del class='product-old-price'>$990.00</del></h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
										<div class='product-btns'>
											<button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
											<button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
											<button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
									</div>
								</div>
                                </div>
							
                        
			";
		}
        ;
      
}
    
	}
    
if(isset($_POST["get_seleted_Category"]) ||  isset($_POST["search"])){
	if(isset($_POST["get_seleted_Category"])){
		$id = $_POST["cat_id"];
		$sql = "SELECT * FROM products,categories WHERE product_cat = '$id' AND product_cat=cat_id";
	}else {
		$keyword = $_POST["keyword"];
		$sql = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_keywords LIKE '%$keyword%'";
	}
	
	$run_query = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
            $cat_name = $row["cat_title"];
			echo "
					
                        
                        <div class='col-md-4 col-xs-6'>
								<a href='product.php?p=$pro_id'><div class='product'>
									<div class='product-img'>
										<img  src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price<del class='product-old-price'>$990.00</del></h4>
										
										
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' href='#' tabindex='0' class='add-to-cart-btn'><i class='fa fa-shopping-cart'></i> add to cart</button>
									</div>
								</div>
							</div>
			";
		}
	}?></body</html>