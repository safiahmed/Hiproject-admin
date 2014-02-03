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
            <a href="view_review.php">Review</a><span class="divider">/</span>
        </li>
        <li>
            <a href="view_review_in_detail.php">View Review</a>
        </li>
    </ul>
</div>
<a href="view_review.php">Review List</a>

<br/><div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-gift"></i> Reviews</h2>
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
                    $sql = "update tbl_review set test_status=0 where review_id_pk =" . $_GET['id'] . "";
                    $terstirs1 = mysql_query($sql);
                    $terstisquery = "select * from tbl_review order by review_id_pk  desc ";
                    $terstirs = mysql_query($terstisquery);
                } elseif (isset($_GET["con"]) == "ok") {
                    $sql = "update tbl_review set test_status=1 where review_id_pk =" . $_GET['id'] . "";
                    $terstirs1 = mysql_query($sql);
                    $terstisquery = "select * from tbl_review  order by review_id_pk  desc ";
                    $terstirs = mysql_query($terstisquery);
                } else {
                    $terstisquery = "select a.*, b.* 
						from tbl_review as a ,tbl_product as b
						where review_id_pk =" . $_GET['id'] . " and  a.prod_id_fk = b.prod_id_pk
					        order by review_id_pk asc ";
                    $terstirs = mysql_query($terstisquery);
                }

                $rowset = mysql_num_rows($terstirs);
                $count = 0;


                if ($rowset > 0) {
                    while ($terstidata = mysql_fetch_array($terstirs)) {
                        ?>	


                        <tr>
                            <th>Name</th> <td align="left">
                                <?php
                                if (($terstidata['name'] != "")) {
                                    echo $terstidata['name'];
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td></tr>
                        <tr> <th>Email</th> <td align="left">
                                <?php
                                if (($terstidata['email'] != "")) {
                                    echo $terstidata['email'];
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td></tr>

                        <tr> <th>Product Name</th> <td align="left">
                                <?php
                                if (($terstidata['prod_name'] != "")) {
                                    echo $terstidata['prod_name'];
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td></tr>

                        <tr> <th>Review Title</th> <td align="left">
                                <?php
                                if (($terstidata['review_title'] != "")) {
                                    echo $terstidata['review_title'];
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td></tr>

                        <tr> <th>Rating</th> <td align="left">
                                <?php
                                if (($terstidata['rating'] != "")) {
                                    echo $terstidata['rating'];
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td></tr>
                        <tr><th>Review</th>  <td align="left">
                                <?php
                                if (($terstidata['review'] != "")) {



                                    echo $terstidata['review'];
                                } else {
                                    ?>
                                    <p align="center" class="txtNodata">
                                        <?php
                                        echo "-- !NO DATA! --";
                                    }
                                    ?></p>				  </td></tr>





                        <tr> <th>Actions</th><td class="center">



                                <a class="btn btn-info" href="edit_review.php?id=<?php echo $terstidata['review_id_pk'];?>">
                                    <i class="icon-edit icon-white"></i>  
                                    Edit                                            
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="icon-trash icon-white"></i> 
                                    Delete
                                </a>

                            </td>


                        </tr>
                    </table> 
                    <?php
                }
            }
            ?>







        </div>
    </div><!--/span-->

</div><!--/row-->

<?php include('footer.php'); ?>
<?php ob_flush(); ?>