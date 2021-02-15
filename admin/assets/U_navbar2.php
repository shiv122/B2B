<?php 
include 'dbcon.php';

 ?>

<div class="navbar navbar-expand navbar-dark d-flex justify-content-between bd-navbar blue accent-3">
            <div class="relative">
                <a href="#" data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle">
                    <i></i>
                </a>
            </div>
            <!--Top Menu Start -->
<div class="navbar-custom-menu">

    <ul class="nav navbar-nav">

        <!-- Messages-->
        
        <!-- Notifications -->
        
        
        <!-- Right Sidebar Toggle Button -->
        <li>
            
        </li>
        <?php
        //session_start();
 $user=$_SESSION['log_seller'];

$sql="SELECT * FROM seller_buyer WHERE id='$user'";
                                         $result = mysqli_query($conn ,$sql);
                                         if (mysqli_num_rows($result) > 0)
                                            {
                                                $row = mysqli_fetch_assoc($result);
                                                




                                           
 ?>
        <!-- User Account-->

        <li class="dropdown custom-dropdown user user-menu">

            <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false">
               
                <img src="<?php echo $row['image']; ?>" class="user-image" alt="User Image">

               
            </a>


            <div class="dropdown-menu p-4 dropdown-menu-right">
                <div class="row box justify-content-between my-4">
                    <div class="col">
                        <a href="#">
                            <i class="icon-apps purple lighten-2 avatar  r-5"></i>
                            <div class="pt-1">Apps</div>
                        </a>
                    </div>
                    <div class="col"><a href="#">
                        <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>
                        <div class="pt-1">Profile</div>
                    </a></div>
                    <div class="col">
                        <a href="#">
                            <i class="icon-perm_data_setting indigo lighten-2 avatar  r-5"></i>
                            <div class="pt-1">Settings</div>
                        </a>
                    </div>
                </div>
                <div class="row box justify-content-between my-4">
                    <div class="col">
                        <a href="#">
                            <i class="icon-star light-green lighten-1 avatar  r-5"></i>
                            <div class="pt-1">Favourites</div>
                        </a>
                    </div>
                    
                    <div class="col">
                        <a href="#">
                            <i class="icon-perm_data_setting grey darken-3 avatar  r-5"></i>
                            <div class="pt-1">Settings</div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="assets/logout.php?id=<?php echo $row["id"]; ?>">
                            <i  class="s-24 icon-power-off"></i>
                            <div class="pt-1">logout</div>
                        </a>
                    </div>
                </div>
          
                
                        </a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
        </div>
        <?php }?>