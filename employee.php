<?php
session_start();
// file name db_connect
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// sample ko ulet palitan na lang 
$employees = [
    ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com'],
    ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com'],
    //kung may kulang pa ilagay na lang
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Employees</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>
    <div class="container">
        <h1>Employees</h1>
        <a href="add_emp.php" class="table-button">Add Employee</a>
        <a href="users.php" class="table-button">Manage Users</a>
        <!-- kung may kulang pa ilagay na lang -->
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                    <!-- kung may kulang pa ilagay na lang -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee) { ?>
                    <tr>
                        <td><?php echo $employee['name']; ?></td>
                        <td><?php echo $employee['email']; ?></td>
                        <!-- kung may kulang pa ilagay na lang -->
                        <td>
                            <a href="edit_emp.php?id=<?php echo $employee['id']; ?>" class="table-button">Edit</a>
                            <a href="delete_emp.php?id=<?php echo $employee['id']; ?>" class="table-button" onclick="return confirm('Are you sure?')">Delete</a>

                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
