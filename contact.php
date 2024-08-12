<?php
    include "./components/header.php";
    require_once "./auth/queries.php";
?>

    <div id="page_wrapper" class="bg-light">
        
        <?php include "./components/navbar.php"; ?>

        <div class="page-banner-simple bg-secondary overlay-secondary" style="background-image: url(assets/images/breadcrumb.jpg); background-size: 100%; background-position: center center; background-repeat: no-repeat; ;">
            <div class="container">
                <div class="row justify-content-md-center" style="padding-top: 100px; padding-bottom: 130px;">
                    <div class="col-lg-10 position-relative z-index-9">
                        <h1 class="text-center mx-auto text-white">Contact us</h1>
                        <span class="d-table mx-auto text-white font-medium">We love to hear from you</span>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="full-row pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 order-md-2">
                        <h4 class="down-line mb-4">Get In Touch</h4>
                        <div class="mb-3">
                            <ul>
                                <li class="mb-3">
                                    <h6 class="mb-0">Office Address:</h6> 305 Cosy plaza Ada George by location junction, Mgbouba, Port Harcourt.
                                </li>
                                <li class="mb-3">
                                    <h6>Contact Number:</h6> +234 811 755 2328<br> +234 703 8193 399<br> +234 814 052 6369
                                </li>
                                <li class="mb-3">
                                    <h6>Email Address:</h6> hello@dillionproperty.com
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7 order-md-1">
                        <h4 class="down-line mb-4">Send Message</h4>
                        <div class="form-simple">
                            <?php
                                if (isset($_SESSION['error_message'])) {
                                    ?>
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <div class="alert-message text-center">
                                            <span class="fe fe-alert-triangle"></span> <?php echo $_SESSION['error_message'];?>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    </div>
                                    <?php
                                    unset($_SESSION['error_message']);
                                }
                            ?>
                            <?php
                                if (isset($_SESSION['success_message'])) {
                                    ?>
                                    <div class="alert alert-success alert-dismissible" role="alert">
                                        <div class="alert-message text-center">
                                            <span class="fe fe-check-circle"></span> <?php echo $_SESSION['success_message']; ?>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="height: unset;"></button>
                                        </div>
                                    </div>
                                    <?php
                                    unset($_SESSION['success_message']);
                                }
                            ?>
                            <form class="quick-search" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-md-6 mb-20">
                                        <label class="mb-2">First Name</label>
                                        <input type="text" class="form-control bg-white" name="first_name" required="">
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <label class="mb-2">Last Name</label>
                                        <input type="text" class="form-control bg-white" name="last_name" required="">
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <label class="mb-2">Email Address</label>
                                        <input type="email" class="form-control bg-white" name="email" required="">
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <label class="mb-2">Phone</label>
                                        <input type="tel" class="form-control bg-white" name="phone" required="">
                                    </div>
                                    <div class="col-md-12 mb-20">
                                        <label class="mb-2">Subject</label>
                                        <input type="text" class="form-control bg-white" name="subject" required="">
                                    </div>
                                    <div class="col-md-12 mb-20">
                                        <label class="mb-2">Message</label>
                                        <textarea class="form-control bg-white" name="message" rows="8" required=""></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary" name="contact_form_btn" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php include "./components/footer.php"; ?>