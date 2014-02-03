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
            <a href="contact_us.php">Contact us</a>
        </li>
    </ul>
</div>
<br/>




<div class="row-fluid sortable">	
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2>Contact</h2>
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
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Phone</th>
                        <th>Website</th>
                        <th>Comment</th>
                        <!--<th>Role</th>-->
                                                                 
                    </tr>
                </thead>   
               <tbody>
                    <?php
                    
                        $terstisquery = "select * from tbl_contactus order by con_id_pk desc ";
                        $terstirs = mysql_query($terstisquery);
                    
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
                                    if (($terstidata['con_name'] != "")) {
                                        echo $terstidata['con_name'];
                                    } else {
                                        ?>
                                        <p align="center" class="txtNodata">
                                            <?php
                                            echo "-- !NO DATA! --";
                                        }
                                        ?></p>				  </td>
                                
                                <td align="left">
                                    <?php
                                    if (($terstidata['con_email'] != "")) {
                                        echo $terstidata['con_email'];
                                    } else {
                                        ?>
                                        <p align="center" class="txtNodata">
                                            <?php
                                            echo "-- !NO DATA! --";
                                        }
                                        ?></p>				  </td>
                                 <td align="left">
                                    <?php
                                    if (($terstidata['con_phone'] != "")) {
                                        echo $terstidata['con_phone'];
                                    } else {
                                        ?>
                                        <p align="center" class="txtNodata">
                                            <?php
                                            echo "-- !NO DATA! --";
                                        }
                                        ?></p>				  </td>
                                 <td align="left">
                                    <?php
                                    if (($terstidata['website'] != "")) {
                                        echo $terstidata['website'];
                                    } else {
                                        ?>
                                        <p align="center" class="txtNodata">
                                            <?php
                                            echo "-- !NO DATA! --";
                                        }
                                        ?></p>				  </td>
                                 <td align="left">
                                    <?php
                                    if (($terstidata['con_comment'] != "")) {
                                        echo $terstidata['con_comment'];
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