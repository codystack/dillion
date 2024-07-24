<?php
    include "./components/header.php";
?>

    <div id="page_wrapper" class="bg-light">
        
        <?php include "./components/navbar.php"; ?>

        <div class="full-row py-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h3 class="text-secondary">Contact</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 bg-transparent p-0">
                                <li class="breadcrumb-item"><a href="./">Home</a></li>
                                <li class="breadcrumb-item active text-primary" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="full-row pt-0">
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
                            <form id="contact-form" action="#" method="post" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-md-6 mb-20">
                                        <label class="mb-2">Full Name:</label>
                                        <input type="text" class="form-control bg-white" name="name" required="">
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <label class="mb-2">Your Email:</label>
                                        <input type="email" class="form-control bg-white" name="email" required="">
                                    </div>
                                    <div class="col-md-12 mb-20">
                                        <label class="mb-2">Subject:</label>
                                        <input type="text" class="form-control bg-white" name="subject" required="">
                                    </div>
                                    <div class="col-md-12 mb-20">
                                        <label class="mb-2">Message:</label>
                                        <textarea class="form-control bg-white" name="message" rows="8" required=""></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary" name="submit" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php include "./components/footer.php"; ?>