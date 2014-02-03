<?php include('header.php'); 
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
 	if (confirm("Are you sure you want to Archive the category? "))
	{
		window.location='view_in_detail.php?action=archive&id='+id;
	}
 	else
 		return false; 
}
function activeconfirm(id)
{
 	if (confirm("Are you sure you want to Activate the category? "))
	{
		window.location='view_in_detail.php?action=active&id='+id;
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
						<a href="#">Products</a>
					</li>
				</ul>
			</div>
			<a href="add_product.php">Add Product</a>
			
			<br/><div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-gift"></i> Products</h2>
						<!--<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>-->
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <?php 
			  
			  
			  
			   if(isset($_GET["confirm"])=="ok")
				{
					$sql="update tbl_product set prod_status=0 where prod_id_pk=".$_GET['id']."";
					$terstirs1=mysql_query($sql);
					$terstisquery="SELECT * FROM tbl_product order by prod_id_pk asc ";
		            $terstirs=mysql_query($terstisquery);
					
				}
				elseif(isset($_GET["con"])=="ok")
				{
					$sql="update tbl_product set cat_status=1 where prod_id_pk=".$_GET['id']."";
					$terstirs1=mysql_query($sql);
					$terstisquery="SELECT * FROM tbl_product order by prod_id_pk asc";
		            $terstirs=mysql_query($terstisquery);
					
				}?>
						  
						  
						  
						 
						  
						  
						  
						  
						  
						  
						  <?php
                             					  
						 $terstisquery="SELECT a.*,b.* 
						 FROM tbl_product as a ,tbl_category as b
             			 WHERE a.prod_id_pk=".$_GET['id']." and a.cat_id_fk=b.cat_id_pk order by prod_id_pk asc ";


						 //$terstisquery="SELECT * FROM tbl_product WHERE prod_id_pk=".$_GET['id']." order by prod_id_pk asc ";
						  $terstirs=mysql_query($terstisquery);
						   $rowset=mysql_num_rows($terstirs);
		                    $count=0;
							$terstidata=mysql_fetch_array($terstirs);
							
							
							
							
							
							
						  ?>
						  
						  
							  <tr>
								  <th>Product Name</th><td class="center"><?php if(($terstidata['prod_name']!=""))
				                                  { 
				 	                                 echo $terstidata['prod_name'];
					
				                                  } 
				 
				                              else 
				                                  {
				                                  ?>
				                                  <p align="center" class="txtNodata">
				                                  <?php echo "-- !NO DATA! --"; 
				                                   } ?></p></td></tr>
								 
								 
								 <tr> <th>Category Name</th><td class="center"><?php if(($terstidata['cat_name']!=""))
				                                  { 
				 	                                 echo $terstidata['cat_name'];
					
				                                  } 
				 
				                              else 
				                                  {
				                                  ?>
				                                  <p align="center" class="txtNodata">
				                                  <?php echo "-- !NO DATA! --"; 
				                                   } ?></p></td></tr>
								 
								 <tr> <th>Product Overview</th>	<td class="center"><?php if(($terstidata['prod_over_view']!=""))
				                                  { 
				 	                                 echo $terstidata['prod_over_view'];
					
				                                  } 
				 
				                              else 
				                                  {
				                                  ?>
				                                  <p align="center" class="txtNodata">
				                                  <?php echo "-- !NO DATA! --"; 
				                                   } ?></p></td></tr>
												   
												   
								 <tr> <th>Product ThumbImage</th> <td class="center"><?php if(($terstidata['prod_thumbimage']!=""))
				                                  { 
				 	                                 echo $terstidata['prod_thumbimage'];
					
				                                  } 
				 
				                              else 
				                                  {
				                                  ?>
				                                  <p align="center" class="txtNodata">
				                                  <?php echo "-- !NO DATA! --"; 
				                                   } ?></p></td></tr>
								 <tr> <th>Product Price</th><td class="center"><?php if(($terstidata['prod_org_price']!=""))
				                                  { 
				 	                                 echo $terstidata['prod_org_price'];
					
				                                  } 
				 
				                              else 
				                                  {
				                                  ?>
				                                  <p align="center" class="txtNodata">
				                                  <?php echo "-- !NO DATA! --"; 
				                                   } ?></p></td></tr>
												   
												   
								 <tr> <th>Product Deal</th> <td class="center"><?php if(($terstidata['prod_deal']!=""))
				                                  { 
				 	                                 echo $terstidata['prod_deal'];
					
				                                  } 
				 
				                              else 
				                                  {
				                                  ?>
				                                  <p align="center" class="txtNodata">
				                                  <?php echo "-- !NO DATA! --"; 
				                                   } ?></p></td></tr>
								 <tr> <th>Model Number</th> <td class="center"><?php if(($terstidata['model_no']!=""))
				                                  { 
				 	                                 echo $terstidata['model_no'];
					
				                                  } 
				 
				                              else 
				                                  {
				                                  ?>
				                                  <p align="center" class="txtNodata">
				                                  <?php echo "-- !NO DATA! --"; 
				                                   } ?></p></td></tr>
												   
								 <tr> <th>Product Image1</th> <td class="center"><?php if(($terstidata['prod_image1']!=""))
				                                  { 
				 	                                 echo $terstidata['prod_image1'];
					
				                                  } 
				 
				                              else 
				                                  {
				                                  ?>
				                                  <p align="center" class="txtNodata">
				                                  <?php echo "-- !NO DATA! --"; 
				                                   } ?></p></td></tr>
												   
												   
												   
								 <tr> <th>Product Image2</th> <td class="center"><?php if(($terstidata['prod_image2']!=""))
				                                  { 
				 	                                 echo $terstidata['prod_image2'];
					
				                                  } 
				 
				                              else 
				                                  {
				                                  ?>
				                                  <p align="center" class="txtNodata">
				                                  <?php echo "-- !NO DATA! --"; 
				                                   } ?></p></td></tr>
								 <tr> <th>Product Image3</th>  <td class="center"><?php if(($terstidata['prod_image3']!=""))
				                                  { 
				 	                                 echo $terstidata['prod_image3'];
					
				                                  } 
				 
				                              else 
				                                  {
				                                  ?>
				                                  <p align="center" class="txtNodata">
				                                  <?php echo "-- !NO DATA! --"; 
				                                   } ?></p></td></tr>
												   
								 <tr> <th>Product Image4</th> <td class="center"><?php if(($terstidata['prod_image4']!=""))
				                                  { 
				 	                                 echo $terstidata['prod_image4'];
					
				                                  } 
				 
				                              else 
				                                  {
				                                  ?>
				                                  <p align="center" class="txtNodata">
				                                  <?php echo "-- !NO DATA! --"; 
				                                   } ?></p></td></tr>
												   
								 <tr> <th>Download</th>  <td class="center"><?php if(($terstidata['download_file']!=""))
				                                  { 
				 	                                 echo $terstidata['download_file'];
					
				                                  } 
				 
				                              else 
				                                  {
				                                  ?>
				                                  <p align="center" class="txtNodata">
				                                  <?php echo "-- !NO DATA! --"; 
				                                   } ?></p></td></tr>
												   
									<tr><th>video Description</th> <td class="center"><?php if(($terstidata['project_video_desc']!=""))
				                                  { 
				 	                                 echo $terstidata['project_video_desc'];
					
				                                  } 
				 
				                              else 
				                                  {
				                                  ?>
				                                  <p align="center" class="txtNodata">
				                                  <?php echo "-- !NO DATA! --"; 
				                                   } ?></p></td></tr>			   
								  <tr><th>Product Abstract</th> <td class="center"><?php if(($terstidata['project_abstract']!=""))
				                                  { 
				 	                                 echo $terstidata['project_abstract'];
					
				                                  } 
				 
				                              else 
				                                  {
				                                  ?>
				                                  <p align="center" class="txtNodata">
				                                  <?php echo "-- !NO DATA! --"; 
				                                   } ?></p></td></tr>
								 <tr> <th>Product BlockDiagram</th><td class="center"><?php if(($terstidata['project_blockdiagram']!=""))
				                                  { 
				 	                                 echo $terstidata['project_blockdiagram'];
					
				                                  } 
				 
				                              else 
				                                  {
				                                  ?>
				                                  <p align="center" class="txtNodata">
				                                  <?php echo "-- !NO DATA! --"; 
				                                   } ?></p></td></tr>
								 <tr> <th>Actions</th><td class="center">
									
									<?php
				 if($terstidata['prod_status']==1)
				 {
				 ?>
				 
				 <a href="view_in_detail.php?confirm=ok&id=<?php echo $terstidata['prod_id_pk'];?>" style="text-decoration:none;" onClick="return archiveconfirm(<?php echo $terstidata['prod_id_pk'];?>);" ><span class="label label-important">Archive</span></a>
				 <?php }?>
				 
				 
				 <?php
				 if($terstidata['prod_status']==0)
				 {
				 ?>
				 
				 <a href="view_in_detail.php?con=ok&id=<?php echo $terstidata['prod_id_pk'];?>" style="text-decoration:none;" onClick="return activeconfirm(<?php echo $terstidata['prod_id_pk'];?>);" ><span class="label label-success">Active</span></a>
				 <?php }?>
									
									
									
									
									<a href="offer_section.php" class="btn btn-danger" data-rel="popover" data-content="Add to Present Offer section" >Add</a>
									<a class="btn btn-info" href="edit_product.php">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<!--<a class="btn btn-danger" href="#">
										<i class="icon-trash icon-white"></i> 
										Delete
									</a>-->
								
								</td>
								
								  
							  </tr>
						  
						
							
							
							
							
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
  
<?php include('footer.php'); ?>
