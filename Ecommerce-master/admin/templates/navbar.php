 <nav class="modal-header modal-head-bg fixed-top bg-primary">
  <a class=" col-sm-3 col-md-2 mr-0 text-white h2" href="#">Natural Store</a>
  <input class="form-control w-100 text-white" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
    	<?php
    		if (isset($_SESSION['admin_id'])) {
    			?>
    				<a class="nav-link text-white h6" href="../admin/admin-logout.php">Sign out</a>
    			<?php
    		}else{
    			$uriAr = explode("/", $_SERVER['REQUEST_URI']);
    			$page = end($uriAr);
    			if ($page === "login.php") {
    				?>
	    				<a class="nav-link text-white h6" href="../admin/register.php">Register</a>
	    			<?php
    			}else{
    				?>
	    				<a class="nav-link text-white h6" href="../admin/login.php">Login</a>
	    			<?php
    			}


    			
    		}

    	?>
      
    </li>
  </ul>
</nav>