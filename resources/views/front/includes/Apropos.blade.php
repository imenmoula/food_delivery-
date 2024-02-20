@extends('front/home')
@section('container')


<div class="header-bg header-bg-page">
    <div class="header-padding position-relative">
        <div class="header-page-shape">
            <div class="header-page-shape-item">
                <img src="{{ asset('user/assets/images/header-shape-1.png') }}" alt="shape">
            </div>
            <div class="header-page-shape-item">
                <img src="{{ asset('user/assets/images/header-shape-2.png') }}" alt="shape">
            </div>
            <div class="header-page-shape-item">
                <img src="{{ asset('user/assets/images/header-shape-3.png') }}" alt="shape">
            </div>
            <div class="header-page-shape-item">
                <img src="{{ asset('user/assets/images/header-shape-1.png') }}" alt="shape">
            </div>
            <div class="header-page-shape-item">
                <img src="{{ asset('user/assets/images/header-shape-4.png') }}" alt="shape">
            </div>
            <div class="header-page-shape-item">
                <img src="{{ asset('user/assets/images/header-shape-1.png') }}" alt="shape">
            </div>
            <div class="header-page-shape-item">
                <img src="{{ asset('user/assets/images/header-shape-3.png') }}" alt="shape">
            </div>
        </div>
        <div class="container">
            <div class="header-page-content">
                <h1>A propos</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Acceuil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">A propos</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
{{-- ***************************************************************************************** --}}
<section class="welcome-section bg-overlay-1 pt-100 pb-70 bg-black">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-5 col-lg-5 pb-30">
                <div class="section-title section-title-left text-center text-md-start m-0">
                    <small>Bienvenue chez Moula Food</small>
                    <h2 class="color-white">Nous servons la meilleure cuisine chez Moula Food</h2>
                    <p>Chez Moula Food, nous nous distinguons par notre réputation inégalée dans le domaine professionnel. 
                        Notre établissement propose une large sélection des plats tunisiens les plus raffinés,
                         ainsi qu'une variété d'options de fast-food et de cuisine saine. La satisfaction de nos clients demeure notre priorité absolue,
                         soutenue par un service attentionné et la qualité exceptionnelle de nos produits alimentaires.</p>
                    <a href="{{ route('front.includes.Apropos') }}" class="btn btn-icon">
                        Plus d'informations sur nous
                        <i class="flaticon-right-arrow-sketch-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-7">
                <div class="about-image-grid">
                    <div class="about-image-grid-item">
                        <div class="about-image-grid-inner mb-30">
                            <img src="{{ asset('image/2.jfif') }}" alt="welcome">
                        </div>
                        <div class="about-image-grid-inner mb-30">
                            <img src="{{ asset('user/assets/images/welcome-image-2.jpg') }}" alt="welcome">
                        </div>
                    </div>
                    <div class="about-image-grid-item">
                        <div class="about-image-grid-inner fluid-height">
                            <img src="{{ asset('user/assets/images/welcome-image-3.jpg') }}" alt="welcome">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- ********************************************************** --}}
<section class="service-section p-tb-100 bg-black">
    <div class="container-fluid">
        <div class="bg-main bg-overlay-transparent contain-box">
            <div class="container">
                <div class="section-title">
                    <h2 class="color-white">Nous proposons 3 types de services</h2>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                        <div class="service-item">
                            <div class="service-image">
                                <img class="service-img" src="{{ asset('user/assets/images/service-1.jpg') }}" alt="service">
                            </div>
                            <div class="service-content">
                                <h3>1. Service à table chez Moula Food</h3>
                                <p>Choisissez vos meilleurs combos parmi des milliers d'articles excitants.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                        <div class="service-item">
                            <div class="service-image">
                                <img class="service-img" src="{{ asset('image/1.jpg') }}" alt="service">
                            </div>
                            <div class="service-content">
                                <h3>2. Reservation en ligne chez Moula Food</h3>
                                <p>Faire une demande de réservation en ligne chez Moula Food.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 pb-30 offset-md-3 offset-lg-0">
                        <div class="service-item">
                            <div class="service-image">
                                <img class="service-img" src="{{ asset('image/delivry.jpg') }}" alt="service">
                            </div>
                            <div class="service-content">
                                <h3>3. Livraison à domicile chez Moula Food</h3>
                                <p>Choisissez vos meilleurs combos parmi des milliers d'articles excitants.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ************************************************************************************ --}}
<section class="team-section p-tb-100 bg-black">
    <div class="container">
        <div class="section-title">
            <small>Les chefs chez Moula Food </small>
            <h2 class="color-white">Qui a préparé ce délicieux repas </h2>
        </div>
        <div class="team-carousel owl-carousel owl-theme">
            <div class="item">
                <div class="team-item team-item-light">
                    <div class="team-thumb">
                        <img src="{{ asset('user/assets/images/team-1.png') }}" alt="client">
                        <div class="team-overlay">
                            <ul class="social-list social-list-white">
                                <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3 class="carousel-name"><a href="#">Mohamed</a></h3>
                        <h4 class="carousel-designation">Spécialistes en pâtisserie </h4>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="team-item team-item-light">
                    <div class="team-thumb">
                        <img src="{{ asset('user/assets/images/team-2.png') }}" alt="client">
                        <div class="team-overlay">
                            <ul class="social-list social-list-white">
                                <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3 class="carousel-name"><a href="#">Julia</a></h3>
                        <h4 class="carousel-designation">Spécialistes des boissons et des cocktails </h4>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="team-item team-item-light">
                    <div class="team-thumb">
                        <img src="{{ asset('user/assets/images/team-3.png') }}" alt="client">
                        <div class="team-overlay">
                            <ul class="social-list social-list-white">
                                <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3 class="carousel-name"><a href="#">Fahd</a></h3>
                        <h4 class="carousel-designation">Spécialistes en Fast Food</h4>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="team-item team-item-light">
                    <div class="team-thumb">
                        <img src="{{ asset('user/assets/images/team-4.png') }}"alt="client">
                        <div class="team-overlay">
                            <ul class="social-list social-list-white">
                                <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3 class="carousel-name"><a href="#">Baya </a></h3>
                        <h4 class="carousel-designation">Spécialistes des plat tunisiens</h4>
                    </div>
                </div>
            </div>
            
            <div class="item">
                <div class="team-item team-item-light">
                    <div class="team-thumb">
                        <img src="{{ asset('user/assets/images/team-2.png') }}" alt="client">
                        <div class="team-overlay">
                            <ul class="social-list social-list-white">
                                <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3 class="carousel-name"><a href="#">Julia </a></h3>
                        <h4 class="carousel-designation">Spécialistes des healthy Food</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- ***************************************************************************************************** --}}
<section class="gallery-section p-tb-100 bg-black">
    <div class="container position-relative">
        <div class="section-title">
            <small>Galerie chez Moula Food</small>
            <h2 class="color-white">Découvrez nos moments de bonheur</h2>
        </div>
        <div class="gallery-grid">
            <div class="gallery-grid-item">
                <a href="{{ asset('user/assets/images/gallery-lg-1.jpg') }}" title="Gallery 1"><img src="{{ asset('user/assets/images/gallery-lg-1.jpg') }}"
                        alt="gallery"></a>
            </div>
            <div class="gallery-grid-item">
                <a href="{{ asset('user/assets/images/gallery-lg-2.jpg') }}" title="Gallery 2"><img src="{{ asset('user/assets/images/gallery-lg-2.jpg') }}"
                        alt="gallery"></a>
            </div>
            <div class="gallery-grid-item">
                <a href="{{ asset('user/assets/images/gallery-lg-3.jpg') }}" title="Gallery 3"><img src="{{ asset('user/assets/images/gallery-lg-3.jpg') }}"
                        alt="gallery"></a>
            </div>
            <div class="gallery-grid-item">
                <a href="{{ asset('user/assets/images/gallery-lg-4.jpg') }}" title="Gallery 4"><img src="{{ asset('user/assets/images/gallery-lg-4.jpg') }}"
                        alt="gallery"></a>
            </div>
            <div class="gallery-grid-item">
                <a href="{{ asset('user/assets/images/gallery-lg-5.jpg') }}" title="Gallery 5"><img src="{{ asset('user/assets/images/gallery-lg-5.jpg') }}"
                        alt="gallery"></a>
            </div>
        </div>
        <div class="bg-shape">
            <div class="bg-shape-item">
                <img src="{{ asset('user/assets/images/shape-1.png') }}" alt="shape">
            </div>
            <div class="bg-shape-item">
                <img src="{{ asset('user/assets/images//shape-3.png') }}" alt="shape">
            </div>
            <div class="bg-shape-item">
                <img src="{{ asset('user/assets/images/shape-2.png') }}" alt="shape">
            </div>
        </div>
    </div>
</section>

@endsection