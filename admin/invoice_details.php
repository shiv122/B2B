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
                        <i class="icon-invoice"></i>
                        Invoice
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white">
                    <li>
                        <a class="nav-link active" href="panel-page-products.php"><i class="icon icon-list"></i>All Invoice</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="row">
               <div class="col-sm-12">
        <div class="panel panel-default invoice" id="invoice">
          <div class="panel-body">
            
            <div class="row">
<?php
         $sql="SELECT * FROM orders where order_id='".$_GET['id']."' ";
                                         $res = mysqli_query($conn ,$sql);
                                         if (mysqli_num_rows($res) > 0)
                                            {
                                              $row = mysqli_fetch_assoc($res);

}
                                            
                                             ?>
                <div class="col-sm-6 top-left">
                    
                    <img style="width: 100px;" src="assets/img/team/1.png">
                </div>

                <div class="col-sm-6 top-right ">
                        <h3 class="marginright"><?php echo $row['invoice_prefix'].'#'.$row['invoice_no']; ?></h3>
                        <span class="marginright"><?php echo $row['approved'];?></span>
                </div>

            </div>
            <hr>
            <div class="row">
<?php
         $sql1="SELECT * FROM product where id='".$row['product_id']."' ";
                                         $res1 = mysqli_query($conn ,$sql1);
                                         if (mysqli_num_rows($res1) > 0)
                                            {

                                              $row1 = mysqli_fetch_assoc($res1);

                                               $sql12="SELECT * FROM seller_buyer where id='".$row1['seller']."' ";
                                         $res12 = mysqli_query($conn ,$sql12);
                                          $row12 = mysqli_fetch_assoc($res12);
}
else{
    echo (mysqli_error($conn));
}                                         
                                            
                                             ?>
                <div class="col-md-4 from">
                    <p class="lead marginbottom">TO: <?php echo $row12['name']; ?></p>
                    <p><?php echo $row12['address']; ?></p>
                    
                    <p>Phone: <?php echo $row12['phone']; ?></p>
                    <p>Email: <?php echo $row12['email']; ?></p>
                </div>

                <div class="col-md-4 to">
                  
                     <?php 
                    $sq12="SELECT * FROM seller_buyer where id='".$row['customer_id']."' ";
                                         $re12 = mysqli_query($conn ,$sq12);
                                          $ro12 = mysqli_fetch_assoc($re12); ?>
                    <p class="lead marginbottom">From : <?php echo $ro12['name']; ?></p>
                     <p><?php echo 'Street: '.$row['shipping_street']; ?>
                        <?php echo "<br><br>Main address: ".$row['shipping_city'].',<br><br>State:'.$row['shipping_state']; ?>
                                            <br>
                                            <?php echo '<br>ZIP'.$row['zip']; ?></p>
                    
                    <p>Phone: <?php echo $ro12['phone']; ?></p>
                    <p>Email: <?php echo $ro12['email']; ?></p>
                </div>

                <div class="col-md-4 text-right payment-details">
                    <p class="lead marginbottom payment-info">Payment details</p>
                    <p>Date: 14 April 2014</p>
                    <p>VAT: DK888-777 </p>
                    <p>Total Amount: $1019</p>
                    <p>Account Name: Flatter</p>
                </div>

            </div>

            <div class="row table-row">
                <table class="table table-borderless table-hover ">
                  <thead class="bg-light">
                    <tr>
                      <th class="text-center" style="width:5%">#</th>
                      <th style="width:50%">Item</th>
                      <th class="text-right" style="width:15%">Quantity</th>
                      <th class="text-right" style="width:15%">Unit Price</th>
                      <th class="text-right" style="width:15%">Total Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">1</td>
                      <td><?php echo $row1['pro_name']; ?></td>
                      <td class="text-right"><?php echo $row['product_quantity']; ?></td>
                      <td class="text-right"><?php echo $row1['price']; ?></td>
                      <td class="text-right"><?php echo $row['total']; ?></td>
                    </tr>
                    
                   </tbody>
                </table>

            </div>

            <div class="row">
            <div class="col-md-6 margintop">
                <p class="lead marginbottom">THANK YOU!</p>

                <button class="btn btn-success" id="invoice-print"><i class="fa fa-print"></i> Print Invoice</button>
                <button class="btn btn-danger"><i class="fa fa-envelope-o"></i> Mail Invoice</button>
            </div>
            <div class="col-md-6 text-right pull-right invoice-total">
                      <p>Subtotal : <?php echo $row1['price']; ?></p>
                      <p>Discount (0%) : 0 </p>
                      
                      <p>Total : <?php echo $row['total']; ?> </p>
            </div>
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