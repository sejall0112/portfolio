<?php
// Initialize the session
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location:login.php");
    exit();
}
$uid = $_SESSION['admin'];
include 'config.php';

$sql = "delete from employees";
$result = $conn->query($sql);
if ($result === TRUE) {
    echo "Record deleted successfully";
    header("Location:index.php");
} else {
    echo "Error deleting record: " . $conn->error;
}