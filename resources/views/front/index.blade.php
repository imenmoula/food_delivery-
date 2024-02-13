@extends('front/home')
@section('container')

<div class="header-bg-two">
    <div class="container-fluid p-0">
        <div class="rev_slider_wrapper">

            <div id="rev_slider_2" class="rev_slider" data-version="5.4.5" style="display:none">

                <ul>

                    <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                        data-masterspeed="3000" data-rotate="0" data-saveperformance="off" data-title="Slide">

                        <div class="tp-caption color-white tp-resizeme header-2-image-sm" id="slide-1-layer-1"
                            data-x="['left','center','center','center']" data-hoffset="['-20','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['20','380','400','320']" data-type="image"
                            data-responsive_offset="on"
                            data-frames="[{&quot;from&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:700,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                            style="z-index: 8;border-width:0px;"><img src="{{ asset('image/ramdan.jpg') }}" alt
                                data-ww="['322px','322px','300px','270px']" data-hh="['620px','620px','560px','504px']"
                                width="322" height="620" data-no-retina> </div>

                        <div class="tp-caption color-white LandingPage-Title tp-resizeme header-2-title"
                            id="slide-1-layer-2" data-x="['right','center','center','center']"
                            data-hoffset="['15','0','0','0']" data-y="['top','top','top','top']"
                            data-voffset="['140','40','70','45']" data-fontsize="['70','60','45','35']"
                            data-lineheight="['90','85','55','40']" data-letterspacing="4" data-type="text"
                            data-responsive_offset="on"
                            data-frames="[{&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:500,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                            data-textAlign="['left','center','center','center']" data-fontweight="400"
                            style="z-index: 5; white-space: nowrap;">Spécial Ramadan<br>remise sur <br>les plats tunisiens</div>

                        <div class="tp-caption color-white LandingPage-SubTitle tp-resizeme header-2-caption-shape"
                            id="slide-1-layer-3" data-x="['right','center','center','center']"
                            data-hoffset="['55','0','0','0']" data-y="['top','top','top','top']"
                            data-voffset="['360','230','215','140']" data-fontsize="['25','17','14','14']"
                            data-lineheight="['30','30','25','25']" data-width="['770','650','500','470']"
                            data-fontweight="500" data-type="text" data-responsive_offset="on"
                            data-frames="[{&quot;from&quot;:&quot;x:-50px;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:700,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                            data-textAlign="['left','left','center','center']"
                            style="z-index: 7;white-space: normal;font-style:normal;">
                            

                            <div class="header-content-subtitle">
                                
                                <p class="header-subtitle-name">
                                    
                                    Double Chicken <span>+</span> Chicken <span>+</span> Bacon <span>=</span>
                                </p>
                                <p class="header-subtitle-price">
                                    
                                    <span>45 <small>DT</small></span>
                                </p>
                                <div class="header-content-cart">
                                    <div class="header-cart-button">
                                        <a href="#"><i class="icofont-plus"></i></a>
                                    </div>
                                    <div class="header-cart-text"></div>
                                </div>
                            </div>
                        </div>

                        <div class="tp-caption color-white color-white tp-resizeme" id="slide-1-layer-4"
                            data-hoffset="['-200','30','30','30']" data-x="['left','left','left','left']"
                            data-y="['top','top','top','top']" data-voffset="['200','30','30','30']" data-type="image"
                            data-responsive_offset="on"
                            data-frames="[{&quot;from&quot;:&quot;x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1000,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                            style="z-index: 8;border-width:0px;"><img src="{{asset('user/assets/images/header-shape-1.png')}}" alt
                                data-ww="['42px','42px','42px','42px']" data-hh="['43px','43px','43px','43px']"
                                width="42" height="43" data-no-retina> </div>

                        <div class="tp-caption tp-resizeme" id="slide-1-layer-5"
                            data-x="['right','right','right','right']" data-y="['top','top','top','top']"
                            data-voffset="['-45','-45','-45','-75']" data-type="image" data-responsive_offset="on"
                            data-frames="[{&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:700,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                            style="z-index: 8;border-width:0px;"><img src="{{asset('user/assets/images/header-shape-3.png')}}" alt
                                data-ww="['110px','110px','110px','110px']" data-hh="['143px','143px','143px','143px']"
                                width="110" height="143" data-no-retina> </div>

                        <div class="tp-caption tp-resizeme" id="slide-1-layer-6" data-hoffset="['-200','30','30','30']"
                            data-x="['right','right','right','right']" data-y="['bottom','bottom','bottom','bottom']"
                            data-voffset="['200','30','30','30']" data-type="image" data-responsive_offset="on"
                            data-frames="[{&quot;from&quot;:&quot;x:50px;rZ: 120deg;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:700,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                            style="z-index: 8;border-width:0px;"><img src="{{ asset('user/assets/images/header-shape-1.png') }}" alt
                                data-ww="['42px','42px','42px','42px']" data-hh="['43px','43px','43px','43px']"
                                width="42" height="43" data-no-retina> </div>

                        <div class="tp-caption tp-resizeme" id="slide-1-layer-7"
                            data-x="['right','right','right','right']" data-y="['bottom','bottom','bottom','bottom']"
                            data-voffset="['45','45','45','75']" data-type="image" data-responsive_offset="on"
                            data-frames="[{&quot;from&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:700,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                            style="z-index: 8;border-width:0px;"><img src="{{ asset('user/assets/images/header-shape-6.png') }}" alt
                                data-ww="['173px','173px','173px','173px']" data-hh="['192px','192px','192px','192px']"
                                width="110" height="143" data-no-retina> </div>
                    </li>

                    <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                        data-rotate="0" data-saveperformance="off" data-title="Slide">

                        <div class="tp-caption tp-resizeme header-2-image-lg" id="slide-2-layer-1"
                            data-x="['left','center','center','center']" data-hoffset="['-50','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['150','480','450','400']"
                            data-type="image" data-responsive_offset="on"
                            data-frames="[{&quot;from&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:700,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                            style="z-index: 8;border-width:0px;"><img src="{{ asset('user/assets/images/header-2-carousel-2.png') }}" alt
                                data-ww="['370px','500px','500px','500px']" data-hh="['350px','451px','451px','451px']"
                                width="370" height="350" data-no-retina> </div>

                        <div class="tp-caption color-white LandingPage-Title tp-resizeme header-2-title"
                            id="slide-2-layer-2" data-x="['right','center','center','center']"
                            data-hoffset="['15','0','0','0']" data-y="['top','top','top','top']"
                            data-voffset="['140','40','70','45']" data-fontsize="['70','60','45','35']"
                            data-lineheight="['90','85','55','40']" data-letterspacing="4" data-type="text"
                            data-responsive_offset="on"
                            data-frames="[{&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:500,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                            data-textAlign="['left','center','center','center']" data-fontweight="400"
                            style="z-index: 5; white-space: nowrap;">S'amuser avec notre<br> delicious food</div>

                        <div class="tp-caption LandingPage-SubTitle tp-resizeme header-2-caption-shape"
                            id="slide-2-layer-3" data-x="['right','center','center','center']"
                            data-hoffset="['55','0','0','0']" data-y="['top','top','top','top']"
                            data-voffset="['360','230','215','140']" data-fontsize="['25','17','14','14']"
                            data-lineheight="['30','30','25','25']" data-width="['770','650','500','470']"
                            data-fontweight="500" data-type="text" data-responsive_offset="on"
                            data-frames="[{&quot;from&quot;:&quot;x:-50px;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:700,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                            data-textAlign="['left','left','center','center']"
                            style="z-index: 7;white-space: normal;font-style:normal;">
                            <div class="header-content-subtitle">
                                <p class="header-subtitle-name">
                                    Double Chicken <span>+</span> Burger <span>+</span> Drinks <span>=</span>
                                </p>
                                <p class="header-subtitle-price">
                                    Only
                                    <span>41.50 <small>DT</small></span>
                                </p>
                                <div class="header-content-cart">
                                    <div class="header-cart-button">
                                        <a href="#"><i class="icofont-plus"></i></a>
                                    </div>
                                    <div class="header-cart-text"></div>
                                </div>
                            </div>
                        </div>

                        <div class="tp-caption tp-resizeme" id="slide-2-layer-4" data-hoffset="['-200','30','30','30']"
                            data-x="['left','left','left','left']" data-y="['top','top','top','top']"
                            data-voffset="['200','30','30','30']" data-type="image" data-responsive_offset="on"
                            data-frames="[{&quot;from&quot;:&quot;x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1000,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                            style="z-index: 8;border-width:0px;"><img src="{{ asset('user/assets/images/header-shape-7.png') }}" alt
                                data-ww="['42px','42px','42px','42px']" data-hh="['43px','43px','43px','43px']"
                                width="42" height="43" data-no-retina> </div>

                        <div class="tp-caption tp-resizeme" id="slide-2-layer-5"
                            data-x="['right','right','right','right']" data-y="['top','top','top','top']"
                            data-voffset="['-45','-45','-45','-75']" data-type="image" data-responsive_offset="on"
                            data-frames="[{&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:700,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                            style="z-index: 8;border-width:0px;"><img src="{{ asset('user/assets/images/header-shape-3.png') }}" alt
                                data-ww="['110px','110px','110px','110px']" data-hh="['143px','143px','143px','143px']"
                                width="110" height="143" data-no-retina> </div>

                        <div class="tp-caption tp-resizeme" id="slide-2-layer-6" data-hoffset="['-200','30','30','30']"
                            data-x="['right','right','right','right']" data-y="['bottom','bottom','bottom','bottom']"
                            data-voffset="['200','30','30','30']" data-type="image" data-responsive_offset="on"
                            data-frames="[{&quot;from&quot;:&quot;x:50px;rZ: 120deg;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:700,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                            style="z-index: 8;border-width:0px;"><img src="{{ asset('user/assets/images/header-shape-1.png') }}" alt
                                data-ww="['42px','42px','42px','42px']" data-hh="['43px','43px','43px','43px']"
                                width="42" height="43" data-no-retina> </div>

                        <div class="tp-caption tp-resizeme" id="slide-2-layer-7"
                            data-x="['right','right','right','right']" data-y="['bottom','bottom','bottom','bottom']"
                            data-voffset="['45','45','45','75']" data-type="image" data-responsive_offset="on"
                            data-frames="[{&quot;from&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:700,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                            style="z-index: 8;border-width:0px;"><img src="{{  asset('user/assets/images/header-shape-6.png')}}" alt
                                data-ww="['173px','173px','173px','173px']" data-hh="['192px','192px','192px','192px']"
                                width="110" height="143" data-no-retina> </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>



{{-- petit-dejeuner-------------------------------------------------------------------------------------------------- --}}

<section class="combo-section pt-100 pb-70 bg-off-white">
    <div class="container">
        <div class="section-title section-title-default">
            <small>Petit-Déjeuner</small>
            <h2>Nos meilleurs articles à choisir pour le petit-déjeuner</h2>
        </div>
        <div class="row">
            @foreach($categories as $c)
                @if($c->name=='Petit déjeuners')
                    @foreach($c->menu as $m)
                        <div class="col-sm-12 col-lg-6 wow animate__slideInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="combo-box-two">
                                <div class="combo-two-pos-title"></div>
                                <div class="combo-image-two">
                                    <img src="{{ asset('assets/uploads/menus/' . $m->image) }}" alt="combo">
                                </div>
                                <div class="combo-two-text">
                                    <h3>{{ $m->description }}</h3>
                                    <a href="{{ route('cart.store', $m->id) }}" class="btn btn-border btn-small">
                                        Commander maintenant <i class="flaticon-shopping-cart-black-shape"></i>
                                    </a>
                                </div>
                                <div class="combo-offer-shape combo-offer-shape-red">
                                    <div class="combo-shape-inner">
                                        <small>Seulement à</small>
                                        <p>{{ $m->prix }}dt</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            @endforeach
        </div>
    </div>
</section>




<section class="service-section pt-100 pb-70 bg-main bg-overlay-transparent">
    <div class="container">
        <div class="section-title">
            <h2 class="color-white">Nous proposons 3 types de services</h2>
        </div>
        <div class="row d-flex flex-row">
            <div class="col-sm-12 col-md-4 pb-30">
                <div class="service-item">
                    <div class="service-image">
                        <img src="{{  asset('user/assets/images/service-1.jpg') }}" alt="service">
                    </div>
                    <div class="service-content">
                        <h3>1. Chez Happyness Food, les plats arrivent sur place rapidement</h3>
                        <p>Découvrez notre large sélection de délices chez Happyness Food </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 pb-30">
                <div class="service-item">
                    <div class="service-image">
                        <img src="{{ asset('image/reservation.jpg') }}"   alt="service">
                    </div>
                    <div class="service-content">
                        <h3>2. Reservation a domicile</h3>
                        <p>Réservez facilement votre table en ligne dès maintenant </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 pb-30">
                <div class="service-item">
                    <div class="service-image">
                        <img src="{{ asset('image/delivry.jpg') }}" alt="service">
                    </div>
                    <div class="service-content">
                        <h3>3.Livraison à domicile</h3>
                        <p>Choisissez vos meilleurs combos parmi les milliers d'articles passionnants.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</section>
{{-- debut de categorir***************************************************************************************************************** --}}

@include('front.includes.section_products')











<section class="reservation-section p-tb-100">
    <div class="container position-relative">
        <div class="section-title">
            <h2 class="color-white">faire une réservation</h2>
        </div>
        <div class="reservation-form-area">
            <form>
                <div class="reservation-form reservation-form-white">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" placeholder="1 Person" class="form-control">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="flaticon-add-user"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" placeholder="Select Date" class="form-control" id="datepicker">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="flaticon-calendar-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" name="startTime" class="form-control timepicker"
                                placeholder="Select Time" />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="flaticon-clock"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn">Enyoyer</button>
            </form>
        </div>
    </div>
</section>

@endsection
