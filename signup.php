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
    
        
        
         <div class="registration" id="registrationForm">
            <h2 class="text-center">Registration Form</h2>
            <div class="registration-form">
                <form action="register.php" method="POST">
                    <div class="form-group row">
                        <div class="col-6">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control form-control-sm" id="name" name="name">
                        </div>
                        <div class="col-6">
                            <label for="name">Surname:</label>
                            <input type="text" class="form-control form-control-sm" id="surname" name="surname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-7">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="registerUsername">Username:</label>
                        <input type="text" class="form-control form-control-sm" id="username" name="username">
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
    </div> 

   
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

</body>
</html>