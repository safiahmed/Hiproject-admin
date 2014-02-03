<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="category_list.php">Clients</a>
					</li>
				</ul>
			</div>
			
			
			
			
			
			<br/><br/><div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Clients</h2>
						<!--<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>-->
					</div>
					<div class="box-content">
                                            
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
							  <thead>
								  <tr>
									  <th>Client Name</th>
									  <th>Date registered</th>
									  <th>Email</th>
									  <th>Status</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
							    <tr>
									<td>Jhon Mandrics</td>
									<td class="center">2012/01/01</td>
									<td class="center">jhon@gmail.com</td>
									<td class="center">
										
										<a href="view_in_detail_client.php" style="text-decoration:none;"><span class="label label-important">view profile</span></a>
										<a href="view_group_client.php" style="text-decoration:none;"><span class="label label-warning">View group</span></a>
									</td>                                       
								</tr>
								<tr>
									<td>Morison</td>
									<td class="center">2012/01/01</td>
									<td class="center">Morison@yahoo.com</td>
									<td class="center">
										
										<a href="#" style="text-decoration:none;"><span class="label label-important">view profile</span></a>
										<a href="add_sub_category.php" style="text-decoration:none;"><span class="label label-warning">View group</span></a>
									</td>                                       
								</tr>
								<tr>
									<td>Glenn</td>
									<td class="center">2012/02/01</td>
									<td class="center">glenn@gmail.com</td>
									<td class="center">
										
										<a href="#" style="text-decoration:none;"><span class="label label-important">view profile</span></a>
										<a href="add_sub_category.php" style="text-decoration:none;"><span class="label label-warning">View group</span></a>
										
									</td>                                       
								</tr>
								<tr>
									<td>Robort</td>
									<td class="center">2012/01/21</td>
									<td class="center">robort@gmail.com</td>
									<td class="center">
										
										<a href="#" style="text-decoration:none;"><span class="label label-important">view profile</span></a>
										<a href="add_sub_category.php" style="text-decoration:none;"><span class="label label-warning">View group</span></a>
									</td>                                        
								</tr>
								<tr>
									<td>Elinam</td>
									<td class="center">2012/03/01</td>
									<td class="center">elinam@redif.com</td>
									<td class="center">
										
										<a href="#" style="text-decoration:none;"><span class="label label-important">view Profile</span></a>
										<a href="add_sub_category.php" style="text-decoration:none;"><span class="label label-warning">View group</span></a>
									</td>                                       
								</tr>
								<tr>
									<td>Janityson</td>
									<td class="center">2012/01/21</td>
									<td class="center">janityson@gmail.com</td>
									<td class="center">
										
										<a href="view_subcategory_communication.php" style="text-decoration:none;"><span class="label label-important">view profile</span></a>
										<a href="add_sub_category.php" style="text-decoration:none;"><span class="label label-warning">View group</span></a>
									</td>                                        
								</tr>  
                                 
                                <tr>
									<td>Automaertocas</td>
									<td class="center">2012/01/21</td>
									<td class="center">aa@gmail.com</td>
									<td class="center">
										
										<a href="#" style="text-decoration:none;"><span class="label label-important">view profile</span></a>
										<a href="add_sub_category.php" style="text-decoration:none;"><span class="label label-warning">View group</span></a>
									</td>                                        
								</tr> 
                                <tr>
									<td>bloredge Dsouza</td>
									<td class="center">2012/01/21</td>
									<td class="center">Dsouza@yahoo.com</td>
									<td class="center">
										
										<a href="#" style="text-decoration:none;"><span class="label label-important">view profile</span></a>
										<a href="add_sub_category.php" style="text-decoration:none;"><span class="label label-warning">View group</span></a>
									</td>                                        
								</tr> 
                                								
							  </tbody>
						 </table>  
						 <div class="pagination pagination-centered">
						  <!--<ul>
							<li><a href="#">Prev</a></li>
							<li class="active">
							  <a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
						  </ul>-->
						</div>     
					</div>
				</div><!--/span-->
			</div><!--/row-->
    
<?php include('footer.php'); ?>
