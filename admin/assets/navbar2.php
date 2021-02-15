<?php include 'dbcon.php'; ?>
<?php 
session_start();
if (isset($_SESSION['log_seller'])) {
    # code...

 $user=$_SESSION['log_seller'];

$sql="SELECT * FROM seller_buyer WHERE id='$user'";
                                         $result = mysqli_query($conn ,$sql);
                                         
                                                $row = mysqli_fetch_assoc($result);
                                                ?>
<aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
    <section class="sidebar">
        <div class="w-80px mt-3 mb-3 ml-3">
            <img src="assets/img/Umanglogo.png" alt="">
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
                        <h6 class="font-weight-light mt-2 mb-1"><?php echo $row['name']; ?></h6>
                        <a href="#"><i class="icon-circle text-primary blink"></i> Online</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="collapse multi-collapse" id="userSettingsCollapse">
                    <div class="list-group mt-3 shadow">
                        <a href="#" class="list-group-item list-group-item-action ">
                            <i class="mr-2 icon-umbrella text-blue"></i>Profile
                        </a>
                        <a href="assets/logout2.php?id=<?php echo $_SESSION['log_seller']; ?>" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-cogs text-yellow"></i>Logout</a>
                        <a href="#" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-security text-purple"></i>Change Password</a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header"><strong>MAIN NAVIGATION</strong></li>
            <li class="treeview"><a href="dashboard2.php">
                <i class="icon icon-sailing-boat-water2 purple-text s-18"></i> <span>Dashboard</span> 
            </a>
               
            </li>
            
            <li class="treeview"><a href="#">
                <i style="color: #008c99" class="icon icon icon-package2  s-18"></i>
                <span>Products</span>
                <span class="badge r-3 badge-primary pull-right">4</span>
            </a>
                <ul class="treeview-menu">
                    <li><a href="seller_product.php"><i style="color: #691002;" class="icon icon-package"></i>All Products</a>
                    </li>
                    <li><a href="seller_product_add.php"><i style="color: "  class="icon icon-add"></i>Add Product</a>
                    </li>
                    
                </ul>
            </li>
              <li class="treeview"><a href="#">
                <i style="color: #ffd21f" class="icon icon icon-flag5  s-18"></i>
                <span>Category</span>
                <span class="badge r-3 badge-primary pull-right">4</span>
            </a>
                <ul class="treeview-menu">
                    <li><a href="view_seller_category.php"><i style="color: " class="icon icon-circle-o"></i>Category</a>
                    </li>
                    <li><a href="seller_category_add.php"><i style="color: " class="icon icon-add"></i>Add Catagory</a>
                    </li>
                    
                </ul>
            </li>
             <li class="treeview"><a href="#">
                <i style="color: #74f00e" class="icon icon icon-shopping-cart s-18"></i>
                <span>Orders</span>
                <span class="badge r-3 badge-primary pull-right">4</span>
            </a>
                <ul class="treeview-menu">
                    <li><a href="seller_orders.php"><i style="color: " class="icon icon-circle-o"></i>Pending Orders</a>
                    </li>
                    <li><a href="disp_order.php"><i style="color: " class="icon icon-circle-o"></i>Dispatched Order</a>
                    </li>
                    <li><a href="blocked_order.php"><i style="color: " class="icon icon-circle-o"></i>Blocked Order</a>
                    </li>
                    
                </ul>
            </li>

             <li class="treeview"><a href="#">
                <i style="color: #0ee1f0" class="icon icon icon icon-list-alt s-18"></i>
                <span>invoice</span>
                <span class="badge r-3 badge-primary pull-right">4</span>
            </a>
                <ul class="treeview-menu">
                    <li><a href="invoice2.php"><i style="color: " class="icon icon-circle-o"></i>Invoice</a>
                    </li>
                   
                    
                </ul>
            </li>
            
           
        </ul>
    </section>
</aside>
<?php
}
else

 {
      echo("<script>location.href = '../admin/index.php';</script>");
 }
 ?>