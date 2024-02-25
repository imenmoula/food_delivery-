@extends('front/home')
@section('container')
<div class="header-bg header-bg-page">
    <div class="header-padding position-relative">
        <div class="header-page-shape">
            <div class="header-page-shape-item">
                <img src="assets/images/header-shape-1.png" alt="shape">
            </div>
            <div class="header-page-shape-item">
                <img src="assets/images/header-shape-2.png" alt="shape">
            </div>
            <div class="header-page-shape-item">
                <img src="assets/images/header-shape-3.png" alt="shape">
            </div>
            <div class="header-page-shape-item">
                <img src="assets/images/header-shape-1.png" alt="shape">
            </div>
            <div class="header-page-shape-item">

            </div>
            <div class="header-page-shape-item">
                <img src="assets/images/header-shape-1.png" alt="shape">
            </div>

        </div>
        <div class="container">
            <div class="header-page-content">
                <h1>My Account</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Account</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


<div class="account-page-section pt-100 pb-70 bg-black">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 pb-30">
                <div class="account-sidebar around-border">
                    <ul class="account-sidebar-list">
                        <li class="active"><a href="my-account.html">My Account</a></li>
                        <li><a href="my-orders.html">My Orders</a></li>
                        <li><a href="my-addresses.html">My Addresses</a></li>
                        <li><a href="my-addresses.html">My Addresses</a></li>

                        <li>
                           
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="#"><button type="submit" class="logout-button">Déconnexion</button></a>
                        
                        </form>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8 pb-30">
                <div class="account-info">
                    <form>
                        <div class="account-setting-item account-setting-avatar">
                            <div class="sub-section-title">
                                <h3 class="color-white">Avatar</h3>
                            </div>
                            <div class="account-avatar-info">
                                <div class="account-avatar-thumb">
                                    <img src="assets/images/comment-1.jpg" alt="avatar">
                                </div>
                                <ul class="account-avatar-action">
                                    <li><button class="btn">Upload</button></li>
                                    <li><button class="btn btn-yellow">Remove</button></li>
                                </ul>
                            </div>
                        </div>
                        <div class="account-setting-item">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="first_name" id="first_name" class="form-control"
                                                required="" placeholder="First Name*">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="last_name" id="last_name" class="form-control"
                                                required="" placeholder="Last Name*">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="email" id="email" class="form-control" required=""
                                                placeholder="Email*" value="xyz@example.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="phone" id="phone" class="form-control" required=""
                                                placeholder="Phone Number*" value="+1-678-1234-5567">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="account-setting-item account-setting-avatar">
                            <div class="sub-section-title">
                                <h3 class="color-white">Change Password</h3>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="flaticon-login-1"></i></span>
                                            </div>
                                            <input type="password" name="pass1" id="pass1" class="form-control password"
                                                placeholder="Current Password">
                                            <div class="input-group-append">
                                                <span class="input-group-text reveal">
                                                    <i class="flaticon-visibility pass-close"></i>
                                                    <i class="flaticon-eye pass-view"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="flaticon-login-1"></i></span>
                                            </div>
                                            <input type="password" name="pass2" id="pass2" class="form-control password"
                                                placeholder="New Password">
                                            <div class="input-group-append">
                                                <span class="input-group-text reveal">
                                                    <i class="flaticon-visibility pass-close"></i>
                                                    <i class="flaticon-eye pass-view"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="flaticon-login-1"></i></span>
                                            </div>
                                            <input type="password" name="pass3" id="pass3" class="form-control password"
                                                placeholder="Confirm New Password">
                                            <div class="input-group-append">
                                                <span class="input-group-text reveal">
                                                    <i class="flaticon-visibility pass-close"></i>
                                                    <i class="flaticon-eye pass-view"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="account-setting-item account-setting-button">
                            <button class="btn btn-small">Save Changes</button>
                            <button class="btn btn-yellow btn-small">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
