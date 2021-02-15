<?php include 'dbcon.php'; ?>

<div  class="col-md-12 " style="column-count: 2;-webkit-columns: 2;  -moz-columns: 2;">
<?php
if (isset($_POST['action'])) 
{
	$cat=$_POST['cat'];
	$sql="SELECT * from filter_sel where cat=$cat";
	$res = mysqli_query($conn ,$sql);
   
        if (mysqli_num_rows($res) > 0) {
          while ($row= mysqli_fetch_assoc($res)) 
          { ?>
          	<div class="mb-6">

          						<div class="inpbind">
                                <label for="validationCustom02"><?php echo $row['name']; ?></label>
                                <input  type="text" name="<?php $str = str_replace(' ', '_', $row['name']); echo $str; ?>"  class="form-control" id="" placeholder="<?php echo $row['name']; ?>"
                                       value=" " >
                                   </div>
                            </div>
                            <?php
          }
      }
}



?>
</div>