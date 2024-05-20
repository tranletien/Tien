@extends('layouts.site')
@section('title','Contact')
@section('content')
<div class="container">
    <h1 class="text-center text-danger">Liên hệ</h1>
    <div class="row">
        <div class="col-md-2 w-50">
            <div class="mx-2 mb-4">
                <div class="card-body">
                    <div class="span3">
                        <h4 class="text-primary">TLT</h4>
                        <p>13/142 Tăng Long, Tăng Nhơn Phú A, Quận 9, Thành phố Hồ Chí Minh</p>
                        <p>Phone: 0909421421</p>
                        <p>Email: <a href="https://www.free-css.com/free-css-templates">n.tien@gmail.com</a></p>
                        <p>website: <a href="https://www.free-css.com/free-css-templates">www.n.TIEN.com</a>
                        </p>
                        <h4 class="text-primary">Liên hệ và góp ý cho shop</h4>
                        <form action="">
                            <div class="mb-3 mt-3">
                                <label for="name" class="form-label">Tên:</label>
                                <input type="text" class="form-control" id="name" placeholder="Nhập tên"
                                    name="name">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Nhập email"
                                    name="email">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="phone" class="form-label">Số điện thoại:</label>
                                <input type="text" class="form-control" id="phone" placeholder="Nhập số điện thoại"
                                    name="phone">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="title" class="form-label">Tiêu đề:</label>
                                <input type="text" class="form-control" id="title" placeholder="Nhập tiêu đề"
                                    name="title">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="content" class="form-label">Nội dung:</label>
                                <input type="text" class="form-control" id="content" placeholder="Nhập nội dung"
                                    name="content">
                            </div>
                            <button type="submit" class="btn btn-primary">Gửi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 w-50">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.689413027423!2d106.77104057405433!3d10.83506348931728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175271926ac9251%3A0x5423bb98a562dab8!2zODkvMS82NC8yNCDEkC4gU-G7kSA4LCBUxINuZyBOaMahbiBQaMO6IEIsIFF14bqtbiA5LCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1715201701416!5m2!1svi!2s"
                width="100%" height="90%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </iframe>
        </div>
    </div>
</div>
@endsection
