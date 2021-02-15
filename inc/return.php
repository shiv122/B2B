<?php include 'dbcon.php'; ?>

<?php 

session_start();

$orderId=$_POST['order_id'];

$reason=$_POST['reason'];

$qt=$_POST['qt'];

date_default_timezone_set('Asia/Kolkata');      
$date=date("Y/m/d h:i:sa");
$i=0;

$pathc=array();

$pathc=$_FILES['file']['name'];

$path_tmpc=array();

$path_tmpc = $_FILES['file']['tmp_name'];

$user=$_SESSION['log_buyer'];







 $sql="INSERT into return_product (order_id,reason,quantity,user,up_time)

  values ('$orderId','$reason','$qt','$user','$date')";



 if (mysqli_query($conn ,$sql)) {







for($i=0;$i<=count($pathc);$i++)

 {

 

if ($i==count($pathc)) {

  

   header("Location: ../return_st.php");

      break;

}





 $ext1 = pathinfo( $pathc[$i], PATHINFO_EXTENSION );



 $file_name1 = basename( $pathc[$i], '.' . $ext1 );

 $a=rand(100,999);

 $final_name1 =  $a.'img'.$i.'.'.$ext1;



 move_uploaded_file( $path_tmpc[$i], '../assets/img/return/'.$final_name1 );





 $f1='../assets/img/return/'.$final_name1;









  $sqlw="INSERT into return_img (order_id,img,user,up_time)

   values ('$orderId','$f1','$user','$date')";





    if( mysqli_query($conn ,$sqlw)){



 }

 }



  }

  else

  {

    echo ("error".mysqli_error($conn));

  }



?>