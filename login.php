<?php
$no_visible_elements=true;
include('header.php'); ?>
<?php
if(!isset($_SESSION))
{
  session_start();
 }
  include("connect.php"); 
  include("admin_sql.php");
  mysql_select_db("magnum_hiprojects");
  
  // Here is an example of PDO code you can use that is more secure than using $_POST variables in your SQL string
  if(isset($_POST['login']) && $_POST['password']!="") {
  $stmt = $dbh->prepare("select * from tbl_adminuser where admin_name = :user and admin_password = :pass";);
  $stmt->execute(array(":user" => $_POST['username']), ":pass" => $_POST['password'])
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC)
  if (sizeof($rows)==1) {
	  $_SESSION['user']=$data[1];
	  // Man, if you've already included header.php; you won't be able to send a Location: header as you've already sent the <!DOCTYPE>, so there's headers that have already been sent.
	  header("Location:index.php");
	  exit;
  }
  else{?>
	     
					    <script type="text/javascript">
					    alert("Incorrect username or password");
					    </script>
	     		
							
							<?php
	   //$message="<tr><td align='center'><font color='red' size='2'><p>Warning! Incorrect Password, Please re-enter correct Password</p></td></tr>";
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
						Please login with your Username and Password.
					</div>
					<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="myform">
						<fieldset>
							<div class="input-prepend" title="Username" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="username" id="username" type="text" value="admin" />

							
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" value="admin123456" />
							<span id="incorrect"></span>
							
							</div>
							<div class="clearfix"></div>

							<!--<div class="input-prepend">
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>
							</div>-->
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-primary" name="login">Login</button>
							</p>
						</fieldset>
					</form>
				</div><!--/span-->
			</div><!--/row-->
<?php include('footer.php'); ?>
