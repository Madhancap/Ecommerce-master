<?php include "./templates/top.php"; ?>

<?php include "./templates/navbar.php"; ?>

<div class="container">
	<div class="row align-items-center" style="margin:100px 0;">
		<div class="col-md-6" style="padding-left:0;padding-right:0;">
			<img src="images/admin-page-img.png" class="img-fluid" alt="images/admin-page-img.png">
		</div>
		<div class="col-md-6">
			<h2 style="color:#007BFF;">NATURAL STORE</h2>
			<br><br>	
			<h4>Admin Login</h4>
			<p class="message"></p>
			<form id="admin-login-form">
			  <div class="form-group">
			    <label for="email">Email address</label>
			    <input type="email" class="form-control" name="email" id="email"  placeholder="Enter email">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
			  </div>
			  <input type="hidden" name="admin_login" value="1">
			  <button type="button" class="btn btn-primary login-btn">Submit</button>
			</form>
		</div>
	</div>
</div>





<?php include "./templates/footer.php"; ?>

<script type="text/javascript" src="./js/main.js"></script>
