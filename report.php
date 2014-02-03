<?php include('header.php'); ?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="report.php">Reports</a>
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





    <br/><div class="box span4111">
        <div class="box-header well">
            <h2><i class="icon-th"></i> Tabs</h2>
            <!--<div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>-->
        </div>
        <div class="box-content">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#info">All</a></li>
                <li><a href="#custom">Clients</a></li>
                <li><a href="#messages">Registrants</a></li>
                <li><a href="#subscribers">Subscribers</a></li>
            </ul>

            <div id="myTabContent" class="tab-content">
                <div class="tab-pane active" id="info">
                    <table class="table table-bordered table-striped table-condensed">
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
                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Add To Label</span></a>
                                </td>                                       
                            </tr>
                            <tr>
                                <td>Morison</td>

                                <td class="center">Morison@yahoo.com</td>
                                <td class="center">MSRIT</td>
                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Add To Label</span></a>

                                </td>                                       
                            </tr>
                            <tr>
                                <td>Glenn</td>

                                <td class="center">glenn@gmail.com</td>
                                <td class="center">MSRIT</td>
                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Add To Label</span></a>

                                </td>                                       
                            </tr>
                            <tr>
                                <td>Robort</td>

                                <td class="center">robort@gmail.com</td>
                                <td class="center">SCE</td>
                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Add To Label</span></a>
                                </td>                                        
                            </tr>
                            <tr>
                                <td>Elinam</td>

                                <td class="center">elinam@redif.com</td>
                                <td class="center">GMIT</td>
                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Add To Label</span></a>
                                </td>                                       
                            </tr>
                            <tr>
                                <td>Janityson</td>

                                <td class="center">janityson@gmail.com</td>
                                <td class="center">JMIT</td>
                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Add To Label</span></a>
                                </td>                                        
                            </tr>  

                            <tr>
                                <td>Automaertocas</td>

                                <td class="center">aa@gmail.com</td>
                                <td class="center">SVSIT</td>
                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Add To Label</span></a>
                                </td>                                        
                            </tr> 
                            <tr>
                                <td>bloredge Dsouza</td>

                                <td class="center">Dsouza@yahoo.com</td>
                                <td class="center">SCE</td>
                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Add To Label</span></a>
                                </td>                                        
                            </tr> 

                        </tbody>
                    </table> 
                </div>
                <div class="tab-pane" id="custom">
                    <table class="table table-bordered table-striped table-condensed">
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
                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Add To Label</span></a>
                                </td>                                       
                            </tr>
                            <tr>
                                <td>Morison</td>

                                <td class="center">Morison@yahoo.com</td>
                                <td class="center">MSRIT</td>
                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Add To Label</span></a>

                                </td>                                       
                            </tr>
                            <tr>
                                <td>Glenn</td>

                                <td class="center">glenn@gmail.com</td>
                                <td class="center">MSRIT</td>
                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Add To Label</span></a>

                                </td>                                       
                            </tr>
                            <tr>
                                <td>Robort</td>

                                <td class="center">robort@gmail.com</td>
                                <td class="center">SCE</td>
                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Add To Label</span></a>
                                </td>                                        
                            </tr>
                            <tr>
                                <td>Elinam</td>

                                <td class="center">elinam@redif.com</td>
                                <td class="center">GMIT</td>
                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Add To Label</span></a>
                                </td>                                       
                            </tr>
                            <tr>
                                <td>Janityson</td>

                                <td class="center">janityson@gmail.com</td>
                                <td class="center">JMIT</td>
                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Add To Label</span></a>
                                </td>                                        
                            </tr>  

                            <tr>
                                <td>Automaertocas</td>

                                <td class="center">aa@gmail.com</td>
                                <td class="center">SVSIT</td>
                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Add To Label</span></a>
                                </td>                                        
                            </tr> 
                            <tr>
                                <td>bloredge Dsouza</td>

                                <td class="center">Dsouza@yahoo.com</td>
                                <td class="center">SCE</td>
                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Add To Label</span></a>
                                </td>                                        
                            </tr> 

                        </tbody>
                    </table> 
                </div>
                <div class="tab-pane" id="messages">
                    <table class="table table-bordered table-striped table-condensed">
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
                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Add To Label</span></a>
                                </td>                                       
                            </tr>
                            <tr>
                                <td>Morison</td>

                                <td class="center">Morison@yahoo.com</td>
                                <td class="center">MSRIT</td>
                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Add To Label</span></a>

                                </td>                                       
                            </tr>
                            <tr>
                                <td>Glenn</td>

                                <td class="center">glenn@gmail.com</td>
                                <td class="center">MSRIT</td>
                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Add To Label</span></a>

                                </td>                                       
                            </tr>
                            <tr>
                                <td>Robort</td>

                                <td class="center">robort@gmail.com</td>
                                <td class="center">SCE</td>
                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Add To Label</span></a>
                                </td>                                        
                            </tr>
                            <tr>
                                <td>Elinam</td>

                                <td class="center">elinam@redif.com</td>
                                <td class="center">GMIT</td>
                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Add To Label</span></a>
                                </td>                                       
                            </tr>
                            <tr>
                                <td>Janityson</td>

                                <td class="center">janityson@gmail.com</td>
                                <td class="center">JMIT</td>
                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Add To Label</span></a>
                                </td>                                        
                            </tr>  

                            <tr>
                                <td>Automaertocas</td>

                                <td class="center">aa@gmail.com</td>
                                <td class="center">SVSIT</td>
                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Add To Label</span></a>
                                </td>                                        
                            </tr> 
                            <tr>
                                <td>bloredge Dsouza</td>

                                <td class="center">Dsouza@yahoo.com</td>
                                <td class="center">SCE</td>
                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Add To Label</span></a>
                                </td>                                        
                            </tr> 

                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="subscribers">
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>

                                <th>Email</th>

                                <th>Action</th>                                          
                            </tr>
                        </thead>   
                        <tbody>
                            <tr>

                                <td class="center">jhon@gmail.com</td>

                                <td class="center">
                                        <!--<span class="label label-success">Active</span>-->
                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Email</span></a>
                                </td>                                       
                            </tr>
                            <tr>


                                <td class="center">Morison@yahoo.com</td>

                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Email</span></a>

                                </td>                                       
                            </tr>
                            <tr>


                                <td class="center">glenn@gmail.com</td>

                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Email</span></a>

                                </td>                                       
                            </tr>
                            <tr>


                                <td class="center">robort@gmail.com</td>

                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Email</span></a>
                                </td>                                        
                            </tr>
                            <tr>


                                <td class="center">elinam@redif.com</td>

                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Email</span></a>
                                </td>                                       
                            </tr>
                            <tr>


                                <td class="center">janityson@gmail.com</td>

                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Email</span></a>
                                </td>                                        
                            </tr>  

                            <tr>


                                <td class="center">aa@gmail.com</td>

                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Email</span></a>
                                </td>                                        
                            </tr> 
                            <tr>


                                <td class="center">Dsouza@yahoo.com</td>

                                <td class="center">

                                    <a href="#" style="text-decoration:none;"><span class="label label-important">Email</span></a>
                                </td>                                        
                            </tr> 

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/span-->
</div>






<?php include('footer.php'); ?>
