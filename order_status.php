<?php
include('header.php');
include_once("connect.php");
?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Order Status</a>
        </li>
    </ul>
</div>


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
                        <th>Ordered By</th>
                        <th>Product Name</th>
                        <th>Date registered</th>
                        
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <tr>
                        <td class="center">Adam Mark</td>
                        <td>D-Signals monitoring</td>
                        <td class="center">2012/01/01</td>
                        
                        <td class="center">
                            <span class="label label-success">Delivered</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td class="center">Ben Strokes</td>
                        <td>cRAID</td>
                        <td class="center">2012/01/01</td>
                        
                        <td class="center">
                            <span class="label label-success">Delivered</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td class="center">Christopher Jericho</td>
                        <td>Jam unity dashbingnator</td>
                        <td class="center">2012/01/01</td>
                        
                        <td class="center">
                            <span class="label label-success">Delivered</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td class="center">Damian Martin</td>
                        <td>Application for Hospital Billing</td>
                        <td class="center">2012/01/01</td>
                        
                        <td class="center">
                            <span class="label label-success">Delivered</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="view_in_detail.php">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td class="center">Armindog</td>
                        <td>IProb</td>
                        <td class="center">2012/02/01</td>
                        
                        <td class="center">
                            <span class="label label-important">Dispatched</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                           
                        </td>
                    </tr>
                    <tr>
                        <td class="center">Eric Williams</td>
                        <td>Industrial Automation</td>
                        <td class="center">2012/02/01</td>
                        
                        <td class="center">
                            <span class="label label-important">Dispatched</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td class="center">Eion </td>
                        <td>cXBee</td>
                        <td class="center">2012/03/01</td>
                        
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td class="center">Feriidics</td>
                        <td>BSP430</td>
                        <td class="center">2012/03/01</td>
                        
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td class="center">Aaritcs</td>
                        <td>Automation PC Interfaced</td>
                        <td class="center">2012/01/21</td>
                        
                        <td class="center">
                            <span class="label label-success">Delivered</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="orders_in_detail.php">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                            
                            
                        </td>
                    </tr>
                    <tr>
                        <td class="center">Aarti chaudri</td>
                        <td>Automation DC</td>
                        <td class="center">2012/01/21</td>
                        
                        <td class="center">
                            <span class="label label-success">Delivered</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>Zmrin Sana</td>
                        <td class="center">2012/08/23</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-important">Banned</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>zSana Amrin</td>
                        <td class="center">2012/08/23</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-important">Banned</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>zIfrah Jannat</td>
                        <td class="center">2012/06/01</td>
                        <td class="center">Admin</td>
                        <td class="center">
                            <span class="label">Inactive</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>zJannat Ifrah</td>
                        <td class="center">2012/06/01</td>
                        <td class="center">Admin</td>
                        <td class="center">
                            <span class="label">Inactive</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>Robert</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>IMOPERT</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Communication</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>ZBrown Robert</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>Usman Muhammad</td>
                        <td class="center">2012/01/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-success">Active</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>ZAbdullah</td>
                        <td class="center">2012/02/01</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-important">Banned</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>zDow John</td>
                        <td class="center">2012/02/01</td>
                        <td class="center">Admin</td>
                        <td class="center">
                            <span class="label">Inactive</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>John R</td>
                        <td class="center">2012/02/01</td>
                        <td class="center">Admin</td>
                        <td class="center">
                            <span class="label">Inactive</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>Paul Wilson</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>Wilson Paul</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>Hydro Monitor</td>
                        <td class="center">2012/01/21</td>
                        <td class="center">Robotics</td>
                        <td class="center">
                            <span class="label label-success">Active</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>Sheikh Heera</td>
                        <td class="center">2012/01/21</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-success">Active</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>zChristopher</td>
                        <td class="center">2012/08/23</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-important">Banned</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>zAndro Christopher</td>
                        <td class="center">2012/08/23</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-important">Delivered</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>Jhon Doe</td>
                        <td class="center">2012/06/01</td>
                        <td class="center">Admin</td>
                        <td class="center">
                            <span class="label">Inactive</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>Lorem Ipsum</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>zAbraham</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>zBrown Blue</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>Worth Name</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
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






<?php include('footer.php'); ?>
