<?php include 'dbcon.php' ?>




          



<?php 
session_start();

if(isset($_POST['action1']))
{
  $sql="SELECT * from filter_sel where cat !='' ";
  if (isset($_POST['cat'])) {
     $cat=implode("','", $_POST['cat']);
    $_SESSION['cats']=$cat;
     
     $sql .="AND cat IN('".$cat."')";

  }
   $res = mysqli_query($conn ,$sql);
   
        if (mysqli_num_rows($res) > 0) {
          while ($row= mysqli_fetch_assoc($res)) 
          {
            ?>
            
  <button class="tablinks" onclick="flt(this.value);" value="<?php echo $row['name'] ?>" id="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></button>
 
  <?php }}
  else
  {
    echo "<h4> No Filter Found</h4>";
  }
}
else
{
  echo "Select Category";
}




   ?>

        
    

    