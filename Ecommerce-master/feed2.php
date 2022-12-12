<?php
require "config/constants.php";
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<?php require_once '_head.php'; ?>
<?php require_once 'header-style.php'; ?>
<?php require_once 'header.php'; ?>
<div class="margin-from-header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
				
			
				<div class="nav nav-pills nav-stacked">
		<li class="active"><a href="farmersfeed.php"style= "background-color:#333D79FF"><h4>Farmers Feed</h4></a></li>
        <li><a href="feed1.php">Farm 360</a></li>
					<li><a href="feed2.php">Eu Food and Farming</a></li>
					<li><a href="feed3.php">Agriculture</a></li>
					<li><a href="feed4.php">Iam Agriculture Proud</a></li>
		</div>
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-success">
					<div class="panel-heading">Feed..</div>
					<div class="panel-body">
                        <div class="iframe-container">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FEUAgri%2F&tabs=timeline&width=500&height=900&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="900" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>						
                        </div>
                                <div class="panel-footer text-center">&copy; 2022</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</div>
</div>
<?php require_once 'footer.php'; ?>
</body>
</html>
