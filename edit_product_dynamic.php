<?php ob_start(); ?>
<?php include('header.php'); ?>

<?php
include_once("connect.php");

if (isset($_GET['id'])) {
    $_SESSION['ids'] = $_GET['id'];
}
if (isset($_SESSION['ids'])) {
    $_GET['id'] = $_SESSION['ids'];
}
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
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal" enctype="multipart/form-data" name="editcategory">
                <fieldset>

                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Category Name</label>
                        <div class="controls">
<?php
$sql = "SELECT cat_name FROM tbl_category ORDER BY cat_id_pk asc";
$result = mysql_query($sql);
?>

                            <select class="input3" name="menuname" id="selectError" data-rel="chosen">

                                <option>--Select--</option>
                            <?php
                            $sql = "SELECT cat_name FROM tbl_category ORDER BY cat_id_pk asc";
                            $result = mysql_query($sql);
                            while ($data = mysql_fetch_array($result)) {
                                $displayData = $data['cat_name'];
                                echo $displayData;
                                ?>
                                    <option value="<?php echo $displayData; ?>" selected="selected"><?php echo $displayData; ?></option>

                                <?php } ?>
                            </select>
                        </div>
                    </div>  

                    <!---------->
                                <?php
                                if (isset($_GET['id'])) {
                                    ?>
                        <input type="hidden" name="hidcatid" id="hidcatid" value="<?php echo $_GET['id']; ?>">


                        <?php
                        if (isset($_POST['hidcatid'])) {
                            echo $_POST['hidcatid'];
                        }
                    }
                    ?>
<?php
if (isset($_GET['id'])) {
    $catgryquery = "SELECT * FROM tbl_product WHERE prod_id_pk ='$_GET[id]'";
} else {
    if (isset($_POST['hidcatid'])) {

        $catgryquery = "SELECT *FROM tbl_product WHERE  prod_id_pk = '$_POST[hidcatid]'";
    }
}
$queryrs = mysql_query($catgryquery);
//echo ($queryrs);
$editdata = mysql_fetch_array($queryrs)
?>
                    <?php
                    if (isset($_POST['edit'])) {


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


                        $sql2 = "SELECT cat_id_pk FROM tbl_category where cat_name='$_POST[menuname]'";
                        $result = mysql_query($sql2);
                        while ($data = mysql_fetch_array($result)) {
                            $displayData = $data['cat_id_pk'];
                            $val = $displayData;
                            echo $val;







                            $update = "UPDATE tbl_product SET prod_name='$_POST[prod_name]'
							,prod_over_view='$_POST[prod_over_view]'
							,prod_thumbimage='$link'
							,prod_org_price='$_POST[prod_org_price]'
							,prod_deal='$activeval'
							,model_no='$_POST[model_no]'
							,prod_image1='$_POST[$link1]'
							,prod_image2='$_POST[$link2]'
							,prod_image3='$_POST[$link3]'
							,prod_image4='$_POST[$link4]'
							,cat_id_fk='$_POST[$link4]'
							,download_file='$_POST[download_file]'
							,prod_videolink='$_POST[prod_videolink]'
							,project_video_desc='$_POST[project_video_desc]'
							,project_abstract='$val'
							,project_blockdiagram='$_POST[$link5]'
                             WHERE prod_id_pk='$_POST[hidcatid]'";

                            $result = mysql_query($update) or die("Query failed : " . mysql_error());
                            header("Location:view_products.php");
                        }
                    }
                    ?>

                    <!---------->





                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Product Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="prod_name" id="focusedInput" type="text" value="<?php echo $editdata[1]; ?>">
                        </div>
                    </div> 

                    <div class="control-group">
                        <label class="control-label" for="textarea2">Product overview</label>
                        <div class="controls">
                            <textarea class="cleditor" name="prod_over_view" id="textarea2" rows="3"><?php echo $editdata[2]; ?></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Product ThumbImage</label>
                        <div class="controls">
                            <input type="file" name="file">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Product Price</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="prod_org_price" id="focusedInput" type="text" value="<?php echo $editdata[4]; ?>" >
                        </div>
                    </div> 

                    <div class="control-group">
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
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Model Number</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="model_no" id="focusedInput" type="text" value="<?php echo $editdata[6]; ?>"  >
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
                        <label class="control-label">Product Image4</label>
                        <div class="controls">
                            <input type="file" name="file4">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Download</label>
                        <div class="controls">
                            <input type="file" name="download_file" value="<?php echo $editdata[11]; ?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Video Link</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="prod_videolink" id="focusedInput" type="text" value="<?php echo $editdata[12]; ?>" >
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Video Description</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="project_video_desc" id="focusedInput" type="text" value="<?php echo $editdata[13]; ?>" >
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="textarea2">Product Abstract</label>
                        <div class="controls">
                            <textarea class="cleditor" name="project_abstract" id="textarea2" rows="3"><?php echo $editdata[14]; ?></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Product BlockDiagram</label>
                        <div class="controls">
                            <input type="file" name="file5">
                        </div>
                    </div>






                    <div class="form-actions">
                        <button type="submit" name="edit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn">Cancel</button>
                        <a href="offer_section.php" class="btn btn-danger" data-rel="popover" data-content="Add to Present Offer section" >Add</a>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->






                    <?php include('footer.php'); ?>
                    <?php ob_flush(); ?>