<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
				<script src="jquery-1.11.3.min.js"></script>
				<link rel="stylesheet" type="text/css" href="wiki.css">
        <title>Wiki</title>
    </head>

    <body>
			<h1>File I/O</h1>

			<b>Currently Stored: </b>
			<div id="text"></div><br />

			<form action="wiki.php" id="entry">
				<textarea id="new"></textarea><br />
				<input type="submit" id="button" value="Change" onclick="changeFunction()">
			</form>

			<script type="text/javascript">
				$(function()
				{
				        $("#text").load("wiki.html");
				});

				function changeFunction(){
					var value = document.getElementById("new");
					$.post('wiki.html',$("#new").val(),function(data){});
				}


			</script>


    </body>

</html>
