 <?php 
include 'dbcon.php';
session_start();
if (isset($_SESSION['log_user'])) {
 ?>
 <html>
<head>
    <style type="text/css">



/*Invoice*/
.invoice .top-left {
    font-size:65px;
    color:#3ba0ff;
}

.invoice .top-right {
    text-align:right;
    padding-right:20px;
}

.invoice .table-row {
    margin-left:-15px;
    margin-right:-15px;
    margin-top:25px;
}

.invoice .payment-info {
    font-weight:500;
}

.invoice .table-row .table>thead {
    border-top:1px solid #ddd;
}

.invoice .table-row .table>thead>tr>th {
    border-bottom:none;
}

.invoice .table>tbody>tr>td {
    padding:16px 20px;
}

.invoice .invoice-total {
    margin-right:-10px;
    font-size:16px;
}

.invoice .last-row {
    border-bottom:1px solid #ddd;
}

.invoice-ribbon {
    width:85px;
    height:88px;
    overflow:hidden;
    position:absolute;
    top:-1px;
    right:14px;
}

.ribbon-inner {
    text-align:center;
    -webkit-transform:rotate(45deg);
    -moz-transform:rotate(45deg);
    -ms-transform:rotate(45deg);
    -o-transform:rotate(45deg);
    position:relative;
    padding:7px 0;
    left:-5px;
    top:11px;
    width:120px;
    background-color:#66c591;
    font-size:15px;
    color:#fff;
}
p.lead {
    font-weight: 500;
    color: #000;
    font-size: 17px !important;
    padding-bottom: 10px;
}
div#invoice p {
    font-size: 14px;
    line-height: 1;
}
.invoice-total p {
    font-size: 17px !important;
    color: #000;
    font-weight: 700;
}

.ribbon-inner:before,.ribbon-inner:after {
    content:"";
    position:absolute;
}

.ribbon-inner:before {
    left:0;
}

.ribbon-inner:after {
    right:0;
}

@media(max-width:575px) {
    .invoice .top-left,.invoice .top-right,.invoice .payment-details {
        text-align:center;
    }

    .invoice .from,.invoice .to,.invoice .payment-details {
        float:none;
        width:100%;
        text-align:center;
        margin-bottom:25px;
    }

    .invoice p.lead,.invoice .from p.lead,.invoice .to p.lead,.invoice .payment-details p.lead {
        font-size:22px;

    }

    .invoice .btn {
        margin-top:10px;
    }
}

@media print {
    .invoice {
        width:900px;
        height:800px;
    }
}
</style>
 <link rel="icon" href="assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Umang</title>
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
 $user=$_SESSION['log_user'];

$sql="SELECT * FROM users WHERE username='$user'";
                                         $result = mysqli_query($conn ,$sql);
                                         if (mysqli_num_rows($result) > 0)
                                            {
                                            	$row = mysqli_fetch_assoc($result);
                                            	




                                           
 ?>
        <div class="w-80px mt-3 mb-3 ml-3">
            <img style="width: 50px" src="assets/img/Umanglogo.png" alt="">
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
                     <li><a href="manage_cat.php"><i class="s-20 icon-wrench cyan-text"></i>&nbsp;&nbsp; Category Management <span class="badge r-3 badge-primary pull-right"><?php echo $total_cat; ?> </a>
                    </li>
                    <?php
                    $c='';
            $sql1="SELECT * FROM catagory where (cat_status=0) or(cat_status=2)" ;
                                         $result = mysqli_query($conn ,$sql1);
                                       $total_cat1=  mysqli_num_rows($result);
                                       if ($total_cat1>0) {
                                          $c='blink';
                                       }
                                         ?>
                    <li><a href="category_control.php"><i style="color: #99d6ff" class="s-20 icon-playlist_play "></i>&nbsp;&nbsp; Category Control <span class="badge badge-danger r-20 <?php echo $c; ?> pull-right"><?php echo $total_cat1; ?></span> </a>
                    </li>
                  
                </ul>
            
                  
                
            </li>
            <?php
            $sql1="SELECT * FROM product where product_status=1";
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
                    <li><a href="panel-page-products-create.php"><i class="icon icon-add"></i>Add
                        New </a>
                    </li>
                    <?php
            $sql2="SELECT * FROM product where (product_status=0) or (product_status=2)";
            $b='';
                                         $result1 = mysqli_query($conn ,$sql2);
                                       $total_product1=  mysqli_num_rows($result1);
                                       if ($total_product1 >0) {
                                          $b='blink';
                                       }
                                         ?>
                    <li><a href="manage_product.php"><i class="icon-settings2 amber-text"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product Management <span class="badge badge-danger r-20 <?php echo $b; ?> pull-right"><?php echo $total_product1; ?></span> </a>
                    </li>
                </ul>
            </li>
             <?php
            $sql3="SELECT * FROM users where u_status=1";
                                         $result2 = mysqli_query($conn ,$sql3);
                                       $total_user2=  mysqli_num_rows($result2);
                                         ?>
            <li class="treeview"><a href="#"><i class="icon icon-account_box light-green-text s-18"></i>Users<i
                    class="icon icon-angle-left s-18 pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="panel-page-users.php"><i class="icon icon-circle-o"></i>All Users <span class="badge badge-primary r-3  pull-right"><?php echo $total_user2; ?></a>
                    </li>
                    <li><a href="panel-page-users-create.php"><i class="icon icon-add"></i>Add User</a>
                    </li>
                    <?php
                    $a='';
            $sql3="SELECT * FROM users where (u_status=0) or (u_status=2)";
                                         $result2 = mysqli_query($conn ,$sql3);
                                       $total_user=  mysqli_num_rows($result2);
                                       if ($total_user >0) {
                                        $a='blink';
                                           
                                       }
                                         ?>
                    <li><a href="user_control.php"><i class="icon-universal-access red-text"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User Request <span class="badge badge-danger r-20 <?php echo $a; ?> pull-right"><?php echo $total_user; ?></a>
                        
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
            <li><a href="ord_dispatched.php"><i style="color: #ebba34" class="s-20  icon-truck "></i>&nbsp;&nbsp; Dispatched

<span class="badge badge-primary r-3  pull-right">
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
                <?php
            $sq="SELECT * FROM inbox where (too=0) and (view_st='0') ";
                                         $re = mysqli_query($conn ,$sq);
                                       $to=  mysqli_num_rows($re);
                                         ?>
                <span class="badge r-3 badge-success pull-right"><?php echo $to; ?></span>
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

            <li class="treeview"><a href="product_inq.php">
                <i class="icon icon-question_answer yellow-text s-18"></i> <span>Product Inquiry</span> 
            </a>
               
            </li>
             <li class="treeview"><a href="requested_product.php">
                <i style="color: #c22929" class="icon icon-loupe  s-18"></i> <span>Product Request</span> 
            </a>
               
            </li>
            <li class="treeview"><a href="contact.php">
                <i class="icon icon-contact_mail orange-text s-18"></i> <span>Contact Us</span> 
            </a>
               
            </li>
            <li class="treeview"><a href="#">
                <i style="color: #ffb3ec" class="icon icon-image  s-18"></i> <span>Banner Maganment</span> 
                <i
                    class="icon icon-angle-left s-18 pull-right"></i>
            </a>
            <ul class="treeview-menu">
                    <li><a href="banner.php"><i style="color: #ff9197" class="icon icon-plus-square"></i>Add Banner</a>
                    </li>
                    
                </ul>
                <ul class="treeview-menu">
                    <li><a href="view_banner.php"><i style="color: #3a67fc" class="icon icon-eye"></i>View Banner</a>
                    </li>
                    
                </ul>
               
            </li>
       
    </section>
                     <?php
            }

                                        
?>
  
</aside>
</body>
</html>
<?php
}
else

 {
      echo("<script>location.href = '../admin/index.php';</script>");
 }
 ?>