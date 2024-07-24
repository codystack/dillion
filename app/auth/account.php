<?php
//Connect email sending
require_once "./auth/emails/sendmail.php";

session_start();

//Connect database
include "./config/db.php";


//User registration script
if (isset($_POST['user_registration'])) {

    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $status = $conn->real_escape_string($_POST['status']);
    $affiliate_code = $conn->real_escape_string($_POST['affiliate_code']);
    $token = bin2hex(random_bytes(50)); // generate unique token

    $check_user_query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $check_user_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "User Already Exist!";
    }else {
        // Finally, register user if there are no errors in the form
        $password = sha1($password);//encrypt the password before saving in the database
        $query = "INSERT INTO users (first_name, last_name, email, password, phone, token, status, affiliate_code, verified) 
  			        VALUES('$first_name', '$last_name', '$email', '$password', '$phone', '$token', 'Inactive', '$affiliate_code', '0')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            sendVerificationEmail($email, $token, $first_name, $last_name);

            $_SESSION['email'] = $email;
            $_SESSION['verified'] = false;
            $_SESSION['first_name'] = $first_name;
            $_SESSION['user_id'] = $user_id;
            header('location: registration-success');
        }else {
            $_SESSION['error_message']    = "Error creating account contact support";
        }
    }
}



//Login script
if (isset($_POST['user_login'])) {

    $password = $conn->real_escape_string($_POST['password']);
    $email = $conn->real_escape_string($_POST['email']);

    $password = sha1($password);
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $email = $row['email'];
        $user_id = $row['user_id'];
        $status = $row['status'];
        $verified = $row['verified'];
        $picture = $row['picture'];
        $phone = $row['phone'];
    }if (mysqli_num_rows($result) == 1) {
        $_SESSION['first_name'] = $first_name;
        $_SESSION['last_name'] = $last_name;
        $_SESSION['picture'] = $picture;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['status'] = $status;
        $_SESSION['verified'] = $verified;
        $_SESSION['user_id'] = $user_id;
        if ($verified == 0){
            $_SESSION['error_message'] = "Please verify your email";
        }
        if ($verified == 1){
            if ($status == 'Inactive'){
                $_SESSION['success_message'] = "Complete account setup";
                header('location: complete-sign-up');
            }
            if ($status == 'Active'){
                $_SESSION['success_message'] = "Login Successfull";
                header('location: dashboard');
            }
        }
    }else {
        $_SESSION['error_message'] = "Incorrect Login Details";
    }
}