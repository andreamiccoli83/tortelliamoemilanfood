<!-- Top Bar -->
<div class="tf-top-bar">
    <div class="tf-container w-1550">
        <div class="row">
            <div class="col-12">
                <div class="wrap-top">
                    <ul class="list-info">
                        <li>
                            <i class="icon-location"></i>
                            Piazza Cesare Battisti 3, Novellara, Reggio Emilia
                        </li>
                        <li>
                            <i class="icon-clock2"></i>
                            Lun - Dom 9:00 - 14:00, 16:00 - 20:00
                        </li>
                    </ul>
                    <ul class="list-sosial">
                        <li><i class="icon-facebook"></i></li>
                        <li><i class="icon-twitter"></i></li>
                        <li><i class="icon-instagram2"></i></li>
                        <li><i class="icon-tiktok"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Top Bar -->

<!-- Header -->
<header id="header-main" class="header header-fixed style-absolute">
    <div class="header-inner">
        <div class="tf-container w-1550">
            <div class="row">
                <div class="col-12">
                    <div class="header-inner-wrap">
                        <div class="header-left">
                            <div class="header-logo">
                                <a href="{{ route('home') }}" class="site-logo">
                                    <img id="logo_header" 
                                         alt="Tortelliamo Logo" 
                                         src="{{ asset('images/logo/logo_tortelliamo.png') }}"
                                         data-retina="{{ asset('images/logo/logo_tortelliamo.png') }}">
                                </a>
                            </div>
                            <nav class="main-menu">
                                <ul class="navigation">
                                    <li class="{{ Request::is('/') ? 'active' : '' }}">
                                        <a href="#benvenuti">PASTA FRESCA</a>
                                    </li>
                                    <li>
                                        <a href="#prodotti">GASTRONOMIA</a>
                                    </li>
                                     <li>
                                        <a href="#acquista">ACQUISTA</a>
                                    </li>
                                    <li>
                                        <a href="#team">SERVIZI</a>
                                    </li>
                                    <li>
                                        <a href="#contatti">DOVE SIAMO</a>
                                    </li>
                                    <li class="menu-badges" style="display: flex; align-items: center; gap: 15px; margin-left: 20px;">
                                        <img src="{{ asset('images/logo/vegan_friendly_icon.png') }}" 
                                            alt="Vegan Friendly" 
                                            style="height: 35px; width: auto;"
                                            title="Prodotti Vegan Friendly">
                                        <img src="{{ asset('images/logo/gluten-free-logo.png') }}" 
                                            alt="Gluten Free" 
                                            style="height: 35px; width: auto;"
                                            title="Opzioni Gluten Free">
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right">
                            <div class="header-contact">
                                <div class="icon">
                                    <i class="icon-old-phone"></i>
                                </div>
                                <div class="content">
                                    <p>Ordina & Ritira</p>
                                    <p class="number">320 862 6210</p>
                                </div>
                            </div>
                            <div class="mobile-button">
                                <i class="icon-menu"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Menu -->
<div class="mobile-nav-wrap">
    <div class="overlay-mobile-nav"></div>
    <div class="inner-mobile-nav">
        <div class="top-nav-mobile">
            <a href="{{ route('home') }}" rel="home" class="main-logo">
                <img id="mobile-logo_header" 
                     alt="Tortelliamo" 
                     src="{{ asset('images/logo/logo_tortelliamo.png') }}"
                     data-retina="{{ asset('images/logo/logo_tortelliamo.png') }}">
            </a>
            <div class="mobile-nav-close">
                <i class="icon-close"></i>
            </div>
        </div>
        <nav id="mobile-main-nav" class="mobile-main-nav">
            <ul id="menu-mobile-menu" class="menu">
                <li class="menu-item">
                    <a class="item-menu-mobile" href="#benvenuti">PASTA FRESCA</a>
                </li>
                <li class="menu-item">
                    <a class="item-menu-mobile" href="#prodotti">GASTRONOMIA</a>
                </li>
                <li class="menu-item">
                    <a class="item-menu-mobile" href="#acquista">ACQUISTA</a>
                </li>
                <li class="menu-item">
                    <a class="item-menu-mobile" href="#team">SERVIZI</a>
                </li>
                <li class="menu-item">
                    <a class="item-menu-mobile" href="#contatti">DOVE SIAMO</a>
                </li>
            </ul>
        </nav>
        <div class="mobile-footer">
            <ul class="tf-social-icon">
                <li><a href="#" target="_blank"><i class="icon-facebook"></i></a></li>
                <li><a href="#" target="_blank"><i class="icon-instagram2"></i></a></li>
                <li><a href="#" target="_blank"><i class="icon-tiktok"></i></a></li>
            </ul>
        </div>
    </div>
</div>