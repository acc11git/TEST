<?php 
include 'libs/config.php';
include 'libs/database.php';


$db=new database();
$query="Select * from admin";
$result=$db->select($query);

echo "Hi Upload";
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
<table>
	<thead>
		<tr>
		<th>ID</th>
		<th>Email</th>
		<th>Pasword</th>
		</tr>

	</thead>
	<tbody>
	<?php while ($row=$result->fetch_object()): ?>
		<tr>
			<td><?php echo $row->id;?></td>
			<td><?php echo $row->email;?></td>
			<td><?php echo $row->password;?></td>

			
		</tr>


	</tbody>
<?php endwhile;?>

</table>
	



</form>

</body>
</html>
