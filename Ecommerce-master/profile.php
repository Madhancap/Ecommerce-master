<?php
require "config/constants.php";
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>
<?php require_once '_head.php'; ?>
<?php require_once 'header-style.php'; ?>
<?php require_once 'header.php'; ?>
	<div class="margin-from-header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
			<div class="nav nav-pills nav-stacked">
		           <li class="active"><a href="farmersfeed.php"style= "background-color:#2478f0"><h4>New streaming product</h4></a></li>
		       </div>
			   <br>
				<div id="get_brand">
				</div>
				
				<div id="get_category">
				</div>
				
			</div>
			<div class="col-md-8">	
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info" id="scroll">
					<div class="panel-heading">Products</div>
					<div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						
					</div>
					<div class="panel-footer text-center">&copy; 2022</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<center>
					<ul class="pagination" id="pageno">
						<li><a href="#">1</a></li>
					</ul>
				</center>
			</div>
		</div>
	</div>
	</div>
	<?php require_once 'footer.php'; ?>
</body>
</html>
















































