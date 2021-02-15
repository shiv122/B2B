<?php include 'dbcon.php'; ?>

<?php 

session_start();






  if (isset($_POST['sub'])) {
  	   $sub=implode("','", $_POST['sub']);




?>

  	  <div class="widget categories-widget">

                        <div class="accordion-style-2" id="accordionExample1">

                            <div class="card">

                                <div class="card-header" id="headingOne">

                                    <p class="mb-0">

                                        <a href="#" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Sub Categories</a>

                                    </p>

                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample1">

                                    <div class="card-body">

                                        <form action="#">

                                            <?php 

                                             $sql31="SELECT * FROM sub_category where parent  in ('".$sub."') ";
                                        

           $res31 = mysqli_query($conn ,$sql31);

                                         if (mysqli_num_rows($res31) > 0)

                                            {

                                               





                                                while ($row31= mysqli_fetch_assoc($res31))

                                                {

                                                    ?>

                                            <div class="custom-control custom-checkbox mb-3">

                                            <label class="checkumang"><?php echo $row31['name']; ?>
                                              <input type="checkbox" id="sub1" name="sub" class=" sub_cat"   value="<?php echo $row31['id']; ?>">
                                              <span class="checkmark"></span>
                                            </label>
  
                                    

                                            </div>

                                            <?php }}
                                            else
                                            {
                                            echo("Error description: " . mysqli_error($conn));

                                            } ?>

                                        </form>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
<?php

  


}

?>
<script >
  

$(document).ready(function(){



$(".sub_cat").click(function(){







   var subc1 = get_filter_text21('sub1');
  


 $.ajax({



             data :{

             	sub12:subc1},



             url  :'inc/test.php', 



             type :'POST',



             success: function(data0)

             {


             }





         });

  



});



    

    function get_filter_text21(text_id1){



 var filterData121=[];

 $('#'+text_id1+':checked').each(function()

 {

 filterData121.push($(this).val());

 });

 return filterData121;

}

});
</script>
