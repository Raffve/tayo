<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Input User</title>
</head>
<body>
	<form action="http://localhost/bisku/index.php/user/add" method="POST">
		Username<br>
		<input type="text" name="username"><br>
		Password<br>
		<input type="password" name="pass"><br>
		Fullname<br>
		<input type="text" name="fname"><br>
		level<br>
		<select name="level">
			<option>Admin</option>
			<option>User</option>			
		</select>
		<input type="submit" value="simpan">

	</form>
</body>
</html>