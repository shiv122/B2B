<?php include 'dbcon.php'; ?>


<?php if(isset($_POST['action']))
{
  $sql="SELECT * from filter where sub_category !='' ";
  if (isset($_POST['subs'])) {
     $cat=implode("','", $_POST['subs']);

     $sql .="AND sub_category IN('".$cat."')";

  }
   $res = mysqli_query($conn ,$sql);
   $sub_id=[];
        if (mysqli_num_rows($res) > 0) {
$row= mysqli_fetch_assoc($res);

            
          while ($row= mysqli_fetch_assoc($res)) 
          {

            $sub_id[]=$row['id'];
 
            ?>
           
           
                                           <option value="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></option>
                                           

                                            <?php
                                          
          }
         
        
        }
        else {
        ?> <h3> NO RESULT </h3>  <?php
        }
}
else
{
 ?>
<h3>NO DATA</h3>
 <?php
}
?>