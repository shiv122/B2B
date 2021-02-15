

<script>
	debugger;
setInterval(function(){ 
   $.ajax({
            //data :{action: "showroom"},
            url  :"inc/cal.php", //php page URL where we post this data to view from database
            type :'POST',
            success: function(data){
                $("#com").html(data);
            }
        });
}, 1000);
</script>
<div id="com">
	<?php 
	$result = mysqli_query($conn, "SELECT SUM(quantity) AS qa FROM cart where user= '".$_SESSION['log_buyer']."'  "); 
$row = mysqli_fetch_assoc($result); 
$sum = $row['qa'];
?>
<a href="sopping-cart.php"><i class="icon-add-to-cat"></i><span class="badge"> <?php echo $sum; ?></span></a>
</div>