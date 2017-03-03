
<?php
session_start();
require_once("../config/connection.php");
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
							$seat=$_REQUEST["seat"];
                            $pnr=$_REQUEST["pnr"];
							$neta=$_REQUEST["neta"];
							$val=$_REQUEST["val"];
							echo $val;	
                            $res=mysql_query("select * from ticket_table where reciept_no='$pnr'");
                            $row=mysql_fetch_array($res);
							if($seat==$row[4])
							{
								mysql_query("update ticket_table set status='canceled' where reciept_no='$pnr'");
								$query=mysql_query("select * from payment_table where reciept_no='$pnr'");
								$result=mysql_fetch_array($query);
								$val=$result[6];
								$temp=$val-$neta;
								mysql_query("update payment_table set amount='$temp' where reciept_no='$pnr'");
								header("location:finalcancel.php");
							}
							else
							{
								$temp=$val-$seat;
								mysql_query("update ticket_table set passenger='$temp' where reciept_no='$pnr'");
								$query=mysql_query("select * from payment_table where reciept_no='$pnr'");
								$result=mysql_fetch_array($query);
								$val=$result[6];
								$temp=$val-$neta;
								mysql_query("update payment_table set amount='$temp' where reciept_no='$pnr'");
								header("location:finalcancel.php?pnr=$pnr");

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
        	<div class="col-lg-offset-1 col-lg-7">         
    
   
                      <h3>Cancel Ticket</h3>
                      
                      	<?php
					
						include_once("../config/connection.php");
						$var=$_REQUEST["pnr"];

						$res=mysql_query("select * from ticket_table where reciept_no='$var'");
						if(mysql_num_rows($res)==1)
						{
							$row=mysql_fetch_array($res);
							?>
                            	<table cellspacing='10' class="table table-hover table-bordered">
                                
						   
								<tr class="active"><td colspan="2"><h4>Passenger Details</h4></td></tr>
                                <tr><td><b>PNR NO:</b></td><td><?php echo $row[0]; ?></td></tr>
                               
                                <tr><td><b>No Of Seats Booked:</b></td><td><?php echo $row[4]; $val=$row[4]; ?></td></tr>
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
										$fair=$rewh[7];
										echo "<tr><td><b>Fair Per Ticket(In Rupees):</b></td><td>$rewh[7]</td></tr>";
									}
								?>
                                
								
                                <tr><td><b><b><b><b><b><b><b><b><b>No of Passenger:</b></b></b></b></b></b></b></b></b></td><td><?php echo $row[4]; ?></td></tr>
                                <?php
									$ros=mysql_query("select * from payment_table where reciept_no='$var'");
									if(mysql_num_rows($ros)==1)
									{
										$rew=mysql_fetch_array($ros);
										$prevamount=$rew[6];
										echo "<tr><td><b>Total Amount Paid(In Rupees):</b></td><td>$rew[6]</td></tr>";
									}
								?>
                                </table>
            		<?php
						
	
						}
					?>	
                      
						<form name="temp" method="post" class="col-lg-7">
                        	<div class="form-group">
                            <b>Select the No of Seats to be Canceled</b>			
							<select name="seat" class="form-control">
							<?php
							$temp=1;
							while($temp<=$val)
							{
							echo "<option value='$temp'>$temp</option>";
							$temp++;
							}
							?></select></div>
                            <input value="Select" type="submit" name="Select" class="btn btn-primary"/><br/><br/><br/>
                        </form>                    
				
					<table class="table table-bordered table-hover" >
						<?php
                        if(isset($_REQUEST["Select"]))
                        {
                            $seat=$_REQUEST["seat"];
                            $pnr=$_REQUEST["pnr"];
                            
							 	$cancharge=50;
								$totcan=50*$seat;
							   echo "<tr><td><b>No of Seats to Be Cancel:</b><td>$seat</td></tr>";
								   echo "<tr><td><b>Fair Per Ticket</b></td><td>$fair</td></tr>";
							   echo "<tr><td><b>Cancelation Charge Per Ticket:</b></td><td>$cancharge</td></tr>";
							   

		                       echo "<tr><td><b>Previous Amount:</b></td><td>$prevamount</td></tr>"; 
                                $ded=$seat*$fair;

								echo "<tr><td><b>Refund Amount:</b></td><td>$ded</td></tr>";
							
								echo "<tr><td><b>(-)Cancelation Charges:</b></td><td>$totcan</td></tr>";
								$netref=$prevamount-$ded+$totcan;
								$unetref=$ded-$totcan;
								echo "<tr class='active'><td><b>Net Amount to Be Refunded:</b></td><td><b>$unetref</b></td></tr>";
								echo "<form method='post' name='final'><input name='neta' type='hidden' value='$unetref' /><input name='seat' type='hidden' value='$seat' /><input name='val' type='hidden' value='$val' />";
								echo "<tr><td colspan='2'><input type='submit' name='submit' value='Cancel Ticket' class='btn btn-primary col-lg-offset-9'/></td></tr></form>";
                                                        
                        }
                        
                        
                        ?>

</table>
                    

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
    
<?php
require_once("../core/footer.php");
?> 
                          
