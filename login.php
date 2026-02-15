<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form action="auth.php" method="POST">
        <table>
            <tr>
                <td>Username: </td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td><button type="submit">Login</button></td>
            </tr>
        </table>
    </form>

    <?php
    session_start();
    if (isset($_SESSION['error'])) {
        echo "<p style='color:red'>" . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']);
    }
    ?>
</body>
</html>