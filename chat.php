<!DOCTYPE html>
<?php
include "koneksi.php";
?>
<html>
<head>
	<title>chat</title>
</head>
<style type="text/css">
		body{
			font-family:sans-serif;
			background: #FF8C00
		}body{background-image:url(1.png);}
		.page{
			width:17cm;
			margin:auto;
		}
		*{
	font-family:'Avenir';
}
.bubbleWrapper {
	padding:10px 10px;
	display: flex;
	justify-content: flex-end;
	flex-direction: column;
	align-self: flex-end;
	color: #fff;
}
		}
		.inlineContainer {
			display: inline-flex;
		}
		.inlineContainer.own{
			flex-direction: row-reverse;
		}
		.inlineIcon{
			width:20px;
			object-fit:contain;
		}
		.ownBubble {
			min-width:60px;
			max-width:700px;
			padding: 14px 18px;
			margin: 6px 8px;
			background-color:#5b5377;
			border-radius: 16px 16px 0 16px;
			border:1px solid #443f56;
		}
		.otherBubble {
			min-width:60px;
			max-width:700px;
			padding: 14px 18px;
			margin:6px 8px;
			background-color:#6C8EA4;
			border-radius:16px 16px 16px 0;
			border:1px solid #54788e;
		}
		.own {
			align-self:flex-end;
		}
		.other{
			align-self:flex-start;
		}
		span.own,
		span.other{
			font-size: 14px;
			color:grey;
		}
	</style>

<h1> chat </h1>
<table>



<body>

<form method="post" action="chatsql.php">
<td>chat 	: <input type="text" name="chat" /><br /></td>
<td>Tanggal		: <input type="text" name="Tanggal" />	<br /></td>

<input type="submit" value="Submit" />
</form>
<a href="logout.php">log out</a>
	<a href="
<?php

$no=1;
$chat=mysqli_query($koneksi,"SELECT * FROM chat");
while($tampil=mysqli_fetch_array($chat)){
	?>


	<div class="bubbleWrapper">
	<div class="inlineContainer">
		<img class="inlineIcon"src="">
		<div class="otherBubble other">
		<form method="post" action="chatbox.php">
		<button type="?php echo$no++";?>
		<?php echo$tampil['User_Name'];?>
	</button>
</form>


			</div>
 </div><span class="other"></span>
 </div>

 	<?php
}
 ?>

</a>

</body>
	
</form>

</body>
</table>
</html>