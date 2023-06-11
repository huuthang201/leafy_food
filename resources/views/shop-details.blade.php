<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="index, follow">
    <meta name="title" content="{{$dataProduct->product_name . ' ' . $dataProduct->number . $dataProduct->unit}}">
    <meta name="description" content="Leafy (lá cây) và Food (thực phẩm) gợi lên hình ảnh về các nguyên liệu tươi, tốt cho sức khỏe và các bữa ăn tự nhiên, ngon miệng. Nó gợi ý về mối liên hệ giữa thiên nhiên và dinh dưỡng, với thông điệp mạnh mẽ về sự bền vững. Tên ngắn cũng giúp dễ nhớ, dễ tìm kiếm, đây là những lợi thế chính cho các doanh nghiệp.">
    <meta name="keywords" content="leafyfood, eatclean, Thực phẩm sạch, Ăn sạch, Ăn uống lành mạnh, Ăn đúng cách, Chế độ ăn kiêng, Tinh thần eatclean, Công thức ăn uống, Thực đơn eatclean, Đồ ăn tươi sống, Món ăn chay, Nấu ăn từ thiên nhiên, Thực phẩm hữu cơ, Quản lý cân nặng, Tập thể dục, Sức khỏe tinh thần, Đồ uống detox, Thực phẩm chức năng, Ăn trái cây và rau xanh, Ăn ít đường, Ăn nhiều chất xơ.">
    <meta name="author" content="LeafyFood">
    {{-- Canonical  --}}
    <link rel="canonical" href="{{ url()->full() }}">
    {{-- Open Graph data --}}
    <meta property="og:title" content="Sản phẩm {{ $dataProduct->product_name . ' ' . $dataProduct->number . $dataProduct->unit }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->full() }}" />
    <meta property="og:image" content="{{$dataProduct->image}}" />
    <meta property="og:description" content="{{$dataProduct->product_name . ' ' . $dataProduct->number . $dataProduct->unit}} | Sản phẩm đến từ Leafy (lá cây) và Food (thực phẩm) gợi lên hình ảnh về các nguyên liệu tươi, tốt cho sức khỏe và các bữa ăn tự nhiên, ngon miệng. Nó gợi ý về mối liên hệ giữa thiên nhiên và dinh dưỡng, với thông điệp mạnh mẽ về sự bền vững." />
    <meta property="og:site_name" content="LeafyFood - Chăm sóc sức khỏe, thưởng thức cuộc sống" />
    {{-- Twitter Card data --}}
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@LeafyFood">
    <meta name="twitter:title" content="{{$dataProduct->product_name . ' ' . $dataProduct->number . $dataProduct->unit}}">
    <meta name="twitter:description" content="{{$dataProduct->product_name . ' ' . $dataProduct->number . $dataProduct->unit}} | Sản phẩm đến từ Leafy (lá cây) và Food (thực phẩm) gợi lên hình ảnh về các nguyên liệu tươi, tốt cho sức khỏe và các bữa ăn tự nhiên, ngon miệng. Nó gợi ý về mối liên hệ giữa thiên nhiên và dinh dưỡng, với thông điệp mạnh mẽ về sự bền vững.">
    <meta name="twitter:creator" content="@LeafyFood">
    <meta name="twitter:image" content="{{$dataProduct->image}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- favicon --}}
    <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
    {{-- csrf token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sản phẩm {{ $dataProduct->product_name . ' ' . $dataProduct->number . $dataProduct->unit }}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;600;900&display=swap" rel="stylesheet">
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
                <li><a href="/bill"><i class="fa fa-newspaper-o" aria-hidden="true"></i>            </ul>

        </div>
        <div class="humberger__menu__widget">

            <div class="header__top__right__auth">
                @if (isset($id))                    
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
            <a href="https://www.facebook.com/leafyfoodeatclean"><i class="fa fa-facebook"></i></a>
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
                                <a href="https://www.facebook.com/leafyfoodeatclean"><i class="fa fa-facebook"></i></a>
                            </div>

                            <div class="header__top__right__auth">
                                @if (isset($id))                    
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
                <li><a href="/bill"><i class="fa fa-newspaper-o" aria-hidden="true"></i>                        </ul>
            
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
                        <h2>{{ $dataProduct->product_name . ' ' . $dataProduct->number . $dataProduct->unit }}</h2>
                        <div class="breadcrumb__option">
                            <a href="/">Trang chủ</a>
                            <a href="/shop-grid/{{ $categoryName->id }}">{{ $categoryName->category_name }}</a>
                            <span>{{ $dataProduct->product_name . ' ' . $dataProduct->number . $dataProduct->unit }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="{{ $dataProduct->image }}" alt="">
                        </div>
                        {{-- <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="img/product/details/product-details-2.jpg"
                                src="/img/product/details/thumb-1.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-3.jpg"
                                src="/img/product/details/thumb-2.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-5.jpg"
                                src="/img/product/details/thumb-3.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-4.jpg"
                                src="/img/product/details/thumb-4.jpg" alt="">
                        </div> --}}
                    </div>
                </div>
                <form class="col-lg-6 col-md-6" action="/add-cart" method="get">
                    {!! isset($error) ? "<div class='alert alert-danger alert-dismissible fade show' role='alert'> <strong>Không đủ hàng rồi bạn ơi!</strong> mong bạn thông cảm nhé, chỉ còn " . $dataProduct->quantity . " sản phẩm nữa thui! <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div>" : "" !!}
                    <div class="product__details__text">
                        <h3>{{ $dataProduct->product_name . ' ' . $dataProduct->number . $dataProduct->unit }}</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price">{{ number_format($dataProduct->price, 0, '', ',') }} VNĐ</div>
                        <p>{{ strip_tags(nl2br($dataProduct->description)) }}</p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1" name="quantity">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="product_id" value="{{ $dataProduct->id }}">
                        <input type="submit" class="primary-btn" value="Thêm vào giỏ hàng">
                        <a href="/add-favorite?product_id={{ $dataProduct->id }}" class="heart-icon"><span>{!! $favoriteProducts ? "<i class='fa fa-heart'></i>" : "<i class='fa fa-heart-o'></i>" !!}</span></a>
                        <ul>
                            <li><b>Còn</b> <span>{{ $dataProduct->quantity }}</span></li>
                            <li><b>Trọng lượng</b> <span>{{ $dataProduct->number != null ? $dataProduct->number . $dataProduct->unit : 'Tổng trọng lượng các sản phẩm trong Combo' }}</span></li>
                            <li><b>Giao hàng</b> <span>Tùy vào địa chỉ giao hàng |<samp> Miễn phí cho đơn hàng có giá trị trên 300k</samp></span></li>
                            <li><b>Chia sẻ</b>
                                <div class="share">
                                    <a href="https://www.facebook.com/leafyfoodeatclean"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </form>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">{{ substr($dataProduct->product_name . ' ' . $dataProduct->number . $dataProduct->unit, 0, 20) . '...' }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">{{ substr($categoryName->category_name, 0, 20) . '...' }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Đánh giá <span>(1)</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Về {{ substr($dataProduct->product_name . ' ' . $dataProduct->number . $dataProduct->unit, 0, 20) . '...' }}</h6>
                                    <p>{{ strip_tags($dataProduct->description) }}</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Về {{ substr($categoryName->category_name, 0, 20) . '...' }}</h6>
                                    <p>{{ strip_tags($categoryName->description) }}</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Đánh giá nổi bật</h6>
                                    <p>{{ strip_tags($dataProduct->description) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Có thể bạn thích Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Có thể bạn thích</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($relatedProducts as $item)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{ $item->image }}">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="/shop-details/{{ $item->id }}">{{ $item->product_name . ' ' . $item->number . $item->unit }}</a></h6>
                            <h5>{{ number_format($item->price, 0, '', ',') }} VNĐ</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Có thể bạn thích Section End -->

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
                            <li><a href="/contact">Về LeaefyFood</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Tuyển dụng LeafyFood</a></li>
                        </ul>
                        <ul>
                            <li><a href="/policy-return">Chính sách hoàn trả</a></li>
                        </ul>
                        <ul>
                            <li><a href="/policy-delivery">Chính sách giao hàng</a></li>
                        </ul>
                        <ul>
                            <li><a href="/discount">Khuyến mãi</a></li>
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
                            <a href="https://www.facebook.com/leafyfoodeatclean"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.tiktok.com/@leafyfood"><i class="fa fa-instagram"></i></a>
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