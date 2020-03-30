<?php
require_once '_db.php';
$id=$_POST['id'];
$delete = "DELETE FROM events WHERE id = {$id}";

$stmt = $db->prepare($delete);

// Check if prepare() failed.
// prepare() can fail because of syntax errors, missing privileges, ....
 if ( false === $stmt ) {
    error_log('mysqli prepare() failed: ');
    error_log( print_r( htmlspecialchars($stmt->error), true ) );
 
    // Since all the following operations need a valid/ready statement object
    // it doesn't make sense to go on
    exit();
}

$stmt->execute();

class Result {}

$response = new Result();
$response->result = 'OK';
$response->message = 'Delete successful';

header('Content-Type: application/json');
echo json_encode($response);

