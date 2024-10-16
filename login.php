<?php
session_start();
// datebase 'db_connection
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // sample ko (palitan na lang)    IKAW NA BAHALA DITO KIRBSSSS
    if ($username == "admin" && $password == "password") {
        $_SESSION['user_id'] = 1;
        $_SESSION['role'] = 'admin';
        header("Location: employee.php");
        exit();
    } else {
        echo "<script>alert('Invalid credentials');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>
