<?php include 'dbcon.php'

 ?>

 <style type="text/css">

    ul.scroll {
}

</style>



	<?php 

session_start();

           $sql="SELECT  * FROM wishlist where user= '".$_SESSION['log_buyer']."' ";

           $res = mysqli_query($conn ,$sql);

                                         if (mysqli_num_rows($res) > 0)

                                            {



                                                while ($row = mysqli_fetch_assoc($res))

                                                {



            $sql1="SELECT * FROM product where id='".$row['product']."' ";

           $res1 = mysqli_query($conn ,$sql1);

           $row1 = mysqli_fetch_assoc($res1);

           

                                             ?>

                                            

                                        <li>

                                            <div class="d-flex add-cartumang">

                                                <div class="thumb">

                                                    <img style=" border: 1px solid #ddd; border-radius: 4px; padding: 5px; width: 150px;" src="<?php $result = substr($row1['image'], 3); echo $result; ?>" alt="">

                                                </div>

                                                <div class="content">

                                                    <h6 class="title"><a href="single-product.php">Product Name: <?php echo $row1['pro_name']; ?></a></h6>
                                                    <span class="price">Product Price: &nbsp <?php echo $row1['price']; ?></span>

                                                </div>

                                                

                                            </div>

                                        </li>

                                            
                             <?php }}

                              ?><div class="btn-wrapper">

                                                <a href="add_wish_to_cart.php" class="btn btn-cart">add to cart</a>

                                            </div>

                                        