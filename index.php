<?php

ob_start();
session_start();
 require_once("config/connection.php");
        if(isset($_REQUEST["submit"]))
          {      
                
                 $userid=$_REQUEST["qid"];
                 $user1=$_REQUEST["user"];
                //$name=$_REQUEST["E_Name"];
                //$pass=$_REQUEST["Status"];
             
                
            if($user1=='user')
              {
                $query="select * from employee where Quick_ID='$userid'";
                $result = mysqli_query($connection,$query);
                $rows = mysqli_num_rows($result);

                if ($rows == 1) {
                	 $row = mysqli_fetch_assoc($result);
                     $_SESSION["qlid"]= $row["Quick_ID"];
                     $_SESSION["ename"]=$row["E_Name"];
                header("location: user/user_profile.php"); // Redirecting To Other Page
                } else {
                $error = "User id is invalid";
                echo $error;
                }
              } 

              else
              {
              	header("location: pass.php");
              }
        mysqli_close($connection);
    } ?>


<html lang="en">
  <head>
    <title>NCR</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/style.css" rel="stylesheet" media="screen">
        <link href="css/carousel.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

   
    <script>
	$('.carousel').carousel({
  		interval: 4000
	})
    </script>
 </head>
 <body>

 <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">NCR</a>
        </div><!--navbar-header-->
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="about.php">About-Us</a></li>
                <li><a href="contact.php">Contact-Us</a></li>
                <li><a href="signup.php">Sign up</a></li>
                
                
        </ul>
        </div><!--/.nav-collapse -->
    </div><!--container-->
</div>

<div id="wrap">                
                	
<div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                    <li data-target="../img/webs.jpg" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                    <div class="item active">
                    
                    <div class="container">
             
                    <div class="carousel-caption">
                    <h1>Welcome To Indian Railways</h1>
              
                    
                   
                   <p>Serving the Nation from 150 Years</p>
               <p><a class="btn btn-lg btn-primary" href="services.php" role="button">Our Services</a></p>
                    </div>
                    </div>
                    </div>
                    <div class="item">
                  
                    <div class="container">
                    
                    <div class="carousel-caption">
                    <h1>Register Today For Recieving Services.</h1>
                    <p>We are providing no of services. Sign up today for Booking Ticket.</p>
                    <p><a class="btn btn-lg btn-primary" href="signup.php" role="button">Sign Up</a></p>
                    </div>
                    </div>
                    </div>
                    <div class="item">
                  
                    <div class="container">
                    <div class="carousel-caption">
                    <h1>Discover India Through Us</h1>
                    <p>India has some of the most spectacular and unforgettable rail journeys in the world. There's no better way to enjoy India's outback, cities, coastal towns and regional areas in comfort.</p>
                   
                    </div>
                    </div>
                    </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div><!-- /.carousel -->
<div class="dock">
                    <div class="container">
                   
                    If You Need Any Kind of Help Related to Booking, Canceling, Reservation etc. 
                    <strong>
                    <a href="FAQ.htm">Click On Me</a>
                    </strong>
                    </div>
</div>


    
<div class="content">
    <div class="col-lg-1" ></div>
            <div class="col-lg-12">
               <div class="col-md-3 my-sidebar affix">
                           
                    <div class="row">    
                      <div class="panel panel-default">
                        <div class="panel-heading">
                                        <h3 class="panel-title">Login</h3>
                        </div>
                        <div class="panel-body">
                    <form  method="post" action="#">
                        <fieldset>
                         
                         <div class="form-group col-lg-12">
                           <div class="radio">
                           <label>
                           <input type="radio" name="user" id="optionsRadios1" value="user" checked><span class="glyphicon glyphicon-user"></span> User</label>
                           </div>

                           <div class="radio">
                           <label>
                           <input type="radio" name="user" id="optionsRadios2" value="admin"><span class="glyphicon glyphicon-user"></span> Admin</label>
                           </div>
                         </div>

                            <div class="form-group">
                            <input type="text" class="form-control"  name="qid" id="exampleInputEmail" placeholder="Enter Quick Look ID" required/>
                            </div>	

                            
                            <div class="form-group">
                            <p class="help-block">Not Registered <a href="signup.php">Sign-Up Here!</a></p>
                            </div>
                            <div class="checkbox">
                             <label><input type="checkbox">Remember Me</label>
                            </div>
                            <input type="submit" name="submit"  class="btn btn-lg btn-primary btn-block" value="Sign-in"/>
                        </fieldset>
                        </form>
                    </div>
                  </div>
                </div>    
			</div><!--col-md-->
		
	</div>

     </div>
     
 </div><!--wrap-->
 <footer class="footer">
   <div class="content">
      <div class="row">
   		<div class="container">
  &copy; Indian Trains Reservation Project, Hosted from 000Webhost, Routed from Dot.tk, Born in Delhi, India.<div class='pull-right'>Developed by <a href="about.php">Sushant</a>.</div>
   		</div>
   	</div>
   </div>
  </footer>
  </body>
</html>