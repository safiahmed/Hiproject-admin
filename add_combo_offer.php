<?php include('header.php'); ?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="add_combo_offer.php">Select Products </a>
        </li>
    </ul>
</div>


<br/><div class="row-fluid sortable">




    <div class="box span7">
        <div class="box-header well" data-original-title>
            <h2> Select Categories and Sub-categories</h2>
            <!--<div class="box-icon">
                   <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                   <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                   <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
           </div>-->
        </div>

        <div class="box-content">
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="selectError">Select Category</label>
                    <div class="controls">
                        <select id="selectError" data-rel="chosen">
                            <option>ARM</option>
                            <option>Android</option>
                            <option>Embedded</option>
                            <option>Electrical</option>
                            <option>Communication</option>
                            <option>Automotive</option>
                            <option>Others</option>
                        </select>
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label" for="focusedInput">Sub-Category Name</label>
                    <div class="controls">
                        <select  id="selectError2" data-rel="chosen">
                            <option value=""></option>
                            <optgroup label="sub categories">
                                <option>option1</option>
                                <option>option2</option>
                                <option>option3</option>
                                <option>option4</option>
                            </optgroup>

                        </select>
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

            </fieldset>				
        </div>							
    </div>			

</div>
<br/><br/><div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-gift"></i>Select Products For Combo</h2>
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
                        <th>Product Kit Type</th>
                        <!--<th>Price</th>-->
                        <th>Actions</th>
                        <th>Select</th>
                    </tr>
                </thead>








                <tbody>
                    <tr>
                        <td>1</td>

                        <td class="center">D-Signals monitoring</td>
                        <td><div class="control-group">

                                <div class="controls">
                                    <label class="radio">
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                        Project Kit
                                    </label>
                                    <div style="clear:both"></div>
                                    <label class="radio">
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                        Do it yourself Kit Price
                                    </label>
                                    <div style="clear:both"></div>
                                    <label class="radio">
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                        Readymade Kit Price
                                    </label>
                                </div>
                            </div></td> 

                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>

                        </td>
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
                    <tr>
                        <td>2</td>

                        <td class="center">cRAID</td>

                        <td><div class="control-group">

                                <div class="controls">
                                    <label class="radio">
                                        <input type="radio" name="optionsRadios1" id="optionsRadios1" value="option1" checked="">
                                        Project Kit
                                    </label>
                                    <div style="clear:both"></div>
                                    <label class="radio">
                                        <input type="radio" name="optionsRadios1" id="optionsRadios2" value="option2">
                                        Do it yourself Kit Price
                                    </label>
                                    <div style="clear:both"></div>
                                    <label class="radio">
                                        <input type="radio" name="optionsRadios1" id="optionsRadios2" value="option2">
                                        Readymade Kit Price
                                    </label>
                                </div>
                            </div></td>        
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>


                        </td>
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
                    <tr>
                        <td>3</td>

                        <td class="center">Jam unity dashbingnator</td>
                        <td><div class="control-group">

                                <div class="controls">
                                    <label class="radio">
                                        <input type="radio" name="optionsRadios2" id="optionsRadios1" value="option1" checked="">
                                        Project Kit
                                    </label>
                                    <div style="clear:both"></div>
                                    <label class="radio">
                                        <input type="radio" name="optionsRadios2" id="optionsRadios2" value="option2">
                                        Do it yourself Kit Price
                                    </label>
                                    <div style="clear:both"></div>
                                    <label class="radio">
                                        <input type="radio" name="optionsRadios2" id="optionsRadios2" value="option2">
                                        Readymade Kit Price
                                    </label>
                                </div>
                            </div></td> 
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="icon-zoom-in icon-white"></i>  
                                View                                            
                            </a>

                        </td>
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
<div ><a class="btn btn-info" href="combo_offer_form.php">
        <i class="icon-edit icon-white"></i>  
        Select                                            
    </a></div>


<br/><br/><div class="row-fluid sortable">
    <div class="box span1234" >
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> Selected Products</h2>
            <!--<div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>-->
        </div>
        <div class="box-content">
            <div class="combo_box" style="float:left;padding:25px;width:150px;margin-top:-15px;">

                <p>D-Signals monitoring</p><br/>
                <p>Readymade Kit</p><br/>
                <p>6000Rs</p><br/>
            </div>
            <div class="combo_box" style="float:left;padding:25px;">
                <p>+</p>
            </div>
            <div class="combo_box" style="float:left;padding:25px;width:150px;margin-top:-15px;">
                <p>Jam unity dashbingnator</p><br/>
                <p>Do it yourself Kit Price</p><br/>
                <p>6000Rs</p><br/>
            </div>
            <div class="combo_box" style="float:left;padding:25px;">
                <p>+</p>
            </div>
            <div class="combo_box" style="float:left;padding:25px;margin-top:-15px">
                <img src="img/addItems.gif"/>
            </div>
            <div class="combo_box" style="float:left;padding:25px;">
                <p>=</p>
            </div>


            <div class="combo_box" style="float:left;padding:25px;width:200px;">
                <p>HiProjects</p>
                <p>Its a live demo of the Admin PAnel. I have created to ease the work I have to do on my projects. </p>
                <p>All pages in the menu are functional, take a look at all</p>
            </div>
<!--<p class="center">
        <a href="http://usman.it/free-responsive-admin-template" class="btn btn-large btn-primary"><i class="icon-chevron-left icon-white"></i> Back to article</a> 
        <a href="http://usman.it/free-responsive-admin-template" class="btn btn-large"><i class="icon-download-alt"></i> Download Page</a>
</p>-->
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
