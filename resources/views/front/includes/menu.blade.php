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
                <img src="{{ asset('user/ssets/images/header-shape-3.png') }}" alt="shape">
            </div>
        </div>
        <div class="container">
            <div class="header-page-content">
                <h1>Notre Menu</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Aceuil</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Notre menu</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


<section class="menu-section bg-black p-tb-100">
    <div class="container position-relative">
        <div class="section-title">
            <small>Menu</small>
            <h2 class="color-white">Il faut choisir parmi les meilleurs</h2>
        </div>

        <div class="menu-main-carousel-area">
            <div class="menu-main-thumb-nav">
                @foreach($categories as $c)
                    <div class="menu-main-thumb-item menu-main-thumb-black">
                        <div class="menu-main-thumb-inner">
                            <img src="{{ asset('assets/uploads/categories/' . $c->image) }}"
                                alt="menu">
                            <p>{{ $c->name }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="menu-main-details-for">
            @foreach($categories as $c)
                <div class="menu-main-details-item">
                    <div class="receipe-grid receipe-grid-three">
                        @foreach($c->menu as $m)
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="{{ asset('assets/uploads/menus/' . $m->image) }}"
                                            alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a
                                                    href="{{ route('front.includes.detailMenu', $m->id) }}">{{ $m->nom_plat }}</a>
                                            </h3>
                                            <h4>{{ $m->prix }}Dt</h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="{{ route('cart.store', $m->id) }}">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>



    </div>
</section>

{{-- ******************************************************************************** --}}
<section class="step-section p-tb-100 bg-black">
    <div class="container">
        <div class="section-title">
            <h2 class="color-white">3 Etapes faciles pour en profiter</h2>
        </div>
        <div class="steps-box">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="steps-item">
                        <h3>1.Choisir</h3>
                        <p>Choisissez vos meilleurs combos parmi des milliers d'articles passionnants.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="steps-item">
                        <h3>2. Payer</h3>
                        <p>Payez facilement en ligne. Nous utilisons le moyen de paiement le plus sûr.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 offset-md-3 offset-lg-0">
                    <div class="steps-item">
                        <h3>3.S'amuser </h3>
                        <p>S'amuser avec notre nourriture Moula Food et très gourmande.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
