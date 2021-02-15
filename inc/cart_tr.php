<?php include 'dbcon.php'; ?>


<?php $a=0; $emp=0;
           $sql="SELECT * FROM cart where user='".$_SESSION['log_buyer']."' ";
           $res = mysqli_query($conn ,$sql);
                                         if (mysqli_num_rows($res) > 0)
                                            {
                                                $emp=1;
                                                while ($row = mysqli_fetch_assoc($res))
                                                {

            $sql1="SELECT * FROM product where id='".$row['product']."' ";
           $res1 = mysqli_query($conn ,$sql1);
           $row1 = mysqli_fetch_assoc($res1)
                                             ?>
                                                 <tr>
                                <th scope="row" class="d-flex">
                                    <div class="left">
                                        <img style=" border: 1px solid #ddd; border-radius: 4px; padding: 5px; width: 150px;" src="<?php $result = substr($row1['image'], 3); echo $result; ?>" alt="">
                                    </div>
                                    <div class="right">
                                        <h6 class="name"><?php echo $row1['pro_name']; ?></h6>
                                        <h6 class="title">Size: <span class="values">XL</span></h6>
                                        <h6 class="title">Color:  <span class="values">Brown</span></h6>
                                    </div>
                                </th>
                                <td><?php echo  $row1['price']; ?></td>
                                <td><input   type="number" min="0" onchange="chng(<?php echo $row['id']; ?>,this.value)" oninput="this.value = Math.abs(this.value)"  value="<?php echo  $row['quantity']; ?>">
                                </td>
                                <td><?php $final=$row['quantity']*$row1['price'] ;echo $final; 
                                             
                                             
                                             $a= $a+$final;
                                             ?></td>
                                <td>
                                    <div class="action">
                                        <a href="product_del.php?id=<?php echo $row['id'] ?>"><i class="fa fa-times"></i></a>
                                        
                                    </div>
                                </td>
                                
                              </tr>
                             <?php  }
                         } ?>
                         <script >
 function chng(val,val1)  {
   var us= <?php echo  $_SESSION['log_buyer']; ?> ;
  
    $.ajax({
           data :{id: val,
                  value:val1,
                us : us},
           url  :"inc/update_val.php", //php page URL where we post this data to view from database
           type :'POST',
           success: function(data){
             
           }
       });
}
</script>