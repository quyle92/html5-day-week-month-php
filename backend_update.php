<?php
require_once '_db.php';
$id=$_POST['id'];
$insert = "UPDATE events SET name=:name, start=:start, end=:end, staff=:staff, service=:service WHERE id = :id";

$stmt = $db->prepare($insert);

$stmt->bindParam(':start', $_POST['start']);
$stmt->bindParam(':end', $_POST['end']);
$stmt->bindParam(':name', $_POST['name']);
$stmt->bindParam(':staff', $_POST['staff']);
$stmt->bindParam(':service', $_POST['service']);
$stmt->bindParam(':id', $_POST['id']);

$stmt->execute();

class Result {}

$response = new Result();
$response->result = 'OK';
$response->message = 'Update successful';

header('Content-Type: application/json');
echo json_encode($response);
