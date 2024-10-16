<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];
echo "<script>alert('Employee deleted successfully! (DB logic to be implemented)');</script>";
header("Location: employee.php");
exit();
?>
