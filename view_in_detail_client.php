<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Client Detail</a>
					</li>
				</ul>
			</div>
			<a href="view_clients.php"> Client List</a>
			
			<br/><div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> client Detail</h2>
						<!--<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>-->
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  
						  
							  <tr>
								  <th>Client Name</th><td>Jhon Mandrics</td></tr>
								 <tr> <th>Date registered</th><td class="center">2012/01/01</td></tr>
								 <tr> <th>Email</th>	<td class="center">jhon@gmail.com</td></tr>
								 <tr> <th>College Name</th> <td class="center">J.M.I.T</td></tr>
								 <tr> <th>Branch</th><td class="center">CSE</td></tr>
								 <tr> <th>Mobile</th> <td class="center">9945625246</td></tr>
								 <tr> <th>file</th> <td class="center">image/img.jpg</td></tr>
								 <tr> <th>Topic</th> <td class="center">project</td></tr>
								 <tr> <th>Contact</th> <td class="center">yes</td></tr>
								
								 <tr> <th>Actions</th><td class="center">
									<span class="label label-success">Active</span>
									
									
									<a class="btn btn-info" href="view_group_client.php">
										<i class="icon-edit icon-white"></i>  
										View Group                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="icon-trash icon-white"></i> 
										Delete
									</a>
								
								</td>
								
								  
							  </tr>
						  
						
							
							
							
							
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
  
<?php include('footer.php'); ?>
