<?php



        // $phone = '8174900367';
        // $_SESSION['phone1'] = '8174900367';
        // $otp = rand(100000, 999999);

        // $statement = $pdo->prepare("SELECT * FROM tbl_customer WHERE cust_phone=?");

        // $statement->execute(array($_POST['phone']));

        // $total = $statement->rowCount();

        // $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        // foreach($result as $row) {

        //     $cust_phone = $row['cust_phone'];
          

      


           $phone =  9170001140;
            $apiKey = urlencode('YWp+uOXtNUc-dtgbWUPgY9LFs6vckMHLxHWFpVs8ER');
            $otp=' 9170001141 ';
            $numbers = urlencode($phone);
            $sender  = urlencode('TXTLCL');
            $message = rawurlencode("For more Information contact ".$otp);
           
            $data = 'apikey=' . $apiKey . '&numbers=' . $numbers . "&sender=" . $sender . "&message=" . $message;
         
            $ch = curl_init('https://api.textlocal.in/send/?'. $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);

            $success_message =  "Your OTP send on your Mobile No.";
          //header("location: ".BASE_URL."dashboard.php");
  

         
        

?>