<?php  

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    //if (!empty($_POST['email'])){  }
    //if (isset()) { }
    
    $dbemail = 'test@email.com';
    $dbpassword = 'password';
    
    if ($dbemail == $email && $dbpassword == $password) {
        echo '<h1>You logged in successfully!</h1>';
        echo "<p>Email Address: $email</p>";
        echo "<p>Password: password</p>";
    } 
    
    else {
        echo '<h1>Sorry... try again</h1>';
        echo '<a href="login_form.php">Go Back</a>';
    }
    
?>