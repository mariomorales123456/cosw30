<?php 
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    
    echo "<p>First Name: $first_name</p>";
    echo "<p>Last Name: $last_name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Gender: $gender</p>";
    echo "<p>Age Group: $age</p>";
    
    echo "<p>Interests: </p>";
    if(!empty($_POST['interests'][0])){
            echo "<p>- Surfing</p>";
    }
    if(!empty($_POST['interests'][1])){
            echo "<p>- Baseball</p>";
    }
    if(!empty($_POST['interests'][2])){
            echo "<p>- Basketball</p>";
    }
    if(!empty($_POST['interests'][3])){
            echo "<p>- Bowling</p>";
    }
    if(!empty($_POST['interests'][4])){
            echo "<p>- Pool</p>";
    }
    if(!empty($_POST['interests'][5])){
            echo "<p>- Swimming</p>";
    }
    
    $contribution = $_POST['contribution'];
    
    echo "<p>Contribution: $contribution</p>";


    if(!empty($_POST['signup'])){
        $signup = $_POST['signup'];
        echo "<p>Email List: $signup</p>";
    }
    else {
        echo "<p>Email List: no</p>";
    }

    if(!empty($_POST['comments'])){
        $comments = $_POST['comments'];
        echo "<p>Comments: $comments</p>";
    }

?>