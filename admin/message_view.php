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


                                                
                                        $sql="SELECT * from inbox where id='".$_SESSION['msg_view']."'";
                                         $result = mysqli_query($conn ,$sql);
                                         if (mysqli_num_rows($result) > 0)
                                            {
                                                $row = mysqli_fetch_assoc($result);



                                                $sq="SELECT * FROM seller_buyer where id='".$row['from']."' ";
                                                $res = mysqli_query($conn ,$sq);
                                                $row1 = mysqli_fetch_assoc($res);

                                                $ss="UPDATE inbox set view_st='1' where id='".$_SESSION['msg_view']."'";
                                                $res1 = mysqli_query($conn ,$ss);
                                                ?>
        <div class="card b-0 m-2">
                            <div class="card-body">
                                <div data-toggle="collapse" data-target="#message1">
                                    <div class="media">
                                        <img class="d-flex mr-3 height-50" src="<?php echo $row1['image']; ?>"
                                             alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 font-weight-normal"> Sender : <?php echo $row1['name']; ?></h6>
                                            <p ><strong>Subject : <?php echo $row['subject']; ?> </strong></p> 
                                            <small>Sent : <?php echo $row['date_time']; ?></small>
                                            <div class="collapse my-3 show" style=" word-break: break-all;" id="message1">
                                                <div >
                                                    <br>
                                                    <p>Message: </p></div><br>
                                                    <p style="margin-left: 35px">
                                                        <?php echo $row['message']; ?>
                                                    </p>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>

                    <?php }?>
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