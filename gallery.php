<?php
    include "./components/header.php"; 
?>

    <div id="page_wrapper" class="bg-light">
        
        <?php include "./components/navbar.php"; ?>

        <div class="page-banner-simple bg-secondary overlay-secondary" style="background-image: url(assets/images/land.jpg); background-size: 100%; background-position: center center; background-repeat: no-repeat; ;">
            <div class="container">
                <div class="row justify-content-md-center" style="padding-top: 100px; padding-bottom: 130px;">
                    <div class="col-lg-10 position-relative z-index-9">
                        <h1 class="text-center mx-auto text-white">Gallery</h1>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="full-row pt-5">
            <div class="container">
                <div class="row row-cols-md-3 row-cols-1 g-4">
                    <div class="col">
                        <div class="gallery-one">
                            <div class="photo-overlay">
                                <a href="#quick-view" class="quick-view transation xy-center">
                                    <span class="flaticon-eye-1 text-primary"></span>
                                </a>
                                <a href="assets/images/gallery/1.jpeg" class="photo-view transation xy-center" data-fancybox="gallery">
                                    <span class="flaticon-zoom-in"></span>
                                </a>
                                <img src="assets/images/gallery/1.jpeg" alt="real estate template">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="gallery-one">
                            <div class="photo-overlay">
                                <a href="#quick-view" class="quick-view transation xy-center">
                                    <span class="flaticon-eye-1 text-primary"></span>
                                </a>
                                <a href="assets/images/gallery/2.jpeg" class="photo-view transation xy-center" data-fancybox="gallery">
                                    <span class="flaticon-zoom-in"></span>
                                </a>
                                <img src="assets/images/gallery/2.jpeg" alt="real estate template">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="gallery-one">
                            <div class="photo-overlay">
                                <a href="#quick-view" class="quick-view transation xy-center">
                                    <span class="flaticon-eye-1 text-primary"></span>
                                </a>
                                <a href="assets/images/gallery/3.jpeg" class="photo-view transation xy-center" data-fancybox="gallery">
                                    <span class="flaticon-zoom-in"></span>
                                </a>
                                <img src="assets/images/gallery/3.jpeg" alt="real estate template">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include "./components/footer.php"; ?>