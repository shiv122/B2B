<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Umang</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.css">



<style>
    .block-umang {
    padding: 15px;
    border-radius: 10px;
    background: #fff;
    transform: translate(0px, 15%);
    box-shadow: 0px 10px 16px #00000038;
}
.block-umang img {
    width: 142px;
    margin-bottom: 30px;
}
.login-pass {
    text-align: center;
    padding: 20px 0px 40px 0px;
}
.block-umang .form-group {
    margin-bottom: 8px;
}
.block-umang input {
    font-size: 12px;
    border-radius: 0;
    font-weight: 400;
}
button.btn.submit-pass {
    background: #473ec1;
    width: 100%;
    color: #fff;
    margin-top: 25px;

}
.block-umang h6 {
    font-size: 16px;
    font-weight: 600;
    color: #212529;
}
.login-pass span {
    font-size: 12px;
    font-weight: 400;
}
input.form-control.name-um {
    background: white url(assets/img/name-um.PNG) left no-repeat;
    padding-left: 45px;
}
input.form-control.business-um {
    background: white url(assets/img/business-um.PNG) left no-repeat;
    padding-left: 45px;
}
input.form-control.pin-um {
    background: white url(assets/img/pin-um.PNG) left no-repeat;
    padding-left: 45px;
}

</style>
   
    
</head>
<body class="light">

<section>
    <div class="container">

        <div class="row justify-content-center ">

          <div class="col-lg-4">

            <div class="block-umang">


              <div class="block-body">
                <div class="login-pass">
                <img src="assets/img/profile.PNG">
                  <h6> Enter Your OTP</h6>
                  <span>Register your Business on Umang</span>
                </div>
                
                <form action="inc/otp_vr.php" method="POST">

                  <div class="form-group">

                    <input class="form-control name-um" required="" name="otp"  placeholder="Insert Your OTP" type="text">

                  </div>

                  

                  <div class="form-group text-center">

                    <button class="btn submit-pass" type="submit"><i class="fa fa-sign-in" aria-hidden="true"></i> Log in</button>

                  </div>


                </form>

                

              </div>

            </div>

          </div>

 

        </div>

      </div>
</section>




</body>
</html>