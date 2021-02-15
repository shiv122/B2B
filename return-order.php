<?php include"inc/header.php"?>



<link rel="stylesheet" type="text/css" href="assets/css/style.default.css">
<style >
  



</style>
              
<style type="text/css">


/*Checkboxes styles*/
input[type="checkbox"] { display: none; }

input[type="checkbox"] + label {
  display: inline-block;
  position: relative;

  font: 14px/20px 'Open Sans', Arial, sans-serif;
  color: #ddd;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
}

input[type="checkbox"] + label:last-child { margin-bottom: 0; }

input[type="checkbox"] + label:before {
  content: '';
  display: inline-block;
  width: 20px;
  height: 20px;
  border: 2px solid #000;
  position: absolute;
  left: 0;
  top: 0;
  opacity: .6;
  -webkit-transition: all .12s, border-color .08s;
  transition: all .12s, border-color .08s;
}

input[type="checkbox"]:checked + label:before {
  width: 10px;
  top: -5px;
  left: 5px;
  border-radius: 0;
  opacity: 1;
  border-top-color: transparent;
  border-left-color: transparent;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>


    <!-- breadcrumb start  -->



    



    <!-- breadcrumb end  -->







    <section>

      <div class="container">

        <div class="row">

          <div class="col-lg-12 col-xl-12">

            <form action="inc/return.php" method="POST">

              <div class="block-body">

                <!-- Invoice Address-->

                <div class="block-header">

                  <h6 class="text-uppercase text-center mb-0">Return Order</h6>

                </div>

                
                    <div class="cart-content margin-top-20">
                        <table  id="sub" class="table table-bordered table-responsive">
                            <thead>
                                 
                              <tr class="text-center">
                                <th scope="col">Productt</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quanity</th>
                                
                                
                               
                                <th scope="col">Return</th>
                              
                              </tr>
                            </thead>
                            <tbody>
                              <?php 
                              $r=1;
                          $sql="SELECT * FROM orders where customer_id='".$_SESSION['log_buyer']."' ";
           $res = mysqli_query($conn ,$sql);
                                         if (mysqli_num_rows($res) > 0)
                                            {
                                              
                                                while ($row = mysqli_fetch_assoc($res))
                                                {
                                                    $sql1="SELECT * FROM product where id='".$row['product_id']."' ";
                                                    $res1 = mysqli_query($conn ,$sql1);
                                                    $row1 = mysqli_fetch_assoc($res1);

    $sql11="SELECT id FROM return_product where order_id='".$row['order_id']."' ";
                                                    $res11 = mysqli_query($conn ,$sql11);
                                                    $row11 = mysqli_fetch_assoc($res11);
                                                if (isset($row11)) {
                                                continue;
                                                }
                                                  ?>


                                                 <tr id="<?php echo $row['order_id']; ?>">
                                <th scope="row" class="d-flex">
                                    <div class="left">
                                        <img style=" border: 1px solid #ddd; border-radius: 4px; padding: 5px; width: 150px;" src="admin/assets/imggalaxy note 20 ultraimg.jpg" alt="">
                                    </div>
                                    <div class="right">
                                        <h6 class="name"><?php echo $row1['pro_name']; ?></h6>
                                        
                                    </div>
                                </th>
                                <td><a class="pr"><?php echo $row1['price']; ?></a></td>
                                <td><input id="qt" type="number" min="0" onchange="chng(6,this.value)" oninput="this.value = Math.abs(this.value)" value="1">
                                </td>
                             
                               

                              
                                 <td style="    text-align: center;vertical-align: middle;">
                                   

                                    
<a href="return.php?id=<?php echo $row['order_id']; ?>">
              <i class="fa fa-upload" aria-hidden="true"> <br>Return</i>
                     
</a>
                     
                                </td>
                             
                              </tr>
                             
                            <?php }} ?>
                                                         </tbody>
                        </table>
                        
                    </div>
                </div>

                    
                

                  <!-- /Shipping Address-->

                </div>

              </div>

              <div class="form-group mt-3 text-center">


              </div>

            </form>

              



          </div>

          <!-- Customer Sidebar-->

          

          <!-- /Customer Sidebar-->

        </div>

      </div>

    </section>






<?php include"inc/footer.php"?>