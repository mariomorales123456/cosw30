<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login Form</title>
    </head>
    <body>
        <h1>Login Form</h1>
        
        <p>Please enter your email and password.</p>
        <form action="login_form_process.php" method="POST">

            <label>Email: <input type="email" name="email" required></label><br>
            <label>Password: <input type="password" name="password" required></label><br>
            <br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>