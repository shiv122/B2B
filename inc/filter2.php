<?php include 'dbcon.php' ?>











          







<?php 

session_start();



if(isset($_POST['action1']))

{

  $sql="SELECT * from filter_sel where cat !='' ";

  if (isset($_POST['cat'])) {

     $cat=implode("','", $_POST['cat']);

    

     

     $sql .="AND cat IN('".$cat."') group by name";



  }

   $res = mysqli_query($conn ,$sql);

   

        if (mysqli_num_rows($res) > 0) {



          while ($row= mysqli_fetch_assoc($res)) 

          {

            $nm=$row['name'];

            $name = str_replace(' ', '_', $nm);

            ?>

            <div class="umang-responciv">

        <div  class="tab ">    

    <button class="tablinks" value="<?php echo $row['name'] ?>" onclick="openFilter(event, '<?php echo $row['id'] ?>')" id="defaultOpen"><?php echo $row['name'] ?></button></div>

<div  id="<?php echo $row['id'] ?>" class="tabcontent ">

  <?php



$sql1="SELECT  * FROM filter group By $name ";



$res1 = mysqli_query($conn ,$sql1);

   

        if (mysqli_num_rows($res1) > 0) {

          while ($row1= mysqli_fetch_assoc($res1)) 

          {



            

        

            

          if(empty($row1[$name]))

             { continue;}

              

?>

 



   <label  class="checkumang"><?php echo $row1[$name] ?>

                                              <input type="checkbox" id="<?php echo $name; ?>" name="fil" class=" fil"   value="<?php echo $row1[$name] ?>">

                                              <span class="checkmark"></span>

                                            </label>



  <?php }





}



?>

</div></div>



<?php



}



}

  else

  {

    echo "<h4> No Filter Found</h4>";

  }



}



else

{

  echo "Select Category";

}









   ?>



  

    <script>

function openFilter(evt, cityName) {

  var i, tabcontent, tablinks;

  tabcontent = document.getElementsByClassName("tabcontent");

  for (i = 0; i < tabcontent.length; i++) {

    tabcontent[i].style.display = "none";

  }

  tablinks = document.getElementsByClassName("tablinks");

  for (i = 0; i < tablinks.length; i++) {

    tablinks[i].className = tablinks[i].className.replace(" active", "");

  }

  document.getElementById(cityName).style.display = "block";

  evt.currentTarget.className += " active";

}



// Get the element with id="defaultOpen" and click on it

document.getElementById("defaultOpen").click();

</script>



    <script >







$(document).ready(function(){







$(".fil,#dll").click(function(){







var sort=window.x;



var action='fetch';



var material = get_filter_text('material');



var type = get_filter_text('type');



var color = get_filter_text('color');



var finishing_type = get_filter_text('finishing_type');



var size = get_filter_text('size');



var gauge = get_filter_text('gauge');



var weight = get_filter_text('weight');



var model_name = get_filter_text('model_name');



var bidding = get_filter_text('bidding');



var shape = get_filter_text('shape');







 $.ajax({



             data :{

sort:sort,

action:action,

material:material,

type:type,

color:color,

finishing_type:finishing_type,

size:size,

gauge:gauge,

weight:weight,

model_name:model_name,

bidding:bidding,

shape:shape

},



             url  :'inc/final_filter.php', 



             type :'POST',



             success: function(data1)

             {

               

               $("#cot").html(data1);

                



                







               



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