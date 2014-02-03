<?php include('header.php'); ?>


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


                <tr>
                    <th>Product Name</th><td>Application for Hospital Billing</td></tr>
                <tr> <th>Category Name</th><td class="center">Android</td></tr>
                <tr> <th>Product Overview</th>	<td class="center">Used for billing purpose</td></tr>
                <tr> <th>Product ThumbImage</th> <td class="center">images/img1</td></tr>
                <tr> <th>Product Price</th><td class="center">8999Rs</td></tr>
                <tr> <th>Project Kit Price</th><td class="center">10999Rs</td></tr>
                <tr> <th>Do it yourself Kit Price</th><td class="center">11999Rs</td></tr>
                <tr> <th>Readymade Kit Price</th><td class="center">9999Rs</td></tr>
                <tr> <th>Product Price</th><td class="center">8999Rs</td></tr>
                <tr> <th>Model Number</th> <td class="center">MX345DF</td></tr>
                <tr> <th>Product Image1</th> <td class="center">images/img2</td></tr>
                <tr> <th>Product Image2</th> <td class="center">images/img3</td></tr>
                <tr> <th>Product Image3</th>  <td class="center">images/img4</td></tr>
                
                <tr> <th>Download</th>  <td class="center">images/img6</td></tr>
                <tr><th>Video Description</th> <td class="center">Abstact Full</td></tr>
                <tr><th>Product Abstract</th> <td class="center">Abstact Full</td></tr>
                <tr> <th>Product BlockDiagram</th><td class="center">images/img7</td></tr>
                <tr> <th>Actions</th><td class="center">
                        <span class="label label-success">Active</span>


                        <a class="btn btn-info" href="edit_product.php">
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
        </div>
    </div><!--/span-->

</div><!--/row-->

<?php include('footer.php'); ?>
