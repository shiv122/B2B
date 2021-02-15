<?php
include 'dbcon.php';
?>


<?php 

 if ($_POST['action']=='5') {

     $sql3="SELECT * FROM product  where product_status=1  ";
     if (isset($_POST['cat'])) {
         $sql3 .= "AND catagory='".$_POST['cat']."' ";
   
     }
     $sql3 .="ORDER BY price asc ";
 }
 else{ 
$am=$_POST['action'];

  $sql3="SELECT * FROM product where product_status=1 ";
 if (isset($_POST['cat'])) {
         $sql3 .= "AND catagory='".$_POST['cat']."' ";
         $sql3 .="ORDER BY $am desc ";
          
         
     }
     else
     {
         $sql3 .="ORDER BY $am desc ";
     }
 }

                       
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
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="product-style-03 margin-top-40">
                                        <div class="thumb">
                                            <img src="<?php $result = substr($row3['image'], 3); echo $result; ?>" alt="">
                                            <ul class="cart-action">
                                            <?php    if (isset($_SESSION['log_buyer'])) {
  ?>
                                                <li><a href="#"><i class="icon-add-to-cat"></i></a></li>
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
                                                <span class="new-price">
                                               <?php     if (isset($_SESSION['log_buyer'])) {
  ?><?php echo '₹'.$row3['price']; 
}
else
{
        echo "<a href='login.php'>Login Required</a>";
}?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <?php } } ?>