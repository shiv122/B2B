<?php include 'dbcon.php'

 ?>

 <style type="text/css">

    ul.scroll {

 



 

 

}

</style>



	<?php 

session_start();

           $sql="SELECT  * FROM cart where user= '".$_SESSION['log_buyer']."' ";

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

                                                    <h6 class="title"><a href="single-product.php?id=<?php echo $row1['id']; ?>">Product Name: &nbsp <?php echo $row1['pro_name']; ?></a></h6>

                                                    <span class="price">Product Price: &nbsp <?php echo $row1['price']; ?></span>
                                                    <p>Quantity: &nbsp <?php echo $row['quantity']; ?></p>

                                                </div>

                                                

                                            </div>
                                            <div class="prod-dtlumang">

                                            <h6 class="tprice"><span>Total price: &nbsp </span><?php $final=$row['quantity']*$row1['price'] ;echo $final; ?></h6>

                                            
                                            </div>

                                        </li>

                                       
                             <?php }}

                              ?><div class="btn-wrapper">

                                                <a href="shoping-cart.php" class="btn btn-cart">Go to cart</a>

                                            </div>

                                        