<?php 
include 'dbcon.php'; ?>
<style >
	a#srch ul{
background-color: #fff;
list-style: none;
width: 90%;
position:absolute;
top: 80%;
border-radius: 4px;
padding: 0px;
}
a#srch ul li{
padding: 7px 30px;
border-bottom: 1px solid #f5f2f2ad;}
a#srch ul li:nth-last-child(1){
border: none;
}
a#srch ul li:hover{
background: #ff8e78;
color: #fff;}
</style>
<ul>
<?php

$val=$_POST['nm1'];
$my_data=$val;
$sql="SELECT * FROM product WHERE (pro_name LIKE '%$my_data%' or pro_brand like '%$my_data%' or pro_details like '%$my_data%') and product_status=1 ORDER BY id LIMIT 5";
$res3 = mysqli_query($conn ,$sql);
if (mysqli_query($conn, $sql)) {
  while ($row3= mysqli_fetch_assoc($res3))
                                                {
                                                          ?>
                                                          <a href="single-product.php?id=<?php echo$row3['id']; ?>" >
<li>
	<?php echo $row3['pro_name']; ?>
</li>
</a>
                                                          <?php
                                                }
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
?>
</ul>