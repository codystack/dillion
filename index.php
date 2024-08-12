<?php
    include "./components/header.php";
    include "./config/db.php";
?>

    <div id="page_wrapper">

        <?php include "./components/navbar.php"; ?>

        <div class="full-row p-0 overlay-dark vh-100" style="background-image: url('assets/images/hero.jpg'); background-position: center center; background-size: cover;">
            <div class="container">
                <div class="banner-search">
                    <div class="row">
                        <div class="col-lg-7 mx-auto position-relative text-center">
                            <p style="font-size:20px; font-weight:400; font-family: 'Sen', sans-serif;" class="ls-l text-white" data-ls="offsetyin:100%; durationin:1500; delayin:500; clipin:0 0 100% 0; durationout:400; parallaxlevel:0;">Dillion Property LTD</p>
                            <p style="font-size:48px; font-weight:700; font-family: 'Sen', sans-serif;" class="ls-l text-white">Making Everyone a Landlord</p>
                            <p style="top:450px; left:50%; text-align:center; font-weight:400; font-style:normal; text-decoration:none; width:650px; font-size:18px; color:#ffffff; line-height:30px; white-space:normal;" class="ls-l ls-hide-phone" data-ls="offsetyin:100%; durationin:1500; delayin:1500; clipin:0 0 100% 0; durationout:400; parallaxlevel:0;">Looking for your dream house or property.</p>
                            <a href="properties" class="btn btn-primary">Let's find you a property</a>
                            <a href="contact" class="btn btn-light">Talk to an agent</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h1 class="text-dark mb-0">You are not buying a house, you are buying a lifestyle.</h1>
                    </div>
                    <div class="col-lg-5">
                        <div class="py-2">
                            <p>Our mission is to deliver unparalleled real estate services that exceed our clients' expectations. We aim to create value through innovative solutions, expert advice, and unwavering dedication to excellence. At Dillion Property, we believe that our success is measured by the success of our clients, and we are committed to building long-term relationships based on trust and mutual benefit.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex ps-5">
                        <ul class="list-style-tick d-flex flex-column my-2">
                            <li>Accountability</li>
                            <li>Responsibility</li>
                            <li>Integrity</li>
                            <li>Service</li>
                            <li>Excellence</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- <div class="full-row p-0">
            <div class="container">
                <div class="row">
                    <div class="col-12"><hr></div>
                </div>
            </div>
        </div> -->
        
        <!-- <div class="full-row">
            <div class="container">
                <div class="row row-cols-lg-3 row-cols-1">
                    <div class="col">
                        <div class="d-flex flex-row text-uppercase">
                            <h1 class="text-primary mb-0 pe-4">$15.4M</h1>
                            <p>Owned from <br>Properties Transactions</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-row text-uppercase">
                            <h1 class="text-primary mb-0 pe-4">25K+</h1>
                            <p>Owned from <br>Properties Transactions</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-row text-uppercase">
                            <h1 class="text-primary mb-0 pe-4">500</h1>
                            <p>Owned from <br>Properties Transactions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        
        <div class="full-row bg-light">
            <div class="container">
                <div class="row">
                    <div class="col mb-4">
                        <div class="align-items-center d-flex">
                            <div class="me-auto">
                                <h2 class="d-table">Our <span class="text-primary">Properties</span></h2>
                            </div>
                            <a href="properties" class="ms-auto btn-link">View All Properties</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="3block-carusel nav-disable owl-carousel">
                            <?php
                                $select_query = "SELECT * FROM properties ORDER BY created_at DESC LIMIT 6";
                                    $result = mysqli_query($conn, $select_query);
                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {
                                            $property_id = $row['property_id'];
                                            $title = $row['title'];
                                            $location = $row['location'];
                                            $city = $row['city'];
                                            $size = $row['size'];
                                            $document_title = $row['document_title'];
                                            $quantity = $row['quantity'];
                                            $amount = $row['amount'];
                                            $property_image = $row['property_image'];
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
                            ?>
                            <div class="item">
                                <div class="property-grid-1 property-block bg-white transation-this">
                                    <div class="overflow-hidden position-relative transation thumbnail-img hover-img-zoom m-4">
                                        <div class="cata position-absolute">
                                            <span class="sale <?php echo $class; ?> text-white"><?php echo $text; ?></span>
                                        </div>
                                        <a href="view-property?id=<?php echo $property_id; ?>">
                                            <img src="https://backoffice.dillionproperty.ng/<?php echo $property_image; ?>" alt="Property image" style="height: 14rem;width: 100%;object-fit: cover;object-position: top;border-radius: 1rem;">
                                        </a>
                                    </div>
                                    <div class="property_text p-4">
                                        <h5 class="listing-title"><a href="view-property?id=<?php echo $property_id; ?>"><?php echo $title; ?></a></h5>
                                        <span class="listing-location"><i class="fas fa-map-marker-alt"></i> <?php echo $location; ?> (<?php echo $city;?>)</span>
                                        <ul class="d-flex quantity font-fifteen">
                                            <li title="Area"><span><i class="fa-solid fa-vector-square text-primary"></i></span><?php echo $size; ?> SQM</li>
                                            <li title="Area"><span><i class="fa-solid fa-file-circle-check text-primary"></i></span><?php echo $document_title; ?></li>
                                            <li title="Area"><span><i class="fa-solid fa-hands-holding-circle text-primary"></i></span> <?php echo $quantity; ?> Plots</li>
                                        </ul>
                                    </div>
                                    <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                                        <div>
                                            <span class="listing-price">₦<?php echo number_format($amount, 0, '.', ','); ?><small> (Per plot)</small></span>
                                        </div>
                                        <div class="post-date ms-auto"><a href="view-property?id=<?php echo $property_id; ?>" class="btn btn-primary">More Details</a></div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="text-center mb-5">
                            <h2 class="mx-auto mb-2">Need Properties in These Cities?<br>We've got you covered.</h2>
                            <span class="d-table w-50 w-sm-100 sub-title mx-auto text-center">Let's help you shop for that next property in your preferred city.</span>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-lg-5 row-cols-md-5 row-cols-sm-2 row-cols-1">
                    <div class="col col-xl-3">
                        <div class="hover-img-zoom text-center mb-4">
                            <div class="overflow-hidden transation thumbnail-img rounded-circle bg-secondary">
                                <img src="assets/images/location/ph.jpg" alt="image not found">
                            </div>
                            <div class="mt-3">
                                <h5 class="transation font-400">Port Harcourt</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-3">
                        <div class="hover-img-zoom text-center mb-4">
                            <div class="overflow-hidden transation thumbnail-img rounded-circle bg-secondary">
                                <img src="assets/images/location/lagos.jpg" alt="Lagos image not found">
                            </div>
                            <div class="mt-3">
                                <h5 class="transation font-400">Lagos</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-3">
                        <div class="hover-img-zoom text-center mb-4">
                            <div class="overflow-hidden transation thumbnail-img rounded-circle bg-secondary">
                                <img src="assets/images/location/abuja.jpg" alt="Abuja image not found">
                            </div>
                            <div class="mt-3">
                                <h5 class="transation font-400">Abuja</h5>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col">
                        <div class="hover-img-zoom text-center mb-4">
                            <div class="overflow-hidden transation thumbnail-img rounded-circle bg-secondary">
                                <img src="assets/images/location/4.png" alt="image not found">
                            </div>
                            <div class="mt-3">
                                <h5 class="transation font-400">Benin</h5>
                            </div>
                        </div>
                    </div> -->
                    <div class="col col-xl-3">
                        <div class="hover-img-zoom text-center mb-4">
                            <div class="overflow-hidden transation thumbnail-img rounded-circle bg-secondary">
                                <img src="assets/images/location/owerri.jpg" alt="Oweeri image not found">
                            </div>
                            <div class="mt-3">
                                <h5 class="transation font-400">Owerri</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "./components/testimonial.php"; ?>

        <!-- <div class="full-row bg-secondary">
            <div class="container">
                <div class="row">
                    <div class="col mb-5">
                        <h2 class="down-line text-white w-50 mx-auto text-center w-sm-100">Most Popular Property</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="3block-carusel nav-disable owl-carousel">
                            <div class="item">
                                <div class="property-grid-1 property-block bg-white transation-this">
                                    <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                        <div class="cata position-absolute"><span class="sale bg-secondary text-white">For Sale</span></div>
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-1.png" alt="Image Not Found!"></a>
                                        <a href="#" class="listing-ctg text-white"><i class="fa-solid fa-building"></i><span>Apartment</span></a>
                                        <ul class="position-absolute quick-meta">
                                            <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                            <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                            <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="property_text p-4">
                                        <span class="listing-price">$1850<small> ( Monthly )</small></span>
                                        <h5 class="listing-title"><a href="property-single-v1.html">Family House Residense</a></h5>
                                        <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 4213 South Burlington, VT 05403 </span>
                                        <ul class="d-flex quantity font-fifteen">
                                            <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                            <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                            <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                            <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                        </ul>
                                    </div>
                                    <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                                        <div class="agent">
                                            <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="assets/images/team/1.jpg" alt="avata"><span>Ali Tufan</span></a>
                                        </div>
                                        <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="property-grid-1 property-block bg-white transation-this">
                                    <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                        <div class="cata position-absolute">
                                            <span class="sale bg-secondary text-white">For Sale</span>
                                            <span class="featured bg-primary text-white">Featured</span>
                                        </div>
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-2.png" alt="Image Not Found!"></a>
                                        <a href="#" class="listing-ctg text-white"><i class="fa-solid fa-building"></i><span>Condo</span></a>
                                        <ul class="position-absolute quick-meta">
                                            <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                            <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                            <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="property_text p-4">
                                        <span class="listing-price">$120,5500<small> ( One Time )</small></span>
                                        <h5 class="listing-title"><a href="property-single-v1.html">Luxury Condos Riverside</a></h5>
                                        <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 2305 Frog Lane Overlandpk, MO 66210</span>
                                        <ul class="d-flex quantity font-fifteen">
                                            <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                            <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                            <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                            <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                        </ul>
                                    </div>
                                    <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                                        <div class="agent">
                                            <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="assets/images/team/1.jpg" alt="avata"><span>Ali Tufan</span></a>
                                        </div>
                                        <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="property-grid-1 property-block bg-white transation-this">
                                    <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                        <div class="cata position-absolute">
                                            <span class="sale bg-secondary text-white">For Rent</span>
                                        </div>
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-3.png" alt="Image Not Found!"></a>
                                        <a href="#" class="listing-ctg text-white"><i class="fa-solid fa-building"></i><span>Villa</span></a>
                                        <ul class="position-absolute quick-meta">
                                            <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                            <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                            <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="property_text p-4">
                                        <span class="listing-price">$3450<small> ( Monthly )</small></span>
                                        <h5 class="listing-title"><a href="property-single-v1.html">Gorgeous Villa Bay View</a></h5>
                                        <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 2305 Frog Lane Overlandpk, MO 66210</span>
                                        <ul class="d-flex quantity font-fifteen">
                                            <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                            <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                            <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                            <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                        </ul>
                                    </div>
                                    <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                                        <div class="agent">
                                            <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="assets/images/team/1.jpg" alt="avata"><span>Ali Tufan</span></a>
                                        </div>
                                        <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="property-grid-1 property-block bg-white transation-this">
                                    <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                        <div class="cata position-absolute">
                                            <span class="sale bg-secondary text-white">For Rent</span>
                                        </div>
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-4.png" alt="Image Not Found!"></a>
                                        <a href="#" class="listing-ctg text-white"><i class="fa-solid fa-building"></i><span>Condo</span></a>
                                        <ul class="position-absolute quick-meta">
                                            <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                            <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                            <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="property_text p-4">
                                        <span class="listing-price">$1,0450<small> ( Monthly )</small></span>
                                        <h5 class="listing-title"><a href="property-single-v1.html">New Developed Condos</a></h5>
                                        <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 2305 Frog Lane Overlandpk, MO 66210</span>
                                        <ul class="d-flex quantity font-fifteen">
                                            <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                            <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                            <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                            <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                        </ul>
                                    </div>
                                    <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                                        <div class="agent">
                                            <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="assets/images/team/1.jpg" alt="avata"><span>Ali Tufan</span></a>
                                        </div>
                                        <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="property-grid-1 property-block bg-white transation-this">
                                    <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                        <div class="cata position-absolute"><span class="sale bg-secondary text-white">For Sale</span></div>
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-1.png" alt="Image Not Found!"></a>
                                        <a href="#" class="listing-ctg text-white"><i class="fa-solid fa-building"></i><span>Apartment</span></a>
                                        <ul class="position-absolute quick-meta">
                                            <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                            <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                            <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="property_text p-4">
                                        <span class="listing-price">$1850<small> ( Monthly )</small></span>
                                        <h5 class="listing-title"><a href="property-single-v1.html">Family House Residense</a></h5>
                                        <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 4213 Avenue South Burlington, VT 05403 </span>
                                        <ul class="d-flex quantity font-fifteen">
                                            <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                            <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                            <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                            <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                        </ul>
                                    </div>
                                    <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                                        <div class="agent">
                                            <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="assets/images/team/1.jpg" alt="avata"><span>Ali Tufan</span></a>
                                        </div>
                                        <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="property-grid-1 property-block bg-white transation-this">
                                    <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                        <div class="cata position-absolute">
                                            <span class="sale bg-secondary text-white">For Sale</span>
                                            <span class="featured bg-primary text-white">Featured</span>
                                        </div>
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-2.png" alt="Image Not Found!"></a>
                                        <a href="#" class="listing-ctg text-white"><i class="fa-solid fa-building"></i><span>Condos</span></a>
                                        <ul class="position-absolute quick-meta">
                                            <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                            <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                            <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="property_text p-4">
                                        <span class="listing-price">$100,8850<small> ( One Time )</small></span>
                                        <h5 class="listing-title"><a href="property-single-v1.html">Luxury Condos</a></h5>
                                        <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 2305 Frog Lane Overlandpk, MO 66210</span>
                                        <ul class="d-flex quantity font-fifteen">
                                            <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                            <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                            <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                            <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                        </ul>
                                    </div>
                                    <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                                        <div class="agent">
                                            <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="assets/images/team/1.jpg" alt="avata"><span>Ali Tufan</span></a>
                                        </div>
                                        <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="full-row bg-light">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <span class="tagline-3 d-table mx-auto mb-3">Apartment Sketch</span>
                        <h1 class="main-title w-50 mx-auto mb-4 text-center w-sm-100">Apartments Plan</h1>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="tab-style-1 mb-4">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a href="#pill1-deluxe" class="nav-link active" data-bs-toggle="pill">Deluxe Portion</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#pill1-garden" class="nav-link" data-bs-toggle="pill">Garden House</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#pill1-double" class="nav-link" data-bs-toggle="pill">Double Room</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pill1-deluxe">
                                <div class="row row-cols-lg-2 row-cols-1 g-4">
                                    <div class="col">
                                        <div class="apartments-plan-info bg-primary text-white">
                                            <h2 class="text-white">Deluxe Portion</h2>
                                            <p>Enimad minim veniam quis nostrud exercitation ullamco laboris. Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo eiusmod tempor.Incididunt labore et dolore magna aliqua. sed ayd minim veniam.</p>
                                            <div class="apartments-info-list mt-40">
                                                <ul>
                                                    <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                    <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                    <li><label>Bathroom</label> <span>45 Sq. Ft</span></li>
                                                    <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                    <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="apartments-plan-img">
                                            <img src="assets/images/clipart/17.png" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pill1-garden">
                                <div class="row row-cols-xl-2 row-cols-sm-2 row-cols-1 g-4">
                                    <div class="col">
                                        <div class="apartments-plan-info bg-primary text-white">
                                            <h2 class="text-white">Deluxe Portion</h2>
                                            <p>Enimad minim veniam quis nostrud exercitation ullamco laboris. Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo eiusmod tempor.Incididunt labore et dolore magna aliqua. sed ayd minim veniam.</p>
                                            <div class="apartments-info-list mt-40">
                                                <ul>
                                                    <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                    <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                    <li><label>Bathroom</label> <span>45 Sq. Ft</span></li>
                                                    <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                    <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="apartments-plan-img">
                                            <img src="assets/images/clipart/17.png" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pill1-double">
                                <div class="row row-cols-xl-2 row-cols-sm-2 row-cols-1 g-4">
                                    <div class="col">
                                        <div class="apartments-plan-info bg-primary text-white">
                                            <h2 class="text-white">Deluxe Portion</h2>
                                            <p>Enimad minim veniam quis nostrud exercitation ullamco laboris. Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo eiusmod tempor.Incididunt labore et dolore magna aliqua. sed ayd minim veniam.</p>
                                            <div class="apartments-info-list mt-40">
                                                <ul>
                                                    <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                    <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                    <li><label>Bathroom</label> <span>45 Sq. Ft</span></li>
                                                    <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                    <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="apartments-plan-img">
                                            <img src="assets/images/clipart/17.png" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <?php include "./components/register-cta.php"; ?>

<?php include "./components/footer.php"; ?>