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
          <a class="navbar-brand" href="#">Indian Railways</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="user_profile.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="about.php">About-Us</a></li>
                 
                <li><a href="contact.php">Contact Us</a></li>
                
					        
         <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Welcome, <?php echo $_SESSION["ename"]; ?>&nbsp;<span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
    	
            <li><a tabindex="-1" href="setting.php">Setting</a></li>   
            <li class="divider"></li>     
            <li><a tabindex="-1" href="logout.php">Logout</a></li>

    </ul>
  </li>
                
        </ul>
    </div><!-- /.nav-collapse -->
  </div><!-- /.container -->
</div><!-- /.navbar -->





   
  
  