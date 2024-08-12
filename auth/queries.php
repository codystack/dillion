<?php

//Connect database
include "./config/db.php";


//Property Enquiry Query
if (isset($_POST['property_enquiry_btn'])) {

    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $message = $conn->real_escape_string($_POST['message']);
    $propertyID = $conn->real_escape_string($_POST['propertyID']);

    //insert data into the database
    $query = "INSERT INTO property_enquiry (name, email, phone, message, propertyID) 
                VALUES('$name', '$email', '$phone', '$message', '$propertyID')";
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['success_message'] = "Your property request was sent successfully";
        echo "<meta http-equiv='refresh' content='5; URL=properties'>";
    }else {
        $_SESSION['error_message'] = "Error Occurred ".mysqli_error($conn);
    }
}



//Contact us Enquiry Query
if (isset($_POST['contact_form_btn'])) {

    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $message = $conn->real_escape_string($_POST['message']);

    //insert data into the database
    $query = "INSERT INTO contact_enquiry (first_name, last_name, email, phone, subject, message) 
                VALUES('$first_name', '$last_name', '$email', '$phone', '$subject', '$message')";
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['success_message'] = "Your request was sent successfully";
    }else {
        $_SESSION['error_message'] = "Error Occurred ".mysqli_error($conn);
    }
}