<?php include 'dbcon.php'; 
session_start(); ?>


     <div class="card-body">
     	 <div class="custom-control custom-checkbox mb-3">
<?php

if (isset($_POST['action'])) {

$ar=array();
$nm=$_POST['name'];
$name = str_replace(' ', '_', $nm);


$sql="SELECT  * FROM filter  group by $name ";

$res = mysqli_query($conn ,$sql);
   
        if (mysqli_num_rows($res) > 0) {
          while ($row= mysqli_fetch_assoc($res)) 
          {
          	
          	 if(empty($row[$name]))
          	 { continue;}
          	
          	
?>
          	

                                            <label  class="checkumang"><?php echo $row[$name]; ?>
                                              <input type="checkbox" id="fl" name="fil" class=" fil"   value="<?php echo $row['id'];  ?>">
                                              <span class="checkmark"></span>
                                            </label>
  
                                    

                                       

	<?php }
	

}
else{
	echo "<h4> No Data Found </h4>";
}
}
else
{
	echo "nn";
}


?>
   </div> </div> 