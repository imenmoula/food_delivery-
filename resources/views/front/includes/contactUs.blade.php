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

            </div>
            <div class="header-page-shape-item">
                <img src="{{ asset('user/assets/images/header-shape-1.png"') }}"
                    alt="shape">
            </div>

        </div>
        <div class="container">
            <div class="header-page-content">
                <h1>Contact</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Acceuil</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
{{-- *------------------------adress------------------------------------------------------------------------------------------ --}}

<div class="contact-us-section pt-100 pb-70 bg-black">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                <div class="contact-item">
                    <div class="contact-item-title text-center">
                        <h3 class="color-white">Adresse de Moula Food</h3>
                    </div>
                    <div class="contact-item-info">
                        <div class="contact-info-list">
                            <h3>Adresse</h3>
                            <p>8000 nabeul,nabeul</p>
                        </div>
                        <div class="contact-info-list">
                            <h3>E-mail</h3>
                            <p>
                                   <span> moulafood@gmail.com</span>
                            </p>
                        </div>
                        <div class="contact-info-list">
                            <h3>Telephone</h3>
                            <p><a href="tel:001-964-565-87652">
                                +1 1111111111</a> / <a href="tel:001-982-567-87325">+1 1212121212</a></p>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="col-sm-12 col-md-12 col-lg-8 order-5 order-lg-0 pb-30">
                <div class="comment-area">
                    <div class="sub-section-title">
                        <h3 class="color-white">Laisser un message</h3>
                        <p> Votre adresse e-mail ne sera pas publiée. Les champs obligatoires sont indiqués par *</p>
                    </div>
                    <div class="comment-form mt-30">
                        <form method="POST" action="" enctype="multipart/form-data">
                            
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="name" id="name" class="form-control" required
                                                data-error="Please enter your name" placeholder="votre nom*" />
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="email" name="email" id="email" class="form-control" required
                                                data-error="Please enter your email" placeholder="votre email*" />
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="phone_number" id="phone_number" required
                                                data-error="Please enter your phone number" class="form-control"
                                                placeholder="votre telephoen*" />
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                                required data-error="Please enter your subject"
                                                placeholder="votre Subject*" />
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <textarea name="message" class="form-control" id="message" rows="8"
                                                placeholder="votre message*"></textarea>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <button class="btn full-width" type="submit">
                                        Envoyer message
                                    </button>
                                    <div id="msgSubmit"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection
