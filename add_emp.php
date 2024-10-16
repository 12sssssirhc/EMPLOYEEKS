<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['add_employee'])) {
    echo "<script>alert('Employee added successfully! (DB logic to be implemented)');</script>";
    header("Location: employee.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>
    <div class="container">
        <h1>Add Employee</h1>
        <form method="POST">
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <!-- kung may kulang pa ilagay na lang -->
            <button type="submit" name="add_employee">Add Employee</button>
        </form>
    </div>
</body>
</html>
