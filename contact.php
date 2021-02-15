<?php include"inc/header.php"?>

    <!-- breadcrumb start  -->
   
    <!-- breadcrumb end  -->

   
    
    <!-- contact area start  -->
    <div class="contact-info margin-top-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>CONTACT US FOR ANY QUARY</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-contact-box">
                        <div class="icon">
                            <i class="icon-call-header"></i>
                        </div>
                        <a href="tel:+12345678910">+123456 78910</a><br>
                        <a href="tel:+12345678911">+123456 78911</a><br>
                        <span>Mobile</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-contact-box">
                        <div class="icon">
                            <i class="fa fa-envelope-open"></i>
                        </div>
                        <a href="#">umang@email.com</a><br>
                        <a href="#">support@codingeek.com</a><br>
                        <span>Email</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-contact-box">
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <span>
                            125/A, Lucknow <br>UP, India<br> Address
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end  -->

    <!-- contact form start  -->
    <div class="contact-form text-center padding-top-80 padding-bottom-80">
        <div id="con" class="container">
            <div class="row">
                <div class="col-md-5">
                    <p class="umang-contectinfo">
                        Umang Customer Care can be reached at the number <a href="#">1234 5678 90.
</a> <br><br>
If you are reaching out regarding your recent order or need help then we request to write to us at <a href="#">help@umang.com</a> with details of your order. Umang is network centric B2B platform aimed to bring traders, and manufacturers across India on to a single platform.<br><br>

Also, our platform is not just for buying. You can buy/sell/trade on Umang using our website and app as well. If you are a first time buyer at Umang and wish to know more about our platform then you can visit our FAQ page to get answers of common questions.
                    </p>
                </div>
                <div  class="col-md-7">
                 <form>
                    
                        <div class="form-row">
                          <div class="form-group col-md-6 field">
                            <input required type="text" class="form-control" id="name" placeholder="Name*">
                          </div>
                          <div class="form-group col-md-6 field">
                            <input required type="number" class="form-control" id="phone" placeholder="Phone*">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6 field">
                            <input required type="email" class="form-control" id="email" placeholder="Email*">
                          </div>
                          <div class="form-group col-md-6 field">
                            <input required type="text" class="form-control" id="topic" placeholder="Topic">
                          </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 field">
                              <textarea required name="message" id="message" rows="8" placeholder="Message"></textarea>
                            </div>
                        </div>
                    
                    
                        <button  id="bt" onsubmit ="contact();" class="btn btn-contact">Send Message</button>
                   
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contact form end  -->

    <!-- instagram start -->
   <script >
       function contact()
        {
            
        var name=  $("#name").val();
        var phone=  $("#phone").val();
        var email=  $("#email").val();
        var topic=  $("#topic").val();
        var message=  $.trim($("#message").val());

        $.ajax({
             data :{ 
 name:name,
phone:phone,
email:email,
topic:topic,
message:message    },
             url  :"inc/contact.php", 
             type :'POST',
             success: function(data){
                $('#con').html(data);
             }
         });

        }
   </script>

   
    <!-- instagram end -->

<?php include"inc/footer.php"?>