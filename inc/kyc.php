<?php include 'dbcon.php';  ?>
<?php
if (isset($_FILES['upload_file']['name'])) {
$doc=$_POST['doc'];
$gstin=$_POST['gstin'];
$path = $_FILES['upload_file']['name'];
for ($i=0; $i <=$path.length() ; $i++) { 
echo $gstin;
echo $doc;
}

}

// if (isset($_FILES['upload_file']['name'])) {
//     # code...

// $path = $_FILES['upload_file']['name'];

// $path_tmp = $_FILES['upload_file']['tmp_name'];

// $ext = pathinfo( $path, PATHINFO_EXTENSION );

// $file_name = basename( $path, '.' . $ext );

// $final_name =  $pro_name.'_'.$sku.'img'.'.'.$ext;

// move_uploaded_file( $path_tmp, 'assets/img/kyc/kyc'.$final_name );


// $f='assets/img/kyc/kyc'.$final_name;

// }
// else
// {
//     $f='';
// }

// $sql ="insert into";

// if (mysqli_query($conn, $sql)) 
// {
//     //   header("refresh:8;url= panel-page-products-create.php");
//     // include 'assets/success.php';
// }


?>