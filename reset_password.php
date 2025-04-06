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
    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:75px;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                            <h3><i class="fa fa-lock fa-4x"></i></h3>
                            <h2 class="text-center">Reset Password</h2>
                            <p>Please enter your new password.</p>
                            <div class="panel-body">
                                <form id="reset-form" method="post" action="reset_password_action.php">
                                    <input type="hidden" name="username" value="<?php echo htmlspecialchars($username); ?>">
                                    <div class="form-group">
                                        <label for="new_password">New Password:</label>
                                        <input type="password" name="new_password" id="new_password" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Reset Password">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
        $('#reset-form').submit(function(e){
            e.preventDefault(); // Prevent form submission

            // Get form data
            var formData = $(this).serialize();

            // AJAX call to reset the password
            $.ajax({
                type: 'POST',
                url: 'reset_password_action.php', // PHP script to reset password
                data: formData,
                success: function(response){
                    if(response.trim() == 'success'){
                        // Password reset successful, show success message and redirect to login.php
                        alert('Password has been successfully reset.');
                        window.location.href = 'login.php';
                    } else {
                        // Error resetting password, show error message
                        alert('An error occurred while resetting the password. Please try again.');
                    }
                },
                error: function(xhr, status, error){
                    console.log("AJAX error: " + status + ' : ' + error); // Debugging statement
                }
            });
        });
    });
    </script>
</body>
</html>
