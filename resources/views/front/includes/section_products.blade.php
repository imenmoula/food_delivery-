<section class="menu-section-bg menu-section-light pt-100 pb-70">
    <div class="container position-relative">
        <div class="section-title section-title-default">

            <small>Menu</small>

            <h2>Il suffit de choisir parmi les meilleurs</h2>
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
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image menu-details-carousel-image-two">
                                <img src="{{ asset('assets/uploads/menus/' . $m->image) }}" alt="menu">
                            </div>
                        </div>
                                
                            @endforeach
                        

                        
                       
                        
                        
                    </div>
                </div>
                
               
                
                @endforeach
               
            </div>
        </div>
    </div>
</section>
