<?php
require_once '_db.php';

$insert = "INSERT INTO events (name, start, end, staff, service) VALUES (:name, :start, :end, :staff, :service)";

$stmt = $db->prepare($insert);

$stmt->bindParam(':start', $_POST['start']);
$stmt->bindParam(':end', $_POST['end']);
$stmt->bindParam(':name', $_POST['name']);
$stmt->bindParam(':staff', $_POST['staff']);
$stmt->bindParam(':service', $_POST['service']);

$stmt->execute();

class Result {}

$response = new Result();
$response->result = 'OK';
$response->id = $db->lastInsertId();
$response->message = 'Created with id: '.$db->lastInsertId();


header('Content-Type: application/json');
echo json_encode($response);
