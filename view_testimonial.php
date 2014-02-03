<?php ob_start(); ?>
<?php include('header.php');
include_once("connect.php");
?>
<script language="JavaScript">

    function archiveconfirm(id)
    {
        if (confirm("Are you sure you want to archive the Testimonial? "))
        {
            window.location = 'view_testimonial.php?action=archive&id=' + id;
        }
        else
            return false;
    }
    function activeconfirm(id)
    {
        if (confirm("Are you sure you want to activate the Testimonial? "))
        {
            window.location = 'view_testimonial.php?action=active&id=' + id;
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
            <a href="view_testimonial.php">Testimonial</a>
        </li>
    </ul>
</div>
<br/><a href="add_testimonial.php">Add Testimonial</a>




<br/><br/><div class="row-fluid sortable">	
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2>Testimonials</h2>
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
                        <th>Testimonial By</th>
                        <th>Status</th>                                          
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    if (isset($_GET["confirm"]) == "ok") {
                        $sql = "update tbl_testimonials set test_status=0 where test_id_pk=" . $_GET['id'] . "";
                        $terstirs1 = mysql_query($sql);
                        $terstisquery = "select * from tbl_testimonials order by test_id_pk desc ";
                        $terstirs = mysql_query($terstisquery);
                    } elseif (isset($_GET["con"]) == "ok") {
                        $sql = "update tbl_testimonials set test_status=1 where test_id_pk=" . $_GET['id'] . "";
                        $terstirs1 = mysql_query($sql);
                        $terstisquery = "select * from tbl_testimonials  order by test_id_pk desc ";
                        $terstirs = mysql_query($terstisquery);
                    } else {
                        $terstisquery = "select * from tbl_testimonials order by test_id_pk desc ";
                        $terstirs = mysql_query($terstisquery);
                    }

                    $rowset = mysql_num_rows($terstirs);
                    $count = 0;


                    if ($rowset > 0) {
                        while ($terstidata = mysql_fetch_array($terstirs)) {
                            ?>
                            <tr>
                                <td> 
                            <?php $count = $count + 1;
                            echo $count;
                            ?>				  
                                </td>
                                <td>
                            <?php
                            if (($terstidata['test_by'] != "")) {
                                echo $terstidata['test_by'];
                            } else {
                                ?>
                                        <p align="center" class="txtNodata">
                                        <?php echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  
                                </td>

                                <td class="center">
                                        <!--<a href="admin_testimonial_edit.php?id=<?php //echo $terstidata['test_id_pk'];?>" class="link1">Edit</a> &nbsp;-->
                                    <?php
                                    if ($terstidata['test_status'] == 1) {
                                        ?>

                                        <a href="view_testimonial.php?confirm=ok&id=<?php echo $terstidata['test_id_pk']; ?>" style="text-decoration:none;" onClick="return archiveconfirm(<?php echo $terstidata['test_id_pk']; ?>);" ><span class="label label-important">Archive</span></a>
                                    <?php } ?>


                                        <?php
                                        if ($terstidata['test_status'] == 0) {
                                            ?>

                                        <a href="view_testimonial.php?con=ok&id=<?php echo $terstidata['test_id_pk']; ?>" style="text-decoration:none;" onClick="return activeconfirm(<?php echo $terstidata['test_id_pk']; ?>);"><span class="label label-success">Active</span></a>
                                    <?php } ?>

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
<?php ob_flush(); ?>