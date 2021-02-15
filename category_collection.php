<?php include"inc/header.php" ?>
<?php include"dbcon.php" ;
 ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   <style type="text/css">
    .modal-header .close {
    padding: 0;
    margin: 0;
}
.modal-dialog.modal-lg {
    max-width: 99%;
}


.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: auto;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 11px 11px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
  border-bottom: 1px solid #d8d7d7;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #fff;
}
label.checkumang {
    border-bottom: 1px solid #eee;
    padding-bottom: 13px;
}

/* Style the tab content */
.tabcontent {

float: left;

padding: 0px 12px;


width: 65%;

border-left: none;

height: auto;

}

input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 20px;
  width: 20px;
border: 1px solid #c7c7c7;
    border-radius: 4px;
}


/* When the checkbox is checked, add a blue background */
 input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
 input:checked ~ .checkmark:after {
  display: block;
}
.umang-responciv{
display: flex;
}
.tabcontent{
position: absolute;
right: 1%;
top: 5%;
}
/* Style the checkmark/indicator */
 .checkmark:after {
  left: 7px;
  top: 3px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
.checkumang {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 14px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
div#Filter3 {
    padding: 14px;
}
.modal-body {
  padding: 1rem 4rem !important;
}
.modal-footer button.btn.btn-default {
    width: 100%;
}
.modal-footer {
    padding: 01rem 4rem !important;
}
.modal-footer button.btn.btn-default {
    width: 100%;
    background-color: #2196f3;
    color: #fff;
}


</style>
  

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

  
function theFun(value) {
    

  window.x=value;

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



  $sql3="SELECT * FROM product where product_status=1 and catagory='".$_GET['cat']."' ORDER BY sell_count desc ";


                       
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
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
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
  ?><?php echo '₹'.$row3['price']; ?></span>
                                              <?php }
                                              else
                                              {
    echo "<a href='login.php'>Login Required</a>";
                                              } ?>
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