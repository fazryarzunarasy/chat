<?php
include "koneksi.php";
?>
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
<form method="post" action="chatbox1.php">
<td>chat 	: <input type="text" name="chat" /><br /></td>
<td>Tanggal		: <input type="text" name="Tanggal" />	<br /></td>

<input type="submit" value="Submit" />



</form>
To Reply
<form method="post" action="cre.php">
<td>chat 	: <input type="text" name="chat" /><br /></td>
<td>Tanggal		: <input type="text" name="Tanggal" />	<br /></td>

<input type="submit" value="Submit" />



</form>
<a href="chat.php">chat Dasboard</a>



