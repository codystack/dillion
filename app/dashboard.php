<?php
$page = "Dashboard";
include "./components/header.php";
include "./components/sidebar.php";
?>

    <div class="main-content">
        <div class="header">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-end">
                        <div class="col">
                            <h1 class="header-title">Welcome, <?php echo $first_name; ?> 👋🏽 </h1>
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

        <div class="container-fluid">

            <div class="row">
                <div class="col-12 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center gx-0">
                                <div class="col">
                                    <h6 class="text-uppercase text-body-secondary mb-2">Total Investment</h6>
                                    <span class="h2 mb-0">₦<?php echo number_format($wallet, 2, '.', ','); ?></span>
                                </div>
                                <div class="col-auto">
                                    <div class="avatar avatar-sm">
                                        <div class="avatar-title fs-lg bg-success-subtle rounded-circle text-success">
                                            <i class="fe fe-dollar-sign"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center gx-0">
                                <div class="col">
                                    <h6 class="text-uppercase text-body-secondary mb-2">Upcoming Payment</h6>
                                    <span class="h2 mb-0">₦<?php echo number_format($paid_earnings, 2, '.', ','); ?></span>
                                </div>
                                <div class="col-auto">
                                    <div class="avatar avatar-sm">
                                        <div class="avatar-title fs-lg bg-danger-subtle rounded-circle text-danger">
                                            <i class="fe fe-dollar-sign"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center gx-0">
                                <div class="col">
                                    <h6 class="text-uppercase text-body-secondary mb-2">Total Property</h6>
                                    <?php
                                        $countDocuments = mysqli_query($conn, "SELECT document_id FROM documents WHERE userID='$user_id'");
                                        echo "<span class='h2 mb-0'>".number_format(mysqli_num_rows($countDocuments), 0, '.', ',')."</span>"
                                    ?>
                                </div>
                                <div class="col-auto">
                                    <div class="avatar avatar-sm">
                                        <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                                            <i class="fe fe-home"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center gx-0">
                                <div class="col">
                                    <h6 class="text-uppercase text-body-secondary mb-2">Documents</h6>
                                    <?php
                                        $countDocuments = mysqli_query($conn, "SELECT document_id FROM documents WHERE userID='$user_id'");
                                        echo "<span class='h2 mb-0'>".number_format(mysqli_num_rows($countDocuments), 0, '.', ',')."</span>"
                                    ?>
                                </div>
                                <div class="col-auto">
                                    <div class="avatar avatar-sm">
                                        <div class="avatar-title fs-lg bg-warning-subtle rounded-circle text-warning">
                                            <i class="fe fe-file-text"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2 align-items-center">
                <div class="col">
                    <h5 class="header-pretitle">Properties</h5>
                </div>

                <div class="col-auto">
                    <a href="properties" class="btn btn-primary btn-sm ms-2">View all <i class="fe fe-arrow-right"></i></a>
                </div>
            </div>

            <hr class="mb-4">

            <div class="row">
                <?php
                    $select_query = "SELECT * FROM properties ORDER BY created_at DESC LIMIT 3";
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
                                        $class  = 'bg-danger';
                                        $text   = 'Sold';
                                        break;
                                    default:
                                        $class  = '';
                                }
                ?>
                <div class="col-12 col-lg-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="text-center mb-3">
                                <a href="view-property?id=<?php echo $property_id; ?>">
                                    <img src="http://localhost/dillion-admin/<?php echo $property_image; ?>" alt="..." class="img-fluid" style="height: 14rem;width: 100%;object-fit: cover;object-position: top;border-radius: 1rem;">
                                </a>
                            </p>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col">
                                        <a class="text-dark" href="view-property?id=<?php echo $property_id; ?>">
                                            <h3 class="mt-1 mb-0"><?php echo $title; ?></h3>
                                        </a>
                                    </div>
                                    <div class="col-auto">
                                        <span class="badge text-<?php echo $class; ?>"><?php echo $text; ?></span>
                                    </div>
                                    <div class="mt-3">
                                        <span class="me-2 text-secondary"><i class="fe fe-map-pin text-danger"></i> <?php echo $location; ?> (<?php echo $city; ?>)</span>
                                        <span class="me-2 text-secondary"><i class="fe fe-map text-danger"></i> <?php echo $size; ?> SQM</span>
                                    </div>
                                    <div>
                                        <span class="me-2 text-secondary"><i class="fe fe-file-text text-danger"></i> <?php echo $document_title; ?></span>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col align-self-center mt-1">
                                    <h2 class="mb-0">₦<?php echo number_format($amount, 0, '.', ','); ?><small> (Per plot)</small></h2>
                                </div>
                                <div class="col-auto align-self-end">
                                    <a href="view-property?id=<?php echo $property_id; ?>" class="btn btn-primary">More Details</a>
                                </div>
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