<?php
include "./components/header.php";
require_once "./auth/queries.php";
?>
    
    <div class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    <div class="header mt-md-5">
                        <div class="header-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h1 class="header-title">Complete your Account Registration</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                        if (isset($_SESSION['error_message'])) {
                            ?>
                            <div class="alert alert-danger" role="alert">
                                <div class="alert-message text-center">
                                    <span class="fe fe-alert-triangle"></span> <?php echo $_SESSION['error_message'];?>
                                </div>
                            </div>
                            <?php
                            unset($_SESSION['error_message']);
                        }
                    ?>
                    <?php
                        if (isset($_SESSION['success_message'])) {
                            ?>
                            <div class="alert alert-success" role="alert">
                                <div class="alert-message text-center">
                                    <span class="fe fe-check-circle"></span> <?php echo $_SESSION['success_message']; ?>
                                </div>
                            </div>
                            <?php
                            unset($_SESSION['success_message']);
                        }
                    ?>

                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-header-title">Personal information</h4>
                                </div>
                                <div class="col-auto">
                                    <a class="btn btn-sm btn-primary" href="logout">Log out </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="row justify-content-center">
                                    <div class="col-12 px-lg-6 my-5 align-self-center">
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-floating mb-4">
                                                        <input type="text" class="form-control" id="floatingInput" name="first_name" value="<?php echo $_SESSION['first_name']; ?>" readonly>
                                                        <label for="floatingInput">First name</label>
                                                    </div>
                                                </div>
                                            
                                                <div class="col-md-6 col-12">
                                                    <div class="form-floating mb-4">
                                                        <input type="text" class="form-control" id="floatingInput" name="last_name" value="<?php echo $_SESSION['last_name']; ?>" readonly>
                                                        <label for="floatingInput">Last name</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-floating mb-4">
                                                        <input type="tel" class="form-control" id="floatingInput" name="phone" value="<?php echo $_SESSION['phone']; ?>" readonly>
                                                        <label for="floatingInput">Phone number</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-floating mb-4">
                                                        <input type="email" class="form-control" id="floatingInput" name="email" value="<?php echo $_SESSION['email']; ?>" readonly>
                                                        <label for="floatingInput">Email address</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-floating mb-4">
                                                        <select class="form-control" name="gender" required>
                                                            <option selected disabled value="">Select Gender</option>
                                                            <option>Male</option>
                                                            <option>Female</option>
                                                        </select>
                                                        <label for="floatingInput">Gender</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-floating mb-4">
                                                        <input type="text" class="form-control" id="floatingInput" name="nin" required placeholder="3276 2627 2736 9374">
                                                        <label for="floatingInput">NIN<small>(National Identity Number)</small></label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-floating mb-4">
                                                        <input type="text" class="form-control" id="floatingInput" name="address" required placeholder="Lekki, Lagos">
                                                        <label for="floatingInput">Address</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-floating mb-4">
                                                        <input type="file" class="form-control" id="floatingInput" name="proof_of_identification" required>
                                                        <label for="floatingInput">Upload Proof of Identification</label>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <button class="btn btn-lg w-100 btn-primary mb-3" name="complete_registration">Complete Registration</button>
                                                </div>

                                            </div>
                                        </form>
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