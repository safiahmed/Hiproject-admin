<?php ob_start(); ?>
<?php
include('header.php');
include_once("connect.php");
if (isset($_GET['email'])) {
    $_SESSION['emails'] = $_GET['email'];
}
if (isset($_SESSION['emails'])) {
    $_GET['email'] = $_SESSION['emails'];
}
?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Registrant Detail</a>
        </li>
    </ul>
</div>
<a href="view_registrants.php"> Registrant List</a>

<br/><div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Registrant Detail</h2>
            <!--<div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>-->
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">



                <?php
                $clientsquery1 = "select * from register where email='$_GET[email]'order by reg_id desc ";
                $clientrs1 = mysql_query($clientsquery1);
                while ($clientdata1 = mysql_fetch_array($clientrs1)) {

                    $data = $clientdata1['email'];
                }
                $val = $data;

                $clientsquery = "select * from members where registrant_email= '$val' order by mem_id desc";
                $clientrs = mysql_query($clientsquery);

                $rowset = mysql_num_rows($clientrs);
                $count = 0;


                if ($rowset > 0) {
                    while ($clientdata = mysql_fetch_array($clientrs)) {
                        ?>


                        <tr>
                            <th>Registrant Name</th><td align="left">
                                <?php
                                if ($clientdata['member_one_name'] != "") {
                                    echo $clientdata['member_one_name'];
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td>
                            <td align="left">
                                <?php
                                if ($clientdata['member_two_name'] != "") {
                                    echo $clientdata['member_two_name'];
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td>
                            <td align="left">
                                <?php
                                if ($clientdata['member_three_name'] != "") {
                                    echo $clientdata['member_three_name'];
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td> 
                            <td align="left">
                                <?php
                                if ($clientdata['member_four_name'] != "") {
                                    echo $clientdata['member_four_name'];
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td></tr>

                        <tr> <th>Email</th>	<td align="left">
                                <?php
                                if ($clientdata['member_one_email'] != "") {
                                    echo $clientdata['member_one_email'];
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td>
                            <td align="left">
                                <?php
                                if ($clientdata['member_two_email'] != "") {
                                    echo $clientdata['member_two_email'];
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td>
                            <td align="left">
                                <?php
                                if ($clientdata['member_three_email'] != "") {
                                    echo $clientdata['member_three_email'];
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td>
                            <td align="left">
                                <?php
                                if ($clientdata['member_four_email'] != "") {
                                    echo $clientdata['member_four_email'];
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td></tr>
                        <tr> <th>Mobile</th> <td align="left">
                                <?php
                                if ($clientdata['member_one_phone'] != "") {
                                    echo $clientdata['member_one_phone'];
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td> <td align="left">
                                <?php
                                if ($clientdata['member_two_phone'] != "") {
                                    echo $clientdata['member_two_phone'];
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td>  <td align="left">
                                <?php
                                if ($clientdata['member_three_phone'] != "") {
                                    echo $clientdata['member_three_phone'];
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td> <td align="left">
                                <?php
                                if ($clientdata['member_four_phone'] != "") {
                                    echo $clientdata['member_four_phone'];
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td></tr>
        <!--<tr> <th>College Name</th> <td class="center">J.M.I.T</td><td class="center">J.M.I.T</td><td class="center">J.M.I.T</td><td class="center">J.M.I.T</td></tr>

        <tr> <th>Branch</th><td class="center">CSE</td><td class="center">CSE</td><td class="center">CSE</td><td class="center">CSE</td></tr>

        <tr> <th>file</th> <td class="center">image/img.jpg</td><td class="center">image/img.jpg</td><td class="center">image/img.jpg</td><td class="center">image/img.jpg</td></tr>
        <tr> <th>Topic</th> <td class="center">project</td><td class="center">project</td><td class="center">project</td><td class="center">project</td></tr>
        <tr> <th>Contact</th> <td class="center">yes</td><td class="center">yes</td><td class="center">yes</td><td class="center">yes</td></tr>-->
                        <?php
                    }
                }
                ?>


                <?php if ($rowset <= 0 || $rowset == "") { ?>
                    <tr align="center" bgcolor="#F3F3F3" class="txtNodata"> 

                        <td>-- NO DATA --</td>

                    </tr>


                <?php } ?>







            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->

<?php include('footer.php'); ?>
<?php ob_flush(); ?>