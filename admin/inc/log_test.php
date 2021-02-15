<?php include 'dbcon.php'; ?>
<?php 
session_start();
$no=$_POST['no'];

$_SESSION['otp_phone']=$no;
 


   $otp = rand(100000, 999999);
           


            $apiKey = urlencode('YWp+uOXtNUc-dtgbWUPgY9LFs6vckMHLxHWFpVs8ER');
            
            $numbers = urlencode($no);
            $sender  = urlencode('TXTLCL');
            $message = rawurlencode("Your OTP is: ".$otp);
           
            $data = 'apikey=' . $apiKey . '&numbers=' . $numbers . "&sender=" . $sender . "&message=" . $message;
         
            $ch = curl_init('https://api.textlocal.in/send/?'. $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);

            $success_message =  "Your OTP send on your Mobile No.";

$sql="INSERT into otp (phone,otp) values('$no','$otp')";
if (mysqli_query($conn, $sql)) 
{

      header("refresh:4;url= ../otp.php");
    include '../assets/success.php';
}

  
else
{
	echo mysqli_error($conn);
}
?>