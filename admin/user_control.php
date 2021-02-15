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
    <div class="sticky">
        <?php include 'assets/U_navbar.php'; ?>
</div>

<div class="page  has-sidebar-left height-full" >
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-database"></i>
                        Users
                    </h4>
                </div>
            </div>
            <div class="row justify-content-between">
                <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                    <li>
                        <a class="nav-link active" id="v-pills-all-tab" data-toggle="pill" href="#v-pills-all"
                           role="tab" aria-controls="v-pills-all"><i class="icon icon-home2"></i>All Users</a>
                    </li>
                    <li>
                        <a class="nav-link" id="v-pills-buyers-tab" data-toggle="pill" href="#v-pills-buyers" role="tab"
                           aria-controls="v-pills-buyers"><i class="icon icon-face"></i> Buyers</a>
                    </li>
                    <li>
                        <a class="nav-link" id="v-pills-sellers-tab" data-toggle="pill" href="#v-pills-sellers" role="tab"
                           aria-controls="v-pills-sellers"><i class="icon  icon-local_shipping"></i> Sellers</a>
                    </li>
                    <li class="float-right">
                        <a class="nav-link"  href="panel-page-users-create.php" ><i class="icon icon-plus-circle"></i> Add New User</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid animatedParent animateOnce">
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="card r-0 shadow">
                            <div class="table-responsive">
                                <form action="profile_control.php" method="POST">
                                    <table id="example2" class="table  table-hover data-tables"
                               data-options='{ "paging": false; "searching":false}' style="margin-bottom: 0px">
                                        <thead>
                                        
                                              <tr>      
                                                </div>
                                            <th>PROFILE </th>
                                            <th>USER NAME</th>
                                            <th>ITEMS</th>
                                            <th>INCOME</th>
                                            <th>PHONE</th>
                                            <th>STATUS</th>
                                            <th>ROLE</th>
                                            <th>ACTION</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                            <?php 
                                        $sql="SELECT username,password,name,item,income,phone,u_status,role,id,image FROM users where  (u_status=0) OR (u_status=2) ";
                                         $result = mysqli_query($conn ,$sql);
                                         if (mysqli_num_rows($result) > 0)
                                            {
                                                $a=1;
                                                while ($row = mysqli_fetch_assoc($result)){ 


                                                    ?>

                                        <tr>
                                            <td>  <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                   <img  style=" border: 1px solid #ddd;
  border-radius: 4px;
  padding: 1px;
  width: 150px;" class="user_avatar" src="<?php echo $row['image']; ?>" alt="User Image">







                                                </div></td>

                                            <td>
                                              

                                                <div>
                                                    <div>
                                                        <strong><?php echo $row['name']; ?></strong>
                                                    </div>
                                                    <small> <?php echo $row['username']; ?></small>
                                                </div>
                                            </td>
                                           

                                            <td><?php echo $row['item']; ?></td>
                                            <td><?php echo $row['income']; ?></td>

                                            <td><?php echo $row['phone']; ?></td>
                                            <td><span class="icon icon-circle s-12  mr-2 text-<?php switch ($row['u_status']) {
                                                case '0':
                                                    echo "warning";
                                                    break;
                                                case '2':
                                                    echo "danger";
                                                    break;
                                                
                                                default:
                                                    # code...
                                                    break;
                                            } {
                                                # code...
                                            } ?>"></span> <?php switch ($row['u_status']) {
                                                case '0':
                                                    echo "PENDING";
                                                    break;
                                                case '2':
                                                    echo "BLOCKED";
                                                    break;
                                                
                                                default:
                                                    # code...
                                                    break;
                                            } {
                                                # code...
                                            } ?></td>
                                            <td><span class="r-3 badge badge-success "><?php 
                                            switch ($row['role']) {
                                                case '0':
                                                    echo "User";
                                                    break;
                                                case '1':
                                                    echo "Administrator";
                                                    break;
                                                
                                                default:
                                                    # code...
                                                    break;
                                            }


                                            ?></span></td>
                                            <td>

<a class=" btn-fab " href="profile_control.php?id=<?php echo $row["id"]; ?>&name=u_block"><i class="s-20 icon-user-times black-text"></i></a> &nbsp; &nbsp;
<a  class=" btn-fab " href="profile_control.php?id=<?php echo $row["id"]; ?>&name=u_allow"><i class="s-20 icon-user-plus green-text"></i></a>
&nbsp; &nbsp;
<a  class=" btn-fab " href="inc/user_del.php?id=<?php echo $row["id"]; ?>&name=u_allow"><i class="s-20 icon-delete_forever red-text"></i></a> 

                                              
                                            </td>
                                        </tr>
                                      
<?php  }} ?>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

               
            </div>
            
        </div>
    </div>
    <!--Add New Message Fab Button-->
    <a href="panel-page-users-create.php" class="btn-fab btn-fab-md fab-right fab-right-bottom-fixed shadow btn-primary"><i
            class="icon-add"></i></a>
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