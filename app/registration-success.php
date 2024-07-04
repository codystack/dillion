<?php 
    session_start();

    if (!isset($_SESSION['email'])) {
        header('location: ./sign-up');
    }
    if (isset($_GET['close'])) {
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
        <title>Registration Successful :: Dillion Property LTD&reg;</title>
        
        <link rel="shortcut icon" href="assets/img/d-favicon.png" type="image/x-icon">
        
        <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css">
        <link rel="stylesheet" href="assets/css/libs.bundle.css">

        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/fonts/butler/stylesheet.css">
        
        <style>body { display: none; }</style>

        <style>
            @supports (animation: grow .5s cubic-bezier(.25, .25, .25, 1) forwards) {
                .tick {
                    stroke-opacity: 0;
                    stroke-dasharray: 29px;
                    stroke-dashoffset: 29px;
                    animation: draw .5s cubic-bezier(.25, .25, .25, 1) forwards;
                    animation-delay: .6s
                }

                .circle {
                    fill-opacity: 0;
                    stroke: #219a00;
                    stroke-width: 16px;
                    transform-origin: center;
                    transform: scale(0);
                    animation: grow 1s cubic-bezier(.25, .25, .25, 1.25) forwards;
                }
            }

            @keyframes grow {
                60% {
                    transform: scale(.8);
                    stroke-width: 4px;
                    fill-opacity: 0;
                }
                100% {
                    transform: scale(.9);
                    stroke-width: 8px;
                    fill-opacity: 1;
                    fill: #219a00;
                }
            }

            @keyframes draw {
                0%, 100% { stroke-opacity: 1; }
                100% { stroke-dashoffset: 0; }
            }

        </style>
        
    </head>
    <body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-5 col-lg-6 col-xl-6 px-lg-6 my-5 align-self-center">
                    <div class="px-6">
                        <div class="text-center">
                            <div class="svg-container">
                                <svg class="ft-green-tick" xmlns="http://www.w3.org/2000/svg" height="100" width="100" viewBox="0 0 48 48" aria-hidden="true">
                                    <circle class="circle" fill="#5bb543" cx="24" cy="24" r="22"/>
                                    <path class="tick" fill="none" stroke="#FFF" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M14 27l5.917 4.917L34 17"/>
                                </svg>
                            </div>
                            <div style="margin-top: 20px">
                                <h1 class="mb-1 display-4">Welcome to Dillion Property LTD.</h1>
                                <p class="mb-0">An email with a verification link has been sent to your email (<span class="text-primary"><?php echo $_SESSION['email']; ?></span>)</p>
                                <p class="mb-0">Check spam box if you're yet to receive the email.</p>
                                <hr class="mb-2 mt-2">
                                <p class="mb-2">Please verify your email to gain access to your account.</p>
                                <form method="get" style="margin-top: 20px">
                                    <button class="btn btn-primary" name="close" type="submit">Close</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-6 col-xl-6 d-none d-lg-block">

                    <div class="bg-cover h-100 min-vh-100 mt-n1 me-n3" style="background-image: url(assets/img/login-bg.jpg);"></div>

                </div>
            </div>
        </div>

        <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
        <script src="assets/js/vendor.bundle.js"></script>
        <script src="assets/js/theme.bundle.js"></script>

    </body>
</html>