<?php ob_start();?>
<?php include('header.php');
 include_once("connect.php");  ?>
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
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="category_list.php">Category</a>
					</li>
				</ul>
			</div>
			<br/><a href="add_category.php">Add Category</a>
			
			
			
			
			
			<br/><br/><div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Category</h2>
						
					</div>
					<div class="box-content">
						<table class="table table-bordered table-striped table-condensed">
							  <thead>
								  <tr>
								      <th>Sl no</th>
									  <th>Category Name</th>
									  
									  <!--<th>Role</th>-->
									  <th>Actions</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
							     <?php 
			  
			  
			  
			   if(isset($_GET["confirm"])=="ok")
				{
					$sql="update tbl_category set cat_status=0 where cat_id_pk=".$_GET['id']."";
					$terstirs1=mysql_query($sql);
					$terstisquery="select * from tbl_category order by cat_id_pk asc ";
		            $terstirs=mysql_query($terstisquery);
					
				}
				elseif(isset($_GET["con"])=="ok")
				{
					$sql="update tbl_category set cat_status=1 where cat_id_pk=".$_GET['id']."";
					$terstirs1=mysql_query($sql);
					$terstisquery="select * from tbl_category  order by cat_id_pk asc ";
		            $terstirs=mysql_query($terstisquery);
					
				}
				else
				{
		 $terstisquery="SELECT * FROM tbl_category order by cat_id_pk asc ";
		 //echo $terstisquery;
		  $terstirs=mysql_query($terstisquery);
		  
		  		}
		  
		 $rowset=mysql_num_rows($terstirs);
		  $count=0;
		  
		 
		  if($rowset > 0) {
		   while($terstidata=mysql_fetch_array($terstirs))
		   {
		   		
			?>
							  
							  
							  
							  
							    <tr>
								
								<td><?php $count=$count+1; 
				                      echo $count;?></td>
								
								
								
								
									<td><?php if(($terstidata['cat_name']!=""))
				                                  { 
				 	                                 echo $terstidata['cat_name'];
					
				                                  } 
				 
				                              else 
				                                  {
				                           ?>
				                                  <p align="center" class="txtNodata">
				                                  <?php echo "-- !NO DATA! --"; 
				                                   } ?></p>		   </td>
									
									<!--<td class="center">Member</td>-->
									
				 
				
									
									
									<td class="center">
									    <?php
				 if($terstidata['cat_status']==1)
				 {
				 ?>
				 
				 <a href="category_list.php?confirm=ok&id=<?php echo $terstidata['cat_id_pk'];?>" style="text-decoration:none;" onClick="return archiveconfirm(<?php echo $terstidata['cat_id_pk'];?>);" ><span class="label label-important">Archive</span></a>
				 <?php }?>
				 
				 
				 <?php
				 if($terstidata['cat_status']==0)
				 {
				 ?>
				 
				 <a href="category_list.php?con=ok&id=<?php echo $terstidata['cat_id_pk'];?>" style="text-decoration:none;" onClick="return activeconfirm(<?php echo $terstidata['cat_id_pk'];?>);" ><span class="label label-success">Active</span></a>
				 <?php }?>
									
									
										
										<a href="view_sub_category.php?id=<?php echo $terstidata['cat_id_pk'];?>" style="text-decoration:none;"><span class="label label-warning">view sub-category</span></a>
										<a href="add_sub_category.php?id=<?php echo $terstidata['cat_id_pk'];?>" style="text-decoration:none;"><span class="label label-sucess">Add sub-category</span></a>
									</td>
									
								</tr>
								 <?php 
									}
									}
										 ?>
										 
						<?php if($rowset <= 0 || $rowset ==""){ ?>
              <tr align="center" bgcolor="#F3F3F3" class="txtNodata"> 
                <td>-- NO DATA --</td>
                <td>-- NO DATA --</td>
                <td>-- NO DATA --</td>
		
		
              </tr>
              <?php }  ?>
                                								
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
<?php ob_flush();?>
