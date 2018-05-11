<!DOCTYPE html>
<html>
<head>
	<title>Data User</title>
</head>
<body>
	<table>
	<thead>
		<tr>
			<th style = "text-align: center";>No</th>
			<th style = "text-align: center";>Username</th>
			<th style = "text-align: center";>Fullname</th>
			<th style = "text-align: center";>Level</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php 
					foreach($username as $u){ 
		?>
		<tr>
			<td><?php echo $u->id ?></td>
			<td><?php echo $u->username ?></td>
			<td><?php echo $u->fullname ?></td>
			<td><?php echo $u->level ?></td>
			<td>
			    <?php echo anchor('user/edit/'.$u->id,'Edit'); ?>
				<?php echo anchor('user/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php
		
		}
		?>
	</tr>
	</tbody>
</table>
</body>
</html>