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
     <style >
       input[type="file"] {
    display: none;
}
.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
}
    </style>
    <script type="text/javascript">
function add_row()
{
 $rowno=$("#subcat tr").length;
 $rowno=$rowno+1;
 $("#subcat tr:last").after("<tr id='row"+$rowno+"'><td><input required type='text' class='form-control' name='sub_cata[]' id='validationCustom01'placeholder='catagory'  required></td><td><a class='btn-fab btn-fab-sm shadow btn-danger value='DELETE' onclick=delete_row('row"+$rowno+"') ><i class='icon-delete'></i></a><i ></i></td></tr>");
}
function delete_row(rowno)
{
 $('#'+rowno).remove();
}
</script>
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
</div>
<div class="page has-sidebar-left">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-image"></i>
                        Add Banner
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white">
                    <li>
                        <a class="nav-link " href="#"><i class="icon icon-image"></i>All Banners</a>
                    </li>
                    
                    
                </ul>
            </div>
        
    </header>
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <form id="needs-validation" novalidate action="add_banner.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    
                        
                            <div class="col-6">
                                <label for="validationCustom01">Banner Text</label>
                                <input required type="text" class="form-control" name="bt" id="validationCustom01"
                                       placeholder="text"  required>
                                       <input required type="text" hidden class="form-control" name="by" id="validationCustom01"
                                       placeholder="banner"   value="0"> &nbsp;
                                      
                                       <label  for="validationCustom01">Banner Image</label>
                                       <br>


                                               <label for="file-upload" class="custom-file-upload">
                                       <i class="fa fa-cloud-upload">Upload Image</i>
                                       </label>
                                       <input required id="file-upload" required name="photo" type="file"/>
                                           
                                      
                                       

                            </div>
                             <div class="col-6" >
                            <label for="productDetails">Banner Link</label>
                            <br>
                            <textarea name="link"  class="form-control p-t-40 editor" id="needs-validation" 
                                      placeholder="Write Something..." rows="17" required></textarea>
                            
                            <br>
                             <button class="btn btn-primary" type="submit">Publish</button>
                        </div>
                          
                        
                        
                           
                        <script>
                            // Example starter JavaScript for disabling form submissions if there are invalid fields
                            (function () {
                                "use strict";
                                window.addEventListener("load", function () {
                                    var form = document.getElementById("needs-validation");
                                    form.addEventListener("submit", function (event) {
                                        if (form.checkValidity() == false) {
                                            event.preventDefault();
                                            event.stopPropagation();
                                        }
                                        form.classList.add("was-validated");
                                        var editorElement = document.getElementById("productDetails");
                                        if (editorElement.value == '') {
                                            editorElement.parentNode.classList.add("is-invalid");
                                            editorElement.parentNode.classList.remove("is-valid");
                                        } else {
                                            editorElement.parentNode.classList.remove("is-invalid");
                                            editorElement.parentNode.classList.add("is-valid");
                                        }

                                    }, false);
                                }, false);
                            }());
                        </script>
                    </div>
                    
                </div>
            </form>
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