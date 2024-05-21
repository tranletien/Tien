@extends('layouts.site')
@section('title', 'Product')
@section('content')
    <x-slide />
    {{-- <x-product-new> --}}
        <h2 class="text-center text-danger ">Sản phẩm mới</h2>
        <div class="row row-cols-lg-4 g-2 g-lg-3">
            <div class="col">
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
