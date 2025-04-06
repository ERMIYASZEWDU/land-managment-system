

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="login.css" /> 
    <title>Land Registration System</title>
</head>
<body style="background-image: url('./img/lms-2.jpg');">
<style>
    .wrapper{
    position: absolute;
    top: 50%;
    left: 50%;
    width: 550px;
    height: 300px;
    padding: 80px;
    font-family:Georgia, 'Times New Roman', Times, serif;
    font-size: 17.5px;
    transform: translate(-50%,-50%);
     background: repeating-linear-gradient(0);
     border: 2px solid #0ef;
     box-shadow: 0 0 25px #0ef;
     overflow: hidden;
}
</style>

    <h1 style=" position:relative; color: #ffffff; font-size: 40px; top:21px; left: 100px; padding: 0 20px 10px 450px; "></h1>
    <div class="wrapper">
        <span class="bg-animate"></span>
        <span class="bg-animate2"></span>
        <div class="form-box login">
            
            <h2 class="animation" style="--i:0; --j:21;"> <b>Login</b></h2>
            <form action="./pages/login_check.php" method="POST">
                <div class="input-box animation" style="--i:1; --j:22;" >
                <input type="text" name="username"  required><label>Username</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation" style="--i:2; --j:23;">
                <input type="password" name="password" required><label>password</label>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" class="btn animation" style="--i:3; --j:24; ">login</button>
                <div class="logreg-link animation" style="--i:4; --j:25; ">
                <h5 ><a href="forget.php" style="color:#d7dede; text-decoration: none;">Forget Your Password?</a></h4> 
                </div>
                <div class="logreg-link animation" style="--i:4; --j:25;">
                    <p>Don't have an account?  Contact your admin or register officer</p>
                </div>
                
            </form>
        </div>
        <div class="info-text login">
            <h2 class="animation" style="--i:0; --j:20;" >  Welcome<br> Back!</h2>
            <p class="animation" style="--i:1; --j:21;"><b>Woliso Land Administration</b></p>
        </div>
        
    <script src="./js/script.js"></script>
</body>
</html>
