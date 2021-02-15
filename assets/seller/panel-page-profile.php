<?php 
include 'dbcon.php';

   //session_start();                                        

?>
<?php




//  $sql= "SELECT username,name,item,income,phone,status,role FROM users where username='$_SESSION['log_user']' ";
//                                          $res = mysqli_query($conn ,$sql);
//                                          if (mysqli_num_rows($res) > 0)
//                                          {
// echo $row['name'];


//                                          }
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

<!--Sidebar End-->
<div class="has-sidebar-left">
    <?php include 'assets/navbar.php'; ?>
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
</div>

<div class="page has-sidebar-left">
    <div>
         <?php
    $use=$_SESSION['the_user'];
    //echo $use;
 $sql= "SELECT username,name,item,income,phone,status,role,image,city,address FROM users where id='$use' ";
  $res = mysqli_query($conn ,$sql);
                                         if (mysqli_num_rows($res) > 0)
                                            {
                                                while ($row = mysqli_fetch_assoc($res)){

                                                    ?>
        <header class="blue accent-3 relative">
           
            
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <div class="pb-3">
                            <div class="image mr-3  float-left">
                                <img style="width: 30px;" class="user_avatar no-b no-p" src="<?php echo $row['image']; ?>" alt="User Image">
                            </div>
                            <div>
                                <h6 class="p-t-10"><?php echo $row['name'];?></h6>
                                <?php echo $row['username'];  ?>
                            </div>
                        </div>
                    </div>
                </div>

              <div class="row">
                  <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                      <li>
                          <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home"><i class="icon icon-home2"></i>Home</a>
                      </li>
                      <li>
                          <a class="nav-link" id="v-pills-payments-tab" data-toggle="pill" href="#v-pills-payments" role="tab" aria-controls="v-pills-payments" aria-selected="false"><i class="icon icon-money-1"></i>Payments</a>
                      </li>
                      <li>
                          <a class="nav-link" id="v-pills-timeline-tab" data-toggle="pill" href="#v-pills-timeline" role="tab" aria-controls="v-pills-timeline" aria-selected="false"><i class="icon icon-cog"></i>Timeline</a>
                      </li>
                     
                  </ul>
              </div>

            </div>
        </header>

        <div class="container-fluid animatedParent animateOnce my-3">
            <div class="animated fadeInUpShort">
           <div class="tab-content" id="v-pills-tabContent">
               <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                   <div class="row">
                       <div class="col-md-3">
                           <div class="card ">

                               <ul class="list-group list-group-flush">
                                   <li class="list-group-item"><i class="icon icon-mobile text-primary"></i><strong class="s-12">Phone</strong> <span class="float-right s-12"><?php echo $row['phone']; ?></span></li>
                                   <li class="list-group-item"><i class="icon icon-mail text-success"></i><strong class="s-12">Email</strong> <span class="float-right s-12"><?php echo $row['username']; ?></span></li>
                                   <li class="list-group-item"><i class="icon icon-address-card-o text-warning"></i><strong class="s-12">Address</strong> <span class="float-right s-12"><?php echo $row['city']; ?></span></li>
                                   <li class="list-group-item"><i class="icon icon-web text-danger"></i> <strong class="s-12">Website</strong> <span class="float-right s-12">pappertemplate.com</span></li>
                               </ul>
                           </div>
                           <div class="card mt-3 mb-3">
                               <div class="card-header bg-white">
                                   <strong class="card-title">Guardian</strong>

                               </div>
                               <ul class="no-b">
                                   <li class="list-group-item">
                                       <a href="">
                                           <div class="image mr-3  float-left">
                                               <img class="user_avatar" src="assets/img/dummy/u3.png" alt="User Image">
                                           </div>
                                           <h6 class="p-t-10">Alexander Pierce</h6>
                                           <span><i class="icon-mobile-phone"></i>+92 333470963</span>
                                       </a>
                                   </li>
                               </ul>

                               <div class="card-header bg-white">
                                   <strong class="card-title">Siblings</strong>
                               </div>
                               <div>
                                   <ul class="list-group list-group-flush">
                                       <li class="list-group-item">
                                           <div class="image mr-3  float-left">
                                               <img class="user_avatar" src="assets/img/dummy/u1.png" alt="User Image">
                                           </div>
                                           <h6 class="p-t-10">Alexander Pierce</h6>
                                           <span> 4th Grade</span>
                                       </li>
                                       <li class="list-group-item">
                                           <div class="image mr-3  float-left">
                                               <img class="user_avatar" src="assets/img/dummy/u2.png" alt="User Image">
                                           </div>
                                           <h6 class="p-t-10">Alexander Pierce</h6>
                                           <span> 5th Grade</span>
                                       </li>
                                       <li class="list-group-item">
                                           <div class="image mr-3  float-left">
                                               <img class="user_avatar" src="assets/img/dummy/u5.png" alt="User Image">
                                           </div>
                                           <h6 class="p-t-10">Alexander Pierce</h6>
                                           <span> 6th Grade</span>
                                       </li>
                                       <li class="list-group-item">
                                           <div class="image mr-3  float-left">
                                               <img class="user_avatar" src="assets/img/dummy/u4.png" alt="User Image">
                                           </div>
                                           <h6 class="p-t-10">Alexander Pierce</h6>
                                           <span> 10th Grade</span>
                                       </li>
                                   </ul>
                               </div>

                           </div>

                       </div>
                       <div class="col-md-9">
                        
                           <div class="row">
                               <div class="col-lg-4">
                                   <div class="card r-3">
                                       <div class="p-4">
                                           <div class="float-right">
                                               <span class="icon-award text-light-blue s-48"></span>
                                           </div>
                                           <div class="counter-title">Class Position</div>
                                           <h5 class="sc-counter mt-3">5th</h5>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-lg-4">
                                   <div class="card r-3">
                                       <div class="p-4">
                                           <div class="float-right"><span class="icon-stop-watch3 s-48"></span>
                                           </div>
                                           <div class="counter-title ">Absence</div>
                                           <h5 class="sc-counter mt-3">12</h5>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-lg-4">
                                   <div class="white card">
                                       <div class="p-4">
                                           <div class="float-right"><span class="icon-orders s-48"></span>
                                           </div>
                                           <div class="counter-title">Roll Number</div>
                                           <h5 class="sc-counter mt-3">26</h5>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <div class="row my-3">
                               <!-- bar charts group -->
                               <div class="col-md-12">
                                   <div class="card">
                                       <div class="card-header white">
                                           <h6>Attendance <small>Sessions</small></h6>
                                       </div>
                                       <div class="card-body">
                                           <div id="graphx" style="width:100%; height:300px;" ></div>
                                       </div>
                                   </div>
                               </div>
                               <!-- /bar charts group -->


                           </div>
                           <div class="row">
                               <div class="col-md-12">
                                   <div class="card">
                                       <div class="card-header white">
                                           <h6>New Followers <span class="badge badge-success r-3">30+</span></h6>
                                       </div>
                                       <div class="card-body">

                                           <ul class="list-inline mt-3">
                                               <li class="list-inline-item ">
                                                   <img src="assets/img/dummy/u13.png" alt="" class="img-responsive w-40px circle mb-3">
                                               </li>
                                               <li class="list-inline-item">
                                                   <img src="assets/img/dummy/u12.png" alt="" class="img-responsive w-40px circle mb-3">
                                               </li>
                                               <li class="list-inline-item">
                                                   <img src="assets/img/dummy/u11.png" alt="" class="img-responsive w-40px circle mb-3">
                                               </li>
                                               <li class="list-inline-item">
                                                   <img src="assets/img/dummy/u10.png" alt="" class="img-responsive w-40px circle mb-3">
                                               </li>
                                               <li class="list-inline-item">
                                                   <img src="assets/img/dummy/u9.png" alt="" class="img-responsive w-40px circle mb-3">
                                               </li>
                                               <li class="list-inline-item">
                                                   <img src="assets/img/dummy/u8.png" alt="" class="img-responsive w-40px circle mb-3">
                                               </li>
                                               <li class="list-inline-item ">
                                                   <img src="assets/img/dummy/u7.png" alt="" class="img-responsive w-40px circle mb-3">
                                               </li>
                                               <li class="list-inline-item">
                                                   <img src="assets/img/dummy/u6.png" alt="" class="img-responsive w-40px circle mb-3">
                                               </li>
                                               <li class="list-inline-item">
                                                   <img src="assets/img/dummy/u5.png" alt="" class="img-responsive w-40px circle mb-3">
                                               </li>
                                               <li class="list-inline-item">
                                                   <img src="assets/img/dummy/u4.png" alt="" class="img-responsive w-40px circle mb-3">
                                               </li>
                                               <li class="list-inline-item">
                                                   <img src="assets/img/dummy/u3.png" alt="" class="img-responsive w-40px circle mb-3">
                                               </li>
                                               <li class="list-inline-item">
                                                   <img src="assets/img/dummy/u2.png" alt="" class="img-responsive w-40px circle mb-3">
                                               </li>
                                           </ul>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <?php include 'assets/payment.php'; ?>
               <div class="tab-pane fade" id="v-pills-timeline" role="tabpanel" aria-labelledby="v-pills-timeline-tab">

                   <div class="row">
                       <div class="col-md-12">
                           <!-- The time line -->
                           <ul class="timeline">
                               <!-- timeline time label -->
                               <li class="time-label">
                  <span class="badge badge-danger r-3">
                    10 Feb. 2014
                  </span>
                               </li>
                               <!-- /.timeline-label -->
                               <!-- timeline item -->
                               <li>
                                   <i class="ion icon-envelope bg-primary"></i>
                                   <div class="timeline-item card">
                                       <div class="card-header white"><a href="#">Support Team</a> sent you an email    <span class="time float-right"><i class="ion icon-clock-o"></i> 12:05</span></div>
                                       <div class="card-body">
                                           Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                           weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                           jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                           quora plaxo ideeli hulu weebly balihoo...
                                       </div>
                                       <div class="card-footer">
                                           <a class="btn btn-primary btn-xs">Read more</a>
                                           <a class="btn btn-danger btn-xs">Delete</a>
                                       </div>
                                   </div>
                               </li>
                               <!-- END timeline item -->
                               <!-- timeline item -->
                               <li>
                                   <i class="ion icon-user yellow"></i>

                                   <div class="timeline-item  card">

                                       <div class="card-header white"><h6><a href="#">Sarah Young</a> accepted your friend request<span class="float-right"><i class="ion icon-clock-o"></i> 5 mins ago</span></h6></div>


                                   </div>
                               </li>
                               <!-- END timeline item -->
                               <!-- timeline item -->
                               <li>
                                   <i class="ion icon-comments bg-danger"></i>

                                   <div class="timeline-item  card">


                                       <div class="card-header white"><h6><a href="#">Jay White</a> commented on your post   <span class="float-right"><i class="ion icon-clock-o"></i> 27 mins ago</span></h6></div>

                                       <div class="card-body">
                                           Take me to your leader!
                                           Switzerland is small and neutral!
                                           We are more like Germany, ambitious and misunderstood!
                                       </div>
                                       <div class="card-footer">
                                           <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                                       </div>
                                   </div>
                               </li>
                               <!-- END timeline item -->
                               <!-- timeline time label -->
                               <li class="time-label">
                  <span class="badge badge-success r-3">
                    3 Jan. 2014
                  </span>
                               </li>
                               <!-- /.timeline-label -->
                               <!-- timeline item -->
                               <li>
                                   <i class="ion icon-camera indigo"></i>

                                   <div class="timeline-item  card">

                                       <div class="card-header white"><a href="#">Mina Lee</a> uploaded new photos<span class="time float-right"><i class="ion icon-clock-o"></i> 2 days ago</span></div>


                                       <div class="card-body">
                                           <img src="http://placehold.it/150x100" alt="..." class="margin">
                                           <img src="http://placehold.it/150x100" alt="..." class="margin">
                                           <img src="http://placehold.it/150x100" alt="..." class="margin">
                                           <img src="http://placehold.it/150x100" alt="..." class="margin">
                                       </div>
                                   </div>
                               </li>
                               <!-- END timeline item -->
                               <!-- timeline item -->
                               <li>
                                   <i class="ion icon-video-camera bg-maroon"></i>

                                   <div class="timeline-item  card">
                                       <div class="card-header white"><a href="#">Mr. Doe</a> shared a video<span class="time float-right"><i class="ion icon-clock-o"></i> 5 days ago</span></div>


                                       <div class="card-body">
                                           <div class="embed-responsive embed-responsive-16by9">
                                               <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs" allowfullscreen="" frameborder="0"></iframe>
                                           </div>
                                       </div>
                                       <div class="card-footer">
                                           <a href="#" class="btn btn-xs bg-maroon">See comments</a>
                                       </div>
                                   </div>
                               </li>
                               <!-- END timeline item -->
                               <li>
                                   <i class="ion icon-clock-o bg-gray"></i>
                               </li>
                           </ul>
                       </div>
                       <!-- /.col -->
                   </div>
               </div>
               <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                   <form class="form-horizontal">
                       <div class="form-group">
                           <label for="inputName" class="col-sm-2 control-label">Name</label>

                           <div class="col-sm-10">
                               <input class="form-control" id="inputName" placeholder="Name" type="email">
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                           <div class="col-sm-10">
                               <input class="form-control" id="inputEmail" placeholder="Email" type="email">
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="inputName" class="col-sm-2 control-label">Name</label>

                           <div class="col-sm-10">
                               <input class="form-control" id="inputName" placeholder="Name" type="text">
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                           <div class="col-sm-10">
                               <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                           <div class="col-sm-10">
                               <input class="form-control" id="inputSkills" placeholder="Skills" type="text">
                           </div>
                       </div>
                       <div class="form-group">
                           <div class="col-sm-offset-2 col-sm-10">
                               <div class="checkbox">
                                   <label>
                                       <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                   </label>
                               </div>
                           </div>
                       </div>
                       <div class="form-group">
                           <div class="col-sm-offset-2 col-sm-10">
                               <button type="submit" class="btn btn-danger">Submit</button>
                           </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>
        </div>
        <?php

}
}

 ?>

    </div>
</div>

<!-- Right Sidebar -->
<aside class="control-sidebar fixed white ">
    <div class="slimScroll">
        <div class="sidebar-header">
            <h4>Activity List</h4>
            <a href="#" data-toggle="control-sidebar" class="paper-nav-toggle  active"><i></i></a>
        </div>
        <div class="p-3">
            <div>
                <div class="my-3">
                    <small>25% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>45% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 45%;" aria-valuenow="45"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>60% Complete</small>
                    `
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>75% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>100% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-3 bg-primary text-white">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="font-weight-normal s-14">Sodium</h5>
                    <span class="font-weight-lighter text-primary">Spark Bar</span>
                    <div> Oxygen
                        <span class="text-primary">
                                                    <i class="icon icon-arrow_downward"></i> 67%</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <canvas width="100" height="70" data-chart="spark" data-chart-type="bar"
                            data-dataset="[[28,68,41,43,96,45,100,28,68,41,43,96,45,100,28,68,41,43,96,45,100,28,68,41,43,96,45,100]]"
                            data-labels="['a','b','c','d','e','f','g','h','i','j','k','l','m','n','a','b','c','d','e','f','g','h','i','j','k','l','m','n']">
                    </canvas>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table id="recent-orders" class="table table-hover mb-0 ps-container ps-theme-default">
                <tbody>
                <tr>
                    <td>
                        <a href="#">INV-281281</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 1228.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-01112</a>
                    </td>
                    <td>
                        <span class="badge badge-warning">Overdue</span>
                    </td>
                    <td>$ 5685.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-281012</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 152.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-01112</a>
                    </td>
                    <td>
                        <span class="badge badge-warning">Overdue</span>
                    </td>
                    <td>$ 5685.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-281012</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 152.28</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="sidebar-header">
            <h4>Activity</h4>
            <a href="#" data-toggle="control-sidebar" class="paper-nav-toggle  active"><i></i></a>
        </div>
        <div class="p-4">
            <div class="activity-item activity-primary">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 5 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet conse ctetur which ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-danger">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 8 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit ametcon the sectetur that ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-success">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 10 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet cons the ecte tur and adip ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-warning">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 12 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet consec tetur adip ascing elit users.</p>
                </div>
            </div>
        </div>
    </div>
</aside>
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