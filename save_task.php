<?php 

require_once('connection.php');
$tanggalwaktu = date('Y-m-d H:i:s');
$sql = "INSERT INTO tasks (no, nama, description, tanggal, dokter, finish, tanggalwaktu) VALUES ('{$_POST['no']}', '{$_POST['nama']}', '{$_POST['description']}', '{$_POST['tanggal']}', '{$_POST['dokter']}', '{$_POST['finish']}', tanggalwaktu)";

if($conn->query($sql)){
	echo json_encode(['status' => 'success']);
	return true;
} else {
	echo json_encode(['status' => 'error', 'err_message' => $conn->error]);
	return true;
}
