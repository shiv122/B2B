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
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row">
                <div class="col">
                    <h4>
                        <i class="icon icon-clipboard-add"></i>
                        Compose
                    </h4>
                </div>
            </div>
            <div class="row ">
                <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" href="admin_inbox.php"><i class="icon icon-list"></i>All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="icon icon-clipboard-add"></i> Compose New Message
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid animatedParent animateOnce">
        <div class="animated fadeInUpShort my-3">
           <div class="row">

               <div class="col-md-3">
                   <ul class="list-group shadow">
                       <li class="list-group-item list-group-item-action">
                           <a href="#"><i class="icon icon-inbox text-blue"></i>Inbox</a></li>
                       <li class="list-group-item list-group-item-action">
                           <i class="icon icon-envelope-o text-yellow"></i>Sent</li>
                       <li class="list-group-item list-group-item-action">
                           <i class="icon icon-file-text-o text-purple"></i>Drafts</li>
                       <li class="list-group-item list-group-item-action">
                           <i class="icon icon-filter text-green"></i>Junk<span class="badge r-3 badge-primary float-right">4</span></li>
                       <li class="list-group-item list-group-item-action">
                           <i class="icon icon icon-trash-o text-red"></i>Trash</li>
                   </ul>
                   <div class="card my-3">
                       <div class="card-header white">
                           <i class="icon-clipboard-edit blue-text"></i>
                           <strong> CONTACTS </strong>
                       </div>
                       <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 300px;"><div class="card-body pt-0 bg-light slimScroll" data-height="300" style="overflow: hidden; width: auto; height: 300px;">
                           <ul class="list-unstyled">
                            <?php 
                                        $sql="SELECT * from seller_buyer ";
                                         $res = mysqli_query($conn ,$sql);
                                         if (mysqli_num_rows($res) > 0)
                                            {
                                                $n=mysqli_num_rows($res);
                                                ?>
<li class="pt-3 pb-3 bg-light sticky">
                                   <strong>Total Clints</strong>
                                   <span class="badge r-3 badge-success float-right"><?php echo $n; ?></span>
                               </li>
</ul>
<ul>
                                                <?php
                                                while ($row = mysqli_fetch_assoc($res)){

                                            
                                             ?>
                               

                               <!-- Single contact -->
                               <li class="my-1">
                                   <div class="card no-b p-3">
                                       <div class="">
                                           <div class="float-right">
                                               
                                           </div>
                                           <div class="image mr-3  float-left">
                                               <img class="w-40px" src="<?php echo $row['image']; ?>" alt="User Image">
                                           </div>
                                           <div>
                                               <div>
                                                   <strong><?php echo $row['name']; ?></strong>
                                               </div>
                                               <small> <?php echo $row['email']; ?></small>
                                           </div>
                                       </div>
                                   </div>
                               </li>
                               <?php
}}
                               ?>

                           </ul>
                       </div><div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.95); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 73.6498px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                      
                    

                   </div>

               </div>
               <div class="col-md-9">
                <?php
$sql1="SELECT * from seller_buyer where id='".$_SESSION['msg_rep']."' ";
$res1 = mysqli_query($conn ,$sql);
$row1 = mysqli_fetch_assoc($res1);
                ?>
                   <div class="card b-0 r-0 shadow">
                       <form action="send_message.php" method="post">
                           <div class="form-group has-icon m-0">
                               <i class="icon-envelope-o"></i>
                               <input class="form-control form-control-lg r-0 b-0" type="text" readonly value="<?php echo $row1['email'] ; ?>" 
                                      name="email" id="email" placeholder="Recipient Email Address">
                           </div>
                           <div class="b-b"></div>
                           <div class="form-group has-icon m-0">
                               <i class="icon-subject"></i>
                               <input class="form-control form-control-lg r-0 b-0" type="text"
                                      name="subject" id="subject" placeholder="Subject">
                           </div>
                           <textarea class="editor" name="msg" placeholder="Write Something..."
                                     rows="17"></textarea>
                           <div class="b-b"></div>
                           
                           <div class="card-footer">

                               <button class="btn btn-primary l-s-1 s-12 text-uppercase">
                                   Send Message
                               </button>
                           </div>

                       </form>
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