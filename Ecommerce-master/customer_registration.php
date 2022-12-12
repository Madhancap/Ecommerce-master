<?php
if (isset($_GET["register"])) {
	
	?>

	<?php include_once '_head.php';
	include_once 'header-style.php'; ?>

	<div class="navbar navbar-bg navbar-fixed-top">
		<div class="container-fluid flex-prop">	
			<div class="navbar-header">
				<a href="#" class="navbar-brand text-white">Natural Store</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php" class="text-white"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="index.php" class="text-white"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
				<li><a href="index.php" class="text-white"><span class=""></span>About Us</a></li>
				<li><a href="index.php" class="text-white"><span class=""></span>Contact Us</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid" style="min-height: 100vh;">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row ">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-info ">
					<div class="modal-header modal-head-bg text-center text-white ">New User Registration</div>
					<div class="panel-body">
					<br>
					<form id="signup_form" onsubmit="return false">
						<div class="row" style="margin-bottom: 50px;">
							<div class="col-md-4">
								<input type="text" id="f_name" name="f_name" class="form-control " placeholder="First Name">
							</div>
							
							<div class="col-md-4">
								<input type="text" id="l_name" name="l_name"class="form-control" placeholder="Last Name">
							</div>
							<div class="col-md-4">
								<input type="text" id="email" name="email"class="form-control" placeholder="Email">
							</div>
						</div>
						
						<div class="row" style="margin-bottom: 50px;">
							<div class="col-md-4">
								<input type="text" id="mobile" name="mobile"class="form-control" placeholder="Mobile">
							</div>
							<div class="col-md-4">
								<input type="password" id="password" name="password"class="form-control" placeholder="Password">
							</div>
							<div class="col-md-4">
								<input type="password" id="repassword" name="repassword"class="form-control" placeholder="Confirm Password">
							</div>
						</div>
						
						<div class="row" style="margin-bottom: 50px;">
							<div class="col-md-12">
								<input type="text" id="address1" name="address1"class="form-control" placeholder="Address Line 1">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="text" id="address2" name="address2"class="form-control" placeholder="Address Line 2">
							</div>
						</div>
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="width:100%;" value="Register" type="submit" name="signup_button"class="btn btn-success btn-lg">
							</div>
						</div>
						
					</div>
					</form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<?php include_once 'footer.php'; ?>
</body>
</html>
	<?php
}



?>






















