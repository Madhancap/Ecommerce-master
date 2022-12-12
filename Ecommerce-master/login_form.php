<?php

if (isset($_SESSION["uid"])) {
	header("location:profile.php");
}

if (isset($_POST["login_user_with_product"])) {
	$product_list = $_POST["product_id"];
	$json_e = json_encode($product_list);
	setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);

}
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
				
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Customer Login Form</div>
					<div class="panel-body">
						<form onsubmit="return false" id="login">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" id="email" required/>
							<label for="email">Password</label>
							<input type="password" class="form-control" name="password" id="password" required/>
							<p><br/></p>
							<a href="#" style="color:#333; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right;" Value="Login">
							<div><a href="customer_registration.php?register=1">Create a new account?</a></div>						
						</form>
				</div>
				<div class="panel-footer"><div id="e_msg"></div></div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
	</div>
		<?php include_once 'footer.php'; ?>
</body>
</html>






















