<?php
$page = "Transactions";
include "./components/header.php";
include "./components/sidebar.php";
?>

    <div class="main-content">
        <div class="header">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-end">
                        <div class="col">
                            <h1 class="header-title">Transaction Receipt</h1>
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
            $transaction_id = $_GET['id'];
            
            $select_query = "SELECT transactions.transaction_id, transactions.invoice_id, transactions.property_title, transactions.transaction_ref, transactions.transactionDate, transactions.amount, transactions.status, users.first_name, users.last_name, users.address FROM transactions INNER JOIN users WHERE transactions.transaction_id ='$transaction_id'";
            $result = mysqli_query($conn, $select_query);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $transaction_id = $row['transaction_id'];
                    $invoice_id = $row['invoice_id'];
                    $address = $row['address'];
                    $property_title = $row['property_title'];
                    $transaction_ref = $row['transaction_ref'];
                    $transactionDate = $row['transactionDate'];
                    $amount = $row['amount'];
                    $status = $row['status'];
                    $date = strtotime($transactionDate);
                    switch ($status) {
                        case "success";
                            $class = 'text-bg-success';
                            $text = 'Paid';
                            break;
                        case "pending";
                            $class = 'text-bg-warning';
                            $text = 'Not Paid';
                            break;
                        case "declined";
                            $class = 'text-bg-danger';
                            $text = 'Declined';
                            break;
                        default:
                            $class  = '';
                    }
                }
            }
        ?>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    <div class="header mt-md-5">
                        <div class="header-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="header-pretitle">Payments</h6>
                                    <h1 class="header-title">Invoice <?php echo $invoice_id; ?></h1>

                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-white lift">Download</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-body p-5" id="pdf-content">
                        <div class="row">
                            <div class="col text-end">
                                <div class="badge <?php echo $class; ?>"><?php echo $text; ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <img src="../assets/images/d-logo.png" alt="..." class="img-fluid mb-4" style="max-width: 10.5rem;">
                                <h2 class="mb-2">Invoice from Dellion</h2>
                                <p class="text-body-secondary mb-6">Invoice <?php echo $invoice_id; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h6 class="text-uppercase text-body-secondary">Invoiced from</h6>
                                <p class="text-body-secondary mb-4">
                                    <strong class="text-body">Dillion Property Limited</strong> <br>
                                    305 Cosy plaza Ada George by<br>
                                    location junction, Mgbouba,<br>
                                    Port Harcourt, Rivers State.
                                </p>

                                <h6 class="text-uppercase text-body-secondary">Invoiced ID</h6>
                                <p class="mb-4"><?php echo $invoice_id; ?></p>

                            </div>
                            <div class="col-12 col-md-6 text-md-end">
                                <h6 class="text-uppercase text-body-secondary">Invoiced to</h6>

                                <p class="text-body-secondary mb-4">
                                    <strong class="text-body"><?php echo $first_name;?> <?php echo $last_name;?></strong> <br>
                                    <?php echo $address; ?>
                                </p>

                                <h6 class="text-uppercase text-body-secondary">Date</h6>

                                <p class="mb-4">
                                    <time datetime="2018-04-23"><?php echo date('j F Y', $date); ?></time>
                                </p>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table my-4">
                                        <thead>
                                            <tr>
                                                <th class="px-0 bg-transparent border-top-0">
                                                    <span class="h6">Description</span>
                                                </th>
                                                <th class="px-0 bg-transparent border-top-0 text-center">
                                                    <span class="h6">Quantity</span>
                                                </th>
                                                <th class="px-0 bg-transparent border-top-0 text-end">
                                                    <span class="h6">Cost</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="px-0"><?php echo $property_title; ?></td>
                                                <td class="px-0 text-center">1</td>
                                                <td class="px-0 text-end">₦<?php echo number_format($amount, 2, '.', ','); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="px-0 border-top border-top-2">
                                                    <strong>Total amount due</strong>
                                                </td>
                                                <td colspan="2" class="px-0 text-end border-top border-top-2">
                                                    <span class="h3">₦<?php echo number_format($amount, 2, '.', ','); ?></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <hr class="my-5">

                                <h6 class="text-uppercase">Notes</h6>

                                <p class="text-body-secondary mb-0">We really appreciate your business and if there’s anything else we can do, please let us know! <a href="mailto:info@dillionproperty.ng">info@dillionproperty.ng</a></p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

<?php include "./components/footer.php"; ?>