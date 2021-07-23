<?php
include "koneksi.php";
?>
<html>
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
	<script src="https://code.jquery.com/jquery-3.6.0.min.js">
	</script>
	<script>
		var from=null, start=0, url='http://localhost/chatbox.php';
		$(document).ready(function(){
			from=prompt("Please enter your name");
			$('form').submit(function(e){
				$.post(url,
					chat:$['chat'].val(),
					Tanggal:$['Tanggal'].val(),
					from:from
				
					chat:$['chat'].val(),
					Tanggal:$['Tanggal'].val(),
					from:from
				});
				$('chat').val('');
				$('Tanggal').val('');
				return false;
			})
		});
		function load(){
			$.get(url+'?start='+start, function(result){
				if(result.items){
					result.items.forEach(item=>{
						start=item.id;
						$[#chat].append[renderMessage[item]];
						$[#Tanggal].append[renderMessage[item]];
					})
				};
				load();
			})
		}
		function renderMessage[item]{
			return'<div class="bubbleWraper"><body><td><?php echo$no++;?>
		<?php echo $tampil['chat'];?>
		<?php echo $tampil['Tanggal'];?></td><td><?php echo$no++;?>
		<?php echo $tampil['chat'];?>
		<?php echo $tampil['Tanggal'];?></td></body></div>'
		}
	</script>
	


	<body>
<td>
<?php
$no=1;
$chat=mysqli_query($koneksi,"SELECT * FROM cbox1");
while($tampil=mysqli_fetch_array($chat)){
	?>
	


		<div class="bubbleWraper">
			<div class="inlineContainer own">
				<img class="inlineIcon"src="iconchat.png">
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
<td>
	<?php
$no=1;
$chat=mysqli_query($koneksi,"SELECT * FROM cbox");
while($tampil=mysqli_fetch_array($chat)){
	?>
	


		<div class="bubbleWraper">
			<div class="inlineContainer own">
				<img class="inlineIcon"src="1.png">
				<div class="otherBubble own">
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
<a href="chatbox.php">BACK</a>
</body>
</html>