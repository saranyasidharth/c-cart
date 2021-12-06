<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>C-CART</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link type="text/css" rel="stylesheet" href="css/accountbtn.css"/>
		
		
		
  
    <style>
       
        #top-header {
              
  
            background: #870000;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #190A05, #870000);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #190A05, #870000); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }
        #footer {
            background: #7474BF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #348AC7, #7474BF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #348AC7, #7474BF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


          color: #1E1F29;
        }
        #bottom-footer {
            background: #7474BF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #348AC7, #7474BF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #348AC7, #7474BF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
          

        }
        .footer-links li a {
          color: #1E1F29;
        }
       
        .glyphicon{
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    }
    .glyphicon-chevron-left:before{
        content:"\f053"
    }
    .glyphicon-chevron-right:before{
        content:"\f054"
    }
        

       
        
        </style>

   </head>
    
	<body style="background-color:#f6f6f6"
 >
		<!-- HEADER -->
		<header>
		
			

			<!-- MAIN HEADER -->
			<div id="header" style="background:#010;">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3" style="height:.5cm;">
							<div class="header-logo">
								<a href="#" class="logo">
									<br>
								<h3 style="color: white;">
                         C-CART&nbsp;<i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </h3>
									
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<!-- <div class="col-md-6">
							<div class="header-search">
								<form id="filter-search">
									<input class="form-control" id="search" type="text" placeholder="Search here" value="<?php echo isset($_GET['filter']) ? $_GET['filter'] : '' ?>">
								</form>
							</div>
						</div> -->
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								

								<!-- Cart -->
								<div class="dropdown" style="left:16cm;position: absolute;">
									<a class="dropdown-tog" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>My Cart</span>
										<div class="badge qty">0</div>
									</a>
									<div class="cart-dropdown"  >
										<div class="cart-list" id="cart_product">
										
											
										</div>
										
										<div class="cart-btns">
												<a href="cart.php" style="width:100%;"><i class="fa fa-shopping-cart"></i>  Go to Cart</a>
											
										</div>
									</div>
										
									</div>
								<!-- /Cart -->
								<?php
                             include "db.php";
                            if(isset($_SESSION["uid"])){
                                $sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[uid]'";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                
                                echo '
                             
                                <div class="dropdownn" style="left:14cm; top:.0cm;">
                                <a href="logout.php"  ><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>
                                
                              </div>';

                            }else{ 
                                echo '
                                <div class="dropdownn" style="left:16cm; top:.5cm;">
                                  
                                    <a href="" data-toggle="modal" data-target="#Modal_login">Login</a>
                                    
                                  </div>
                                
                                
                                <div class="dropdownn" style="left:16cm;top:.5cm;">
                                  
                                    <a href="" data-toggle="modal" data-target="#Modal_register">Register</a>
                                    
                                  
                                </div>';
                                
                            }
                                             ?>



								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->
		<nav id='navigation'>
			<!-- container -->
            <div class="container" id="get_category_home">
                
            </div>
				<!-- responsive-nav -->
				
			<!-- /container -->
		</nav>
            

		<!-- NAVIGATION -->
		
		<div class="modal fade" id="Modal_login" role="dialog">
                        <div class="modal-dialog">
													
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                            	<div id="msg"></div>
                            <?php
                                include "login_form.php";
                            ?>
          
                            </div>
                            
                          </div>
													
                        </div>
                      </div>
                <div class="modal fade" id="Modal_register" role="dialog">
                        <div class="modal-dialog" style="">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              
                            </div>
                            <div class="modal-body">
                            <?php
                                include "register_form.php";
    
                            ?>
                            </div>
                          </div>

                        </div>
                      </div>
		
		
        <!-- <div class="main main-raised"> -->
  		<!-- <div id="hot-deal" class="section mainn mainn-raised"> -->
			<!-- container
			<div class="container">
				row
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<a class="primary-btn cta-btn" href="store.php">Shop now</a>
						</div>
					</div>
				</div>
				/row
			</div>
			/container -->
		<!-- </div> -->

		<!-- SECTION -->
		<!-- <div class="section" style="background-image: url(https://www.clipartkey.com/mpngs/m/109-1098789_crane-clipart-construction-site-construction-cartoon-building-png.png);left:5cm;position:relative;height:20cm;widt:30cm;background-size: contain;background-repeat: no-repeat;"> -->
		
		<div class="section" style="background-image: url(https://ak2.picdn.net/shutterstock/videos/423202/thumb/1.jpg);left:cm;;background-size: cover;height:20cm;background-repeat: no-repeat;">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title" style="left:.1cm;position:relative;font-size:40px;">PRODUCTS</h3>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12 mainn mainn-raised">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<?php
                    include 'db.php';
								
					
					$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id  order by RAND()";
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
				
                        
                                
								<div class='product'>
									<a href='product.php?p=$pro_id'><div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										
										<h4 class='product-price header-cart-item-info'><i class='fa fa-inr' aria-hidden='true'></i>&nbsp;$pro_price</h4>
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
									</div>
								</div>
                               
							
                        
			";
		}
        ;
      
}
?>
										
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

<br>
<br>
<br>
		<!-- SECTION -->
		<div class="seb mainn mainhn-raised">
		
		
			<!-- container -->
			<div class="container">
			
				<!-- row -->
				<div class="row">
					<?php
					$brand = mysqli_query($con,"SELECT * FROM brands where brand_id in (SELECT product_brand from products ) order by rand() limit 3");
					while($row=mysqli_fetch_assoc($brand)):
						$product = mysqli_query($con,"SELECT * FROM products where product_brand = '".$row['brand_id']."' order by rand() limit 1");
						$prod = mysqli_fetch_array($product);
					?>
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<a href="product.php?p=78"><div class="shop">
							<div class="shop-img">
								<img src="product_images/<?php echo $prod['product_image'] ?>" alt="">
							</div>
							<div class="shop-body">
								<h3><?php echo $row['brand_title'] ?></h3>
								<a href="product.php?p=<?php echo $prod['product_id'] ?>" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div></a>
					</div>
					<!-- /shop -->
				<?php endwhile; ?>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		
</div>
		
<?php




include "footer.php";
?>