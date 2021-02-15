<?php include"inc/header.php"?>
<?php include"dbcon.php"?>
    <!-- breadcrumb start  -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.default.css">
  <style >
      
  </style> 
  <script >

       setInterval(function(){ 

        var $temp = $('#pr').html();
         filterData1.push($temp);
        
  
}, 5000);

        function get_filter_text1(text_id){



 var filterData1=[];

 $('#'+text_id+':checked').each(function()

 {

 filterData1.push($(this).val());

 });

 return filterData1;

}


  </script> 
    <!-- breadcrumb end  -->

    <!-- cart area start  -->
    <div class="cart-area margin-top-60">
        <div class="container">
            <div class="row">

                <div class="col-xl-9 col-lg-8">

                    <div class="block-header">
                  <h6 class="text-uppercase text-center mb-0">OUR ORDERS</h6>
                </div>
                    <div class="cart-content margin-top-20">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                 
                              <tr class="text-center">
                                <th scope="col">Productt</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quanity</th>
                                <th scope="col">Total</th>
                                <th scope="col">Action</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                          
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
                                <th scope="row" class="d-flex">
                                    <div class="left">
                                        <img style=" border: 1px solid #ddd; border-radius: 4px; padding: 5px; width: 150px;" src="<?php $result = substr($row1['image'], 3); echo $result; ?>" alt="">
                                    </div>
                                    <div class="right">
                                        <h6 class="name"><?php echo $row1['pro_name']; ?></h6>
                                        
                                    </div>
                                </th>
                                <td ><a class="pr"><?php echo  $row1['price']; ?></a></td>
                                <td><input id="qt"  type="number" min="0" onchange="chng(<?php echo $row['id']; ?>,this.value)" oninput="this.value = Math.abs(this.value)"  value="<?php echo  $row['quantity']; ?>">
                                </td>
                                <td ><a id="mc"><?php $final=$row['quantity']*$row1['price'] ;echo $final; 
                                             
                                             
                                             $a= $a+$final;
                                             ?></a></td>
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
                                <a href="index.php" class="btn btn-continue">Continue Shopping</a>
                            </div>
                            <div class="btn-wrapper">
                                <a href="clear_cart.php" class="btn btn-clear">Clear Shopping Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="block-header">
                  <h6 class="text-uppercase text-center mb-0">Total Amount</h6>
                </div>
                    <div class="summary margin-top-20">
                        
                      
                            <?php if ($emp>0) {
                                # code...
                             ?>
                            <div class="d-flex justify-content-between total">
                                <p>Subtotal</p>
                                <p class="subtotal" ><?php echo $a; ?></p>
                            </div>
                            <div class="d-flex justify-content-between total">
                                <p>Shipping</p>
                                <p>190.00</p>
                            </div>
                            <div class="d-flex justify-content-between total">
                                <p>Order Total</p>
                                <p ><?php echo $a+190; ?></p>
                            </div>
                            </form> 
                        <div class="btn-wrapper">
                            <a href="checkout.php" class="btn btn-checkout">Checkout</a>
                        </div>
                            <?php }?>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart area end  -->

    <!-- instagram start -->
    
    <!-- instagram end -->





<script >
 function chng(val,val1)  {
  alert('changed');
   var us= <?php echo  $_SESSION['log_buyer']; ?> ;
  
    $.ajax({
           data :{id: val,
                  value:val1,
                us : us},
           url  :"inc/update_val.php", 
           type :'POST',
           success: function(data){
               $("#cot").html(data);
           }
       });
}
</script>

<?php include"inc/footer.php"?>