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

<!--Sidebar End-->
<div class="has-sidebar-left">
<?php include 'assets/navbar.php'; ?>
    <div class="sticky">
        <?php include 'assets/U_navbar.php'; ?>
    </div>
</div>
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        Dashboard
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white" id="v-pills-tab">
                    <li>
                        <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1">
                            <i class="icon icon-home2"></i>Today</a>
                    </li>
                    
                </ul>
                <a class="btn-fab absolute fab-right-bottom btn-primary" data-toggle="control-sidebar">
                    <i class="icon icon-menu"></i>
                </a>
            </div>
        </div>
    </header>
    <div class="container-fluid relative animatedParent animateOnce">
        <div class="tab-content pb-3" id="v-pills-tabContent">
            <!--Today Tab Start-->
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-1">
                <div class="row my-3">
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-note-list text-light-blue s-48"></span>
                                </div>
                                 <?php
                                 $sql3="SELECT * FROM seller_buyer where activation_status=1";
                                         $result2 = mysqli_query($conn ,$sql3);
                                       $total_user2=  mysqli_num_rows($result2);
                                         ?>
                                <div class="counter-title">Total User</div>
                                <h5 class="sc-counter mt-3"><?php echo $total_user2; ?></h5>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                    <span style="color: red" class="icon icon-mail-envelope-open s-48"></span>
                                </div>
                                <?php
            $sql2="SELECT * FROM product where product_status=1";
            $b='';
                                         $result1 = mysqli_query($conn ,$sql2);
                                       $total_product1=  mysqli_num_rows($result1);
                                       if ($total_product1 >0) {
                                          $b='blink';
                                       }
                                       $date=date("Y-m-d");


                                             $sq3="SELECT * FROM orders WHERE approved >= now() - INTERVAL 1 DAY;";
                                         $resul2 = mysqli_query($conn ,$sq3);
                                       $t_pro=  mysqli_num_rows($resul2);
                                         ?>
                                <div class="counter-title ">Total Products</div>
                                <h5 class="sc-counter mt-3"><?php echo $total_product1; ?></h5>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                    <span style="color: yellow" class="icon icon-stop-watch3 s-48"></span>
                                </div>
                                <div class="counter-title">Todays order</div>
                                <h5 class="sc-counter mt-3"><?php echo $t_pro; ?></h5>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                    <span style="color: green" class="icon icon-inbox-document-text s-48"></span>
                                </div>
                                <div class="counter-title">Pending Orders</div>
                                <?php
                                             $sq3="SELECT * FROM orders WHERE order_status_id=0";
                                         $resul2 = mysqli_query($conn ,$sq3);
                                       $t_pro=  mysqli_num_rows($resul2);
                                       ?>
                                <h5 class="sc-counter mt-3"><?php echo $t_pro; ?></h5>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white p-5 r-5">
                            <div class="card-title">
                                <h5> Sales Overview</h5>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-3">
                                    <div class="my-3 mt-4">
                                        <h5>Sales <span class="red-text">+203.48</span></h5>
                                        <span class="s-24">$2652.07</span>
                                        <p>A short summary of sales report if you want to add here. This could be useful
                                            for quick view.</p>
                                    </div>
                                    <div class="row no-gutters bg-light r-3 p-2 mt-5">
                                        <div class="col-md-6 b-r p-3">
                                                <h5>Net Sales</h5>
                                                <span>$2351.08 </span>
                                        </div>
                                        <div class="col-md-6 p-3">
                                            <div class="">
                                                <h5>Costs <span class="amber-text">+87.4</span></h5>
                                                <span>$900.09</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9" style="height: 350px">
                                    <canvas data-chart="line" data-dataset="[
                                                            [0, 15, 4, 14, 8, 5, 18],
                                                            [1, 7, 21, 4, 12, 5, 10],
                                                
                                                            ]" data-labels="['A', 'B', 'C', 'D', 'E', 'F']"
                                            data-dataset-options="[
                                                            {   label:'Sales',
                                                                fill: true,
                                                                backgroundColor: 'rgba(50,141,255,.2)',
                                                                borderColor: '#328dff',
                                                                pointBorderColor: '#328dff',
                                                                pointBackgroundColor: '#fff',
                                                                pointBorderWidth: 2,
                                                                borderWidth: 1,
                                                                borderJoinStyle: 'miter',
                                                                pointHoverBackgroundColor: '#328dff',
                                                                pointHoverBorderColor: '#328dff',
                                                                pointHoverBorderWidth: 1,
                                                                pointRadius: 3,
                                                                
                                                            },
                                                            {  
                                                                label:'Wordpress',
                                                                fill: false,
                                                                borderDash: [5, 5],
                                                                backgroundColor: 'rgba(87,115,238,.3)',
                                                                borderColor: '#2979ff',
                                                                pointBorderColor: '#2979ff',
                                                                pointBackgroundColor: '#2979ff',
                                                                pointBorderWidth: 2,
                                                
                                                                borderWidth: 1,
                                                                borderJoinStyle: 'miter',
                                                                pointHoverBackgroundColor: '#2979ff',
                                                                pointHoverBorderColor: '#fff',
                                                                pointHoverBorderWidth: 1,
                                                                pointRadius: 3,
                                                                
                                                            }
                                                            ]"
                                            data-options="{
                                                                    maintainAspectRatio: false,
                                                                    legend: {
                                                                        display: true
                                                                    },
                                                        
                                                                    scales: {
                                                                        xAxes: [{
                                                                            display: true,
                                                                            gridLines: {
                                                                                zeroLineColor: '#eee',
                                                                                color: '#eee',
                                                                            
                                                                                borderDash: [5, 5],
                                                                            }
                                                                        }],
                                                                        yAxes: [{
                                                                            display: true,
                                                                            gridLines: {
                                                                                zeroLineColor: '#eee',
                                                                                color: '#eee',
                                                                                borderDash: [5, 5],
                                                                            }
                                                                        }]
                                                        
                                                                    },
                                                                    elements: {
                                                                        line: {
                                                                        
                                                                            tension: 0.4,
                                                                            borderWidth: 1
                                                                        },
                                                                        point: {
                                                                            radius: 2,
                                                                            hitRadius: 10,
                                                                            hoverRadius: 6,
                                                                            borderWidth: 4
                                                                        }
                                                                    }
                                                                }">
                                    </canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-eq-height">
                    <!-- Chat Widget Start -->
                    <div class="col-md-4">
                        <div class="card my-3 no-b r-5">
                            <div class="card-header white no-b">
                                <h6><span class="badge badge-danger r-3 mr-2">5</span>New Chats </h6>
                            </div>
                            <div class="card-body chat-widget  p-3 r-5 slimScroll" data-height="435">
                                <ul class="list-unstyled">
                                    <li class="by-me">
                                        <div class="avatar float-left">
                                            <img src="assets/img/dummy/u1.png" alt="" class="img-responsive">
                                            <span class="avatar-badge has-indicator busy"></span>
                                        </div>
                                        <div class="chat-content">
                                            <!-- In meta area, first include "name" and then "time" -->
                                            <div class="chat-meta">Sent
                                                <span class="float-right">3 hours ago</span>
                                            </div>
                                            Vivamus diam elit diam, consectetur dapibus adipiscing elit.
                                        </div>
                                    </li>
                                    <!-- Chat by other. Use the class "by-other". -->
                                    <li class="by-other">
                                        <!-- Use the class "float-right" in avatar -->
                                        <div class="avatar float-right">
                                            <!-- Online or offline -->
                                            <b class="c-off"></b>
                                            <img src="assets/img/dummy/u4.png" alt="" class="img-responsive">
                                            <span class="avatar-badge has-indicator idle"></span>
                                        </div>
                                        <div class="chat-content">
                                            <!-- In the chat meta, first include "time" then "name" -->
                                            <div class="chat-meta">3 hours ago
                                                <span class="float-right">Received</span>
                                            </div>
                                            Vivamus diam elit diam, consectetur elit.
                                        </div>
                                    </li>
                                    <li class="by-me">
                                        <div class="avatar float-left">
                                            <b class="c-on"></b>
                                            <img src="assets/img/dummy/u5.png" alt="" class="img-responsive">
                                            <span class="avatar-badge has-indicator online"></span>
                                        </div>
                                        <div class="chat-content">
                                            <div class="chat-meta">Seen
                                                <span class="float-right">4 hours ago</span>
                                            </div>
                                            Lorem dolor sit sit amet dolo.
                                        </div>
                                    </li>
                                    <li class="by-other">
                                        <!-- Use the class "float-right" in avatar -->
                                        <div class="avatar float-right">
                                            <b class="c-off"></b>
                                            <img src="assets/img/dummy/u4.png" alt="" class="img-responsive">
                                            <span class="avatar-badge has-indicator online"></span>
                                        </div>
                                        <div class="chat-content">
                                            <!-- In the chat meta, first include "time" then "name" -->
                                            <div class="chat-meta">3 hours ago
                                                <span class="float-right">Undelivered</span>
                                            </div>
                                            Vivamus diam elit diam, consectetur.
                                        </div>
                                    </li>
                                    <li class="by-me">
                                        <div class="avatar float-left">
                                            <b class="c-on"></b>
                                            <img src="assets/img/dummy/u3.png" alt="" class="img-responsive">
                                            <span class="avatar-badge has-indicator bust"></span>
                                        </div>
                                        <div class="chat-content">
                                            <div class="chat-meta">Audio
                                                <span class="float-right">4 hours ago</span>
                                            </div>
                                            Vivamus diam eget, Vivamus consectetur.
                                        </div>
                                    </li>
                                    <li class="by-other">
                                        <!-- Use the class "float-right" in avatar -->
                                        <div class="avatar float-right">
                                            <b class="c-off"></b>
                                            <img src="assets/img/dummy/u2.png" alt="" class="img-responsive">
                                            <span class="avatar-badge has-indicator online"></span>
                                        </div>
                                        <div class="chat-content">
                                            <!-- In the chat meta, first include "time" then "name" -->
                                            <div class="chat-meta">3 hours ago
                                                <span class="float-right">Image</span>
                                            </div>
                                            Duis dolor sit eut purus dolor feugius diam elit diamt.
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer white">
                                <!-- Chat button -->
                                <form>
                                    <div class="input-group">
                                        <input class="form-control s-12 bg-light r-30 mr-3"
                                               placeholder="Type your message..." type="text">
                                        <span class="input-group-btn">
                                                        <button type="submit" class="btn-fab btn-danger p-0 s-14"><i
                                                                class="icon-subdirectory_arrow_left"></i></button>
                                                    </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Followers -->
                    <div class="col-md-3">
                        <div class="card no-b r-5 my-3">
                            <div class="card-body">
                                <h5 class="card-title">New Followers <span class="badge badge-success r-3">30+</span>
                                </h5>
                                <p>There are 30 new followers</p>
                                <div class="avatar-group">
                                    <figure class="avatar">
                                        <img src="assets/img/dummy/u4.png" alt=""></figure>
                                    <figure class="avatar">
                                        <span class="avatar-letter avatar-letter-l circle"></span>
                                    </figure>
                                    <figure class="avatar">
                                        <img src="assets/img/dummy/u5.png" alt=""></figure>
                                    <figure class="avatar">
                                        <img src="assets/img/dummy/u6.png" alt=""></figure>
                                    <figure class="avatar">
                                        <img src="assets/img/dummy/u7.png" alt="">
                                    </figure>
                                    <figure class="avatar">
                                        <span class="avatar-letter avatar-letter-a circle"></span>
                                    </figure>
                                    <figure class="avatar">
                                        <span class="avatar-letter avatar-letter-b circle"></span>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="card no-b r-5 my-3">
                            <div class="bg-primary text-white lighten-2 r-5">
                                <div class="pt-5 pb-0 pl-4 pr-4">
                                    <div class="lightSlider masonry-container" data-item="1" data-item-md="1"
                                         data-item-sm="1" data-auto="true" data-pause="6000" data-pager="false" data-controls="false" data-loop="true">
                                        <div>
                                            <h5 class="font-weight-normal s-14">Followers Increased</h5>
                                            <div class="my-5">
                                                  <span>
                                               Today 30%</span>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="my-5">
                                                  <span>
                                               Yesterday 10%</span>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <canvas width="378" height="140" data-chart="spark" data-chart-type="bar"
                                                data-dataset="[[28,530,200,430,28,530,200,430,28,530,200,430,28,530,200,430,28,530,200,430]]"
                                                data-labels="['a','b','c','d','a','b','c','d','a','b','c','d','a','b','c','d','a','b','c','d']"
                                                data-dataset-options="[
                                                        { borderColor:  'rgba(54, 162, 235, 1)', backgroundColor: 'rgba(54, 162, 235,1)'},
                                                        ]">
                                        </canvas>
                                        </div>
                                        <div>
                                            <h5 class="font-weight-normal s-14">Followers Increased</h5>
                                            <div class="my-5">
                                                  <span>
                                               Today 30%</span>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="my-5">
                                                  <span>
                                               Yesterday 10%</span>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <canvas width="378" height="140" data-chart="spark" data-chart-type="line"
                                                    data-dataset="[[28,530,200,430,28,530,200,430,28,530,200,430,28,530,200,430,28,530,200,430]]"
                                                    data-labels="['a','b','c','d','a','b','c','d','a','b','c','d','a','b','c','d','a','b','c','d']"
                                                    data-dataset-options="[
                                                        { borderColor:  'rgba(54, 162, 235, 1)', backgroundColor: 'rgba(54, 162, 235,1)'},
                                                        ]">
                                            </canvas>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Daily Sale Report-->
                    <div class="col-md-5">
                        <div class="card my-3 no-b ">
                            <div class="card-header white b-0 p-3">
                                <div class="card-handle">
                                    <a data-toggle="collapse" href="#salesCard" aria-expanded="false"
                                       aria-controls="salesCard">
                                        <i class="icon-menu"></i>
                                    </a>
                                </div>
                                <h4 class="card-title">Daily Sale Report</h4>
                                <small class="card-subtitle mb-2 text-muted">Items purchase by users.</small>
                            </div>
                            <div class="collapse show" id="salesCard">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover earning-box">
                                            <thead class="bg-light">
                                            <tr>
                                                <th colspan="2">Client Name</th>
                                                <th>Item Purchased</th>
                                                <th>Price</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="w-10">
                                                    <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                        <img src="assets/img/dummy/u6.png" alt="">
                                                    </a>
                                                </td>
                                                <td>
                                                    <h6>Sara Kamzoon</h6>
                                                    <small class="text-muted">Marketing Manager</small>
                                                </td>
                                                <td>25</td>
                                                <td>$250</td>
                                            </tr>
                                            <tr>
                                                <td class="w-10">
                                                    <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                        <img src="assets/img/dummy/u7.png" alt="">
                                                    </a>
                                                </td>
                                                <td>
                                                    <h6>Sara Kamzoon</h6>
                                                    <small class="text-muted">Marketing Manager</small>
                                                </td>
                                                <td>25</td>
                                                <td>$250</td>
                                            </tr>
                                            <tr>
                                                <td class="w-10">
                                                    <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                        <img src="assets/img/dummy/u9.png" alt="">
                                                    </a>
                                                </td>
                                                <td>
                                                    <h6>Sara Kamzoon</h6>
                                                    <small class="text-muted">Marketing Manager</small>
                                                </td>
                                                <td>25</td>
                                                <td>$250</td>
                                            </tr>
                                            <tr>
                                                <td class="w-10">
                                                    <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                        <img src="assets/img/dummy/u11.png" alt="">
                                                    </a>
                                                </td>
                                                <td>
                                                    <h6>Sara Kamzoon</h6>
                                                    <small class="text-muted">Marketing Manager</small>
                                                </td>
                                                <td>25</td>
                                                <td>$250</td>
                                            </tr>
                                            <tr>
                                                <td class="w-10">
                                                    <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                        <img src="assets/img/dummy/u12.png" alt="">
                                                    </a>
                                                </td>
                                                <td>
                                                    <h6>Sara Kamzoon</h6>
                                                    <small class="text-muted">Marketing Manager</small>
                                                </td>
                                                <td>25</td>
                                                <td>$250</td>
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
            <!--Today Tab End-->
         
            <!--Yesterday Tab Start-->
        </div>
    </div>
</div>
<!-- Right Sidebar -->
<?php include 'assets/aside.php'; ?>
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