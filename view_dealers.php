<?php ob_start(); ?>
<?php
include('header.php');
include_once("connect.php");
if (isset($_GET['id'])) {
    $_SESSION['ids'] = $_GET['id'];
}
if (isset($_SESSION['ids'])) {
    $_GET['id'] = $_SESSION['ids'];
}
?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="service_centers.php">Service Centers</a><span class="divider">/</span>
        </li>
        <li>
            <a href="service_centers.php">view Service Centers</a>
        </li>
    </ul>
</div>
<br/><a href="service_centers.php">Service Centers</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="add_state.php">Add State</a>&nbsp;&nbsp;/&nbsp;&nbsp;</span><a href="add_city.php">Add City</a>





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
                        <th>City</th>
                        <th>Address</th>
                       

                    </tr>
                </thead>   
                <tbody>

                    <?php
                    $clientsquery1 = "select * from tbl_netdealer_state where ndstate_id_pk='$_GET[id]' order by ndstate_id_pk desc ";
                    $clientrs1 = mysql_query($clientsquery1);
                    while ($clientdata1 = mysql_fetch_array($clientrs1)) {
                        
                    }


                    $clientsquery = "select * from tbl_netdealer_city where ndstate_id_fk= '$_GET[id]' order by ndcity_id_pk desc";
                    $clientrs = mysql_query($clientsquery);

                    $rowset = mysql_num_rows($clientrs);
                    $count = 0;


                    if ($rowset > 0) {
                        while ($clientdata = mysql_fetch_array($clientrs)) {
                            ?>

                            <tr>
                                <td>
                                    <?php
                                    if ($clientdata['ndcity_name'] != "") {
                                        echo $clientdata['ndcity_name'];
                                    } else {
                                        ?>
                                        <p align="center" class="txtNodata">
                                            <?php
                                            echo "-- !NO DATA! --";
                                        }
                                        ?></p>				  </td>
                                <td align="left">
                                    <?php
                                    if ($clientdata['ndcity_address'] != "") {
                                        echo $clientdata['ndcity_address'];
                                    } else {
                                        ?>
                                        <p align="center" class="txtNodata">
                                            <?php
                                            echo "-- !NO DATA! --";
                                        }
                                        ?></p>				  </td>

                            </tr>
                            <?php
                        }
                    }
                    ?>
                    <?php if ($rowset <= 0 || $rowset == "") { ?>
                        <tr align="center" bgcolor="#F3F3F3" class="txtNodata"> 

                            <td>-- NO DATA --</td>
                            <td>-- NO DATA --</td>
                        </tr>


                    <?php } ?>



                </tbody>
            </table>
            <div class = "pagination pagination-centered">
                <!--<ul>
                <li><a href = "#">Prev</a></li>
                <li class = "active">
                <a href = "#">1</a>
                </li>
                <li><a href = "#">2</a></li>
                <li><a href = "#">3</a></li>
                <li><a href = "#">4</a></li>
                <li><a href = "#">Next</a></li>
                </ul>-->
            </div>
        </div>
    </div><!--/span-->
</div><!--/row-->

<?php include('footer.php');
?>
