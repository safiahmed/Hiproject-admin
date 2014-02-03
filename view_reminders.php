<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="view_reminders.php">Reminders</a>
					</li>
				</ul>
			</div>
             <br/><a href="add_reminder.php">Add Reminders</a>
			
			
			
			
			
			<br/><br/><div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Reminders</h2>
						<!--<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>-->
					</div>
					<div class="box-content">
						<table class="table table-bordered table-striped table-condensed">
							  <thead>
								  <tr>
									  <th>Reminder</th>
									  <th>Date registered</th>
									  <!--<th>Role</th>-->
									  <th>Action</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
							    <tr>
									<td>Recive Paymennt from Mr.Glenn $250.34</td>
									<td class="center">2012/01/01</td>
									<!--<td class="center">Member</td>-->
									<td class="center">
										<span class="label label-success">Active</span>
										
									</td>                                       
								</tr>
								<tr>
									<td>Payment for Domain</td>
									<td class="center">2012/01/01</td>
									<!--<td class="center">Member</td>-->
									<td class="center">
										<span class="label label-success">Active</span>
										
									</td>                                       
								</tr>
								<tr>
									<td>Recive Payment from Mr.Norvertron $350.00</td>
									<td class="center">2012/02/01</td>
									<!--<td class="center">Staff</td>-->
									<td class="center">
										<span class="label label-success">Banned</span>
										
										
									</td>                                       
								</tr>
								<tr>
									<td>Recive Payment from Mr.rtron $350.00</td>
									<td class="center">2012/01/21</td>
									<!--<td class="center">Staff</td>-->
									<td class="center">
										<span class="label label-success">Active</span>
										
									</td>                                        
								</tr>
								<tr>
									<td>Call for 3 new customers</td>
									<td class="center">2012/03/01</td>
									<!--<td class="center">Member</td>-->
									<td class="center">
										<span class="label label-warning">Pending</span>
										
									</td>                                       
								</tr>
								<tr>
									<td>Id and password creation for New users</td>
									<td class="center">2012/01/21</td>
									<!--<td class="center">Staff</td>-->
									<td class="center">
										<span class="label label-success">Active</span>
										
									</td>                                        
								</tr>  
                                 
                                <tr>
									<td>Sending confirmation E-mail</td>
									<td class="center">2012/01/21</td>
									<!--<td class="center">Staff</td>-->
									<td class="center">
										<span class="label label-success">Active</span>
										
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
