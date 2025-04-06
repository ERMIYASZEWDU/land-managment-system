<!DOCTYPE html>
<html>
<head>
    <title>Forget Password Form</title>
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
                            <h2 class="text-center">Forgot Password?</h2>
                            <p>You can reset your password here.</p>
                            <div class="panel-body">
                                <form id="recover-form" role="form" autocomplete="off" class="form">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="username" name="username" placeholder="Username" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                                    </div>
                                    <input type="hidden" class="hide" name="token" id="token" value=""> 
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
        $('#recover-form').submit(function(e){
            e.preventDefault(); // Prevent form submission

            // Get username input value
            var username = $('#username').val();

            // AJAX call to check if username exists
            $.ajax({
                type: 'POST',
                url: 'check_username.php', // PHP script to check username
                data: { username: username },
                success: function(response){
                    if(response.trim() == 'exists'){
                        // Username exists, redirect to reset_password.php
                        window.location.href = 'reset_password.php?username=' + username;
                    } else {
                        // Username does not exist, show error message
                        alert('Username not found in our database.');
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
