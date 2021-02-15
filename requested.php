<?php include"inc/header.php"?>
<?php include"dbcon.php"?>
    <!-- breadcrumb start  -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.default.css">
  <style >
      
  </style> 
  <script >

       setInterval(function(){ 

        var $temp = $('#pr').html();
         filterData1.push($temp);
        
  
}, 5000);

        function get_filter_text1(text_id){



 var filterData1=[];

 $('#'+text_id+':checked').each(function()

 {

 filterData1.push($(this).val());

 });

 return filterData1;

}


  </script> 
    <!-- breadcrumb end  -->

    <!-- cart area start  -->
    <div class="cart-area margin-top-60">
        <div class="container">
            <div class="row">

                <div class="col-xl-9 col-lg-8">

                    <div class="block-header">
                  <h6 class="text-uppercase text-center mb-0">PRODUCT REQUEST</h6>
                </div>
                    <div class="cart-content margin-top-20">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                 
                              <tr class="text-center">

                              	
                              	<th scope="col">Image</th>
                              	<th scope="col">Id</th>
                                <th scope="col">Product</th>
                                <th scope="col">Name</th>
                                
                                <th scope="col">Message</th>
                                <th scope="col">Statue</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                          
<?php 
$sql="SELECT * from product_request where user_id='".$_SESSION['log_buyer']."'  ";
      $res = mysqli_query($conn ,$sql);
                                         if (mysqli_num_rows($res) > 0)
                                            {
                                                while ($row = mysqli_fetch_assoc($res))
                                                {


            $sql1="SELECT * FROM req_img where id='".$row['id']."'  limit 1";
           $res1 = mysqli_query($conn ,$sql1);
           $row1 = mysqli_fetch_assoc($res1)
                                             ?>
                                                 <tr>
                                <th scope="row" class="d-flex">
                                    <div class="left">
                                        <img style=" border: 1px solid #ddd; border-radius: 4px; padding: 5px; width: 150px;" src="<?php $result = substr($row1['img'], 3); echo $result; ?>" alt="">
                                    </div>
                                    
                                </th>
                                <td> <?php echo  $row['id']; ?> </td>
                                   <td> <?php echo  $row['product']; ?> </td>
                                     <td> <?php echo  $row['name']; ?> </td>
                                       <td> <?php echo  $row['msg']; ?> </td>
                                         <td>  <span class="badge p-2 text-uppercase badge-info"> <?php switch ($row['status']) {
                                         	case '0':
                                         		echo "Pending";
                                         		break;

                                         	case '1':
                                         		echo "Approved";
                                         		break;
                                         	
                                         	default:
                                         		# code...
                                         		break;
                                         } ?>  </span> </td>
                                
                              </tr>
                             <?php  }
                         } ?>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="block-header">
                  <h6 class="text-uppercase text-center mb-0">Total Amount</h6>
                </div>
                    <div class="summary margin-top-20">
                        
                      
                           
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart area end  -->

    <!-- instagram start -->
    
    <!-- instagram end -->





<?php include"inc/footer.php"?>