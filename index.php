<html>
    <head>
        <title>OASIS InfoByte - Home</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body >
        
            <center>
            <div id="headerSection">
            <h1>OASIS InfoByte</h1>  
            </div>
            <hr>

            <div id="loginSection">
                <h2>Login</h2>
                <form action="api/login.php" method="POST">
                    <input type="number" name="mob" placeholder="Enter mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Enter password" required><br><br>                 
                    <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                    New user? <a href="routes/register.php">Register here</a>
                </form>
            </div>

            </center> 
    </body>
</html>