<script>
	function openNav() {
    document.getElementById("mySidenav").style.width = "70%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "rgba(0,0,0,0)";
}
</script>
<div class="flipkart-nav-wrapper">
<div id="flipkart-navbar" class="navbar navbar-fixed-top navbar-margin-top">
    <div class="container">
        <div class="row row1">
            <ul class="largenav pull-right">
                <li class="upper-links"><a class="links" href="index.php"><span class="glyphicon glyphicon-home mr-2"></span>Home</a></li>
                <li class="upper-links"><a class="links" href="index.php"><span class="glyphicon glyphicon-modal-window mr-2"></span>Product</a></li>
                <li class="upper-links"><a class="links" href="#"><span class="glyphicon glyphicon-paste mr-2"></span>About Us</a></li>
                <li class="upper-links"><a class="links" href="#"><span class="glyphicon glyphicon-earphone mr-2"></span>Contact us</a></li>
                <?php if(isset($_SESSION["uid"]))
                    {
                        ?>
                        <li class="upper-links"><a href="#" class="dropdown-toggle links" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hello,".$_SESSION["name"]; ?></a>
                    <ul class="dropdown-menu custom-dropdown-css">
                        <li><a href="cart.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
                        <li class="divider"></li>
                        <li><a href="customer_order.php" style="text-decoration:none; color:blue;">Orders</a></li>
                        <li class="divider"></li>
                        <li><a href="" style="text-decoration:none; color:blue;">Change Password</a></li>
                        <li class="divider"></li>
                        <li><a href="logout.php" style="text-decoration:none; color:blue;">Logout</a></li>
                    </ul>
                </li>

                <?php
                    } 
                    else {
                    ?>
                    <li class="upper-links"><a class="links " data-toggle="modal" data-target="#loginModal" href="#"><span class="glyphicon glyphicon-user mr-2"></span>Login</a></li>
                    <li class="upper-links"><a class="links" href="customer_registration.php?register=1"><span class="glyphicon glyphicon-user mr-2"></span>Sign in</a></li>
                    <?php
                    }
                    ?>
            </ul>
        </div>
        <div class="row row2">
            <div class="col-sm-2">
                <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()">☰ Natural Store</span></h2>
                <h1 style="margin:0px;" class="fs-1200"><span class="largenav">Natural Store</span></h1>
            </div>


            <div class="flipkart-navbar-search smallsearch col-sm-8 col-xs-11">
                <div class="row">
                	            <form class="navbar-form">
                			        <div class="from-search-header">
                			          <input type="text" class="form-control flipkart-navbar-input col-xs-11" placeholder="Search" id="search">
                			          <button class="flipkart-navbar-button col-xs-1">
                			              <svg width="15px" height="15px">
                			                  <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                			              </svg>
                			          </button>
                			        </div>
                			     </form>
                </div>
            </div>
            <div class="cart largenav col-sm-2">

            	<a href="#" class="btn btn-lg btn-primary btn-style" data-toggle="modal" data-target="#cartModal"><span class="glyphicon glyphicon-shopping-cart mr-2"></span>Cart <span class="badge badge-style">0</span></a>
            	<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            	  <div class="modal-dialog" role="document">
            	    <div class="modal-content">
            	      <div class="modal-header modal-head-bg">
            	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            	        <h4 class="modal-title text-white" id="myModalLabel">Your Cart</h4>
            	      </div>
            	      <div class="modal-body">
            	        <div class="panel panel-success">
							<div class="panel-heading panel-bg">
								<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in <?php echo CURRENCY; ?></div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								
								</div>
							</div>
						</div>
            	      </div>
            	    </div>
            	  </div>
            	</div>

                <!----------------- Modal for Login ------------------------------>

                <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header modal-head-bg">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-white" id="myModlLabel">Login Form</h4>
                      </div>
                      <div class="modal-body">
                        <div class="panel">
                                <div class="panel-heading">
                                    <form onsubmit="return false" id="login">
                                        <label for="email" class="text-dark">Email</label>
                                        <input type="email" class="form-control text-dark mb-2" name="email" id="email" required/>
                                        <label for="email" class="text-dark">Password</label>
                                        <input type="password" class="form-control mb-2" name="password" id="password" required/>
                                        <p><br/></p>
                                        <a href="#" style="color:black; list-style:square inside;">Forgotten Password?</a><input type="submit" class="btn btn-success" style="float:right;">
                                    </form>
                                </div>
                                <div class="panel-footer panel-footer-none" id="e_msg"></div>
                            </div>
                      </div>
                    </div>
                  </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
<div id="mySidenav" class="sidenav">
    <div class="container" style="background-color: #2874f0; padding-top: 10px;">
        <span class="sidenav-heading">Natural Store</span>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    </div>
    <a class="" href="index.php">Home</a>
    <a class="" href="index.php">Product</a>
    <a class="" href="#">About Us</a>
    <a class="" href="#">Contact Us</a>
</div>

						
