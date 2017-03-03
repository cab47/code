<?php
session_start();
?>
<?php
if(!isset($_SESSION["username"]))
{
	header("location:../index.php");
}

?>

<?php
require("core/head.php");
//Script Here
?>
<?php
require("core/logo.php");
?>

<div id="wrap" style="margin-bottom:550px;">                
 
    
<div class="content">
            <div class="col-lg-12">
            
                    <div class="col-md-7 col-md-offset-2">
                                    <h2>About Us</h2>
                                   <hr>
                                   <div class="row">
  <div class="col-sm-6 col-md-3">
    <a href="img/webs.jpg" class="thumbnail">
      <img src="img/webs.jpg" alt="Sushant">
    </a>
  </div>
  

                                   <div class="col-md-6">
                                   <h3>sushant</h3>
                                   <p>I am a student living in New Delhi. I enjoy coding web applications, surfing  Internet and Music. This is Railway Reservation System Designed and Developed for College Project. <br/>You can contact me through <a href="www.facebook.com/rockyksingh619@gmail.com">Facebook</a> or <a href="www.twitter.com/sushant619">Twitter</a></p>

</div>
       </div>                             
                    </div>
                  
				</div><!--col-md-->
                    
                    
                    <!--Content-->          
 </div>
 </div><!--wrap-->






   <!-- JavaScript plugins (requires jQuery) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

   
    <script>
	$('.carousel').carousel({
  		interval: 4000
	})
    </script>
   
   
   <?php
   /*
   <footer>
   	<strong>&copy; Indian Reservation Project</strong>, Born in Delhi, Developed by Jodha Singh, Hosted at 000Webhost, Routed By Dot.tk.
    
    </footer>*/
   ?>
   <footer class="footer" >
   <div class="content" >
   <?php /*
   <div class="row">
   <div class="col-md-2 col-md-offset-3">
   							<h6>Our Domains</h6>
							
							<p><a href="http://technologyan.tk">Technologyan.tk</a></p>
							<p><a href="http://techwebs.tk">Techwebs.tk</a></p>
							<p><a href="http://tech4all.tk">Tech4all.tk</a></p>
							
   </div>
   <div class="col-md-2">
   							<h6>Our Links</h6>
							
							<p><a href="blog.php">Blog</a></p>
							<p><a href="chat.php">Chat</a></p>
							<p><a href="cms/index.php">Login</a></p>
							<p><a href="about.php">About Us</a></p>
   </div>
   <div class="col-md-2">
   							<h6>Contact Us</h6>
							
							<p><a href="https://www.facebook.com/jodhasingh30" target="_blank">Facebook</a></p>
							<p><a href="https://www.twitter.com/jodhasingh30" target="_blank">Twitter</a></p>
							<p><a href="https://plus.google.com/u/0/116295471287655448008?rel=author" target="_blank">Google+</a></p>
							<p><a href="http://www.youtube.com/channel/UCDQ2El-gy-VVXAKr2EWruRA" target="_blank">Youtube</a></p>
   </div>
   </div>
   </div>*/?>
   <div class="row" style="padding-left:50px;">
  &copy; Indian Trains Reservation Project, Hosted from 000Webhost, Routed from Dot.tk, Born in Delhi, India.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Developed by Sushant.
   </div>
   </div>
   
</body>
  </html>
    