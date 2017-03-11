
<html>
<head>
<script type="text/javascript">
</script></head>
<body >
<?php
require_once("core/sessioncheck.php");

?>
<?php
	require("core/head.php");
	
?>
<?php
	require("core/logo.php");
	require("config/connection.php");
?>          
 
 <?php
if(isset($_REQUEST["submit"]))
{
 	$date=$_POST["date"];
    $qid=$_POST["qid"];
    $mid=$_POST["mid"];
    $oid=$_POST["oid"];
    $ptime=$_POST["ptime"];
    $ploc=$_POST["ploc"];	
	$dloc=$_POST["dloc"];
	$reason=$_POST["reason"];
//$connection = mysqli_connect("localhost:3306","techfoss_cab","sm21414","techfoss_cab") or die("Unable to Connect");
$que="INSERT INTO unschedule VALUES('$bookdate','$qid', '$mid','$opid','$ptime','$ploc','$dloc','$reason')";
  $result = mysqli_query($connection,$que);

//mail function starts//

    $to = 'sushant217@outlook.com';
    $from= $mid.'@abc.com';
    $subject = 'mail check';
    $message = '<div style="font-family:HelveticaNeue-Light,Arial,sans-serif;background-color:#eeeeee">
    <table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee">
    <tbody>
        <tr>
            <td>
                <table align="center" width="750px" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee" style="width:750px!important">
                <tbody>
                    <tr>
                        <td>
                            <table width="690" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee">
                            <tbody>
                                <tr>
                                    <td colspan="3" height="80" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee" style="padding:0;margin:0;font-size:0;line-height:0">
                                        <table width="690" align="center" border="0" cellspacing="0" cellpadding="0">
                                        <tbody>
                                            <tr>
                                                <td width="30"></td>
                                                <td align="left" valign="middle" style="padding:0;margin:0;font-size:0;line-height:0"><a href="http://www.techfossil.com/" target="_blank"><img src="img/logo.png" ></a></td>
                                                <td width="30"></td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" align="center">
                                        <table width="630" align="center" border="0" cellspacing="0" cellpadding="0">
                                        <tbody>
                                            <tr>
                                                <td colspan="3" height="60"></td></tr><tr><td width="25"></td>
                                                <td align="center">
                                                    <h1 style="font-family:HelveticaNeue-Light,arial,sans-serif;font-size:48px;color:#404040;line-height:48px;font-weight:bold;margin:0;padding:0">Welcome to NCR IDC PORTAL</h1>
                                                </td>
                                                <td width="25"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" height="0px"></td></tr><tr><td colspan="5" align="center">
                                                    <p style="color:#404040;font-size:16px;line-height:24px;font-weight:lighter;padding:0;margin:0"><!--type text here--></p><br>
                                                    <p style="color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0">
                                                        <!--type text here-->
                        
                                                        </p>
                                                </td>
                                            </tr>
                                            <tr>
                                            <td colspan="4">
                                                <div style="width:100%;text-align:center;margin:30px 0">
                                                    <table align="center" cellpadding="0" cellspacing="0" style="font-family:HelveticaNeue-Light,Arial,sans-serif;margin:0 auto;padding:0">
                                                    <tbody>
                                                        <tr>
                                                         
                                                        </tr>
                                                    </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td colspan="3" height="30"></td></tr>
                                    </tbody>
                                    </table>
                                </td>
                            </tr>
                            
                            <tr bgcolor="#ffffff">
                                <td width="30" bgcolor="#eeeeee"></td>
                                <td>
                                    <table width="570" align="center" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                        <tr>
                                            <td colspan="4" align="center">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" align="center"><h2 style="font-size:24px">You Have An Unscheduled/Scheduled Cab Request</h2></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <!--<td width="120" align="right" valign="top"><img src="http://i.imgbox.com/qrfX6RWNa.png" alt="tool" width="120" height="120"></td>-->
                                            <td width="30"></td>
                                            <td align="left" valign="middle">
                                                
                                                <h3 style="color:#404040;font-size:18px;line-height:24px;font-weight:bold;padding:0;margin:0">Date </h3>
                                                <div style="line-height:5px;padding:0;margin:0">&nbsp;</div>
                                                <div style="color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0" id="date">'.$date.'</div>
                                                <div style="line-height:10px;padding:0;margin:0">&nbsp;</div>
                                            </td>
                                            <td width="30"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" height="20" style="padding:0;margin:0;font-size:0;line-height:0"></td>
                                        </tr>
                                        <tr>
                                            <!--<td width="120" align="right" valign="top"><img src="http://i.imgbox.com/5zbmOytI.png" alt="no fees" width="120" height="120"></td>-->
                                            <td width="30"></td>
                                            <td align="left" valign="middle">
                                                <h3 style="color:#404040;font-size:18px;line-height:24px;font-weight:bold;padding:0;margin:0">QuickLook ID</h3>
                                                <div style="line-height:5px;padding:0;margin:0">&nbsp;</div>
                                                <div style="color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0" id="qid">'.$qid.'</div>
                                                <div style="line-height:10px;padding:0;margin:0">&nbsp;</div>
                                            </td>
                                            <td width="30"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" height="20" style="padding:0;margin:0;font-size:0;line-height:0"></td>
                                        </tr>
                                        <tr>
                                            
                                            <td width="30"></td>
                                            <td align="left" valign="middle">
                                                <h3 style="color:#404040;font-size:18px;line-height:24px;font-weight:bold;padding:0;margin:0">Manager ID</h3>
                                                <div style="line-height:5px;padding:0;margin:0">&nbsp;</div>
                                                <div style="color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0" id="mid">'.$mid.'</div>
                                                <div style="line-height:10px;padding:0;margin:0">&nbsp;</div>
                                            </td>
                                            <td width="30"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" height="20" style="padding:0;margin:0;font-size:0;line-height:0"></td>
                                        </tr>
                                        <tr>
                                            
                                            <td width="30"></td>
                                            <td align="left" valign="middle">
                                                <h3 style="color:#404040;font-size:18px;line-height:24px;font-weight:bold;padding:0;margin:0">Operation ID</h3>
                                                <div style="line-height:5px;padding:0;margin:0">&nbsp;</div>
                                                <div style="color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0" id="oid">'.$oid.'</div>
                                                <div style="line-height:10px;padding:0;margin:0">&nbsp;</div>
                                            </td>
                                            <td width="30"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" height="20" style="padding:0;margin:0;font-size:0;line-height:0"></td>
                                        </tr>
                                        <tr>
                                           
                                            
                                            <td width="30"></td>
                                            <td align="left" valign="middle">
                                                <h3 style="color:#404040;font-size:18px;line-height:24px;font-weight:bold;padding:0;margin:0">Pick Up Time </h3>
                                                <div style="line-height:5px;padding:0;margin:0">&nbsp;</div>
                                                <div style="color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0" id="ptime">'.$ptime.'</div>
                                                <div style="line-height:10px;padding:0;margin:0">&nbsp;</div>
                                            </td>
                                            <td width="30"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" height="20" style="padding:0;margin:0;font-size:0;line-height:0"></td>
                                        </tr>
                                        <tr>
                                            
                                            <td width="30"></td>
                                            <td align="left" valign="middle">
                                                <h3 style="color:#404040;font-size:18px;line-height:24px;font-weight:bold;padding:0;margin:0">Pick Up Location</h3>
                                                <div style="line-height:5px;padding:0;margin:0">&nbsp;</div>
                                                <div style="color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0" id="ploc">'.$ploc.'</div>
                                                <div style="line-height:10px;padding:0;margin:0">&nbsp;</div>
                                            </td>
                                            <td width="30"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" height="20" style="padding:0;margin:0;font-size:0;line-height:0"></td>
                                        </tr>
                                        <tr>
                                            
                                            <td width="30"></td>
                                            <td align="left" valign="middle">
                                                <h3 style="color:#404040;font-size:18px;line-height:24px;font-weight:bold;padding:0;margin:0">Drop Location </h3>
                                                <div style="line-height:5px;padding:0;margin:0">&nbsp;</div>
                                                <div style="color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0" id="dloc">'.$dloc.'</div>
                                                <div style="line-height:10px;padding:0;margin:0">&nbsp;</div>
                                            </td>
                                            <td width="30"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" height="20" style="padding:0;margin:0;font-size:0;line-height:0"></td>
                                        </tr>
                                        <tr>
                                            
                                            <td width="30"></td>
                                            <td align="left" valign="middle">
                                                <h3 style="color:#404040;font-size:18px;line-height:24px;font-weight:bold;padding:0;margin:0">Reason</h3>
                                                <div style="line-height:5px;padding:0;margin:0">&nbsp;</div>
                                                <div style="color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0" id="reason">'.$reason.'</div>
                                                <div style="line-height:10px;padding:0;margin:0">&nbsp;</div>
                                            </td>
                                            <td width="30"></td>
                                        </tr>


                                        <tr>
                                            <td colspan="4">&nbsp;</td>
                                        </tr>
                                    </tbody>
                                    </table>
                                    <table width="570" align="center" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 style="color:#404040;font-size:22px;font-weight:bold;line-height:26px;padding:0;margin:0">&nbsp;</h2>
                                                <div style="color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0"><strong>Please Approve Or Reject The Request by Clicking Below Buttons !</strong></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <div style="text-align:center;width:100%;padding:40px 0">
                                                    <table align="center" cellpadding="0" cellspacing="0" style="margin:0 auto;padding:0">
                                                    <tbody>
                                                        <tr>
                                                            <td align="center" style="margin:0;text-align:center"><a href="http://www.techfossil.com/cab/user/show.php?approve=true" style="font-size:18px;font-family:HelveticaNeue-Light,Arial,sans-serif;line-height:22px;text-decoration:none;color:#ffffff;font-weight:bold;border-radius:2px;background-color:#00a3df;padding:14px 40px;display:block" target="_blank">Approve </a></td>
                                                                

                        <td colspan="5" height="20" style="padding:50px;margin:50px;font-size:0;line-height:0"></td>

                                                                <td align="center" style="margin:0;text-align:center"><a href="http://www.techfossil.com/cab/user/show.php?approve=false" style="font-size:18px;font-family:HelveticaNeue-Light,Arial,sans-serif;line-height:22px;text-decoration:none;color:#ffffff;font-weight:bold;border-radius:2px;background-color:#00a3df;padding:14px 40px;display:block" target="_blank">Reject</a></td>

                                                        </tr>
                                                    </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                      </tr><tr><td>&nbsp;</td>
                                      </tr></tbody></table></td>
                                <td width="30" bgcolor="#eeeeee"></td>
                            </tr>
                            </tbody>
                            </table>
                            <table align="center" width="750px" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee" style="width:750px!important">
                            <tbody>
                                <tr>
                                    <td>
                                        <table width="630" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee">
                                        <tbody>
                                            <tr><td colspan="2" height="30"></td></tr>
                                            <tr>
                                                <td width="360" valign="top">
                                                    <div style="color:#a3a3a3;font-size:12px;line-height:12px;padding:0;margin:0">&copy; 2017 Sushant. All rights reserved.</div>
                                                    <div style="line-height:5px;padding:0;margin:0">&nbsp;</div>
                                                    <div style="color:#a3a3a3;font-size:12px;line-height:12px;padding:0;margin:0">Made in India</div>
                                                </td>
                                                
                                            </tr>
                                            <tr><td colspan="2" height="5"></td></tr>
                                           
                                        </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
                </table>
            </td>
        </tr>
    </tbody>
    </table>
  </div>';

  
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
    $headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

    $mails= mail($to, $subject, $message, $headers);
    if ($mails) 
    {
              echo 'Your message has been sent.';
            } else {
              echo 'There was a problem sending the email.';
            }
//mail function end
}
 ?>    


<div class="page-header col-lg-10 col-lg-offset-1">
                    
                     <h1>Employee Detail</h1>
   </div>  
               
<div class="content">
            <div class="col-lg-12">
            
                    <div class="col-md-8 col-md-offset-1 well">
                	
                    <div class="row col-sm-offset-1">	
<form name="unschedule" onSubmit="return res(this)" class="col-md-8" method="POST">
 <div class="input-group col-sm-6">
  
  <input type="text" nsme="search" placeholder="Employee Name" class="form-control ">
    <span class="input-group-btn">
        <button class="btn btn-default " type="button"><spam class="glyphicon glyphicon-search" ></spam>Go!</button>
   </span>
 
</div>
  </form>
  
  
</div>
<div class="row" >
<div id="result">
<table width="716" border="1" margin-left="5px">
    <tr>
      <th width="59" scope="col">Q.Look ID</th>
      <th width="80" scope="col">Name</th>
      <th width="77" scope="col">Cluster</th>
      <th width="76" scope="col">Cab No</th>
      <th width="59" scope="col">Driver No</th>
      <th width="72" scope="col">Contact No</th>
       <th width="59" scope="col">Shift</th>
      <th width="72" scope="col">Email_Id</th>
    </tr>
  </table>
</div>
</div>
</div>
		<div class="col-md-2  my-sidebar affix">
			<div class="list-group">
                    <a href="super_notify" class="list-group-item active">
                    Notification
                    </a>
              
                    <a href="super_vendor.php" class="list-group-item">Vendor
                    </a>
                    <a href="super_driver.php" class="list-group-item">Driver
                    </a>
 
                    <a href="super_cluster.php" class="list-group-item">Clustering
                    </a>
                     <a href="super_report.php" class="list-group-item">Report
                    </a>
                     <a href="super_employee.php" class="list-group-item">Employee Detail
                    </a>
                    </div>
                    
                    <!--From Here-->          
            </div>
        </div>
    </div>          

<?php
require_once("footer.php");
?> 
