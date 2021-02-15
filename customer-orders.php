<?php include"inc/header.php"?>
<?php include 'dbcon.php' ?>
<link rel="stylesheet" type="text/css" href="assets/css/style.default.css">




<section class="hero">
      <div class="container">
        <!-- Breadcrumbs -->
        
        <!-- Hero Content-->
        <div class="hero-content pb-5 text-center">
          <h1 class="hero-heading">YOUR ORDERS</h1>
          <div class="row">   
            <div class="col-xl-12 "><p class="lead text-muted">Your orders in one place.</p></div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 ">
            <table class="table table-borderless table-hover table-responsive-md">
              <thead class="bg-light">
                <tr>
                  <th class="py-4 text-uppercase text-sm">Order Id</th>
                  <th class="py-4 text-uppercase text-sm">Date</th>
                  <th class="py-4 text-uppercase text-sm">Total</th>
                  <th class="py-4 text-uppercase text-sm">Status</th>
                  <th class="py-4 text-uppercase text-sm">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 

  $sql11="SELECT * FROM orders where customer_id='".$_SESSION['log_buyer']."' ";
 $res11 = mysqli_query($conn ,$sql11);
   if (mysqli_num_rows($res11) > 0)
                                            {
                                                while ($row11 = mysqli_fetch_assoc($res11)){
                                                ?>
                <tr>
                  
                  <th class="py-4 align-middle"><?php echo $row11['order_id']; ?></th>
                  <td class="py-4 align-middle"><?php echo $row11['date_added']; ?></td>
                  <td class="py-4 align-middle"><?php echo $row11['total']; ?></td>
                  <td class="py-4 align-middle"><span class="badge p-2 text-uppercase badge-info"><?php if ($row11['ord_cancel_st']=='0') {
                     switch ($row11['order_status_id']) {
                    case '0':
                      echo "Pending";
                      break;
                    case '1';
                    echo "Accepted";
                    break;
                    case '2':
                      echo "Blocked";
                      break;
                    
                    default:
                      # code...
                      break;
                  }
                  } else { echo "Canceled";} ?></span></td>
                  <td class="py-4 align-middle"><a onclick="Cancel(<?php echo $row11['order_id']; ?>);" class="btn btn-outline-dark btn-sm" href="#">Cancel Order</a> &nbsp;&nbsp;
                    <a class="btn btn-outline-dark btn-sm" href="single-product.php?id=<?php echo $row11['product_id']; ?>">View Product</a></td>

                </tr>
                 <?php }} ?>
              </tbody>
            </table>

          </div>
          <!-- Customer Sidebar-->
         
          <!-- /Customer Sidebar-->
        </div>
      </div>
    </section>




    <!-- instagram start -->

   
    <!-- instagram end -->

    <script >

        function Cancel(id) {


   $.ajax({

             data :{id: id },

             url  :'inc/cnl.php', 

             type :'POST',

             success: function(data1)
             {
               
               alert('done');
                

                



               

             }

         });

          
        }

    </script>



<?php include"inc/footer.php"?>