<?php
require "db.php";

// Set header for JSON output
header("Content-Type: application/json; charset=UTF-8");

// Fetch data
$sql = "SELECT id, title, content, author_id, created_at FROM posts ORDER BY id DESC";
$result = $conn->query($sql);

$posts = [];

while ($row = $result->fetch_assoc()) {
    $posts[] = $row;  // add each row to array
}

// Return JSON
echo json_encode([
    "status" => "success",
    "count" => count($posts),
    "data" => $posts
], JSON_PRETTY_PRINT);
?>
