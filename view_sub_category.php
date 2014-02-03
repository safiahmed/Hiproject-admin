<?php ob_start();?>
<?php include('header.php');
 ?>
 
 <?php
if(!isset($_SESSION))
{
 session_start();
 }
  include_once("connect.php"); 

  
if(isset($_GET['id']))
						{
    $_SESSION['ids']=$_GET['id'];
	
  }
 if(isset($_SESSION['ids']))
  {
    $_GET['id']=$_SESSION['ids'];
  }
 ?>
 
 <script language="JavaScript">
 function archiveconfirm(id)
{
 	if (confirm("Are you sure you want to archive the Testimonial? "))
	{
		window.location='view_sub_category.php?action=archive&id='+id;
	}
 	else
 		return false; 
}
function activeconfirm(id)
{
 	if (confirm("Are you sure you want to activate the Testimonial? "))
	{
		window.location='view_sub_category.php?action=active&id='+id;
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
			<br/><a href="add_sub_category.php">Add sub-Category</a><span class="divider">&nbsp;/&nbsp;</span><a href="category_list.php">&nbsp;List Category<br/></a>
			
			

			<br/><div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header well" data-original-title>
						<h2>Sub-category Table</h2>
						
					</div>
					<div class="box-content">
						<table class="table">
							  <thead>
								  <tr>
								      <th>Sl no</th>
									  <th>Name</th>
									  
									  <!--<th>Role</th>-->
									  <th>Status</th>                                          
								  </tr>
							  </thead>
                                <!---->
								 <?php 
			  
			  
			  
			   if(isset($_GET["confirm"])=="ok")
				{
					$sql="update tbl_subcategory set subcat_status=0 where subcat_id_pk=".$_GET['ids']."";
					$terstirs1=mysql_query($sql);
					$terstisquery="select * from tbl_subcategory where cat_id_fk=".$_GET['id']." order by subcat_id_pk asc ";
		            $terstirs=mysql_query($terstisquery);
					
				}
				elseif(isset($_GET["con"])=="ok")
				{
					$sql="update tbl_subcategory set subcat_status=1 where subcat_id_pk=".$_GET['ids']."";
					$terstirs1=mysql_query($sql);
					$terstisquery="select * from tbl_subcategory where cat_id_fk=".$_GET['id']." order by subcat_id_pk asc ";
		            $terstirs=mysql_query($terstisquery);
					
				}
				else
				{
		 $terstisquery="select * from tbl_subcategory where cat_id_fk=".$_GET['id']." order by subcat_id_pk asc ";
		  $terstirs=mysql_query($terstisquery);
		  		}
		  
		 $rowset=mysql_num_rows($terstirs);
		  $count=0;
		  
		 
		  if($rowset > 0) {
		   while($terstidata=mysql_fetch_array($terstirs))
		   {
		   		
			?>	
              <tbody>
              <tr> 
                <td> 
                  <?php $count=$count+1; 
				  echo $count;?>				  </td>
                <td align="left">
				<?php if(($terstidata['subcat_name']!=""))
				 { 
				 	echo $terstidata['subcat_name'];
					
				 } 
				 
				 else 
				 {
				 ?>
				  <p align="center" class="txtNodata">
				  <?php echo "-- !NO DATA! --"; 
				 } ?></p>				  </td>
				 
				                  </td>
				 

				
				    
                <td>
				
				 <?php
				 if($terstidata['subcat_status']==1)
				 {
				 ?>
				 
				 <a href="view_sub_category.php?confirm=ok&ids=<?php echo $terstidata['subcat_id_pk'];?>" style="text-decoration:none;" onClick="return archiveconfirm(<?php echo $terstidata['subcat_id_pk'];?>);"  ><span class="label label-important">Archive</span></a>
				 <?php }?>
				 
				 
				 <?php
				 if($terstidata['subcat_status']==0)
				 {
				 ?>
				 
				 <a href="view_sub_category.php?con=ok&ids=<?php echo $terstidata['subcat_id_pk'];?>" style="text-decoration:none;" onClick="return activeconfirm(<?php echo $terstidata['subcat_id_pk'];?>);" ><span class="label label-success">Active</span></a>
				 <?php }?>
                 
				  </td>
			  </tr>
              						<?php 
									}
									}
										 ?>
              <?php if($rowset <= 0 || $rowset ==""){ ?>
              <tr align="center" bgcolor="#F3F3F3" class="txtNodata"> 
                <td>--</td>
                <td>-- NO DATA --</td>
                <td>-- NO DATA --</td>
				<td>-- NO DATA --</td>
		
              </tr>
              <?php }  ?>
								
								<!----->
								
								
								
								
								
								
								<?php 
			  
			  
			  
			 
				
		 /*$clientsquery="select * from tbl_subcategory where cat_id_fk='$_GET[id]' order by subcat_id_pk desc ";
		  $clientrs=mysql_query($clientsquery);

		 $rowset=mysql_num_rows($clientrs);
		  $count=0;
		  
		 
		  if($rowset > 0) {
		   while($clientdata=mysql_fetch_array($clientrs))
		   {
		   		
			?>	

							  
							  
								<tr>
								
								<td><?php $count=$count+1; 
				                  echo $count;?></td>
								
								
									<td><?php if($clientdata['subcat_name']!="")
				                             { 
				 	                         echo $clientdata['subcat_name'];
				                             } 
				                             else 
				                             {
				                         ?><p align="center" class="txtNodata">
				                           <?php echo "-- !NO DATA! --"; 
				                           } ?></p>				  </td>
										  
                                         <td class="center">
										   <span class="label label-success">Active</span>
									      </td>
										  
										<?php 
									}
									}
										 ?>   
										   
									<!--<td class="center">2012/01/01</td>
									<!--<td class="center">Member</td>-->
									<!--<td class="center">
										<span class="label label-success">Active</span>
									</td>-->                                       
								</tr>
								<?php if($rowset <= 0 || $rowset ==""){ ?>
                                 <tr>  
								 <td>-- NO DATA --</td>
								 <td>-- NO DATA --</td>
								 <td>-- NO DATA --</td>
								 </tr>
                                <?php } */ ?>
								
								
								
								
								                                  
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
<?php ob_flush();?>