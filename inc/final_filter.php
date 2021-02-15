<?php include 'dbcon.php'; ?>
<?php 
session_start();

if (isset($_POST['action'])) {
$ss='';
	$sql="SELECT * FROM filter where id!=''";
	if (isset($_POST['material'])) {
		$mat=implode("','", $_POST['material']);
		$sql .="and material IN('".$mat."') ";

		}


		if (isset($_SESSION['subc'])) {
		$sub=implode("','", $_SESSION['subc']);
		$sql .="and sub_category IN('".$sub."') ";
	

		}
		

		if (isset($_POST['type'])) {
		$ty=implode("','", $_POST['type']);
		$sql .="and type IN('".$ty."') ";

		}
		if (isset($_POST['color'])) {
		$col=implode("','", $_POST['color']);
		$sql .="and color IN('".$col."') ";;

		}

		if (isset($_POST['finishing_type'])) {
		$finishing_type=implode("','", $_POST['finishing_type']);
		$sql .="and finishing_type IN('".$finishing_type."') ";

		}
		if (isset($_POST['size'])) {
		$size=implode("','", $_POST['size']);
		$sql .="and size IN('".$size."') ";

		}
		if (isset($_POST['gauge'])) {
		$gauge=implode("','", $_POST['gauge']);
		$sql .="and gauge IN('".$gauge."') ";

		}
		if (isset($_POST['weight'])) {
		$weight=implode("','", $_POST['weight']);
		$sql .="and weight IN('".$weight."') ";

		}
		if (isset($_POST['model_name'])) {
		$model_name=implode("','", $_POST['model_name']);
		$sql .="and model_name IN('".$model_name."') ";

		}
		if (isset($_POST['bidding'])) {
		$bidding=implode("','", $_POST['bidding']);
		$sql .="and bidding IN('".$bidding."') ";

		}
		if (isset($_POST['shape'])) {
		$shape=implode("','", $_POST['shape']);
		$sql .="and shape IN('".$shape."') ";

		}
		if (isset($_POST['sort'])) {
			
		if ($_POST['sort']=='5') {
			$ss=' ORDER BY '.$_POST['sort'].' ASC';
			
		}
		else{
			
		$ss=' ORDER BY '.$_POST['sort'].' DESC';
		
            }
		}
		




$prd=array();
 $res = mysqli_query($conn ,$sql);
   
        if (mysqli_num_rows($res) > 0) {

          while ($row= mysqli_fetch_assoc($res)) 
          {
array_push($prd,$row['product_id']);
}
$product=implode("','", (array)$prd);
$sql1="SELECT * from product where id IN('".$product."') AND product_status=1 $ss";

$res1 = mysqli_query($conn ,$sql1);
if (mysqli_num_rows($res1) > 0) {

          while ($row1= mysqli_fetch_assoc($res1)) 
          {


?>
<div  class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div  class="product-style-03 margin-top-40">
                                        <div  class="thumb">
                                            <img src="<?php $result = substr($row1['image'], 3); echo $result; ?>" alt="">
                                            <ul class="cart-action">
                                                <?php   if (isset($_SESSION['log_buyer'])) {
  ?>
                                                <li><a onclick="add11(<?php echo $row1['id']; ?>);"><i class="icon-add-to-cat"></i></a></li>
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                <?php }?>
                                            </ul>
                                        </div>
                                        <div class="content text-center">
                                            <span class="brand">Brand: <?php echo $row1['pro_brand']; ?></span>
                                            
                                            <h6 class="title"><a href="single-product.php?id=<?php echo $row1['id']; ?>"><?php echo $row1['pro_name']; ?></a></h6>
                                            <div class="content-price d-flex align-self-center justify-content-center">
                                             
                                                <span class="new-price">   <?php   if (isset($_SESSION['log_buyer'])) {
  ?><?php echo '₹'.$row1['price']; ?></span>
                                              <?php }
                                              else
                                              {
    echo "<a href='login.php'>Login Required</a>";
                                              } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
          	}
          }
else
      {
      	echo "NO PRODUCT FOUND";
      }
          
      }
      else
      {
      	echo "NO PRODUCT FOUND";
      }






}
else
{
	echo "No Filter Selected";
}


?>