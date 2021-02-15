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
<div class="page has-sidebar-left height-full">
<header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row">
                <div class="col">
                    <h4>
                        <i class="icon icon-list"></i>
                        All Messages
                    </h4>
                </div>
            </div>
            <div class="row ">
                <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="icon icon-list"></i>All</a>
                    </li>
                    

                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid relative animatedParent animateOnce p-lg-5">
        <div class="row">
            
            <div class="col-md-12">
                <div class="card no-b my-3 shadow2">
                    
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <form>
                                <table id="example2" class="table  table-hover data-tables"
                               data-options='{ "paging": false; "searching":false}' >

                                    <thead>
                              
                                   <th>Name</th>
                                   <th>Phone</th>
                                   <th>Email</th>
                                   <th>Topic</th>
                                   <th>Message</th>
                                   <th>Action</th>
                                    </thead>
                                    <tbody>
                                         <?php 
                                        $sql="SELECT *
FROM contact";
                                         $result = mysqli_query($conn ,$sql);
                                         if (mysqli_num_rows($result) > 0)
                                            {
                                                $a='';
                                               
                                                while ($row = mysqli_fetch_assoc($result)){ 


                                                    ?>
                                    <tr>

                                      
                                    
                                           <td>
                                                <div style=" white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 200px;">
                                                    <strong><?php echo  $row['name']; ?></strong>
                                                </div>
                                                
                                        </td>
                                        <td><?php echo  $row['phone']; ?> </td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td>
                                           <?php echo $row['topic']; ?>
                                        </td>
                                        <td><?php echo $row['msg']; ?></td>
                                        <td>
                                            <a href="cont.php?id=<?php echo $row["id"]; ?>&name=msg_view&u_name=<?php echo $row['name'];; ?>"
                                               class="btn-fab btn-fab-sm btn-primary shadow text-white"><i  
                                                    class="icon-eye"></i></a> &nbsp;&nbsp;

                                                  
                                                    <a href="cont.php?id=<?php echo $row["id"]; ?>&name=msg_del"
                                               class="btn-fab btn-fab-sm btn-danger shadow text-white "><i
                                                    class="icon-delete"></i></a>
                                        </td>
                                    </tr>
                                   <?php }} ?>
                                    </tbody>
                                </table>
                            </form>
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