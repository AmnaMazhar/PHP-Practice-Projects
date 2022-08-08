<?php
include "connect.php";

// if button is clicked
if (isset($_POST['submit'])) {
    
    // fields are empty or not 
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        
        // fetch form data 
        $email = $_POST['email'];
        $password = $_POST['password'];

        // select all data present in database
        $select = "SELECT * FROM task2_login WHERE email = '$email' AND password = '$password' ";
        $query = mysqli_query($connection, $select);

        // check if entered data exist in database or not
        if (mysqli_num_rows($query) == 1) {
            echo "login successful";
        }
        else {
            echo "user does not exist in database";
        }

    } 
    else {
        echo "fill the form completely";
    }
} 
else {
    echo "Something went wrong";
}
?>