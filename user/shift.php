
<?php
session_start();
?>
<html>
<head>
<script type="text/javascript">
function cur_date(){
    var day=new Date().getDate();
    var month=new Date().getMonth()+1;
    var year= new Date().getFullYear();
    document.getElementById("date").value= day+"/"+month+"/"+year;
}
</script></head>
<body onload="cur_date()">


<?php
	require("core/head.php");
	
?> 

<script type="text/javascript">
function cur_date(){
    var day=new Date().getDate();
    var month=new Date().getMonth()+1;
    var year= new Date().getFullYear();
    document.getElementById("date").value= day+"/"+month+"/"+year;
}
</script>
<?php
	require("core/logo.php");
?>       


    
<div class="page-header col-lg-10 col-lg-offset-1">
                    
                     <h1>Shift Change</h1>
   </div>
                    
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
                      <form name="temp" method="post" class="col-lg-7">
                        	<div class="form-group">
                            <label><h4>Date</h4></label>
<input name="date" id="date" value="" class="form-control" type="text" placeholder="" />
</div>

<div class="form-group">
<label><h4>QuickLook Id</h4></label>    
<input name="jdate" required class="form-control" type="text" placeholder="" />
</div>   
<div class="form-group">
<label><h4>Manager ID</h4></label>  
<input name="jdate" required class="form-control" type="text" placeholder="" />
</div>
<div class="form-group">
<label><h4>Operation ID</h4></label>
<input name="jdate" required class="form-control" type="text" placeholder="" />
</div>
                        
<div class="form-group">
<label><h4>Shift</h4></label>
<select name="Shift" class="form-control">
<option value="Select">-Select-</option>  
<option value="12-9">12-9PM</option>
<option value="7-4">7-4PM</option>
</select>
</div>
                      
<div class="form-group">
<label><h4>Reason</h4></label>
<textarea name="jdate" required class="form-control" type="text" placeholder="" /></textarea>
</div>

<input type="submit" name="submit" class="btn btn-primary" value="Submit"/>
</form>                    
</div>
<div class="col-lg-3  my-sidebar affix">
  <div class="list-group">
                    <a href="user_profile.php" class="list-group-item active">
                     Edit Profile
                    </a>
              
                    <a href="unsheduled.php" class="list-group-item">UnScheduled Cabs
                    </a>
                    <a href="shift.php" class="list-group-item">Shift Change
                    </a>
 
                    <a href="notify.php" class="list-group-item">Notification
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
          
              
              	

