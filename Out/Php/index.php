<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" class="h-100">
<!-- ********************** start head ********************** -->
<?php include '_include/head.php';?>
<!--********************** end head ********************** -->

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
                        <p class="mb-2 mb-lg-0 input-group">
                            <select class="form-select cmd-select cmd-control cmd-outline-grey cmd-pointer">
                                <option value="0" selected>Make</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select></p>
                    </div>
                    <div class="col-lg-4">
                        <p class="mb-2 mb-lg-0 input-group">
                            <select class="form-select cmd-select cmd-outline-grey cmd-control cmd-pointer">
                                <option value="0" selected>Model</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select></p>
                    </div>
                    <div class="col-lg-2">
                        <p class="mb-4 mb-lg-0 input-group">
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
        <section class="cmd-section-popular-makes text-center pb-5">
            <div class="container-fluid container-lg">
                <div class="py-4">
                    <h4 class="border-bottom pb-2 cmd-title"> Shop by Popular Makes </h4>
                </div>
            </div>
            <div class="carousel slide cmd-carousel cmd-carousel-hide-paging mb-4 pb-2" data-bs-ride="carousel" id="slider-thumb">
                <div class="carousel-inner mb-4">
                    <div class="container-fluid container-lg">
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
                <div class="carousel-indicators cmd-carousel-indicators">
                    <button type="button" data-bs-target="#slider-thumb" data-bs-slide-to="0" class="cmd-carousel-indicators-item active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#slider-thumb" data-bs-slide-to="1" aria-label="Slide 2" class="cmd-carousel-indicators-item"></button>
                </div>
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
            <!-- slider banner -->
            <div class="carousel slide cmd-carousel" data-bs-ride="carousel" id="slider-banner">
                <div class="carousel-inner cmd-rotate-effect">
                    <div class="container-fluid container-lg">
                        <div class="carousel-item cmd-carousel-item active">
                            <ul class="row row-cols-1 row-cols-md-3">
                                <li class="col mb-3">
                                    <a href="#" class="cmd-promo">
                                        <figure>
                                            <img src="assets/img/promotions/promo-1.jpg" alt="promo">
                                        </figure>
                                    </a>
                                </li>
                                <li class="col mb-3">
                                    <a href="#" class="cmd-promo">
                                        <figure>
                                            <img src="assets/img/promotions/promo-1.jpg" alt="promo">
                                        </figure>
                                    </a>
                                </li>
                                <li class="col-md-4 mb-3">
                                    <a href="#" class="cmd-promo">
                                        <figure>
                                            <img src="assets/img/promotions/promo-1.jpg" alt="promo">
                                        </figure>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="carousel-item cmd-carousel-item">
                            <ul class="row row-cols-1 row-cols-md-3">
                                <li class="col mb-3">
                                    <a href="#" class="cmd-promo">
                                        <figure>
                                            <img src="assets/img/promotions/promo-1.jpg" alt="promo">
                                        </figure>
                                    </a>
                                </li>
                                <li class="col mb-3">
                                    <a href="#" class="cmd-promo">
                                        <figure>
                                            <img src="assets/img/promotions/promo-1.jpg" alt="promo">
                                        </figure>
                                    </a>
                                </li>
                                <li class="col mb-3">
                                    <a href="#" class="cmd-promo">
                                        <figure>
                                            <img src="assets/img/promotions/promo-1.jpg" alt="promo">
                                        </figure>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="carousel-indicators cmd-carousel-indicators">
                        <button type="button" data-bs-target="#slider-banner" data-bs-slide-to="0" class="cmd-carousel-indicators-item active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#slider-banner" data-bs-slide-to="1" aria-label="Slide 2" class="cmd-carousel-indicators-item"></button>
                    </div>
                </div>
            </div>
        </section>
        <section class="cmd-section-price bg-light py-5">
            <div class="container-fluid container-lg">
                <div class="row justify-content-center">
                    <div class="col-lg-8 py-4">
                        <h4 class="cmd-title border-bottom text-center pb-2">Used Cars by Price</h4>
                    </div>
                    <form class="py-4 text-center">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-4 col-lg-4 f-mont-b mb-2 mb-md-0">
                                <select class="form-control cmd-control cmd-select cmd-pointer cmd-outline-blue cmd-border fs-l f-mont-b">
                                    <option selected>$0</option>
                                    <option value="1">$10,000</option>
                                    <option value="2">$50,000</option>
                                    <option value="3">$100,000</option>
                                </select>
                            </div>
                            <div class="col-md-1 col-lg-1 mb-2 mb-md-0">
                                <strong class="fs-l">To</strong>
                            </div>
                            <div class="col-md-4 col-lg-4 mb-4 mb-md-0">
                                <select class="form-control cmd-control cmd-select cmd-pointer cmd-outline-blue cmd-border fs-l f-mont-b">
                                    <option selected>$100,000</option>
                                    <option value="1">$200,000</option>
                                    <option value="2">$300,000</option>
                                    <option value="3">$500,000</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xxl-2 mb-3 mb-md-0">
                                <div class="input-group">
                                    <button class="btn cmd-btn cmd-control cmd-btn-primary w-100 cmd-flex-center"> SEE RESULTS </button></div>
                            </div>
                        </div>
                    </form>
                </div>
                <h6 class="mb-3">Popular Searches</h6>
                <div class="cmd-popular-searches">
                    <div class="row fs-s">
                        <div class="col-sm-6 col-lg-3 mb-3">
                            <a href="#" class="cmd-lnk">Best Cars Under $20,000</a><br>
                            <a href="#" class="cmd-lnk">Best SUVs Under $25,000 </a><br>
                            <a href="#" class="cmd-lnk">Luxury Cars Under $30,000 </a><br>
                            <a href="#" class="cmd-lnk">3-Row Vehicles Under $30,000 </a><br>
                            <a href="#" class="cmd-lnk">Best MPG Under $20,000</a>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-3">
                            <a href="#" class="cmd-lnk">Best Cars Under $20,000</a><br>
                            <a href="#" class="cmd-lnk">Best SUVs Under $25,000 </a><br>
                            <a href="#" class="cmd-lnk">Luxury Cars Under $30,000 </a><br>
                            <a href="#" class="cmd-lnk">3-Row Vehicles Under $30,000 </a><br>
                            <a href="#" class="cmd-lnk">Best MPG Under $20,000</a>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-3">
                            <a href="#" class="cmd-lnk">Best Cars Under $20,000</a><br>
                            <a href="#" class="cmd-lnk">Best SUVs Under $25,000 </a><br>
                            <a href="#" class="cmd-lnk">Luxury Cars Under $30,000 </a><br>
                            <a href="#" class="cmd-lnk">3-Row Vehicles Under $30,000 </a><br>
                            <a href="#" class="cmd-lnk">Best MPG Under $20,000</a>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-3">
                            <a href="#" class="cmd-lnk">Best Cars Under $20,000</a><br>
                            <a href="#" class="cmd-lnk">Best SUVs Under $25,000 </a><br>
                            <a href="#" class="cmd-lnk">Luxury Cars Under $30,000 </a><br>
                            <a href="#" class="cmd-lnk">3-Row Vehicles Under $30,000 </a><br>
                            <a href="#" class="cmd-lnk">Best MPG Under $20,000</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cmd-section-popular-vehicles">
            <div class="container-fluid container-lg">
                <div class="row py-3 justify-content-center">
                    <div class="col-lg-8 py-4">
                        <h4 class="cmd-title border-bottom text-center pb-2">Popular Vehicles for Sale</h4>
                    </div>
                </div>
            </div>
            <div class="carousel slide cmd-carousel" data-bs-ride="carousel" id="slider01">
                <div class="carousel-inner cmd-rotate-effect cmd-slide-items-wrapper pb-5">
                     <div class="container-fluid container-lg">
                    <div class="carousel-item active">
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 py-2 justify-content-center cmd-slide-items-wrapper">
                            <div class="col">
                                <div class="cmd-slide-item">
                                    <div class="cmd-slide-item-body">
                                        <span class="cmd-wishes"><a href="#" class="cmd-wishes-icon fs-xl"><i class="fas fa-heart"></i></a></span>
                                        <figure>
                                            <a href="#" title="2016-Mitsubish">
                                                <img src="assets/img/upload/sample.jpg" alt="2016-Mitsubish"></a>
                                        </figure>
                                        <div class="pt-3 px-2 pb-2">
                                            <div class="row row-cols-2">
                                                <div class="col"> <strong class="fs-l">$154,850</strong></div>
                                                <div class="col">
                                                    <strong class="fs-s">3,8</strong>
                                                    <span class="cmd-rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                        <i class="far fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <p class="my-3"><small>2020 Audi e-tron 50 Auto quattro MY20</small></p>
                                        </div>
                                    </div>
                                    <div class="cmd-slide-item-footer">
                                        <p class="mb-4 px-2"><a href="" class="btn bg-light text-primary fw-bolder fs-xs w-100 p-2">Patriot CDJR McAlester<i class="fas fa-external-link-alt"></i></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="cmd-slide-item">
                                    <div class="cmd-slide-item-body">
                                        <span class="cmd-wishes"><a href="#" class="cmd-wishes-icon fs-xl"><i class="fas fa-heart"></i></a></span>
                                        <figure>
                                            <a href="#" title="2016-Mitsubish">
                                                <img src="assets/img/upload/sample.jpg" alt="2016-Mitsubish"></a>
                                        </figure>
                                        <div class="pt-3 px-2 pb-2">
                                            <div class="row row-cols-2">
                                                <div class="col"> <strong class="fs-l">$154,850</strong></div>
                                                <div class="col">
                                                    <strong class="fs-s">3,8</strong>
                                                    <span class="cmd-rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                        <i class="far fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <p class="my-3"><small>2020 Audi e-tron 50 Auto</small></p>
                                        </div>
                                    </div>
                                    <div class="cmd-slide-item-footer">
                                        <p class="mb-4 px-2"><a href="" class="btn bg-light text-primary fw-bolder fs-xs w-100 p-2">Patriot CDJR McAlester<i class="fas fa-external-link-alt"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 py-2 align-items-top justify-content-center cmd-slide-items-wrapper">
                            <div class="col">
                                <div class="cmd-slide-item">
                                    <div class="cmd-slide-item-body">
                                        <span class="cmd-wishes"><a href="#" class="cmd-wishes-icon fs-xl"><i class="fas fa-heart"></i></a></span>
                                        <figure>
                                            <a href="#" title="2016-Mitsubish">
                                                <img src="assets/img/upload/sample.jpg" alt="2016-Mitsubish"></a>
                                        </figure>
                                        <div class="pt-3 px-2 pb-2">
                                            <div class="row row-cols-2">
                                                <div class="col"> <strong class="fs-l">$154,850</strong></div>
                                                <div class="col">
                                                    <strong class="fs-s">3,8</strong>
                                                    <span class="cmd-rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                        <i class="far fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <p class="my-3"><small>2020 Audi e-tron 50 Auto quattro MY20</small></p>
                                        </div>
                                    </div>
                                    <div class="cmd-slide-item-footer">
                                        <p class="mb-4 px-2"><a href="" class="btn bg-light text-primary fw-bolder fs-xs w-100 p-2">Patriot CDJR McAlester<i class="fas fa-external-link-alt"></i></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="cmd-slide-item">
                                    <div class="cmd-slide-item-body">
                                        <span class="cmd-wishes"><a href="#" class="cmd-wishes-icon fs-xl"><i class="fas fa-heart"></i></a></span>
                                        <figure>
                                            <a href="#" title="2016-Mitsubish">
                                                <img src="assets/img/upload/sample.jpg" alt="2016-Mitsubish"></a>
                                        </figure>
                                        <div class="pt-3 px-2 pb-2">
                                            <div class="row row-cols-2">
                                                <div class="col"> <strong class="fs-l">$154,850</strong></div>
                                                <div class="col">
                                                    <strong class="fs-s">3,8</strong>
                                                    <span class="cmd-rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                        <i class="far fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <p class="my-3"><small>2020 Audi e-tron 50 Auto</small></p>
                                        </div>
                                    </div>
                                    <div class="cmd-slide-item-footer">
                                        <p class="mb-4 px-2"><a href="" class="btn bg-light text-primary fw-bolder fs-xs w-100 p-2">Patriot CDJR McAlester<i class="fas fa-external-link-alt"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> </div>
                </div>
                <!-- button next - prev slider -->
                <div class="carousel-indicators cmd-carousel-indicators">
                    <button type="button" data-bs-target="#slider01" data-bs-slide-to="0" class="cmd-carousel-indicators-item active" aria-current="true"></button>
                    <button type="button" data-bs-target="#slider01" data-bs-slide-to="1" class="cmd-carousel-indicators-item"></button>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#slider01" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#slider01" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            </div>
        </section>
        <section class="cmd-section-compare">
            <div class="container-fluid container-lg">
                <div class="row py-3 justify-content-center mb-4 cmd-shine-effect">
                    <div class="col-lg-8 py-4">
                        <h4 class="cmd-title border-bottom text-center pb-2 mb-4">You Might Like to Compare</h4>
                    </div>
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-sm-5 col-lg-3">
                            <figure class="mb-0">
                                <a href="#" title="2020-Ford-F150">
                                    <img src="assets/img/products/2020-Ford-F150 Regular Cab-front_12312_032_2400x1800_YZ.png" alt=" 2020 Ford F150 Supercrew Cab "></a>
                            </figure>
                            <h6 class="text-primary"> 2020 Ford F150 Supercrew Cab </h6>
                        </div>
                        <div class="col-sm-2 col-lg-1"><strong class="h5">VS.</strong></div>
                        <div class="col-sm-5 col-lg-3">
                            <figure class="mb-0">
                                <a href="#" title="2020-Ford-F150">
                                    <img src="assets/img/products/2020-Ram-1500 Crew Cab-front_12746_032_2400x1800_PW7.png" alt="2020 Ram 1500 QuadCab " width="250"></a>
                            </figure>
                            <h6 class="text-primary">2020 Ram 1500 QuadCab </h6>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <p class=""><a href="#" class="btn cmd-btn cmd-btn-primary">COMPARE</a></p>
                    <p class="mb-0">
                        <a href="" class="cmd-lnk">
                            <strong class="d-block pb-1">Compare others Vehicle</strong>
                            <i class="fas fa-chevron-down fs-l"></i>
                        </a>
                    </p>
                </div>
            </div>
        </section>
    </main>
    <!-- ********************** start footer ********************** -->
    <?php include '_include/footer.php';?>
    <script type="text/javascript"></script>
    <!--********************** end footer ********************** -->
</body>

</html>