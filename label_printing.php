<?php include('header.php');
include_once("connect.php");
?>


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
                        <th>Name</th>
                        <th>Email</th>
                        <th>College</th>
                        <th>Status</th>                                          
                    </tr>
                </thead>   
                <tbody>
                    <tr>
                        <td>Jhon Mandrics</td>
                        <td class="center">jhon@gmail.com</td>
                        <td class="center">JMIT</td>
                        <td class="center">
                                <!--<span class="label label-success">Active</span>-->
                            <a class="btn btn-success" href="view_for_printing.php">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                        </td>                                       
                    </tr>
                    <tr>
                        <td>Morison</td>

                        <td class="center">Morison@yahoo.com</td>
                        <td class="center">MSRIT</td>
                        <td class="center">

                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>

                        </td>                                       
                    </tr>
                    <tr>
                        <td>Glenn</td>

                        <td class="center">glenn@gmail.com</td>
                        <td class="center">MSRIT</td>
                        <td class="center">

                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>

                        </td>                                       
                    </tr>
                    <tr>
                        <td>Robort</td>

                        <td class="center">robort@gmail.com</td>
                        <td class="center">SCE</td>
                        <td class="center">

                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                        </td>                                        
                    </tr>
                    <tr>
                        <td>Elinam</td>

                        <td class="center">elinam@redif.com</td>
                        <td class="center">GMIT</td>
                        <td class="center">

                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                        </td>                                       
                    </tr>
                    <tr>
                        <td>Janityson</td>

                        <td class="center">janityson@gmail.com</td>
                        <td class="center">JMIT</td>
                        <td class="center">

                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                        </td>                                        
                    </tr>  

                    <tr>
                        <td>Automaertocas</td>

                        <td class="center">aa@gmail.com</td>
                        <td class="center">SVSIT</td>
                        <td class="center">

                            <a class="btn btn-success" href="view_for_printing.php">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>
                        </td>                                        
                    </tr> 
                    <tr>
                        <td>bloredge Dsouza</td>

                        <td class="center">Dsouza@yahoo.com</td>
                        <td class="center">SCE</td>
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
