<?php include 'dbcon.php'; ?>





<?php 

session_start();

$fname=$_POST['fname'];

$sname=$_POST['sname'];

$email=$_POST['email'];

$street=$_POST['street'];

$city=$_POST['city'];

$state=$_POST['state'];

$zip=$_POST['zip'];

$phone=$_POST['phone'];

$user=$_SESSION['log_buyer'];



if (isset($_POST['street2'])) {



	$street2=$_POST['street2'];

	 

}

else

{

	$street2='';

}

if (isset($_POST['city2'])) {



	$city2=$_POST['city2'];

	 

}

else

{

	$city2='';

}



if (isset($_POST['state2'])) {



	$state2=$_POST['state2'];

	 

}

else

{

	$state2='';

}

if (isset($_POST['zip2'])) {



	$zip2=$_POST['zip2'];

	 

}

else

{

	$zip2='';

}

if (isset($_POST['phone2'])) {



	$phone2=$_POST['phone2'];

	 

}

else

{

	$phone2='';

}



 $a=0; $emp=0;

           $sql="SELECT * FROM cart where user='".$_SESSION['log_buyer']."' ";

           $res = mysqli_query($conn ,$sql);

                                         if (mysqli_num_rows($res) > 0)

                                            {

                                                $emp=1;

                                                while ($row = mysqli_fetch_assoc($res))

                                                {

                                                	  $sql11="SELECT * FROM product where id='".$row['product']."' ";

           $res11 = mysqli_query($conn ,$sql11);

           $row11 = mysqli_fetch_assoc($res11);

           $final=$row['quantity']*$row11['price'] ;

           $in=rand(1,51 );

           $ni=rand(1,51);

           $a_z = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

           $rand_letter = $a_z[$in];

           $rand_letter1 = $a_z[$ni];

           

           $invo=$rand_letter.mb_substr($row11['pro_name'], 0, 3).$row['id'].$row11['id'].$rand_letter; 



$sql1="INSERT into orders (invoice_no,customer_id,firstname,lastname,email,telephone,shipping_street,shipping_street2,shipping_city,shipping_city2,shipping_state,shipping_state2,zip,zip2,total,date_added,product_id,product_quantity)

values('$invo','$user','$fname','$sname','$email','$phone','$street','$state2','$city','$city2','state','$state2','$zip','$zip2','$final',CURRENT_TIMESTAMP,'".$row['product']."','".$row['quantity']."');

";



                                         if (mysqli_query($conn ,$sql1))

                                            {

                                            	$sl="DELETE from cart where id='".$row['id']."'";

                                            	 

                                            	 if (mysqli_query($conn ,$sl))

                                            	 {

                                            

                                                header("Location: ../index.php");

                                        }

                                        else{

                                        	echo ("error". mysqli_error($conn));

                                        }

                                              }



                                              else{

                                              	echo ("error". mysqli_error($conn));

                                              }











}

}









?>