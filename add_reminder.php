<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="view_faq.php">Reminders</a><span class="divider">/</span>
					</li>
					<li>
						<a href="add_faq.php">Add Reminder</a>
					</li>
				</ul>
			</div>
			<a href="view_reminders.php">Reminder</a> 
			
			
			<br/><div class="row-fluid sortable">
				<div class="box span12">
						
					<div class="box-header well" data-original-title>
					<h2><span class="icon icon-link"/></span> Add Reminder</h2>
						<!--<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>-->
					</div>
					<div class="box-content">
						<form class="form-horizontal">
						  <fieldset>
							<!--<legend>Datepicker, Autocomplete, WYSIWYG</legend>-->
							<div class="control-group">
								<label class="control-label" for="focusedInput">Reminder</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text">
								</div>
							  </div>
							
							<div class="control-group">
							  <label class="control-label" for="date01">Date input</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12">
							  </div>
							</div>

							<!--<div class="control-group">
							  <label class="control-label" for="fileInput">File input</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>-->          
							
							
							
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Reminder</button>
							 
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->


			
    
<?php include('footer.php'); ?>
