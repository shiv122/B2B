    <?php

    include 'dbcon.php';
session_start();
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
              <!--     <script type="text/javascript">
    function add_row()
    {
     $rowno=$("#subcat tr").length;
     $rowno=$rowno+1;
     $("#subcat tr:last").after("<tr id='row"+$rowno+"'><td><label for= 'file-upload"+$rowno+"' class= 'custom-file-upload '><i class= 'fa fa-cloud-upload '></i>Upload Product Images</label><input class= 'col-md-6 mb-3' id= 'file-upload"+$rowno+"' name= 'file1[]' type= 'file' multiple/></td><td><a class='btn-fab btn-fab-sm shadow btn-danger value='DELETE' onclick=delete_row('row"+$rowno+"') ><i class='icon-delete'></i></a><i ></i></td></tr>");
    }
    function delete_row(rowno)
    {
     $('#'+rowno).remove();
    }
</script> -->

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
        <?php
        
         include 'assets/navbar.php'; 
        ?>
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
                                <i class="icon-package"></i>
                                Products
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        <ul class="nav responsive-tab nav-material nav-material-white">
                            <li>
                                <a class="nav-link" href="panel-page-products.php"><i class="icon icon-list"></i>All Products</a>
                            </li>
                            <li>
                                <a class="nav-link active" href="panel-page-products-create.php"><i
                                    class="icon icon-plus-circle"></i> Add New Product</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#"><i class="icon icon-trash-can"></i>Trash</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </header>
                <div class="container-fluid animatedParent animateOnce my-3">
                    <div class="animated fadeInUpShort">
                        <form id="needs-validation" novalidate action="product_update.php" method="POST"  enctype="multipart/form-data"  >
                            <div class="row">
                                <div class="col-md-8 ">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <?php


                                            $sql="SELECT * from product where id = '".$_SESSION['product']."'";
                                            $res = mysqli_query($conn ,$sql); 
                                            if (mysqli_num_rows($res) > 0)
                                            {
                                                $row1 = mysqli_fetch_assoc($res)




                                                ?>
                                                <label for="validationCustom01">Product Name</label>
                                                <input type="text" class="form-control" name="pro_name" id="validationCustom01" value="<?php echo $row1['pro_name'] ?>" 
                                                placeholder="Product Name" value="Apple Iphone 8" required>
                                            </div>


                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom02">Product Brand</label>
                                                <input  type="text" value="<?php echo $row1['pro_brand'] ?>" name="pro_brand"  class="form-control" id="validationCustom02" placeholder="Last name"
                                                value="Apple" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="category">Category</label>

                                                <select name="catagory" id="category" class="custom-select form-control" required>
                                                    <option value="">Select Product Category</option>



                                                    <?php

                                                    $sql1="SELECT * from catagory where id='".$row1['catagory']."' ";
                                                    $result = mysqli_query($conn , $sql1);
                                                    if (mysqli_num_rows($result) > 0) {

                                                      $row = mysqli_fetch_assoc($result);

                                                  }


                                                  ?>


                                                  <option value="<?php echo $row['id']?>" selected><?php echo $row['name']; ?></option>

                                              </select>


                                              <div class="invalid-feedback">
                                                Please provide a valid category.
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom04">Price</label>
                                            <input name="price" value="<?php echo $row1['price'] ?>"  type="number" class="form-control" id="validationCustom04" placeholder="$ 250"
                                            required>
                                            <div class="invalid-feedback">
                                                Please provide a valid price.
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="sku">SKU</label>
                                            <input name="sku" type="text" value="<?php echo $row1['sku'] ?>"  class="form-control" id="sku" placeholder="sku-1029-5998" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid sku.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="productDetails">Product Details</label>
                                        <textarea name="pro_details" value=""  class="form-control p-t-40 editor" id="productDetails"
                                        rows="17" required><?php echo $row1['pro_details'] ?></textarea>


                                        <div class="invalid-feedback">
                                            Please provide a product details.
                                        </div>
                                        <div id="input">
                                            <div  class="col-md-12 " style="column-count: 2;-webkit-columns: 2;  -moz-columns: 2;">
                                                <?php
                                                $str='';
                                                $query="SELECT * from filter_sel where cat= '".$row1['catagory']."' ";
                                                $ress=mysqli_query($conn,$query);
                                                if (mysqli_num_rows($ress)>0) {

                                                   while ($rowt1= mysqli_fetch_assoc($ress)) 
                                                   { 
                                                    $queryt="SELECT * from filter where product_id= '".$row1['id']."' ";
                                                    $resst=mysqli_query($conn,$queryt);
                                                    $rowt= mysqli_fetch_assoc($resst);

                                                    ?>
                                                    <div class="mb-6">

                                                        <div class="inpbind">
                                                            <label for="validationCustom02"><?php echo $rowt1['name']; ?></label>
                                                            <input  type="text" name="<?php $str = str_replace(' ', '_', $rowt1['name']); echo $str; ?>"  class="form-control" id="" placeholder="<?php echo $rowt1['name']; ?>"
                                                            value="<?php echo $rowt[$str];?> " >
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                            }

                                            ?>
                                        </div>
                                    </div>

                                </div>

                            <?php }?>

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
                        <div class="col-md-3">


                           <label for="productDetails">Product Image</label>
                           <br>
                           <img  style=" border: 1px solid #ddd;
                           border-radius: 4px;
                           padding: 5px;
                           width: 150px;" class="user_avatar" src="<?php echo $row1['image'] ?>" alt="Image not found">
                           <br> 

                           <label for="file-upload" class="custom-file-upload">
                            <i class="fa fa-cloud-upload"></i>Upload Product Image
                        </label>


                        <br>
                        <input class="col-md-6 mb-3" id="file-upload" name="photo" type="file"/><a onclick="add_row()" class="btn-fab btn-fab-sm shadow btn-primary"><i class="icon-plus"></i></a>
                        <table id="subcat" align=center>
                            <tr id="row1">


                            </tr>

                        </table>

                        <br>
                        <label for="tags" >Tags</label><br>
                        <input type="text" value="<?php echo $row1['tags'] ?>" class="tags-input" name="tags"
                        data-options='{
                        "tagClass":   "badge badge-danger"
                    }' >
                    <br>
                    <label for="tags" >Blocked Zip</label>
                    <br>

                    <input type="text" name="city" class="tags-input"
                    value="<?php echo $row1['available'] ?>"
                    data-options='{
                    "tagClass":   "badge badge-success r-0"
                }' >
                <br>
                <div class="card mt-4">
                    <h6 class="card-header white">Publish Box</h6>
                    <div class="card-body text-success">


                    </div>
                    <div class="card-footer bg-transparent">
                        <button class="btn btn-primary" type="submit">Publish</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
</div>
<!-- Right Sidebar -->
<
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