<?php include"inc/header.php"?>

<?php include"dbcon.php"?>

<style>
 

</style>

    <!-- breadcrumb start  -->

    

    <!-- breadcrumb end  -->



    <!-- cart area start  -->

    <div class="cart-area margin-top-60">

        <div class="container">

       <div class="loaded">

        <div id="tt-pageContent">

            <div class="container-indent">

                <div class="container">

                    
                    <div class="tt-login-form">

                        <div class="row">

                            
                            
                            <div class="col-xs-12 col-md-5">

                                <h1 class="tt-title-subpages noborder">UMANG</h1>


                                <div class="tt-item">
                                    <h2 class="tt-title">LOGIN/SIGNUP</h2>

                                    If you have an account with us, please log in.
                                    

                                    <div class="form-default form-top">

                                       <form method="POST" action="otp-login.php">
                                            <lable>  Enter Your Mobile Number</lable>
                                            <div class="form-group">

                                               <input type="text" name="phone" class="form-control">

                                           </div>
                                           <div class="form-group">

                                               <input type="submit" class="btn btn-border" name="otp-form">

                                           </div>

                                       </form>

                                </div>
                                
                           </div>

                       </div>
                       <div class="col-xs-12 col-md-7">
                             <h1 class="tt-title-subpages noborder">CREATE AN ACCOUNT</h1>

                    <div class="user-content">

                    

                    <form action="" method="post">
                        <input type="hidden" name="_csrf" value="">                        
                           <div class="row">
                           
                            <div class="col-md-12 form-default form-top">
                               <div class="tt-item row">
                                
                                <div class="col-md-6 form-group">
                                    
                                    <label for="">Full Name *</label>
                                    <input type="text" class="form-control" name="cust_name" value="">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Company Name</label>
                                    <input type="text" class="form-control" name="cust_cname" value="">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Email Address *</label>
                                    <input type="email" class="form-control" name="cust_email" value="">
                                </div>
                
                                

                                
                                <div class="col-md-12 form-group">
                                    <label for="">Address *</label>
                                    <textarea name="cust_address" class="form-control" cols="30" rows="10" style="height:70px;"></textarea>
                                </div>

                                 <div class="col-md-6 form-group">
                                     <label for="">Phone Number *</label>
                                    <input type="text" class="form-control" name="cust_phone" value="">                                 
                                </div>
                                
                                
                                <div class="col-md-6 form-group">
                                    <label for="">City *</label>
                                    <input type="text" class="form-control" name="cust_city" value="">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">State *</label>
                                    <input type="text" class="form-control" name="cust_state" value="">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Zip Code *</label>
                                    <input type="text" class="form-control" name="cust_zip" value="">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Password *</label>
                                    <input type="password" class="form-control" name="cust_password">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Retype Password *</label>
                                    <input type="password" class="form-control" name="cust_re_password">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for=""></label>
                                    
                                    <button class="btn btn-border" type="submit" name="form1">Register</button>
                                </div>
                            </div>
                            </div>
                            
                        </div>                        
                    </form>
                </div>
                        </div>

                   </div>

               </div>

           </div>

       </div>

   </div>

</div>    

               

                    

               

               

            

        </div>

    </div>

    <!-- cart area end  -->



    <!-- instagram start -->

    <div class="instagram-area margin-top-75">

        <div class="container">

            <div class="row">

                <div class="col-md-12 text-center">

                    <div class="instagram-title margin-bottom-40">

                        <h4><span>@ <a href="#">FOLLOW</a></span> US ON INSTAGRAM</h4>

                        <h6>shop our instagram</h6>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-12">

                    <div class="instagram-slider">

                        <div class="thumb">

                            <img src="assets/img/instagram/1.png" alt="">

                        </div>

                        <div class="thumb">

                            <img src="assets/img/instagram/2.png" alt="">

                        </div>

                        <div class="thumb">

                            <img src="assets/img/instagram/3.png" alt="">

                        </div>

                        <div class="thumb">

                            <img src="assets/img/instagram/4.png" alt="">

                        </div>

                        <div class="thumb">

                            <img src="assets/img/instagram/5.png" alt="">

                        </div>

                        <div class="thumb">

                            <img src="assets/img/instagram/6.png" alt="">

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- instagram end -->

    <script >

        

    </script>



<?php include"inc/footer.php"?>