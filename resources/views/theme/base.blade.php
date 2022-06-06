<!doctype html>
<html lang="en"  dir="ltr" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('title')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div id="header">
        <div class="container">
            <div class="row ">
                <div class="col-4 logo">
                    <img src="{{ asset('storage/image/logo.png') }}" alt="logo" >
                </div>
                <div class="col-6 menu">
                    <ul class="navbar navbar-menu">
                        <li class="nav-item"><a href="">Hàng Mới</a></li>
                        <li class="nav-item dropdown"><a href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Áo Nam</a>
                            <ul class="dropdown-menu menu-fix" aria-labelledby="navbarDropdown">
                                <li class="dropdown-item "><a href="" class="text-dark">Áo Sơ Mi</a></li>
                                <li class="dropdown-item "><a href="" class="text-dark">Áo Khoác</a></li>
                                <li class="dropdown-item "><a href="" class="text-dark">Áo Polo</a></li>
                                <li class="dropdown-item "><a href="" class="text-dark">Áo Thun</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Quần Nam</a>
                            <ul class="dropdown-menu menu-fix" aria-labelledby="navbarDropdown">
                                <li class="dropdown-item "><a href="" class="text-dark">Áo Sơ Mi</a></li>
                                <li class="dropdown-item "><a href="" class="text-dark">Áo Khoác</a></li>
                                <li class="dropdown-item "><a href="" class="text-dark">Áo Polo</a></li>
                                <li class="dropdown-item "><a href="" class="text-dark">Áo Thun</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Phụ Kiện </a>
                            <ul class="dropdown-menu menu-fix" aria-labelledby="navbarDropdown">
                                <li class="dropdown-item "><a href="" class="text-dark">Áo Sơ Mi</a></li>
                                <li class="dropdown-item "><a href="" class="text-dark">Áo Khoác</a></li>
                                <li class="dropdown-item "><a href="" class="text-dark">Áo Polo</a></li>
                                <li class="dropdown-item "><a href="" class="text-dark">Áo Thun</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Giày dép</a>
                            <ul class="dropdown-menu menu-fix" aria-labelledby="navbarDropdown">
                                <li class="dropdown-item "><a href="" class="text-dark">Áo Sơ Mi</a></li>
                                <li class="dropdown-item "><a href="" class="text-dark">Áo Khoác</a></li>
                                <li class="dropdown-item "><a href="" class="text-dark">Áo Polo</a></li>
                                <li class="dropdown-item "><a href="" class="text-dark">Áo Thun</a></li>
                            </ul>
                        </li>
                        <li class="navbar-item"><a href="">Khuyến MÃi</a></li>
                    </ul>
                </div>
                <div class="col-2 nav-icon">
                    <a class="btn cart"><i class="fas fa-shopping-cart"></i>
                        <div class="cart-all">Giỏ Hàng</div>
                    </a>
                    <a class="btn search"><i class="fas fa-search"></i>
                        <form id="searchbox" class="search-form" action="" method="post">
                            <input class="search-input form-control" type="text" id="search_query_top" name="text" placeholder="Tìm kiếm" value="">
                        </form>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-fix">
    </div>
    @yield('content')
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-3 footer-item">
                    <img src="{{ asset('storage/image/logo-footer.png') }}" alt="News Fashion" class="footer-logo">
                    <ul class="footer-list">
                        <li><a href=""></a>Giới Thiệu</li>
                        <li><a href=""></a>Liên Hệ </li>
                        <li><a href=""></a>Tuyển Dụng</li>
                        <li><a href=""></a>Tin tức</li>
                    </ul>
                    <div class="footer-text"><i class="fas fa-envelope fa-lg" ></i>Email: info@4menshop.com</div>
                    <div class="footer-text"><i class="fas fa-phone-alt fa-lg"></i>Hotline: 0868.444.644</div>
                </div>
                <div class="col-3 footer-item">
                    <h5>HỖ TRỢ KHÁCH HÀNG</h5>
                    <ul class="footer-list">
                        <li><a href=""></a>Hướng dẫn đặt hàng</li>
                        <li><a href=""></a>Hướng dẫn chọn size </li>
                        <li><a href=""></a>Câu hỏi thường gặp</li>
                        <li><a href=""></a>Chính sách khách VIP</li>
                        <li><a href=""></a>Thanh toán - Giao hàng</li>
                        <li><a href=""></a>Chính sách đổi hàng </li>
                        <li><a href=""></a>Chính sách bảo mật</li>
                        <li><a href=""></a>Chính sách cookie</li>
                    </ul>
                </div>
                <div class="col-3 footer-item">
                    <h5>HỆ THỐNG CỬA HÀNG</h5>
                </div>
                <div class="col-3 footer-item">
                    <h5>KẾT NỐI VỚI 4MEN</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-3 footer-email">
                    <h5>Đăng ký nhận email khuyến mãi</h5>
                    <form action="" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Email của bạn" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary " type="submit" id="button-addon2">Đăng kí</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
