<?php

include('database.php');

if($_SERVER['REQUEST_METHOD'] == 'GET') {

$user_id = $_GET['row_id'];

$selectQuery = "SELECT * FROM USER_MORALES WHERE user_id=$user_id";
                    
$selectResult = mysqli_query($connection, $selectQuery);

$userInfoArray = mysqli_fetch_assoc($selectResult);

$first_name = $userInfoArray['first_name'];
$last_name = $userInfoArray['last_name'];
$email = $userInfoArray['email'];
$password = $userInfoArray['password'];


}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password'])){
        if($_POST['password'] == $_POST['confirm_password']){
             $first_name = $_POST['first_name'];
             $last_name = $_POST['last_name'];
             $email = $_POST['email'];
             $password = $_POST['password'];    
             $user_id = $_POST['user_id'];
             $updateQuery = "UPDATE USER_MORALES SET
                                first_name = '$first_name',
                                last_name = '$last_name',
                                email = '$email',
                                password = '$password'
                                WHERE user_id = $user_id";
                    
             $updateResult = mysqli_query($connection, $updateQuery);
             
             header('Location: crud.php');
             exit;
        }
        else {
            $passwordsUnequal = "Paswords do not match";
        }
    }
    
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Update User Form
        </title>
    </head>
    <body>
        <div>
        <h1>Update User</h1>
        <form class="auto_margin" action="update_user.php" method="POST">
            
            <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
            
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" value="<?php echo $first_name ?>"><br>

            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" value="<?php echo $last_name ?>"><br>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php echo $email ?>"><br>

            <label for="password">Password</label>
            <input type="text" id="password" name="password" value="<?php echo $password ?>"><br>
            
            <label for="confirm_password">Confirm Password</label>
            <input type="text" id="confirm_password" name="confirm_password"><br>

            <input type="submit" value="Update">
        </form>
        </div>
    </body>
</html>