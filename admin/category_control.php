<?php

include 'dbcon.php';

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Paper</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
    <!-- Js -->
    <!--
    --- Head Part - Use Jquery anywhere at page.
    --- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
    -->
    <script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
</head>
<body class="light">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
<?php include 'assets/navbar.php'; ?>
<!--Sidebar End-->
<div class="has-sidebar-left">
    <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
            <div class="search-bar">
                <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text"
                       placeholder="start typing...">
            </div>
            <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
               aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
        </div>
    </div>
</div>
   <?php include 'assets/U_navbar.php'; ?>

</div>
<div class="page has-sidebar-left">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-package"></i>
                        Category
                    </h4>
                </div>
            </div>
          
        <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white">
                    <li>
                        <a class="nav-link " href="manage_cat.php"><i class="icon icon-list"></i>All Category</a>
                    </li>
                    <li>
                        <a class="nav-link " href="add_catagory.php"><i
                                class="icon icon-plus-circle"></i> Add New Catagory</a>
                    </li>
                    <li>
                        <a class="nav-link active" href="category_control.php"><i class="icon-hourglass-3"></i> &nbsp;&nbsp;&nbsp;&nbsp;Pending catagory</a>
                    </li>
                </ul>
            </div>
    </header>
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="row">
                <div class="col-md-12">
                    <div class="card no-b shadow">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table id="example2" class="table  table-hover data-tables"
                               data-options='{ "paging": false; "searching":false}' style="margin-bottom: 0px" style="margin-bottom: 0px; table-layout: fixed;">
                                    <thead>
                                        
                                              <tr>      
                                    
                                            
                                             <th>IMAGE</th>
                                            <th>NAME</th>
                                            <th>DISCRIPTION</th>
                                           <th>STATUS</th>
                                            <th>ACTION</th>
                                            
                                          
                                        </tr>
                                        </thead>
                                    <tbody>
<?php 
                                        $sql="SELECT* FROM catagory where (cat_status=0) or (cat_status=2) ";
                                         $res = mysqli_query($conn ,$sql);
                                         if (mysqli_num_rows($res) > 0)
                                            {
                                                while ($row = mysqli_fetch_assoc($res)){

                                            
                                             ?>
                                    <tr class="">
                                        <td> <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                   <img style=" border: 1px solid #ddd;
  border-radius: 4px;
  padding: 1px;
  width: 150px;" class="user_avatar" src="<?php echo $row['img']?>" alt="image missing">
</div>

                                        <td  ><h6><?php echo $row['name'];  ?> </h6></td>
                                        <td style="overflow:hidden; white-space:nowrap"><?php echo $row['discription'];  ?></td>
                                        <td> <span class="badge badge-<?php switch ($row['cat_status']) {
                                            case '0':
                                                echo "warning";
                                                break;

                                            case '2':
                                                echo "danger";
                                                break;


                                            
                                            default:
                                                # code...
                                                break;
                                        } {
                                            # code...
                                        } ?>"><?php switch ($row['cat_status']) {
                                            case '0':
                                                echo "PENDING";
                                                break;

                                            case '2':
                                                echo "BOLCKED";
                                                break;
                                            
                                            default:
                                                # code...
                                                break;
                                        } {
                                            # code...
                                        } ?></span></td>
                                        
                                            </td>
                                        <td> <a href="profile_control.php?id=<?php echo $row["id"]; ?>&name=apr_cat" class="btn-fab "><i class="s-24 icon-check-circle-o green-text"></i></a> &nbsp; &nbsp;
                                            <a href="profile_control.php?id=<?php echo $row["id"]; ?>&name=bl_cat" class="btn-fab "><i  class="s-24 icon-block red-text "></i></a> </td>
                                        

                                        
                                       
<?php } } ?>
                                    </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>
<!-- Right Sidebar -->

<!-- /.right-sidebar -->
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="assets/js/app.js"></script>




<!--
--- Footer Part - Use Jquery anywhere at page.
--- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
</body>
</html>