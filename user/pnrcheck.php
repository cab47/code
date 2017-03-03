
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
	
?> 

<?php
	require("core/logo.php");
?>       
    
<div class="content">
  	<div class="row">
       	<div class="col-lg-offset-1 col-lg-7">   
         <a href="../admin_profile.php" class="btn btn-primary">Back To Home</a>
		</div>
		
				<div class="col-lg-3  my-sidebar affix">
       		        <div class="list-group">
                    
                    <a href="../user_profile.php" class="list-group-item">
                    Home
                    </a>
                 
                    <a href="booking/train_enquiry.php" class="list-group-item">Book Ticket
                    </a>
                    <a href="cancel/cancel.php" class="list-group-item">Cancel Ticket
                    </a>
                  
                     <a href="pnr_status.php" class="list-group-item active">PNR Status
                    </a>
                 	</div>
                </div>
     </div>
</div>                    
                    
<?php
require_once("core/footer.php");
?>                    
    
