<?php ob_start(); ?>
<?php include('header.php');
include_once("connect.php");
?>



<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="service_centers.php">Service Center</a><span class="divider">/</span>
        </li>
        <li>
            <a href="add_state.php">Add State</a>
        </li>
    </ul>
</div>

<a href="service_centers.php">Service Center</a><span class="divider">&nbsp;&nbsp;/&nbsp;&nbsp;</span><a href="add_city.php">Add City</a> 
<br/><div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Add State</h2>
            <!--<div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>-->
        </div>
        <div class="box-content">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" name="my_document" class="form-horizontal" >

                <fieldset>
                    <!--<legend>Datepicker, Autocomplete, WYSIWYG</legend>-->
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">State Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused"  id="focusedInput" name="ndstate_name" type="text" placeholder="Enter state name..">
                        </div>
                    </div>



                    <!--<div class="control-group">
                      <label class="control-label" for="fileInput">File input</label>
                      <div class="controls">
                            <input class="input-file uniform_on" id="fileInput" type="file">
                      </div>
                    </div>-->          


                    <div class="form-actions">
                        <button type="submit" name="add" class="btn btn-primary">Add</button>



                        <?php
                        if (isset($_POST['add'])) {
                            //======================generic upload of file=======================//

                            /* $allowedExts = array("gif", "jpeg", "jpg", "png");
                              $temp = explode(".", $_FILES["file"]["name"]);
                              $extension = end($temp);
                              if ((($_FILES["file"]["type"] == "image/gif")
                              || ($_FILES["file"]["type"] == "image/jpeg")
                              || ($_FILES["file"]["type"] == "image/jpg")
                              || ($_FILES["file"]["type"] == "image/pjpeg")
                              || ($_FILES["file"]["type"] == "image/x-png")
                              || ($_FILES["file"]["type"] == "image/png"))
                              && ($_FILES["file"]["size"] < 200000)
                              && in_array($extension, $allowedExts))
                              {
                              if ($_FILES["file"]["error"] > 0)
                              {
                              echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
                              }
                              else
                              {
                              echo "Upload: " . $_FILES["file"]["name"] . "<br>";
                              echo "Type: " . $_FILES["file"]["type"] . "<br>";
                              echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
                              echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

                              if (file_exists("upload/" . $_FILES["file"]["name"]))
                              {
                              echo $_FILES["file"]["name"] . " already exists. ";
                              }
                              else
                              {
                              $a = move_uploaded_file($_FILES["file"]["tmp_name"],
                              "upload/" . $_FILES["file"]["name"]);
                              //if($a){echo "success";}else {echo "upload fail";}
                              echo "Stored in: " . "./upload/" . $_FILES["file"]["name"];
                              }
                              }
                              }
                              else
                              {
                              echo "Invalid file";
                              }
                             */
                            //========================================//
                          

                            $testi_by = trim(strip_tags($_POST['ndstate_name']));



                            $insert = "insert into tbl_netdealer_state(ndstate_name) values('" . $testi_by . "')";
                            $result = mysql_query($insert) or die("Query failed : " . mysql_error());
                            
                            header("Location:service_centers.php");
                        }
                        ?>







                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->




<?php include('footer.php'); ?>
<?php ob_flush(); ?>