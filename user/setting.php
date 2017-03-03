<?php
session_start();
?>
<?php
require("core/head.php");
?>


<script>

</script>
<?php
require("core/logo.php");
?>
<?php
if(isset($_REQUEST["submit"]))
{

require("config/connection.php");
$old=$_REQUEST["old"];
$new=$_REQUEST["new1"];
$user=$_SESSION["ename"];
$qry=mysql_query("select * from employee where Quick_ID='$userid'");
		if(mysql_num_rows($qry)==1)
		{
			mysql_query("update singup set password='$new' where username='$user'");
			$succ="Successfully Changed Password";	
		}
		else
		{
			$err= "Wrong Password! Enter Correct Password";
			
		}

}
?>
 <div class="content">
    	<div class="row">
        	<div class="col-md-7 col-md-offset-1 well">
         
           <h2>Change Your Password</h2>
           <?php
                        if(isset($succ))
                        {
                        echo "
						<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert'>&times;</button>".$succ."</div>";
                        $succ="";
                        }
						if(isset($err))
						{
        				echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button>$err</div>";
                 
							$err="";
						}
                        ?>
            	<form method="post" name="myform" onSubmit="return valid()" class="col-lg-10"/>
              				
                            <div class="form-group">
                            <label for="exampleInputEmail">Enter Your Old Password</label>

                            <input type="password" placeholder="Old" name="old" class="form-control" /></div>
                             <div class="form-group">
                            <label for="exampleInputEmail">Enter Your New Password</label>

                            <input type="password" placeholder="New" name="new1" class="form-control" /></div>
                              <div class="form-group">
                            <label for="exampleInputEmail">Enter Your New Password Again</label>

                       <input type="password" placeholder="Again New" name="newag" class="form-control" /></div>
                            
                            <input type="submit" class="btn btn-success pull-right" class="form-control" value="Change Password" name="submit" />
                            
                           
                           
                            
                            </form>
                       
			</div>
            
            
            
            <div class="col-md-3">
            	 
                 <div class="list-group">
                    
                    <a href="user_profile.php" class="list-group-item">
                    Home
                    </a>
                 
                    <a href="booking/train_enquiry.php" class="list-group-item">Book Ticket
                    </a>
                    <a href="cancel/cancel.php" class="list-group-item">Cancel Ticket
                    </a>
                  
                     <a href="pnr_status.php" class="list-group-item">PNR Status
                    </a>
                    </div>

  			</div> 
            
            
        	</div>
        </div>
    </div>


<?php
require("core/footer.php");
?>