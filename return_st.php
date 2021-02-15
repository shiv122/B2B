<?php include"inc/header.php"?>
<?php include 'dbcon.php' ?>
<link rel="stylesheet" type="text/css" href="assets/css/style.default.css">



<section class="hero">
      <div class="container">
        <!-- Breadcrumbs -->
        
        <!-- Hero Content-->
        <div class="hero-content pb-5 text-center">
          <h1 class="hero-heading">YOUR REQUEST</h1>
          <div class="row">   
            <div class="col-xl-12 "><p class="lead text-muted">Your retuen/cancel in one place.</p></div>
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
                  <th class="py-4 text-uppercase text-sm">Time</th>
                  
                  <th class="py-4 text-uppercase text-sm">Status</th>
               
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php 

  $sql="SELECT * FROM return_product where user='".$_SESSION['log_buyer']."' ";
                                         $res = mysqli_query($conn ,$sql);
                                         if (mysqli_num_rows($res) > 0)
                                            {
                                                while ($row = mysqli_fetch_assoc($res)){

                                                ?>

                  <th class="py-4 align-middle"><?php echo $row['order_id']; ?></th>
                  <td class="py-4 align-middle"><?php echo $row['up_time']; ?></td>
                
                  <td class="py-4 align-middle"><span class="badge p-2 text-uppercase badge-info"><?php switch ($row['status']) {
                    case '0':
                      echo "Pending";
                      break;
                    case '1';
                    echo "Accepted";
                    break;
                    case '2':
                      echo "Return Request";
                      break;
                    
                    default:
                      # code...
                      break;
                  } ?></span></td>
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