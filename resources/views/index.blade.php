<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="index, follow">
    <meta name="title" content="LeafyFood - Chăm sóc sức khỏe, thưởng thức cuộc sống">
    <meta name="description" content="Leafy (lá cây) và Food (thực phẩm) gợi lên hình ảnh về các nguyên liệu tươi, tốt cho sức khỏe và các bữa ăn tự nhiên, ngon miệng. Nó gợi ý về mối liên hệ giữa thiên nhiên và dinh dưỡng, với thông điệp mạnh mẽ về sự bền vững. Tên ngắn cũng giúp dễ nhớ, dễ tìm kiếm, đây là những lợi thế chính cho các doanh nghiệp.">
    <meta name="keywords" content="leafyfood, eatclean, Thực phẩm sạch, Ăn sạch, Ăn uống lành mạnh, Ăn đúng cách, Chế độ ăn kiêng, Tinh thần eatclean, Công thức ăn uống, Thực đơn eatclean, Đồ ăn tươi sống, Món ăn chay, Nấu ăn từ thiên nhiên, Thực phẩm hữu cơ, Quản lý cân nặng, Tập thể dục, Sức khỏe tinh thần, Đồ uống detox, Thực phẩm chức năng, Ăn trái cây và rau xanh, Ăn ít đường, Ăn nhiều chất xơ.">
    <meta name="author" content="LeafyFood">
    {{-- Canonical  --}}
    <link rel="canonical" href="{{ url()->full() }}">
    {{-- Open Graph data --}}
    <meta property="og:title" content="LeafyFood - Chăm sóc sức khỏe, thưởng thức cuộc sống" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->full() }}" />
    <meta property="og:image" content="/img/logo.png" />
    <meta property="og:description" content="Leafy (lá cây) và Food (thực phẩm) gợi lên hình ảnh về các nguyên liệu tươi, tốt cho sức khỏe và các bữa ăn tự nhiên, ngon miệng. Nó gợi ý về mối liên hệ giữa thiên nhiên và dinh dưỡng, với thông điệp mạnh mẽ về sự bền vững. Tên ngắn cũng giúp dễ nhớ, dễ tìm kiếm, đây là những lợi thế chính cho các doanh nghiệp." />
    <meta property="og:site_name" content="LeafyFood" />
    {{-- Twitter Card data --}}
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@LeafyFood">
    <meta name="twitter:title" content="LeafyFood - Chăm sóc sức khỏe, thưởng thức cuộc sống">
    <meta name="twitter:description" content="Leafy (lá cây) và Food (thực phẩm) gợi lên hình ảnh về các nguyên liệu tươi, tốt cho sức khỏe và các bữa ăn tự nhiên, ngon miệng. Nó gợi ý về mối liên hệ giữa thiên nhiên và dinh dưỡng, với thông điệp mạnh mẽ về sự bền vững. Tên ngắn cũng giúp dễ nhớ, dễ tìm kiếm, đây là những lợi thế chính cho các doanh nghiệp.">
    <meta name="twitter:creator" content="@LeafyFood">
    <meta name="twitter:image" content="/img/logo.png">
    {{-- favicon --}}
    <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LeafyFood - Chăm sóc sức khỏe, thưởng thức cuộc sống</title>

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
            </ul>

        </div>
        <div class="humberger__menu__widget">

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
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> leafyfood@gmail.com</li>
                                <li>Giao hàng miễn phí cho tất cả đơn hàng 300.000 đ</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
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
                                    <div></div>
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
                            <li class="active"><a href="/">Trang chủ</a></li>
                            <li><a href="/shop-grid">Cửa hàng</a></li>
                            
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
    <section class="hero">
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
                    <div class="hero__item set-bg" data-setbg="https://user-images.githubusercontent.com/64240532/244913065-3b0d5b5f-b0cd-48ef-a36d-4786f689dcdf.png">
                        {{-- <div class="hero__text">
                            <span>Thực phẩm từ thiên nhiên</span>
                            <h2>LeafyFood <br /></h2>
                            <p>Ăn sạch - Sống khỏe</p>
                            <a href="/shop-grid" class="primary-btn">MUA NGAY</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach($categories as $categorie)
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ $categorie->image }}">
                            <h5><a href="/shop-grid/{{ $categorie->id }}">{{ $categorie->category_name }}</a></h5>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản phẩm nổi bật</h2>
                    </div>
                    {{-- <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".oranges">Oranges</li>
                            <li data-filter=".fresh-meat">Fresh Meat</li>
                            <li data-filter=".vegetables">Vegetables</li>
                            <li data-filter=".fastfood">Fastfood</li>
                        @foreach($categories as $categorie)
                            <li data-filter=".{{ $categorie->category_name }}">{{ $categorie->category_name }}</li>
                        @endforeach
                        </ul>
                    </div> --}}
                </div>
            </div>
            <div class="row featured__filter">
                @foreach($featuredProducts as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ $product->image }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="/shop-details/{{ $product->id }}">{{ $product->product_name . ' ' . $product->number . $product->unit }}</a></h6> 
                            <h5>{{ number_format($product->price, 0, '', ',') }} VNĐ</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="/img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="/img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Mới nhất</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                {{-- for run from top to middle --}}
                                @for ($i = 0; $i < 3; $i++)
                                <a href="/shop-details/{{ $latestProducts[$i]->id }}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ $latestProducts[$i]->image }}" alt="{{ $latestProducts[$i]->product_name . ' ' . $latestProducts[$i]->number . $latestProducts[$i]->unit }}">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{ $latestProducts[$i]->product_name . ' ' . $latestProducts[$i]->number . $latestProducts[$i]->unit }}</h6>
                                        <span>{{ number_format($latestProducts[$i]->price, 0, '', ',') }} VNĐ</span>
                                    </div>
                                </a>
                                @endfor
                            </div>
                            <div class="latest-prdouct__slider__item">
                                {{-- for run from middle to bottom --}}
                                @for ($i = 3; $i < 6; $i++)
                                <a href="/shop-details/{{ $latestProducts[$i]->id }}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ $latestProducts[$i]->image }}" alt="{{ $latestProducts[$i]->product_name . ' ' . $latestProducts[$i]->number . $latestProducts[$i]->unit }}">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{ $latestProducts[$i]->product_name . ' ' . $latestProducts[$i]->number . $latestProducts[$i]->unit }}</h6>
                                        <span>{{ number_format($latestProducts[$i]->price, 0, '', ',') }} VNĐ</span>
                                    </div>
                                </a>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Bình dân</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                {{-- for run from top to middle --}}
                                @for ($i = 0; $i < 3; $i++)
                                <a href="/shop-details/{{ $orderByPrice[$i]->id }}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ $orderByPrice[$i]->image }}" alt="{{ $orderByPrice[$i]->product_name . ' ' . $orderByPrice[$i]->number . $orderByPrice[$i]->unit }}">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{ $orderByPrice[$i]->product_name . ' ' . $orderByPrice[$i]->number . $orderByPrice[$i]->unit }}</h6>
                                        <span>{{ number_format($orderByPrice[$i]->price, 0, '', ',') }} VNĐ</span>
                                    </div>
                                </a>
                                @endfor
                            </div>
                            <div class="latest-prdouct__slider__item">
                                {{-- for run from middle to bottom --}}
                                @for ($i = 3; $i < 6; $i++)
                                <a href="/shop-details/{{ $orderByPrice[$i]->id }}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ $orderByPrice[$i]->image }}" alt="{{ $orderByPrice[$i]->product_name . ' ' . $orderByPrice[$i]->number . $orderByPrice[$i]->unit }}">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{ $orderByPrice[$i]->product_name . ' ' . $orderByPrice[$i]->number . $orderByPrice[$i]->unit }}</h6>
                                        <span>{{ number_format($orderByPrice[$i]->price, 0, '', ',') }} VNĐ</span>
                                    </div>
                                </a>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Cao cấp</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                {{-- for run from top to middle --}}
                                @for ($i = 0; $i < 3; $i++)
                                <a href="/shop-details/{{ $orderByPriceDesc[$i]->id }}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ $orderByPriceDesc[$i]->image }}" alt="{{ $orderByPriceDesc[$i]->product_name . ' ' . $orderByPriceDesc[$i]->number . $orderByPriceDesc[$i]->unit }}">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{ $orderByPriceDesc[$i]->product_name . ' ' . $orderByPriceDesc[$i]->number . $orderByPriceDesc[$i]->unit }}</h6>
                                        <span>{{ number_format($orderByPriceDesc[$i]->price, 0, '', ',') }} VNĐ</span>
                                    </div>
                                </a>
                                @endfor
                            </div>
                            <div class="latest-prdouct__slider__item">
                                {{-- for run from middle to bottom --}}
                                @for ($i = 3; $i < 6; $i++)
                                <a href="/shop-details/{{ $orderByPriceDesc[$i]->id }}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ $orderByPriceDesc[$i]->image }}" alt="{{ $orderByPriceDesc[$i]->product_name . ' ' . $orderByPriceDesc[$i]->number . $orderByPriceDesc[$i]->unit }}">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{ $orderByPriceDesc[$i]->product_name . ' ' . $orderByPriceDesc[$i]->number . $orderByPriceDesc[$i]->unit }}</h6>
                                        <span>{{ number_format($orderByPriceDesc[$i]->price, 0, '', ',') }} VNĐ</span>
                                    </div>
                                </a>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Phản hồi của khách hàng</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item customer-ev">
                        <div class="testimonial-item text-center p-4 mb-5">
                            <div class="image-avata">
                                <img src="https://scontent.fsgn13-2.fna.fbcdn.net/v/t1.15752-9/285028910_1436292743478307_8302166698424927395_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=ae9488&_nc_ohc=4iwogBx-tFEAX8fRacK&_nc_ht=scontent.fsgn13-2.fna&oh=03_AdT-OvOWAapNVyzjHpJJw5hYrmuxSRmItrpaJz8CWUnYxQ&oe=64ACEB06" alt="Eat Clean Hong - Thu Nhi">
                            </div>
                            <h4 class="name" style="margin-bottom: 10px">anh Dương Cà Mau</h4>
                            <p><i>Tiktok: <b>@duongdevxin</b></i></p>
                            <p><i>Khách hàng Tiktok Shop <b>LeafyFood</b></i></p>
                            <p class="designation m-0">"Tôi luôn chọn những phẩm của LeafyFood, vì tôi biết rõ nguồn gốc xuất xứ từng loại nguyên liệu để sản xuất.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item customer-ev">
                        <div class="testimonial-item text-center p-4 mb-5">
                            <div class="image-avata">
                                <img src="https://scontent.fsgn4-1.fna.fbcdn.net/v/t1.15752-9/279617473_361483819378648_4607505756764889738_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=ae9488&_nc_ohc=iBzFC_NABhwAX-hFbeQ&_nc_ht=scontent.fsgn4-1.fna&oh=03_AdTmbHVRT8ti63NeJgvBs2wJDzxV8rCYwsgvr1oGPM1ZqA&oe=64ACED89" alt="Eat Clean Hong - Thu Nhi">
                            </div>
                            <h4 class="name" style="margin-bottom: 10px">anh Tâm Đồng Nai</h4>
                            <p><i>Email <b>dathureal@gmail.com</b></i></p>
                            <p><i>Khách hàng <b>LeafyFood.oneyearlater.me</b></i></p>
                            <p class="designation m-0">"Sức khỏe là quan trọng nhất! Với tôi mỗi ngày ăn những thực phẩm sạch để sức khoẻ ngày càng được hoàn thiện</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item customer-ev">
                        <div class="testimonial-item text-center p-4 mb-5">
                            <div class="image-avata">
                                <img src="https://scontent.fsgn3-1.fna.fbcdn.net/v/t1.15752-9/275305634_5016115058434170_4840890476425632122_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=ae9488&_nc_ohc=Cw5quFDl4poAX_SwDS0&_nc_ht=scontent.fsgn3-1.fna&oh=03_AdTHQANp59r1tl73jX5zfwP6azg9Gsc1unlkCokCqcOPSg&oe=64ACFD80" alt="Eat Clean Hong - Thu Nhi">
                            </div>
                            <h4 class="name" style="margin-bottom: 10px">chị Pha Coãng Ngãi</h4>
                            <p><i>Tiktok: <b>@pha123</b></i></p>
                            <p><i>Khách hàng Tiktok Shop <b>LeafyFood</b></i></p>
                            <p class="designation m-0">"Là một người khá kỹ tính, tôi luôn luôn lựa chọn những thực phẩm sạch nhất. Và đây là nơi tôi đặt trọng niềm tin.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Bài viết</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="/img/blog/blog-1.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="/blog-details">Cooking tips make cooking simple</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="/img/blog/blog-2.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="/blog-details">6 ways to prepare breakfast for 30</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="/img/blog/blog-3.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="/blog-details">Visit the clean farm in the US</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

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