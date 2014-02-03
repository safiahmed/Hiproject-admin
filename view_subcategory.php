<?php include('header.php'); ?>
<script language="JavaScript">

function archiveconfirm(id)
{
 	if (confirm("Are you sure you want to Archive the category? "))
	{
		window.location='category_list.php?action=archive&id='+id;
	}
 	else
 		return false; 
}
function activeconfirm(id)
{
 	if (confirm("Are you sure you want to Activate the category? "))
	{
		window.location='category_list.php?action=active&id='+id;
	}
 	else
 		return false; 
}
</script>

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Category</a><span class="divider">/</span><a href="#">Sub-Category</a>
					</li>
				</ul>
			</div>
			
			

			<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header well" data-original-title>
						<h2>Sub-category Table</h2>
						<!--<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>-->
					</div>
					<div class="box-content">
						<table class="table">
							  <thead>
								  <tr>
									  <th>Name</th>
									  <th>Date registered</th>
									  <!--<th>Role</th>-->
									  <th>Status</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
								<tr>
									<td>Cortex M3</td>
									<td class="center">2012/01/01</td>
									<!--<td class="center">Member</td>-->
									<td class="center">
										<span class="label label-success">Active</span>
									</td>                                       
								</tr>
								<tr>
									<td>ARM7</td>
									<td class="center">2012/02/01</td>
									<!--<td class="center">Staff</td>-->
									<td class="center">
										<span class="label label-important">Banned</span>
									</td>                                       
								</tr>
								
								
								                                  
							  </tbody>
						 </table>  
						 <!--<div class="pagination pagination-centered">
						  <ul>
							<li><a href="#">Prev</a></li>
							<li class="active">
							  <a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
						  </ul>
						</div>-->     
					</div>
				</div><!--/span-->
				
				
			</div><!--/row-->
			
			
			
			
    
<?php include('footer.php'); ?>
