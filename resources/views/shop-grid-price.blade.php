<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mua hàng LeafyFood</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="/img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="/favorite"><i class="fa fa-heart"></i> <span>{{ $totalProductsFavorite }}</span></a></li>
                <li><a href="/shoping-cart"><i class="fa fa-shopping-bag"></i> <span>{{ $totalProductsInCart ? $totalProductsInCart : 0 }}</span></a></li>
            </ul>

        </div>
        <div class="humberger__menu__widget">

            <div class="header__top__right__auth">
                @if (isset($id))                    {{-- <a href="/logout"><i class="fa fa-user"></i> Logout</a> --}}
                                                        <a href="#"><i class="fa fa-user"></i> {{ $name }}</a>
                    <div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                                @else
                                    <a href="/login"><i class="fa fa-user"></i> Login</a>
                                @endif
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="/">Trang chủ</a></li>
                <li><a href="/shop-grid">Cửa hàng</a></li>
                
                <li><a href="/blog">Blog</a></li>
                <li><a href="/contact">Liên hệ</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> leafyfood@gmail.com</li>
                <li>Giao hàng miễn phí cho tất cả đơn hàng 300.000 đ</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> leafyfood@gmail.com</li>
                                <li>Giao hàng miễn phí cho tất cả đơn hàng 300.000 đ</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>

                            <div class="header__top__right__auth">
                                @if (isset($id))                    
                                    {{-- <a href="/logout"><i class="fa fa-user"></i> Logout</a> --}}
                                    <a href="#"><i class="fa fa-user"></i> {{ $name }}</a>
                                    <div>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                @else
                                    <a href="/login"><i class="fa fa-user"></i> Login</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="/"><img src="/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="/">Trang chủ</a></li>
                            <li class="active"><a href="/shop-grid">Cửa hàng</a></li>
                            
                            <li><a href="/blog">Blog</a></li>
                            <li><a href="/contact">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="/favorite"><i class="fa fa-heart"></i> <span>{{ $totalProductsFavorite }}</span></a></li>
                            <li><a href="/shoping-cart"><i class="fa fa-shopping-bag"></i> <span>{{ $totalProductsInCart ? $totalProductsInCart : 0 }}</span></a></li>
                        </ul>
            
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Danh mục</span>
                        </div>
                        <ul>
                            @foreach ($categories as $category)
                                <li><a href="/shop-grid/{{ $category->id }}">{{ $category->category_name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="/search" method="GET">
                                <div class="hero__search__categories">
                                    Tìm kiếm
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="Bạn muốn tìm gì?" name="keyword">
                                <button type="submit" class="site-btn">TÌM KIẾM</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>1900 6868</h5>
                                <span>8:00 AM - 10:00 PM</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>LeafyFood</h2>
                        <div class="breadcrumb__option">
                            <a href="/">Trang chủ</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Danh mục</h4>
                            <ul>
                                @foreach ($categories as $category)
                                    <li><a href="/shop-grid/{{ $category->id }}">{{ $category->category_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        {{-- <div class="sidebar__item">
                            <h4>Giá</h4>
                            <div class="price-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="0" data-max="1000000">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tab="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tab="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="minamount">
                                        <input type="text" id="maxamount">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="sidebar__item">
                            <h4>Giá</h4>
                            <ul>
                                <li><a href="/shop-grid/price/0/100000">Dưới 100.000đ</a></li>
                                <li><a href="/shop-grid/price/100000/200000">100.000đ - 200.000đ</a></li>
                                <li><a href="/shop-grid/price/200000/300000">200.000đ - 300.000đ</a></li>
                                <li><a href="/shop-grid/price/300000/500000">300.000đ - 500.000đ</a></li>
                                <li><a href="/shop-grid/price/500000/999999999999">Trên 500.000đ</a></li>
                            </ul>
                        </div>
                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Mới nhất</h4>
                                <div class="latest-product__slider owl-carousel">
                                    <div class="latest-prdouct__slider__item">
                                        @for ($i = 0; $i < 3; $i++)
                                            <a href="/shop-details/{{ @$lastestProducts[$i]->id }}" class="latest-product__item">
                                                <div class="latest-product__item__pic">
                                                    <img src="{{ @$lastestProducts[$i]->image }}" alt="{{ @$lastestProducts[$i]->product_name . " " . @$lastestProducts[$i]->number . @$lastestProducts[$i]->unit }}">
                                                </div>
                                                <div class="latest-product__item__text">
                                                    <h6>{{ @$lastestProducts[$i]->product_name . " " . @$lastestProducts[$i]->number . @$lastestProducts[$i]->unit }}</h6>
                                                    <span>{{ number_format(@$lastestProducts[$i]->price) }} VNĐ</span>
                                                </div>
                                            </a>
                                        @endfor
                                    </div>
                                    <div class="latest-prdouct__slider__item">
                                        @for ($i = 3; $i < 6; $i++)
                                            <a href="/shop-details/{{ @$lastestProducts[$i]->id }}" class="latest-product__item">
                                                <div class="latest-product__item__pic">
                                                    <img src="{{ @$lastestProducts[$i]->image }}" alt="{{ @$lastestProducts[$i]->product_name . " " . @$lastestProducts[$i]->number . @$lastestProducts[$i]->unit }}">
                                                </div>
                                                <div class="latest-product__item__text">
                                                    <h6>{{ @$lastestProducts[$i]->product_name . " " . @$lastestProducts[$i]->number . @$lastestProducts[$i]->unit }}</h6>
                                                    <span>{{ number_format(@$lastestProducts[$i]->price) }} VNĐ</span>
                                                </div>
                                            </a>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Sale Off</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                @foreach ($products as $product)
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{ $product->image }}">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>{{ $product->category_name }}</span>
                                            <h5><a href="/shop-details/{{ $product->id }}">{{ $product->product_name . ' ' . $product->number . $product->unit }}</a></h5>
                                            <div class="product__item__price">{{ number_format($product->price) }} VNĐ<span>{{ number_format($product->price) }} VNĐ</span></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sắp xếp theo</span>
                                    <select>
                                        <option value="0">Giá</option>
                                        <option value="0">Mua nhiều</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>{{ $totalProducts }}</span> Sản phẩm hiện có</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{ $product->image }}">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="/shop-details/{{ $product->id }}">{{ $product->product_name . ' ' . $product->number . $product->unit }}</a></h6>
                                    <h5>{{ number_format($product->price) }} VNĐ</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="product__pagination">
                        @for ($i = 1; $i <= $products->lastPage(); $i++)
                            <a href="{{ $products->url($i) }}">{{ $i }}</a>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="/"><img src="/img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Địa chỉ: UIT, Khu phố a, Thủ Đức</li>
                            <li>Phone: 1900 6868</li>
                            <li>Email: leafyfood@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                                        <div class="footer__widget">
                        <h6>Truy cập nhanh</h6>
                        <ul>
                            <li><a href="#">Về LeaefyFood</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Tuyển dụng LeafyFood</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Đăng kí nhận thông tin</h6>
                        <p>Nhận thông tin về cửa hàng và các ưu đãi đặc biệt.</p>
                        <form action="#">
                            <input type="text" placeholder="Nhập email của bạn">
                            <button type="submit" class="site-btn">Đăng kí ngay!</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="/img/payment-item.png" alt="" style="width: 40px !important;height: auto !important;">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.nice-select.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/jquery.slicknav.js"></script>
    <script src="/js/mixitup.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/main.js"></script>



</body>

</html>