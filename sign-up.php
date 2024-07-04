<?php

    include "./components/header.php";
?>

    <div id="page_wrapper" class="bg-light">

        <?php include "./components/navbar.php"; ?>

        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mx-auto">
                        <div class="bg-white xs-p-20 p-30 border rounded">
                            <h4 class="mb-4 down-line">Create your Dillion account</h4>
                            <div class="form-icon-left form-boder">
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
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                    <div class="row row-cols-1 g-3">
                                        <div class="col-md-6 col">
                                            <label class="mb-2">First Name</label>
                                            <input type="text" class="form-control bg-light" name="first_name" required>
                                        </div>
                                        <div class="col-md-6 col">
                                            <label class="mb-2">Last Name</label>
                                            <input type="text" class="form-control bg-light" name="last_name" required>
                                        </div>
                                        <div class="col">
                                            <label class="mb-2">Email</label>
                                            <input type="email" class="form-control bg-light" name="email" required>
                                        </div>
                                        <div class="col">
                                            <label class="mb-2">Phone</label>
                                            <input type="tel" class="form-control bg-light" name="phone" required>
                                        </div>
                                        <div class="col">
                                            <label class="mb-2">Password</label>
                                            <input type="password" class="form-control bg-light" name="password" required>
                                        </div>
                                        <div class="col">
                                            <div class="custom-check-box-2">
                                                <input class="d-none" type="checkbox" id="defaultCheck1" required>
                                                <label for="defaultCheck1">Accept <a href="terms" class="text-dark py-1">Terms and Conditions</a></label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <span id="loading-button">
                                                <button type="submit" name="user_registration" class="btn btn-primary mb-3 w-100">Create Account</button>
                                            </span>
                                        </div>
                                        <div class="col text-center">
                                            <p>Already have an account? <a href="sign-in" class="text-dark py-1">Log In</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php include "./components/footer.php"; ?>