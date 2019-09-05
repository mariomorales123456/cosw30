<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registration Form</title>
    </head>
    <body>
        <h1>Registration Form</h1>
        
        <p>Register Today</p>
        <form action="registration_form_process.php" method="POST">

            <label>First Name: <input type="text" name="first_name"></label><br>
            <label>Last Name: <input type="text" name="last_name" required></label><br>
            <label>Email Address: <input type="email" name="email" required></label><br>
            <label>Password: <input type="password" name="password1" required></label><br>
            <label>Confirm Password: <input type="password" name="password2" required></label><br>
            
            <br><input type="submit" value="Register">
            
        </form>
    </body>
</html>