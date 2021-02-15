<?php include"inc/header.php" ?>
<?php include"dbcon.php" ?>
 <script >

  
function theFun(value) {
    

    $.ajax({
             data :{action: value},
             url  :"product.php", //php page URL where we post this data to view from database
             type :'POST',
             success: function(data){
                 $("#cot").html(data);
             }
         });
}

 
 
 

</script>
<script >
    function add11(val11)
    {
        $.ajax({
             data :{val: val11,
                     user: '2',
                     qt : 1           },
             url  :"add_cart.php", //php page URL where we post this data to view from database
             type :'POST',
             success: function(data){
                alert('done');
             }
         });

    }
</script>
    <!-- breadcrumb start  -->
   
    <!-- breadcrumb end  -->

    <!-- collection area start  -->
    <div class="collection-area margin-top-60">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-lg-8 col-5">
                           
                        </div>
                        <div class="col-lg-4 col-7">
                            <form action="#">
                                <select id ="ddl" name="ddl" onmousedown="this.value='';" onchange="theFun(this.value);" class="form-control sort-select">
                                    <option value="sell_count">Default sorting</option>
                                    <option value="sell_count">Sort by popularity</option>
                                    <option value="ratings">Sort by average rating</option>
                                    <option value="mod_date">Sort by latest</option>
                                    <option value="5">Sort by price: low to high</option>
                                    <option value="price">Sort by price: high to low</option>
                                </select>
                                <i class="fa fa-chevron-down"></i>
                            </form> 
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade in show active" id="one">
                            <div id="cot" class="row">
                                <?php 



  $sql3="SELECT * FROM product where catagory='".$_GET['cat']."' ORDER BY sell_count desc ";


                       
           $res3 = mysqli_query($conn ,$sql3);
                                         if (mysqli_num_rows($res3) > 0)
                                            {
                                               


                                                while ($row3= mysqli_fetch_assoc($res3))
                                                {
                                               
                                                     $a='';
                                                $b='';
                                                $c='';
                                                $d='';
                                                $e='';
switch ($row3['ratings']) {
    case '0':
        $a='-o';             
                                                $b='-o';
                                                $c='-o';
                                                $d='-o';
                                                $e='-o';
        break;
        case '1':
           $b='-o';
            $c='-o';
            $d='-o';
            $e='-o';
            break;
        case '2':
            $c='-o';
$d='-o';
$e='-o';
            break;

        case '3':
           $d='-o';
            $e='-o';                                    
            break;

        case '4':
            $e='-o';
            break;
    
    default:
        # code...
        break;
}

$sql1="SELECT * FROM catagory where id='".$row3['catagory']."' ";
           $res1 = mysqli_query($conn ,$sql1);
           $row1 = mysqli_fetch_assoc($res1);
     ?>  
                                <div  class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div  class="product-style-03 margin-top-40">
                                        <div  class="thumb">
                                            <img src="<?php $result = substr($row3['image'], 3); echo $result; ?>" alt="">
                                            <ul class="cart-action">
                                                <li><a onclick="add11(<?php echo $row3['id']; ?>);"><i class="icon-add-to-cat"></i></a></li>
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="content text-center">
                                            <span class="brand">Brand: <?php echo $row1['name']; ?></span>
                                            <ul class="justify-content-center margin-bottom-20">
                                                <li><a href="#"><i class="fa fa-star<?php echo $a; ?>"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star<?php echo $b; ?>"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star<?php echo $c; ?>"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star<?php echo $d; ?>"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star<?php echo $e; ?>"></i></a></li>
                                            </ul>
                                            <h6 class="title"><a href="single-product.php?id=<?php echo $row3['id']; ?>"><?php echo $row3['pro_name']; ?></a></h6>
                                            <div class="content-price d-flex align-self-center justify-content-center">
                                                <span class="new-price"><?php echo '₹'.$row3['price']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <?php } } ?>
                                 
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12 margin-top-20">
                    
                    <div class="widget categories-widget">
                        <div class="accordion-style-2" id="accordionExample1">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <p class="mb-0">
                                        <a href="#" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Categories</a>
                                    </p>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <form action="#">
                                            <?php 
                                             $sql3="SELECT * FROM catagory where cat_status=1 ";
           $res3 = mysqli_query($conn ,$sql3);
                                         if (mysqli_num_rows($res3) > 0)
                                            {
                                               


                                                while ($row3= mysqli_fetch_assoc($res3))
                                                {
                                                    ?>
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input">
                                              <label class="custom-control-label" for="customCheck"><?php echo $row3['name']; ?></label>
                                            </div>
                                            <?php }} ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget brand-widget">
                        <div class="accordion-style-2" id="accordionExample2">
                             
                            <div class="card">
                              
                                <div class="card-header" id="headingTwo">
                                    <p class="mb-0">
                                        <a href="#" role="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Product Brand</a>
                                    </p>
                                </div>
                                 <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample2">
                                    <div class="card-body">
                                   <?php 
                                             $sql3="SELECT * FROM product where product_status=1 ";
           $res3 = mysqli_query($conn ,$sql3);
                                         if (mysqli_num_rows($res3) > 0)
                                            {
                                               


                                                while ($row3= mysqli_fetch_assoc($res3))
                                                { ?>
                               
                                    
                                        <form action="#">
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input">
                                              <label class="custom-control-label" for="pcustomCheck"><?php echo $row3['pro_brand']; ?></label>
                                            </div>
                                            <?php }} ?>
                                        </form>
                                    </div>
                               
                                </div>

                            </div>
                       
                        </div>  
                    </div>
                    
                  
                   
                   
                    <div class="card-header" id="headingOne">
                                    <p class="mb-0">
                                        <a href="#" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Best Seller</a>
                                    </p>
                                </div>
                            <?php 
                         $sql3="SELECT * FROM product where product_status=1 ORDER BY sell_count desc limit 3";
           $res3 = mysqli_query($conn ,$sql3);
                                         if (mysqli_num_rows($res3) > 0)
                                            {
                                               


                                                while ($row3= mysqli_fetch_assoc($res3))
                                                { ?>
                            <div class="single-seller-content d-flex">
                                <div class="thumb">
                                    <img src="<?php $result = substr($row3['image'], 3); echo $result; ?>" alt="">
                                </div>
                                <div class="content">
                                    <h6><?php echo $row3['pro_name']; ?></h6>
                                    <span><?php echo '₹'.$row3['price']; ?></span>
                                </div>
                            </div>
                          <?php }}?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- collection area end  -->

    <!-- delivery area start  -->
    <div class="delivery-area padding-top-50">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <div class="single-delivery text-center">
                        <i class="icon-delivery-car"></i>
                        <h6>FREE SHIPPING, RETURN</h6>
                        <p>Free Shipping On All US Orders</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-delivery text-center">
                        <i class="icon-money-back"></i>
                        <h6>MONEY BACK GUARANTEE</h6>
                        <p>30 Days Money Back Guarantee</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-delivery text-center">
                        <i class="icon-phone-support"></i>
                        <h6>1-800-333-44-55</h6>
                        <p>24/7 Days Support</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- delivery area end  -->

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
<?php include"inc/footer.php"?>