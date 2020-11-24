<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        h5 {
            display: flex;
            flex-direction: row;
        }
        h5:before, h5:after{
            content: "";
            flex: 1 1;
            border-bottom: 1px solid #000;
            margin: auto;
        }
        h5:before {
            margin-right: 10px
        }
        h5:after {
            margin-left: 10px
        }

        .logo {
            padding-top: 10px;
            border-radius: 20px;
            height: 100%;
            width: 100%;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        .newuser {
            text-decoration: none;
            color: #00b3ff;
        }

        .forgotpassword {
            text-decoration: none;
            color: red;
        }

        *{
            margin: 0;
        }

        html, body {
            background-color: darkgrey;
            background-size: cover;
            width: 100%;
            height: 100%;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #DDDDDD;
        }
        .wrapper {
            opacity: 90%;
            display:flex;
            height: 100%;
            width: 100%;
            justify-content: center;
            align-items: center;
            border-radius: 20px;
        }
        .form-wrapper {
            width: 450px;
            background-color: #f5f5f5;
            border-radius: 20px;
        }

        .form {
            padding: 30px 30px;
        }

        input {
            align-self: center;
            width: 100%;
            height: 35px;
            border:2px solid #e7e2e4;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .label {
            display:block;
            font-weight: 600;
        }

        .register-btn {
            display: block;
            width: 80px;
            cursor:pointer;
            background-color: #00b3ff;
            border: none;
            border-radius: 5px;
            color: white;
        }

    </style>
</head>
<body>

<div class="wrapper">
    <div class="form-wrapper">
        <img class="logo" src="https://i.pinimg.com/originals/a2/5f/4f/a25f4f58938bbe61357ebca42d23866f.png">
        <div style="text-align: center">Sign in to start your session</div>
        <form class="form" action="projectuserinfo.php" method="POST">
            <i class="fa fa-envelope icon"></i>
            <input type="email" name="email" id="email" placeholder="Email">
            <i class="fa fa-lock icon"></i>
            <input type="password" name="password" id="password" placeholder="Password">
            <input class ="register-btn" type="submit" value="Sign in">
            <h5>Sign up</h5><br>
            <a href="#" class="newuser">New user?</a><br><br>
            <a href="#" class="forgotpassword">I forgot my password</a>
        </form>
    </div>
</div>

</body>
</html>