<?php 

require_once('connection.php');

$sql = "UPDATE tasks SET is_archive = 1 WHERE id = {$_GET['id']}";

if($conn->query($sql)){
	echo json_encode(['status' => 'success']);
	return true;
} else {
	echo json_encode(['status' => 'error', 'err_message' => $conn->error]);
	return true;
}
