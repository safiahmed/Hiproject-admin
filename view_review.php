<?php
include('header.php');
include_once("connect.php");


if (isset($_GET['action'])) {
    if ($_GET['action'] == "del") {
        $delquery = "delete from tbl_review where review_id_pk =" . $_GET['id'];
        $resultdel = mysql_query($delquery);
        echo '<script type="text/javascript">' . "\n";
        echo 'window.location="view_review.php";';
        echo '</script>';
    }
}
?>
<script language="JavaScript">
    function delconfirm(id)
    {
        if (confirm("Are you sure you want to delete?"))
        {
            window.location = 'view_review.php?action=del&id=' + id;
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
            <a href="view_review.php">Reviews</a>
        </li>
    </ul>
</div>
<!--<br/><a href="add_review.php">Add Review</a>-->




<div class="row-fluid sortable">	
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2>Reviews</h2>
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
                        <th>Name</th>
                       <!-- <th>Email</th>-->
                        <th>Product Name</th>
                        <th>Review Title</th>
                        <th>Rating</th>
                        <th>Message</th>
                        <th>Actions</th>                                          
                    </tr>
                </thead>   
                <tbody>
                    <!----------------------->
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
						where a.prod_id_fk = b.prod_id_pk
					        order by review_id_pk asc ";
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
                                    ?>				  </td>
                                <td align="left">
                                    <?php
                                    if (($terstidata['name'] != "")) {
                                        echo $terstidata['name'];
                                    } else {
                                        ?>
                                        <p align="center" class="txtNodata">
                                            <?php
                                            echo "-- !NO DATA! --";
                                        }
                                        ?></p>				  </td>
                               <!-- <td align="left">
                                    <?php
                                   /* if (($terstidata['email'] != "")) {
                                        echo $terstidata['email'];
                                    } else {
                                        ?>
                                        <p align="center" class="txtNodata">
                                            <?php
                                            echo "-- !NO DATA! --";
                                        }
                                      */  ?></p>				  </td>-->
                                <td align="left">
                                    <?php
                                    if (($terstidata['prod_name'] != "")) {
                                        echo $terstidata['prod_name'];
                                    } else {
                                        ?>
                                        <p align="center" class="txtNodata">
                                            <?php
                                            echo "-- !NO DATA! --";
                                        }
                                        ?></p>				  </td>

                                <td align="left">
                                    <?php
                                    if (($terstidata['review_title'] != "")) {
                                        echo $terstidata['review_title'];
                                    } else {
                                        ?>
                                        <p align="center" class="txtNodata">
                                            <?php
                                            echo "-- !NO DATA! --";
                                        }
                                       ?></p>				  </td>

                                <td align="left">
                                    <?php
                                    if (($terstidata['rating'] != "")) {
                                        echo $terstidata['rating'];
                                    } else {
                                        ?>
                                        <p align="center" class="txtNodata">
                                            <?php
                                            echo "-- !NO DATA! --";
                                        }
                                        ?></p>				  </td>

                                <td align="left">
                                    <?php
                                    if (($terstidata['review'] != "")) {



                                        echo substr($terstidata['review'], 0, 5);
                                    } else {
                                        ?>
                                        <p align="center" class="txtNodata">
                                            <?php
                                            echo "-- !NO DATA! --";
                                        }
                                        ?></p>				  </td>

                                <td class="center">
                                    <a class="btn btn-success" href="view_review_in_detail.php?id=<?php echo $terstidata['review_id_pk']; ?>">
                                        <i class="icon-zoom-in icon-white"></i>  
                                        View                                            
                                    </a>
                                    <a class="btn btn-info" href="edit_review.php?id=<?php echo $terstidata['review_id_pk']; ?>">
                                        <i class="icon-edit icon-white"></i>  
                                        Edit                                            
                                    </a>
                                    <a class="btn btn-danger" href="#" onClick="return delconfirm(<?php echo $terstidata['review_id_pk']; ?>);">
                                        <i class="icon-trash icon-white"></i> 
                                        Delete
                                    </a>
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

                        </tr>
                    <?php } ?>


                    <!----------------------->














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