<?php ob_start();?>
<?php include('header.php');
 include_once("connect.php"); ?>
<script language="JavaScript">


function archiveconfirm(id)
{
 	if (confirm("Are you sure you want to archive the Subscriber? "))
	{
		window.location='admin_list_testimonial.php?action=archive&id='+id;
	}
 	else
 		return false; 
}
function activeconfirm(id)
{
 	if (confirm("Are you sure you want to activate the Subscriber? "))
	{
		window.location='admin_list_testimonial.php?action=active&id='+id;
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
            <a href="subscribers_list.php">Subscribers</a>
        </li>
    </ul>
</div>






<br/><br/><div class="row-fluid sortable">	
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2>Subscribers</h2>
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
                        <th>E-mail</th>
                        <th>Date registered</th>
                        <!--<th>Role</th>-->
                        <th>Action</th>                                          
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    if (isset($_GET["confirm"]) == "ok") {
                        $sql = "update tbl_subscribers set sub_status=0 where sub_id_pk=" . $_GET['id'] . "";
                        $terstirs1 = mysql_query($sql);
                        $terstisquery = "select * from tbl_subscribers order by sub_id_pk desc ";
                        $terstirs = mysql_query($terstisquery);
                    } elseif (isset($_GET["con"]) == "ok") {
                        $sql = "update tbl_subscribers set sub_status=1 where sub_id_pk=" . $_GET['id'] . "";
                        $terstirs1 = mysql_query($sql);
                        $terstisquery = "select * from tbl_subscribers order by sub_id_pk desc ";
                        $terstirs = mysql_query($terstisquery);
                    } else {
                        $terstisquery = "select * from tbl_subscribers order by sub_id_pk desc ";
                        $terstirs = mysql_query($terstisquery);
                    }

                    $rowset = mysql_num_rows($terstirs);
                    $count = 0;


                    if ($rowset > 0) {
                        while ($terstidata = mysql_fetch_array($terstirs)) {
                            ?>	
                            <tr>
                                <td> 
                                    <?php
                                    $count = $count + 1;
                                    echo $count;
                                    ?>	</td> 
                                <td align="left">
                                    <?php
                                    if (($terstidata['sub_email'] != "")) {
                                        echo $terstidata['sub_email'];
                                    } else {
                                        ?>
                                        <p align="center" class="txtNodata">
                                            <?php
                                            echo "-- !NO DATA! --";
                                        }
                                        ?></p>				  </td>
                                <td align="left">
                                    <?php
                                    if (($terstidata['date'] != "")) {
                                        echo $terstidata['date'];
                                    } else {
                                        ?>
                                        <p align="center" class="txtNodata">
                                            <?php
                                            echo "-- !NO DATA! --";
                                        }
                                        ?></p>				  </td>
                                <td> <?php
				 if($terstidata['sub_status']==1)
				 {
				 ?>
				 
				 <a href="subscribers_list_.php?confirm=ok&id=<?php echo $terstidata['sub_id_pk'];?>" onClick="return archiveconfirm(<?php echo $terstidata['sub_id_pk'];?>);" style="text-decoration:none" ><span class="label label-warning">Archive</span></a>
				 <?php }?>
				 
				 
				 <?php
				 if($terstidata['sub_status']==0)
				 {
				 ?>
				 
				 <a href="subscribers_list.php?con=ok&id=<?php echo $terstidata['sub_id_pk'];?>" onClick="return activeconfirm(<?php echo $terstidata['sub_id_pk'];?>);" style="text-decoration:none"><span class="label label-success">Active</span></a>
                                <?php }?>
                           </td> </tr>
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
<?php ob_flush();?>