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
</div>


</div>
<div class="page has-sidebar-left">
    
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
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Added</th>
                                            <th>Action</th>
                                          
                                        </tr>
                                        </thead>
                                    <tbody>
<?php 
                                        $sql="SELECT * FROM product where (product_status='1') and (seller='".$_SESSION['log_seller']."' ) ";
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
                                            <h6><?php echo $row['pro_name'];  ?></h6>

                                           <?php



$sql2 = "SELECT * FROM catagory WHERE id = '".$row['catagory']."'";



$result2 = $conn->query($sql2);



$row2 = $result2->fetch_assoc();

?>
                                            <small class="text-muted"><?php echo $row2['name']; ?></small>
                                        </td>
                                        <td><i class="icon-rupee"></i>&nbsp;<?php echo $row['price']; ?></td>
                                        <td><span class="badge badge-success"><?php switch ($row['product_status']) {
                                            case '0':
                                                echo "pending";
                                                break;

                                            case '1':
                                                echo "active";
                                                break;
                                            
                                            default:
                                                # code...
                                                break;
                                        } {
                                            # code...
                                        } ?></span></td>
                                        <td>
                                            <span><i class="icon-time-is-money-1"></i> <?php  $date= date_create($row['mod_date']);
                                                    $date1 =date_create( date("Y-m-d")); ; 
                                             $diff=date_diff($date,$date1);
                                            echo $diff->format("%R%a days ego");

                                             ?></span><br>
                                            <span><i class="icon-calendar-check-o"></i>&nbsp;&nbsp;<?php echo $row['mod_date']; ?> </span>
                                        </td>
                                        <td>
                                            <a href="profile_control.php?id=<?php echo $row["id"]; ?>&name=product" class="btn-fab btn-fab-sm btn-primary shadow text-white"><i class="icon-pencil"></i></a> &nbsp; &nbsp;
                                            <a href="profile_control.php?id=<?php echo $row["id"]; ?>&name=del" class="btn-fab btn-fab-sm btn-danger shadow text-white"><i class="icon-delete"></i></a>
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