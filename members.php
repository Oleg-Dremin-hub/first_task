<?php

require_once 'get_data.php';

$result = get_data();
?>


<table style=""border="1px solid black">
	<tr>
		<th>Photo</th>
		<th>First - Last name</th>
		<th>Report Subject</th>
		<th>Email</th>
	</tr>
	<?php foreach ($result as $item) : ?>
		<tr>
			<td><?php echo $item['photo']?></td>
			<td><?php echo $item['first_name']  . " " . $item['last_name']?></td>
			<td><?php echo $item['report_subject']?></td>
			<td><?php echo $item['email']?></td>
		</tr>
	<?php endforeach; ?>
</table>



