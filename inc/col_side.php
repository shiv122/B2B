
<style type="text/css">
    .modal-header .close {
    padding: 0;
    margin: 0;
}
.modal-dialog.modal-lg {
    max-width: 99%;
}


.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: auto;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 11px 11px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
  border-bottom: 1px solid #d8d7d7;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #fff;
}
label.checkumang {
    border-bottom: 1px solid #eee;
    padding-bottom: 13px;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 300px;
}

input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 20px;
  width: 20px;
border: 1px solid #c7c7c7;
    border-radius: 4px;
}


/* When the checkbox is checked, add a blue background */
 input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
 input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
 .checkmark:after {
  left: 7px;
  top: 3px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
.checkumang {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 14px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
div#Filter3 {
    padding: 14px;
}
.modal-body {
  padding: 1rem 4rem !important;
}
.modal-footer button.btn.btn-default {
    width: 100%;
}
.modal-footer {
    padding: 01rem 4rem !important;
}
.modal-footer button.btn.btn-default {
    width: 100%;
    background-color: #2196f3;
    color: #fff;
}


</style>
    <script >



$(document).ready(function(){



$(".cat").click(function(){



  



   var category = get_filter_text('cat1');



   

   $.ajax({

             data :{action : category,

             category:   category        },

             url  :"subcat.php", //php page URL where we post this data to view from database

             type :'POST',

             success: function(data){

                

                $("#result1").html(data);



               

             }

         });



});



    

    function get_filter_text(text_id){



 var filterData=[];

 $('#'+text_id+':checked').each(function()

 {

 filterData.push($(this).val());

 });

 return filterData;

}

});



</script>
 <script >



$(document).ready(function(){



$(".cat").click(function(){



  



   var category1 = get_filter_text1('cat1');

alert(category1);

   

   $.ajax({

             data :{action1:category1,

             cat:   category1 },

             url  :'inc/filter.php', 

             type :'POST',

             success: function(data1)
             {
               
               $("#tt").html(data1);
                

                



               

             }

         });



});



    

    function get_filter_text1(text_id){



 var filterData1=[];

 $('#'+text_id+':checked').each(function()

 {

 filterData1.push($(this).val());

 });

 return filterData1;

}

});



</script>







 <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12 margin-top-20">

                <div class="container">

  <button type="button" class="btn filterbutton"  data-toggle="modal" data-target="#myModal">Open Large Modal</button>
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div  class="modal-body">

<div class="tab">
    <div id="tt">
        
    </div>
</div>

        </div>

  </div>

</div>
</div>
</div>    

                    <div class="widget categories-widget">

                        <div class="accordion-style-2" id="accordionExample1">

                            <div class="card">

                                <div class="card-header" id="headingOne">

                                    <p class="mb-0">

                                        <a href="#" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Categories</a>

                                    </p>

                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample1">

                                    <div class="card-body">

                                        <form action="#">

                                            <?php 

                                             $sql31="SELECT * FROM catagory where cat_status=1 ";

           $res31 = mysqli_query($conn ,$sql31);

                                         if (mysqli_num_rows($res31) > 0)

                                            {

                                               





                                                while ($row31= mysqli_fetch_assoc($res31))

                                                {

                                                    ?>

                                            <div class="custom-control custom-checkbox mb-3">

                                            <label class="checkumang"><?php echo $row31['name']; ?>
                                              <input type="checkbox" id="cat1" name="fii" class=" cat"   value="<?php echo $row31['id']; ?>">
                                              <span class="checkmark"></span>
                                            </label>
  
                                    

                                            </div>

                                            <?php }} ?>

                                        </form>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="widget brand-widget">

                        <div class="accordion-style-2" id="accordionExample2">

                             

                            <div class="card">

                              

                                <div class="card-header" id="headingTwo">

                                    <p class="mb-0">

                                        <a href="#" role="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Product Brand</a>

                                    </p>

                                </div>

                                 <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample2">

                                    <div  class="card-body">

                                       

                                  <div id="result1">

                                      

                                  </div>

                                       

                                    </div>

                               

                                </div>



                            </div>

                       

                        </div>  

                    </div>

                    

                  

                   

                   

                    <div class="card-header" id="headingOne">

                                    <p class="mb-0">

                                        <a href="#" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Best Seller</a>

                                    </p>

                                </div>

                            <?php 

                         $sql3="SELECT * FROM product where product_status=1 ORDER BY sell_count desc limit 3";

           $res3 = mysqli_query($conn ,$sql3);

                                         if (mysqli_num_rows($res3) > 0)

                                            {

                                               





                                                while ($row3= mysqli_fetch_assoc($res3))

                                                { ?>

                            <div class="single-seller-content d-flex">

                                <div class="thumb">

                                    <img src="<?php $result = substr($row3['image'], 3); echo $result; ?>" alt="">

                                </div>

                                <div class="content">

                                    <h6><?php echo $row3['pro_name']; ?></h6>

                                    <span><?php echo '₹'.$row3['price']; ?></span>

                                </div>

                            </div>

                          <?php }}?>

                        </div>