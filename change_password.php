<?php
$no_visible_elements=true;
include('header.php'); ?>

<?php
if(!isset($_SESSION))
{
 session_start();
}
 include_once("connect.php");
 mysql_select_db("magnum_hiprojects");
 if($_SESSION['user']=="") {
   header("Location:login.php");
   exit;
 }
 if(isset($_POST['change_password']))
{
	//echo $_POST['currentpass'];
	//echo $_POST['confirmpass'];
//	echo $_POST['newpass'];
   	$query = "select * from  tbl_adminuser where admin_password='".$_POST['currentpass']."' ";
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	$count = mysql_num_rows($result);
	//echo $count;
	if($count<=0)
	{
		 $_SESSION['exists'] = 0;
	}
	else
	{
	if($_POST['confirmpass']!=$_POST['newpass'] && $count<=0)
	{
		//echo $_POST['confirmpass'];
		//echo $_POST['newpass'];
	  $_SESSION['exists'] = 1;
	}
	elseif($_POST['confirmpass']=='' || $_POST['newpass']=='')
	{
	   $_SESSION['exists'] = 2;
	}
	else
	{
	if(($_POST['confirmpass']!='' && $_POST['newpass']!='') && ($_POST['confirmpass']==$_POST['newpass']))
	{
		$query = "update  tbl_adminuser set admin_password='".$_POST['confirmpass']."'";
		//echo($query);
		$result = mysql_query($query) or die("Query failed : " . mysql_error());
		if($result)
		{
			echo "<script language ='javascript'>alert('Your Password Changed Successfully, To confirm please logout and login again with the New Password !'); window.location='index.php';</script>";
		}
	}
	
}
}
}
?>

			<div class="row-fluid">
				<div class="span12 center login-header">
					<h2>Welcome to HiProjects</h2>
				</div><!--/span-->
			</div><!--/row-->
			
			<div class="row-fluid">
				<div class="well span5 center login-box">
					<div class="alert alert-info">
						Please enter Current, New & Confirm Passwords
					</div>
					<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="myform">
						<fieldset>
							<div class="input-prepend" title="Password" data-rel="tooltip">
							<p><label>Current Password</label>
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="currentpass" id="password" type="password" /></p>
						
							</div>
							<div class="clearfix"></div>
						

							<div class="input-prepend" title="Password" data-rel="tooltip">
								<label>New Password</label><span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="newpass" id="password" type="password"  />
					
							</div>
							
							<div class="input-prepend" title="Password" data-rel="tooltip">
								<label>Confirm Password</label><span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="confirmpass" id="password" type="password" />
							
							
							</div>
							<div class="clearfix"></div>

							<!--<div class="input-prepend">
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>
							</div>-->
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-primary" name="change_password">Change Password</button>
							</p>
						</fieldset>
					</form>
				</div><!--/span-->
			</div><!--/row-->
<?php include('footer.php'); ?>
