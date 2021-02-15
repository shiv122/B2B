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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
    <script >
        
       

    </script>
</head>
<body class="light">
<!-- Pre loader -->

<div id="app">
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

 <script>
      var check = function () {
        if (
          document.getElementById("password").value ==
          document.getElementById("confirm_password").value
        ) {
          document.getElementById("message").style.color = "green";
          document.getElementById("message").innerHTML = "Password Matching";
          document.getElementById("butsave").disabled = false;
          document.getElementById("butsave").style.color = "green";
        } else {
          document.getElementById("message").style.color = "red";
          document.getElementById("message").innerHTML = "Password Not Matching";
          document.getElementById("butsave").disabled = true;
          document.getElementById("butsave").style.color = "red";
        }
      };
    </script>

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
<div class="light b-t">
    <div id="primary" class="content-area"
         data-bg-possition="center"
         data-bg-repeat="false"
         style="background: url('assets/img/icon/icon-circles.png');">
        <main id="main" class="site-main">
            <div class="container">
                <div class="col-xl-8 mx-lg-auto p-t-b-80">
                    <header class="text-center">
                        <h1>Create New Account</h1>
                        
                        <p>Join Our wonderful community and let others help you without a single
                            penny</p>
                        <img class="p-t-b-50" src="assets/img/icon/icon-join.png" alt="">
                    </header>
                    <form action="reg.php" method="POST" >
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" id="fname" required name="fname" class="form-control form-control-lg" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" id="lname" name="lname" required class="form-control form-control-lg" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="email" id="email" name="email" required class="form-control form-control-lg" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="number" min="" id="ad_number" required name="ad_number" class="form-control form-control-lg" placeholder="Adhar Number">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="tel" id="Phone" required name="Phone" class="form-control form-control-lg" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" id="addr" name="addr" required class="form-control form-control-lg" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="password" onkeyup="check();" name="password" autocomplete="off" required id="password" class="form-control form-control-lg" placeholder="Password">
                                </div>
                            </div>
                             <div class="col-lg-6">
                                  <div class="form-group">
                                    <input onkeyup="check();" type="password" autocomplete="off" required id="confirm_password" name="confirm_password" class="form-control form-control-lg"
                                           placeholder="Confirm Password">
                                </div>
                            </div>

                            <div  class="col-lg-12 text-center">
                                
                                <h4><span  id='message'></span></h4>
                            </div>
                            
                            <div  class="col-lg-12">

                                <input type="submit" name="butsave" id="butsave" class="btn btn-success btn-lg btn-block" value="Create Account">
                                
                                
                            </div>
                           
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->
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