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

if (isset($_GET['id'])) {
    $_SESSION['ids'] = $_GET['id'];
}
if (isset($_SESSION['ids'])) {
    $_GET['id'] = $_SESSION['ids'];
}

if (isset($_GET['action'])) {
    if ($_GET['action'] == "del") {
        $delquery = "delete from tbl_register where email =" . $_GET['id'];
        $resultdel = mysql_query($delquery);
        header("Location:view_registrants.php");
    }
}
?>
<script language="JavaScript">

    function delconfirm(id)
    {
        if (confirm("Are you sure you want to delete?"))
        {
            window.location = 'view_in_detail_registrant.php?action=del&id=' + id;
        }
        else
            return false;
    }
    function archiveconfirm(id)
    {
        if (confirm("Do you really you want to archive this Registrant? "))
        {
            window.location = 'view_in_detail_registrant.php?action=archive&id=' + id;
        }
        else
            return false;
    }
    function activeconfirm(id)
    {
        if (confirm("Are you sure you want to activate the article? "))
        {
            window.location = 'view_in_detail_registrant.php?action=active&id=' + id;
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
                if (isset($_GET["confirm"]) == "ok") {

                    $sql = "update register set status=0 where email=" . $_GET['id'] . "";
                    $clientrs1 = mysql_query($sql);
                    $clientsquery = "select * from register where email='$_GET[email]' order by reg_id desc ";
                    $clientrs = mysql_query($clientsquery);
                } elseif (isset($_GET["con"]) == "ok") {

                    $sql = "update register set status=1 where email=" . $_GET['id'] . "";
                    $clientrs1 = mysql_query($sql);
                    $clientsquery = "select * from register where email='$_GET[email]' order by reg_id desc ";
                    $clientrs = mysql_query($clientsquery);
                } else {
                    $clientsquery = "select * from register where email='$_GET[email]' order by reg_id desc ";
                    $clientrs = mysql_query($clientsquery);
                }
                $rowset = mysql_num_rows($clientrs);
                $count = 0;


                if ($rowset > 0) {
                    while ($clientdata = mysql_fetch_array($clientrs)) {
                        ?>	



                        <!---------------------->


                        <tr>
                            <th>Registrant Name</th><td align="left">
                                <?php
                                if ($clientdata['name'] != "") {
                                    echo $clientdata['name'];
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td></tr>
                        <tr> <th>Date registered</th><td align="left">
                                <?php
                                if ($clientdata['date'] != "") {
                                    echo $clientdata['date'];
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td></tr>
                        <tr> <th>Email</th>	<td align="left">
                                <?php
                                if ($clientdata['email'] != "") {
                                    echo $clientdata['email'];
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td></tr>
                        <tr> <th>College Name</th>  <td align="left">
                                <?php
                                if ($clientdata['collage'] != "") {
                                    echo $clientdata['collage'];
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td></tr>
                        <tr> <th>Branch</th> <td align="left">
                                <?php
                                if ($clientdata['branch'] != "") {
                                    echo $clientdata['branch'];
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td></tr>
                        <tr> <th>Mobile</th>  <td align="left">
                                <?php
                                if ($clientdata['mobile'] != "") {
                                    echo $clientdata['mobile'];
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td></tr>
                        <tr> <th>file</th> <td class="center"><?php if ($clientdata['file'] != "") {
                                        ?>
                                    <a href="<?php echo $clientdata['file'] ?>"><?php echo $clientdata['file'] ?></a> <?php
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td></tr>
                        <tr> <th>Topic</th> <td align="left">
                                <?php
                                if ($clientdata['topic'] != "") {
                                    echo $clientdata['topic'];
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td></tr>
                        <tr> <th>Contact</th> <td class="center"><?php
                                if ($clientdata['expert_contact'] != "") {
                                    echo $clientdata['expert_contact'];
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td></tr>

                        <tr> <th>Actions</th><td class="center">

                                <?php
                                if ($clientdata['status'] == 1) {
                                    ?>

                                    <a href="view_in_detail_registrant.php?confirm=ok&id=<?php echo $clientdata['email']; ?>" onClick="return archiveconfirm(<?php echo $clientdata['email']; ?>);" ><span class="label label-success">Active</span></a>
                                <?php } ?>


                                <?php
                                if ($clientdata['status'] == 0) {
                                    ?>

                                    <a href="view_in_detail_registrant.php?con=ok&id=<?php echo $clientdata['email']; ?>" onClick="return activeconfirm(<?php echo $clientdata['email']; ?>);"><span class="label label-warning">Active</span></a>
                                <?php } ?>






                                <a class="btn btn-info" href="view_group.php?email=<?php echo $clientdata['email']; ?>" style="text-decoration:none;">
                                    <i class="icon-edit icon-white"></i>  
                                    View Group                                            
                                </a>
                                <a class="btn btn-danger" a href="#" onClick="return delconfirm(<?php echo $clientdata['email']; ?>);">
                                    <i class="icon-trash icon-white"></i> 
                                    Delete
                                </a>

                            </td>


                        </tr>


                        <?php
                    }
                    ?>


                    <?php if ($rowset <= 0 || $rowset == "") { ?>
                        <tr align="center" bgcolor="#F3F3F3" class="txtNodata"> 

                            <td>-- NO DATA --</td>

                        </tr>


                        <?php
                    }
                }
                ?>




            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->

<?php include('footer.php'); ?>
<?php ob_flush(); ?>