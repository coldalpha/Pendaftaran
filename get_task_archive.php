<?php 

require_once('connection.php');

$sql = "SELECT * FROM tasks";

$query = $conn->query($sql);

$no = 1;

if ($query->num_rows == 0) {
	?>
	<tr>
		<td colspan="4" align="center">No Data</td>
	</tr>
	<?php
} else {
	while ($row = $query->fetch_assoc()){
		if($row['is_archive'] == 1){
		?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $row['no'] ?></td>
				<td><?= $row['nama'] ?></td>
				<td><?= $row['dokter'] ?></td>
				<td><?= $row['description'] ?></td>
				<td><?= $row['is_finish'] == 1 ? 'finish' : '-' ?></td>
				<td>
					<?php if ($row['is_finish'] == 0): ?>
						<button type="button" data-url="mark_as_finish.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-success btn-finish">Finish</button>
					<?php endif ?>
					<button type="button" data-url="restore_task.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-success text-white btn-restore">Restore</button>
					<button type="button" data-url="delete_task.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger text-white btn-delete">Delete</button>
				</td>
			</tr>
		<?php
		}
	}
}

?>