<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];
$employee = [
    'id' => $id,
    'name' => 'John Doe',
    'email' => 'john@example.com'
];

if (isset($_POST['edit_employee'])) {
    echo "<script>alert('Employee updated successfully! (DB logic to be implemented)');</script>";
    header("Location: employee.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>
    <div class="container">
        <h1>Edit Employee</h1>
        <form method="POST">
            <input type="text" name="name" value="<?php echo $employee['name']; ?>" required>
            <input type="email" name="email" value="<?php echo $employee['email']; ?>" required>
            <!-- kung may kulang pa ilagay na lang -->
            <button type="submit" name="edit_employee">Update Employee</button>
        </form>
    </div>
</body>
</html>
