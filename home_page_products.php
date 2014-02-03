<?php ob_start(); ?>
<?php
include('header.php');
include_once('connect.php');
?>
<script src="http://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src='js/jquery1.7.js'></script>
<script>
    $(document).ready(function() {

        $('#state').change(function() {

            var state = $(this).val();
            $('#city').load('city.php', {state: state});
            $('#city3').load('temp1.php', {state: state});
        });
    });

    

</script>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="home_page_products.php">Home Page Products </a>
        </li>
    </ul>
</div>

<a href="select_home_page_products.php">Click Here To Select Home Page Products</a>
<br/><div class="row-fluid sortable">




    <div class="box span7">
        <div class="box-header well" data-original-title>
            <h2> Select Categories and Sub-categories</h2>

        </div>

        <div class="box-content">
            <fieldset>
                <div class="control-group">
                    <div id="for-state">
                        <label class="control-label" for="selectError">Select Category</label>
                        <div class="controls">
                            <form name="duplicate" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">

                                <select id="state" data-rel="chosen"  >
                                    <option>---select--</option>
                                    <?php
                                    $sql = "select * from tbl_category ";
                                    $result = mysql_query($sql);
                                    while ($row = mysql_fetch_array($result)) {
                                        $displaydata = $row['cat_name'];
                                        $dispid = $row['cat_id_pk'];
                                        ?>

                                        <option value="<?php echo $dispid; ?>"><?php echo $displaydata; ?></option>
                                    <?php } ?>
                                </select>
                            </form>

                        </div>
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label" for="focusedInput">Sub-Category Name</label>
                    <div class="controls">

                      <div id="city"></div>
                        
                    </div>
                </div>



            </fieldset>				
        </div>							
    </div>			

</div>
<br/><div class="row-fluid sortable">
    
    <div id="city3">
    </div>
    <div id="temp">

    </div>

</div><!--/row-->


<?php ob_flush(); ?>





<?php include('footer.php'); ?>
