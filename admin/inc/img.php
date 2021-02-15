<?php
$i=0;
$path=$_FILES['file1']['name'];
$path_tmp = $_FILES['file1']['tmp_name'];

for($i=0;$i<count($path);$i++)
 {
 


$ext = pathinfo( $path[$i], PATHINFO_EXTENSION );

$file_name = basename( $path[$i], '.' . $ext );

$final_name =  'img'.$i.'.'.$ext;

move_uploaded_file( $path_tmp[$i], '../inc/'.$final_name );


$f='../inc/'.$final_name;
  }

?>