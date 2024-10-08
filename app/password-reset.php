<?php
    require_once "./auth/password.php";
?>
<!doctype html>
<html lang="en" data-bs-theme="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Dillion Property is a premier real estate consulting firm dedicated to providing exceptional service and expertise in the real estate sector. With a team of experienced professionals, we offer comprehensive solutions that cater to the diverse needs of our clients, ranging from individual homebuyers to large-scale investors.">
        <meta name="keywords" content="real estate, property, property search, agent, apartments, booking, business, idx, housing, real estate agency, rental">
        <meta name="author" content="Webify">
        <title>Password Reset :: Dillion Property LTD&reg;</title>
        
        <link rel="shortcut icon" href="assets/img/d-favicon.png" type="image/x-icon">
        
        <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css">
        <link rel="stylesheet" href="assets/css/libs.bundle.css">

        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/fonts/butler/stylesheet.css">
        
        <style>body { display: none; }</style>
        
    </head>
    <body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-5 col-lg-6 col-xl-6 px-lg-6 my-5 align-self-center">
                    <div class="px-6">

                        <h1 class="display-4 text-center mb-3">Password reset</h1>
                    
                        <p class="text-body-secondary text-center mb-5">Enter your email to get a password reset link</p>

                        <?php
                            if (isset($_SESSION['error_message'])) {
                                ?>
                                <div class="alert alert-danger" role="alert">
                                    <div class="alert-message text-center">
                                        <?php
                                        echo $_SESSION['error_message'];
                                        session_destroy();
                                        ?>
                                    </div>
                                </div>
                                <?php
                                unset($_SESSION['error_message']);
                            }
                        ?>
                        <?php
                            if (isset($_SESSION['success_message'])) {
                                ?>
                                <div class="alert alert-success" role="alert">
                                    <div class="alert-message text-center">
                                        <?php echo $_SESSION['success_message']; ?>
                                    </div>
                                </div>
                                <?php
                                unset($_SESSION['success_message']);
                            }
                        ?>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                            <div class="form-floating mb-4">
                                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>

                            <button class="btn btn-lg w-100 btn-primary mb-3" type="submit" name="password_reset">Reset Password</button>


                            <div class="text-center">
                                <small class="text-body-secondary text-center">
                                    Remember your password? <a href="./" class="text-danger">Sign in</a>
                                </small>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="col-12 col-md-7 col-lg-6 col-xl-6 d-none d-lg-block">
                    <div class="bg-cover h-100 min-vh-100 mt-n1 me-n3" style="background-image: url(assets/img/password-bg.jpg)"></div>
                </div>
            </div>
        </div>

        <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
        <script src="assets/js/vendor.bundle.js"></script>
        <script src="assets/js/theme.bundle.js"></script>

    </body>
</html>
