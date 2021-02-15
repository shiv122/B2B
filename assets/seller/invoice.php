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

    <div class="container-fluid relative animatedParent animateOnce p-lg-5">
        <?php
         $sql="SELECT * FROM orders where order_status_id=1 ";
                                         $res = mysqli_query($conn ,$sql);
                                         if (mysqli_num_rows($res) > 0)
                                            {
                                                while ($row = mysqli_fetch_assoc($res)){

                                            
                                             ?>
            <div class="card no-b my-3 shadow indigo lighten-2 text-white" download>
                    <div class="card-body">
                        <small class="float-right">Invoice: <?php echo $row['invoice_prefix'].''.$row['invoice_no']; ?></small>
                        <div class="my-4">
                            <!-- <span class="badge badge-danger badge-pill">URGENT</span> -->
                                <i class="icon-envelope-o ml-2"></i>
                                <i class="icon-download ml-2"></i>

                        </div>
                         <div class="my-3">
                             <small>User Name</small>
                             <h5><?php echo $row['firstname'].' '.$row['lastname']; ?></h5>
                         </div>
                        <div class="my-3">
                            <small>Pruduct Name</small>
                            <?php 
                             $sql1="SELECT * from product where id='".$row['product_id']."' ";
                                         $res1 = mysqli_query($conn ,$sql1);
                                         $row1 = mysqli_fetch_assoc($res1);
                                         ?>
                            <h6><?php echo $row1['pro_name']; ?></h6>
                        </div>
                        <small>DESCRIPTION</small><br>
                       <?php echo $row1['pro_details']; ?>
                        <div class="my-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <strong> <small>INVOICED</small></strong>
                                   <div> <small><?php echo $row['approved']; ?></small></div>
                                </div>
                                <div class="col-md-8">
                                    <strong> <small>AMOUNT</small></strong>
                                  
                                    <div class="text-white s-24 my-3"><?php echo $row['total']; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><?php }} ?> 
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