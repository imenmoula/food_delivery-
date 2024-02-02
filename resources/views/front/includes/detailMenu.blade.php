@extends('front/home')
@section('container')

<div class="header-bg header-bg-page">
    <div class="header-padding position-relative">
    <div class="header-page-shape">
    <div class="header-page-shape-item">
    <img src="{{ asset('user/assets/images/header-shape-1.png')}}" alt="shape">
    </div>
    <div class="header-page-shape-item">
    <img src="{{ asset('user/assets/images/header-shape-2.png') }}" alt="shape">
    </div>
    <div class="header-page-shape-item">
    <img src="{{ asset('user/assets/images/header-shape-3.png') }}" alt="shape">
    </div>
    <div class="header-page-shape-item">
    <img src="{{ asset('user/assets/images/header-shape-4.png') }}" alt="shape">
    </div>
    <div class="header-page-shape-item">
    
    </div>
    <div class="header-page-shape-item">
    <img src="{{ asset('user/assets/images/header-shape-5.png') }}" alt="shape">
    </div>
    <div class="header-page-shape-item">
    
    </div>
    </div>
    <div class="container">
    <div class="header-page-content">
    <h1>Menu Details</h1>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $menu->nom_plat }} Details</li>
    </ol>
    </nav>
    </div>
    </div>
    </div>
    </div>


    <div class="product-details-section pt-100 pb-70 bg-black">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-5 pb-30">
                    
                    <div class="product-details-item">
                        <div class="product-details-slider">
                            <div class="product-details-for popup-gallery">
                                <div class="product-for-item">
                                    <a href="{{ asset('assets/uploads/menus/' . $menu->image) }}"><img src="{{ asset('assets/uploads/menus/' . $menu->image)}}"
                                            alt="product"></a>
                                </div>
                                <div class="product-for-item">
                                    <a href="{{ asset('assets/uploads/menus/' . $menu->image) }}"><img src="{{ asset('assets/uploads/menus/' . $menu->image) }}"
                                            alt="product"></a>
                                </div> 
                                <div class="product-for-item">
                                    <a href="{{ asset('assets/uploads/menus/' . $menu->image) }}"><img src="{{ asset('assets/uploads/menus/' . $menu->image) }}"
                                            alt="product"></a>
                                </div>
                            </div>
                            <div class="product-details-nav">
                                <div class="product-nav-item">
                                    <div class="product-nav-item-inner">
                                        <img src="{{ asset('assets/uploads/menus/' . $menu->image) }}"   alt="product">
                                    </div>
                                </div>
                                <div class="product-nav-item">
                                    <div class="product-nav-item-inner">
                                        <img src="{{ asset('assets/uploads/menus/' . $menu->image) }}"   alt="product">
                                    </div>
                                </div>
                                <div class="product-nav-item">
                                    <div class="product-nav-item-inner">
                                        <img src="{{ asset('assets/uploads/menus/' . $menu->image) }} " alt="product">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 pb-30">
                    <div class="product-details-item">
                        <div class="product-details-caption">
                            <div class="product-status product-status-danger mb-20">
                                
                                @if($menu->disponible == 1)
                                <p style="color: yellow;">Disponible</p>
                            @else
                                <p style="color: red;">Non Disponible</p>
                            @endif
                            
                                </div>
                                
                            </div>
                        
                               

                            <h3 class="mb-20 color-white">{{ ($menu)->nom_plat }}</h3>
                            <h4 class="mb-20 product-id">ID: {{ ($menu)->id }}</h4>
                            <div class="review-star mb-20">
                                <ul>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-2"></i></li>
                                </ul>
                                
                            </div>
                            <div class="product-details-price mb-20">
                                <h4>$ {{ $menu->prix }}Dt</h4>
                            </div>
                            <div class="product-details-para mb-20">
                                <p>{{$menu->description}}</p>
                            </div>
                            <div class="product-action-info mb-20">
                                <h4>Sizes:</h4>
                                <ul class="product-size-list">
                                    <li class="active">Small</li>
                                    <li>Medium</li>
                                    <li>Large</li>
                                </ul>
                            </div>
                            <div class="product-action-info mb-20">
                                <div class="d-flex flex-wrap align-items-center
                                            product-quantity">
                                    <button class="btn btn-icon product-quantity-item">
                                        Add To Cart
                                        <i class="flaticon-shopping-cart-black-shape"></i>
                                    </button>
                                    <div class="cart-quantity product-quantity-item">
                                        <button class="qu-btn dec">-</button>
                                        <input type="text" class="qu-input" value="{{ $menu->qty }}">
                                        <button class="qu-btn inc">+</button>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>


@endsection
