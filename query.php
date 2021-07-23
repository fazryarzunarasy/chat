<?php
include "koneksi.php";
?>
 
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <title>chat</title>
   <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<style type="text/css">
		body{
			font-family:Avenir;
			background: #FF8C00
		}body{background-image:url(1.png);}
		.page{
			width:17cm;
			margin:auto;
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
<body>
 
<h1>chat

<tr>
	<td></td>
  <td>User_Name</td>
  <td>Chat</td>
  <td>Tanggal</td>
  
  
</tr></h1>
 
<p></p>
 
<a href="chat.php">chat </a><br>
 
 
<table class="table table-bordered table-striped table-hover">
 

<td>

<?php

$no=1;
$chat=mysqli_query($koneksi,"SELECT * FROM chat");
while($tampil=mysqli_fetch_array($chat)){
	?>

	<div class="bubbleWrapper">
	<div class="inlineContainer">
		<img class="inlineIcon"src="">
		<div class="otherBubble other">
			
		<?php echo$no++;?>
		<?php echo $tampil['User_Name'];?>

			</div>
 </div><span class="other"></span>
 </div>

 	<?php
}
 ?>

</td>
<td>
	<?php
$no=1;
$chat=mysqli_query($koneksi,"SELECT * FROM chat1");
while($tampil=mysqli_fetch_array($chat)){
	?>
	


		<div class="bubbleWraper">
			<div class="inlineContainer own">
				<img class="inlineIcon"src="">
				<div class="ownBubble own">

		<?php echo$no++;?>
		<?php echo $tampil['chat'];?>
		<?php echo $tampil['Tanggal'];?>
		</div>
	</div><span class="own"></span>
</div>
	

		
	<?php
}
 ?>

 </td>

  </table>
  </body>
</html>