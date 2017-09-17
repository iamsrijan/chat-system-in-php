<?php
include 'db.php';
$query = "SELECT * from chat order by id asc";
$run = $con->query($query);
while ($row=$run->fetch_array()):


?>



<div id="chat-data">
<span style="color:green;"><?php echo $row['name']; ?></span> :
<span style="color:brown;"><?php echo $row['msg']; ?></span>
<span style="float:right;"><?php echo $row['date']; ?></span>
</div>
<?php endwhile; ?>