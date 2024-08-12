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
                            <h1 class="header-title">Transactions </h1>
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
                <div class="col-12">
                    <div class="card" data-list="{&quot;valueNames&quot;: [&quot;orders-order&quot;, &quot;orders-product&quot;, &quot;orders-date&quot;, &quot;orders-total&quot;, &quot;orders-status&quot;, &quot;orders-method&quot;]}">
                        <div class="card-header">
                            <form>
                                <div class="input-group input-group-flush input-group-merge input-group-reverse">
                                    <input class="form-control list-search" type="search" placeholder="Search">
                                    <span class="input-group-text">
                                        <i class="fe fe-search"></i>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-sm table-nowrap card-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <a href="#" class="text-body-secondary list-sort">S/N</a>
                                        </th>
                                        <th>
                                            <a href="#" class="text-body-secondary list-sort" data-sort="orders-order">Invoice ID</a>
                                        </th>
                                        <th>
                                            <a href="#" class="text-body-secondary list-sort" data-sort="orders-date">Date</a>
                                        </th>
                                        <th>
                                            <a href="#" class="text-body-secondary list-sort" data-sort="orders-product">Reference</a>
                                        </th>
                                        <th>
                                            <a href="#" class="text-body-secondary list-sort" data-sort="orders-total">Amount</a>
                                        </th>
                                        <th>
                                            <a href="#" class="text-body-secondary list-sort" data-sort="orders-status">Status</a>
                                        </th>
                                        <th colspan="2">
                                            <a href="#" class="text-body-secondary list-sort" data-sort="orders-method">Actions</a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    <?php
                                        $dash_id = 1;
                                        $select_query = "SELECT * FROM transactions WHERE userID='$user_id' ORDER BY transactionDate DESC";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $transaction_id = $row['transaction_id'];
                                                    $invoice_id = $row['invoice_id'];
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
                                    ?>
                                    <tr>
                                        <td><?php echo $dash_id; ?></td>
                                        <td class="orders-order"><?php echo $invoice_id; ?></td>
                                        <td class="orders-date"><?php echo date('j F Y', $date); ?></td>
                                        <td class="orders-product"><?php echo $transaction_ref; ?></td>
                                        <td class="orders-total">₦<?php echo number_format($amount, 2, '.', ','); ?></td>
                                        <td class="orders-status">
                                            <div class="badge <?php echo $class; ?>"><?php echo $text; ?></div>
                                        </td>
                                        <td class="orders-method"><a href="view-invoice?id=<?php echo $transaction_id; ?>" class="btn btn-sm btn-primary">View Receipt</a></td>
                                    </tr>
                                    <?php
                                        $dash_id++;
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php include "./components/footer.php"; ?>