<?php include"inc/header.php"?>



<link rel="stylesheet" type="text/css" href="assets/css/style.default.css">
<style >
  



</style>
              
<style type="text/css">


/*Checkboxes styles*/
input[type="checkbox"] { display: none; }

input[type="checkbox"] + label {
  display: inline-block;
  position: relative;

  font: 14px/20px 'Open Sans', Arial, sans-serif;
  color: #ddd;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
}

input[type="checkbox"] + label:last-child { margin-bottom: 0; }

input[type="checkbox"] + label:before {
  content: '';
  display: inline-block;
  width: 20px;
  height: 20px;
  border: 2px solid #000;
  position: absolute;
  left: 0;
  top: 0;
  opacity: .6;
  -webkit-transition: all .12s, border-color .08s;
  transition: all .12s, border-color .08s;
}

input[type="checkbox"]:checked + label:before {
  width: 10px;
  top: -5px;
  left: 5px;
  border-radius: 0;
  opacity: 1;
  border-top-color: transparent;
  border-left-color: transparent;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>


    <!-- breadcrumb start  -->


<script type="text/javascript">
  var $a=0;
function add_row(row)
{
$a=$a+1;
   $c=row;
  
 $rowno=$("#sub ").length;
 $rowno=$rowno+1;
 $("#sub  td:last").after("<div id='"+$rowno+"'><input style='width:200px;height:31px;border-radius:0px;' class= 'input' id= '"+$rowno+"'  name= 'file[]' type= 'file'  multiple ><a class='' value='DELETE' onclick=delete_row('"+$rowno+"') ><i class='fa fa-trash'></i></a></div>");
}
function delete_row(rowno)
{
 $('#'+rowno).remove();
}
</script>
    



    <!-- breadcrumb end  -->






<form action="inc/return.php" method="POST" enctype="multipart/form-data">
    <section>

      <div class="container">

        <div class="row">

          <div class="col-lg-12 col-xl-12">

         

              <div class="block-body">

                <!-- Invoice Address-->

                <div class="block-header">

                  <h6 class="text-uppercase text-center mb-0">Return Order</h6>

                </div>

                
                    <div class="cart-content margin-top-20">
                        <table  id="sub" class="table table-bordered table-responsive">
                            <thead>
                                 
                              <tr class="text-center">
                                <th scope="col">Productt</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quanity</th>
                               
                                <th scope="col">Select Reason</th>
                                <th scope="col">Upload Image</th>
                                
                                <th scope="col" > Images Proof</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php 
                              $r=1;
                          $sql="SELECT * FROM orders where order_id='".$_GET['id']."' ";
           $res = mysqli_query($conn ,$sql);
                                         if (mysqli_num_rows($res) > 0)
                                            {
                                              
                                                while ($row = mysqli_fetch_assoc($res))
                                                {
                                                    $sql1="SELECT * FROM product where id='".$row['product_id']."' ";
                                                    $res1 = mysqli_query($conn ,$sql1);
                                                    $row1 = mysqli_fetch_assoc($res1);

 
                                                  ?>

<input type="text" name="order_id" hidden value="<?php echo $row['order_id']; ?>">
                                                 <tr id="<?php echo $row['order_id']; ?>">
                                <th scope="row" class="d-flex">
                                    <div class="left">
                                        <img style=" border: 1px solid #ddd; border-radius: 4px; padding: 5px; width: 150px;" src="admin/assets/imggalaxy note 20 ultraimg.jpg" alt="">
                                    </div>
                                    <div class="right">
                                        <h6 class="name"><?php echo $row1['pro_name']; ?></h6>
                                        
                                    </div>
                                </th>
                                <td><a class="pr"><?php echo $row1['price']; ?></a></td>
                                <td><input id="qt" type="number" name="qt" min="1" onchange="chng(6,this.value)" oninput="this.value = Math.abs(this.value)" value="1">
                                </td>
                             
                               

                                <td>
                                  <select name="reason" class="custom-select-sm">
                                    <option selected>Select reason</option>
                                    <option value="Damaged">Damages</option>
                                    <option value="less product">Less Goods</option>
                                    <option value="random">Random</option>
                                  </select>
                                </td>
                                <td> <a onclick="add_row(1)" class=""><i class="fa fa-plus-circle" aria-hidden="true"></i></a> </td>

                              
                             
                              </tr>
                             
                            <?php }} ?>
                                                         </tbody>
                        </table>
                        
                    </div>
                </div>

                    
                

                  <!-- /Shipping Address-->

                </div>

              </div>

              <div class="form-group mt-3 text-center">

                <button class="btn btn-outline-dark" type="submit"><i class="fa fa-cloud" aria-hidden="true"></i>Return Item</button>

              </div>

          

              



          </div>

          <!-- Customer Sidebar-->

          

          <!-- /Customer Sidebar-->

        </div>

      </div>

    </section>
</form>



<?php include"inc/footer.php"?>