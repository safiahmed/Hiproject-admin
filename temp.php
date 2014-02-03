<?php
$city = $_POST['city'];

//include_once('connect.php');



require_once './xml/my-controller.php';
$product = new Users();
$data = array();
$count=0;
$pro_details=$product->selecthomepageproduct($city);
?>
<script type="text/javascript" src='js/jquery1.7.js'></script>
<div id="temp">

    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-gift"></i> Products</h2>

        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Product</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    foreach ($pro_details as $prod) {
                        ?>
                        <tr>

                            <td><?php echo $count=$count+1; ?></td>

                            <td class="center"><?php echo $prod['prod_name']; ?></td>


                            <td class="center">
                                <a href="select_home_page_products.php?id=<?php echo $prod['prod_id_pk'];?>" class="btn btn-danger" data-rel="popover" data-content="Add to Home Page" >Select</a>
                            </td>
                        </tr>
                    <?php } ?>
                   <!-- <tr>
                        <td>2</td>

                        <td class="center">cRAID</td>


                        <td class="center">
                            <a href="select_home_page_products.php" class="btn btn-danger" data-rel="popover" data-content="Add to Home Page" >Select</a>


                        </td>
                    </tr>
                    <tr>
                        <td>3</td>

                        <td class="center">Jam unity dashbingnator</td>

                        <td class="center">
                            <a href="select_home_page_products.php" class="btn btn-danger" data-rel="popover" data-content="Add to Home Page" >Select</a>

                        </td>
                    </tr>
                    <tr>
                        <td>4</td>

                        <td class="center">Application for Hospital Billing</td>


                        <td class="center">
                            <a href="select_home_page_products.php" class="btn btn-danger" data-rel="popover" data-content="Add to Home Page" >Select</a>

                        </td>
                    </tr>-->





                </tbody>

            </table>            
        </div>
    </div><!--/span-->

</div>
