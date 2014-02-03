<?php include('header.php'); 
include_once("connect.php"); 

?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="view_faq.php">FAQ</a><span class="divider">/</span>
					</li>
					<li>
						<a href="add_faq.php">Add FAQ</a>
					</li>
				</ul>
			</div>
			
			<a href="view_faq.php">FAQ</a> 
			<br/><div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Add FAQ</h2>
						
					</div>
					<div class="box-content">
					     <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data" class="form-horizontal" name="my_document" onSubmit="return Checkfiles(this);">
						
						  <fieldset>
							<!--<legend>Datepicker, Autocomplete, WYSIWYG</legend>-->
							<div class="control-group">
								<label class="control-label" for="focusedInput">Question</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="faq_question" type="text">
								</div>
							  </div>
							
							

							<!--<div class="control-group">
							  <label class="control-label" for="fileInput">File input</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>-->          
							<div class="control-group">
							  <label class="control-label" for="textarea2">Answer</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" name="faq_answers" rows="3"></textarea>
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
												
					
				
				$testi_by=trim(strip_tags($_POST['faq_question']));
				$testi_matter=trim(strip_tags($_POST['faq_answers']));
				
	            $insert="insert into tbl_faq(faq_question,faq_answers,faq_status) values('".$testi_by."','".$testi_matter."','".$activeval."')";
                $result = mysql_query($insert) or die("Query failed : " . mysql_error());
                
			
			echo '<script type="text/javascript">' . "\n"; 
            echo 'window.location="view_faq.php";'; 
            echo '</script>';
			
			
					}	
			?>
    
<?php include('footer.php'); ?>
