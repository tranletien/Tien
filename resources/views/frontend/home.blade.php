@extends('layouts.site')
@section('title', 'Product')
@section('content')

    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                {{-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button> --}}
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/image/Screenshot 2024-05-20 194534.png" class="d-block h-100 w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./assets/image/Screenshot 2024-05-20 194632.png" class="d-block h-100 w-100" alt="...">
                </div>
                {{-- <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div> --}}
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <h2 class="text-center text-danger">Sản phẩm</h2>
        <div class="row row-cols-lg-4 g-2 g-lg-3">
            <div class="col">
                <div class="card pt-2">
                    <div class="text-center">
                        <img src="./assets/image/ahihi2.png" class="card-img-top" style="width: 150px;" alt="product">

                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Thức ăn cho Cún</h5>
                            <h4 class="price text-danger">29.950.000đ</h4>
                            <p class="card-text">Thức ăn cho Cún</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card pt-2">
                    <div class="text-center">
                        <img src="./assets/image/ahihi2.png" class="card-img-top" style="width: 150px;" alt="product">

                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Thức ăn cho Cún</h5>
                            <h4 class="price text-danger">29.950.000đ</h4>
                            <p class="card-text">Thức ăn cho Cún</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card pt-2">
                    <div class="text-center">
                        <img src="./assets/image/ahihi2.png" class="card-img-top" style="width: 150px;" alt="product">

                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Thức ăn cho Cún</h5>
                            <h4 class="price text-danger">29.950.000đ</h4>
                            <p class="card-text">Thức ăn cho Cún</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card pt-2">
                    <div class="text-center">
                        <img src="./assets/image/ahihi2.png" class="card-img-top" style="width: 150px;" alt="product">

                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Thức ăn cho Cún</h5>
                            <h4 class="price text-danger">29.950.000đ</h4>
                            <p class="card-text">Thức ăn cho Cún</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card pt-2">
                    <div class="text-center">
                        <img src="./assets/image/ahihi2.png" class="card-img-top" style="width: 150px;" alt="product">

                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Thức ăn cho Cún</h5>
                            <h4 class="price text-danger">29.950.000đ</h4>
                            <p class="card-text">Thức ăn cho Cún</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card pt-2">
                    <div class="text-center">
                        <img src="./assets/image/ahihi2.png" class="card-img-top" style="width: 150px;" alt="product">

                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Thức ăn cho Cún</h5>
                            <h4 class="price text-danger">29.950.000đ</h4>
                            <p class="card-text">Thức ăn cho Cún</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card pt-2">
                    <div class="text-center">
                        <img src="./assets/image/ahihi2.png" class="card-img-top" style="width: 150px;" alt="product">

                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Thức ăn cho Cún</h5>
                            <h4 class="price text-danger">29.950.000đ</h4>
                            <p class="card-text">Thức ăn cho Cún</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card pt-2">
                    <div class="text-center">
                        <img src="./assets/image/ahihi2.png" class="card-img-top" style="width: 150px;" alt="product">

                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Thức ăn cho Cún</h5>
                            <h4 class="price text-danger">29.950.000đ</h4>
                            <p class="card-text">Thức ăn cho Cún</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
            <button class="btn btn-success" type="button">Xem thêm <i class="fa-solid fa-arrow-right"></i></button>
        </div>

        <h2 class="text-center text-danger ">Sản phẩm mới</h2>
        <div class="row row-cols-lg-4 g-2 g-lg-3">
            <div class="col">
                <div class="card pt-2">
                    <div class="text-center">
                        <img src="./assets/image/Screenshot 2024-05-12 175814.png" class="card-img-top"
                            style="width: 150px;" alt="product">

                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Thức ăn cho Cún</h5>
                            <h4 class="price text-danger">29.950.000đ</h4>
                            <p class="card-text">Thức ăn cho Cún</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card pt-2">
                    <div class="text-center">
                        <img src="./assets/image/Screenshot 2024-05-12 175814.png" class="card-img-top"
                            style="width: 150px;" alt="product">

                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Thức ăn cho Cún</h5>
                            <h4 class="price text-danger">29.950.000đ</h4>
                            <p class="card-text">Thức ăn cho Cún</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card pt-2">
                    <div class="text-center">
                        <img src="./assets/image/Screenshot 2024-05-12 175814.png" class="card-img-top"
                            style="width: 150px;" alt="product">

                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Thức ăn cho Cún</h5>
                            <h4 class="price text-danger">29.950.000đ</h4>
                            <p class="card-text">Thức ăn cho Cún</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card pt-2">
                <div class="text-center">
                    <img src="./assets/image/Screenshot 2024-05-12 175814.png" class="card-img-top" style="width: 150px;"
                        alt="product">

                </div>
                <div class="card-body">
                    <div class="rating">
                        <div class="stars"> <span class="fa fa-star checked"></span> <span
                                class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                class="fa fa-star"></span>
                        </div>
                        <h5 class="card-title">Thức ăn cho Cún</h5>
                        <h4 class="price text-danger">29.950.000đ</h4>
                        <p class="card-text">Thức ăn cho Cún</p>
                        <div class="row">
                            <div class="col-6">
                                <a href="#" class="btn btn-danger d-md-block"><i
                                        class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                            <div class="col-6">
                                <a href="product_detail.html" class="btn btn-success d-md-block"><i
                                        class="fa-solid fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>

@endsection
