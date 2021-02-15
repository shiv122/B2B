<?php include"inc/header.php"?>
<?php include"dbcon.php"?>
    <!-- breadcrumb start  -->
     <link rel="stylesheet" type="text/css" href="assets/css/style.default.css">
    <!-- breadcrumb end  -->

    <!-- cart area start  -->
    <div class="cart-area margin-top-60">
        <div class="container">
          <div class="block-header">
                  <h6 class="text-uppercase text-center mb-0">WISHLIST</h6>
                </div>
               
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
           $sql="SELECT * FROM wishlist where  user='".$_SESSION['log_buyer']."' ";
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
                                        <a href="inc/wish_del.php?id=<?php echo $row['id'] ?>"><i class="fa fa-times"></i></a>
                                        
                                    </div>
                                </td>
                                
                              </tr>
                             <?php  }
                         } ?>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between margin-top-30">
                            <div class="btn-wrapper">
                                <a href="index.php" class="btn btn-continue">Continue Shopping</a>
                            </div>
                            <div class="btn-wrapper">
                                <a href="inc/.php" class="btn btn-clear">Add to Cart</a>
                            </div>
                            <div class="btn-wrapper">
                                <a href="inc/clear_wishlist.php" class="btn btn-clear">Clear Wishlist</a>
                            </div>
                        </div>
                    </div>
               
               
            
        </div>
    </div>
    <!-- cart area end  -->

    <!-- instagram start -->
   
    <!-- instagram end -->
    <script >
        
    </script>

<?php include"inc/footer.php"?>