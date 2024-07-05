<?php
$page = "Profile";
include "./components/header.php";
include "./components/sidebar.php";
?>
    <div class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    <div class="header mt-md-5">
                        <div class="header-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h1 class="header-title">Profile</h1>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                    <ul class="nav nav-tabs nav-overflow header-tabs">
                                        <li class="nav-item">
                                            <a href="profile" class="nav-link active">Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="settings" class="nav-link">Security</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form -->
                    <form>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">First name</label>
                                    <input type="text" class="form-control" value="<?php echo $first_name; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Last name</label>
                                    <input type="text" class="form-control" value="<?php echo $last_name; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" value="<?php echo $email; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control" value="<?php echo $phone; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Gender</label>
                                    <input type="text" class="form-control" value="<?php echo $gender; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">NIN<small>(National Identity Number)</small></label>
                                    <input type="text" class="form-control" value="<?php echo '***********' . substr($nin,-4); ?>" readonly>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control" value="<?php echo $address; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        
                        <a href="mailto:support@dillionproperty.com" class="btn btn-primary">Request profile update</a>
                        <a href="#" id="<? echo $user_id; ?>" class="view_id_card btn btn-dark"><i class="fe fe-eye"></i> View ID Card</a>

                        <hr class="mt-4 mb-5">

                        <div class="row justify-content-between">
                            <div class="col-12 col-md-6">
                                <h4>Delete your account</h4>
                                <p class="small text-body-secondary mb-md-0">
                                    Please note, deleting your account is a permanent action and will no be recoverable once completed.
                                </p>
                            </div>
                            <div class="col-auto">
                                <a href="mailto:support@dillionproperty.com" class="btn btn-danger">Delete</a>
                            </div>
                        </div>

                    </form>

                    <br><br>

                </div>
            </div>
        </div>
    </div>

    <!-- View ID Card modal start-->
    <div class="modal fade" id="viewIDCardModal" tabindex="-1" aria-labelledby="viewIDCardModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow-3">
                <div class="modal-body p-0" id="id_card_info">
                    <?php @include("../view/view-pastor.php");?>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Close</button>
                </div> -->
            </div>
        </div>
    </div>
    <!-- View ID Card modal end-->

<?php include "./components/footer.php"; ?>