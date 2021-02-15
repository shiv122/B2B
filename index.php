<?php
include 'dbcon.php';
?>


                       
<?php include"inc/header.php"?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>


                            
                        
<script type="text/javascript">
  $( document ).ready(function() {

new ClipboardJS('.btn');

});
</script>
<link rel="stylesheet" type="text/css" href="assets/css/style.default.css">
<script >

    function add1(val1)
    {
        $.ajax({
             data :{val: val1,
                     user: <?php echo $_SESSION['log_buyer']; ?>,
                     qt : 1           },
             url  :"add_cart.php", //php page URL where we post this data to view from database
             type :'POST',
             success: function(data){
                alert('done');
             }
         });

    }
</script>

<script >
    function add2(val2)
    {
        $.ajax({
             data :{val1: val2,
                     user: <?php echo $_SESSION['log_buyer']; ?>,
                     qt : 1           },
             url  :"inc/add_wish.php", //php page URL where we post this data to view from database
             type :'POST',
             success: function(data){
                alert('done');
             }
         });

    }
</script>
    <!-- banner start -->

   
    <div class="banner-style-01">                
        <div class="banner-slider">
            <?php 
           $sql="SELECT * FROM banner where status='1' ";
           $res = mysqli_query($conn ,$sql);
                                         if (mysqli_num_rows($res) > 0)
                                            {
                                                while ($row = mysqli_fetch_assoc($res))
                                                {

                                            
                                             ?>
                <div class="banner__bg d-flex align-items-center"  style="background: url('<?php  $result = substr($row['img'], 3); echo $result; ?>') no-repeat center center/cover">
                    <div class="container-fluid px-5">
                        <div class="banner-content">
                           
                                                    
                            <div class="margin-top-50 pl-1">
                                <div class="btn-wrapper" data-animation-in="fadeInDown">
                                    <a class="btn btn-white" href="category_collection.php?cat=">GET COLLECTION <i class="icon-arrow-buttom"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php  } } ?>
        </div>
    </div>
    <!-- banner end -->

    <!-- collection banner start  -->
    <div class="collection-banner">
        <div class="container">
            <div class="row">
                 <?php 
           $sql1="SELECT * FROM catagory where banner_st='1'  limit 3";
           $res1 = mysqli_query($conn ,$sql1);
                                         if (mysqli_num_rows($res1) > 0)
                                            {
                                                while ($row1 = mysqli_fetch_assoc($res1))
                                                {

                                            
                                             ?>
                <div class="col-lg-4">
                    <div class="collection-style-01 margin-top-20">
                        <div class="thumb">
                            <img src="<?php $result = substr($row1['img'], 3); echo $result; ?>" alt="">
                            <div class="content">
                                <h3><?php echo $row1['name']; ?></h3>
                                <h6>Collection</h6>
                                <a href="category_collection.php?cat=<?php echo $row1['id']; ?>">view collection</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }}?>
            </div>
        </div>
    </div>
    <!-- collection area end  -->

    <!-- arrivals area start  -->
    <div class="arrivals-area margin-top-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>NEW ARRIVALS</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                 <?php 
           $sql3="SELECT * FROM product where product_status=1 ORDER BY mod_date desc limit 6";
           $res3 = mysqli_query($conn ,$sql3);
            $an=0;
            $bn=8;
             $a='';
                                                $b='';
                                                $c='';
                                                $d='';
                                                $e='';
                                         if (mysqli_num_rows($res3) > 0)
                                            {
                                                while ($row3 = mysqli_fetch_assoc($res3))
                                                {





 $an=0;
 $bn=0;
 $bn1=0;


$a='';
                                                $b='';
                                                $c='';
                                                $d='';
                                                $e='';
 $sql31="SELECT * FROM review where product_id='".$row3['id']."' ";
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
      
                                            
                                            
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-01 margin-top-40">
                        <div class="thumb">
                            <div class="thumb-slider">
                                <a href="single-product.php?id=<?php echo $row3['id']; ?>"><img src="<?php $result = substr($row3['image'], 3); echo $result; ?>" alt=""></a>
                                
                            </div>
                            <ul class="cart-action">





                                  <?php
if (isset($_SESSION['log_buyer'])) {
  ?>
                                <li ><a  ><div onclick="add1(<?php echo $row3['id']; ?>);"><i class="icon-add-to-cat"></i> </div></a></li>
                                <li><a onclick="add2(<?php echo $row3['id']; ?>);" ><i class="icon-heart"></i></a></li>
                              <?php } ?>
                              <li>
                                 <button  type="button" class="btn  btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#c<?php echo $row3['id']; ?>"><i class="fa fa-share-alt"></i></button> 
</li>                         
                            </ul>
                        </div>
                        <div class="content text-center">
                           <?php 
           $sql1="SELECT * FROM catagory where id='".$row3['catagory']."' ";
           $res1 = mysqli_query($conn ,$sql1);
           $row1 = mysqli_fetch_assoc($res1)
                    
                                 ?>
                            <div class="content-bottom">
                              <input style="opacity: 0"   type="text" id="c<?php echo $row3['id']; ?>" class="form-control" value="http://localhost/task2/single-product.php?id=<?php echo $row3['id']; ?>">
                                <span class="brand">BRAND: <?php echo $row1['name']; ?></span>
                                <ul class="justify-content-center margin-bottom-20">
                                    <li><a href="#"><i class="fa fa-star<?php echo $a; ?>"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star<?php echo $b; ?>"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star<?php echo $c; ?>"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star<?php echo $d; ?>"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star<?php echo $e; ?>"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="#"><?php echo $row3['pro_name'];  ?></a></h6>
                                <div class="content-price d-flex align-self-center justify-content-center">
                                    <span class="new-price">                      <?php
if (isset($_SESSION['log_buyer'])) {
   echo '₹'.$row3['price']; 
}
else
{
  echo "<a href='login.php'> Login requred </a>";
}
     


    ?>
  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }} ?>
            </div>
            
        </div>
    </div>
    <!-- arrivals area end  -->

    <!-- sale area start  -->
    <div class="sale-area padding-top-80">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-12">
                    <div class="sales-content" style="background: url('assets/img/others/sales.png') no-repeat center center/cover;">
                        <h2>SPRING SALE</h2>
                        <h6>30% off on selected items</h6>
                        <div class="btn-wrapper">
                            <a href="#" class="btn btn-sales">SHOP THE SALE <i class="icon-arrow-buttom"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sale area end  -->

    <!-- tranding area start  -->
    <div class="tranding-area margin-top-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>TRANDING NOW</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-pills tranding-tab">
                        <li class="mt-3"><a data-toggle="pill" href="#one" class="active">BEST SELLER</a></li>
                        <li class="mt-3"><a data-toggle="pill" href="#two">TOP RATE</a></li>
                        <li class="mt-3"><a data-toggle="pill" href="#three">TOP SALE</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade in show active" id="one">
                    <div class="row">

                        <?php 
                         $sql3="SELECT * FROM product where product_status=1 ORDER BY sell_count desc  limit 6";
           $res3 = mysqli_query($conn ,$sql3);
                                         if (mysqli_num_rows($res3) > 0)
                                            {
                                               $an=0;
                                               $bn=0;


                                                while ($row3= mysqli_fetch_assoc($res3))
                                                {
                                                     $an=0;
                                               $bn=0;
                                               $bn1=0;
                                                    $a='';
                                                $b='';
                                                $c='';
                                                $d='';
                                                $e='';
 $sql31="SELECT * FROM review where product_id='".$row3['id']."' ";
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
        $a='';
                                                $b='';
                                                $c='';
                                                $d='';
                                                $e='';
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
                                              $sql1="SELECT * FROM catagory where id='".$row3['catagory']."' ";
           $res1 = mysqli_query($conn ,$sql1);
           $row1 = mysqli_fetch_assoc($res1)
                                             ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-style-02 margin-top-40">
                                <div class="thumb">
                                    <a href="single-product.php?id=<?php echo $row3['id']; ?>"><img src="<?php $result = substr($row3['image'], 3); echo $result; ?>" alt=""></a>
                                    <span class="out">SOLD OUT</span>
                                    <ul class="cart-action-02"> <li>
                                <div class="mt-3"> <button  type="button" class="btn btn-info btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#c<?php echo $row3['id']; ?>"><i class="fa fa-share-alt"></i></button>  </div>
</li>
                                                            <?php
if (isset($_SESSION['log_buyer'])) {
  ?>
                                        <li><a onclick="add2(<?php echo $row3['id']; ?>);"><i class="icon-heart"></i></a></li>
                                        <li><a href="single-product.php?id=<?php echo $row3['id']; ?>"><i class="icon-quick-view"></i></a></li>
                                      <?php } ?>
                                    </ul>
                                </div>
                                <div class="content text-left">
                                    <span class="brand">BRAND: <?php echo $row1['name'];  ?></span>
                                    <ul class="justify-content-start margin-bottom-10">

                                        <li><a href="#"><i class="fa fa-star<?php echo $a; ?>"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star<?php echo $b; ?>"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star<?php echo $c; ?>"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star<?php echo $d; ?>"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star<?php echo $e; ?>"></i></a></li>
                                        <input style="opacity: 0" type="text" id="c<?php echo $row3['id']; ?>" class="form-control" value="http://localhost/task2/single-product.php?id=<?php echo $row3['id']; ?>">
                                    </ul>
                                    <h6 class="title"><a href="#"><?php echo $row3['pro_name']; ?></a></h6>
                                    <div class="d-flex position-relative addcartstyle2">
                                        <?php
if (isset($_SESSION['log_buyer'])) {
  ?>
                                        <div onclick="add1(<?php echo $row3['id']; ?>);"  class="content-hover-cart"><a><i class="icon-add-to-cat"></i> Add to cart</a></div>
                                      <?php }?>
                                        <div  class="content-cart"><a  ><i class="icon-add-to-cat"></i></a></div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                           
                                            <span class="new-price">
                                                                    <?php
if (isset($_SESSION['log_buyer'])) {
  ?><?php echo '₹'.$row3['price']; 
}
else
{
  echo "<a href='login.php'> Login Required </a>";
}
  ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <?php }} ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="two">
                    <div class="row">

                        <?php 
                         $sql3="SELECT * FROM product where product_status=1 ORDER BY ratings desc limit 6 ";
           $res3 = mysqli_query($conn ,$sql3);
                                         if (mysqli_num_rows($res3) > 0)
                                            {
                                                $an=0;
                                               $bn=0;


                                                while ($row3= mysqli_fetch_assoc($res3))
                                                {
                                                     $an=0;
                                               $bn=0;
                                               $bn1=0;
                                                    $a='';
                                                $b='';
                                                $c='';
                                                $d='';
                                                $e='';
 $sql31="SELECT * FROM review where product_id='".$row3['id']."' ";
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
        $a='';
                                                $b='';
                                                $c='';
                                                $d='';
                                                $e='';
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
                                              $sql1="SELECT * FROM catagory where id='".$row3['catagory']."' ";
           $res1 = mysqli_query($conn ,$sql1);
           $row1 = mysqli_fetch_assoc($res1)
           ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-style-02 margin-top-40">
                                <div class="thumb">
                                    <img src="<?php $result = substr($row3['image'], 3); echo $result; ?>" alt="">
                                    <ul class="cart-action-02">
                                       <li>
                                <div class="mt-3"> <button  type="button" class="btn btn-info btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#c<?php echo $row3['id']; ?>"><i class="fa fa-share-alt"></i></button>  </div>
</li>
                                                            <?php
if (isset($_SESSION['log_buyer'])) {
  ?>
                                        <li><a onclick="add2(<?php echo $row3['id']; ?>);"><i class="icon-heart"></i></a></li>
                                        <li><a href="single-product.php?id=<?php echo $row3['id']; ?>"><i class="icon-quick-view"></i></a></li>
                                      <?php } ?>
                                    </ul>
                                </div>
                                <div class="content text-left">
                                    <span class="brand">BRAND: <?php echo $row1['name']; ?></span>
                                    <ul class="justify-content-start margin-bottom-10">
                                        <li><a href="#"><i class="fa fa-star<?php echo $a; ?>"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star<?php echo $b; ?>"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star<?php echo $c; ?>"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star<?php echo $d; ?>"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star<?php echo $e; ?>"></i></a></li>
                                        <li>
                                        <input style="opacity: 0" type="text" id="c<?php echo $row3['id']; ?>" class="form-control" value="http://localhost/task2/single-product.php?id=<?php echo $row3['id']; ?>"></li>
                                    </ul>
                                    <h6 class="title"><a href="#"><?php echo $row3['pro_name']; ?></a></h6>
                                    <div class="d-flex position-relative">
                                        <?php
if (isset($_SESSION['log_buyer'])) {
  ?>
                                        <div class="content-hover-cart"><a onclick="add1(<?php echo $row3['id']; ?>);" ><i class="icon-add-to-cat"></i> Add to cart</a></div>
                                      <?php }?>
                                        <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                           
                                            <span class="new-price">                      <?php
if (isset($_SESSION['log_buyer'])) {
  ?><?php echo '₹ '.$row3['price']; 
  }
  else
  {
    echo "<a href='login.php' > Login Required </a>";
  } ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }} ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="three">
                    <div class="row">
                              <?php 
                         $sql3="SELECT * FROM product where product_status=1 ORDER BY flash_deal desc limit 6";
           $res3 = mysqli_query($conn ,$sql3);
                                         if (mysqli_num_rows($res3) > 0)
                                            {
                                               
                                               $an=0;
                                               $bn=0;
                                               $bn1=0;

                                                while ($row3= mysqli_fetch_assoc($res3))
                                                {
                                                    $df=$row3['flash_deal'];
                                                     if ($row3['flash_deal']>0) {

            $df=$row3['flash_deal'];
               # code...
           } $an=0;
                                               $bn=0;
                                               $bn1=0;
                                                     $a='';
                                                $b='';
                                                $c='';
                                                $d='';
                                                $e='';
 $sql31="SELECT * FROM review where product_id='".$row3['id']."' ";
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
            $a='';
                                                $b='';
                                                $c='';
                                                $d='';
                                                $e='';
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
$e='-o';}
                                              $sql1="SELECT * FROM catagory where id='".$row3['catagory']."' ";
           $res1 = mysqli_query($conn ,$sql1);
           $row1 = mysqli_fetch_assoc($res1)

          
           ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-style-02 margin-top-40">
                                <div class="thumb">
                                    <img src="<?php $result = substr($row3['image'], 3); echo $result; ?>" alt="">
                                    <span class="sale"><?php echo $df.'%'; ?></span>
                                    <ul class="cart-action-02">
                                       

<li>
                                <div class="mt-3"> <button  type="button" class="btn btn-info btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#c<?php echo $row3['id']; ?>"><i class="fa fa-share-alt"></i></button>  </div>
</li>
                                                            <?php
if (isset($_SESSION['log_buyer'])) {
  ?>
                                        <li><a onclick="add2(<?php echo $row3['id']; ?>);"><i class="icon-heart"></i></a></li>
                                        <li><a href="single-product.php?id=<?php echo $row3['id']; ?>"><i class="icon-quick-view"></i></a></li>
                                      <?php } ?>
                                    </ul>
                                </div>
                                <div class="content text-left">
                                    <span class="brand">BRAND: <?php echo $row1['name']; ?></span>
                                    <ul class="justify-content-start margin-bottom-10">
                                        <li><a href="#"><i class="fa fa-star<?php echo $a; ?>"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star<?php echo $b; ?>"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star<?php echo $c; ?>"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star<?php echo $d; ?>"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star<?php echo $e; ?>"></i></a></li>
                                        <input style="opacity: 0" type="text" id="c<?php echo $row3['id']; ?>" class="form-control" value="http://localhost/task2/single-product.php?id=<?php echo $row3['id']; ?>">
                                    </ul>
                                    <h6 class="title"><a ><?php echo $row3['pro_name']; ?></a></h6>
                                    <div class="d-flex position-relative">
                                        <?php
if (isset($_SESSION['log_buyer'])) {
  ?>
                                        <div onclick="add1(<?php echo $row3['id']; ?>);" class="content-hover-cart"><a h><i class="icon-add-to-cat"></i> Add to cart</a></div>
                                      <?php } ?>
                                        <div class="content-cart"><a ><i class="icon-add-to-cat"></i></a></div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            
                                            <span class="new-price">
                                                                    <?php
if (isset($_SESSION['log_buyer'])) {
  ?>
  <?php echo '₹'.$row3['price'];
  }
  else{
    echo "<a href='login.php > Login Required </a>'";
  } ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }} ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tranding area end  -->

    <!-- collection section start  -->
    <div class="collection-section padding-top-70 padding-bottom-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center margin-bottom-40">
                        <h3>COLLECTION</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="collection-slider">
    <?php 
                         $sql3="SELECT * FROM catagory  where cat_status=1 limit 4 ";
           $res3 = mysqli_query($conn ,$sql3);
                                         if (mysqli_num_rows($res3) > 0)
                                            {
                                               


                                                while ($row3= mysqli_fetch_assoc($res3))
                                                { ?>

                        <div class="collection-item">
                            <div class="thumb">
                                <img src="<?php $result = substr($row3['img'], 3); echo $result; ?>" alt="">
                                <div class="thumb-content">
                                    <h2><?php echo $row3['name']; ?> </h2>
                                    <div class="btn-wrapper">
                                        <a href="category_collection.php?cat=<?php echo $row1['id']; ?>" class="btn btn-white">SHOP NOW <i class="icon-arrow-buttom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <?php }} ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- collection section end  -->

  
  

    <!-- article area start  -->
  
    <!-- article area end  -->

    <!-- brand-area start -->
    <div class="brand-area padding-top-30 padding-bottom-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-slider">
                        <div class="brant-item">
                            <img src="assets/img/brand/brand1.png" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="assets/img/brand/brand2.png" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="assets/img/brand/brand3.png" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="assets/img/brand/brand4.png" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="assets/img/brand/brand5.png" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="assets/img/brand/brand6.png" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="assets/img/brand/brand1.png" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="assets/img/brand/brand2.png" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="assets/img/brand/brand3.png" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="assets/img/brand/brand4.png" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="assets/img/brand/brand5.png" alt="brand">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area end -->

    <!-- contact area start  -->
    <div class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-content text-center padding-top-80 padding-bottom-80 bg-image">
                        <h2>Keep Connected</h2>
                        <h6>Get updates by subscribe our weekly newsletter</h6>
                        <form>
                            <div class="form-row align-items-center justify-content-center">
                              <div class="col-10 col-sm-6">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="icon-email-subscribe"></i></div>
                                  </div>
                                  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter Address">
                                  <div class="subscribe-text"> <a href="#">subscribe</a></div>
                                </div>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end  -->

    <!-- delivery area start  -->
    <div class="delivery-area padding-top-80">
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

 <script>
function myFunction(element) {
  alert(element);
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
}
</script>

<?php include"inc/footer.php"?>