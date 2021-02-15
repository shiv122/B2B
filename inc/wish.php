<?php include"inc/header.php"?>
<?php include"dbcon.php"?>
    <!-- breadcrumb start  -->
    
    <!-- breadcrumb end  -->

    <!-- cart area start  -->
    <div class="cart-area margin-top-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="cart-content margin-top-20">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                 
                              <tr class="text-center">
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quanity</th>
                                <th scope="col">Total</th>
                                <th scope="col">Action</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
<?php $a=0;
           $sql="SELECT * FROM wishlist where user='2' ";
           $res = mysqli_query($conn ,$sql);
                                         if (mysqli_num_rows($res) > 0)
                                            {
                                                while ($row = mysqli_fetch_assoc($res))
                                                {

            $sql1="SELECT * FROM product where id='".$row['product']."' ";
           $res1 = mysqli_query($conn ,$sql1);
           $row1 = mysqli_fetch_assoc($res1)
                                             ?>
                                <th scope="row" class="d-flex">
                                    <div class="left">
                                        <img style=" border: 1px solid #ddd; border-radius: 4px; padding: 5px; width: 150px;" src="<?php $result = substr($row1['image'], 3); echo $result; ?>" alt="">
                                    </div>
                                    <div class="right">
                                        <h6 class="name"><?php echo $row1['pro_name']; ?></h6>
                                        <h6 class="title">Size: <span class="values">XL</span></h6>
                                        <h6 class="title">Color: <span class="values">Brown</span></h6>
                                    </div>
                                </th>
                                <td><?php echo  $row1['price']; ?></td>
                                <td><input type="text" value="<?php echo  $row['quantity']; ?>"></td>
                                <td><?php $final=$row['quantity']*$row1['price'] ;echo $final; 
                                             
                                             
                                             $a= $a+$final;
                                             ?></td>
                                <td>
                                    <div class="action">
                                        <a href="product_del.php?id=<?php echo $row['id'] ?>"><i class="fa fa-times"></i></a>
                                        
                                    </div>
                                </td>
                                
                              </tr>
                             <?php  }
                         } ?>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between margin-top-30">
                            <div class="btn-wrapper">
                                <a href="#" class="btn btn-continue">Continue Shopping</a>
                            </div>
                            <div class="btn-wrapper">
                                <a href="clear_cart.php" class="btn btn-clear">Clear Shopping Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <di class="col-xl-3 col-lg-4">
                    <div class="summary margin-top-20">
                        <h6 class="title">Summary</h6>
                        <h6 class="subtitle">Estimate Shipping and Tax</h6>
                        <p class="destination">Enter your destination to get a shipping estimate.</p>
                        <form action="#">
                            <div class="form-group">
                                <label>Country</label>
                                <select class="form-control cart-select">
                                    <option>United State</option>
                                    <option>Italy</option>
                                    <option>Bangladesh</option>
                                    <option>London</option>
                                </select>
                                <i class="fa fa-chevron-down"></i>
                            </div>
                            <div class="form-group">
                                <label>State/Province</label>
                                <select class="form-control cart-select">
                                    <option>Region/state</option>
                                    <option>Italy</option>
                                    <option>Bangladesh</option>
                                    <option>London</option>
                                </select>
                                <i class="fa fa-chevron-down"></i>
                            </div>
                            <div class="form-group">
                                <label>Zip / Postal Code</label>
                                <input type="text">
                            </div>
                            
                            <div class="d-flex justify-content-between total">
                                <p>Subtotal</p>
                                <p class="subtotal" ><?php echo $a; ?></p>
                            </div>
                            <div class="d-flex justify-content-between total">
                                <p>Shipping</p>
                                <p>$190.00</p>
                            </div>
                            <div class="d-flex justify-content-between total">
                                <p>Order Total</p>
                                <p class="total"><?php echo $a+190; ?></p>
                            </div>
                            
                        </form> 
                        <div class="btn-wrapper">
                            <a href="#" class="btn btn-checkout">Proceed To Checkout</a>
                        </div>
                        
                    </div>
                </di>
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