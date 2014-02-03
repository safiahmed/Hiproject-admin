<?php include('header.php'); ?>

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
        <span class="icon32 icon-red icon-user"></span>
        <div>Registrants</div>
        <div>507</div>
        <span class="notification">16</span>
    </a>



    <!--<a data-rel="tooltip" title="4 new pro members." class="well span3 top-block" href="#">
            <span class="icon32 icon-color icon-star-on"></span>
            <div>Total Signups</div>
            <div>228</div>
            <span class="notification green">4</span>
    </a>-->

    <a data-rel="tooltip" title="4 new pro members." class="well span3 top-block" href="#">
        <span class="icon32 icon-color icon-star-on"></span>
        <div>Clients</div>
        <div>46</div>
        <span class="notification green">14</span>
    </a>



    <a data-rel="tooltip" title="$34 new sales." class="well span3 top-block" href="#">
        <span class="icon32 icon-color icon-cart"></span>
        <div>Sales</div>
        <div>$13320</div>
        <span class="notification yellow">$34</span>
    </a>

    <a data-rel="tooltip" title="12 new messages." class="well span3 top-block" href="#">
        <span class="icon32 icon-color icon-envelope-closed"></span>
        <div>Subscribers</div>
        <div>25</div>
        <span class="notification red">12</span>
    </a>
    <a data-rel="tooltip" title="12 new messages." class="well span3 top-block" href="#">
        <span class="icon32 icon-color  icon-plus-sign"></span>
        <div>Products</div>
        <div>25</div>
        <span class="notification red">72</span>
    </a>

    <a data-rel="tooltip" title="12 new messages." class="well span3 top-block" href="#">
        <span class="icon32 icon-color  icon-comment"></span>
        <div>Reviews</div>
        <div>25</div>
        <span class="notification red">12</span>
    </a>
    <a data-rel="tooltip" title="12 new messages." class="well span3 top-block" href="#">
        <span class="icon32 icon-color  icon-book"></span>
        <div>Category</div>
        <div>8</div>
        <span class="notification red">18</span>
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
                        <span class="red">15</span>
                        New Registrations
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-minus"></i>
                        <span class="blue">36</span>
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
            <h2><i class="icon-th"></i> Tabs</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#info">Info</a></li>
                <li><a href="#custom">Custom</a></li>
                <li><a href="#messages">Messages</a></li>
            </ul>

            <div id="myTabContent" class="tab-content">
                <div class="tab-pane active" id="info">
                    <h3>HiProjects <small>a fully featured Admin Panel</small></h3>
                    <p>Its a fully featured, responsive Admin Panel for your admin panel. Its optimized for tablet and mobile phones. Scan the QR code below to view it in your mobile device.</p> <img alt="QR Code" class="charisma_qr center" src="img/qrcode136.png" />
                </div>
                <div class="tab-pane" id="custom">
                    <h3>Custom <small>small text</small></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.</p>
                </div>
                <div class="tab-pane" id="messages">
                    <h3>Messages <small>small text</small></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor.</p>
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
                            <img class="dashboard-avatar" alt="Usman" src="http://www.gravatar.com/avatar/<?php echo md5(strtolower(trim("usman@halalit.net"))); ?>.png?s=50"></a>
                        <strong>Name:</strong> <a href="#">Usman
                        </a><br>
                        <strong>Since:</strong> 17/05/2012<br>
                        <strong>Status:</strong> <span class="label label-success">Approved</span>                                  
                    </li>
                    <li>
                        <a href="#">
                            <img class="dashboard-avatar" alt="Usman" src="http://www.gravatar.com/avatar/<?php echo md5(strtolower(trim("usman@halalit.net"))); ?>.png?s=50"></a>
                        <strong>Name:</strong> <a href="#">Usman
                        </a><br>
                        <strong>Since:</strong> 17/05/2012<br>
                        <strong>Status:</strong> <span class="label label-success">Approved</span>                                  
                    </li>
                    <li>
                        <a href="#">
                            <img class="dashboard-avatar" alt="Sheikh Heera" src="http://www.gravatar.com/avatar/<?php echo md5(strtolower(trim("heerasheikh@ymail.com"))); ?>.png?s=50"></a>
                        <strong>Name:</strong> <a href="#">Sheikh Heera
                        </a><br>
                        <strong>Since:</strong> 17/05/2012<br>
                        <strong>Status:</strong> <span class="label label-warning">Pending</span>                                 
                    </li>
                    <li>
                        <a href="#">
                            <img class="dashboard-avatar" alt="Abdullah" src="http://www.gravatar.com/avatar/<?php echo md5(strtolower(trim("abdullah123456@abc.com"))); ?>.png?s=50"></a>
                        <strong>Name:</strong> <a href="#">Abdullah
                        </a><br>
                        <strong>Since:</strong> 25/05/2012<br>
                        <strong>Status:</strong> <span class="label label-important">Banned</span>                                  
                    </li>
                    <li>
                        <a href="#">
                            <img class="dashboard-avatar" alt="Saruar Ahmed" src="http://www.gravatar.com/avatar/<?php echo md5(strtolower(trim("saruarall@gmail.com"))); ?>.png?s=50"></a>
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
                        <span class="red">15</span>
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
    <div class="box span4">
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




    <div class="box span4">
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

    <div class="box span4">
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
