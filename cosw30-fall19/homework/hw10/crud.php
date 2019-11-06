<?php

include('database.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password'])){
        if($_POST['password'] == $_POST['confirm_password']){
             $first_name = $_POST['first_name'];
             $last_name = $_POST['last_name'];
             $email = $_POST['email'];
             $password = $_POST['password'];    
        
            $insertQuery = "INSERT INTO USER_MORALES (first_name, last_name, email, password)
                    VALUES ('$first_name', '$last_name', '$email', '$password')";
                    
             $insertResult = mysqli_query($connection, $insertQuery);
        }
        else {
            $passwordsUnequal = "Paswords do not match";
        }
    }
    /*elseif(empty($_POST['delete_fname']) && empty($_POST['delete_lname'])){
        $addUserError = "Every field must be filled to add a user";
    }*/
    if(!empty($_POST['delete_fname']) && !empty($_POST['delete_lname'])){
    $delete_fname = $_POST['delete_fname'];
    $delete_lname = $_POST['delete_lname'];    
        
    $deleteQuery = "DELETE FROM USER_MORALES WHERE first_name='$delete_fname' AND last_name='$delete_lname'";

    $deleteResult = mysqli_query($connection, $deleteQuery);
    }
}

$selectAllQuery = 'SELECT * FROM USER_MORALES';

$selectAllResult = mysqli_query($connection, $selectAllQuery);

?>

<!Doctype html>
<html>
<head>
    <title>My First CRUD</title>
    <style>
        .align_center
        {
            text-align: center;
        }
        .auto_margin
        {
            display: inline-block;
            margin-left: auto;
            margin-right: auto;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="align_center" id="adduserFormDiv">
    <h1>Create a New User</h1>
    <p>All fields must be filled to add a user</p>
    <form class="auto_margin" action="crud.php" method="POST">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name"><br>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name"><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email"><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br>

        <label for="confirm_password">Confirm Password</label>
        <input type="password" id="confirm_password" name="confirm_password"><br>

        <input type="submit" value="Add">
    </form>
    <?php
        /*if(isset($addUserError)){
            echo '<p id="addUserError">' . $addUserError . '</p>';
        }*/
        if (isset($passwordsUnequal)){
            echo '<p id="addUserError">' . $passwordsUnequal . '</p>';
        }
    ?>
    <?php
    if($insertResult){
        echo '<p id="successAdd">New User Added</p>';
    }
    /*
    else {
        echo '<p id="failAdd">Failed to add new user</p>';
    }*/
    ?>
    </div>
    <div class="align_center" id="removeUserFormDiv">
    <h1>Remove a user</h1>
    <p>All Fields must be filled to remove a user</p>
    <form class="auto_margin" action="crud.php" method="POST">
        <label for="delete_fname">First Name</label>
        <input type="text" id="delete_fname" name="delete_fname"><br>

        <label for="delete_lname">Last Name</label>
        <input type="text" id="delete_lname" name="delete_lname"><br>

        <input type="submit" value="Delete">
    </form>
    <?php
    if($deleteResult){
        echo '<p id="successDelete">User Deleted</p>';
    }
    /*
    else {
        echo '<p id="failDelete">Failed to delete</p>';
    }*/
    ?>
    </div>
    <div class="align_center" id="outputListDiv">
    <h2>List of Users</h2>
    <table class="auto_margin">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if($selectAllResult) {
    
                 $rows = mysqli_fetch_all($selectAllResult);
    
                 foreach($rows as $row){
                      echo "<tr>
                         <td>$row[1]</td>
                         <td>$row[2]</td>
                         <td>$row[3]</td>
                         <td>$row[4]</td>
                         </tr>";
                    }
                 }
            else {
    
                 echo('Unable to fetch from database');
            }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>