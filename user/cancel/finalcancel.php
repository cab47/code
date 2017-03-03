
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
	require("../core/head.php");
	
?> 

<?php
	require("../core/logo.php");
?>       
    
                    
             <div class="content">
    	<div class="row">
        	<div class="col-lg-offset-1 col-lg-7">         
    
               
                      <?php
						$succ="Successfully Canceled the Ticket!";
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
                
                      <?php
					
						include_once("../config/connection.php");
						if(isset($_REQUEST["pnr"]))
						{
						$var=$_REQUEST["pnr"];

						$res=mysql_query("select * from ticket_table where reciept_no='$var'");
						if(mysql_num_rows($res)==1)
						{
							$row=mysql_fetch_array($res);
							?>
                            
                            	<table cellspacing='10' class="table table-hover table-bordered">
                                
								<tr class="active"><td colspan="2"><h4>Passenger Details</h4></td></tr>
                                <tr><td><b>PNR NO:</b></td><td><?php echo $row[0]; ?></td></tr>
                                
                                <tr><td><b>No Of Seats Booked:</b></td><td><?php echo $row[4]; ?></td></tr>
                                <tr class="active"><td colspan=2><h4>Train Details</h4></td></tr>
                                <tr><td><b>Train No:</b></td><td><?php echo $row[5]; ?></td></tr>
                                <tr><td><b>Train Name:</b></td><td><?php echo $row[6]; ?></td></tr>
                                <tr><td><b>Source:</b></td><td><?php echo $row[7]; ?></td></tr>
                                <tr><td><b>Destination:</b></td><td><?php echo $row[8]; ?></td></tr>
                                <tr><td><b>Arrival Time:</b></td><td><?php echo $row[9]; ?></td></tr>
                                <tr><td><b>Departure Time:</b></td><td><?php echo $row[10]; ?></td></tr>
                                <tr><td><b>Date:</b></td><td><?php echo $row[11]; ?></td></tr>
                                <tr class="active"><td colspan='2'><h4>Payment Details</h4></td></tr>
                     
                                <?php
									$train=$row[5];
									$rush=mysql_query("select * from train_detail where Train_no='$train'");
									if(mysql_num_rows($rush)==1)
									{
										$rewh=mysql_fetch_array($rush);
										echo "<tr><td><b>Fair Per Ticket(In Rupees):</b></td><td>$rewh[7]</td></tr>";
									}
								?>
                                
								
                                <tr><td><b><b><b><b><b><b><b><b><b>No of Passenger:</b></b></b></b></b></b></b></b></b></td><td><?php echo $row[4]; ?></td></tr>
                                <?php
									$ros=mysql_query("select * from payment_table where reciept_no='$var'");
									if(mysql_num_rows($ros)==1)
									{
										$rew=mysql_fetch_array($ros);
										echo "<tr><td><b>Total Amount Paid(In Rupees):</b></td><td>$rew[6]</td></tr>";
									}
								?>
                                </table>
                        
				<a href="finalticket.php" target="_blank" class="btn btn-primary" onclick="window.print()">Print</a>
						
                         
                     
                        					
						<?php
						
	
						}
						}
						
					?>		
                        <a href="../user_profile.php" class="btn btn-primary">Back To Home</a>
                       </div>
		<div class="col-lg-3  my-sidebar affix">



                  <div class="list-group">
                    
                    <a href="../user_profile.php" class="list-group-item">
                    Home
                    </a>
                 
                    <a href="../booking/train_enquiry.php" class="list-group-item">Book Ticket
                    </a>
                    <a href="cancel.php" class="list-group-item active">Cancel Ticket
                    </a>
                  
                     <a href="../pnr_status.php" class="list-group-item">PNR Status
                    </a>
                    </div>
                    
                    <!--From Here-->          
            </div>
        </div>
    </div>          
    <div class="row" style="margin-bottom:204px;"></div>
<?php
require_once("../core/footer.php");
?> 
          
              
              	


