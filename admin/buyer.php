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
                        Buyers
                    </h4>
                </div>
            </div>
            <div class="row justify-content-between">
                <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                    <li>
                        <a class="nav-link " id="v-pills-all-tab" data-toggle="pill" href="#v-pills-all" role="tab" aria-controls="v-pills-all"><i class="icon icon-home2"></i>All Users</a>
                    </li>
                    <li>
                        <a class="nav-link active" href="buyer.php" r=""><i class="icon icon-face"></i> Buyers</a>
                    </li>
                    <li>
                        <a class="nav-link" href="seller.php"><i class="icon  icon-local_shipping"></i> Sellers</a>
                    </li>
                    <li class="float-right">
                        <a class="nav-link" href="panel-page-users-create.php"><i class="icon icon-plus-circle"></i> Add New User</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white">
                 
                </ul>
            </div>
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
                               data-options='{ "paging": false; "searching":false}' style="margin-bottom: 0px">
                                    <thead>
                                        
                                              <tr>      
                                    
                                            </th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Adhar NO</th>
                                            <th>Seller/Buyer</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                          
                                        </tr>
                                        </thead>
                                    <tbody>
<?php 
                                        $sql="SELECT * from seller_buyer where seller_buyer_status=0 ";
                                         $res = mysqli_query($conn ,$sql);
                                         if (mysqli_num_rows($res) > 0)
                                            {
                                                while ($row = mysqli_fetch_assoc($res)){

                                            
                                             ?>
                                    <tr class="">
                                        

                                        
                                        <td class="w-10">
                                            <img style=" border: 1px solid #ddd; border-radius: 4px; padding: 5px; width: 150px;"src="<?php echo $row['image']; ?>" alt="">
                                        </td>
                                        <td>
                                            <h6><?php echo $row['name'];  ?></h6>

                                          
                                           
                                        </td>
                                        <td></i>&nbsp;<?php echo $row['adhar_no']; ?></td>
                                        <td><?php switch ($row['seller_buyer_status']) {
                                            case '1':
                                                echo "Seller";
                                                break;

                                            case '0':
                                                echo "Buyer";
                                                break;
                                            
                                            default:
                                                # code...
                                                break;
                                        } {
                                            # code...
                                        } ?></span></td>
                                        <td>
                                            <span class="badge badge-<?php switch ($row['activation_status']) {
                                                case '0':
                                                    echo "warning";
                                                    break;
                                                case '1':
                                                   echo "success";
                                                    break;
                                                
                                                default:
                                                    # code...
                                                    break;
                                            } ?>"> <?php switch ($row['activation_status']) {
                                                case '0':
                                                    echo "PEDING";
                                                    break;
                                                case '1':
                                                   echo "APPREOVD";
                                                    break;
                                                
                                                default:
                                                    # code...
                                                    break;
                                            } ?></span>
                                        </td>
                                        <td>
                                            <a href="edit_seller.php?id=<?php echo $row["id"]; ?>&name=buyer_edit" class="btn-fab btn-fab-sm btn-primary shadow text-white"><i class="icon-pencil"></i></a> &nbsp; &nbsp;
                                            <a href="profile_control.php?id=<?php echo $row["id"]; ?>&name=buyer_view" class="btn-fab btn-fab-sm btn-warning shadow text-white"><i class="icon-eye"></i></a>&nbsp; &nbsp;
                                            <?php
                                            if ($row['activation_status']==0) { ?>

                                                 <a href="profile_control.php?id=<?php echo $row["id"]; ?>&name=appr_seller" class="btn-fab btn-fab-sm btn-success shadow text-white"><i class="icon-done_all"></i></a>


                                                <?php
                                                # code...
                                            }
                                            ?>
                                        </td>
<?php } } ?>
                                    </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="pt-3" aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
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