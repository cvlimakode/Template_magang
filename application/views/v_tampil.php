<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<center><h1>CRUD dengan CodeIgniter</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>Username</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Action</th>
			<th>Password</th>
			<th>Level</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u):?>
		{
		<tr>
			<td><?php echo $u->username ?></td>
			<td><?php echo $u->name ?></td>
			<td><?php echo $u->email ?></td>
			<td><?php echo $u->phone ?></td>
			<td><?php echo $u->password ?></td>
			<td><?php echo $u->level ?></td>
		</tr>
		<?php endforeach;?> 
	}
	</table>
</body>
</html>