<?php 

require_once('connection.php');

$sql = "DELETE FROM tasks WHERE id = {$_GET['id']}";

if($conn->query($sql)){
	echo json_encode(['status' => 'success']);
	return true;
} else {
	echo json_encode(['status' => 'error', 'err_message' => $conn->error]);
	return true;
}