<?php ob_start(); ?>
<?php include('header.php');
?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="view_products.php">Products</a><span class="divider">/</span>
        </li>
        <li>
            <a href="add_product.php">Add Products</a>
        </li>
    </ul>
</div>
<a href="view_products.php">View Products</a>
<br/><div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-th-large"></i> Add Products</h2>
            <!--<div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>-->
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="products_subpage.php">
           <!-- <form action="<?php //echo $_SERVER['PHP_SELF'];       ?>" method="post" class="form-horizontal"  enctype="multipart/form-data" name="my_document">-->
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

                    <!--  <div class="control-group">
                          <label class="control-label" for="focusedInput">Category Name</label>
                          <div class="controls">
                    <?php
                    // $sql = "SELECT cat_name FROM tbl_category ORDER BY cat_id_pk asc";
                    // $result = mysql_query($sql);
                    ?>
  
                              <select class="input3" name="menuname" id="selectError" data-rel="chosen">
  
                                  <option>--Select--</option>
                    <?php
                    //   $sql = "SELECT cat_name FROM tbl_category ORDER BY cat_id_pk asc";
                    //     $result = mysql_query($sql);
                    // while ($data = mysql_fetch_array($result)) {
                    // $displayData = $data['cat_name'];
                    // echo $displayData;
                    ?>
                                      //<option value="<?php //echo $displayData;      ?>" selected="selected"><?php //echo $displayData;      ?></option>
  
                    <?php //}  ?>
                              </select>
                          </div>
                      </div> --> 





                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Product Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="prod_name" id="focusedInput" type="text" value="Enter Product Name">
                        </div>
                    </div> 

                    <div class="control-group">
                        <label class="control-label" for="textarea2">Product overview</label>
                        <div class="controls">
                            <textarea class="cleditor" name="prod_overview" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Product ThumbImage</label>
                        <div class="controls">
                            <input type="file" name="file">
                        </div>
                    </div>

                    <!-- <div class="control-group">
                         <label class="control-label" for="focusedInput">Product Price</label>
                         <div class="controls">
                             <input class="input-xlarge focused" name="prod_org_price" id="focusedInput" type="text" >
                         </div>
                     </div> 
 
                     <div class="control-group">
                         <label class="control-label" for="focusedInput">Project Kit Price</label>
                         <div class="controls">
                             <input class="input-xlarge focused" name="prod_org_price" id="focusedInput" type="text" >
                         </div>
                     </div>
 
                     <div class="control-group">
                         <label class="control-label" for="focusedInput">Do it yourself Kit Price</label>
                         <div class="controls">
                             <input class="input-xlarge focused" name="prod_org_price" id="focusedInput" type="text" >
                         </div>
                     </div>
 
                     <div class="control-group">
                         <label class="control-label" for="focusedInput">Readymade Kit Price</label>
                         <div class="controls">
                             <input class="input-xlarge focused" name="prod_org_price" id="focusedInput" type="text" >
                         </div>
                     </div> -->




                    <!-- <div class="control-group">
                         <label class="control-label">Product Deal</label>
                         <div class="controls">
                             <label class="radio">
                                 <input type="radio" name="active" id="optionsRadios1" value="active" checked="">
                                 No Deal
                             </label>
                             <div style="clear:both"></div>
                             <label class="radio">
                                 <input type="radio" name="active" id="optionsRadios2" value="inactive">
                                 Deal
                             </label>
                         </div>
                     </div>-->

                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Model Number</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="model_no" id="focusedInput" type="text" >
                        </div>
                    </div> 	

                    <div class="control-group">
                        <label class="control-label">Product Image1</label>
                        <div class="controls">
                            <input type="file" name="file1">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Product Image2</label>
                        <div class="controls">
                            <input type="file" name="file2">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Product Image3</label>
                        <div class="controls">
                            <input type="file" name="file3">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Download</label>
                        <div class="controls">
                            <input type="file" name="file4">
                        </div>
                    </div>



                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Video Link</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="prod_videolink" id="focusedInput" type="text" >
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="textarea2">Video Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="project_abstract" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="textarea2">Product Abstract</label>
                        <div class="controls">
                            <textarea class="cleditor" name="project_abstract" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Product BlockDiagram</label>
                        <div class="controls">
                            <input type="file" name="file5">
                        </div>
                    </div>
                    <!--this is table-->
                    <br/><br/><div class="row-fluid sortable">	
                        <div class="box span12">
                            <div class="box-header well" data-original-title>
                                <h2>Select Type</h2>
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
                                            <th></th>
                                            <th>Ready Made Kit</th>
                                            <th>Do It Yourself</th> 
                                            <th>Project Kit</th>

                                        </tr>
                                    </thead>   
                                    <tbody>
                                        <tr>
                                            <th>Select</th>
                                            <td class="center"><input type="checkbox" id="inlineCheckbox1" value="option1"></td>
                                            <td><input type="checkbox" id="inlineCheckbox1" value="option2"></td>
                                            <td><input type="checkbox" id="inlineCheckbox1" value="option3"></td>

                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td><span class="add-on"></span><input id="appendedPrependedInput" size="16" type="text"><span class="add-on">.00</span></td>
                                            <td><span class="add-on"></span><input id="appendedPrependedInput" size="16" type="text"><span class="add-on">.00</span></td>
                                            <td><span class="add-on"></span><input id="appendedPrependedInput" size="16" type="text"><span class="add-on">.00</span></td>                                     
                                        </tr>

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

                    <br/><br/><div class="row-fluid sortable">	
                        <div class="box span12">
                            <div class="box-header well" data-original-title>
                                <h2>Kit Content</h2>
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
                                            <th>Kit Content</th>
                                            <th>Ready Made Kit</th>
                                            <th>Do It Yourself</th> 
                                            <th>Project Kit</th>
                                            <th>Acton</th>
                                        </tr>
                                    </thead>   
                                    <tbody>
                                        <tr>
                                    <td><input class="input-xlarge focused" id="focusedInput" type="text"></td>
                                    <td><input type="checkbox" id="inlineCheckbox1" value="option1"></td>
                                    <td><input type="checkbox" id="inlineCheckbox1" value="option2"></td>
                                    <td><input type="checkbox" id="inlineCheckbox1" value="option3"></td>
                                    <td><a class="btn btn-info" href="edit_product.php">
                                            <i class="icon-edit icon-white"></i>  
                                            Add                                            
                                        </a></td>
                                    </tr>
                                    <tr>
                                        <th>Assembled Kit</th>
                                        <td><input type="checkbox" id="inlineCheckbox1" value="option1" checked></td>
                                        <td><input type="checkbox" id="inlineCheckbox1" value="option2"></td>
                                        <td><input type="checkbox" id="inlineCheckbox1" value="option3" checked></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Plain PCB</th>
                                        <td><input type="checkbox" id="inlineCheckbox1" value="option1" ></td>
                                        <td><input type="checkbox" id="inlineCheckbox1" value="option2" checked></td>
                                        <td><input type="checkbox" id="inlineCheckbox1" value="option3" checked></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Solderable Components</th>
                                        <td><input type="checkbox" id="inlineCheckbox1" value="option1" ></td>
                                        <td><input type="checkbox" id="inlineCheckbox1" value="option2" checked></td>
                                        <td><input type="checkbox" id="inlineCheckbox1" value="option3" checked></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Detachable Components</th>
                                        <td><input type="checkbox" id="inlineCheckbox1" value="option1" checked></td>
                                        <td><input type="checkbox" id="inlineCheckbox1" value="option2"></td>
                                        <td><input type="checkbox" id="inlineCheckbox1" value="option3" checked></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Micro Controller</th>
                                        <td><input type="checkbox" id="inlineCheckbox1" value="option1" checked></td>
                                        <td><input type="checkbox" id="inlineCheckbox1" value="option2" checked></td>
                                        <td><input type="checkbox" id="inlineCheckbox1" value="option3"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Assembled Kit</th>
                                        <td><input type="checkbox" id="inlineCheckbox1" value="option1" checked></td>
                                        <td><input type="checkbox" id="inlineCheckbox1" value="option2"></td>
                                        <td><input type="checkbox" id="inlineCheckbox1" value="option3" checked></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Ready Made Project</th>
                                        <td><input type="checkbox" id="inlineCheckbox1" value="option1" checked></td>
                                        <td><input type="checkbox" id="inlineCheckbox1" value="option2" checked></td>
                                        <td><input type="checkbox" id="inlineCheckbox1" value="option3"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Abstract, Circuit Diagram</th>
                                        <td><input type="checkbox" id="inlineCheckbox1" value="option1" checked></td>
                                        <td><input type="checkbox" id="inlineCheckbox1" value="option2" checked></td>
                                        <td><input type="checkbox" id="inlineCheckbox1" value="option3" checked></td>
                                        <td></td>
                                    </tr>
                                    
                                    
                                    


<!-- <tr>
<th>ADDED ITEMS</th>
<td></td>
<td></td>
<td></td>
 </tr>
<tr>
    <th>Assembled Kit</th>
    <td class="center"><input type="checkbox" id="inlineCheckbox1" value="option1"></td>
    <td><input type="checkbox" id="inlineCheckbox1" value="option2"></td>
    <td><input type="checkbox" id="inlineCheckbox1" value="option3"></td>

</tr>-->

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



                    <div class="form-actions">
                        <button type="submit" name="add" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>  						

        </div>
    </div><!--/span-->

</div><!--/row-->


<?php /* if (isset($_POST['add'])) {
  //======================generic upload of file=======================//

  $allowedExts = array("gif", "jpeg", "jpg", "png");
  $temp = explode(".", $_FILES["file"]["name"]);
  $extension = end($temp);
  if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "image/x-png") || ($_FILES["file"]["type"] == "image/png")) && ($_FILES["file"]["size"] < 200000) && in_array($extension, $allowedExts)) {
  if ($_FILES["file"]["error"] > 0) {
  echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
  } else {
  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
  echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

  if (file_exists("upload/" . $_FILES["file"]["name"])) {
  echo $_FILES["file"]["name"] . " already exists. ";
  } else {
  $a = move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
  //if($a){echo "success";}else {echo "upload fail";}
  echo "Stored in: " . "./upload/" . $_FILES["file"]["name"];
  }
  }
  } else {
  echo "Invalid file";
  }

  //-------------------//
  $allowedExts = array("gif", "jpeg", "jpg", "png");
  $temp = explode(".", $_FILES["file1"]["name"]);
  $extension = end($temp);
  if ((($_FILES["file1"]["type"] == "image/gif") || ($_FILES["file1"]["type"] == "image/jpeg") || ($_FILES["file1"]["type"] == "image/jpg") || ($_FILES["file1"]["type"] == "image/pjpeg") || ($_FILES["file1"]["type"] == "image/x-png") || ($_FILES["file1"]["type"] == "image/png")) && ($_FILES["file1"]["size"] < 200000) && in_array($extension, $allowedExts)) {
  if ($_FILES["file1"]["error"] > 0) {
  echo "Return Code: " . $_FILES["file1"]["error"] . "<br>";
  } else {
  echo "Upload: " . $_FILES["file1"]["name"] . "<br>";
  echo "Type: " . $_FILES["file1"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file1"]["size"] / 1024) . " kB<br>";
  echo "Temp file: " . $_FILES["file1"]["tmp_name"] . "<br>";

  if (file_exists("upload/" . $_FILES["file1"]["name"])) {
  echo $_FILES["file1"]["name"] . " already exists. ";
  } else {
  $a = move_uploaded_file($_FILES["file1"]["tmp_name"], "upload/" . $_FILES["file1"]["name"]);
  //if($a){echo "success";}else {echo "upload fail";}
  echo "Stored in: " . "./upload/" . $_FILES["file1"]["name"];
  }
  }
  } else {
  echo "Invalid file";
  }

  //---------------------//


  $allowedExts = array("gif", "jpeg", "jpg", "png");
  $temp = explode(".", $_FILES["file2"]["name"]);
  $extension = end($temp);
  if ((($_FILES["file2"]["type"] == "image/gif") || ($_FILES["file2"]["type"] == "image/jpeg") || ($_FILES["file2"]["type"] == "image/jpg") || ($_FILES["file2"]["type"] == "image/pjpeg") || ($_FILES["file2"]["type"] == "image/x-png") || ($_FILES["file2"]["type"] == "image/png")) && ($_FILES["file2"]["size"] < 200000) && in_array($extension, $allowedExts)) {
  if ($_FILES["file2"]["error"] > 0) {
  echo "Return Code: " . $_FILES["file2"]["error"] . "<br>";
  } else {
  echo "Upload: " . $_FILES["file2"]["name"] . "<br>";
  echo "Type: " . $_FILES["file2"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file2"]["size"] / 1024) . " kB<br>";
  echo "Temp file: " . $_FILES["file2"]["tmp_name"] . "<br>";

  if (file_exists("upload/" . $_FILES["file2"]["name"])) {
  echo $_FILES["file2"]["name"] . " already exists. ";
  } else {
  $a = move_uploaded_file($_FILES["file2"]["tmp_name"], "upload/" . $_FILES["file2"]["name"]);
  //if($a){echo "success";}else {echo "upload fail";}
  echo "Stored in: " . "./upload/" . $_FILES["file2"]["name"];
  }
  }
  } else {
  echo "Invalid file";
  }

  //---------------------//

  $allowedExts = array("gif", "jpeg", "jpg", "png");
  $temp = explode(".", $_FILES["file3"]["name"]);
  $extension = end($temp);
  if ((($_FILES["file3"]["type"] == "image/gif") || ($_FILES["file3"]["type"] == "image/jpeg") || ($_FILES["file3"]["type"] == "image/jpg") || ($_FILES["file3"]["type"] == "image/pjpeg") || ($_FILES["file3"]["type"] == "image/x-png") || ($_FILES["file3"]["type"] == "image/png")) && ($_FILES["file3"]["size"] < 200000) && in_array($extension, $allowedExts)) {
  if ($_FILES["file3"]["error"] > 0) {
  echo "Return Code: " . $_FILES["file3"]["error"] . "<br>";
  } else {
  echo "Upload: " . $_FILES["file3"]["name"] . "<br>";
  echo "Type: " . $_FILES["file3"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file3"]["size"] / 1024) . " kB<br>";
  echo "Temp file: " . $_FILES["file3"]["tmp_name"] . "<br>";

  if (file_exists("upload/" . $_FILES["file3"]["name"])) {
  echo $_FILES["file3"]["name"] . " already exists. ";
  } else {
  $a = move_uploaded_file($_FILES["file3"]["tmp_name"], "upload/" . $_FILES["file3"]["name"]);
  //if($a){echo "success";}else {echo "upload fail";}
  echo "Stored in: " . "./upload/" . $_FILES["file3"]["name"];
  }
  }
  } else {
  echo "Invalid file";
  }

  //---------------------//

  $allowedExts = array("gif", "jpeg", "jpg", "png");
  $temp = explode(".", $_FILES["file4"]["name"]);
  $extension = end($temp);
  if ((($_FILES["file4"]["type"] == "image/gif") || ($_FILES["file4"]["type"] == "image/jpeg") || ($_FILES["file4"]["type"] == "image/jpg") || ($_FILES["file4"]["type"] == "image/pjpeg") || ($_FILES["file4"]["type"] == "image/x-png") || ($_FILES["file4"]["type"] == "image/png")) && ($_FILES["file4"]["size"] < 200000) && in_array($extension, $allowedExts)) {
  if ($_FILES["file4"]["error"] > 0) {
  echo "Return Code: " . $_FILES["file4"]["error"] . "<br>";
  } else {
  echo "Upload: " . $_FILES["file4"]["name"] . "<br>";
  echo "Type: " . $_FILES["file4"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file4"]["size"] / 1024) . " kB<br>";
  echo "Temp file: " . $_FILES["file4"]["tmp_name"] . "<br>";

  if (file_exists("upload/" . $_FILES["file4"]["name"])) {
  echo $_FILES["file4"]["name"] . " already exists. ";
  } else {
  $a = move_uploaded_file($_FILES["file4"]["tmp_name"], "upload/" . $_FILES["file4"]["name"]);
  //if($a){echo "success";}else {echo "upload fail";}
  echo "Stored in: " . "./upload/" . $_FILES["file4"]["name"];
  }
  }
  } else {
  echo "Invalid file";
  }

  //---------------------//
  $allowedExts = array("gif", "jpeg", "jpg", "png");
  $temp = explode(".", $_FILES["file5"]["name"]);
  $extension = end($temp);
  if ((($_FILES["file5"]["type"] == "image/gif") || ($_FILES["file5"]["type"] == "image/jpeg") || ($_FILES["file5"]["type"] == "image/jpg") || ($_FILES["file5"]["type"] == "image/pjpeg") || ($_FILES["file5"]["type"] == "image/x-png") || ($_FILES["file5"]["type"] == "image/png")) && ($_FILES["file5"]["size"] < 200000) && in_array($extension, $allowedExts)) {
  if ($_FILES["file5"]["error"] > 0) {
  echo "Return Code: " . $_FILES["file5"]["error"] . "<br>";
  } else {
  echo "Upload: " . $_FILES["file5"]["name"] . "<br>";
  echo "Type: " . $_FILES["file5"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file5"]["size"] / 1024) . " kB<br>";
  echo "Temp file: " . $_FILES["file5"]["tmp_name"] . "<br>";

  if (file_exists("upload/" . $_FILES["file5"]["name"])) {
  echo $_FILES["file5"]["name"] . " already exists. ";
  } else {
  $a = move_uploaded_file($_FILES["file5"]["tmp_name"], "upload/" . $_FILES["file5"]["name"]);
  //if($a){echo "success";}else {echo "upload fail";}
  echo "Stored in: " . "./upload/" . $_FILES["file5"]["name"];
  }
  }
  } else {
  echo "Invalid file";
  }

  //---------------------//
  $allowedExts = array("gif", "jpeg", "jpg", "png");
  $temp = explode(".", $_FILES["file5"]["name"]);
  $extension = end($temp);
  if ((($_FILES["file6"]["type"] == "image/gif") || ($_FILES["file6"]["type"] == "image/jpeg") || ($_FILES["file6"]["type"] == "image/jpg") || ($_FILES["file6"]["type"] == "image/pjpeg") || ($_FILES["file6"]["type"] == "image/x-png") || ($_FILES["file6"]["type"] == "image/png")) && ($_FILES["file6"]["size"] < 200000) && in_array($extension, $allowedExts)) {
  if ($_FILES["file6"]["error"] > 0) {
  echo "Return Code: " . $_FILES["file5"]["error"] . "<br>";
  } else {
  echo "Upload: " . $_FILES["file6"]["name"] . "<br>";
  echo "Type: " . $_FILES["file6"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file6"]["size"] / 1024) . " kB<br>";
  echo "Temp file: " . $_FILES["file6"]["tmp_name"] . "<br>";

  if (file_exists("upload/" . $_FILES["file6"]["name"])) {
  echo $_FILES["file6"]["name"] . " already exists. ";
  } else {
  $a = move_uploaded_file($_FILES["file6"]["tmp_name"], "upload/" . $_FILES["file6"]["name"]);
  //if($a){echo "success";}else {echo "upload fail";}
  echo "Stored in: " . "./upload/" . $_FILES["file6"]["name"];
  }
  }
  } else {
  echo "Invalid file";
  }

  //========================================//
  if (isset($_POST['active'])) {
  //echo $_POST['active'];
  $active = $_POST['active'];
  if ($active == 'active') {
  $activeval = 0;
  //echo ($activeval);
  } elseif ($active == 'inactive') {
  $activeval = 1;
  //echo ($activeval);
  }
  }
  if ($_FILES["file"]["name"] != NULL) {

  $link = "upload/" . $_FILES["file"]["name"];
  } else {
  $link = "--NIL--";
  }

  //---------------//
  if ($_FILES["file1"]["name"] != NULL) {

  $link1 = "upload/" . $_FILES["file1"]["name"];
  } else {
  $link1 = "--NIL--";
  }
  //--------------------------//
  if ($_FILES["file2"]["name"] != NULL) {

  $link2 = "upload/" . $_FILES["file2"]["name"];
  } else {
  $link2 = "--NIL--";
  }
  //--------------------------//
  if ($_FILES["file3"]["name"] != NULL) {

  $link3 = "upload/" . $_FILES["file3"]["name"];
  } else {
  $link3 = "--NIL--";
  }
  //--------------------------//

  if ($_FILES["file4"]["name"] != NULL) {

  $link4 = "upload/" . $_FILES["file4"]["name"];
  } else {
  $link4 = "--NIL--";
  }
  //--------------------------//

  if ($_FILES["file5"]["name"] != NULL) {

  $link5 = "upload/" . $_FILES["file5"]["name"];
  } else {
  $link5 = "--NIL--";
  }
  //--------------------------//


  $testi_by = trim(strip_tags($_POST['prod_name']));
  $testi_matter = trim(strip_tags($_POST['prod_overview']));
  $testi_org_price = trim(strip_tags($_POST['prod_org_price']));
  $testi_model = trim(strip_tags($_POST['model_no']));
  $testi_download = trim(strip_tags($_POST['download_file']));
  $testi_videolink = trim(strip_tags($_POST['prod_videolink']));
  $testi_video_desc = trim(strip_tags($_POST['project_video_desc']));
  $testi_abstract = trim(strip_tags($_POST['project_abstract']));


  $sql2 = "SELECT cat_id_pk FROM tbl_category where cat_name='$_POST[menuname]'";
  $result = mysql_query($sql2);
  while ($data = mysql_fetch_array($result)) {
  $displayData = $data['cat_id_pk'];
  $val = $displayData;
  echo $val;


  $insert = "insert into tbl_product(prod_name,prod_overview,prod_thumbimage,prod_org_price,prod_deal,model_no,prod_image1,prod_image2,prod_image3,prod_image4,cat_id_fk,download_file,prod_videolink,project_video_desc,project_abstract,project_blockdiagram) values('" . $testi_by . "','" . $testi_matter . "','" . $link . "','" . $testi_org_price . "','" . $activeval . "','" . $testi_model . "','" . $link1 . "','" . $link2 . "','" . $link3 . "','" . $link4 . "','" . $val . "','" . $testi_download . "','" . $testi_videolink . "','" . $testi_video_desc . "','" . $testi_abstract . "','" . $link5 . "')";
  $result = mysql_query($insert) or die("Query failed : " . mysql_error());
  echo $result;
  header("Location:view_products.php");
  }
  }
 */ ?>




<?php include('footer.php'); ?>
<?php ob_flush(); ?>