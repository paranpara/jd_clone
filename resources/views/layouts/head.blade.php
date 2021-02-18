@section('header')
<header id="header" class="main-header header-sticky header-sticky-smart header-style-01 header-float text-uppercase">
    <div class="header-wrapper sticky-area">
        <div class="container container-1720">
            <nav class="navbar navbar-expand-xl">
                <div class="header-mobile d-flex d-xl-none flex-fill justify-content-between align-items-center">
                    <div class="navbar-toggler toggle-icon" data-toggle="collapse" data-target="#navbar-main-menu">
                        <span></span>
                    </div>
                    <a class="navbar-brand navbar-brand-mobile" href="index.html">
                        <img src="images/logo_final.jpeg" alt="Verified Ads" style="height: 60px;width: auto;" />
                    </a>
                    <a
                        class="mobile-button-search"
                        href="#search-popup"
                        data-gtf-mfp="true"
                        data-mfp-options='{"type":"inline","mainClass":"mfp-move-from-top mfp-align-top search-popup-bg","closeOnBgClick":false,"showCloseBtn":false}'
                    >
                        <i class="far fa-search"></i>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-main-menu">
                    <a class="navbar-brand d-none d-xl-block mr-auto" href="index.html">
                        <img src="images/logo_final.jpeg" alt="Verified Ads" style="height: 60px;width: auto;" />
                    </a>
                    <ul class="navbar-nav">
                        
                    </ul>
                    <div class="header-customize justify-content-end align-items-center d-none d-xl-flex">
                        <div class="header-customize-item">
                            @if (Auth::guest())
                                <a href="{{ url('login') }}" class="link">
                                    <svg class="icon icon-user-circle-o">
                                        <use xlink:href="#icon-user-circle-o"></use>
                                    </svg>
                                    Log in
                                </a>
                            @else
                                <a href="{{ url('logout') }}" class="link">
                                    <svg class="icon icon-user-circle-o">
                                        <use xlink:href="#icon-user-circle-o"></use>
                                    </svg>
                                    Log out
                                </a>
                            @endif
                        </div>
                        <div class="header-customize-item button">
                            <a href="#" class="btn btn-primary btn-icon-right">Add Listing <i class="far fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
@endsection