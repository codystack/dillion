<?php
    include "./components/header.php";
?>

    <div id="page_wrapper" class="bg-light">

        <?php include "./components/navbar.php"; ?>

        <div class="page-banner-simple bg-secondary py-40">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="banner-title text-white mb-0">Error Page</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="text-center">
                            <h1 class="text-primary">404</h1>
                            <h5 class="my-4">Opps This Page Could Not Be Found !</h5>
                            <p>The Page you looking for does not appear to exist Please go back or<br> head on over our homepage to choose a new direction</p>
                            <a href="./" class="btn btn-primary mt-4">Back To Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include "./components/footer.php"; ?>