<?php
// Check if username is passed in URL
if(isset($_GET['username'])) {
    $username = $_GET['username'];
} else {
    // If username is not passed, redirect to forget.php
    header("Location: forget.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>
    <h2>Reset Password</h2>
    <p>Please enter your new password.</p>
    <form method="post" action="reset_password.php">
        <input type="hidden" name="username" value="<?php echo htmlspecialchars($username); ?>">
        <label>New Password:</label>
        <input type="password" name="new_password" required><br><br>
        <input type="submit" name="submit" value="Reset Password">
    </form>
</body>
</html>
