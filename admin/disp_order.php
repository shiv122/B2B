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
<?php include 'assets/navbar2.php'; ?>
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
    <?php include 'assets/U_navbar2.php'; ?>
</div>
   

</div>
<div class="page has-sidebar-left">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-package"></i>
                        Order
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white">
                    <li>
                        <a class="nav-link active" href="panel-page-products.php"><i class="icon icon-list"></i>Order Control</a>
                    </li>
                   
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
                                    
                                         
                                            <th>Order ID</th>
                                            <th>Customer Name</th>
                                            <th>City</th>
                                            <th>Address</th>
                                            <th>Total</th>
                                            <th>Order Time</th>
                                            <th>Status</th>
                                            <th> Dispatched Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                    <tbody>
<?php 
$query="SELECT * FROM product where seller='".$_SESSION['log_seller']."'  ";
  $rest = mysqli_query($conn ,$query);
    if (mysqli_num_rows($rest) > 0)
                                            {
                                                while ($rowm = mysqli_fetch_assoc($rest)){
                                                   
                                        $sql="SELECT * FROM orders where product_id='".$rowm['id']."' and dispatched=1  ";
                                         $res = mysqli_query($conn ,$sql);
                                         if (mysqli_num_rows($res) > 0)
                                            {
                                                while ($row = mysqli_fetch_assoc($res)){

                                            
                                             ?>
                                    <tr class="">
                                        

                                        
                                        <td class="w-10">
                                            <?php echo $row['order_id']; ?>
                                        </td>
                                        <td>
                                            <h6><?php echo $row['firstname']." ".$row['lastname'];  ?></h6>

                                       
                                        </td>
                                        <td><?php echo $row['shipping_street']; ?></td>
                                        <td><?php echo "Main address: ".$row['shipping_city'].',<br>State:'.$row['shipping_state']; ?>
                                            <br>
                                            <?php echo 'ZIP'.$row['zip']; ?>
                                        </td>
                                        <td>
                                            <i class="icon-rupee"></i>&nbsp;<?php echo $row['total']; ?></td>
                                        </td>
                                        <td>
                                           <i class="icon-clock-o"></i> <?php echo $row['date_added']; ?>
                                        </td>
                                        <td><span class="badge badge-<?php switch ($row['order_status_id']) {
                                            case '0':
                                                echo "warning";
                                                break;
                                            case '1':
                                             echo "success";
                                                break;
                                            case '2':
                                                echo "danger";
                                                break;


                                            
                                            default:
                                                # code...
                                                break;
                                        } ?>">
                                        <?php switch ($row['order_status_id']) {
                                            case '0':
                                                echo "pending";
                                                break;

                                            case '1':
                                                echo "Approved";
                                                break;
                                            case '2':
                                                echo "BLOCKED";
                                                break;
                                            
                                            default:
                                                # code...
                                                break;
                                        } {
                                            # code...
                                        } ?></span></td>
                                        <td>
                                            <span class="badge badge-<?php switch ($row['dispatched']) {
                                            case '0':
                                                echo "warning";
                                                break;
                                            case '1':
                                             echo "success";
                                                break;
                                            case '2':
                                                echo "danger";
                                                break;


                                            
                                            default:
                                                # code...
                                                break;
                                        } ?>">
                                        <?php switch ($row['dispatched']) {
                                            case '0':
                                                echo "Pending";
                                                break;

                                            case '1':
                                                echo "Dispatched";
                                                break;
                                            case '2':
                                                echo "BLOCKED";
                                                break;
                                            
                                            default:
                                                # code...
                                                break;
                                        } {
                                            # code...
                                        } ?></span>
                                        </td>
                                        
                                        <td>
                                            <a href="inc/seller_order_appr.php?id=<?php echo $row["order_id"]; ?>&name=seller" class="btn-fab btn-fab-sm btn-success shadow text-white"><i class="icon-done_all"></i></a> &nbsp; &nbsp;
                                            <a href="inc/seller_order_del.php?id=<?php echo $row["order_id"]; ?>&name=order_rej" class="btn-fab btn-fab-sm btn-danger shadow text-white"><i class="icon-highlight_off"></i></a>&nbsp; &nbsp;
                                            <?php if ($row['dispatched']=='0') {
                                                # code...
                                            ?>
                                            <a href="inc/disp_seller.php?id=<?php echo $row["order_id"]; ?>&name=dispatched" class="btn-fab btn-fab-sm btn-info shadow text-white"><i class="icon-truck"></i></a>
                                        <?php  }?>
                                        </td>
<?php } } }} ?>
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