<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="view_products.php">Products</a><span class="divider">/</span>
					</li>
					<li>
						<a href="add_product.php">Add Products</a>
					</li>
				</ul>
			</div>
			<a href="view_products.php">View Products</a>
			<br/><div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-th-large"></i> Add Products</h2>
						<!--<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>-->
					</div>
					<div class="box-content">
						<form class="form-horizontal">
						  <fieldset>
							
							<div class="control-group">
								<label class="control-label" for="selectError">Select Category</label>
								<div class="controls">
								  <select id="selectError" data-rel="chosen">
									<option>ARM</option>
									<option>Android</option>
									<option>Embedded</option>
									<option>Electrical</option>
									<option>Communication</option>
									<option>Automotive</option>
									<option>Others</option>
								  </select>
								</div>
							  </div>
							  
							<div class="control-group">
								<label class="control-label" for="focusedInput">Product Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="Application for Hospital Billing">
								</div>
							</div> 
							
							<div class="control-group">
							  <label class="control-label" for="textarea2">Product overview</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3"></textarea>
							  </div>
							</div>
							
							<div class="control-group">
								<label class="control-label">Product ThumbImage</label>
								<div class="controls">
								  <input type="file">
								</div>
							  </div>
							  
							 <div class="control-group">
								<label class="control-label" for="focusedInput">Product Price</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" >
								</div>
							</div>
                                                       
                                                      <div class="control-group">
								<label class="control-label" for="focusedInput">Project Kit Price</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" >
								</div>
							</div> 
                                                      
                                                      <div class="control-group">
								<label class="control-label" for="focusedInput">Do it yourself Kit Price</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" >
								</div>
							</div> 
                                                      
                                                      <div class="control-group">
								<label class="control-label" for="focusedInput">Readymade Kit Price</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" >
								</div>
							</div> 
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
							
							<div class="control-group">
								<label class="control-label">Product Deal</label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
									Deal
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
									No Deal
								  </label>
								</div>
							  </div>
							 
                             <div class="control-group">
								<label class="control-label" for="focusedInput">Model Number</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" >
								</div>
							</div> 	

							<div class="control-group">
								<label class="control-label">Product Image1</label>
								<div class="controls">
								  <input type="file">
								</div>
							  </div>
							  
							 <div class="control-group">
								<label class="control-label">Product Image2</label>
								<div class="controls">
								  <input type="file">
								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label">Product Image3</label>
								<div class="controls">
								  <input type="file">
								</div>
							  </div>
							  
							 
							  
							  <div class="control-group">
								<label class="control-label">Download</label>
								<div class="controls">
								  <input type="file">
								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Video Link</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" >
								</div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="textarea2">Product Abstract</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3"></textarea>
							  </div>
							</div>
							
							 <div class="control-group">
								<label class="control-label">Product BlockDiagram</label>
								<div class="controls">
								  <input type="file">
								</div>
							  </div>
							
							
							

							       
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->


	
			
			
    
<?php include('footer.php'); ?>
