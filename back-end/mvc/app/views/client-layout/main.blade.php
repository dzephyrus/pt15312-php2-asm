<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'PT15312 php2 mvc')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{THEME_CLIENT_URL}}img/favicon.png">

    <!-- all css here -->
    @include('client-layout.css')

</head>

<body>
    <!-- header start -->
    <div class="wrapper">
        <!-- Newsletter Popup Start -->
        <div class="popup_wrapper hidden-sm hidden-xs">
            <div class="test">
                <span class="popup_off">Close</span>
                <div class="subscribe_area text-center">
                    <h2>Newsletter</h2>
                    <p>Subscribe to the Neha mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                    <div id="mc_embed_signup" class="subscribe-bottom">
                        <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll" class="mc-form">
                                <input type="email" value="" name="EMAIL" class="email" placeholder="Enter your email address" required>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                <div class="clear-2"><input type="submit" value="subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                            </div>
                        </form>
                    </div>
                    <div class="subscribe-bottom mt-15">
                        <input type="checkbox" id="newsletter-permission">
                        <label for="newsletter-permission">Don't show this popup again</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Popup End -->
        @include('client-layout.header')
        <!-- header end -->
        <!-- sidebar-cart start -->
        <div class="sidebar-cart onepage-sidebar-area">
            <div class="wrap-sidebar">
                <div class="sidebar-cart-all">
                    <div class="sidebar-cart-icon">
                        <button class="op-sidebar-close"><span class="ion-android-close"></span></button>
                    </div>
                    <div class="cart-content">
                        <h3>Shopping Cart</h3>
                        <ul>
                            <li class="single-product-cart">
                                <div class="cart-img">
                                    <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                                </div>
                                <div class="cart-title">
                                    <h3><a href="#"> HANDCRAFTED MUG</a></h3>
                                    <span>1 x $140.00</span>
                                </div>
                                <div class="cart-delete">
                                    <a href="#"><i class="ion-ios-trash-outline"></i></a>
                                </div>
                            </li>
                            <li class="single-product-cart">
                                <div class="cart-img">
                                    <a href="#"><img src="assets/img/cart/2.jpg" alt=""></a>
                                </div>
                                <div class="cart-title">
                                    <h3><a href="#"> HANDCRAFTED MUG</a></h3>
                                    <span>1 x $140.00</span>
                                </div>
                                <div class="cart-delete">
                                    <a href="#"><i class="ion-ios-trash-outline"></i></a>
                                </div>
                            </li>
                            <li class="single-product-cart">
                                <div class="cart-img">
                                    <a href="#"><img src="assets/img/cart/3.jpg" alt=""></a>
                                </div>
                                <div class="cart-title">
                                    <h3><a href="#"> HANDCRAFTED MUG</a></h3>
                                    <span>1 x $140.00</span>
                                </div>
                                <div class="cart-delete">
                                    <a href="#"><i class="ion-ios-trash-outline"></i></a>
                                </div>
                            </li>
                            <li class="single-product-cart">
                                <div class="cart-total">
                                    <h4>Total : <span>$ 120</span></h4>
                                </div>
                            </li>
                            <li class="single-product-cart">
                                <div class="cart-checkout-btn">
                                    <a class="btn-hover cart-btn-style" href="#">view cart</a>
                                    <a class="no-mrg btn-hover cart-btn-style" href="#">checkout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-search start -->
        <div class="main-search-active">
            <div class="sidebar-search-icon">
                <button class="search-close"><span class="ion-android-close"></span></button>
            </div>
            <div class="sidebar-search-input">
                <form>
                    <div class="form-search">
                        <input id="search" class="input-text" value="" placeholder="Search Entire Store" type="search">
                        <button>
                            <i class="ion-ios-search-strong"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- main-search start -->
        @include('client-layout.sidebar')
        @yield('main-content')

        @include('client-layout.footer')
        <!-- modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="ion-android-close" aria-hidden="true"></span>
            </button>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="qwick-view-left">
                            <div class="quick-view-learg-img">
                                <div class="quick-view-tab-content tab-content">
                                    <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                        <img src="assets/img/quick-view/l1.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal2" role="tabpanel">
                                        <img src="assets/img/quick-view/l2.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal3" role="tabpanel">
                                        <img src="assets/img/quick-view/l3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="quick-view-list nav" role="tablist">
                                <a class="active" href="#modal1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="home1">
                                    <img src="assets/img/quick-view/s1.jpg" alt="">
                                </a>
                                <a href="#modal2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home2">
                                    <img src="assets/img/quick-view/s2.jpg" alt="">
                                </a>
                                <a href="#modal3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home3">
                                    <img src="assets/img/quick-view/s3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="qwick-view-right">
                            <div class="qwick-view-content">
                                <h3>Handcrafted Supper Mug</h3>
                                <div class="price">
                                    <span class="new">$90.00</span>
                                    <span class="old">$120.00 </span>
                                </div>
                                <div class="rating-number">
                                    <div class="quick-view-rating">
                                        <i class="ion-ios-star red-star"></i>
                                        <i class="ion-ios-star red-star"></i>
                                        <i class="ion-android-star-outline"></i>
                                        <i class="ion-android-star-outline"></i>
                                        <i class="ion-android-star-outline"></i>
                                    </div>
                                    <div class="quick-view-number">
                                        <span>2 Ratting (S)</span>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                                <div class="quick-view-select">
                                    <div class="select-option-part">
                                        <label>Size*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">900</option>
                                            <option value="">700</option>
                                        </select>
                                    </div>
                                    <div class="select-option-part">
                                        <label>Color*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">orange</option>
                                            <option value="">pink</option>
                                            <option value="">yellow</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="quickview-plus-minus">
                                    <div class="cart-plus-minus">
                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                    </div>
                                    <div class="quickview-btn-cart">
                                        <a class="btn-hover-black" href="#">add to cart</a>
                                    </div>
                                    <div class="quickview-btn-wishlist">
                                        <a class="btn-hover" href="#"><i class="ion-ios-heart-outline"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clickable-mainmenu-btn">
            <a class="clickable-mainmenu-active" href="#"><i class="ion-navicon"></i></a>
        </div>
        <div class="clickable-mainmenu text-center">
            <div class="clickable-mainmenu-icon">
                <button class="clickable-mainmenu-close">
                    <span class="ion-android-close"></span>
                </button>
            </div>
            <div id="menu" class="text-left">
                <ul>
                    <li><a href="#">home</a></li>
                    <li><a href="about-us.html">about us</a></li>
                    <li><a href="shop-grid-view-5-col.html">shop</a></li>
                    <li><a href="#">pages</a>
                        <ul class="dropdown">
                            <li><a href="about-us.html">about us</a></li>
                            <li><a href="cart.html">cart</a></li>
                            <li><a href="checkout.html">checkout</a></li>
                            <li><a href="wishlist.html">wishlist</a></li>
                            <li><a href="contact.html">contact</a></li>
                            <li><a href="login.html">login</a></li>
                            <li><a href="register.html">register</a></li>
                        </ul>
                    </li>
                    <li><a href="#">blog</a>
                        <ul class="dropdown">
                            <li><a href="blog.html">blog </a></li>
                            <li><a href="blog-details.html">blog details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">contact</a></li>
                </ul>
            </div>
        </div>
    </div>







    @include('client-layout.script')

    <!-- all js here -->

</body>

</html>