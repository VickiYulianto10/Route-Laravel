<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form action="{{ url('form') }}" method="POST">
		<input type="text" name="nama" placeholder="nama">
		<input type="email" name="email" placeholder="email">
		@csrf
		<input type="Submit" name="">
	</form>
</body>
</html>