<?php include('header.php'); ?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="home_page_products.php">Home Page Products </a><span class="divider">/</span>
        </li>
        <li>
            <a href="select_home_page_products.php">Select Products</a><span class="divider">/</span>
        </li>
        <li>
            <a href="selected_home_page_products.php">Selected Products</a><span class="divider">/</span>
        </li>
    </ul>
</div>





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
                        <th>Actions</th>
                        
                    </tr>
                </thead>








                <tbody>
                    <tr>
                        <td>1</td>

                        <td class="center">D-Signals monitoring</td>


                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>

                        </td>
                        


                    </tr>
                    <tr>
                        <td>2</td>

                        <td class="center">cRAID</td>


                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>


                        </td>
                       
                    </tr>
                    <tr>
                        <td>3</td>

                        <td class="center">Jam unity dashbingnator</td>

                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>

                        </td>
                       
                    </tr>






                </tbody>

            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->
<!--class="center"-->




<?php include('footer.php'); ?>
