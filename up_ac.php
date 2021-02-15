<?php include"inc/header.php"?>
<?php include 'dbcon.php' ?>
<link rel="stylesheet" type="text/css" href="assets/css/style.default.css">




<?php
if (isset($_SESSION['log_buyer'])) {
   # code...
 
 $sql1="SELECT * FROM seller_buyer where id='".$_SESSION['log_buyer']."' and seller_buyer_status=0";
 $res1 = mysqli_query($conn ,$sql1);
 $row1 = mysqli_fetch_assoc($res1)
                                                ?>



    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-xl-9">
           
            <div class="block mb-5">
              <div class="block-header"><strong class="text-uppercase">Personal details</strong></div>
              <div class="block-body">
                <form action="inc/update.php" method="POST">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="form-label" for="firstname">Name</label>
                        <input required name="name"  class="form-control" id="firstname" value="<?php echo $row1['name']; ?>" type="text">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="form-label" for="lastname">Email</label>
                        <input name="email"  required class="form-control" value="<?php echo $row1['email']; ?>" id="lastname" type="text">
                      </div>
                    </div>
                  </div>
                  <!-- /.row-->
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="form-label"  for="company">Company</label>
                        <input required name="company" class="form-control" value="<?php echo $row1['company']; ?>" id="company" type="text">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="form-label" for="street">Street</label>
                        <input  required name="street" class="form-control" value="<?php echo $row1['street']; ?>" id="street" type="text">
                      </div>
                    </div>
                  </div>
                  <!-- /.row-->
                  <div class="row">
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label" for="city">Aadhar No</label>
                        <input  required name="aadhar" class="form-control" value="<?php echo $row1['adhar_no']; ?>" id="city" type="text">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label" for="zip">ZIP</label>
                        <input  required name="zip" class="form-control" value="<?php echo $row1['zip']; ?>" id="zip" type="text">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label" for="state">State</label>
                        <input name="state"  required  type="text" text class="form-control" value="<?php echo $row1['state']; ?>" id="state"></input>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label" for="country">Country</label>
                        <input type="text"  name="country" required   class="form-control" value="<?php echo $row1['country']; ?>" id="country"></input>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="form-label" for="phone">Telephone</label>
                        <input class="form-control" required name="phone"  value="<?php echo $row1['phone']; ?>" id="phone" type="text">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="form-label"  for="shop_name">Shop Name</label>
                        <input class="form-control" required name="shop_name"  value="<?php echo $row1['email']; ?>" id="email" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="form-group text-center">
                    <button class="btn btn-outline-dark" type="submit"><i class="fa fa-sign-in" aria-hidden="true"></i>Update</button>
                  </div>
                 
                </form>
              </div>
            </div>
          </div>
          <!-- Customer Sidebar-->
          <div class="col-xl-3 col-lg-4 mb-5">
            <div class="customer-sidebar card border-0"> 
              <div class="customer-profile"><a class="d-inline-block" href="#"><img class="img-fluid rounded-circle customer-image" src="<?php $result = substr($row1['image'], 3); echo $result; ?>"></a>
                <h5><?php echo $row1['name']; ?></h5>
                <p class="text-muted text-sm mb-0"><?php echo $row1['state']; ?>, <?php echo $row1['country']; ?></p>
              </div>
              <nav class="list-group customer-nav"><a class=" list-group-item d-flex justify-content-between align-items-center" href="customer-orders.php"><span>
                    <i class="icon-package2"></i>
                    Orders</span>
                    <?php $sqla1="SELECT * FROM orders where customer_id='".$_SESSION['log_buyer']."' ";
                     $resa1 = mysqli_query($conn ,$sqla1); 
                     $count= mysqli_num_rows($resa1); ?>
                  <div class="badge badge-pill badge-dark font-weight-normal px-3"><?php echo $count; ?></div></a><a class=" list-group-item d-flex justify-content-between align-items-center" href="customer-account.php"><span>
                    <i class="icon-user-circle"></i>
                    Profile</span></a><a class=" active  list-group-item d-flex justify-content-between align-items-center" href="up_ac.php"><span>
                    <i class="icon-edit"></i> 
                    Update Acount</span></a><a class="list-group-item d-flex justify-content-between align-items-center" href="inc/logout.php"><span>
                    
                      <i class="icon-home"></i> 
                    Log out</span></a>
              </nav>
            </div>
          </div>
          <!-- /Customer Sidebar-->
        </div>
      </div>
    </section>
<?php }

else
{

  ?>

<a href="login.php"> Login</a>

  <?php
}

?>





    <!-- instagram start -->

    

    <!-- instagram end -->

    <script >

        

    </script>



<?php include"inc/footer.php"?>