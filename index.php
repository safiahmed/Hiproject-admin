<?php
include('header.php');
include_once("connect.php");
?>

<script>
    $(document).ready(function() {
        alert(1);
        $('#memberactivity').tinyscrollbar();
    });
</script>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
    </ul>
</div>
<div class="sortable row-fluid">
    <a data-rel="tooltip" title="6 new members." class="well span3 top-block" href="#">
        <?php
        $result = mysql_query("SELECT * FROM tbl_register");
        $num_rows = mysql_num_rows($result);
        ?>
        <span class="icon32 icon-red icon-user"></span>
        <div>Registrants</div>
        <div><?php echo "$num_rows"; ?></div>

        <?
        //php $res = mysql_query("SELECT * FROM tbl_register WHERE date BETWEEN 1/1/13 AND 12/12/14");
        // $num_rows11 = mysql_num_rows($res);
        ?>

<!--  <span class="notification"><?php //echo "$num_rows11";                ?></span> -->
    </a>



    <!--<a data-rel="tooltip" title="4 new pro members." class="well span3 top-block" href="#">
            <span class="icon32 icon-color icon-star-on"></span>
            <div>Total Signups</div>
            <div>228</div>
            <span class="notification green">4</span>
    </a>-->

    <a data-rel="tooltip" title="4 new pro members." class="well span3 top-block" href="#">
        <span class="icon32 icon-color icon-star-on"></span>
        <?php
        $result1 = mysql_query("SELECT * FROM tbl_register where client_status=1");
        $num_rows1 = mysql_num_rows($result1);
        ?>
        <div>Clients</div>
        <div><?php echo "$num_rows1"; ?></div>
        <!--<span class="notification green">14</span>-->
    </a>



    <a data-rel="tooltip" title="$34 new sales." class="well span3 top-block" href="#">
        <span class="icon32 icon-color icon-cart"></span>
        <div>Sales</div>
        <div>$13320</div>
       <!-- <span class="notification yellow">$34</span>-->
    </a>

    <a data-rel="tooltip" title="12 new messages." class="well span3 top-block" href="#">
        <span class="icon32 icon-color icon-envelope-closed"></span>
        <?php
        $result2 = mysql_query("SELECT * FROM tbl_subscribers");
        $num_rows2 = mysql_num_rows($result2);
        ?>
        <div>Subscribers</div>
        <div><?php echo "$num_rows2"; ?></div>
       <!-- <span class="notification red">12</span>-->
    </a>
    <a data-rel="tooltip" title="12 new messages." class="well span3 top-block" href="#">
        <span class="icon32 icon-color  icon-plus-sign"></span>
        <?php
        $result3 = mysql_query("SELECT * FROM tbl_product");
        $num_rows3 = mysql_num_rows($result3);
        ?>
        <div>Products</div>
        <div><?php echo "$num_rows3"; ?></div>
       <!-- <span class="notification red">72</span>-->
    </a>

    <a data-rel="tooltip" title="12 new messages." class="well span3 top-block" href="#">
        <span class="icon32 icon-color  icon-comment"></span>
        <?php
        $result4 = mysql_query("SELECT * FROM tbl_review");
        $num_rows4 = mysql_num_rows($result4);
        ?>
        <div>Reviews</div>
        <div><?php echo "$num_rows4"; ?></div>
        <!--<span class="notification red">12</span>-->
    </a>
    <a data-rel="tooltip" title="12 new messages." class="well span3 top-block" href="#">
        <span class="icon32 icon-color  icon-book"></span>
        <?php
        $result5 = mysql_query("SELECT * FROM tbl_category");
        $num_rows5 = mysql_num_rows($result5);
        ?>
        <div>Category</div>
        <div><?php echo "$num_rows5"; ?></div>
       <!-- <span class="notification red">18</span>-->
    </a>



</div>

<div class="row-fluid">
    <div class="box span123" >
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> Introduction</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <h1>HiProjects</h1>
            <p>Its a live demo of the Admin PAnel. I have created to ease the work I have to do on my projects. </p>
            <p><b>All pages in the menu are functional, take a look at all</b></p>

<!--<p class="center">
        <a href="http://usman.it/free-responsive-admin-template" class="btn btn-large btn-primary"><i class="icon-chevron-left icon-white"></i> Back to article</a> 
        <a href="http://usman.it/free-responsive-admin-template" class="btn btn-large"><i class="icon-download-alt"></i> Download Page</a>
</p>-->
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="box span411">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-list"></i> Daily Stat</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <ul class="dashboard-list">
                <li>
                    <a href="#">
                        <i class="icon-arrow-up"></i>                               
                        <span class="green">92</span>
                        Sales                                   
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-arrow-down"></i>
                        <?php
                        $date = date('d/m/Y');

                        $res = mysql_query("SELECT * FROM tbl_register WHERE date='$date'");
                        $num_rows11 = mysql_num_rows($res);
                        ?>
                        <span class="red"><?php echo $num_rows11; ?></span>
                        New Registrations
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-minus"></i>
                        <?php
                        $res1 = mysql_query("SELECT * FROM tbl_order WHERE order_date='$date'");
                        $num_rows21 = mysql_num_rows($res1);
                        ?>
                        <span class="blue"><?php echo $num_rows21; ?></span>
                        Pending Orders                                    
                    </a>
                </li>


            </ul>
        </div>
    </div><!--/span-->
</div>

<div class="row-fluid sortable">
    <div class="box span4">
        <div class="box-header well">
            <h2><i class="icon-th"></i> Help</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#info">Registrants</a></li>
                <li><a href="#custom">Products</a></li>
                <li><a href="#messages">Service Center</a></li>
            </ul>

            <div id="myTabContent" class="tab-content">
                <div class="tab-pane active" id="info">
                    <h3>Registrants <small></small></h3>
                    <p>Can see full details about registrant along with their group members.</p>
                    <h3>Clients <small></small></h3>
                    <p>Can see full details about client along with their orders and other details.</p>
                    <h3>Feedback <small></small></h3>
                    <p>Can see feedback given by clients or registrants selected feedback can be moved to testimonial.</p>
                </div>
                <div class="tab-pane" id="custom">
                    <h3><small>View Products</small></h3>
                    <p>Displaying all Products with View, Edit and Delete options.</p>
                    <h3> <small>Add Products</small></h3>
                    <p>Adding Products with full details </p>
                    <h3> <small>Add Homepage Products</small></h3>
                    <p>Selecting Products, only Selected products are going to be displayed in Home page.</p>
                </div>
                <div class="tab-pane" id="messages">
                    <h3>Service center <small></small></h3>
                    <p>Can add state, city. </p>
                    <p>Adding dealers for particular state and particular city. </p>
                    <p>View all details of service centers of selected state and selecte city.</p>
                    <h3>Subscribers <small></small></h3>
                    <p>Can see all the details of Subscribers. </p>
                </div>
            </div>
        </div>
    </div><!--/span-->

    <div class="box span44" id="memberactivity">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Member Activity</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div class="box-content">
                <ul class="dashboard-list">

                    <li>
                        <a href="#">
                            <img class="dashboard-avatar" alt="Usman" src="img/download1111.jpg"></a>
                        <strong>Name:</strong> <a href="#">Usman
                        </a><br>
                        <strong>Since:</strong> 17/05/2012<br>
                        <strong>Status:</strong> <span class="label label-success">Approved</span>                                  
                    </li>
                    <li>
                        <a href="#">
                            <img class="dashboard-avatar" alt="Usman" src="img/download1111.jpg"></a>
                        <strong>Name:</strong> <a href="#">Usman
                        </a><br>
                        <strong>Since:</strong> 17/05/2012<br>
                        <strong>Status:</strong> <span class="label label-success">Approved</span>                                  
                    </li>
                    <li>
                        <a href="#">
                            <img class="dashboard-avatar" alt="Sheikh Heera" src="img/download1111.jpg"></a>
                        <strong>Name:</strong> <a href="#">Sheikh Heera
                        </a><br>
                        <strong>Since:</strong> 17/05/2012<br>
                        <strong>Status:</strong> <span class="label label-warning">Pending</span>                                 
                    </li>
                    <li>
                        <a href="#">
                            <img class="dashboard-avatar" alt="Abdullah" src="img/download1111.jpg"></a>
                        <strong>Name:</strong> <a href="#">Abdullah
                        </a><br>
                        <strong>Since:</strong> 25/05/2012<br>
                        <strong>Status:</strong> <span class="label label-important">Banned</span>                                  
                    </li>
                    <li>
                        <a href="#">
                            <img class="dashboard-avatar" alt="Saruar Ahmed" src="img/download1111.jpg"></a>
                        <strong>Name:</strong> <a href="#">Saruar Ahmed
                        </a><br>
                        <strong>Since:</strong> 17/05/2012<br>
                        <strong>Status:</strong> <span class="label label-info">Updates</span>                                  
                    </li>
                </ul>
            </div>
        </div>
    </div><!--/span-->

    <div class="box span4">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-list"></i> Weekly Stat</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <ul class="dashboard-list">
                <li>
                    <a href="#">
                        <i class="icon-arrow-up"></i>                               
                        <span class="green">92</span>
                        Sales                                   
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-arrow-down"></i>
                        <?php $query1 = "select * from tbl_register where date between date_sub(now(),INTERVAL 1 WEEK) and now()"; 
                          $ress= mysql_query($query1);    
                        $ress1= mysql_num_rows($ress);   
                        ?>
                        <span class="red"><?php echo $ress1; ?></span>
                        New Registrations
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-minus"></i>
                        <span class="blue">36</span>
                        New Clients                                    
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-comment"></i>
                        <span class="yellow">45</span>
                        User reviews                                    
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-arrow-up"></i>                               
                        <span class="green">8</span>
                        Categories                                   
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-arrow-down"></i>
                        <span class="red">72</span>
                        Products
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-minus"></i>
                        <span class="blue">93</span>
                        New Subscribers                                    
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-arrow-up"></i>
                        <span class="yellow">254</span>
                        Sub-Categories                                   
                    </a>
                </li>
            </ul>
        </div>
    </div><!--/span-->









</div><!--/row-->

<div class="row-fluid sortable">
    <!--<div class="box span4">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-list"></i> Buttons</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content buttons">
            <p class="btn-group">
                <button class="btn">Left</button>
                <button class="btn">Middle</button>
                <button class="btn">Right</button>
            </p>
            <p>
                <button class="btn btn-small"><i class="icon-star"></i> Icon button</button>
                <button class="btn btn-small btn-primary">Small button</button>
                <button class="btn btn-small btn-danger">Small button</button>
            </p>
            <p>
                <button class="btn btn-small btn-warning">Small button</button>
                <button class="btn btn-small btn-success">Small button</button>
                <button class="btn btn-small btn-info">Small button</button>
            </p>
            <p>
                <button class="btn btn-small btn-inverse">Small button</button>
                <button class="btn btn-large btn-primary btn-round">Round button</button>
                <button class="btn btn-large btn-round"><i class="icon-ok"></i></button>
                <button class="btn btn-primary"><i class="icon-edit icon-white"></i></button>
            </p>
            <p>
                <button class="btn btn-mini">Mini button</button>
                <button class="btn btn-mini btn-primary">Mini button</button>
                <button class="btn btn-mini btn-danger">Mini button</button>
                <button class="btn btn-mini btn-warning">Mini button</button>
            </p>
            <p>
                <button class="btn btn-mini btn-info">Mini button</button>
                <button class="btn btn-mini btn-success">Mini button</button>
                <button class="btn btn-mini btn-inverse">Mini button</button>
            </p>
        </div>
    </div><!--/span-->
    <!-- <div class="box span4">
         <div class="box-header well" data-original-title>
             <h2><i class="icon-ok-sign"></i> To do List</h2>
             <div class="box-icon">
                 <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                 <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                 <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
             </div>
         </div>
         <div class="box-content">
             <ul class="dashboard-list">
                 <div class="control-group">
 
                     <div class="controls">
                         <div class="input-append">
                             <input id="appendedInputButton" size="16" type="text"><button class="btn" type="button">Add</button>
                         </div>
                     </div>
                 </div>
                 <div class="control-group">
 
                     <div class="controls">
                         <ul class="dashboard-list">
                             <li>  <input type="checkbox" id="inlineCheckbox1" value="option1"> Client Meeting</li>
 
 
                             <li> <br/><input type="checkbox" id="inlineCheckbox2" value="option2"> Create an Account</li>
 
 
                             <li> <br/><input type="checkbox" id="inlineCheckbox3" value="option3"> This Will Be Your Next Task</li>
 
                             <li> <br/><input type="checkbox" id="inlineCheckbox3" value="option3"> Find a New Developer</li>
 
                             <li> <br/><input type="checkbox" id="inlineCheckbox3" value="option3"> Post An Article</li>
                         </ul>
                     </div>
                 </div>
 
             </ul>
         </div>
     </div><!--/span-->




    <!--<div class="box span4">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-list"></i> My Reminders</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <ul class="dashboard-list">
                <li>
                    <a href="#">
                        <i class="icon-chevron-right"></i>                               

                        Id and password creation for New users                                   
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-chevron-right"></i>

                        Call for 3 new customers
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-chevron-right"></i>

                        Sending confirmation E-mail                                 
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-chevron-right"></i>

                        Recive Payment from Mr.rtron $350.00                                   
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-chevron-right"></i>

                        Recive Paymennt from Mr.Glenn $250.34                                   
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-chevron-right"></i>                               

                        Payment for Domain                                   
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-chevron-right"></i>

                        Recive Payment from Mr.Norvertron $350.00
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-chevron-right"></i>

                        Check New Subscribers                                    
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-chevron-right"></i>

                        Check new Sub-Categories                                   
                    </a>
                </li>
            </ul>
        </div>
    </div><!--/span-->

    <!-- <div class="box span4">
         <div class="box-header well" data-original-title>
             <h2><i class="icon-list-alt"></i> Realtime Traffic</h2>
             <div class="box-icon">
                 <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                 <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
             </div>
         </div>
         <div class="box-content">
             <div id="realtimechart" style="height:190px;"></div>
             <p class="clearfix">You can update a chart periodically to get a real-time effect by using a timer to insert the new data in the plot and redraw it.</p>
             <p>Time between updates: <input id="updateInterval" type="text" value="" style="text-align: right; width:5em"> milliseconds</p>
         </div>
     </div><!--/span-->	

</div><!--/row-->




<?php include('footer.php'); ?>
