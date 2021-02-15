<?php include 'dbcon.php'; ?>
<?php
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$p_name=$_POST['p_name'];
$msg=$_POST['msg'];


$pathc=array();

$pathc=$_FILES['file']['name'];

$path_tmpc=array();

$path_tmpc = $_FILES['file']['tmp_name'];

$user=$_SESSION['log_buyer'];


$sql="INSERT into product_request (name, email, phone, msg, user_id,product)
values ('$name','$email','$phone','$msg','$user','$p_name')
";

if (mysqli_query($conn ,$sql)) {


$sq="SELECT * from product_request order by id DESC limit 1";
$re = mysqli_query($conn ,$sq);
$row1 = mysqli_fetch_assoc($re);




for($i=0;$i<=count($pathc);$i++)

 {

 

if ($i==count($pathc)) {

  

   header("Location: ../return_st.php");

      break;

}





 $ext1 = pathinfo( $pathc[$i], PATHINFO_EXTENSION );



 $file_name1 = basename( $pathc[$i], '.' . $ext1 );

 $a=rand(100,999);
  $b=rand(1000,9999);

 $final_name1 =  $a.'img'.$i.'req'.$b.'.'.$ext1;



 move_uploaded_file( $path_tmpc[$i], '../assets/img/request/'.$final_name1 );





 $f1='../assets/img/request/'.$final_name1;









  $sqlw="INSERT into req_img (id,img)

   values ('".$row1['id']."','$f1')";





    if( mysqli_query($conn ,$sqlw)){



 }

 }



  }

  else

  {

    echo ("error".mysqli_error($conn));

  }







?>