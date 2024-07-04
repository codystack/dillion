<?php
//Connect Database
include ('./config/db.php');

session_start();

if (!isset($_SESSION['email'])) {
    header('location: logout');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: ./");
}

?>
<!doctype html>
<html lang="en" data-bs-theme="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Dillion Property is a premier real estate consulting firm dedicated to providing exceptional service and expertise in the real estate sector. With a team of experienced professionals, we offer comprehensive solutions that cater to the diverse needs of our clients, ranging from individual homebuyers to large-scale investors.">
        <meta name="keywords" content="real estate, property, property search, agent, apartments, booking, business, idx, housing, real estate agency, rental">
        <meta name="author" content="Webify">
        <title>Dashboard :: Dillion Property LTD&reg;</title>
        
        <link rel="shortcut icon" href="assets/img/d-favicon.png" type="image/x-icon">
        
        <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css">
        <link rel="stylesheet" href="assets/css/libs.bundle.css">

        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/fonts/butler/stylesheet.css">
        
        <style>body { display: none; }</style>
        
    </head>
    <body>