

<script>
	debugger;
setInterval(function(){ 
   $.ajax({
            //data :{action: "showroom"},
            url  :"inc/cal2.php", //php page URL where we post this data to view from database
            type :'POST',
            success: function(data){
                $("#comm").html(data);
            }
        });
}, 1000);
</script>
<div id="comm">
	<?php 
	$result = mysqli_query($conn, "SELECT SUM(quantity) AS qa FROM wishlist where user= '".$_SESSION['log_buyer']."'  "); 
$row = mysqli_fetch_assoc($result); 
$sum = $row['qa'];
?>
<a href="wish.php"><i class="icon-heart"></i></a>
</div>