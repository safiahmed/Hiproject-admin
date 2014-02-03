<?php ob_start();?>
<?php include('header.php');
  include_once("connect.php"); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="news_letter.php">NewsLetters</a><span class="divider">/</span>
					</li>
					<li>
						<a href="add_news_letter.php">Add NewsLetters</a>
					</li>
				</ul>
			</div>
			<a href="news_letter.php">NewsLetters</a> 
			
			
			<br/><div class="row-fluid sortable">
				<div class="box span12">
						
					<div class="box-header well" data-original-title>
					<h2><span class="icon icon-link"/></span> Add NewsLetter</h2>
						<!--<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>-->
					</div>
					<div class="box-content">
					<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data" class="form-horizontal" >
						
						  <fieldset>
							<!--<legend>Datepicker, Autocomplete, WYSIWYG</legend>-->
							<div class="control-group">
								<label class="control-label" for="focusedInput">Title</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="test_by" type="text">
								</div>
							  </div>
							
							

							<!--<div class="control-group">
							  <label class="control-label" for="fileInput">File input</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>-->          
							<div class="control-group">
							  <label class="control-label" for="textarea2">Description</label>
							  <div class="controls">
								<textarea class="autogrow" name="test_matter"></textarea>
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
							<?php
							/*if(isset($_POST['add']))
							
							{
								//======================generic upload of file=======================//
								
$allowedExts = array("gif", "jpeg", "jpg", "png");
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

								//========================================//
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
										if($_FILES["file"]["name"]!=NULL)
									{	
										
									$link="upload/".$_FILES["file"]["name"];									
									
									}
								
									else
									{
									$link="--NIL--";
									}		
					
				
				$testi_by=trim(strip_tags($_POST['test_by']));
				$testi_matter=trim(strip_tags($_POST['test_matter']));
				
				
	            $insert="insert into tbl_testimonials(test_by,test_matter,test_image,test_status) values('".$testi_by."','".$testi_matter."','".$link."','".$activeval."')";
                $result = mysql_query($insert) or die("Query failed : " . mysql_error());
                echo $result;
				header("Location:view_testimonial.php");
					
					}	
								*/?>
						  </fieldset>
						</form> 
                    
                            						

					</div>
				</div><!--/span-->

			</div><!--/row-->


			
    
<?php include('footer.php'); ?>
<?php ob_flush();?>