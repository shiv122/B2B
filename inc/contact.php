<?php include 'dbcon.php'; ?>
<?php 
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$topic=$_POST['topic'];
$msg=$_POST['message'];

$sql="INSERT INTO contact (name,email,msg,topic,phone,date_time)
values ('$name','$email','$msg','$topic','$phone',CURRENT_TIMESTAMP)
";
if (mysqli_query($conn ,$sql)) {
	?>
 <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>DONE</h3>
                    </div>
                </div>
            </div>
	<?php
}
else
{
	?>
	 <div class="row">

                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>ERROR</h3>
                    </div>
                </div>
            </div>
	<?php
}




?>