<?php
$page = "Properties";
include "./components/header.php";
include "./components/sidebar.php";
?>

    <div class="main-content">
        <div class="header">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-end">
                        <div class="col">
                            <h1 class="header-title">
                                <button onclick="history.back()" class="btn btn-dark btn-sm me-3"><i class="fe fe-arrow-left"></i> Go back</button> 
                            </h1>
                        </div>
                        <div class="col-auto navbar-user">
                            <div class="dropup">
                                <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="avatar avatar-sm avatar-online">
                                        <img src="<?php echo $picture; ?>" class="avatar-img rounded-circle" alt="...">
                                    </div>
                                </a>
                
                                <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                                    <a href="profile" class="dropdown-item">Profile</a>
                                    <a href="settings" class="dropdown-item">Settings</a>
                                    <hr class="dropdown-divider">
                                    <a href="logout" class="dropdown-item">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

        <div class="container-fluid">

            <div class="row mt-2 align-items-center">
                <div class="col">
                    <h1 class="header-title"><?php echo $title; ?></h1>
                </div>

                <div class="col-auto">
                    <button onclick="history.back()" class="btn btn-outline-primary ms-2">Pay Instalment</button>
                    <button type="button" data-id="<? echo $property_id; ?>" onclick="selectPaymentMethod(this);"  class="btn btn-primary ms-2">Buy Now, Once!</button>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-8">
                    <div class="row mt-5">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <p class="text-center mb-3">
                                        <img src="http://localhost/dillion-admin/<?php echo $property_image; ?>" alt="..." class="img-fluid" style="height: 30rem;width: 100%;object-fit: cover;object-position: top;border-radius: 1rem;">
                                    </p>

                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="mt-1 mb-0"><?php echo $title; ?></h3>
                                            </div>
                                            <div class="col-auto">
                                                <span class="badge text-<?php echo $class; ?>"><?php echo $text; ?></span>
                                            </div>
                                            <div class="mt-3">
                                                <span class="me-2 text-secondary"><i class="fe fe-map-pin text-danger"></i> <?php echo $location; ?></span>
                                                <span class="me-2 text-secondary"><i class="fe fe-map text-danger"></i> <?php echo $size; ?> SQM</span>
                                                <span class="me-2 text-secondary"><i class="fe fe-file-text text-danger"></i> <?php echo $document_title; ?></span>
                                                <span class="me-2 text-secondary"><i class="fe fe-layers text-danger"></i> <?php echo $quantity; ?> Plots</span>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col align-self-center mt-1">
                                            <h2 class="mb-0">₦<?php echo number_format($amount, 0, '.', ','); ?><small> (Per plot)</small></h2>
                                        </div>
                                        <div class="col-auto align-self-end">
                                            <a href="view-property?id=<?php echo $property_id; ?>" class="btn btn-primary" type="">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="mt-1 mb-0">Description</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <?php echo $property_info; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="mt-1 mb-0">Features</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <?php echo $property_features; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <div class="ratio ratio-16x9 w-100 mx-auto">
                                                    <iframe src="<?php echo $video_link; ?>" style="border-radius: 1rem;" title="video" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="row mt-5">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="list-group list-group-flush my-n3">
                                        <div class="list-group-item">
                                            <div class="row align-items-center">
                                            <div class="col">

                                                <!-- Title -->
                                                <h5 class="mb-0">
                                                Member Count
                                                </h5>

                                            </div>
                                            <div class="col-auto">

                                                <!-- Text -->
                                                <small class="text-body-secondary">
                                                129
                                                </small>

                                            </div>
                                            </div> <!-- / .row -->
                                        </div>
                                        <div class="list-group-item">
                                            <div class="row align-items-center">
                                            <div class="col">

                                                <!-- Title -->
                                                <h5 class="mb-0">
                                                Created
                                                </h5>

                                            </div>
                                            <div class="col-auto">

                                                <!-- Time -->
                                                <time class="small text-body-secondary" datetime="2018-10-28">
                                                10/24/18
                                                </time>

                                            </div>
                                            </div> <!-- / .row -->
                                        </div>
                                        <div class="list-group-item">
                                            <div class="row align-items-center">
                                            <div class="col">

                                                <!-- Title -->
                                                <h5 class="mb-0">
                                                Slack Channel
                                                </h5>

                                            </div>
                                            <div class="col-auto">

                                                <!-- Link -->
                                                <a href="#!" class="small">
                                                #bloomers
                                                </a>

                                            </div>
                                            </div> <!-- / .row -->
                                        </div>
                                        <div class="list-group-item">
                                            <div class="row align-items-center">
                                            <div class="col">

                                                <!-- Title -->
                                                <h5 class="mb-0">
                                                Privacy
                                                </h5>

                                            </div>
                                            <div class="col-auto">

                                                <!-- Text -->
                                                <small class="text-body-secondary">
                                                Public
                                                </small>

                                            </div>
                                            </div> <!-- / .row -->
                                        </div>
                                        <div class="list-group-item">
                                            <div class="row align-items-center">
                                            <div class="col">

                                                <!-- Title -->
                                                <h5 class="mb-0">
                                                Owner
                                                </h5>

                                            </div>
                                            <div class="col-auto">

                                                <!-- Link -->
                                                <a href="#!" class="small">
                                                Dianna Smiley
                                                </a>

                                            </div>
                                            </div> <!-- / .row -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php 
include "./components/modals.php";
include "./components/footer.php";
?>