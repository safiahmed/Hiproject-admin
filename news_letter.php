<?php include('header.php'); ?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="news_letter.php">News Letter</a>
        </li>
    </ul>
</div>
<br/><a href="add_news_letter.php">Add NewsLetter</a>




<br/><br/><div class="row-fluid sortable">	
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2>News Letter</h2>
            <!--<div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>-->
        </div>
        <div class="box-content">
            <table class="table table-bordered table-striped table-condensed">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Topic</th>
                         <th>Description</th>

                        <th>Status</th>                                          
                    </tr>
                </thead>   
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>New Launches Comming Soon </td>
                        <td>New Products For Android and Solar comming Very soon </td>
                        <td class="center">
                            <span class="label label-success">Active</span>

                        </td>                                       
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>New Launches Comming Soon </td>
                        <td>New Products For Networks and Solar comming Very soon </td>
                        <td class="center">
                            <span class="label label-success">Active</span>

                        </td>                                       
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>New Launches Comming Soon </td>
                        <td>New Products For Robotics and Communication comming Very soon </td>
                        <td class="center">
                            <span class="label label-success">Active</span>

                        </td>                                       
                    </tr>
                    
                  
                    
                   
                     

                    
                    

                </tbody>
            </table>  
            <div class="pagination pagination-centered">
                <!--<ul>
                      <li><a href="#">Prev</a></li>
                      <li class="active">
                        <a href="#">1</a>
                      </li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">Next</a></li>
                </ul>-->
            </div>     
        </div>
    </div><!--/span-->
</div><!--/row-->

<?php include('footer.php'); ?>
