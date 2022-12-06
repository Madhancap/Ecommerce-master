<?php

require "config/constants.php";

?>
<?php require_once '_head.php'; ?>
<?php include 'header-style.php'; ?>
<?php require_once 'header.php'; ?>
<div class="margin-from-header">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-12" id="cart_msg">
				<!--Cart Message--> 
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class=" modal-header modal-head-bg text-center text-white">Cart Checkout</div>
					<div class="panel-body">
						<div class="row">
							
							<div class="col-md-2 col-xs-2"><b>Product Image</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Name</b></div>
							<div class="col-md-2 col-xs-2"><b>Quantity</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Price</b></div>
							<div class="col-md-2 col-xs-2"><b>Price in <?php echo CURRENCY; ?></b></div>
							<div class="col-md-2 col-xs-2"><b>Action</b></div>
						</div>
						<div id="cart_checkout"></div>
						</div> 
					</div>
				</div>
			</div>
			<div class="col-md-2"></div>
			
		</div>
	</div>

<script>var CURRENCY = '<?php echo CURRENCY; ?>';</script>
<?php require_once 'footer.php'; ?>
</body>	
</html>
















		