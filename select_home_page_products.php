<?php ob_start(); ?>


<?php include('header.php'); ?>
<?php
//$city = $_POST['city'];
//include_once('connect.php');



require_once './xml/my-controller.php';
$product = new Users();
$data = array();
$count = 0;
$pro_details = $product->homepageproducts($data);
?>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="home_page_products.php">Home Page Products </a><span class="divider">/</span>
        </li>
        <li>
            <a href="select_home_page_products.php">Selected Products </a>
        </li>
    </ul>
</div>



<a href="selected_home_page_products.php">Click Here To see Selected Home Page Products</a>

<br/><div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-gift"></i>Selected Products For Home Page</h2>
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
                        <th>Sl No</th>
                        <th>Product</th>
                        <!--<th>Product</th>
                        <th>Price</th>-->
                        <!--<th>Actions</th>-->
                        <th>Select</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($pro_details as $prod) {
                        ?>
                        <tr>

                            <td><?php echo $count = $count + 1; ?></td>

                            <td class="center"><?php echo $prod['prod_name']; ?></td>


                                            <!--<td class="center">
                                                <a class="btn btn-success" href="#">
                                                    <i class="icon-zoom-in icon-white"></i>  
                                                    View                                            
                                                </a>

                                            </td>-->
                            <td>
                                <div class="control-group">

                                    <div class="controls">
                                        <label class="checkbox inline">
                                            <input type="checkbox" id="inlineCheckbox1" value="option1" checked>
                                        </label>

                                    </div>
                                </div>

                            </td>


                        </tr>
                    <?php } ?>
                    <tr>
                        <td><?php echo $count=$count+1; ?></td>
                        <?php
                        if (!isset($_SESSION)) {
                            session_start();
                        }
                        include_once("connect.php");


                        if (isset($_GET['id'])) {
                            $_SESSION['ids'] = $_GET['id'];
                        }
                        if (isset($_SESSION['ids'])) {
                            $_GET['id'] = $_SESSION['ids'];
                        }
                        
                         $clientsquery = "select * from tbl_product where prod_id_pk= '$_GET[id]' order by prod_id_pk desc";
                         $clientrs = mysql_query($clientsquery);

                    $rowset = mysql_num_rows($clientrs);
                     if ($rowset > 0) {
                        while ($clientdata = mysql_fetch_array($clientrs)) {
                            ?>
                         <td>
                                    <?php
                                    if ($clientdata['prod_name'] != "") {
                                        echo $clientdata['prod_name'];
                                    } else {
                                        ?>
                                        <p align="center" class="txtNodata">
                                            <?php
                                            echo "-- !NO DATA! --";
                                        }
                                        ?></p>				  </td>
                        <?php }
                     }?>
                           <td>
                                <div class="control-group">

                                    <div class="controls">
                                        <label class="checkbox inline">
                                            <input type="checkbox" id="inlineCheckbox1" value="option1">
                                        </label>

                                    </div>
                                </div>

                            </td>

                    </tr>
                </tbody>

            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->
<!--class="center"-->
<div ><a class="btn btn-info" href="selected_home_page_products.php">
        <i class="icon-edit icon-white"></i>  
        Update                                            
    </a></div>



<?php include('footer.php'); ?>
<?php ob_flush(); ?>