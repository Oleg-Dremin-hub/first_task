<?php

require_once 'get_data.php';

$result = get_data();
?>

<link rel="stylesheet" type="text/css" href="assets/css/table.css">
<table class="steelBlueCols">
	<thead>
		<tr>
			<th>Photo</th>
			<th>
				<div class="text-wrap tlid-copy-target">
					<div class="result-shield-container tlid-copy-target" tabindex="0">
						<span class="tlid-translation translation" lang="en">
							<span class="" title="">First Name Last Name</span>
						</span>
					</div>
				</div>
			</th>
			<th>Report Subject</th>
			<th>Email</th>
		</tr>
		<?php foreach ($result as $item) : ?>
			<tr>
				<td>
					<?php echo $item['photo']?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $item['first_name']  . " " . $item['last_name']?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $item['report_subject']?>
				</td>
			<tr>
			<tr>
				<td>
					<?php echo $item['email']?>
				</td>
			<tr>
		<?php endforeach; ?>
	</thead>
</table>



