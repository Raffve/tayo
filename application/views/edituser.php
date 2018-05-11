<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</head>
<body>
	<?php foreach($user as $u){ ?>
	<form action="http://[::1]/bisku/index.php/user/update" method="POST">
		Username<br>
		<input type="hidden" name="id" value="<?php echo $u->id ?>">
		<input type="text" name="username" value="<?php echo $u->username ?>"><br>
		Password<br>
		<input type="password" name="pass" value="<?php echo $u->password ?>"><br>
		Fullname<br>
		<input type="text" name="fname" value="<?php echo $u->fullname ?>"><br>
		level<br>
		<select name="level" value="<?php echo $u->level ?>">
			<option>Admin</option>
			<option>User</option>			
		</select>
		<input type="submit" value="simpan">
	</form>
	<?php } ?>
</body>
</html>