<?php ob_start();?>
<?php include('header.php'); 
         include_once("connect.php");?>

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="category_list.php">category</a><span class="divider">/</span>
					</li>
					<li>
						<a href="add_category.php">Add category</a>
					</li>
				</ul>
			</div>
			
			<a href="category_list.php">Category List</a> 
			<br/><div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Add Category</h2>
						<!--<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>-->
					</div>
					<div class="box-content">
						<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="form-horizontal" enctype="multipart/form-data" name="my_document">
						  <fieldset>
							
							<div class="control-group">
								<label class="control-label" for="focusedInput">Category Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="cat_name" id="focusedInput" type="text" value="Enter category name..">
								</div>
							  </div>
							
							<div class="control-group">
							  <label class="control-label" for="date01">Date input</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" name="date" id="date01" value="02/16/12">
							  </div>
							</div>

							       
							<div class="control-group">
							  <label class="control-label" for="textarea2">Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="cat_desc" id="textarea2" rows="3"></textarea>
							  </div>
							</div>
							<div class="controls">
								  <label class="radio">
									<input type="radio" name="active" id="optionsRadios1" value="active" checked="">
									Active
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<input type="radio" name="active" id="optionsRadios2" value="inactive">
									Archive
								  </label>
								</div>
							<div class="form-actions">
							  <button type="submit" name="add" class="btn btn-primary">Add</button>
							 
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->


			
			<?php
							if(isset($_POST['add']))
							
							{
								//======================generic upload of file=======================//
								
/*$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 200000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      $a = move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
	  //if($a){echo "success";}else {echo "upload fail";}
      echo "Stored in: " . "./upload/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }

*/								//========================================//
									 if (isset($_POST['active']))
										{
											//echo $_POST['active'];
											$active=$_POST['active'];
												if($active=='active')
												{
													$activeval=1;
													//echo ($activeval);
												}
												elseif($active=='inactive')
												{
													$activeval=0;
													//echo ($activeval);
												}
	  				 					}
										
					
				
				$testi_by=trim(strip_tags($_POST['cat_name']));
				$testi_matter=trim(strip_tags($_POST['cat_desc']));
				
				
	            $insert="insert into tbl_category(cat_name,cat_desc,cat_status) values('".$testi_by."','".$testi_matter."','".$activeval."')";
                $result = mysql_query($insert) or die("Query failed : " . mysql_error());
                echo $result;
				header("Location:category_list.php");
					
					}	
								?>
			
			
			
			
			
    
<?php include('footer.php'); ?>
<?php ob_flush();?>
