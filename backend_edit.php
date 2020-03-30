<?php
require_once '_db.php';
$text=$_POST['text'];
$id=$_POST['id'];
$insert = "UPDATE events SET name = :text WHERE id = :id";

$stmt = $db->prepare($insert);

$stmt->bindParam(':text', $text);
$stmt->bindParam(':id', $id);

$stmt->execute();

class Result {}

$response = new Result();
$response->result = 'OK';
$response->message = 'Update successful';

header('Content-Type: application/json');
echo json_encode($response);
