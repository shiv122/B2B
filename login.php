<?php include"inc/header.php"?>



<link rel="stylesheet" type="text/css" href="assets/css/style.default.css">





    <!-- breadcrumb start  -->

<div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-inner d-flex justify-content-between">
                        <h2 class="page-title">Login</h2>
                        <ul class="page-list">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    



    <!-- breadcrumb end  -->



<section>

      <div class="container margin-top-40 padding-bottom-40">

        <!-- Breadcrumbs -->

        <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>Customer Zone</h3>
                    </div>
                </div>
            </div>

       

       

        

      </div>

    </section>



    <section>

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-6">

            <div class="block">

              <div class="block-header">

                <h6 class="text-uppercase mb-0">Login</h6>

              </div>

              <div class="block-body">

                <p class="lead">Already our customer?</p>

                <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

                <hr>

                <form action="log.php" method="POST">

                  <div class="form-group">

                    <label class="form-label" for="email">Email</label>

                    <input class="form-control" required name="email" id="email" type="text">

                  </div>

                  <div class="form-group">

                    <label class="form-label" for="password">Password</label>

                    <input class="form-control" required name="pass" id="password" type="password">

                  </div>

                  <div class="form-group text-center">

                    <button class="btn btn-outline-dark" type="submit"><i class="fa fa-sign-in" aria-hidden="true"></i> Log in</button>

                  </div>

                </form>

                <div class="userset">
                  <ul>
                    <li><a href="user-register.php">Register now</a> </li>
                    <li><a href="#">Forgot Password?</a></li>
                  </ul>
                </div>

              </div>

            </div>

          </div>

 

        </div>

      </div>

    </section>









    


    <script >



        



    </script>







<?php include"inc/footer.php"?>