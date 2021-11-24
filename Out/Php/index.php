<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" class="h-100">
<!-- ********************** start head ********************** -->
<?php include '_include/head.php';?>
<!--********************** end head ********************** -->
<style type="text/css">
/* .row-cols-lg-6 {
    background: red
} */
</style>

<body class="d-flex flex-column h-100">
    <!-- ********************** start header ********************** -->
    <?php include '_include/header.php';?>
    <!--********************** end header ********************** -->
    <main class="cmd-main">
        <section class="cmd-section-banner">
            <div class="container-fluid container-lg py-4 text-center text-lg-start">
                <h2 class="cmd-section-banner-title">CarMD Used Car</h2>
                <p class="cmd-section-banner-text mb-5 fs-l">Even beyond the pricing we're known for, we can help you find the right car, get expert advice and feel confident you're getting a great deal. </p>
                <img src="assets/img/homepage-banner.svg" alt="carmd banner" class="cmd-section-banner-img" width="550">
            </div>
        </section>
        <form action="" class="cmd-section-search bg-primary">
            <div class="container-fluid container-lg">
                <div class="row py-4 g-3 align-items-center">
                    <div class="col-lg-4">
                        <p class="mb-2 mb-lg-0">
                            <select class="form-select cmd-select cmd-control cmd-outline-grey cmd-pointer">
                                <option value="0" selected>Make</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select></p>
                    </div>
                    <div class="col-lg-4">
                        <p class="mb-2 mb-lg-0">
                            <select class="form-select cmd-select cmd-outline-grey cmd-control cmd-pointer">
                                <option value="0" selected>Model</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select></p>
                    </div>
                    <div class="col-lg-2">
                        <p class="mb-4 mb-lg-0">
                            <input type="text" class="form-control cmd-control cmd-input cmd-outline-grey" placeholder="Zip Code"> </p>
                    </div>
                    <div class="col-lg-2">
                        <p class="mb-2 mb-lg-0">
                            <button class="btn form-control cmd-btn cmd-btn-search"> SEARCH </button></p>
                    </div>
                </div>
            </div>
        </form>
        <section class="bg-light py-5 mb-3">
            <div class="container-fluid container-lg">
                <h4 class="mb-3 text-center text-md-start">Search your Used Car by Body Style </h4>
                <div class="row row-cols-2 row-cols-md-4 text-center py-3 g-1 g-lg-3 cmd-shine-effect">
                    <div class="col">
                        <a href="#">
                            <figure class="px-3">
                                <img src="assets/img/body-type/sedan.png" alt="Sedan" width="200"> </figure>
                        </a>
                        <p class="mb-0">Sedan</p>
                    </div>
                    <div class="col">
                        <a href="#">
                            <figure class="px-3">
                                <img src="assets/img/body-type/trucks.png" alt="Trucks" width="200"> </figure>
                        </a>
                        <p class="mb-0">Trucks</p>
                    </div>
                    <div class="col">
                        <a href="#">
                            <figure class="px-3">
                                <img src="assets/img/body-type/suvcross.png" alt="SUV/Crossover" width="200"> </figure>
                        </a>
                        <p class="mb-0">SUV/Crossover</p>
                    </div>
                    <div class="col">
                        <a href="">
                            <figure class="px-3">
                                <img src="assets/img/body-type/coupe.png" alt="Coupe" width="200"> </figure>
                        </a>
                        <p class="mb-0">Coupe</p>
                    </div>
                    <div class="col">
                        <a href="#">
                            <figure class="px-3">
                                <img src="assets/img/body-type/hatch.png" alt="Hatch" width="200"> </figure>
                        </a>
                        <p class="mb-0">Hatch</p>
                    </div>
                    <div class="col"><a href="#">
                            <figure class="px-3">
                                <img src="assets/img/body-type/vanmv.png" alt="Van/Minivan" width="200"> </figure>
                        </a>
                        <p class="mb-0">Van/Minivan</p>
                    </div>
                    <div class="col"><a href="#">
                            <figure class="px-3">
                                <img src="assets/img/body-type/convert.png" alt="Convertible" width="200"> </figure>
                        </a>
                        <p class="mb-0">Convertible</p>
                    </div>
                    <div class="col">
                        <a href="#">
                            <figure class="px-3">
                                <img src="assets/img/body-type/wagon.png" alt="wagon" width="200"> </figure>
                        </a>
                        <p class="mb-0">Wagon</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="cmd-section-popular-makes text-center py-4">
            <div class="container-fluid container-lg">
                <div class="mb-5">
                    <h4 class="border-bottom py-2 cmd-title"> Shop by Popular Makes </h4>
                </div>
            </div>
            <div class="carousel slide cmd-carousel" data-bs-ride="carousel" id="slider-thumb">
                 <div class="container-fluid container-lg">
                <div class="carousel-inner">
                   
                        <div class="carousel-item cmd-carousel-item active">
                            <ul class="row row-cols-3 row-cols-lg-6 g-4 g-lg-3">
                                <li class="col"><a href="#" class="h6 d-block cmd-popular-makes p-3 border mb-0">Acura</a></li>
                                <li class="col"><a href="#" class="h6 d-block cmd-popular-makes p-3 border mb-0">Audi </a></li>
                                <li class="col"><a href="#" class="h6 d-block cmd-popular-makes p-3 border mb-0">BMW </a></li>
                                <li class="col"><a href="#" class="h6 d-block cmd-popular-makes p-3 border mb-0">Buick </a></li>
                                <li class="col"><a href="#" class="h6 d-block cmd-popular-makes p-3 border mb-0">Cadillac </a></li>
                                <li class="col"><a href="#" class="h6 d-block cmd-popular-makes p-3 border mb-0">Chevrolet </a></li>
                                <li class="col"><a href="#" class="h6 d-block cmd-popular-makes p-3 border mb-0">Chrysler </a></li>
                                <li class="col"><a href="#" class="h6 d-block cmd-popular-makes p-3 border mb-0">Dodge </a></li>
                                <li class="col"><a href="#" class="h6 d-block cmd-popular-makes p-3 border mb-0">Ford </a></li>
                                <li class="col"><a href="#" class="h6 d-block cmd-popular-makes p-3 border mb-0">GMC </a></li>
                                <li class="col"><a href="#" class="h6 d-block cmd-popular-makes p-3 border mb-0">Honda </a></li>
                                <li class="col"><a href="#" class="h6 d-block cmd-popular-makes p-3 border mb-0">Hyundai</a></li>
                            </ul>
                        </div>
                        <div class="carousel-item cmd-carousel-item">
                            <ul class="row row-cols-3 row-cols-lg-6 g-4 g-lg-3">
                                <li class="col"><a href="#" class="h6 d-block cmd-popular-makes p-3 border mb-0">Acura</a></li>
                                <li class="col"><a href="#" class="h6 d-block cmd-popular-makes p-3 border mb-0">Audi </a></li>
                                <li class="col"><a href="#" class="h6 d-block cmd-popular-makes p-3 border mb-0">BMW </a></li>
                                <li class="col"><a href="#" class="h6 d-block cmd-popular-makes p-3 border mb-0">Buick </a></li>
                                <li class="col"><a href="#" class="h6 d-block cmd-popular-makes p-3 border mb-0">Cadillac </a></li>
                                <li class="col"><a href="#" class="h6 d-block cmd-popular-makes p-3 border mb-0">Chevrolet </a></li>
                                <li class="col"><a href="#" class="h6 d-block cmd-popular-makes p-3 border mb-0">Chrysler </a></li>
                                <li class="col"><a href="#" class="h6 d-block cmd-popular-makes p-3 border mb-0">Dodge </a></li>
                                <li class="col"><a href="#" class="h6 d-block cmd-popular-makes p-3 border mb-0">Ford </a></li>
                                <li class="col"><a href="#" class="h6 d-block cmd-popular-makes p-3 border mb-0">GMC </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- button next - prev slider -->
                <button class="carousel-control-prev" type="button" data-bs-target="#slider-thumb" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#slider-thumb" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                <!-- end -->
            </div>
        </section>
    </main>
    <!-- ********************** start footer ********************** -->
    <?php include '_include/footer.php';?>
    <script type="text/javascript"></script>
    <!--********************** end footer ********************** -->
</body>

</html>