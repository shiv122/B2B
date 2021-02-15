<?php include"inc/header.php"?>
<style type="text/css">
  .d{
    position: absolute;
    display: contents;
}
</style>
   <script type="text/javascript">

function add(){
      var new_chq_no = parseInt($('#total_chq').val())+1;
     
      var new_input="<div  class='col-md-4 d'> <input style='border-radius:0px;width:200px;' class= 'input' id='new_"+new_chq_no+"''  name= 'file[]' type= 'file'  multiple ></div";
      $('#new_').append(new_input);
      $('#total_chq').val(new_chq_no)
      if (new_chq_no==6) {
         $("#plus").attr("onclick", "true");

      }
    }
    function remove(){

      var last_chq_no = $('#total_chq').val();
     if (last_chq_no==6) {
       $("#plus").attr("onclick", "add()");
     }
      if(last_chq_no>1){
        $('#new_'+last_chq_no).remove();
        $('#total_chq').val(last_chq_no-1);

      }


    }
</script>

    <!-- contact form start  -->
    <div class="contact-form text-center padding-top-80 padding-bottom-80">
        <div id="con" class="container">
            <div class="row">
                
                <div  class="col-md-12">
                 <form action="inc/request.php" method="POST" enctype="multipart/form-data">
                    
                        <div class="form-row">
                          <div class="form-group col-md-4 field">
                            <input required type="text" name="name" class="form-control" id="name" placeholder="Name*">
                          </div>
                          <div class="form-group col-md-4 field">
                            <input required type="number" name="phone" class="form-control" id="phone" placeholder="Phone*">
                          </div>
                          <div class="form-group col-md-4 field">
                            <input required type="email" name="email" class="form-control" id="email" placeholder="Email*">
                          </div>
                        </div>
                        <div class="form-row">
                          
                          <div class="form-group col-md-4 field">
                            <input required type="text" name="p_name" class="form-control" id="topic" placeholder="Product Name">
                          </div>
                          <div class="form-group col-md-2 text-left field">
                           
                           <i id="plus" style="margin-top: 10px;" disabled='false' onclick="add()" class="fa fa-plus-circle fa-2x"></i><i style="margin-top: 10px; padding-left: 20px;" onclick="remove()" class="fa fa-minus-circle fa-2x"></i>
                            


                             <input type="hidden" value="1" id="total_chq">
                          </div>
                          <div  class="  col-md-6 ">
                            <div id="new_" class="row ">
                             
                            </div>
                          </div>
                          
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 field">
                              <textarea required  name="msg" id="message" rows="8" placeholder="Message"></textarea>
                            </div>
                        </div>
                    
                    
                        <button  type="submit" class="btn btn-contact">Send Request</button>
                   
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <!-- contact form end  -->

    <!-- instagram start -->
   <
   
    <!-- instagram end -->

<?php include"inc/footer.php"?>