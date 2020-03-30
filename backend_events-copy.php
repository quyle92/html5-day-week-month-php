<?php
require_once '_db.php';

// .events.load() passes start and end as query string parameters by default

    
$stmt = $db->prepare('SELECT * FROM events');


$stmt->execute();
$result = $stmt->fetchAll();

class Event {}
$events = array();

foreach($result as $row) {
  $e = new Event();
  $e->id = $row['id'];
  $e->text = $row['name'];
  $e->start = $row['start'];
  $e->end = $row['end'];
  $e->staff = $row['staff'];
  $events[] = $e;
}

header('Content-Type: application/json');
echo json_encode($events);