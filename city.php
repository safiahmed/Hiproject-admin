
<script>
    $(document).ready(function() {

        $('#city1').change(function() {

            var city = $(this).val();

            $('#temp').load('temp.php', {city: city});
            $("#city3").hide();
        });
    });
</script>

<?php
include_once('connect.php');
//echo "text";
$state = $_POST['state'];
?>
<script type="text/javascript" src='js/jquery1.7.js'></script>
<div id="city">
    <form name="duplicate" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <select id="city1" data-rel="chosen">
            <option>---select--</option>
            <?php
            $sql1 = "select * from tbl_subcategory where cat_id_fk=$state ";
            $result1 = mysql_query($sql1);
            while ($row = mysql_fetch_array($result1)) {
                ?>
                <option value=<?php echo $row['subcat_id_pk']; ?> ><?php echo $row['subcat_name']; ?></option>

            <?php } ?>

        </select>
    </form>
</div>






