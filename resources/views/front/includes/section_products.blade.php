<section class="menu-section-bg menu-section-light pt-100 pb-70">
    <div class="container position-relative">
        <div class="section-title section-title-default">

            <small>Menu</small>

            <h2>Il suffit de choisir parmi les meilleurs</h2>
        </div>
    </div>
    
    <div class="container">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        @endif

    </div>

        <div class="menu-main-carousel-area">
            <div class="menu-main-thumb-nav">
                @foreach($categories as $c)

                    <div class="menu-main-thumb-item menu-main-thumb-item-two">
                        <div class="menu-main-thumb-inner">

                            <img src={{ asset('assets/uploads/categories/' . $c->image) }}
                                alt="menu">
                            <p>{{ $c->name }}</p>

                        </div>
                    </div>

                @endforeach

            </div>

            {{-- /*END categorie*******************************************************************/ ---------------------------------------------------------------- --}}

            <div class="menu-main-details-for">

                @foreach($categories as $c)
                    <div class="menu-main-details-item">
                        <div class="menu-details-carousel">


                            @foreach($c->menu as $m)
                                <div class="menu-details-carousel-item">
                                    <h3>{{ $m->nom_plat }}</h3>
                                    <p>{{ $m->description }}.</p>
                                    <h4 class="menu-price">{{ $m->prix }}Dt</h4>

                                    <div class="menu-details-carousel-image menu-details-carousel-image-two">
                                        <img src="{{ asset('assets/uploads/menus/' . $m->image) }}"
                                            alt="menu">
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="d-flex">
                                        <a href="{{route('front.includes.detailMenu', $m->id)}}" class="btn btn-primary shadow btn-sm sharp mr-3"><i class="fas fa-eye fa-lg"></i></a>                                        
                                        <a href="#" class="btn btn-primary shadow btn-sm sharp mr-3"><i class="fas fa-heart fa-lg"></i></a>
                                        <a href="#" class="btn btn-primary shadow btn-sm sharp mr-3"><i class="fas fa-thumbs-down fa-lg"></i></a>
                                    </div>
                                    <br>
                                    
                                    <a href="{{ route('cart.store', $m->id) }}" type="button" class="btn btn-yellow">
                                        Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                                    </a>
                                </div>
                            @endforeach







                        </div>
                    </div>



                @endforeach

            </div>
        </div>
    </div>
</section>
