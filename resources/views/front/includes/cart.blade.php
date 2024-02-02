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
                <img src="{{ asset('user/assets/images/header-shape-1.png') }}" alt="shape">
            </div>
            <div class="header-page-shape-item">

            </div>
        </div>
        <div class="container">
            <div class="header-page-content">
                <h1>List dachat</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Panier</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
        <div class="p-4 mb-3 bg-green-400 rounded">
        <p class="text-green-800">{{ $message }}</p>
        </div>
 @endif

<section class="cart-section pt-100 pb-70 bg-black">
    <div class="container">
        <div class="cart-table cart-table-dark">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Plat</th>
                        <th>Id</th>
                        <th>prix</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($cartItems as $item)
                    <tr>
                        <td class="cancel"><a href="#"><i class="flaticon-cancel"></i></a></td>
                        <td>
                            <div class="product-table-info">
                                <div class="product-table-thumb">
                                    <img src="{{ asset('assets/uploads/menus/' . $item->attributes->image) }}" alt="product">
                                </div>
                            </div>
                        </td>
                        <td class="td-product-name">{{ $item->name }}</td>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->price }}Dt</td>
                        <td>
                            <div class="cart-quantity">
                                <button class="qu-btn dec">-</button>
                                <input type="text" class="qu-input" value="{{ $item->quantity }}">
                                <button class="qu-btn inc">+</button>
                            </div>
                        </td>
                        <td class="td-total-price">
                            {{ Cart::getTotal() }}Dt
                        </td>
                    
                    <td>

                        <div class="d-flex">
                            <a href="{{route('cart.update', $item->id) }}" class="btn btn-primary shadow btn-xs sharp mr-2"><i class="fa fa-pencil"></i></a>
                            
                            <form method="POST" action="{{ route('cart.remove', $item->id) }}">
                                @csrf
                                @method('REMOVE')
                            
                                <button type='submit' class="btn btn-danger shadow btn-xs sharp mr-2" onclick="return confirm('Tu veux supprimer ce plat : {{$item->name}} ?')" data-toggle="tooltip">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                            
                            <a href={{route('cart.clear')}} class="btn btn-primary shadow btn-xs sharp mr-2"><i class="fa fa-trash"></i></a> 

                        </div>
                    </td>
                </tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>

       
          
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-6 pb-30 offset-lg-3 offset-md-2">
                <div class="cart-details mt-20">
                    <h3 class="cart-details-title color-white">Cart Totals</h3>
                    <div class="cart-total-box">
                        <div class="cart-total-item">
                            <h4>Sub Total</h4>
                            <p>$ 45</p>
                        </div>
                        <div class="cart-total-item">
                            <h4>Shipping</h4>
                            <div class="cart-total-checkarea">
                                <div class="cart-checkarea-item">
                                    <div class="cart-check-box">
                                        <input type="radio" name="ship" id="cart1">
                                        <label for="cart1">Flat Rate</label>
                                    </div>
                                </div>
                                <div class="cart-checkarea-item">
                                    <div class="cart-check-box">
                                        <input type="radio" name="ship" id="cart2">
                                        <label for="cart2">Express Delivery</label>
                                    </div>
                                    <p>$ 15</p>
                                </div>
                                <div class="cart-checkarea-item">
                                    <div class="cart-check-box">
                                        <input type="radio" name="ship" id="cart3">
                                        <label for="cart3">In-Stock Pick up</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart-total-item cart-total-bold">
                            <h4 class="color-white">Total</h4>
                            <p>$ 45</p>
                        </div>
                    </div>
                    <a href="checkout.html" class="btn">Proceed To Checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection