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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- favicon --}}
    <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chính sách giao hàng LeafyFood</title>

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
    <style>
        /* li {
            margin-left: 16px;
            font-size: 16px;
        } */
        .container ul{
            line-height: 3;
        }
    </style>
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
                        <h2>Chính sách giao hàng</h2>
                        <div class="breadcrumb__option">
                            <a href="/">Trang chủ</a>
                            <span>Chính sách giao hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <ul>
                <li>
                    <h3>Về tổng quan</h3>
                    <ul>
                        <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                            <span lang="EN-GB" dir="ltr">LeafyFood có thể trực tiếp vận chuyển và giao hàng tận tay khách hàng. Cụ thể, sản phẩm sẽ được giao cho khách hàng thông qua các nhà cung cấp dịch vụ chuyển phát.</span><o:p></o:p>
                        </li>
                        <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                            <span lang="EN-GB" dir="ltr">Một số thông tin chi tiết về thời gian cũng như phí giao hàng để khách hàng có trải nghiệm mua sắm thoải mái tại website của nhà Leafy.</span><o:p></o:p>
                        </li>
                    </ul>
                <li>
                <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                    <h3>Thời gian giao hàng</h3>
                    <ul style="list-style-type:circle;">
                        <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                            <span lang="EN-GB" dir="ltr">Đơn hàng nội và ngoại thành TP.HCM: giao hàng trong 1-3 ngày sau khi đặt hàng.</span><o:p></o:p>
                        </li>
                        <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                            <span lang="EN-GB" dir="ltr">Đơn hàng ở các tỉnh thành khác: giao hàng trong 3-7 ngày sau khi đặt hàng.</span><o:p></o:p>
                        </li>
                        <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                            <span lang="EN-GB" dir="ltr">Nếu khách hàng thanh toán bằng phương thức chuyển khoản, thời gian xử lý đơn hàng sẽ được tính từ khi nhận được thanh toán.</span><o:p></o:p>
                        </li>
                        <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                            <span lang="EN-GB" dir="ltr">Thời gian giao hàng có thể thay đổi tùy theo yêu cầu của khách hàng. Nếu khách hàng có nhu cầu giao gấp, khi đặt hàng, hãy nhập thông tin ngày nhận hàng vào mục ghi chú nhé. LeafyFood sẽ cố gắng hết sức để sắp xếp và giao hàng theo yêu cầu của khách hàng.</span><o:p></o:p>
                        </li>
                        <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                            <span lang="EN-GB" dir="ltr">LeafyFood cũng có thể chủ động thay đổi thời gian giao hàng do chịu ảnh hưởng của thiên tai hoặc các sự kiện đặc biệt khác. Trong trường hợp này, LeafyFood sẽ cập nhật tình hình đơn hàng và thời gian giao hàng mới cho khách hàng.</span><o:p></o:p>
                        </li>
                    </ul>
                </li>
                <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                    <h3>Giai đoạn giao hàng</h3>
                    <ul style="list-style-type:circle;">
                        <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                            <span lang="EN-GB" dir="ltr">Để kiểm tra thông tin hoặc tình trạng đơn hàng của khách hàng, xin vui lòng inbox fanpage hoặc gọi số hotline, cung cấp tên và số điện thoại để được kiểm tra.&nbsp;</span><o:p></o:p>
                        </li>
                        <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                            <span lang="EN-GB" dir="ltr">Đơn hàng của khách hàng sẽ được giao tối đa trong 2 lần. Trường hợp lần đầu giao hàng không thành công, sẽ có nhân viên liên hệ để sắp xếp lịch giao hàng lần 2 với khách hàng. Nếu lần giao hàng thứ 2 vẫn không thể liên lạc lại được hoặc không nhận được bất kỳ phản hồi nào, đơn hàng sẽ không còn hiệu lực. Trong trường hợp khách hàng đã thanh toán bằng phương thức chuyển khoản, LeafyFood sẽ tiến hành hoàn tiền cho đơn hàng mà khách hàng đã thanh toán (theo chính sách đổi trả và hoàn tiền của LeafyFood).</span><o:p></o:p>
                        </li>
                        <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                            <span lang="EN-GB" dir="ltr">Khi hàng được giao đến, khách hàng vui lòng ký xác nhận với nhân viên giao hàng và kiểm tra lại số lượng cũng như loại hàng hóa được giao có chính xác không. Xin khách hàng vui lòng giữ lại biên lai vận chuyển và hóa đơn mua hàng để đối chiếu kiểm tra khi cần thiết.</span><o:p></o:p>
                        </li>
                    </ul>
                </li>
                <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                    <h3>Phí giao hàng</h3>
                    <span lang="EN-GB" dir="ltr">Phí ship: Nội thành (20k); Ngoại thành (30k); Trên 300k freeship</span><o:p></o:p>
                </li>
                <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                    <span lang="EN-GB" dir="ltr">Đối với sàn thương mại điện tử shopee LeafyFood chọn hình thức giao hàng nhanh và giao hàng tiết kiệm</span><o:p></o:p>
                </li>
                <li>
                    <span lang="EN-GB" dir="ltr">J&amp;T vì J&amp;T đang là đơn vị vận chuyển độc quyền duy nhất trên Tiktok Shop</span><o:p></o:p>
                </li>
            </ul>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

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

<script>
    function deleteCart(id, product_id) {
        $.ajax({
            url: '/cart/delete',
            type: 'GET',
            data: {
                id: id,
                product_id: product_id,
                _token: '{{ csrf_token() }}'
            },
            success: function(data) {
                location.reload();
            }
        });
    }
</script>
</html>