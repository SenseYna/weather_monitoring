<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<title>Index</title>
</head>

<body onload="weather()">
	<form method="POST" action="process.php">
		<div>
			Nhiệt độ
			<div>
				<input type="text" name="temp" id="temp"/> &#186C
			</div>
			Chỉ số UV
			<div>
				<input type="text" name="uv" id="uv" />
			</div>
			<p id="location">
				Tọa độ địa lý
				<br>
				<input type="text" name="lat" id="lat"/>
				<input type="text" name="long" id="long"/>
			</p>
		</div>
		<div>
			Gửi kết quả
			<div>
				<input type="submit" value="Send"/>
			</div>
		</div>
		<div>
			Trả kết quả
			<div>
			</div>
		</div>
	</form>
	<script src="jquery-3.3.1.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="JS/getlocation.js"></script>
</body>

</html>