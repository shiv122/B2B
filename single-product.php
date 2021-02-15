<?php include"inc/header.php"?>
<?php include"dbcon.php"?>
<link rel="stylesheet" type="text/css" href="assets/css/single-product.css">
<style >
  *{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top: -9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;

}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}

</style>
<script >
  function add(val)
  {
     var a= document.getElementById("qty_input").value;
$.ajax({
             data :{val: val,
                     user: <?php echo $_SESSION['log_buyer']; ?>,
                     qt : a           },
             url  :"add_cart.php", //php page URL where we post this data to view from database
             type :'POST',
             success: function(data){
                alert('done');
             }
         });
  }
</script>
<script >
  function theCart(value) {
    

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

<?php 
 $sql3="SELECT * FROM product where id='".$_GET['id']."' ";
           $res3 = mysqli_query($conn ,$sql3);
                                        
            $row = mysqli_fetch_assoc($res3);
            $an=0;
            $bn=0;
             $a='';
                                                $b='';
                                                $c='';
                                                $d='';
                                                $e='';


 $sql31="SELECT * FROM review where product_id='".$_GET['id']."' ";
           $res31 = mysqli_query($conn ,$sql31);
                 $dm= mysqli_num_rows($res31)   ;                   
           if (mysqli_num_rows($res31) > 0)
                                            {
                                                while ($row31 = mysqli_fetch_assoc($res31))
                                                {
                                                  $cnt=  $row31['r_star'];
                                                  $an=$an+$cnt;
                                                
                                                }
                                                $bn=$an/$dm;

                                            }
                                             
                                            
                                            //echo $bn;
                                          

switch ($bn) {
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
        case '5':
            # code...
            break;
    
    default:
         $a='-o';             
                                                $b='-o';
                                                $c='-o';
                                                $d='-o';
                                                $e='-o';
        break;
}
    
           $sql31="SELECT * FROM seller_buyer where id='".$row['seller']."' ";
           $res31 = mysqli_query($conn ,$sql31);
                                        
            $row11 = mysqli_fetch_assoc($res31);



 $sqlm="SELECT * FROM filter where product_id='".$row['id']."' ";
           $resm = mysqli_query($conn ,$sqlm);
                                        
            $rowm = mysqli_fetch_assoc($resm);

               ?>
                                               
    <div class="collection-area margin-top-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="slider-tabfor margin-top-20">
                                <div class="single-item">
                                    <img src="<?php $result = substr($row['image'], 3); echo $result; ?>" alt="">
                                </div>
                                
                            </div>
                            <div class="slider-tabnav">
                                <div class="single-item">
                                    <div class="img">
                                        <img src="<?php $result = substr($row['image'], 3); echo $result; ?>" alt="">
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="content-part margin-top-20">
                                <h3 class="product-title"><?php echo $row['pro_name']; ?></h3>
                               <?php if (isset($_SESSION['log_buyer'])) {
  ?>
                                <p class="price"><?php echo $row['price']; ?></p>
                            <?php } 
                           else{
                               echo "<a href='login.php'><p>Login Required</p></a> ";
                           } ?>
                                <span class="rating ml-0">
                                    <i class="fa fa-star<?php echo $a; ?>"></i>
                                    <i class="fa fa-star<?php echo $b; ?>"></i>
                                    <i class="fa fa-star<?php echo $c; ?>"></i>
                                    <i class="fa fa-star<?php echo $d; ?>"></i>
                                    <i class="fa fa-star<?php echo $e; ?>"></i>
                                </span>
                                <span class="review-text"><?php  echo $dm; ?> reviews</span>
                                <p class="specifications">SKU: <b><?php echo $row['sku']; ?></b></p>
                                <p class="specifications">VENDOR: <b><?php echo $row11['name']; ?></b></p>

                                <?php if ($row['available_product']>0) { $pd='In Stock';
                                        $cl='green';
                                    
                                }
                                else
                                {
                                    $pd='Out of  Stock';
                                        $cl='red';
                                }
                                       
                                    
                                        
                                      
                                    
                                   
                                 ?>
                                <p class="specifications">AVAILABILITY:  <b class="color-<?php echo $cl; ?>"><?php echo $pd; ?></b></p>
                                <div class="d-flex">
                                    <span class="specifications">SIZE: <?php echo $rowm['size']; ?>  </span>
                                   
                                </div>
                                <div class="d-flex">
                                    <span class="specifications">COLOR: <span style="background-color: <?php echo $rowm['color']; ?> " class="dot"></span> </span>
                                    
                                </div>
                                <p class="specifications">MATERIAL: <?php echo $rowm['material']; ?> </p>
                                <div class="btn-wrapper d-flex">
                                    <div class="input-group">
                                        <div class="input-group-prepend align-self-center">
                                            <a class="btn btn-sm" id="minus-btn"><i class="fa fa-minus"></i></a>
                                        </div>
                                        <input type="number" id="qty_input" class="form-control text-right form-control-sm" value="1" min="1">
                                        <div class="input-group-prepend align-self-center">
                                            <a class="btn btn-sm" id="plus-btn"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>

                                    <div class="add-to-cart">
                                     <?php   if (isset($_SESSION['log_buyer'])) {
  ?>
                                        <a onclick="add(<?php echo $row['id'];?>)"><i class="icon-add-to-cat"></i> Add to cart</a>
                                    <?php }
                                    else
                                        {
                                            echo "<a href='login.php'>Login Required</a>";
                                        } ?>
                                    </div>
                                </div>
                                <?php $sql1="SELECT * FROM catagory where id='".$row['catagory']."' ";
           $res1= mysqli_query($conn ,$sql1);
                                        
            $row1= mysqli_fetch_assoc($res1);?>
                                <p class="specifications">CATEGORY: <b><?php echo $row1['name']; ?></b></p>
                                <p class="specifications">TAG: <b><?php echo $row['tags']; ?>t</b></p>
                                <div class="d-flex">
                                    <span class="specifications">SHARE:</span>
                                    <ul class="social-list">
                                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-tab">
                                <ul class="nav nav-pills">
                                  <li><a data-toggle="pill" href="#home" class="active">DESCRIPTION</a></li>
                                  <li><a data-toggle="pill" href="#menu1">ADITIONAL INFORMATION</a></li>
                                  
                                  <li><a data-toggle="pill" href="#menu3">WHY BUY FROM US</a></li>
                                  <li><a data-toggle="pill" href="#menu4">REVIEWS</a></li>
                                  <li><a data-toggle="pill" href="#menu5">Product Enquiry</a></li>
                                </ul>
                                
                                <div class="tab-content">
                                  <div id="home" class="tab-pane fade in show active">


                                    <?php echo $row['pro_details']; ?>

                                    
                                  </div>
                                  <div id="menu1" class="tab-pane fade">
                                    <?php echo $row['adl_info']; ?>

                                   
                                  </div>
                                 
                                  <div id="menu3" class="tab-pane fade">
                                    <p>Silver, metallic-blue and metallic-lavender silk-blend jacquard, graphic pattern, pleated ruffle along collar, long sleeves with button-fastening cuffs, buckle-fastening silver skinny belt, large pleated rosettes at hips. Dry clean. Zip and hook fastening at back. 100% silk. Specialist clean</p>

                                   
                                  </div>
                                  <div id="menu4" class="tab-pane fade">
                                
  <div class="card-body">
          <div class="row">
                  <div class="col-md-6">
                 <?php 
                                        $sql="SELECT * FROM review where product_id='".$row['id']."' limit 2";
                                         $res = mysqli_query($conn ,$sql);
                                         if (mysqli_num_rows($res) > 0)
                                            {
                                                while ($row1 = mysqli_fetch_assoc($res)){


 $a='';
                                                $b='';
                                                $c='';
                                                $d='';
                                                $e='';
switch ($row1['r_star']) {
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
    
            



                                           $sqls="SELECT * FROM seller_buyer where id='".$row1['user_id']."'";
                                         $ress = mysqli_query($conn ,$sqls);
                                         $rows12 = mysqli_fetch_assoc($ress)
                                                    ?>

              
              <div class="col-md-6 thumb">

                  <img src="<?php $result = substr($rows12['image'], 3); echo $result; ?>" alt="" class="img img-rounded img-fluid"/>
                  
              </div>
              <div class="col-md-11">
                  
                      <p class="float-left" ><strong><?php echo $rows12['name']; ?></strong>
                        
                                <i class="fa fa-star<?php echo $a; ?>"></i>
                                    <i class="fa fa-star<?php echo $b; ?>"></i>
                                    <i class="fa fa-star<?php echo $c; ?>"></i>
                                    <i class="fa fa-star<?php echo $d; ?>"></i>
                                    <i class="fa fa-star<?php echo $e; ?>"></i>
                              
                      
                      </p>
                 
                 <div class="clearfix"></div>
                  <p><?php echo $row1['review'];  ?></p>
                 
              </div>

  <?php }}?></div>
                                       <?php
if (isset($_SESSION['log_buyer'])) {
  ?>
<div class="col-md-6">

    <div  class="widget seller-widget">
                        <h4 class="widget-title">Leave Review</h4>
                      <div class="form-group">
                        
<div  class="rate">

    <input  type="radio"  id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1"  title="text">1 star</label>
  </div>
  <textarea class="form-control rounded-0" id="rev" name="rev" rows="10"></textarea>
  <br>
    
<button onclick="review();" type="button" class="btn btn-contact float-right ">Post</button>

</div>
                </div>
</div><?php } ?>
          </div>
           
      </div>

                                              
                                  </div>
                                  <div id="menu5" class="tab-pane fade ">
                                    <div class="row enquiry-p">
                                      <div class="col-md-6">
                               <label>Name</label><br>
                              <input type="text" id="name" class="form-control" name="name"></div>
                              <div class="col-md-6">
                              <label>Email</label><br>
                              <input type="email" id="email" class="form-control" name="email"></div>
                            </div>
                            <label>Message</label><br>
                             <textarea class="form-control rounded-0" id="eq" name="eq" rows="10"></textarea>
                                                 <br>
    
                            <button onclick="enq();" type="button" class="btn btn-contact float-right ">Send</button>


                                  </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                     
                <br>
                    <div class="widget delivery-widget margin-top-20">
                        <div class="single-delivery-item">
                            <div class="d-flex">
                                <i class="icon-delivery-car"></i>
                                <h4>Delivery</h4>
                            </div>
                            <span>Free shipping on orders over $89.</span>
                        </div>
                        <div class="single-delivery-item">
                            <div class="d-flex">
                                <i class="icon-phone-support"></i>
                                <h4>Support 24/7</h4>
                            </div>
                            <span>Contact us 24 hours a day, 7 days a week.</span>
                        </div>
                        <div class="single-delivery-item">
                            <div class="d-flex">
                                <i class="icon-money-back"></i>
                                <h4>Return</h4>
                            </div>
                            <span>Simply return it within 30 days for an exchange.</span>
                        </div>
                    </div>
                    <div class="widget checkout-widget">
                        <h4 class="widget-title">GUARANTED SAFE CHECKOUT</h4>
                        <ul class="checkout-list">
                            <li><a href="#"><img src="assets/img/payment/p1.png" alt=""></a></li>
                            <li><a href="#"><img src="assets/img/payment/p2.png" alt=""></a></li>
                            <li><a href="#"><img src="assets/img/payment/p3.png" alt=""></a></li>
                            <li><a href="#"><img src="assets/img/payment/p4.png" alt=""></a></li>
                            <li><a href="#"><img src="assets/img/payment/p5.png" alt=""></a></li>
                            <li><a href="#"><img src="assets/img/payment/p6.png" alt=""></a></li>
                            <li><a href="#"><img src="assets/img/payment/p7.png" alt=""></a></li>
                        </ul>
                    </div>
                    
                 
                </div>
            </div>
        </div>
    </div>
    <!-- collection area end  -->

    <!-- related product start  -->
    <div class="related-product-section">
        <div class="container">
            <div class="related-product">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title">
                            <h2>RELATED PRODUCTS</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="related-slider">
                          <?php 
                                        $sqlq="SELECT * FROM product where (catagory='".$row['catagory']."') and (product_status=1) ";
                                         $resq = mysqli_query($conn ,$sqlq);
                                         if (mysqli_num_rows($resq) > 0)
                                            {
                                              

                                                while ($row1q = mysqli_fetch_assoc($resq)){ 











 $an=0;
 $bn=0;
 $bn1=0;


$a='';
                                                $b='';
                                                $c='';
                                                $d='';
                                                $e='';
 $sql31="SELECT * FROM review where product_id='".$row1q['id']."' ";
$res31 = mysqli_query($conn ,$sql31);
$dm= mysqli_num_rows($res31)   ;                   
 if (mysqli_num_rows($res31) > 0)
 {
                  while ($row31 = mysqli_fetch_assoc($res31))
                  {
                        $cnt=  $row31['r_star'];
                        $an=$an+$cnt;
                      
                      }
                      $bn1=$an/$dm;
                      $bn=(int)$bn1;
                      switch ($bn) {
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
         case '5':
             # code...
             break;
    default:
        $a='-o';             
                                                $b='-o';
                                                $c='-o';
                                                $d='-o';
                                                $e='-o';
        break;
    }


                  }
                  else
                  {
                     $an=0;
 $bn=0;
 $bn1=0;
                    $a='-o';             
$b='-o';
$c='-o';
$d='-o';
$e='-o';
                  }
                  
                                            




                        
                                        
                                                  ?>
                            <div class="product-style-03 margin-top-30">
                                <div class="thumb text-center">
                                   <a href="single-product.php?id=<?php echo $row1q['id']; ?>"> <img src="<?php $result = substr($row1q['image'], 3); echo $result; ?>" alt=""></a>
                                    
                                    
                                </div>
                                <div class="content text-center">
                                    
                                    <ul class="justify-content-center margin-bottom-20">
                                        <li><a href="#"><i class="fa fa-star<?php echo $a; ?>"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star<?php echo $b; ?>"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star<?php echo $c; ?>"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star<?php echo $d; ?>"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star<?php echo $e; ?>"></i></a></li>
                                    </ul>
                                    <h6 class="title"><a href="single-product.php?id=<?php echo $row1q['id']; ?>"><?php echo $row1q['pro_name']; ?></a></h6>
                                    <span class="price">
                                                                               <?php
if (isset($_SESSION['log_buyer'])) {
  ?><?php echo $row1q['price']; }
  else{
    echo "<a href='login.php'>Login Required</a>";
  } ?></span>
                                </div>
                            </div>
                            <?php }}?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- related product end  -->

    <!-- instagram start -->

    <!-- instagram end -->
    <script >
      function review()
      {
      var a=  $('input[name="rate"]:checked').val();
        var b=  $.trim($("textarea").val());
      $.ajax({
             data :{star: a,
                     review: b,
                     product : <?php echo $row['id'];?> , 
                     from: '2'         },
             url  :"inc/review.php", //php page URL where we post this data to view from database
             type :'POST',
             success: function(data){
                alert('done');
             }
         });

      }
    </script>
      <script >
        function enq()
        {
            
        var a=  $("#name").val();
        var email=  $("#email").val();
        var b=  $.trim($("#eq").val());
        $.ajax({
             data :{name : a,
              email:email,
                     enquiry: b,
                     product : <?php echo $row['id'];?> , 
                     from:  <?php echo $_SESSION['log_buyer'];?>         },
             url  :"inc/enquiry.php", 
             type :'POST',
             success: function(data){
                $('#menu5').text('Enquiry Sent');
             }
         });

        }
    </script>

<?php include"inc/footer.php"?>