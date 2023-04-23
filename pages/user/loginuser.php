<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log in and Registration</title>
        <link rel="stylesheet" href="../../styles/loginuser.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    </head>

    <body>
        <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                    <button type="button" class="toggle-btn"
                        onclick="register()">Register</button>
                </div>
                <div class="social-icons">
                    <a href=""><i class="fab fa-facebook-square" style=" color: #bbc8cc;"></i></a>
                    <a href=""><i class="fas fa-envelope" style=" color: #a1a4a5;"></i></a>
       
                </div>
                <form id="login" method="post" action="../../assets/dangnhapuser.php" class="input-group">
                    <input type="text" class="input-field" name="username" id="user"
                        placeholder="User Name" style="color:white"required>
                    <input type="password" name="password" class="input-field"
                        id="password"
                        placeholder="Enter Password" style="color:white" required>
                        <span id="boot-icon" class="bi bi-eye" style="font-size:10rem"></span> 
                    <input type="checkbox" class="check-box"><span>Remember
                        Password</span>
                    <button type="submit" class="submit-btn"
                       > Log In
                       </button>

                </form>
                <form id="register" method="post" action="../../assets/dangkiuser.php" class="input-group">
                    <input type="text" class="input-field" name="username" id="userres"
                        placeholder="User Name" required>
                    <input type="password" class="input-field" id="passwordres"
                        placeholder="Password" required>
                    <input type="password" class="input-field" name="password" id="passwordres"
                        placeholder="Enter Password" required>
                    <input type="hidden" class="input-field" id="role"
                        name="role" value="user" required>
                        <span id="boot-icon" class="bi bi-eye" style="font-size:10rem"></span>
                    <input type="checkbox" class="check-box"><span>I agree to
                        the terms & conditions</span>
                    <button type="submit" class="submit-btn"
                        onclick="regiter()">Register</button>
                </form>

            </div>
        </div>

        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js"></script>
        <script src="../../assets/loginuser.js">
        
    </script>
    </body>

</html>
