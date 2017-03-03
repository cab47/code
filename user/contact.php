
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
        <h2>You May Contact Us</h2>
                                   
                                   <div class="row col-md-10">
                                  

<!--<h3>For Doubts/Queries/Complaints/Appreciations regarding bookings/services</h3>-->
<!--<p><b>Phone Lines are temporary down.Please try after sometime.</p>-->
<p><b>Customer Care No.</b> 011-897695989</p> 


<!-- <p><b>MON - SAT(10 AM - 6 PM)</b><br/>
 011-23344787 </p>   -->         
<p><b>Fax no.</b>011-23345790</p>
<p><b>Chennai Customer Care No.</b> 044-25379000</p>
<p>&nbsp;</p>
<p><b>For Railway tickets booked through IRCTC</b></p>
<p><b>General Information</b></p>
<p><b>I-tickets/e-tickets:</b> <a href="mailto:care@sushant.co.in">care@sushant.co.in</a></p>
<p><b>For Cancellation E-tickets:</b> <a href="mailto:etickets@amit.co.in">etickets@amit.co.in</a></p>
<p><b>For Mumbai Suburban Season tickets:</b> <a href="mailto:seasontickets@jodha.co.in">seasontickets@jodha.co.in</a></p>
<!-- <p><b>For Shubhyatra users:</b> <a href="mailto:shubhyatra@irctc.co.in">shubhyatra@irctc.co.in</a></p> -->
<p>&nbsp;</p>
<tr>
<td><b>For Shubh Yatra user who do not receive the card within 01 month from the date of application kindly call on the Railway SBI Card Helpline nos. at
0124-390217866212 or 187899961295 (if calling from BSNL/MTNL line) or send email to  <a href="mailto:feedback.gesbi@ge.com">feedback.gesbi@ge.com</a> For other queries on your Shubh Yatra account kindly email at <a href="mailto:shubhyatra@sushant.co.in">shubhyatra@sushant.co.in</a></td></tr>
<br><br>
<p><b>Registered Office / Corporate Office :</b></p>
<p><b>Railway Corporation Ltd.,</b><br/>
              9th Floor, Bank of Bharat Building,<br>
              16, jagannath street, New Delhi 110201.<br>
              <b>Tel:</b> 011-233188973/287991264<br>
</b></b>

</div>

					</div>

<div class="col-lg-3  my-sidebar affix">
            	
           	
     
               
                 
                    
                    <!--From Here-->          
            </div>
        </div>
    </div>                    
                    
<?php
require_once("core/footer.php");
?>                    
    