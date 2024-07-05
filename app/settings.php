<?php
$page = "Settings";
include "./components/header.php";
include "./components/sidebar.php";
require_once "./auth/security.php";
?>

    <div class="main-content">

      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10 col-xl-8">
            <div class="header mt-md-5">
                <div class="header-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h1 class="header-title">Security</h1>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                            <ul class="nav nav-tabs nav-overflow header-tabs">
                                <li class="nav-item">
                                    <a href="profile" class="nav-link">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a href="settings" class="nav-link active">Security</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between align-items-center mb-5">
                <div class="col-12 col-md-9 col-xl-7">
                    <h2 class="mb-2">
                    Change your password
                    </h2>
                    <p class="text-body-secondary mb-xl-0">
                    We will email you a confirmation when changing your password, so please expect that email after submitting.
                    </p>
                </div>
                <div class="col-12 col-xl-auto">
                    <a href="password-reset" class="btn btn-white">Forgot your password?</a>
                </div>
            </div>

            <div class="row">
              <div class="col-12 col-md-6 order-md-2">
                <div class="card bg-light border ms-md-4">
                    <div class="card-body">
                        <p class="mb-2">Password requirements</p>

                        <p class="small text-body-secondary mb-2">
                        To create a new password, you have to meet all of the following requirements:
                        </p>

                        <ul class="small text-body-secondary ps-4 mb-0">
                            <li>
                                Minimum 8 character
                            </li>
                            <li>
                                At least one special character
                            </li>
                            <li>
                                At least one number
                            </li>
                            <li>
                                Can’t be the same as a previous password
                            </li>
                        </ul>
                    </div>
                </div>

              </div>
              <div class="col-12 col-md-6">
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
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div class="form-group">
                        <label class="form-label">Current password</label>
                        <input type="password" class="form-control" required id="currentpassword" name="password">
                    </div>

                    <div class="form-group">
                        <label class="form-label">New password</label>
                        <input type="password" class="form-control" required id="newpassword" name="newPassword">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Confirm new password</label>
                        <input type="password" class="form-control" required name="confirmpassword" id="confirmpassword">
                        <span id="message"></span>
                    </div>

                    <button class="btn w-100 btn-primary lift" name="password_change_btn">Update password</button>
                </form>

              </div>
            </div>

            <br>

          </div>
        </div>
      </div>

    </div>


<?php include "./components/footer.php"; ?>