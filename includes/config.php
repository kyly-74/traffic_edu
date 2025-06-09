<?php
$conn = new mysqli('localhost', 'root', '', 'traffic');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
