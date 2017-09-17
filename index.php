<?php

include 'db.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Chat System</title>
	<link rel="stylesheet" href="style.css" media="all" />
<script type="text/javascript">
	function ajax(){
		var req = new XMLHttpRequest();
		req.onreadystatechange = function(){
			if (req.readyState == 4 && req.status == 200){
				document.getElementById('chat').innerHTML = req.responseText;
			}
		}
		req.open('GET','chat.php',true);
		req.send();
	}
</script>



</head>
<body onload="ajax();">
<div id="container">
<div id="chat-box">
<div id="chat"></div>

</div>

<form method="post" action="index.php">
	<input type="text" name="name" placeholder="enter name" />
	<textarea name="msg" placeholder="enter messgae"></textarea>
	<input type="submit" name="submit" value="send" />

</form>
<?php
if (isset($_POST['submit'])){
$name = $_POST['name'];
$msg = $_POST['msg'];
$query="INSERT INTO chat (name,msg) values ('$name','$msg')";
$run = $con->query($query);


}

?>


</div>

</body>
</html>