<?php include('header.php'); 
include_once("connect.php"); ?>

<script language="JavaScript">

function archiveconfirm(id)
{
 	if (confirm("Do you really you want to archive this Registrant? "))
	{
		window.location='view_faq.php?action=archive&id='+id;
	}
 	else
 		return false; 
}
function activeconfirm(id)
{
 	if (confirm("Are you sure you want to activate the article? "))
	{
		window.location='view_faq.php?action=active&id='+id;
	}
 	else
 		return false; 
}
</script>




			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="view_faq.php">FAQ</a>
					</li>
				</ul>
			</div>
			<br/><a href="add_faq.php">Add FAQ</a>
			
			
			
			
			<br/><br/><div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>FAQ</h2>
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
								      <th>Sl no</th>
									  <th>FAQ Questions</th>
									  <th>FAQ Answers</th>
									  
									  <th>Status</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
							   <?php 
			  
			  
			  
			   if(isset($_GET["confirm"])=="ok")
				{
					$sql="update tbl_faq set faq_status=0 where faq_id_pk=".$_GET['id']."";
					$clientrs1=mysql_query($sql);
					$clientsquery="select * from tbl_faq order by faq_id_pk desc ";
		            $clientrs=mysql_query($clientsquery);
					
				}
				elseif(isset($_GET["con"])=="ok")
				{
					$sql="update tbl_faq set faq_status=1 where faq_id_pk=".$_GET['id']."";
					$clientrs1=mysql_query($sql);
					$clientsquery="select * from tbl_faq order by faq_id_pk desc ";
		            $clientrs=mysql_query($clientsquery);
					
				}
				else
				{
		 $clientsquery="select * from tbl_faq order by faq_id_pk desc ";
		  $clientrs=mysql_query($clientsquery);
		  		}
		  
		 $rowset=mysql_num_rows($clientrs);
		  $count=0;
		  
		 
		  if($rowset > 0) {
		   while($clientdata=mysql_fetch_array($clientrs))
		   {
		   		
			?>	
							  
							  
							  
							  
							    <tr>
								    <td> 
										<?php $count=$count+1; 
												echo $count;?> </td>
									<td><?php if($clientdata['faq_question']!="")
											{ 
												echo $clientdata['faq_question'];
											} 
												else 
												{
											?>
											<p align="center" class="txtNodata">
											<?php echo "-- !NO DATA! --"; 
											} ?></p>
									</td>
									<td class="center"><?php if($clientdata['faq_answers']!="")
														{ 
															echo $clientdata['faq_answers'];
														} 
														else 
														{
														?>
														<p align="center" class="txtNodata">
														<?php echo "-- !NO DATA! --"; 
															} ?></p>
									</td>
									<td class="center">
									    <?php
				 if($clientdata['faq_status']==1)
				 {
				 ?>
				 
				 <a href="view_faq.php?confirm=ok&id=<?php echo $clientdata['faq_id_pk'];?>" style="text-decoration:none;" onClick="return archiveconfirm(<?php echo $clientdata['faq_id_pk'];?>);" ><span class="label label-important">Archive</span></a>
				 <?php }?>
				 
				 
				 <?php
				 if($clientdata['faq_status']==0)
				 {
				 ?>
				 
				 <a href="view_faq.php?con=ok&id=<?php echo $clientdata['faq_id_pk'];?>" style="text-decoration:none;" onClick="return activeconfirm(<?php echo $clientdata['faq_id_pk'];?>);"><span class="label label-success">Active</span></a>
				 <?php }?>
									
									
									
										
									</td>                                       
								</tr>
								
								<?php 
									}
									}
										 ?>
								
								
                               
                                								
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
