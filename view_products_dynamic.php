<?php ob_start(); ?>
<?php include('header.php');
include_once("connect.php");
?>
<script language="JavaScript">

    function archiveconfirm(id)
    {
        if (confirm("Are you sure you want to Archive the category? "))
        {
            window.location = 'category_list.php?action=archive&id=' + id;
        }
        else
            return false;
    }
    function activeconfirm(id)
    {
        if (confirm("Are you sure you want to Activate the category? "))
        {
            window.location = 'category_list.php?action=active&id=' + id;
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
                <thead>
                    <tr>
                        <th>Sl no</th>
                        <th>Product Name</th>								  
                        <th>Category</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    if (isset($_GET["confirm"]) == "ok") {
                        $sql = "update tbl_product set prod_status=0 where prod_id_pk=" . $_GET['id'] . "";
                        $terstirs1 = mysql_query($sql);
                        $terstisquery = "SELECT * FROM tbl_product order by prod_id_pk asc ";
                        $terstirs = mysql_query($terstisquery);
                    } elseif (isset($_GET["con"]) == "ok") {
                        $sql = "update tbl_product set cat_status=1 where prod_id_pk=" . $_GET['id'] . "";
                        $terstirs1 = mysql_query($sql);
                        $terstisquery = "SELECT * FROM tbl_product order by prod_id_pk asc";
                        $terstirs = mysql_query($terstisquery);
                    } else {



                        $terstisquery = "SELECT a.*,b.* 
				 FROM tbl_product as a ,tbl_category as b
             			 WHERE  a.cat_id_fk=b.cat_id_pk order by prod_id_pk asc ";


                        //echo $terstisquery;
                        $terstirs = mysql_query($terstisquery);
                    }

                    $rowset = mysql_num_rows($terstirs);
                    $count = 0;


                    if ($rowset > 0) {
                        while ($terstidata = mysql_fetch_array($terstirs)) {
                            ?>




                            <tr>

                                <td><?php $count = $count + 1;
                    echo $count;
                            ?></td>




                                <td class="center"><?php
                    if (($terstidata['prod_name'] != "")) {
                        echo $terstidata['prod_name'];
                    } else {
                        ?>
                                        <p align="center" class="txtNodata">
                                        <?php echo "-- !NO DATA! --";
                                    }
                                    ?></p>		   </td>



                                <td class="center"><?php
                                    if (($terstidata['cat_name'] != "")) {
                                        echo $terstidata['cat_name'];
                                    } else {
                                        ?>
                                        <p align="center" class="txtNodata">
                                        <?php echo "-- !NO DATA! --";
                                    }
                                    ?></p>		   </td>		   




        <!--<td class="center">Member</td>-->





                                <td>
                                    <?php
                                    if ($terstidata['prod_status'] == 1) {
                                        ?>

                                        <a href="view_products.php?confirm=ok&id=<?php echo $terstidata['prod_id_pk']; ?>" style="text-decoration:none;" onClick="return archiveconfirm(<?php echo $terstidata['prod_id_pk']; ?>);" ><span class="label label-important">Archive</span></a>
                                        <?php } ?>


        <?php
        if ($terstidata['prod_status'] == 0) {
            ?>

                                        <a href="view_products.php?con=ok&id=<?php echo $terstidata['prod_id_pk']; ?>" style="text-decoration:none;" onClick="return activeconfirm(<?php echo $terstidata['prod_id_pk']; ?>);" ><span class="label label-success">Active</span></a>
        <?php } ?>


                                </td>

                                <td class="center">
                                    <a href="offer_section.php" class="btn btn-danger" data-rel="popover" data-content="Add to Present Offer section" >Add</a>
                                    <a class="btn btn-success" href="view_in_detail.php?id=<?php echo $terstidata['prod_id_pk']; ?>">
                                        <i class="icon-zoom-in icon-white"></i>  
                                        View                                            
                                    </a>
                                    <a class="btn btn-info" href="edit_product.php?id=<?php echo $terstidata['prod_id_pk']; ?>">
                                        <i class="icon-edit icon-white"></i>  
                                        Edit                                            
                                    </a>
                                    <!--<a class="btn btn-danger" href="#">
                                            <i class="icon-trash icon-white"></i> 
                                            Delete
                                    </a>-->

                                </td>

                            </tr>
        <?php
    }
}
?>


                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->


<!------>

<!------>




                    <?php include('footer.php'); ?>
                    <?php ob_flush(); ?>