<?php
    include "./components/header.php"; 
    include "./config/db.php";
?>

    <div id="page_wrapper" class="bg-light">
        
        <?php include "./components/navbar.php"; ?>

        <div class="page-banner-simple bg-secondary overlay-secondary" style="background-image: url(assets/images/hero.jpg); background-size: 100%; background-position: center center; background-repeat: no-repeat; ;">
            <div class="container">
                <div class="row justify-content-md-center" style="padding-top: 100px; padding-bottom: 130px;">
                    <div class="col-lg-10 position-relative z-index-9">
                        <h1 class="text-center mx-auto text-white">Properties</h1>
                        <span class="d-table mx-auto text-white font-medium">Don't wait to buy real estate, buy real estate and wait.</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="full-row pt-5">
            <div class="container">
                <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1">
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
                    <div class="col mt-5">
                        <div class="property-grid-1 bg-white property-block border transation-this hover-shadow mb-30">
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
                                <div class="post-date ms-auto">
                                    <a href="view-property?id=<?php echo $property_id; ?>" class="btn btn-primary">More Details</a>
                                </div>
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


<?php include "./components/footer.php"; ?>