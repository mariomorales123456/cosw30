<?php  

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    
    if (empty("$first_name") || empty("$last_name") || empty("$email")
        || empty("$password1") || empty("$password2")){
            echo "Form incorrect - no fields can be empty!";
        }
        
    elseif ($password1 != $password2) {
        echo "Form incorrect - passwords do not match!";
    }
    
    else {
        echo "<p>Registration complete!</p>";
        echo "<p>First Name: $first_name</p>";
        echo "<p>Last Name: $last_name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Pasword: $password1</p>";
    }
    
    //if (!empty($_POST['email'])){  }
    //if (isset()) { }
    
    
    
?>