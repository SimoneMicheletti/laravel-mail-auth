<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	
	<div>
		Hi {{ Auth::user() -> name }}, this is the message for you: 
	</div>
	<br>
	<div>
		"{{$text}}"
	</div>	

</body>
</html>