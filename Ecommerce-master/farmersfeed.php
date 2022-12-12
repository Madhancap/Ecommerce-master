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
         <li class="active">
            <a href="farmersfeed.php"style= "background-color:#2478f0">
               <h4> Feed</h4>
            </a>
         </li>
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
      <div class="row">
         <div class="col-md-6 col-xs-12">
            <div class="panel panel-success">
               <div class="panel-heading">Live Video</div>
               <div class="panel-body">
                  <iframe width="100%" height="400px" src="https://www.youtube.com/embed/hrnT2IFqyro" title="🔴 🕋 LIVE Makkah Al Mukarramah | 🕋Makkah Live Today 2022 | Masjid Al Haram #mecca" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <div class="panel-footer text-center">&copy; 2022</div>
               </div>
            </div>
		</div>
            <div class="col-md-6 col-xs-12">
               <div class="panel panel-success">
                  <div class="panel-heading">Chat</div>
                  <div class="panel-body">
                     <div id="chat-embed-wrapper" class="iframe-container">                        
                     </div>
                     <div class="panel-footer text-center">&copy; 2022</div>
                  </div>
               </div>
            </div>
         </div>
   </div>
</div>
<?php require_once 'footer.php'; ?>
<script>  
   let frame = document.createElement("iframe");
   frame.style.width = '100%';  
   frame.style.height = '400px';  
   frame.referrerPolicy = "origin";  
   frame.src = "https://www.youtube.com/live_chat?v=hrnT2IFqyro&embed_domain=" + window.location.hostname;  
   frame.frameBorder = "0";  
   frame.id = "chat-embed";  
   let wrapper = document.getElementById("chat-embed-wrapper");  
   wrapper.appendChild(frame); 
</script>
</body>
</html>