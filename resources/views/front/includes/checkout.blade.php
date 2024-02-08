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
                <h1>Checkout</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#"></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Passe a la paiment</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
{{-- ********************************************************************************************************* --}}

<div class="checkout-section pt-100 pb-70 bg-black">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-7 col-lg-8 pb-30">
                <div class="checkout-item">
                    <div class="sub-section-title">
                        <h3 class="color-white">Détails de facturation</h3>
                    </div>
                    <div class="checkout-form">
                        <form method="post" action="{{ route('front.store.checkout') }}"> 
                            @csrf
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="fname" class="form-control" required
                                                placeholder="Nom*" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="lname" class="form-control" placeholder="Prenom*" />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="rue" class="form-control"
                                                placeholder="Rue" />
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="address" class="form-control"
                                                placeholder="adresse*" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="phone" class="form-control" 
                                                placeholder="Telephone*" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="email" name="email" class="form-control" 
                                                placeholder="Email*" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <div class="input-group input-group-textarea">
                                            <textarea name="message" class="form-control" rows="5"
                                                placeholder="Si vous avez une choix personnel ecrivez ici*"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <button class="btn full-width">Commander</button>
                        </form>
 
                    </div>
                
                </div>
            </div>
 {{-- ----------------------------------------------------------------------------------------------- --}}
           
        
            {{-- -************************************************************************************** --}}
            <div class="col-sm-12 col-md-5 col-lg-4 pb-30">
                <div class="checkout-item">
                    <div class="checkout-details cart-details mb-30">
                        <h3 class="cart-details-title color-white"> Total du panier</h3>
                        <div class="cart-total-box">
                            <div class="cart-total-item pt-0">
                                <h4 class="color-main">SQDVFGB</h4>
                                <p>$ 9.00</p>
                            </div>
                            
                            <div class="cart-total-item cart-total-bold">
                                <h4 class="color-white">Total</h4>
                                <p>$ 45</p>
                            </div>
                        </div>
                    </div>
{{--** ************************************************************************************ --}}
                    <div class="checkout-payment-area">
                        <h3 class="color-white cart-details-title">Methods de payement</h3>
                        <div class="checkout-form">
                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="cart-check-box">
                                            <input type="radio" name="ship" id="checkout1">
                                            <label for="checkout1">Direct Bank Transfer</label>
                                            <p>Make your payment directly into our bank account. Please use your
                                                Order ID as the payment reference. Your order will not be shipped
                                                until the funds have cleared in our account.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="cart-check-box">
                                            <input type="radio" name="ship" id="checkout2">
                                            <label for="checkout2">Cash On Delivery</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="cart-check-box">
                                            <input type="radio" name="ship" id="checkout3">
                                            <label for="checkout3">Paypal</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkout4">
                                            <label class="custom-control-label" for="checkout4">I’ve read and accept
                                                the <a href="terms-conditions.html">Terms & Conditions</a> <span
                                                    class="color-main">*</span></label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
