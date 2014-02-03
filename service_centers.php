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
            <a href="service_centers.php">Service Centers</a>
        </li>
    </ul>
</div>
<br/><a href="add_state.php">Add State</a><span class="divider">&nbsp;&nbsp;/&nbsp;&nbsp;</span><a href="add_city.php">Add City</a>





<br/><br/><div class="row-fluid sortable">	
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2>Service Centers</h2>
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
                        <th>State Name</th>

 <!--<th>Role</th>-->
                        <th>Action</th>                                          
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    if (isset($_GET["confirm"]) == "ok") {
                        $sql = "update tbl_netdealer_state set test_status=0 where ndstate_id_pk=" . $_GET['id'] . "";
                        $terstirs1 = mysql_query($sql);
                        $terstisquery = "select * from tbl_netdealer_state order by ndstate_id_pk desc ";
                        $terstirs = mysql_query($terstisquery);
                    } elseif (isset($_GET["con"]) == "ok") {
                        $sql = "update tbl_netdealer_state set test_status=1 where ndstate_id_pk=" . $_GET['id'] . "";
                        $terstirs1 = mysql_query($sql);
                        $terstisquery = "select * from tbl_netdealer_state  order by ndstate_id_pk desc ";
                        $terstirs = mysql_query($terstisquery);
                    } else {
                        $terstisquery = "select * from tbl_netdealer_state order by ndstate_id_pk desc ";
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
                                    ?>				  
                                </td>
                                <td>
                                    <?php
                                    if (($terstidata['ndstate_name'] != "")) {
                                        echo $terstidata['ndstate_name'];
                                    } else {
                                        ?>
                                        <p align="center" class="txtNodata">
                                            <?php
                                            echo "-- !NO DATA! --";
                                        }
                                        ?></p>				  </td>
                                <td>
                                    <a href="add_dealers.php?id=<?php echo $terstidata['ndstate_id_pk']; ?>" style="text-decoration:none;" class="link1"><span class="label label-warning">Add Dealers</span></a>
                                    <a href="view_dealers.php?id=<?php echo $terstidata['ndstate_id_pk']; ?>" style="text-decoration:none;" class="link1"><span class="label label-important">view Dealers</span></a>
                                </td>

                            </tr>   
                            <?php
                        }
                    }
                    ?>
                    <?php if ($rowset <= 0 || $rowset == "") { ?>
                        <tr align="center" bgcolor="#F3F3F3" class="txtNodata"> 
                            <td>--</td>
                            <td>-- NO DATA --</td>
                            <td>-- NO DATA --</td>
                            <td>-- NO DATA --</td>
                        </tr>
                    <?php } ?>                            












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
<?php ob_flush(); ?>