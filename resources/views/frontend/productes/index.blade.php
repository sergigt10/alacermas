@extends('frontend.layouts.app')

@section('content')

    <section class="banner-style-one">
        <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/historia-alacermas.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="banner-details">
                    <h2>Productos</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="gap shop-style-one addition">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-filter">
                        <p>145 Products</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul>
                    @foreach ($categories as $categoria)
                        <li>{{ $categoria->nom_cat }}</li>
                    @endforeach
                    </ul>
                </div>
                <div class="col-lg-9">
                    <div class="container">
                        <div class="row p-slider align-items-center justify-content-between grid">
                            <div class="col-lg-4" >
                                <div class="product">
                                    <div class="main-data">
                                        <div class="btn-hover">
                                            <figure>
                                                <img src="https://via.placeholder.com/355x290" alt="Product Image 1">
                                            </figure>
                                            <a href="cart.html" class="theme-btn">Add to Cart <i class="fa-solid fa-bag-shopping"></i></a>
                                        </div>
                                        <div class="data">
                                            <div class="ratings">
                                                <i class="fa-solid fa-star"></i>
                                                <span>5.0</span>
                                            </div>
                                            <h3><a href="product-detail.html">Fosroc Galvafroid – 400ml</a></h3>
                                            <div class="price-range">
                                                <span>$18.60</span> - <span>$58.50</span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" class="theme-btn">Add to Cart <i class="fa-solid fa-bag-shopping"></i></a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="builty-pagination">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="JavaScript:void(0)"><i class='fa-solid fa-arrow-left-long'></i></a></li>
                            <li class="page-item"><a class="page-link" href="JavaScript:void(0)">01</a></li>
                            <li class="page-item"><a class="page-link" href="JavaScript:void(0)">02</a></li>
                            <li class="page-item"><a class="page-link" href="JavaScript:void(0)">03</a></li>
                            <li class="page-item space"><a class="page-link" href="JavaScript:void(0)">..........</a></li>
                            <li class="page-item"><a class="page-link" href="JavaScript:void(0)">08</a></li>
                            <li class="page-item"><a class="page-link" href="JavaScript:void(0)"><i class='fa-solid fa-arrow-right-long'></i> </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection