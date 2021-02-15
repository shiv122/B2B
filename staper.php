<?php include"inc/header.php"?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="assets/css/staper.css">
<script src="assets/js/staper.js"></script>
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

                <p><small>Shipper</small></p>

            </div>

            <div class="stepwizard-step col-xs-3"> 

                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>

                <p><small>Destination</small></p>

            </div>

            <div class="stepwizard-step col-xs-3"> 

                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>

                <p><small>Schedule</small></p>

            </div>

            <div class="stepwizard-step col-xs-3 last-childstep"> 

                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>

                <p><small>Cargo</small></p>

            </div>

        </div>

    </div>

    

    <form role="form">

        <div class="panel panel-primary setup-content" id="step-1">

            <div class="panel-body">

                <div class="choose-doc">
                	<ul>
                		<li><a href="#">
                			<div class="nextBtn">
                				<i class="fa fa-angle-right" aria-hidden="true"></i>
                				<h5>GST Certificate<span>INSTANT VERIFICATION</span></h5>
                				<p>hello</p>
                			</div>
                			</a>
                		</li>
                		<li><a href="#">
                			<div class="nextBtn">
                				<i class="fa fa-angle-right" aria-hidden="true"></i>
                				<h5>docoment</h5>
                				<p>hello</p>
                			</div>
                			</a>
                		</li>
                		<li><a href="#">
                			<div class="nextBtn">
                				<i class="fa fa-angle-right" aria-hidden="true"></i>
                				<h5>docoment</h5>
                				<p>hello</p>
                			</div>
                			</a>
                		</li>
                		<li><a href="#">
                			<div class="nextBtn">
                				<i class="fa fa-angle-right" aria-hidden="true"></i>
                				<h5>docoment</h5>
                				<p>hello</p>
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
            	<div class="upload-doc">
            		<ul>
            			<li><div class="uplod-discription">
            				<label class="useradio">GST REG 06 (Registration Certificate)
            				  
							  <input type="radio" checked="checked" name="radio">
							  <span class="checkmark"></span>
							</label>
							<div class="content-upload">
                                <img id="image"  src="assets/img/bnxq30myrc1vbw0repxo.png">
							 <div id="image_preview"></div>
							<div class="cont-upl-umang" >
							<h6>Certificate must show</h6>
							<ul>
								<li>Registration Number </li>
								<li>Legal Name </li>
								<li>Trade Name</li>
								
							</ul>
                        
						<div class='file-input'>
 <input type="file" id="upload_file" name="upload_file[]" onchange="preview_image();" multiple/>
  <span class='button'>Choose</span>
  <span class='label' data-js-label>No file selected</label>
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
							<img src="assets/img/bnxq30myrc1vbw0repxo.png">
							<div class="cont-upl-umang" >
							<h6>Certificate must show</h6>
							<ul>
								<li>Registration Number </li>
								<li>Legal Name </li>
								<li>Trade Name</li>
								
							</ul>
							<button class="btn">upload</button>
							</div>
							
							</div>
						</div>
            			</li>
            		</ul>
            	</div>

                

                

                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>

            </div>

        </div>

        

        <div class="panel panel-primary setup-content" id="step-3">

            

            <div class="panel-body">

            	<div class="show-uploadimg">
            		 <div id="img"></div>

            	</div>
                

                <div class="form-group">

                    <label class="control-label">Enter GSTIN:</label>

                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address" />

                </div>

                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>

            </div>

            <div class="sample-reg"><span>Sample</span>
            	    

            </div>

        </div>

        

        <div class="panel panel-primary setup-content" id="step-4">

            

            <div class="panel-body">

                <div class="discription-lastinfo">
                	<h5>Importent:</h5>
                	<p>once your conform the business name on umang will change change at indicate bellow. this name will appear in the transection on umang.</p>

                	<div class="name-infoumang">
                		<div>
                			<img src="assets/img/bnxq30myrc1vbw0repxo.png">
                		</div>
                		<div class="xyss">
                			<h6>shiv</h6>
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


function preview_image() 
{
 var total_file=document.getElementById("upload_file").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'><br>");
  $('#img').append("<img name='image[]' src='"+URL.createObjectURL(event.target.files[i])+"'>");
  $('#image').hide();
 }
}
</script>
<?php include"inc/footer.php"?>


 


