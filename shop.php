<?php include 'headerhospital.php';?>
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper ">
        <div class="parallax" data-parallax-image="assets/img/breadcurmb/breadcurmb-1-1.jpg"></div>
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Product</h1>
                <div class="breadcumb-menu-wrap">
                    <i class="far fa-home-lg"></i>
                    <ul class="breadcumb-menu">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Product</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Product Area
    ==============================-->
    <section class="vs-product-wrapper space-top space-md-bottom">
        <div class="container">
            <div class="vs-sort-bar mb-40">
                <div class="row text-center text-md-start justify-content-between align-items-center">
                    <div class="col-md-auto">
                        <div class="nav d-block" role=tablist>
                            <a href="#" class="icon-btn style3 " id="tab-shop-grid" data-bs-toggle="tab" data-bs-target="#tab-grid" role="tab" aria-controls="tab-grid" aria-selected="false"><i class="fas fa-th"></i></a>
                            <a href="#" class="icon-btn style3 active" id="tab-shop-list" data-bs-toggle="tab" data-bs-target="#tab-list" role="tab" aria-controls="tab-grid" aria-selected="true"><i class="fas fa-list"></i></a>
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <div class="row">
                            <div class="col-md-auto mt-3 mt-md-0 d-flex align-items-center justify-content-center">
                                <label for="filterby">Filter By</label>
                                <select class="form-select style2" name="filterby" id="filterby">
                                    <option>$0 - $200</option>
                                    <option>$200 - $300</option>
                                    <option>$300 - $400</option>
                                    <option>$400 - $600</option>
                                    <option>$600 - $800</option>
                                </select>
                            </div>
                            <div class="col-md-auto mt-3 mt-md-0 d-flex align-items-center justify-content-center">
                                <label for="sortby">Sort by</label>
                                <select class="form-select style2" name="sortby" id="sortby">
                                    <option>Date Listing</option>
                                    <option>Week Listing</option>
                                    <option>Day Listing</option>
                                    <option>Month Listing</option>
                                    <option>Year Listing</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade " id="tab-grid" role="tabpanel" aria-labelledby="tab-shop-grid">
                    <!-- Shop Grid Area -->
                    <div class="shop-grid-area">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-30">
                                <div class="vs-product-box product-grid">
                                    <div class="product-img">
                                        <img src="assets/img/product/p-1-1.jpg" class="w-100" alt="Product Image">
                                        <div class="actions-btn">
                                            <a class="icon-btn" href="#"><i class="fal fa-heart"></i></a>
                                            <a class="icon-btn" href="#"><i class="fal fa-shopping-cart"></i></a>
                                            <a class="icon-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="rating-wrap">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                        </div>
                                        <h4 class="product-title h5"><a href="shop-details.php">Ibuprofen</a></h4>
                                        <span class="price">$99.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-30">
                                <div class="vs-product-box product-grid">
                                    <div class="product-img">
                                        <img src="assets/img/product/p-1-2.jpg" class="w-100" alt="Product Image">
                                        <div class="actions-btn">
                                            <a class="icon-btn" href="#"><i class="fal fa-heart"></i></a>
                                            <a class="icon-btn" href="#"><i class="fal fa-shopping-cart"></i></a>
                                            <a class="icon-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="rating-wrap">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                        </div>
                                        <h4 class="product-title h5"><a href="shop-details.php">Doxycycline</a></h4>
                                        <span class="price">$120.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-30">
                                <div class="vs-product-box product-grid">
                                    <div class="product-img">
                                        <img src="assets/img/product/p-1-3.jpg" class="w-100" alt="Product Image">
                                        <div class="actions-btn">
                                            <a class="icon-btn" href="#"><i class="fal fa-heart"></i></a>
                                            <a class="icon-btn" href="#"><i class="fal fa-shopping-cart"></i></a>
                                            <a class="icon-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="rating-wrap">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                        </div>
                                        <h4 class="product-title h5"><a href="shop-details.php">Kevzara</a></h4>
                                        <span class="price">$29.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-30">
                                <div class="vs-product-box product-grid">
                                    <div class="product-img">
                                        <img src="assets/img/product/p-1-4.jpg" class="w-100" alt="Product Image">
                                        <div class="actions-btn">
                                            <a class="icon-btn" href="#"><i class="fal fa-heart"></i></a>
                                            <a class="icon-btn" href="#"><i class="fal fa-shopping-cart"></i></a>
                                            <a class="icon-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="rating-wrap">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                        </div>
                                        <h4 class="product-title h5"><a href="shop-details.php">Metoprolol</a></h4>
                                        <span class="price">$75.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-30">
                                <div class="vs-product-box product-grid">
                                    <div class="product-img">
                                        <img src="assets/img/product/p-1-5.jpg" class="w-100" alt="Product Image">
                                        <div class="actions-btn">
                                            <a class="icon-btn" href="#"><i class="fal fa-heart"></i></a>
                                            <a class="icon-btn" href="#"><i class="fal fa-shopping-cart"></i></a>
                                            <a class="icon-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="rating-wrap">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                        </div>
                                        <h4 class="product-title h5"><a href="shop-details.php">Prednisone</a></h4>
                                        <span class="price">$52.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-30">
                                <div class="vs-product-box product-grid">
                                    <div class="product-img">
                                        <img src="assets/img/product/p-1-6.jpg" class="w-100" alt="Product Image">
                                        <div class="actions-btn">
                                            <a class="icon-btn" href="#"><i class="fal fa-heart"></i></a>
                                            <a class="icon-btn" href="#"><i class="fal fa-shopping-cart"></i></a>
                                            <a class="icon-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="rating-wrap">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                        </div>
                                        <h4 class="product-title h5"><a href="shop-details.php">Clonazepam</a></h4>
                                        <span class="price">$28.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-30">
                                <div class="vs-product-box product-grid">
                                    <div class="product-img">
                                        <img src="assets/img/product/p-1-7.jpg" class="w-100" alt="Product Image">
                                        <div class="actions-btn">
                                            <a class="icon-btn" href="#"><i class="fal fa-heart"></i></a>
                                            <a class="icon-btn" href="#"><i class="fal fa-shopping-cart"></i></a>
                                            <a class="icon-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="rating-wrap">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                        </div>
                                        <h4 class="product-title h5"><a href="shop-details.php">Wellbutrin</a></h4>
                                        <span class="price">$45.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-30">
                                <div class="vs-product-box product-grid">
                                    <div class="product-img">
                                        <img src="assets/img/product/p-1-8.jpg" class="w-100" alt="Product Image">
                                        <div class="actions-btn">
                                            <a class="icon-btn" href="#"><i class="fal fa-heart"></i></a>
                                            <a class="icon-btn" href="#"><i class="fal fa-shopping-cart"></i></a>
                                            <a class="icon-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="rating-wrap">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                        </div>
                                        <h4 class="product-title h5"><a href="shop-details.php">Biotin Complex</a></h4>
                                        <span class="price">$99.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-30">
                                <div class="vs-product-box product-grid">
                                    <div class="product-img">
                                        <img src="assets/img/product/p-1-9.jpg" class="w-100" alt="Product Image">
                                        <div class="actions-btn">
                                            <a class="icon-btn" href="#"><i class="fal fa-heart"></i></a>
                                            <a class="icon-btn" href="#"><i class="fal fa-shopping-cart"></i></a>
                                            <a class="icon-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="rating-wrap">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                        </div>
                                        <h4 class="product-title h5"><a href="shop-details.php">Lisinopril</a></h4>
                                        <span class="price">$56.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-30">
                                <div class="vs-product-box product-grid">
                                    <div class="product-img">
                                        <img src="assets/img/product/p-1-10.jpg" class="w-100" alt="Product Image">
                                        <div class="actions-btn">
                                            <a class="icon-btn" href="#"><i class="fal fa-heart"></i></a>
                                            <a class="icon-btn" href="#"><i class="fal fa-shopping-cart"></i></a>
                                            <a class="icon-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="rating-wrap">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                        </div>
                                        <h4 class="product-title h5"><a href="shop-details.php">Metformin</a></h4>
                                        <span class="price">$68.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-30">
                                <div class="vs-product-box product-grid">
                                    <div class="product-img">
                                        <img src="assets/img/product/p-1-11.jpg" class="w-100" alt="Product Image">
                                        <div class="actions-btn">
                                            <a class="icon-btn" href="#"><i class="fal fa-heart"></i></a>
                                            <a class="icon-btn" href="#"><i class="fal fa-shopping-cart"></i></a>
                                            <a class="icon-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="rating-wrap">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                        </div>
                                        <h4 class="product-title h5"><a href="shop-details.php">Doxycycline </a></h4>
                                        <span class="price">$19.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-30">
                                <div class="vs-product-box product-grid">
                                    <div class="product-img">
                                        <img src="assets/img/product/p-1-12.jpg" class="w-100" alt="Product Image">
                                        <div class="actions-btn">
                                            <a class="icon-btn" href="#"><i class="fal fa-heart"></i></a>
                                            <a class="icon-btn" href="#"><i class="fal fa-shopping-cart"></i></a>
                                            <a class="icon-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="rating-wrap">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                        </div>
                                        <h4 class="product-title h5"><a href="shop-details.php">Amitriptyline</a></h4>
                                        <span class="price">$40.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="tab-list" role="tabpanel" aria-labelledby="tab-shop-list">
                    <!-- Shop Grid Area -->
                    <div class="shop-list-area">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-4 mb-30">
                                <div class="vs-product-box product-list">
                                    <div class="product-img">
                                        <img src="assets/img/product/p-1-1.jpg" class="w-100" alt="Product Image">
                                        <div class="actions-btn">
                                            <a class="icon-btn" href="#"><i class="fal fa-heart"></i></a>
                                            <a class="icon-btn" href="#"><i class="fal fa-shopping-cart"></i></a>
                                            <a class="icon-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="rating-wrap">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                        </div>
                                        <h4 class="product-title h5"><a href="shop-details.php">Ibuprofen</a></h4>
                                        <span class="price">$99.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 mb-30">
                                <div class="vs-product-box product-list">
                                    <div class="product-img">
                                        <img src="assets/img/product/p-1-2.jpg" class="w-100" alt="Product Image">
                                        <div class="actions-btn">
                                            <a class="icon-btn" href="#"><i class="fal fa-heart"></i></a>
                                            <a class="icon-btn" href="#"><i class="fal fa-shopping-cart"></i></a>
                                            <a class="icon-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="rating-wrap">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                        </div>
                                        <h4 class="product-title h5"><a href="shop-details.php">Doxycycline</a></h4>
                                        <span class="price">$120.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 mb-30">
                                <div class="vs-product-box product-list">
                                    <div class="product-img">
                                        <img src="assets/img/product/p-1-3.jpg" class="w-100" alt="Product Image">
                                        <div class="actions-btn">
                                            <a class="icon-btn" href="#"><i class="fal fa-heart"></i></a>
                                            <a class="icon-btn" href="#"><i class="fal fa-shopping-cart"></i></a>
                                            <a class="icon-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="rating-wrap">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                        </div>
                                        <h4 class="product-title h5"><a href="shop-details.php">Kevzara</a></h4>
                                        <span class="price">$29.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 mb-30">
                                <div class="vs-product-box product-list">
                                    <div class="product-img">
                                        <img src="assets/img/product/p-1-4.jpg" class="w-100" alt="Product Image">
                                        <div class="actions-btn">
                                            <a class="icon-btn" href="#"><i class="fal fa-heart"></i></a>
                                            <a class="icon-btn" href="#"><i class="fal fa-shopping-cart"></i></a>
                                            <a class="icon-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="rating-wrap">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                        </div>
                                        <h4 class="product-title h5"><a href="shop-details.php">Metoprolol</a></h4>
                                        <span class="price">$75.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 mb-30">
                                <div class="vs-product-box product-list">
                                    <div class="product-img">
                                        <img src="assets/img/product/p-1-5.jpg" class="w-100" alt="Product Image">
                                        <div class="actions-btn">
                                            <a class="icon-btn" href="#"><i class="fal fa-heart"></i></a>
                                            <a class="icon-btn" href="#"><i class="fal fa-shopping-cart"></i></a>
                                            <a class="icon-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="rating-wrap">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                        </div>
                                        <h4 class="product-title h5"><a href="shop-details.php">Prednisone</a></h4>
                                        <span class="price">$52.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 mb-30">
                                <div class="vs-product-box product-list">
                                    <div class="product-img">
                                        <img src="assets/img/product/p-1-6.jpg" class="w-100" alt="Product Image">
                                        <div class="actions-btn">
                                            <a class="icon-btn" href="#"><i class="fal fa-heart"></i></a>
                                            <a class="icon-btn" href="#"><i class="fal fa-shopping-cart"></i></a>
                                            <a class="icon-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="rating-wrap">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                        </div>
                                        <h4 class="product-title h5"><a href="shop-details.php">Clonazepam</a></h4>
                                        <span class="price">$28.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 mb-30">
                                <div class="vs-product-box product-list">
                                    <div class="product-img">
                                        <img src="assets/img/product/p-1-7.jpg" class="w-100" alt="Product Image">
                                        <div class="actions-btn">
                                            <a class="icon-btn" href="#"><i class="fal fa-heart"></i></a>
                                            <a class="icon-btn" href="#"><i class="fal fa-shopping-cart"></i></a>
                                            <a class="icon-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="rating-wrap">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                        </div>
                                        <h4 class="product-title h5"><a href="shop-details.php">Wellbutrin</a></h4>
                                        <span class="price">$45.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 mb-30">
                                <div class="vs-product-box product-list">
                                    <div class="product-img">
                                        <img src="assets/img/product/p-1-8.jpg" class="w-100" alt="Product Image">
                                        <div class="actions-btn">
                                            <a class="icon-btn" href="#"><i class="fal fa-heart"></i></a>
                                            <a class="icon-btn" href="#"><i class="fal fa-shopping-cart"></i></a>
                                            <a class="icon-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="rating-wrap">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                        </div>
                                        <h4 class="product-title h5"><a href="shop-details.php">Biotin Complex</a></h4>
                                        <span class="price">$99.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 mb-30">
                                <div class="vs-product-box product-list">
                                    <div class="product-img">
                                        <img src="assets/img/product/p-1-9.jpg" class="w-100" alt="Product Image">
                                        <div class="actions-btn">
                                            <a class="icon-btn" href="#"><i class="fal fa-heart"></i></a>
                                            <a class="icon-btn" href="#"><i class="fal fa-shopping-cart"></i></a>
                                            <a class="icon-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="rating-wrap">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                        </div>
                                        <h4 class="product-title h5"><a href="shop-details.php">Lisinopril</a></h4>
                                        <span class="price">$56.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 mb-30">
                                <div class="vs-product-box product-list">
                                    <div class="product-img">
                                        <img src="assets/img/product/p-1-10.jpg" class="w-100" alt="Product Image">
                                        <div class="actions-btn">
                                            <a class="icon-btn" href="#"><i class="fal fa-heart"></i></a>
                                            <a class="icon-btn" href="#"><i class="fal fa-shopping-cart"></i></a>
                                            <a class="icon-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="rating-wrap">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                        </div>
                                        <h4 class="product-title h5"><a href="shop-details.php">Metformin</a></h4>
                                        <span class="price">$68.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 mb-30">
                                <div class="vs-product-box product-list">
                                    <div class="product-img">
                                        <img src="assets/img/product/p-1-11.jpg" class="w-100" alt="Product Image">
                                        <div class="actions-btn">
                                            <a class="icon-btn" href="#"><i class="fal fa-heart"></i></a>
                                            <a class="icon-btn" href="#"><i class="fal fa-shopping-cart"></i></a>
                                            <a class="icon-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="rating-wrap">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                        </div>
                                        <h4 class="product-title h5"><a href="shop-details.php">Doxycycline </a></h4>
                                        <span class="price">$19.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 mb-30">
                                <div class="vs-product-box product-list">
                                    <div class="product-img">
                                        <img src="assets/img/product/p-1-12.jpg" class="w-100" alt="Product Image">
                                        <div class="actions-btn">
                                            <a class="icon-btn" href="#"><i class="fal fa-heart"></i></a>
                                            <a class="icon-btn" href="#"><i class="fal fa-shopping-cart"></i></a>
                                            <a class="icon-btn" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="rating-wrap">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                        </div>
                                        <h4 class="product-title h5"><a href="shop-details.php">Amitriptyline</a></h4>
                                        <span class="price">$40.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vs-pagination mb-30">
                <ul>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fas fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    <?php include 'footerhospital.php';?>