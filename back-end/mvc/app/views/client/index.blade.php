@extends('client-layout.main');
@section('main-content')

<div class="slider-area">
    <div class="slider-active owl-carousel">
        <div class="single-slider single-slider-hm1 bg-img ptb-260" style="background-image: url(https://curnonwatch.com/media/catalog/category/NewFlorenge.jpg?auto=webp&format=pjpg&width=840&fit=cover&method=fit&nocrop=true&height=1080)">
            <div class="container">
                <div class="slider-content slider-content-style-1 slider-animated-1">
                    <h3 class="animated">New Collection <span>2018.</span></h3>
                    <h2 class="animated">Amazing Product</h2>
                    <p class="animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius tempor incididunt ut labore et dolore </p>
                    <a class="btn-hover slider-btn-style animated" href="shop-grid-view-sidebar.html">shop now</a>
                </div>
            </div>
        </div>
        <div class="single-slider single-slider-hm1 bg-img slider-content-style-1 ptb-260" style="background-image: url(https://curnonwatch.com/about-us-wmP.jpg?auto=png&format=pjpg&width=1200)">
            <div class="container">
                <div class="slider-content slider-content-style-1 slider-animated-2 slider-text-right">
                    <h3 class="animated">New Fashion <span>2018.</span></h3>
                    <h2 class="animated">Awesome Product</h2>
                    <div class="slide-right-pera">
                        <p class="animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius tempor incididunt ut labore et dolore </p>
                    </div>
                    <a class="btn-hover slider-btn-style animated" href="shop-grid-view-sidebar.html">shop now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@yield('slider-area')

<div class="product-area pb-100 pt-100">
    <div class="container">
        <div class="section-title text-center mb-35">
            <h2>Sản phẩm mới</h2>
            <p>Top những sản phẩm mới nhất theo từng ngành hàng</p>
        </div>
        <div class="product-style">
            <div class="product-tab-list text-center mb-45 nav product-menu-mrg" role="tablist">
                <a class="active" href="#home1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="home1">
                    <h4>NEW IN </h4>
                </a>
                <a href="#home2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home2">
                    <h4>ON SALE </h4>
                </a>
                <a href="#home3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home3">
                    <h4>FREE SHIPPING</h4>
                </a>
                <a href="#home4" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home4">
                    <h4>HIGHEST RATING</h4>
                </a>
            </div>
            <div class="tab-content jump">
                <div class="tab-pane active show fade" id="home1" role="tabpanel">
                    <div class="row">
                        <div class="product-slider-active owl-carousel">
                            <div class="col-md-3 col-lg-3 col-sm-4">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#"><img src="assets/img/product/1.jpg" alt=""></a>
                                        <span>sale</span>
                                        <div class="product-action">
                                            <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title-price">
                                            <div class="product-title">
                                                <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                                            </div>
                                            <div class="product-price">
                                                <span>$110.00</span>
                                            </div>
                                        </div>
                                        <div class="product-cart-categori">
                                            <div class="product-cart">
                                                <span>Furniter</span>
                                            </div>
                                            <div class="product-categori">
                                                <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-4">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#"><img src="assets/img/product/2.jpg" alt=""></a>
                                        <div class="product-action">
                                            <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title-price">
                                            <div class="product-title">
                                                <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                                            </div>
                                            <div class="product-price">
                                                <span>$120.00</span>
                                            </div>
                                        </div>
                                        <div class="product-cart-categori">
                                            <div class="product-cart">
                                                <span>Furniter</span>
                                            </div>
                                            <div class="product-categori">
                                                <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-4">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#"><img src="assets/img/product/3.jpg" alt=""></a>
                                        <span>sale</span>
                                        <div class="product-action">
                                            <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title-price">
                                            <div class="product-title">
                                                <h4><a href="product-details-6.html">HANDCRAFTED MUG</a></h4>
                                            </div>
                                            <div class="product-price">
                                                <span>$130.00</span>
                                            </div>
                                        </div>
                                        <div class="product-cart-categori">
                                            <div class="product-cart">
                                                <span>Furniter</span>
                                            </div>
                                            <div class="product-categori">
                                                <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-4">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#"><img src="assets/img/product/4.jpg" alt=""></a>
                                        <div class="product-action">
                                            <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title-price">
                                            <div class="product-title">
                                                <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                                            </div>
                                            <div class="product-price">
                                                <span>$140.00</span>
                                            </div>
                                        </div>
                                        <div class="product-cart-categori">
                                            <div class="product-cart">
                                                <span>Furniter</span>
                                            </div>
                                            <div class="product-categori">
                                                <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="home2" role="tabpanel">
                    <div class="row">
                        <div class="product-slider-active owl-carousel">
                            <div class="col-md-3 col-lg-3 col-sm-4">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#"><img src="assets/img/product/5.jpg" alt=""></a>
                                        <span>sale</span>
                                        <div class="product-action">
                                            <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title-price">
                                            <div class="product-title">
                                                <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                                            </div>
                                            <div class="product-price">
                                                <span>$150.00</span>
                                            </div>
                                        </div>
                                        <div class="product-cart-categori">
                                            <div class="product-cart">
                                                <span>Furniter</span>
                                            </div>
                                            <div class="product-categori">
                                                <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-4">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#"><img src="assets/img/product/6.jpg" alt=""></a>
                                        <div class="product-action">
                                            <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title-price">
                                            <div class="product-title">
                                                <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                                            </div>
                                            <div class="product-price">
                                                <span>$160.00</span>
                                            </div>
                                        </div>
                                        <div class="product-cart-categori">
                                            <div class="product-cart">
                                                <span>Furniter</span>
                                            </div>
                                            <div class="product-categori">
                                                <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-4">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#"><img src="assets/img/product/7.jpg" alt=""></a>
                                        <span>sale</span>
                                        <div class="product-action">
                                            <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title-price">
                                            <div class="product-title">
                                                <h4><a href="product-details-6.html">HANDCRAFTED MUG</a></h4>
                                            </div>
                                            <div class="product-price">
                                                <span>$170.00</span>
                                            </div>
                                        </div>
                                        <div class="product-cart-categori">
                                            <div class="product-cart">
                                                <span>Furniter</span>
                                            </div>
                                            <div class="product-categori">
                                                <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-4">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#"><img src="assets/img/product/8.jpg" alt=""></a>
                                        <div class="product-action">
                                            <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title-price">
                                            <div class="product-title">
                                                <h4><a href="product-details-6.html">HANDCRAFTED MUG</a></h4>
                                            </div>
                                            <div class="product-price">
                                                <span>$180.00</span>
                                            </div>
                                        </div>
                                        <div class="product-cart-categori">
                                            <div class="product-cart">
                                                <span>Furniter</span>
                                            </div>
                                            <div class="product-categori">
                                                <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="home3" role="tabpanel">
                    <div class="row">
                        <div class="product-slider-active owl-carousel">
                            <div class="col-md-3 col-lg-3 col-sm-4">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#"><img src="assets/img/product/9.jpg" alt=""></a>
                                        <span>sale</span>
                                        <div class="product-action">
                                            <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title-price">
                                            <div class="product-title">
                                                <h4><a href="product-details-6.html">HANDCRAFTED MUG</a></h4>
                                            </div>
                                            <div class="product-price">
                                                <span>$190.00</span>
                                            </div>
                                        </div>
                                        <div class="product-cart-categori">
                                            <div class="product-cart">
                                                <span>Furniter</span>
                                            </div>
                                            <div class="product-categori">
                                                <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-4">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#"><img src="assets/img/product/10.jpg" alt=""></a>
                                        <div class="product-action">
                                            <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title-price">
                                            <div class="product-title">
                                                <h4><a href="product-details-6.html">HANDCRAFTED MUG</a></h4>
                                            </div>
                                            <div class="product-price">
                                                <span>$110.00</span>
                                            </div>
                                        </div>
                                        <div class="product-cart-categori">
                                            <div class="product-cart">
                                                <span>Furniter</span>
                                            </div>
                                            <div class="product-categori">
                                                <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-4">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#"><img src="assets/img/product/11.jpg" alt=""></a>
                                        <span>sale</span>
                                        <div class="product-action">
                                            <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title-price">
                                            <div class="product-title">
                                                <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                                            </div>
                                            <div class="product-price">
                                                <span>$120.00</span>
                                            </div>
                                        </div>
                                        <div class="product-cart-categori">
                                            <div class="product-cart">
                                                <span>Furniter</span>
                                            </div>
                                            <div class="product-categori">
                                                <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-4">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#"><img src="assets/img/product/12.jpg" alt=""></a>
                                        <div class="product-action">
                                            <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title-price">
                                            <div class="product-title">
                                                <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                                            </div>
                                            <div class="product-price">
                                                <span>$130.00</span>
                                            </div>
                                        </div>
                                        <div class="product-cart-categori">
                                            <div class="product-cart">
                                                <span>Furniter</span>
                                            </div>
                                            <div class="product-categori">
                                                <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="home4" role="tabpanel">
                    <div class="row">
                        <div class="product-slider-active owl-carousel">
                            <div class="col-md-3 col-lg-3 col-sm-4">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#"><img src="assets/img/product/6.jpg" alt=""></a>
                                        <span>sale</span>
                                        <div class="product-action">
                                            <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title-price">
                                            <div class="product-title">
                                                <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                                            </div>
                                            <div class="product-price">
                                                <span>$140.00</span>
                                            </div>
                                        </div>
                                        <div class="product-cart-categori">
                                            <div class="product-cart">
                                                <span>Furniter</span>
                                            </div>
                                            <div class="product-categori">
                                                <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-4">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#"><img src="assets/img/product/1.jpg" alt=""></a>
                                        <div class="product-action">
                                            <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title-price">
                                            <div class="product-title">
                                                <h4><a href="product-details-6.html">HANDCRAFTED MUG</a></h4>
                                            </div>
                                            <div class="product-price">
                                                <span>$150.00</span>
                                            </div>
                                        </div>
                                        <div class="product-cart-categori">
                                            <div class="product-cart">
                                                <span>Furniter</span>
                                            </div>
                                            <div class="product-categori">
                                                <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-4">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#"><img src="assets/img/product/10.jpg" alt=""></a>
                                        <span>sale</span>
                                        <div class="product-action">
                                            <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title-price">
                                            <div class="product-title">
                                                <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                                            </div>
                                            <div class="product-price">
                                                <span>$160.00</span>
                                            </div>
                                        </div>
                                        <div class="product-cart-categori">
                                            <div class="product-cart">
                                                <span>Furniter</span>
                                            </div>
                                            <div class="product-categori">
                                                <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-4">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#"><img src="assets/img/product/7.jpg" alt=""></a>
                                        <div class="product-action">
                                            <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title-price">
                                            <div class="product-title">
                                                <h4><a href="product-details-6.html">HANDCRAFTED MUG</a></h4>
                                            </div>
                                            <div class="product-price">
                                                <span>$170.00</span>
                                            </div>
                                        </div>
                                        <div class="product-cart-categori">
                                            <div class="product-cart">
                                                <span>Furniter</span>
                                            </div>
                                            <div class="product-categori">
                                                <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@yield('main-carousel')
<div class="shop-limited-area bg-img pt-90 pb-100" style="background-image: url(assets/img/banner/4.jpg)" data-overlay="3">
    <div class="container">
        <div class="shop-limited-content text-center">
            <h2>Shop Limited Edition.</h2>
            <a class="btn-hover limited-btn" href="#">view more</a>
        </div>
    </div>
</div>

<div class="product-collection-area pt-100 pb-50">
    <div class="container">
        <div class="section-title text-center mb-55">
            <h2>New Collection</h2>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when look</p>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="single-product mb-35">
                    <div class="product-img">
                        <a href="#"><img src="assets/img/product/5.jpg" alt=""></a>
                        <span>sale</span>
                        <div class="product-action">
                            <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="product-title-price">
                            <div class="product-title">
                                <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                            </div>
                            <div class="product-price">
                                <span>$110.00</span>
                            </div>
                        </div>
                        <div class="product-cart-categori">
                            <div class="product-cart">
                                <span>Furniter</span>
                            </div>
                            <div class="product-categori">
                                <a href="#"><i class="ion-bag"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="single-product mb-35">
                    <div class="product-img">
                        <a href="#"><img src="assets/img/product/6.jpg" alt=""></a>
                        <div class="product-action">
                            <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="product-title-price">
                            <div class="product-title">
                                <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                            </div>
                            <div class="product-price">
                                <span>$120.00</span>
                            </div>
                        </div>
                        <div class="product-cart-categori">
                            <div class="product-cart">
                                <span>Furniter</span>
                            </div>
                            <div class="product-categori">
                                <a href="#"><i class="ion-bag"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="single-product mb-35">
                    <div class="product-img">
                        <a href="#"><img src="assets/img/product/7.jpg" alt=""></a>
                        <span>sale</span>
                        <div class="product-action">
                            <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="product-title-price">
                            <div class="product-title">
                                <h4><a href="product-details-6.html">HANDCRAFTED MUG</a></h4>
                            </div>
                            <div class="product-price">
                                <span>$130.00</span>
                            </div>
                        </div>
                        <div class="product-cart-categori">
                            <div class="product-cart">
                                <span>Furniter</span>
                            </div>
                            <div class="product-categori">
                                <a href="#"><i class="ion-bag"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="single-product mb-35">
                    <div class="product-img">
                        <a href="#"><img src="assets/img/product/8.jpg" alt=""></a>
                        <div class="product-action">
                            <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="product-title-price">
                            <div class="product-title">
                                <h4><a href="product-details-6.html">HANDCRAFTED MUG</a></h4>
                            </div>
                            <div class="product-price">
                                <span>$140.00</span>
                            </div>
                        </div>
                        <div class="product-cart-categori">
                            <div class="product-cart">
                                <span>Furniter</span>
                            </div>
                            <div class="product-categori">
                                <a href="#"><i class="ion-bag"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="single-product mb-35">
                    <div class="product-img">
                        <a href="#"><img src="assets/img/product/9.jpg" alt=""></a>
                        <div class="product-action">
                            <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="product-title-price">
                            <div class="product-title">
                                <h4><a href="product-details-6.html">HANDCRAFTED MUG</a></h4>
                            </div>
                            <div class="product-price">
                                <span>$150.00</span>
                            </div>
                        </div>
                        <div class="product-cart-categori">
                            <div class="product-cart">
                                <span>Furniter</span>
                            </div>
                            <div class="product-categori">
                                <a href="#"><i class="ion-bag"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="single-product mb-35">
                    <div class="product-img">
                        <a href="#"><img src="assets/img/product/10.jpg" alt=""></a>
                        <span>sale</span>
                        <div class="product-action">
                            <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="product-title-price">
                            <div class="product-title">
                                <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                            </div>
                            <div class="product-price">
                                <span>$160.00</span>
                            </div>
                        </div>
                        <div class="product-cart-categori">
                            <div class="product-cart">
                                <span>Furniter</span>
                            </div>
                            <div class="product-categori">
                                <a href="#"><i class="ion-bag"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="single-product mb-35">
                    <div class="product-img">
                        <a href="#"><img src="assets/img/product/11.jpg" alt=""></a>
                        <div class="product-action">
                            <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="product-title-price">
                            <div class="product-title">
                                <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                            </div>
                            <div class="product-price">
                                <span>$170.00</span>
                            </div>
                        </div>
                        <div class="product-cart-categori">
                            <div class="product-cart">
                                <span>Furniter</span>
                            </div>
                            <div class="product-categori">
                                <a href="#"><i class="ion-bag"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="single-product mb-35">
                    <div class="product-img">
                        <a href="#"><img src="assets/img/product/12.jpg" alt=""></a>
                        <span>sale</span>
                        <div class="product-action">
                            <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="product-title-price">
                            <div class="product-title">
                                <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                            </div>
                            <div class="product-price">
                                <span>$180.00</span>
                            </div>
                        </div>
                        <div class="product-cart-categori">
                            <div class="product-cart">
                                <span>Furniter</span>
                            </div>
                            <div class="product-categori">
                                <a href="#"><i class="ion-bag"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection