<?php ob_start(); ?>
<?php
include('header.php');
include_once("connect.php");
?>










<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="view_combo_offer.php">Combo offers</a>
        </li>
    </ul>
</div>





<br/><br/><div class="row-fluid sortable">	
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2>Combo Offers</h2>
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
                        <th>Product1</th>

                        <th>Product2</th>  
                        <th>Actual Price</th> 
                        <th>Offer Price</th> 
                        <th>Action</th>
                    </tr>
                </thead>   
                <tbody>
                    <tr>
                        <td>Product 1</td>
                        <td>Product 2</td>
                        <td>13000</td>
                        <td>10000</td> 
                        <td>
                            <a class="btn btn-danger" href="#">
                                <i class="icon-trash icon-white"></i> 
                                Delete
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Product 1</td>
                        <td>Product 2</td>
                        <td>13000</td>
                        <td>10000</td> 
                        <td>
                            <a class="btn btn-danger" href="#">
                                <i class="icon-trash icon-white"></i> 
                                Delete
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Product 1</td>
                        <td>Product 2</td>
                        <td>13000</td>
                        <td>10000</td>
                        <td>
                            <a class="btn btn-danger" href="#">
                                <i class="icon-trash icon-white"></i> 
                                Delete
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Product 1</td>
                        <td>Product 2</td>
                        <td>13000</td>
                        <td>10000</td>
                        <td>
                            <a class="btn btn-danger" href="#">
                                <i class="icon-trash icon-white"></i> 
                                Delete
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Product 1</td>
                        <td>Product 2</td>
                        <td>13000</td>
                        <td>10000</td>
                        <td>
                            <a class="btn btn-danger" href="#">
                                <i class="icon-trash icon-white"></i> 
                                Delete
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Product 1</td>
                        <td>Product 2</td>
                        <td>13000</td>
                        <td>10000</td>
                        <td>
                            <a class="btn btn-danger" href="#">
                                <i class="icon-trash icon-white"></i> 
                                Delete
                            </a>
                        </td>
                    </tr> 

                    <tr>

                    <tr>



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
