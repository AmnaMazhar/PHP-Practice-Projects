<?php
    // connect with database
    include "connect.php";

    // if button is clicked on submit
    if(isset($_POST['submit']))
    {
        // input fields must not be empty
        if(!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['date']) 
        && !empty($_POST['time']) && !empty($_POST['city']) && !empty($_POST['state']))
        {
            // fetch the data from form and store in variable
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $date = $_POST['date'];
            $time = $_POST['time'];
            $city = $_POST['city'];
            $state = $_POST['state'];

            // store the data into database
            $insert = "INSERT INTO task1_form (name, phone, email, date, time, city, state) 
            VALUES ('$name', '$phone', '$email', '$date', '$time', '$city', '$state')";

            $connect = mysqli_query($connection, $insert);

            // check if there is any error
            if(!$connect)
            {
                echo"Could not submit the form";
            }
            else
            {
                header("location: index.php");
            }

        }
        else{
            echo"Please fill the form completely";
        }
    }
    else{
        echo"Something went wrong";

     }
?>