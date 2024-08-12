<?php
    include "./components/header.php"; 
    include "./config/db.php";
    require_once "./auth/queries.php";
?>

    <div id="page_wrapper" class="bg-light">
        
        <?php include "./components/navbar.php"; ?>

        <?php
            $property_id = $_GET['id'];
            
            $select_query = "SELECT * FROM properties WHERE property_id ='$property_id'";
            $result = mysqli_query($conn, $select_query);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $property_id = $row['property_id'];
                    $title = $row['title'];
                    $location = $row['location'];
                    $city = $row['city'];
                    $size = $row['size'];
                    $property_info = $row['property_info'];
                    $property_features = $row['property_features'];
                    $document_title = $row['document_title'];
                    $quantity = $row['quantity'];
                    $amount = $row['amount'];
                    $property_image = $row['property_image'];
                    $property_image_one = $row['property_image_one'];
                    $property_image_two = $row['property_image_two'];
                    $property_image_three = $row['property_image_three'];
                    $property_image_four = $row['property_image_four'];
                    $video_link = $row['video_link'];
                    $status = $row['status'];
                    $created_at = $row['created_at'];
                    $date = strtotime($created_at);
                    switch ($status) {
                        case "Available";
                            $class  = 'bg-success';
                            $text   = 'Selling';
                            break;
                        case "Sold";
                            $class  = 'bg-primary';
                            $text   = 'Sold';
                            break;
                        default:
                            $class  = '';
                    }
                }
            }
        ?>

        <div class="full-row pt-5 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="text-secondary"><?php echo $title; ?></h3>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="full-row pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 order-xl-2 order-lg-2 order-2">
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
                        <div class="widget widget_contact bg-white border p-30 shadow-one rounded mb-30">
                            <h5 class="mb-4">Contact Sales</h5>
                            <form class="quick-search form-icon-right" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                <div class="form-row">
                                    <div class="col-12 mb-10">
                                        <div class="form-group mb-0">
                                            <input type="text" class="form-control" name="propertyID" value="<?php echo $property_id; ?>" hidden="">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-10">
                                        <div class="form-group mb-0">
                                            <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-10">
                                        <div class="form-group mb-0">
                                            <input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-10">
                                        <div class="form-group mb-0">
                                            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-10">
                                        <div class="form-group mb-0">
                                            <textarea class="form-control" name="message" placeholder="Message" rows="10" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-0">
                                            <button class="btn btn-primary w-100" type="submit" name="property_enquiry_btn">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-xl-8 order-xl-1 order-lg-1 order-1">
                        <div class="property-overview border summary rounded bg-white p-30 mb-30">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="single-property" style="width:1200px; height:600px; margin:0 auto 30px;">

                                        <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img src="https://backoffice.dillionproperty.ng/<?php echo $property_image; ?>" class="ls-bg" alt="" /> </div>

                                        <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:out; kenburnsscale:1.2;"> <img width="1920" height="1280" src="<?php if(!$property_image_one){echo "";}else{echo "https://backoffice.dillionproperty.ng/".$property_image_one;} ?>" class="ls-bg" alt="" /> </div>

                                        <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1280" src="<?php if(!$property_image_two){echo "";}else{echo "https://backoffice.dillionproperty.ng/".$property_image_two;} ?>" class="ls-bg" alt="" /> </div>

                                        <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1280" src="<?php if(!$property_image_three){echo "";}else{echo "https://backoffice.dillionproperty.ng/".$property_image_three;} ?>" class="ls-bg" alt="" /> </div>

                                        <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1280" src="<?php if(!$property_image_four){echo "";}else{echo "https://backoffice.dillionproperty.ng/".$property_image_four;} ?>" class="ls-bg" alt="" /> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-auto">
                                    <h4 class="listing-title"><?php echo $title; ?></h4>
                                    <span class="listing-location me-2"><i class="fas fa-map-marker-alt text-primary"></i> <?php echo $location; ?> (<?php echo $city;?>)</span>
                                    <span class="listing-location me-2"><i class="fas fa-vector-square text-primary"></i> <?php echo $size; ?> SQM</span>
                                    <span class="listing-location me-2"><i class="fas fa-file-circle-check text-primary"></i> <?php echo $document_title; ?></span>
                                    <span class="listing-location"><i class="fas fa-hands-holding-circle text-primary"></i> <?php echo $quantity; ?> Plots</span>
                                </div>
                                <div class="col-auto ms-auto xs-m-0 text-end xs-text-start pb-4">
                                    <span class="listing-price" style="flex-direction: unset;align-items: center;">₦<?php echo number_format($amount, 0, '.', ','); ?><small> (Per plot)</small></span>
                                    <span class="text-white font-mini px-2 rounded product-status ms-auto xs-m-0 py-1 <?php echo $class; ?>"> <?php echo $text; ?></span>
                                </div>
                                <div class="col-12">
                                    <a href="app" class="btn btn-primary mb-3">Pay Instalment</a>
                                    <a href="contact" class="btn btn-dark mb-3">Talk to an Agent</a>
                                    <hr>
                                </div>
                            </div>
                            <div class="row row-cols-1">
                                <div class="col">
                                    <h5 class="mb-3">Description</h5>
                                    <?php echo $property_info; ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="property-overview border rounded bg-white p-30 mb-30">
                            <div class="row row-cols-1">
                                <div class="col">
                                    <h5 class="mb-3">Features</h5>
                                    <?php echo $property_features; ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="property-overview border rounded bg-white overflow-hidden mb-30" style="display: <?php if (!$video_link){ echo 'none';}else{ echo 'unset';}; ?>">
                            <div class="row row-cols-1">
                                <div class="col">
                                    <div class="mt-md-30 position-relative overlay-secondary">
                                        <img src="https://backoffice.dillionproperty.ng/<?php echo $property_image; ?>" alt="property video">
                                        <a data-fancybox="" class="video-popup" href="<?php echo $video_link; ?>" title="video popup">
                                            <span class="flaticon-play-button bg-primary text-white xy-center"></span>
                                        </a>
                                        <div class="loader position-absolute xy-center">
                                            <div class="loader-inner ball-scale-multiple">
                                                <div style="background: var(--theme-primary-color);"></div>
                                                <div style="background: var(--theme-primary-color);"></div>
                                            </div><span class="tooltip">
										  <b>ball-scale-multiple</b></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include "./components/footer.php"; ?>