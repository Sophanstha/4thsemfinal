<?php
require "connect.php";
session_start();
// login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $sql = "SELECT * FROM `register` WHERE `username` = '$username'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $arr = mysqli_fetch_assoc($result);
            if (password_verify($_POST['password'], $arr['password'])) { {
                    echo "<script>alert('login succesfully');
    window.location.href = 'shop8.php';</script>";
                    $_SESSION['logged_in'] = true;
                    $_SESSION['name'] = $username;
                    $_SESSION['phone']=$arr['phone'];

                }

            } else {
                echo "<script>alert('Wrong password');
    window.location.href = 'login.php';
    </script>";
            }
        } else {
            echo "<script>alert('Invalid Username');
    window.location.href = 'login.php';
    </script>";
        }
    } else {
        echo "
    <script> alert('error in sqlselect');
    window.location.href = 'login.php';
    
    </script>
    
    ";
    }
}


// register
if (isset($_POST['signup'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    echo $phone;
    // Query to check if the username or email already exists
    $user_exist_query = "SELECT * FROM `register` WHERE `username`= '$username' OR `email` = '$email'";
    
    $result = mysqli_query($conn, $user_exist_query);
    
    if ($result) {
        // Check if there are any rows returned
        if (mysqli_num_rows($result) > 0) {
            // Fetch the first row from the result set
            $fetch_result = mysqli_fetch_assoc($result);
            
            // Check if the username field is empty
            if ($username == "") {
                echo "<script>alert('Please enter username');</script>";
            } elseif ($fetch_result['username'] == $username) {
                // Check if the username already exists
                echo "<script>alert('Username already exists');</script>";
            } elseif ($fetch_result['email'] == $email) {
                // Check if the email already exists
                echo "<script>alert('Email already exists');</script>";
            }elseif($email == ""){
                echo "<script>alert('Please enter email');</script>";

            }

        } else {
            // If no matching username or email found, proceed with registration
            $hashpass = password_hash($password, PASSWORD_BCRYPT);
            $insert_query = "INSERT INTO `register` (`email`,`username`,`password`,`phone`) VALUES ('$email','$username','$hashpass',' $phone')";
            $insert_result = mysqli_query($conn, $insert_query);
            
            if ($insert_result) {
                echo "<script>alert('Registered Successfully');</script>";
            } else {
                echo "<script>alert('Something went wrong');</script>";
            }
        }
        echo "<script>window.location.href = 'login.php';</script>";
    } else {
        echo "<script>alert('Query execution failed');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
    }
} else {
    echo "<script>alert('Form submission error');</script>";
    echo "<script>window.location.href = 'index.php';</script>";
}


?>