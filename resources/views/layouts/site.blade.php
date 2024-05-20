<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ec3be08b3f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    @yield('header')
</head>

<body>
    <header class="border-bottom" style="background-color: white;">
        <div class="border-bottom">
            <div class="container " style="padding-top: 20px">
                <div class="row ">
                    <div class="col-md-4 col-sm-12">
                        <a class="navbar-brand" href="#">
                            <img style="width: 150px;" src="./assets/image/logo-am-ban.jpg" alt="Logo">
                        </a>

                    </div>
                    <div class="col-md-5 d-flex">
                        <input style="height: 40px; border-color: #ff6a00" type="text" class="form-control"
                            placeholder="Tìm kiếm sản phẩm" />
                        <div class="input-group-append">
                            <button class="btn" style="height: 40px; background-color: #ff6a00" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-dark col-md-3">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="#"><i class="fa-solid fa-user"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="#"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </li>
                            </ul>
                        </div>

                    </nav>
                </div>
            </div>

        </div>
        <nav class=" container navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-dark me-3" href="trang-chu">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark me-3" href="san-pham">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark me-3" href="bai-viet">Bài viết</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="lien-he">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>


    <main>
        @yield('content')
    </main>
    <footer class="text-white">
        <div class="container">
            <div class="row pt-3">
                <div class=" col-sm-3">
                    <div className="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h5 className="footer text-center">TTL</h5>
                        <h6 className='text-danger'>
                            Điện thoại, laptop, phụ kiện...
                        </h6>
                        <p>Số điện thoại: 0836706514</p>
                        <p>Địa chỉ: 13/142 Tăng Long, Tăng Nhơn Phú A, Quận 9, Thành phố Hồ Chí Minh</p>
                        <p>Email: n.truong@gmail.com</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div className="col-md-5 col-lg-5 col-xl-3 mx-auto mb-2 text-white">
                        <h5 className="text-center">Home</h5>
                        <p><a href="" className="text-reset ">Trang chủ</a></p>
                        <p><a href="" className="text-reset ">Sản phẩm</a></p>
                        <p><a href="" className="text-reset ">Danh mục sản phẩm</a></p>
                        <p><a href="" className="text-reset ">Thương hiệu sản phẩm</a></p>
                        <p><a href="" className="text-reset ">Thông tin liên hệ</a></p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div className="col-md-3 col-lg-3 col-xl-3mx-auto mb-3 ">
                        <h5 className="text-uppercase fw-bold mb-2">
                            Chính sách cửa hàng
                        </h5>
                        <p><a href="" className="text-reset ">Giới thiệu</a></p>
                        <p><a href="" className="text-reset ">Chính sách mua hàng</a></p>
                        <p><a href="" className="text-reset ">Chính sách bảo hành</a></p>
                        <p><a href="" className="text-reset ">Chính sách vận chuyển</a>
                        </p>
                        <p><a href="" className="text-reset ">Điều khoản đổi trả</a></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div className="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <div id="text-4" className="widget widget_text">
                            <h5 className="h-widget fw-bold mb-4">Thời gian</h5>
                            <p>Thứ 2 - Thứ 6: 8:00 – 16:00 </p>
                            <p>Thứ 7: 8:00 – 18:00</p>
                            <p>Chủ nhật: 7:00 - 21:00</p>
                            <i class="fa-solid fa-envelope me-2"></i>
                            <i class="fa-brands fa-facebook me-2"></i>
                            <i class="fa-brands fa-instagram me-2"></i>
                            <i class="fa-solid fa-phone"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <hr>
        <h6 class="text-center"> 2121110330</h6>
        <br>
    </footer>

    @yield('footer')
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>
