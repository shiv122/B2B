 <?php 
include 'dbcon.php';
session_start();

 ?>
 <html>
<head>
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
<body>
<aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
    <section class="sidebar">
    	<?php
    	//session_start();
 $user=$_SESSION['log_seller'];

$sql="SELECT * FROM seller_buyer WHERE username='$user'";
                                         $result = mysqli_query($conn ,$sql);
                                         if (mysqli_num_rows($result) > 0)
                                            {
                                            	$row = mysqli_fetch_assoc($result);
                                            	




                                           
 ?>
        <div class="w-80px mt-3 mb-3 ml-3">
            <img src="assets/img/basic/logo.png" alt="">
        </div>
        <div class="relative">
            <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
               aria-controls="userSettingsCollapse" class="btn-fab btn-fab-sm absolute fab-right-bottom fab-top btn-primary shadow1 ">
                <i class="icon icon-cogs"></i>
            </a>
            <div class="user-panel p-3 light mb-2">
                <div>
                    <div class="float-left image">
                        <img class="user_avatar" src="<?php echo $row['image']; ?>" alt="User Image">
                    </div>
                    <div class="float-left info">

                        <h6 class="font-weight-light mt-2 mb-1"><?php echo $row['name']; ?> </h6>
                        <a href="#"><i class="icon-circle text-primary blink"></i> Online</a>
                    </div>
                </div>
              <div class="clearfix"></div>
                <div class="collapse multi-collapse" id="userSettingsCollapse">
                    <div class="list-group mt-3 shadow">
                        <a href="profile_control.php?id=<?php echo $row["id"]?>&name=profile" class="list-group-item list-group-item-action ">
                            <i class="mr-2 icon-umbrella text-blue" ></i>Profile
                        </a>
                        <a href="#" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-cogs text-yellow"></i>Settings</a>
                        <a href="#" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-security text-purple"></i>Change Password</a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header"><strong>MAIN NAVIGATION</strong></li>
            <li class="treeview"><a href="dashboard.php">
                <i class="icon icon-sailing-boat-water2 purple-text s-18"></i> <span>Dashboard</span> 
            </a>
               
            </li>
            <li class="treeview"><a href="#">
                <i class=" icon-flag5 s-18 indigo-text"></i> <span>Category</span> <i
                    class="icon icon-angle-left s-18 pull-right"></i>
            </a>
                <ul class="treeview-menu">
                    <li><a href="add_catagory.php"><i class="s-20 icon-control_point light-blue-text"></i>&nbsp;&nbsp; Add Category</a>
                    </li>
                     <?php
            $sql1="SELECT * FROM catagory where cat_status=1";
                                         $result = mysqli_query($conn ,$sql1);
                                       $total_cat=  mysqli_num_rows($result);
                                         ?>
                     
                </ul>
            
                  
                
            </li>
            <?php
            $sql1="SELECT * FROM product where (product_status=1) and (seller='$user')";
                                         $result = mysqli_query($conn ,$sql1);
                                       $total_product=  mysqli_num_rows($result);
                                         ?>
            <li class="treeview"><a href="#">
                <i class="icon icon icon-package2 blue-text s-18"></i>
                <i
                    class="icon icon-angle-left s-18 pull-right"></i>
                <span>Products</span>
                
            </a>
                <ul class="treeview-menu">
                    <li><a href="panel-page-products.php"><i class="icon icon-circle-o green-text"></i>All Products <span class="badge r-3 badge-primary pull-right"><?php echo $total_product; ?></span></a>
                    </li>
                    
                    </li>
                    <?php
            $sql2="SELECT * FROM product where (product_status=0) or (product_status=2) and (seller='$user')";
            $b='';
                                         $result1 = mysqli_query($conn ,$sql2);
                                       $total_product1=  mysqli_num_rows($result1);
                                       if ($total_product1 >0) {
                                          $b='blink';
                                       }
                                         ?>
                    
                </ul>
            </li>
             


                    
                </ul>

                 <li class="treeview"><a href="#">
                <i class="icon-shopping-cart s-18 teal-text" ></i> <span>&nbsp;&nbsp;&nbsp;&nbsp;Orders</span> <i
                    class="icon icon-angle-left s-18 pull-right"></i>
            </a>
                <ul class="treeview-menu">
                     <?php
            $sql1="SELECT * FROM orders  ";
                                         $result = mysqli_query($conn ,$sql1);
                                       $total_ord=  mysqli_num_rows($result);
                                         ?>
                    <li><a href="orders.php"><i class="s-20  icon-box6 light-blue-text"></i>&nbsp;&nbsp; Order

<span class="badge badge-primary r-3  pull-right"><?php echo $total_ord; ?>
                    </a>
                    </li>
                <li><a href="orders_cnl.php"><i class="s-20  icon-exclamation-circle red-text"></i>&nbsp;&nbsp; Order Cancel/Return Request
<?php
            $sql12="SELECT * FROM orders where (ord_cancel_st=1) OR (ord_cancel_st=2)";
            $d='';
                                         $result = mysqli_query($conn ,$sql12);
                                       $total_ord1=  mysqli_num_rows($result);
                                       if($total_ord1 >0){
                                        $d='blink';
                                       }
                                         ?>
                                       }
<span class="badge badge-danger r-20 <?php echo $d; ?> pull-right"><?php echo $total_ord1; ?>
                    </a>
                    </li>
            
                    
                   
                     
                
                  
                </ul>



                  <li class="treeview"><a href="#">
                <i style="color: #80ff80" class="icon-users s-18 " ></i> <span>&nbsp;&nbsp;&nbsp;&nbsp;Clints</span> <i
                    class="icon icon-angle-left s-18 pull-right"></i>
            </a>
                <ul class="treeview-menu">
                     <?php
            $sqll1="SELECT * FROM seller_buyer where seller_buyer_status=1  ";
                                         $resultt = mysqli_query($conn ,$sqll1);
                                       $total_se=  mysqli_num_rows($resultt);
                                         ?>
                    <li><a href="seller.php"><i class="s-20  icon-inbox-upload2 light-blue-text"></i>&nbsp;&nbsp; Seller

<span class="badge badge-primary r-3  pull-right"><?php echo "$total_se"; ?></span>
                    </a>
                    </li>
                <li><a href="buyer.php"><i class="s-20  icon-get-pocket yellow-text"></i>&nbsp;&nbsp; Buyer
            <?php
            $sqll11="SELECT * FROM seller_buyer where seller_buyer_status=0  ";
                                         $resultt1 = mysqli_query($conn ,$sqll11);
                                       $total_se1=  mysqli_num_rows($resultt);
                                         ?>
<span class="badge badge-danger r-20  pull-right"><?php echo $total_se1; ?>
                    </a>
                    </li>
                    
                   
                     
                
                  
                </ul>
               
                   
                  
                
            </li>
            </li>
            <li class="treeview no-b"><a href="#">
                <i class="s-24 icon-support deep-orange-text"></i>
                <span> &nbsp; &nbsp;Requested Support</span>
                <span class="badge r-3 badge-success pull-right">20</span>
            </a>
                <ul class="treeview-menu">
                    <li><a href="admin_inbox.php"><i class="icon icon-circle-o"></i>All Messages</a>
                    </li>
                    
                </ul>
            </li>


            <li class="treeview"><a href="invoice.php">
                <i class="icon icon-invoice-1 purple-text s-18"></i> <span>Invoice</span> 
            </a>
               
            </li>
           
       
    </section>
                     <?php
            }

                                        
?>
  
</aside>
</body>
</html>