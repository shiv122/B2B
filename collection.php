
<?php include"inc/header.php" ?>
<?php include"dbcon.php" ;
 ?>
 <link rel="stylesheet" type="text/css" href="assets/css/style.default.css">
 <link rel="stylesheet" type="text/css" href="assets/css/product-filter.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


  

 <script >



$(document).ready(function(){



$(".cat").click(function(){



  



   var category1 = get_filter_text1('cat1');


   

   $.ajax({

             data :{action1:category1,

             cat:   category1 },

             url  :'inc/filter2.php', 

             type :'POST',

             success: function(data1)
             {
               
               $("#tt").html(data1);
                

                



               

             }

         });



});



    

    function get_filter_text1(text_id){



 var filterData1=[];

 $('#'+text_id+':checked').each(function()

 {

 filterData1.push($(this).val());

 });

 return filterData1;

}

});



</script>

<script >
  

$(document).ready(function(){



$(".cat").click(function(){



 



   var subc = get_filter_text2('cat1');
  


   

   $.ajax({

             data :{

             sub:   subc },

             url  :'sub_cat.php', 

             type :'POST',

             success: function(data2)
             {
               
               $("#sub").html(data2);
                

                



               

             }

         });



});



    

    function get_filter_text2(text_id1){



 var filterData12=[];

 $('#'+text_id1+':checked').each(function()

 {

 filterData12.push($(this).val());

 });

 return filterData12;

}

});
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
                
             }
         });

    }
</script>
 <script >

  
function theFun(value) {
    

  window.x=value;

}

 
 
 

</script>




<script >
    function add11(val11)
    {
      
        $.ajax({
             data :{val: val11,
                     user: <?php echo $_SESSION['log_buyer']; ?>,
                     qt : 1           },
             url  :"add_cart.php", //php page URL where we post this data to view from database
             type :'POST',
             success: function(data){
               
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
                            <div class="col-lg-4 col-7">
                            <form action="#">
                               <button type="button" style="margin-top: 20px" class="btn filterbutton"  data-toggle="modal" data-target="#myModal">Filter</button>

                                 
                            </form> 
                        </div>
                        </div>
                        <div class="col-lg-4 col-7">
                            <form action="#">
                              
                                <select id ="ddl" name="ddl" onmousedown="this.value='';" onchange="theFun(this.value);" class="form-control sort-select fil">
                                    <option value="">Default sorting</option>
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



  $sql3="SELECT * FROM product where product_status=1 ORDER BY sell_count desc ";


                       
           $res3 = mysqli_query($conn ,$sql3);
                                         if (mysqli_num_rows($res3) > 0)
                                            {
                                               


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
           $row1 = mysqli_fetch_assoc($res1);
     ?>  
                                <div  class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div  class="product-style-03 margin-top-40">
                                        <div  class="thumb">
                                            <img src="<?php $result = substr($row3['image'], 3); echo $result; ?>" alt="">
                                            <ul class="cart-action">
                                                <?php   if (isset($_SESSION['log_buyer'])) {
  ?>
                                                <li><a onclick="add11(<?php echo $row3['id']; ?>);"><i class="icon-add-to-cat"></i></a></li>
                                                <li><a onclick="add2(<?php echo $row3['id']; ?>);"><i class="icon-heart"></i></a></li>
                                                <?php }?>
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
                                             
                                                <span class="new-price">   <?php   if (isset($_SESSION['log_buyer'])) {
  ?><?php echo '₹'.$row3['price']; ?>
                                              <?php }
                                              else
                                              {
    echo "<a href='login.php'>Login Required</a>";
                                              } ?>
                                            </span>
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

                <div class="container">

  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div  class="modal-body">
            

<div id="tt">
  
</div>
   


        </div>

  </div>

</div>
</div>
</div>    

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

                                             $sql31="SELECT * FROM catagory where cat_status=1 ";

           $res31 = mysqli_query($conn ,$sql31);

                                         if (mysqli_num_rows($res31) > 0)

                                            {

                                               





                                                while ($row31= mysqli_fetch_assoc($res31))

                                                {

                                                    ?>

                                            <div class="custom-control custom-checkbox mb-3">

                                            <label class="checkumang"><?php echo $row31['name']; ?>
                                              <input type="checkbox" id="cat1" name="fii" class=" cat"   value="<?php echo $row31['id']; ?>">
                                              <span class="checkmark"></span>
                                            </label>
  
                                    

                                            </div>

                                            <?php }} ?>

                                        </form>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>






                  <div id="sub" ></div>
                  

                    

                  

                   

                   

                    <div class="card-header">

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
<a href="single-product.php?id=<?php echo $row3['id']; ?>">
                                    <img  src="<?php $result = substr($row3['image'], 3); echo $result; ?>" alt="">
</a>
                                </div>

                                <div class="content">

                                    <h6 ><?php echo $row3['pro_name']; ?></h6>

                                    <span>
</span><?php if (isset($_SESSION['log_buyer'])) {
  # code...
 ?>
                                      <?php echo '₹'.$row3['price']; 
                                    }
                                    else
                                    {
                                          echo "<a href='login.php'>Login Required</a>";
                                    } ?>

                                </div>

                            </div>

                          <?php }}?>

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
 
    <!-- instagram end -->
<script >
    function flt(name)
    {
        $.ajax({

             data :{action:name,

             name:   name},

             url  :'inc/select_fil.php', 

             type :'POST',

             success: function(data2)
             {
               
               $("#fl").html(data2);
                

                



               

             }

         });
    }
</script>


<?php include"inc/footer.php"?>