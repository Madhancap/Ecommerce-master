<?php
require "config/constants.php";
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<?php require_once '_head.php'; ?>
<?php include 'header-style.php'; ?>
<?php require_once 'header.php'; ?>
<div class="margin-from-header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<?php require_once'category.php'; ?>
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel">
					<div class="panel-body" style="padding:0;">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</div>

	<?php require_once 'footer.php'; ?>

</body>
</html>















































