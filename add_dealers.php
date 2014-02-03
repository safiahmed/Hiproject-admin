<?php ob_start(); ?>
<?php
include('header.php');
include_once("connect.php");
if (isset($_GET['id'])) {
    $_SESSION['ids'] = $_GET['id'];
}
if (isset($_SESSION['ids'])) {
    $_GET['id'] = $_SESSION['ids'];
    $val2 = $_GET['id'];
}
?>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="service_centers.php">Service Centers</a><span class="divider">/</span>
        </li>
        <li>
            <a href="add_city.php">Add city</a>
        </li>
    </ul>
</div>

<br/><a href="service_centers.php">Service Centers</a>&nbsp;&nbsp;/&nbsp;&nbsp;</span><a href="add_state.php">Add State</a>&nbsp;&nbsp;/&nbsp;&nbsp;</span><a href="add_city.php">Add City</a>
<br/><div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Add Service Center</h2>
            <!--<div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>-->
        </div>
        <div class="box-content">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" name="my_document" class="form-horizontal" >
                <!-- <form class="form-horizontal"> -->
                <fieldset>
                    <!--<legend>Datepicker, Autocomplete, WYSIWYG</legend>--> 

                    <div class="control-group">
                        <label class="control-label" for="selectError">State</label>
                        <div class="controls">
                            <select class="input3" name="menu"  data-rel="chosen" disabled>
                                <?php
                                if (isset($_GET['id'])) {
                                    $_SESSION['ids'] = $_GET['id'];
                                }
                                if (isset($_SESSION['ids'])) {
                                    $_GET['id'] = $_SESSION['ids'];

                                  


                                    $sql1 = "SELECT * FROM tbl_netdealer_state WHERE ndstate_id_pk='$_GET[id]'";
                                    $result1 = mysql_query($sql1);
                                    while ($data1 = mysql_fetch_array($result1)) {
                                        $displayData1 = $data1['ndstate_name'];
                                        $displayData2 = $data1['state_id_pk'];
                                        echo $displayData2;
                                        ?>

                                        <option value="<?php echo $displayData2; ?>" selected="selected"><?php echo $displayData1; ?></option>
                                    <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>








                    <div class="control-group">
                        <label class="control-label" for="selectError">City</label>
                        <div class="controls">
                            <select class="input3" name="menuname" id="selectError" data-rel="chosen">
                                <?php
                                if (isset($_GET['id'])) {
                                    $_SESSION['ids'] = $_GET['id'];
                                }
                                if (isset($_SESSION['ids'])) {
                                    $_GET['id'] = $_SESSION['ids'];
                                    $sql1 = "SELECT city_name FROM tbl_city where state_id_fk='$_GET[id]'";
                                    $result1 = mysql_query($sql1);
                                    while ($data1 = mysql_fetch_array($result1)) {
                                        $displayData1 = $data1['city_name'];
                                        echo $displayData1;
                                        ?>

                                        <option value="<?php echo $displayData1; ?>" selected="selected"><?php echo $displayData1; ?></option>
                                    <?php
                                    }
                                }
                                ?>
                            </select>
                            <?php
                            if (isset($_SESSION['ids'])) {
                                $_GET['id'] = $_SESSION['ids'];
                                $val2 = $_GET['id'];
                            }
                            ?>

                            <input type="hidden" name="test" value="<?php echo $val2; ?>"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Address</label>
                        <div class="controls">
                            <textarea class="cleditor" name="pagecontent" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" name="add" class="btn btn-primary">Add</button>

                    </div>
                    <?php
                    if (isset($_POST['add'])) {
                        $testi_matter = trim(strip_tags($_POST['pagecontent']));
                        $val1 = $_POST['menuname'];

                        if (isset($_POST['test'])) {
                            $val9 = $_POST['test'];
                        }
                        $insert = "insert into tbl_netdealer_city(ndcity_name,ndcity_address,ndstate_id_fk) values('" . $val1 . "','" . $testi_matter . "','" . $val9 . "')";
                        $result = mysql_query($insert) or die("Query failed : " . mysql_error());

                         header("Location:service_centers.php");
                    }
                    ?>

                </fieldset>
            </form> 

        </div>
    </div><!--/span-->

</div><!--/row-->




<?php include('footer.php'); ?>
<?php ob_flush(); ?>