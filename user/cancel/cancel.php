
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

if(isset($_REQUEST["submit"]))
{
	require_once("../config/connection.php");
	$pnr=$_REQUEST["pnr"];
	$res=mysql_query("select * from ticket_table where reciept_no='$pnr' ");
	if(mysql_num_rows($res)==1)
	{
		header("location:cancelconfirm.php?pnr=$pnr");
	
		
	}
	else if(!(mysql_num_rows($res)==1))
	{
		$err="Invalid PNR No !";
	}

}

?>


<?php
	require("../core/head.php");
	
?> 

<?php
	require("../core/logo.php");
?>       
    
                    
             <div class="content">
    	<div class="row">
        	<div class="col-lg-offset-1 col-lg-7 well">         
    
               
                      <?php
					
						if(isset($succ))
						{
        				echo "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert'>&times;</button>$succ</div>";
                 
							$succ="";
						}
						
						if(isset($err))
						{
        				echo "<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>&times;</button>$err</div>";
                 
							$err="";
						}
					?>
                      <h3>Cancel Ticket</h3>
						<form name="temp" method="post" class="col-lg-7">
                        	<div class="form-group">
                            <label>Enter Your PNR No</label>
                        	<input type="text" class="form-control" name="pnr" placeholder="PNR"/>
                            </div>
                      
                            <input type="submit" name="submit" class="btn btn-primary" value="Submit"/>
                        </form>                    
				

          </div>
		<div class="col-lg-3  my-sidebar affix">


  <div class="list-group">
                    
                    <a href="user_profile.php" class="list-group-item active">
                    My Profile
                    </a>
              
                    <a href="booking/train_enquiry.php" class="list-group-item">Scheduled Cabs
                    </a>
                    <a href="cancel/cancel.php" class="list-group-item">Unscheduled Cabs
                    </a>
                 
                   
                     <a href="pnr_status.php" class="list-group-item">Shift Change
                    </a>
                    <a href="cancel/cancel.php" class="list-group-item">Notification
                    </a>
                    </div>
                    
                    <!--From Here-->          
            </div>
        </div>
    </div>          
        <div class="bot" style="margin-bottom:165px;"></div>    
<?php
require_once("footer.php");
?> 
          
              
              	

