<?php include ('conn.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System with Login History</title>

  


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        .main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: #24252a;
            height: 100vh;
        }

        .login, .registration {
            border-radius: 5px;
            margin: 10px;
            padding: 30px;
            width: 450px;
            background-color: #fff;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .login-form, .registration-form {
            margin-top: 30px;
        }

        .registrationForm {
            font-size: 13px;
            margin-top: -15px;
            color: blue;
            text-decoration: underline;
            text-align: center;
            cursor: pointer;
        }

        .content {
            border: 2px solid;
            border-radius: 10px;
            background-color: rgb(240, 240, 240);
            padding: 20px;
            width: 95%px;
            height: 500px;
            margin-top: -50px;
        }

        #editBtn, #deleteBtn {
            font-size: 20px;
            width: 30px;
        }
    </style>
</head>
<body>
    
    <div class="main"> 
       
        <div class="login" id="loginForm" action="add.php" method="POST"  >
            <h2 class="text-center">Login Form</h2>
            <div class="login-form">
                <form action="loginLogic.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control form-control-sm" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control form-control-sm" id="password" name="password">
                    </div>
                    <small>You dont have an account ? <a href="signup.php">Sign Up</a></small>
                    <button type='submit' name='submit' class="btn btn-primary login-btn form-control">Login</button>
                </form>
            </div>
        </div>
        <!-- <div class="login">
        <form action="loginLogic.php" class='form-signin' method='POST'>
            <h1 class='h3 mb-3 font-weight-normal'>Please sign in</h1>

            <label for="inputEmail" class='sr-only'>Username</label>
            <input type="text" id="inputEmail" class='form-control' placeholder='username' name='username'>

            <button class='btn btn-lg btn-primary btn-block' type='submit' name='submit'>Sign In</button>
            
            <small>You dont have an account ? <a href="signup.php">Sign Up</a></small>

           
            
        </form> -->
    
    </div>

        
        

        <!-- <div class="registration" id="registrationForm" action="add.php" method="POST">
=======
        <!-- <div class="registration" id="registrationForm">
>>>>>>> 5e5fbb6ef33d071b722c922df817c3d09c44a296
            <h2 class="text-center">Registration Form</h2>
            <div class="registration-form">
                <form action="register.php" method="POST">
                    <div class="form-group row">
                        <div class="col-6">
                            <label for="firstName">First Name:</label>
                            <input type="text" class="form-control form-control-sm" id="firstName" name="first_name">
                        </div>
                        <div class="col-6">
                            <label for="lastName">Last Name:</label>
                            <input type="text" class="form-control form-control-sm" id="lastName" name="last_name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-5">
                            <label for="contactNumber">Contact Number:</label>
                            <input type="number" class="form-control form-control-sm" id="contactNumber" name="contact_number" maxlength="11">
                        </div>
                        <div class="col-7">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="registerUsername">Username:</label>
                        <input type="text" class="form-control form-control-sm" id="registerUsername" name="username">
                    </div>
                    <div class="form-group">
                        <label for="registerPassword">Password:</label>
                        <input type="password" class="form-control form-control-sm" id="registerPassword" name="password">
                    </div>
                    <p class="registrationForm" onclick="showLoginForm()"><- Back</p>
                    <button type="submit" class="btn btn-primary login-register form-control" href="register.php" >Register</button>
                </form>
            </div>
        </div>
    </div> -->

    <!-- <script>
       
        const loginForm = document.getElementById('loginForm');
        const registrationForm = document.getElementById('registrationForm');

        registrationForm.style.display = "none";


        function showRegistrationForm() {
            registrationForm.style.display = "";
            loginForm.style.display = "none";
        }

        function showLoginForm() {
            registrationForm.style.display = "none";
            loginForm.style.display = "";
        }

    </script> -->

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

</body>
</html>