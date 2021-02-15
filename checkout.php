<?php include"inc/header.php"?>

<link rel="stylesheet" type="text/css" href="assets/css/style.default.css">


    <!-- breadcrumb start  -->

    

    <!-- breadcrumb end  -->



    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-xl-9">
            <form action="inc/checkout.php" method="POST">
              <div class="block">
                <!-- Invoice Address-->
                <div class="block-header">
                  <h6 class="text-uppercase text-center mb-0">Invoice address</h6>
                </div>
                <div class="block-body">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label class="form-label" for="fullname_invoice">First Name</label>
                      <input required class="form-control" type="text" name="fname" placeholder="Joe Black" id="fullname_invoice">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label" for="fullname_invoice">Last Name</label>
                      <input required class="form-control" type="text" name="sname" placeholder="Joe Black" id="fullname_invoice">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label" for="emailaddress_invoice">Email Address</label>
                      <input required class="form-control" type="text" name="email" placeholder="joe.black@gmail.com" id="emailaddress_invoice">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label" for="street_invoice">Street</label>
                      <input required class="form-control" type="text" name="street" placeholder="123 Main St." id="street_invoice">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label" for="city_invoice">City</label>
                      <input required class="form-control" type="text" name="city" placeholder="City" id="city_invoice">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label" for="zip_invoice">ZIP</label>
                      <input required class="form-control" type="text" name="zip" placeholder="Postal code" id="zip_invoice">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label" for="state_invoice">State</label>
                      <input required class="form-control" type="text" name="state" placeholder="State" id="state_invoice">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label" for="phonenumber_invoice">Phone Number</label>
                      <input required class="form-control" type="text" name="phone" placeholder="Phone Number" id="phonenumber_invoice">
                    </div>
                    <div class="form-group col-12 mt-3">
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="show-shipping-address" type="checkbox" name="clothes-brand">
                        <label class="custom-control-label align-middle" for="show-shipping-address" data-toggle="collapse" data-target="#shippingAddress" aria-expanded="false" aria-controls="shippingAddress">&nbsp;&nbsp;  &nbsp;     Use 2nd shipping address</label>
                      </div>
                    </div>
                  </div>
                  <!-- /Invoice Address-->
                </div>
                <!-- Shippping Address-->
                <div class="collapse" id="shippingAddress" aria-expanded="false">
                  <div class="block">
                    <div class="block-header">
                      <h6 class="text-uppercase mb-0">Shipping address </h6>
                    </div>
                    <div class="block-body">
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label class="form-label" for="street_shipping">Street</label>
                          <input class="form-control" type="text" name="street2" placeholder="123 Main St." id="street_shipping">
                        </div>
                        <div class="form-group col-md-6">
                          <label class="form-label" for="city_shipping">City</label>
                          <input class="form-control" type="text" name="city2" placeholder="City" id="city_shipping">
                        </div>
                        <div class="form-group col-md-6">
                          <label class="form-label" for="zip_shipping">ZIP</label>
                          <input class="form-control" type="text" name="zip2 placeholder="Postal code" id="zip_shipping">
                        </div>
                        <div class="form-group col-md-6">
                          <label class="form-label" for="state_shipping">State</label>
                          <input class="form-control" type="text" name="state2" placeholder="State" id="state_shipping">
                        </div>
                        <div class="form-group col-md-6">
                          <label class="form-label" for="phonenumber_shipping">Phone Number</label>
                          <input class="form-control" type="text" name="phonen2" placeholder="Phone Number" id="phonenumber_shipping">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /Shipping Address-->
                </div>
              </div>
              <div class="form-group mt-3 text-center">
                <button class="btn btn-outline-dark" type="submit"><i class="fa fa-cloud" aria-hidden="true"></i>Checkout</button>
              </div>
            </form>
              

          </div>
          <!-- Customer Sidebar-->
          <div class="col-xl-3 col-lg-4 mb-5">
            <div class="block-header">
                  <h6 class="text-uppercase text-center mb-0">Summery</h6>
                </div>
            <div class="customer-sidebar card border-0"> 
              <div class="summary margin-top-20">
                        
                        <form action="#">
                            <div class="form-group">
                
                                             <table class="table-responsive table-bordered text-center ">
                            <thead>
                                             <tr >
                                <th >Productt</th>
                                <th >Price</th>
                                <th >Quanity</th>
                                <th >Total</th>
                              </tr>
                            </thead>
                            <tbody class="border">
                              <?php $a=0; $emp=0;
           $sql="SELECT * FROM cart where user='".$_SESSION['log_buyer']."' ";
           $res = mysqli_query($conn ,$sql);
                                         if (mysqli_num_rows($res) > 0)
                                            {
                                                $emp=1;
                                                while ($row = mysqli_fetch_assoc($res))
                                                {

            $sql1="SELECT * FROM product where id='".$row['product']."' ";
           $res1 = mysqli_query($conn ,$sql1);
           $row1 = mysqli_fetch_assoc($res1)
                                             ?>
                                                 <tr>
                                <td scope="row" class="d-flex">
                                    
                                    <div class="right">
                                        <h6 class="name"><?php echo $row1['pro_name']; ?></h6>
                                  
                                    </div>
                                </tds>
                                <td ><a class="pr"><?php echo  $row1['price']; ?></a></td>
                                <td class="text-center">  <label><?php echo  $row['quantity']; ?></label>
                                </td>
                                <td ><a id="mc"><?php $final=$row['quantity']*$row1['price'] ;echo $final; 
                                             
                                             
                                             $a= $a+$final;
                                             ?></a></td>
                                
                                
                              </tr>
                             <?php  }
                         } ?>
                            </tbody>
                        </table>
                          
                                                        <div class="d-flex justify-content-between total">
                                <p>Subtotal</p>
                                <p class="subtotal"><?php echo $a; ?></p>
                            </div>
                            <div class="d-flex justify-content-between total">
                                <p>Shipping</p>
                                <p>0000</p>
                            </div>
                            <div class="d-flex justify-content-between total">
                                <p>Order Total</p>
                                <p><?php echo $a; ?></p>
                            </div>
                            </form> 
                       
                                                    
                        
                    </div>
            </div>
          </div>
          <!-- /Customer Sidebar-->
        </div>
      </div>
    </section>




    

    <script >

        

    </script>



<?php include"inc/footer.php"?>