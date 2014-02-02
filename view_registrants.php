<?php ob_start(); ?>
<?php
include('header.php');
include_once("connect.php");
?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="view_registrants.php">Registrants</a>
        </li>
    </ul>
</div>





<br/><br/><div class="row-fluid sortable">	
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2>Registrants</h2>
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
                        <th>Sl no</th>
                        <th>Registrant Name</th>
                        <th>Date registered</th>
                        <th>Email</th>
                        <th>Status</th>                                          
                    </tr>
                </thead>   
                <tbody>
                    <!--------------------->
                    <?php
                    if (isset($_GET["confirm"]) == "ok") {
                        $sql = "update tbl_register set status=0 where reg_id=" . $_GET['id'] . "";
                        $clientrs1 = mysql_query($sql);
                        $clientsquery = "select * from tbl_register order by reg_id desc ";
                        $clientrs = mysql_query($clientsquery);
                    } elseif (isset($_GET["con"]) == "ok") {
                        $sql = "update tbl_register set status=1 where reg_id=" . $_GET['id'] . "";
                        $clientrs1 = mysql_query($sql);
                        $clientsquery = "select * from tbl_register order by reg_id desc ";
                        $clientrs = mysql_query($clientsquery);
                    } else {
                        $clientsquery = "select * from tbl_register order by reg_id desc ";
                        $clientrs = mysql_query($clientsquery);
                    }

                    $rowset = mysql_num_rows($clientrs);
                    $count = 0;


                    if ($rowset > 0) {
                        while ($clientdata = mysql_fetch_array($clientrs)) {
                            ?>	

                            <tr > 
                                <td> 
                                    <?php
                                    $count = $count + 1;
                                    echo $count;
                                    ?>				  
                                </td>
                                <td align="left">
                                    <?php
                                    if ($clientdata['name'] != "") {
                                        echo $clientdata['name'];
                                    } else {
                                        ?>
                                        <p align="center" class="txtNodata">
                                            <?php
                                            echo "-- !NO DATA! --";
                                        }
                                        ?></p>				  </td>
                                <td align="left">
                                    <?php
                                    if ($clientdata['date'] != "") {
                                        echo $clientdata['date'];
                                    } else {
                                        ?>
                                        <p align="center" class="txtNodata">
                                            <?php
                                            echo "-- !NO DATA! --";
                                        }
                                        ?></p>				  </td>


                                <td align="left">
                                    <?php
                                    if ($clientdata['email'] != "") {
                                        echo $clientdata['email'];
                                    } else {
                                        ?>
                                        <p align="center" class="txtNodata">
                                            <?php
                                            echo "-- !NO DATA! --";
                                        }
                                        ?></p>				  </td>





                                <?php /* /*
                                  if($clientdata['status']==1)
                                  {
                                  ?>

                                  <a href="admin_list_registrants.php?confirm=ok&id=<?php echo $clientdata['reg_id'];?>" onClick="return archiveconfirm(<?php echo $clientdata['reg_id'];?>);" style="color:red;" >Archive</a>
                                  <?php }?>


                                  <?php
                                  if($clientdata['status']==0)
                                  {
                                  ?>

                                  <a href="admin_list_registrants.php?con=ok&id=<?php echo $clientdata['reg_id'];?>" onClick="return activeconfirm(<?php echo $clientdata['reg_id'];?>);" style="color:green;">Activate</a>
                                  <?php } */ ?>


                               <!-- <td>&nbsp; <a href="admin_list_registrants_view.php?email=<?php //echo $clientdata['email']; ?>" class="link1">view Group</a></td>-->
                                <td class="center">

                                    <a href="view_in_detail_registrant.php?email=<?php echo $clientdata['email'];?>" style="text-decoration:none;"><span class="label label-important">view profile</span></a>
                                    <a href="view_group.php?email=<?php echo $clientdata['email'];?>" style="text-decoration:none;"><span class="label label-warning">View group</span></a>
                                </td>   


                            </tr>
                            <?php
                        }
                    }
                    ?>


                    <?php if ($rowset <= 0 || $rowset == "") { ?>
                        <tr align="center" bgcolor="#F3F3F3" class="txtNodata"> 

                            <td>-- NO DATA --</td>
                            <td>-- NO DATA --</td>
                            <td>-- NO DATA --</td>
                            <td>-- NO DATA --</td>
                        </tr>


                    <?php } ?>

                    <!--------------------->




                   
                    
                    
                    
                   
                    

                    
                  
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
