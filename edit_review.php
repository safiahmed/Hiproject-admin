<?php ob_start(); ?>
<?php
include('header.php');
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
            <a href="view_review.php">Review</a><span class="divider">/</span>
        </li>
        <li>
            <a href="edit_review.php">Edit Review</a>
        </li>
    </ul>
</div>

<a href="view_review.php">Review List</a> 
<br/><div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Edit Review</h2>
            <!--<div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>-->
        </div>
        <div class="box-content">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal" enctype="multipart/form-data" name="my_document">
                <fieldset>

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
                        $catgryquery = "SELECT * FROM tbl_review WHERE review_id_pk ='$_GET[id]'";
                    } else {
                        if (isset($_POST['hidcatid'])) {

                            $catgryquery = "SELECT *FROM tbl_review WHERE  review_id_pk = '$_POST[hidcatid]'";
                        }
                    }
                    $queryrs = mysql_query($catgryquery);
                    //echo ($queryrs);
                    $editdata = mysql_fetch_array($queryrs)
                    ?>
                    <?php
                    if (isset($_POST['edit'])) {
                        $update = "UPDATE tbl_review SET name='$_POST[name]',email='$_POST[email]',review_title='$_POST[review_title]',rating='$_POST[rating]',review='$_POST[review]' WHERE review_id_pk='$_POST[hidcatid]'";

                        $result = mysql_query($update) or die("Query failed : " . mysql_error());
                        header("Location:view_review.php");
                    }
                    ?>


                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="name" id="focusedInput" type="text" value="<?php echo $editdata[1]; ?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Email</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="email" id="focusedInput" type="text" value="<?php echo $editdata[2]; ?>">
                        </div>
                    </div>
                    

                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Review Title</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="review_title" id="focusedInput" type="text" value="<?php echo $editdata[3]; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Rating</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="rating" id="focusedInput" type="text" value="<?php echo $editdata[4]; ?>">
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" for="textarea2">Message</label>
                        <div class="controls">
                            <textarea class="cleditor" name="review" id="textarea2" rows="3"><?php echo $editdata[5]; ?></textarea>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" name="edit" class="btn btn-primary">Save</button>


                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->









<?php include('footer.php'); ?>
<?php ob_flush(); ?>
