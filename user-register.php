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
                            <li><a href="#">Register</a></li>
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

                <h6 class="text-uppercase mb-0">New account</h6>

              </div>

              <div class="block-body"> 

                <p class="lead">Not our registered customer yet?</p>

                <p class="text-muted">With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>

                <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                <hr>

                <form action="signup.php" method="POST">

                  <div class="form-group">

                    <label class="form-label" for="name">Name</label>

                    <input class="form-control" required name="name" id="name" type="text">

                  </div>

                  <div class="form-group">

                    <label class="form-label" for="email">Email</label>

                    <input class="form-control" required name="email" id="email" type="text">

                  </div>

                  <div class="form-group">

                    <label class="form-label" for="password">Password</label>

                    <input class="form-control" required name="password" id="password" type="password">

                  </div>

                  <div class="form-group text-center">

                    <button class="btn btn-outline-dark" type="submit"><i class="fa fa-user" aria-hidden="true"></i>Register                                </button>

                  </div>

                </form>
                
		<div class="userset">
                  <ul>
                    <li><a href="login.php">Already Registered</a> </li>
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