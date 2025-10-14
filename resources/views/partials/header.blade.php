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
                                        <a href="#benvenuti">BENVENUTI</a>
                                    </li>
                                    <li>
                                        <a href="#offerta">LA NOSTRA OFFERTA</a>
                                    </li>
                                    <li>
                                        <a href="#team">IL TEAM</a>
                                    </li>
                                    <li>
                                        <a href="#prodotti">PRODOTTI</a>
                                    </li>
                                    <li>
                                        <a href="#contatti">DOVE SIAMO</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right">
                            <div class="wrap-header-icons">
                                <div class="header-search">
                                    <a class="show-search" href="#"><i class="icon-search1"></i></a>
                                    <div class="top-search">
                                        <form class="form-search" action="{{ route('home') }}" method="GET">
                                            <fieldset>
                                                <input type="search" 
                                                       placeholder="Cerca..." 
                                                       name="search" 
                                                       tabindex="2" 
                                                       aria-required="true">
                                            </fieldset>
                                            <div class="button-submit">
                                                <button type="submit">
                                                    <i class="icon-search1"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-cart">
                                    <a class="show-cart" href="#"><i class="icon-shopping-cart1"></i></a>
                                    {{-- Contenuto carrello da implementare --}}
                                </div>
                            </div>
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
                    <a class="item-menu-mobile" href="#benvenuti">BENVENUTI</a>
                </li>
                <li class="menu-item">
                    <a class="item-menu-mobile" href="#offerta">LA NOSTRA OFFERTA</a>
                </li>
                <li class="menu-item">
                    <a class="item-menu-mobile" href="#team">IL TEAM</a>
                </li>
                <li class="menu-item">
                    <a class="item-menu-mobile" href="#prodotti">PRODOTTI</a>
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