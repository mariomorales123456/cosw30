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

    if($_POST['row_action'] == "deleteUser"){
        $user_id = $_POST['row_id'];
        $deleteQuery = "DELETE FROM USER_MORALES WHERE user_id='$user_id'";
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
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body class="bg">
    <div class="fg" id="adduserFormDiv">
    <h1>Create a New User</h1>
    <p>All fields must be filled to add a user</p>
    <div class="auto_margin">
    <form action="crud.php" method="POST">
        <div class="cssTable">
        <div class="cssRow">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name"><br>
        </div>
        <div class="cssRow">
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name"><br>
        </div>
        <div class="cssRow">
        <label for="email">Email</label>
        <input type="email" id="email" name="email"><br>
        </div>
        <div class="cssRow">
        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br>
        </div>
        <div class="cssRow">
        <label for="confirm_password">Confirm Password</label>
        <input type="password" id="confirm_password" name="confirm_password"><br>
        </div>
        </div>
        <div>
        <input class="submitBtn" type="submit" value="Add">
        </div>
    </form>
    </div>
    <?php
        if (isset($passwordsUnequal)){
            echo '<p id="addUserError">' . $passwordsUnequal . '</p>';
        }

         if($insertResult){
            echo '<p id="successAdd">New User Added</p>';
        }

    ?>
    </div>
    <div class="fg" id="outputListDiv">
    <h1>List of Users</h1>
    <table class="auto_margin">
        <thead>
            <tr id="theader">
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if($selectAllResult) {
    
                 $rows = mysqli_fetch_all($selectAllResult);
    
                 foreach($rows as $row){
                      echo "<tr class=\"row\">
                         <td>$row[0]</td>
                         <td>$row[1]</td>
                         <td>$row[2]</td>
                         <td>$row[3]</td>
                         <td>$row[4]</td>
                         <form action=\"update_user.php\" method=\"GET\">
                         <input type=\"hidden\" name=\"row_id\" value=\"$row[0]\">
                         <td><input type=\"submit\" value=\"Update\"></td>
                         </form>
                         <form action=\"crud.php\" method=\"POST\">
                         <input type=\"hidden\" name=\"row_id\" value=\"$row[0]\">
                         <input type=\"hidden\" name=\"row_action\" value=\"deleteUser\">
                         <td><input type=\"submit\" value=\"Delete\"></td>
                         </form>
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