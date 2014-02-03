<?php
include('header.php');
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
            <a href="add_city.php">Add city</a>
        </li>
    </ul>
</div>

<a href="service_centers.php">Service Center</a><span class="divider">&nbsp;&nbsp;/&nbsp;&nbsp;</span><a href="add_city.php">Add City</a> 
<br/><div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Add City</h2>
            <!--<div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>-->
        </div>
        <div class="box-content">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" name="my_document" class="form-horizontal"  onSubmit="return Checkfiles(this);">

                <fieldset>
                    <!--<legend>Datepicker, Autocomplete, WYSIWYG</legend>-->
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">State Name</label>
                        <div class="controls">
                            <?php
                            $sql = "SELECT ndstate_name FROM tbl_netdealer_state ORDER BY ndstate_id_pk asc";
                            $result = mysql_query($sql);
                            ?>

                            <select class="input3" name="menuname" id="selectError" data-rel="chosen">

                                <option>--Select--</option>
                                <?php
                                $sql = "SELECT ndstate_name FROM tbl_netdealer_state ORDER BY ndstate_id_pk asc";
                                $result = mysql_query($sql);
                                while ($data = mysql_fetch_array($result)) {
                                    $displayData = $data['ndstate_name'];
                                    echo $displayData;
                                    ?>
                                    <option value="<?php echo $displayData; ?>" selected="selected"><?php echo $displayData; ?></option>

                                <?php } ?>
                            </select>
                        </div>
                    </div> 











                    <div class="control-group">
                        <label class="control-label" for="focusedInput">City Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="focusedInput" name="city_name1" type="text" placeholder="Enter city name..">
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

                    </div>

                    <?php
                    if (isset($_POST['add'])) {


                        //========================================//



                        $testi = $_POST['city_name1'];
                        


                        $sql2 = "SELECT * FROM tbl_netdealer_state where ndstate_name='$_POST[menuname]'";
                        $result = mysql_query($sql2);
                        while ($data = mysql_fetch_array($result)) {
                            $displayData = $data['ndstate_id_pk'];
                            $displayData1 = $data['ndstate_name'];
                            $val = $displayData;
                            $val1 = $displayData1;





                            $insert = "insert into tbl_city(state_id_fk,state_name,city_name) values('" . $val . "','" . $val1 . "','" . $testi . "')";
                            $result = mysql_query($insert) or die("Query failed : " . mysql_error());
                            
                            echo '<script type="text/javascript">' . "\n";
                            echo 'window.location="service_centers.php";';
                            echo '</script>';
                        }
                    }
                    ?>








                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->




<?php include('footer.php'); ?>
