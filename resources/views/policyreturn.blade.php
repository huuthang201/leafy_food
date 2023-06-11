<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chính sách hoàn trả LeafyFood</title>

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
                        <h2>Chính sách hoàn trả</h2>
                        <div class="breadcrumb__option">
                            <a href="/">Trang chủ</a>
                            <span>Chính sách hoàn trả</span>
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
                <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                    <h3>Phương thức</h3>
                    <ul style="list-style-type:circle;">
                        <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                            <span lang="EN-GB" dir="ltr">Để đổi trả sản phẩm, khách hàng truy cập vào kênh chăm sóc khách hàng chính là Fanpage của LeafyFood: </span><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/leafyfoodeatclean"><span lang="EN-GB" dir="ltr">https://www.facebook.com/leafyfoodeatclean</span></a><o:p></o:p>
                        </li>
                        <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                            <span lang="EN-GB" dir="ltr">Thời hạn đổi trả sản phẩm phải trong vòng 7 ngày từ khi nhận hàng. Sau khi nhận được thông tin, bộ phận chăm sóc khách hàng của LeafyFood sẽ hướng dẫn thu hồi sản phẩm, hoàn tiền hoặc đổi sản phẩm mới. Nếu quá 3 ngày, LeafyFood xin từ chối hỗ trợ giải quyết vì mặc định khách hàng đã hài lòng với sản phẩm được giao.</span><o:p></o:p>
                        </li>
                    </ul>
                </li>
                <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                    <h3>Các trường hợp đổi trả</h3>
                    <ul style="list-style-type:circle;">
                        <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                            <span lang="EN-GB" dir="ltr">Sản phẩm giao sai</span><o:p></o:p>
                        </li>
                        <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                            <span lang="EN-GB" dir="ltr">Sản phẩm không đảm bảo chất lượng đã cam kết</span><o:p></o:p>
                        </li>
                        <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                            <span lang="EN-GB" dir="ltr">Sản phẩm hư hỏng do lỗi của nhà sản xuất hoặc bộ phận giao hàng</span><o:p></o:p>
                        </li>
                        <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                            <span lang="EN-GB" dir="ltr">Sản phẩm có dấu hiệu đã qua sử dụng hoặc hết hạn sử dụng tại thời điểm nhận hàng</span><o:p></o:p>
                        </li>
                        <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                            <span lang="EN-GB" dir="ltr">Lưu ý: Sản phẩm đã mua sẽ được đổi sang sản phẩm cùng loại, hoặc sản phẩm khác.</span><o:p></o:p>
                        </li>
                    </ul>
                </li>
                <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                    <h3>Điều kiện hoàn tiền</h3>
                    <ul style="list-style-type:circle;">
                        <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                            <span lang="EN-GB" dir="ltr">Trong trường hợp không thể đổi trả sản phẩm, LeafyFood sẽ tiến hành hoàn tiền cho khách hàng.</span><o:p></o:p>
                        </li>
                        <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                            <span lang="EN-GB" dir="ltr">Trường hợp được xem là <strong>“không thể đổi trả sản phẩm”</strong> bao gồm:</span><o:p></o:p>
                            <ul style="list-style-type:square;">
                                <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                                    <span lang="EN-GB" dir="ltr">1. Sản phẩm giao sai và không thể tiến hành đổi trả: trong quá trình đổi trả, nếu sản phẩm mà bạn thương mong muốn đã hết hàng, đồng thời, không có hoặc bạn thương không đồng ý lấy sản phẩm khác có giá trị tương đương, LeafyFood sẽ tiến hành hoàn tiền.</span><o:p></o:p>
                                </li>
                                <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                                    <span lang="EN-GB" dir="ltr">2. Khách hàng đã trả tiền nhưng không thể giao hàng: trong trường hợp đã trả tiền thông qua hình thức chuyển khoản, hoặc các hình thức tương tự, nhưng sản phẩm không thể được giao vì vấn đề ngoài ý muốn, LeafyFood sẽ tiến hành hoàn tiền nếu không thể xử lý vấn đề trong vòng 7 ngày từ ngày nhận đơn hàng. Nếu quá trình giao hàng bị gián đoạn do nguyên nhân đến từ khách hàng, LeafyFood sẽ tiến hành hoàn tiền sau 2 lần giao hàng thất bại</span><o:p></o:p>
                                </li>
                                <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                                    <span lang="EN-GB" dir="ltr">3. Không nhận được xác nhận đổi hàng từ khách hàng sau hai lần liên hệ: Sau khi nhận được hàng trả lại, bộ phận CSKH sẽ liên hệ lần 1 để xác nhận nhu cầu đổi hàng. Nếu không liên hệ được, bộ phận sẽ liên hệ lần 2 sau ba ngày. Nếu không thể nhận được xác nhận đổi hàng sau hai lần liên hệ, LeafyFood sẽ tiến hành hoàn tiền.</span><o:p></o:p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                    <h3>Lưu ý</h3>
                    <ul style="list-style-type:circle;">
                        <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                            <span lang="EN-GB" dir="ltr">LeafyFood luôn mong muốn có thể mang những sản phẩm nhà Leafy đến với bạn thương. Do đó, LeafyFood sẽ cố gắng hỗ trợ bạn thương trong quá trình đổi trả sản phẩm trước khi đưa ra quyết định hoàn tiền.</span><o:p></o:p>
                        </li>
                        <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                            <span lang="EN-GB" dir="ltr">Trừ khi được đề cập trong Chính sách Đổi trả và Hoàn tiền này, các trường hợp trả hàng do&nbsp;</span><span style="mso-spacerun:yes;" lang="EN-GB" dir="ltr"> </span><span lang="EN-GB" dir="ltr">khách hàng thay đổi ý định mua hàng sẽ không được giải quyết.</span><o:p></o:p>
                        </li>
                        <li class="Bnggch" style="mso-list:l0 level1 lfo1;">
                            <span lang="EN-GB" dir="ltr">Trong trường hợp khách hàng trả phí thu hộ (COD), vui cung cấp thông tin tài khoản ngân hàng/ví điện tử cho bộ phận CSKH để nhận hoàn trả.</span><o:p></o:p><o:p></o:p>
                        </li>
                    </ul>
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