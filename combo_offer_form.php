<?php ob_start(); ?>
<?php include('header.php'); ?>
<?php
if (!isset($_SESSION)) {
    session_start();
}
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
            <a href="index.php">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="category_list.php">category</a><span class="divider">/</span>
        </li>
        <li>
            <a href="add_category.php">Add sub-category</a>
        </li>
    </ul>
</div>

<a href="category_list.php">Category List</a> 
<br/><div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Add sub-Category</h2>

        </div>
        <div class="box-content">
            <form action="view_combo_offer.php">
                  <!--<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal" enctype="multipart/form-data" name="my_document">-->
                <fieldset>
                    <!--<legend>Datepicker, Autocomplete, WYSIWYG</legend>-->
                   








                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Product 1</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="subcat_name" id="focusedInput" type="text" value="Product1" disabled>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Product 1</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="subcat_name" id="focusedInput" type="text" value="Product2" disabled>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Actual Price</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="subcat_name" id="focusedInput" type="text" value="13000" disabled>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Enter Offer Price</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="subcat_name" id="focusedInput" type="text">
                        </div>
                    </div>

                    


                    
                    
                    <div class="form-actions">
                        <button type="submit" name="add" class="btn btn-primary">Add</button>

                    </div>
                </fieldset>
            </form>  

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

     */        //========================================//
    if (isset($_POST['active'])) {
        //echo $_POST['active'];
        $active = $_POST['active'];
        if ($active == 'active') {
            $activeval = 1;
            //echo ($activeval);
        } elseif ($active == 'inactive') {
            $activeval = 0;
            //echo ($activeval);
        }
    }



    $testi_by = trim(strip_tags($_POST['subcat_name']));
    $testi_matter = trim(strip_tags($_POST['subcat_desc']));
    $val = trim(strip_tags($_GET['id']));

    $insert = "insert into tbl_subcategory(subcat_name,subcat_desc,cat_id_fk,subcat_status) values('" . $testi_by . "','" . $testi_matter . "','" . $val . "','" . $activeval . "')";
    $result = mysql_query($insert) or die("Query failed : " . mysql_error());
    echo $result;
    header("Location:category_list.php");
}
?>


        </div>
    </div><!--/span-->

</div><!--/row-->




            <?php include('footer.php'); ?>
<?php ob_flush(); ?>
