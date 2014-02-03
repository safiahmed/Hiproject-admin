<?php include('header.php'); ?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="billing_payments.php">Billing and Payments</a>
        </li>
    </ul>
</div>
<div class="row-fluid sortable">




    <div class="box span777">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-bell"></i> Select Date</h2>
            <!--<div class="box-icon">
                   <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                   <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                   <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
           </div>-->
        </div>
        <div class="box-content">

            <div class="control-group">

                <div class="controls">
                    <br/> From&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="from" class="input-xlarge datepicker" id="date01" value="30/02/2012">

                    &nbsp;&nbsp;&nbsp;To&nbsp;&nbsp;&nbsp;<input type="text" name="to" class="input-xlarge datepicker" id="date02" value="02/16/12">
                </div>
            </div>




            <!-- <div class="form-group">
                       <label class="control-label col-md-3">Date Range</label>
                       <div class="col-md-4">
                           <div class="input-group input-large" data-date="13/07/2013" data-date-format="mm/dd/yyyy">
                               <input type="text" class="form-control dpd1" name="from">
                               <span class="input-group-addon">To</span>
                               <input type="text" class="form-control dpd2" name="to">
                           </div>
                           <span class="help-block">Select date range</span>
                       </div>
              </div>  -->


        </div>							
    </div>			

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
                        <th>Sl No</th>
                        <th>Name</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <tr>
                        <td>1</td>
                        <td class="center">Adam mark</td>
                        <td class="center">D-Signals monitoring</td>
                        <td class="center">Rs9999</td>

                        <td class="center">
                            <a class="btn btn-success" href="#">
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

                        <td class="center">
                            <a class="btn btn-success" href="view_in_detail.php">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>

                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td class="center"></td>
                        <td class="center">TOTAL</td>
                        <td class="center">Rs11999</td>

                        <td class="center">


                        </td>
                    </tr>


















                </tbody>

            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->







<?php include('footer.php'); ?>
