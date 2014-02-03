<?php include('header.php'); ?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="logistics.php">Logistics</a>
        </li>
    </ul>
</div>






<br/><br/><div class="row-fluid sortable">
    <div class="box span477">
        <div class="box-header well">
            <h2><i class="icon-th"></i> Logistics</h2>
            <!-- <div class="box-icon">
                 <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                 <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                 <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
             </div> -->
        </div>
        <div class="box-content">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#info">Dispatched Products</a></li>
                <li><a href="#custom">Delivered Products</a></li>

            </ul>

            <div id="myTabContent" class="tab-content">
                <div class="tab-pane active" id="info">
                    <h3>Dispatched Products</h3>
                    <div class="row-fluid sortable">		
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
                                            <th>Sl No</th>
                                            <th>Name</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>   
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="center">Adam mark</td>
                                            <td class="center">D-Signals monitoring</td>
                                            <td class="center">Rs9999</td>
                                            <td class="center">  <span class="label label-info">Dispatched</span></td>
                                            <td class="center">
                                                <a class="btn btn-success" href="pending_orders_in_detail.php">
                                                    <i class="icon-zoom-in icon-white"></i>  
                                                    View                                            
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="center">Adert Robert</td>
                                            <td class="center">cRAID</td>
                                            <td class="center">Rs6999</td>
                                            <td class="center"><span class="label label-info">Dispatched</span></td>
                                            <td class="center">
                                                <a class="btn btn-success" href="#">
                                                    <i class="icon-zoom-in icon-white"></i>  
                                                    View                                            
                                                </a>


                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="center">Benitic Roy</td>
                                            <td class="center">Jam unity dashbingnator</td>
                                            <td class="center">Rs8999</td>
                                            <td class="center"> <span class="label label-info">Dispatched</span></td>
                                            <td class="center">
                                                <a class="btn btn-success" href="#">
                                                    <i class="icon-zoom-in icon-white"></i>  
                                                    View                                            
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="center">Bennizine halons</td>
                                            <td class="center">Application for Hospital Billing</td>
                                            <td class="center">Rs11999</td>
                                            <td class="center">  <span class="label label-info">Dispatched</span></td>
                                            <td class="center">
                                                <a class="btn btn-success" href="view_in_detail.php">
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
                </div>
                <div class="tab-pane" id="custom">
                    <h3>Delivered Products</h3>
                    <div class="row-fluid sortable">		
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
                                            <th>Sl No</th>
                                            <th>Name</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>   
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="center">Adam mark</td>
                                            <td class="center">D-Signals monitoring</td>
                                            <td class="center">Rs9999</td>
                                            <td class="center">  <span class="label label-success">Delivered</span></td>
                                            <td class="center">
                                                <a class="btn btn-success" href="pending_orders_in_detail.php">
                                                    <i class="icon-zoom-in icon-white"></i>  
                                                    View                                            
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="center">Adert Robert</td>
                                            <td class="center">cRAID</td>
                                            <td class="center">Rs6999</td>
                                            <td class="center"><span class="label label-success">Delivered</span></td>
                                            <td class="center">
                                                <a class="btn btn-success" href="#">
                                                    <i class="icon-zoom-in icon-white"></i>  
                                                    View                                            
                                                </a>


                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="center">Benitic Roy</td>
                                            <td class="center">Jam unity dashbingnator</td>
                                            <td class="center">Rs8999</td>
                                            <td class="center"> <span class="label label-success">Delivered</span></td>
                                            <td class="center">
                                                <a class="btn btn-success" href="#">
                                                    <i class="icon-zoom-in icon-white"></i>  
                                                    View                                            
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="center">Bennizine halons</td>
                                            <td class="center">Jam unity dashbingnator</td>
                                            <td class="center">Rs8999</td>
                                            <td class="center">  <span class="label label-success">Delivered</span></td>
                                            <td class="center">
                                                <a class="btn btn-success" href="view_in_detail.php">
                                                    <i class="icon-zoom-in icon-white"></i>  
                                                    View                                            
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="center">Halons</td>
                                            <td class="center">Application for Hospital Billing</td>
                                            <td class="center">Rs11999</td>
                                            <td class="center">  <span class="label label-success">Delivered</span></td>
                                            <td class="center">
                                                <a class="btn btn-success" href="view_in_detail.php">
                                                    <i class="icon-zoom-in icon-white"></i>  
                                                    View                                            
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="center">Jerome Ventics</td>
                                            <td class="center">D-Signals monitoring</td>
                                            <td class="center">Rs11999</td>
                                            <td class="center">  <span class="label label-success">Delivered</span></td>
                                            <td class="center">
                                                <a class="btn btn-success" href="view_in_detail.php">
                                                    <i class="icon-zoom-in icon-white"></i>  
                                                    View                                            
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="center">Bennizine halons</td>
                                            <td class="center">Application for Hospital Billing</td>
                                            <td class="center">Rs11999</td>
                                            <td class="center">  <span class="label label-success">Delivered</span></td>
                                            <td class="center">
                                                <a class="btn btn-success" href="view_in_detail.php">
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
                </div>

            </div>
        </div>
    </div><!--/span-->
</div>

<?php include('footer.php'); ?>
