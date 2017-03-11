
<?php
session_start();
?>
<?php
if(!isset($_SESSION["ename"]))
{
	header("location:../test.php");
}

?>
<?php



?>


<?php
	require("core/head.php");
	
?> 

<?php
	require("core/logo.php");
?>       
    
<div class="page-header col-lg-10 col-lg-offset-1">
                    
                     <h1>Check all Notification</h1>
   </div>
                    
             <div class="content">
    	<div class="row">
        	<div class="col-lg-offset-1 col-lg-8 well">         
    
               
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
                       <form name="temp" method="post" class="col-lg-8">
							<div class="form-group">
							<label class="col-sm-3">Date</label>

							<select name="day" class="form-control-col-sm-3">
							<option value="Day">Day</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            

                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>

                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
						    </select>

                        <select name="Month" class="form-control-col-sm-3">
                            <option name="Month" >Month</option>
                            <option name="Jan">January</option>
                            <option value="Feb">February</option>
                            <option value="Mar">March</option>
                            <option name="Apr">April</option>
                            <option value="May">May</option>
                            <option value="Jun">June</option>
                            <option name="JUl">July</option>
                            <option value="Aug">August</option>
                            <option value="Sept">September</option>
                            <option name="Oct">October</option>
                            <option value="Nov">November</option>
                            <option value="Dec">December</option>
                        </select>   

                        <select name="year" class="form-control-col-sm-3">
                            <option name="year">Year</option>
                            <option value="2016y">2016</option>
                            <option value="2017">2017</option>
                            
                        </select>



					</div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Submit"/>
                </form>                    
</div>
<div class="col-lg-2  my-sidebar affix">
  <div class="list-group">
                    <a href="user_profile.php" class="list-group-item active">
                     Edit Profile
                    </a>
              
                    <a href="unsheduled.php" class="list-group-item">UnScheduled Cabs
                    </a>
                    <a href="shift.php" class="list-group-item">Shift Change
                    </a>
 
                    <a href="cancel.php" class="list-group-item">Notification
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
          
              
              	

