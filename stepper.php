<?php include"inc/header.php"?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="assets/css/stepper.css">
<script src="assets/js/stepper.js"></script>
<script type="text/javascript">
   function getDoc(element) {
    $('#doc').val(element);
}
</script>
<style type="text/css">
    

.file-input {
  display: inline-block;
  text-align: left;
  background: #f5f5f5;
  padding: 16px;
  width: 450px;
  position: relative;
  border-radius: 3px;
}

.file-input > [type='file'] {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  z-index: 10;
  cursor: pointer;
}

.file-input > .button {
  display: inline-block;
  cursor: pointer;
  background: #eee;
  padding: 8px 16px;
  border-radius: 2px;
  margin-right: 8px;
}

.file-input:hover > .button {
  background: dodgerblue;
  color: white;
}

.file-input > .label {
  color: #333;
  white-space: nowrap;
  opacity: .3;
}

.file-input.-chosen > .label {
  opacity: 1;
}
</style>

<div class="container">

    <div class="stepwizard">

        <div class="stepwizard-row setup-panel">

            <div class="stepwizard-step col-xs-3"> 

                <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>

                
            </div>

            <div class="stepwizard-step col-xs-3"> 

                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>

               
            </div>

            <div class="stepwizard-step col-xs-3"> 

                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>

                
            </div>

            <div class="stepwizard-step col-xs-3 last-childstep"> 

                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>

               
            </div>

        </div>

    </div>

    

    <form action="inc/kyc.php" method="POST" role="form" enctype="multipart/form-data">

        <div class="panel panel-primary setup-content" id="step-1">

            <div class="panel-body">

                <div class="choose-doc">
                    <ul>

<input type="text" id="doc" hidden name="doc">
                        <li value="GST Certificate" onclick="myFunction();getDoc('GST Certificate');"><a href="#">
                            <div class="nextBtn">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <h5>GST Certificate<span>INSTANT VERIFICATION</span></h5>
                                <p>Get verified in just 2 minutes</p>
                            </div>
                            </a>
                        </li>
                        <li value="Shop & Establishment License" onclick="myFunction1();getDoc('Shop & Establishment License');"><a href="#">
                            <div class="nextBtn">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <h5>Shop & Establishment License</h5>
                                
                            </div>
                            </a>
                        </li>
                        <li value="Udhyog Aadhaar" onclick="myFunction2();getDoc('Udhyog Aadhaar');"><a href="#">
                            <div class="nextBtn">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <h5>Udhyog Aadhaar</h5>
                                
                            </div>
                            </a>
                        </li>
                        <li value="Trade Certificate / License" onclick="myFunction3();getDoc('Trade Certificate / License');"><a href="#">
                            <div class="nextBtn">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <h5>Trade Certificate / License</h5>
                                
                            </div>
                            </a>
                        </li>
                    
                        <li value="Drug License"  onclick="myFunction5();getDoc(Drug License);"><a href="#">
                            <div class="nextBtn">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <h5>Drug License</h5>
                                
                            </div>
                            </a>
                        </li>
                        <li value="Current Account Cheque" onclick="myFunction6();getDoc('Current Account Cheque');"><a href="#">
                            <div class="nextBtn">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <h5>Current Account Cheque</h5>
                                
                            </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>

            </div>

        </div>

        

        <div class="panel panel-primary setup-content" id="step-2">

            

            <div class="panel-body">

                <div class="upload-doc" id="panel" style="display: none;">
                    <ul>
                        <li ><div class="uplod-discription">
                            <label class="useradio">GST REG 06 (Registration Certificate)
                              
                              <input type="radio" checked="checked" name="radio">
                              <span class="checkmark"></span>
                            </label>
                            <div class="content-upload">
                            <img class="image" id="gst" src="assets/img/bnxq30myrc1vbw0repxo.png">
                             <div class="image_preview0"></div>
                            <div class="cont-upl-umang" >
                            <h6>Certificate must show</h6>
                            <ul>
                                <li>Registration Number </li>
                                <li>Legal Name </li>
                                <li>Trade Name</li>
                                
                            </ul>
                            <div class='file-input'>
 <input type="file" id="upload_file0" name=" upload_file[]" onchange="preview_image0();" multiple/>
  <span class='button'>Choose</span> 
</div>
                            </div>
                            
                            </div>
                        </li>
                        <li><div class="uplod-discription">
                            <label class="useradio">GST REG 25 (Provisional Registration Certificate)
                              <input type="radio" name="radio">
                              <span class="checkmark"></span>
                            </label>
                            <div class="content-upload">
                              <img class="image" id="gst25" src="assets/img/bnxq30myrc1vbw0repxo.png">
                             <div class="image_preview1"></div>
                            <div class="cont-upl-umang" >
                            <h6>Certificate must show</h6>
                            <ul>
                                <li>Registration Number </li>
                                <li>Legal Name </li>
                                <li>Trade Name</li>
                                
                            </ul>
                          <div class='file-input'>
 <input type="file" id="upload_file1" name=" upload_file[]" onchange="preview_image1();" multiple/>
  <span class='button'>Choose</span>
</div>
                
                            </div>
                            
                            </div>
                        </div>
                        </li>
                    </ul>
                </div>


                <div id="panel1" style="display: none;">
                <h4>Upload Shop & Establishment license</h4>
                <div class="panel-body secondstep">
                    
                    <span>Examples of accepted establishment document</span>

                <div class="show-uploadimg">
                    
                      <img class="image" id="estab" src="assets/img/bnxq30myrc1vbw0repxo.png">
                             <div class="image_preview2"></div>
                </div>
                
                <span>Important note: Expired documents will not be accepted, check expiry date before uploading the document</span>
                <br>
              <div class='file-input'>
 <input type="file" id="upload_file2" name=" upload_file[]" onchange="preview_image2();" multiple/>
  <span class='button'>Choose</span>
</div>

                </div>
                </div>


                <div id="panel2" style="display: none;">
                <h4>Upload Udhyog Aadhaar</h4>
                <div class="panel-body secondstep">
                    
                    <span>Example of accepted udhyog aadhar document</span>

                <div class="show-uploadimg">
                    
                      <img class="image" id="udhy" src="assets/img/bnxq30myrc1vbw0repxo.png">
                             <div class="image_preview3"></div>
                </div>
                
                <span>Important note: Expired documents will not be accepted, check expiry date before uploading the document</span>
                <br>
                <div class="form-group step2upload">

                    

                  <div class='file-input'>
 <input type="file" id="upload_file3" name=" upload_file[]" onchange="preview_image3();" multiple/>
  <span class='button'>Choose</span>
</div>

                </div>

                </div>
                </div>


                <div id="panel3" style="display: none;">
                <h4>Upload Trade Certificate</h4>
                <div class="panel-body secondstep">
                    
                    <span>Example of accepted trade certificate</span>

                <div class="show-uploadimg">
                    
                      <img class="image extraimg" id="trade" src="assets/img/bnxq30myrc1vbw0repxo.png">
                             <div class="image_preview4"></div>
                </div>
                
                <span>Important note: Expired documents will not be accepted, check expiry date before uploading the document</span>
                <br>
                <div class="form-group step2upload">

                    

              <div class='file-input'>
 <input type="file" id="upload_file4" name=" upload_file[]" onchange="preview_image4();" multiple/>
  <span class='button'>Choose</span>
</div>

                </div>

                </div>
                </div>


                <div id="panel4" style="display: none;">
                <h4>Upload FSSAI Certificate</h4>
                <div class="panel-body secondstep">
                    
                    <span>Example of accepted fssai certificate</span>

                <div class="show-uploadimg">
                    
                      <img class="image extraimg" src="assets/img/bnxq30myrc1vbw0repxo.png">
                             <div class="image_preview"></div>
                </div>
                
                <span>Important note: Expired documents will not be accepted, check expiry date before uploading the document</span>
                <br>
                <div class="form-group step2upload">

                    

                    <div class='file-input'>
 <input type="file" id=" upload_file[]" name=" upload_file[]" onchange="preview_image();" multiple/>
  <span class='button'>Choose</span>
</div>

                </div>

                </div>
                </div>


                <div id="panel5" style="display: none;">
                <h4>Upload Drug License</h4>
                <div class="panel-body secondstep">
                    
                <div class="show-uploadimg">
                    
                      <img class="image extraimg" src="assets/img/bnxq30myrc1vbw0repxo.png">
                             <div class="image_preview"></div>
                </div>
                
                <br>
                <div class="form-group step2upload">

                    

               <div class='file-input'>
 <input type="file" id=" upload_file[]" name=" upload_file[]" onchange="preview_image();" multiple/>
  <span class='button'>Choose</span>
</div>

                </div>

                </div>
                </div>


                <div id="panel6" style="display: none;">
                <h4>Upload Current Account Cheque</h4>
                <div class="panel-body secondstep">
                    
                    <span>Make sure the cheque has your shop's name on it !</span>

                <div class="show-uploadimg">
                    
                      <img class="image" id="cheq" src="assets/img/bnxq30myrc1vbw0repxo.png">
                             <div class="image_preview5"></div>
                </div>
                
                <span>Important note: DONT upload savings/personal account cheque.</span>
                <br>
                <div class="form-group step2upload">

                    

               <div class='file-input'>
 <input type="file" id="upload_file5" name=" upload_file[]" onchange="preview_image5();" multiple/>
  <span class='button'>Choose</span>
</div>

                </div>

                </div>
                </div>

                

                

                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>

            </div>

        </div>


        

        <div class="panel panel-primary setup-content" id="step-3">

            

            <div class="panel-body">

                <div class="show-uploadimg">
                      <img class="image image12" src="assets/img/bnxq30myrc1vbw0repxo.png">
                             <div class="img1"></div>
                </div>
                

                <div class="form-group">

                    <label class="control-label">Enter GSTIN:</label>

                    <input maxlength="200" type="text" name="gstin" required="required" class="form-control" placeholder="Enter Company Address" />

                </div>

                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>

            </div>

            <div class="sample-reg"><span>Sample</span>
                <img src="assets/img/59sq6m7ox3nmkha6kym0.png">

            </div>

        </div>

        

        <div class="panel panel-primary setup-content" id="step-4">

            

            <div class="panel-body">

                <div class="discription-lastinfo">
                    <h5>Importent:</h5>
                    <p>once your conform the business name on umang will change change at indicate bellow. this name will appear in the transection on umang.</p>

                    <div class="name-infoumang">
                        <div>
                            <img src="assets/img/iconprofile.PNG">
                        </div>
                        <div class="xyss">
                            <h6>shiv</h6>
                            <p>Address: Sadat Utter Pradesh</p>
                        </div>

                    
                     </div>
            <div class="kyc-step">
                        <img src="assets/img/stepkyc.PNG">
                     </div>
            <div class="name-infoumang">
                        <div>
                            <img src="assets/img/iconprofile.PNG">
                        </div>
                        <div class="xyss">
                            <span><i class="fa fa-check" aria-hidden="true"></i>verified Business</span>
                            <h6>18AABCT3518Q1ZV</h6>
                            <p>Address: Sadat Utter Pradesh</p>
                        </div>

                    
                     </div>
                </div>

                

                <button class="btn btn-success pull-right" type="submit">Finish!</button>

            </div>

        </div>

    </form>

</div>



<script>
function myFunction() {
  document.getElementById("panel").style.display = "block";
}
function myFunction1() {
  document.getElementById("panel1").style.display = "block";
}
function myFunction2() {
  document.getElementById("panel2").style.display = "block";
}
function myFunction3() {
  document.getElementById("panel3").style.display = "block";
}
function myFunction4() {
  document.getElementById("panel4").style.display = "block";
}
function myFunction5() {
  document.getElementById("panel5").style.display = "block";
}
function myFunction6() {
  document.getElementById("panel6").style.display = "block";
}
</script>

<script>
function preview_image0() 
{
 var total_file=document.getElementById("upload_file0").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('.image_preview0').html("<img src='"+URL.createObjectURL(event.target.files[i])+"'><br>");
   $('.img1').html("<img src='"+URL.createObjectURL(event.target.files[i])+"'><br>");
  $('.image12').hide();
  $('#gst').hide();

 }
}
function preview_image1() 
{
 var total_file=document.getElementById("upload_file1").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('.image_preview1').html("<img src='"+URL.createObjectURL(event.target.files[i])+"'><br>");
     $('.img1').html("<img src='"+URL.createObjectURL(event.target.files[i])+"'><br>");

  $('.image12').hide();
  $('#gst25').hide();

 }
}

</script>

<script>
function preview_image2() 
{
 var total_file=document.getElementById("upload_file2").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('.image_preview2').html("<img src='"+URL.createObjectURL(event.target.files[i])+"'><br>");
    $('.img1').html("<img src='"+URL.createObjectURL(event.target.files[i])+"'><br>");

  $('.image12').hide();
  $('#estab').hide();

 }
}

function preview_image3() 
{
 var total_file=document.getElementById("upload_file3").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('.image_preview3').html("<img src='"+URL.createObjectURL(event.target.files[i])+"'><br>");
    $('.img1').html("<img src='"+URL.createObjectURL(event.target.files[i])+"'><br>");

  $('.image12').hide();
  $('#udhy').hide();

 }
}

function preview_image4() 
{
 var total_file=document.getElementById("upload_file4").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('.image_preview4').html("<img src='"+URL.createObjectURL(event.target.files[i])+"'><br>");
    $('.img1').html("<img src='"+URL.createObjectURL(event.target.files[i])+"'><br>");

  $('.image12').hide();
  $('#trade').hide();

 }
}

function preview_image5() 
{
 var total_file=document.getElementById("upload_file5").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('.image_preview5').html("<img src='"+URL.createObjectURL(event.target.files[i])+"'><br>");
    $('.img1').html("<img src='"+URL.createObjectURL(event.target.files[i])+"'><br>");

  $('.image12').hide();
  $('#cheq').hide();

 }
} 
</script>




<?php include"inc/footer.php"?>

