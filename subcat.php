<?php include 'dbcon.php'; ?>

 <script >

  
$(document).ready(function(){

$(".subs").click(function(){

  

   var subss = get_filter_text('subs1');

   
   $.ajax({
             data :{action : subss,
             subs:   subss       },
             url  :"fill.php", //php page URL where we post this data to view from database
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

<?php if(isset($_POST['action']))
{
  $sql="SELECT * from sub_category where parent !='' ";
  if (isset($_POST['category'])) {
     $cat=implode("','", $_POST['category']);
     $_SESSION['cats']=$cat;
     
     $sql .="AND parent IN('".$cat."')";

  }
   $res = mysqli_query($conn ,$sql);
   
        if (mysqli_num_rows($res) > 0) {
          while ($row= mysqli_fetch_assoc($res)) 
          {
            ?>
              <div class="custom-control custom-checkbox mb-3">
           <label class="checkumang"><?php echo $row['name']; ?>
                                              <input type="checkbox"  class="subs" id="subs" name="subs" value="<?php echo $row['id']; ?>">
                                              <span class="checkmark"></span>
           
                                          <br>
                                               
                                            </div>
                                           

                                            <?php
                                          
          }
        
        }
        else {
        ?> <h3> NO RESULT </h3>  <?php
        }
}
else
{
 ?>
<h3>NO DATA</h3>
 <?php
}
?>