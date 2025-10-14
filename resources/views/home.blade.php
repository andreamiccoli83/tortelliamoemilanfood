@extends('layouts.app')

@section('title', 'Tortelliamo - Gastronomia Tradizionale Emiliana')

@section('meta_description', 'Pasta fresca artigianale e specialità gastronomiche della tradizione emiliana. Scopri i nostri tortelli, cappelletti e molto altro a Novellara.')

@section('content')

<!-- Page Title / Hero Section -->
<div class="page-title-home relative">
    <div class="swiper-container slide-effect-fade slider-page-title-home">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="page-title relative style-2">
                    <div class="tf-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="content">
                                    <div class="icon-top fade-item fade-item1">
                                        <img class="lazyload" 
                                             data-src="{{ asset('images/nuove/cappelletti_stilizzati1.png') }}"
                                             src="{{ asset('images/nuove/cappelletti_stilizzati1.png') }}" 
                                             alt="">
                                    </div>
                                    <div class="fade-item fade-item2">
                                        <div class="sub-title text-1">
                                            Gastronomia Novellara
                                        </div>
                                        <div class="under-line">
                                            <img class="lazyload" 
                                                 data-src="{{ asset('images/logo/line.png') }}"
                                                 src="{{ asset('images/logo/line.png') }}" 
                                                 alt="">
                                        </div>
                                    </div>
                                    <h1 class="title fade-item fade-item3">
                                        PREPARATA CON <br>
                                        INGREDIENTI SELEZIONATI
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="page-title relative style-1">
                    <div class="tf-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="content">
                                    <div class="icon-top fade-item fade-item1">
                                        <img class="lazyload" 
                                             data-src="{{ asset('images/nuove/cappelletti_stilizzati1.png') }}"
                                             src="{{ asset('images/nuove/cappelletti_stilizzati1.png') }}" 
                                             alt="">
                                    </div>
                                    <div class="fade-item fade-item2">
                                        <div class="sub-title text-1">
                                            Gastronomia Novellara
                                        </div>
                                        <div class="under-line">
                                            <img class="lazyload" 
                                                 data-src="{{ asset('images/logo/line.png') }}"
                                                 src="{{ asset('images/logo/line.png') }}" 
                                                 alt="">
                                        </div>
                                    </div>
                                    <h1 class="title fade-item fade-item3">
                                        PASTA FRESCA E<br>
                                        TRADIZIONE EMILIANA
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next button page-title-next">
            <i class="icon-arrow-draw"></i>
        </div>
        <div class="swiper-button-prev button page-title-prev">
            <i class="icon-arrow-draw"></i>
        </div>
    </div>
    <div class="image">
        <img src="{{ asset('images/nuove/tortelli_reggiani.png') }}" alt="Tortelli Reggiani">
    </div>
</div>

<!-- Main Content -->
<div class="main-content home-page">
    
    <!-- Section Welcome -->
    <section id="benvenuti" class="section-welcome tf-spacing-1 pt-0">
        <div class="tf-container w-1550">
            <div class="row">
                <div class="col-12">
                    <div class="wrapper">
                        <div class="wrap-image hover-img left wow fadeInLeft" data-wow-duration="2s">
                            <img class="lazyload" 
                                 data-src="{{ asset('images/nuove/prodotti2.png') }}"
                                 src="{{ asset('images/nuove/prodotti2.png') }}" 
                                 alt="Prodotti Tortelliamo" />
                        </div>
                        <div class="content">
                            <div class="heading-section">
                                <p class="sub-title wow fadeInUp">BENVENUTI DA TORTELLIAMO</p>
                                <div class="title text-4 wow fadeInUp">
                                    GASTRONOMIA CON SAPORI AUTENTICI DELLA TRADIZIONE.
                                </div>
                                <p class="short-desc wow fadeInUp">
                                    La nostra gastronomia è un punto di riferimento 
                                    per chi cerca l'autentica cucina emiliana, 
                                    preparata con ingredienti selezionati e ricette tradizionali
                                </p>
                            </div>
                            <p class="desc wow fadeInUp">
                                Siamo un'attività familiare che porta avanti la tradizione gastronomica di Novellara.
                                La nostra passione per la cucina emiliana ci ha spinto a creare un luogo dove i sapori
                                autentici del territorio possono essere apprezzati da tutti, mantenendo vive le ricette
                                tramandate di generazione in generazione.
                            </p>
                        </div>
                        <div class="wrap-image hover-img right wow fadeInRight" data-wow-duration="2s">
                            <img class="lazyload" 
                                 data-src="{{ asset('images/nuove/lasagna.png') }}"
                                 src="{{ asset('images/nuove/lasagna.png') }}" 
                                 alt="Lasagna" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Video -->
    <section class="section-video">
        <div class="widget-video">
            <a href="https://www.youtube.com/watch?v=MLpWrANjFbI" class="popup-youtube">
                <div class="icon">
                    <i class="icon icon-play3"></i>
                    <div class="wave"></div>
                    <div class="wave-1"></div>
                </div>
            </a>
        </div>
    </section>

    <!-- Section Our Menu/Products -->
    <section id="prodotti" class="section-our-menu tf-spacing-3">
        <div class="tf-container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-section">
                        <p class="sub-title wow fadeInUp">I NOSTRI PRODOTTI</p>
                        <div class="title text-4 wow fadeInUp">LA NOSTRA OFFERTA</div>
                        <p class="wow fadeInUp">
                            Vi invitiamo a scoprire la nostra selezione di pasta fresca e specialità gastronomiche,<br>
                            preparate con ingredienti di prima qualità e nel rispetto delle tradizioni culinarie emiliane.
                        </p>
                    </div>
                </div>
                <div class="swiper-container slide-our-menu">
                    <div class="swiper-wrapper">
                        <!-- Slide 1: Pasta Fresca -->
                        <div class="swiper-slide">
                            <div class="our-menu-item hover-img wow fadeInUp">
                                <div class="wrap-image">
                                    <img class="lazyload" 
                                         data-src="{{ asset('images/nuove/pasta_fresca.png') }}"
                                         src="{{ asset('images/nuove/pasta_fresca.png') }}" 
                                         alt="Pasta Fresca" />
                                </div>
                                <div class="content">
                                    <div class="wrap">
                                        <div class="title"><a href="#">PASTA FRESCA</a></div>
                                        <p>
                                            La nostra pasta fresca è preparata quotidianamente seguendo le ricette 
                                            tradizionali emiliane, con ingredienti selezionati e di prima qualità.
                                        </p>
                                        <div class="icon">
                                            <a href="#"><i class="icon-arrow-draw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 2: Primi Piatti -->
                        <div class="swiper-slide">
                            <div class="our-menu-item hover-img wow fadeInUp" data-wow-delay="0.2s">
                                <div class="wrap-image">
                                    <img class="lazyload" 
                                         data-src="{{ asset('images/nuove/primi_piatti.png') }}"
                                         src="{{ asset('images/nuove/primi_piatti.png') }}" 
                                         alt="Primi Piatti" />
                                </div>
                                <div class="content">
                                    <div class="wrap">
                                        <div class="title"><a href="#">PRIMI PIATTI</a></div>
                                        <p>
                                            Lasagne, cannelloni e altre specialità pronte da cuocere, preparate secondo 
                                            le ricette della tradizione emiliana con ingredienti genuini.
                                        </p>
                                        <div class="icon">
                                            <a href="#"><i class="icon-arrow-draw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 3: Specialità Gastronomiche -->
                        <div class="swiper-slide">
                            <div class="our-menu-item hover-img mb-0 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="wrap-image">
                                    <img class="lazyload" 
                                         data-src="{{ asset('images/nuove/specialita_gastronomiche.png') }}"
                                         src="{{ asset('images/nuove/specialita_gastronomiche.png') }}" 
                                         alt="Specialità Gastronomiche" />
                                </div>
                                <div class="content">
                                    <div class="wrap">
                                        <div class="title"><a href="#">SPECIALITÀ GASTRONOMICHE</a></div>
                                        <p>
                                            Piatti pronti, secondi e contorni della tradizione emiliana, preparati con 
                                            cura e passione per soddisfare anche i palati più esigenti.
                                        </p>
                                        <div class="icon">
                                            <a href="#"><i class="icon-arrow-draw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item1 wow fadeInLeft" data-wow-duration="3s">
            <img src="{{ asset('images/items/item-our-menu-home-page.png') }}" alt="">
        </div>
    </section>

    <!-- Section Why Choose Us -->
    <section class="section-why tf-spacing-18 pt-0">
        <div class="tf-container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="wrap-image">
                        <div class="image">
                            <img class="lazyload" 
                                 data-src="{{ asset('images/nuove/sicurezza_alimentare.png') }}"
                                 src="{{ asset('images/nuove/sicurezza_alimentare.png') }}" 
                                 alt="Sicurezza Alimentare" />
                        </div>
                        <div class="item1 wow rotateIn" data-wow-duration="2s">
                            <img src="{{ asset('images/nuove/passatelli.png') }}" alt="Passatelli">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="content">
                        <div class="heading-section">
                            <p class="sub-title wow fadeInUp">PERCHÉ SCEGLIERCI</p>
                            <div class="title text-4 wow fadeInUp">QUALITÀ E TRADIZIONE</div>
                            <p class="wow fadeInUp line-clamp-4">
                                Crediamo nella qualità senza compromessi. 
                                Con il passare degli anni, abbiamo ampliato la nostra offerta mantenendo sempre gli stessi valori: 
                                ingredienti selezionati, ricette tradizionali e passione per la gastronomia emiliana.
                            </p>
                        </div>
                        <ul class="list-check wow fadeInUp">
                            <li><i class="icon-check1"></i> SICUREZZA ALIMENTARE GARANTITA</li>
                            <li><i class="icon-check1"></i> PRODOTTI SEMPRE FRESCHI</li>
                            <li><i class="icon-check1"></i> ORDINAZIONE FACILE E CONSEGNA A DOMICILIO</li>
                        </ul>
                    </div>
                </div>
                <div class="counter">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="number-counter">
                                <div class="counter-content">
                                    <span class="number" data-speed="2500" data-to="240" data-inviewport="yes">240</span>
                                </div>
                                <p>CLIENTI OGNI GIORNO</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="number-counter">
                                <div class="counter-content">
                                    <span class="number" data-speed="2500" data-to="1450" data-inviewport="yes">1450</span>
                                </div>
                                <p>ORDINI CONSEGNATI</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="number-counter">
                                <div class="counter-content">
                                    <span class="number" data-speed="2500" data-to="12" data-inviewport="yes">12</span>
                                </div>
                                <p>CERTIFICAZIONI E RICONOSCIMENTI</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="number-counter last-child">
                                <div class="counter-content">
                                    <span class="number" data-speed="2500" data-to="3260" data-inviewport="yes">3260</span>
                                </div>
                                <p>CLIENTI SODDISFATTI</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item2 wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="3s">
            <img src="{{ asset('images/items/item-section-why-2.png') }}" alt="">
        </div>
    </section>

    <!-- Section Team -->
    <section id="team" class="section-post tf-spacing-5 pt-0">
        <div class="wrap-image">
            <img class="lazyload" 
                 data-src="{{ asset('images/nuove/adriano.png') }}"
                 src="{{ asset('images/nuove/adriano.png') }}" 
                 alt="Il nostro team" />
        </div>
        <div class="box-post default" data-wow-delay="0.1s">
            <div class="wrap-content">
                <div class="content wow fadeInUp">
                    <div class="icon">
                        <img src="{{ asset('icons/icon-post.svg') }}" alt="">
                    </div>
                    <h2 class="title">IL NOSTRO TEAM</h2>
                    <p class="decs">
                        Crediamo nella qualità artigianale. Con il passare degli anni, 
                        abbiamo ampliato la nostra offerta mantenendo sempre gli stessi valori 
                        e la stessa passione per la tradizione.
                    </p>
                </div>
            </div>
        </div>
        <div class="box-post style-2" data-wow-delay="0.2s">
            <div class="wrap-content">
                <div class="wrap-image">
                    <img class="lazyload" 
                         data-src="{{ asset('images/nuove/menu_stagionale.png') }}"
                         src="{{ asset('images/nuove/menu_stagionale.png') }}" 
                         alt="Menu Stagionale" />
                </div>
                <div class="content wow fadeInDown">
                    <h2 class="title">MENU STAGIONALE</h2>
                    <p class="">
                        Prepariamo quotidianamente pasta fresca e specialità gastronomiche seguendo il ritmo delle stagioni, 
                        utilizzando ingredienti freschi e di qualità.
                    </p>
                </div>
            </div>
        </div>
        <div class="box-post style-3" data-wow-delay="0.3s">
            <div class="wrap-content">
                <div class="content wow fadeInUp">
                    <h2 class="title">LA NOSTRA STORIA</h2>
                    <p>
                        La nostra gastronomia nasce dalla passione per le ricette tradizionali emiliane, 
                        tramandate di generazione in generazione e preparate con ingredienti selezionati del nostro territorio.
                    </p>
                </div>
                <div class="wrap-image">
                    <img class="lazyload" 
                         data-src="{{ asset('images/nuove/storia1.png') }}"
                         src="{{ asset('images/nuove/storia1.png') }}" 
                         alt="La nostra storia" />
                </div>
            </div>
        </div>
    </section>

    <!-- Section Best Selling Products -->
    <section class="section-best-selling tf-spacing-2 pt-0">
        <div class="tf-container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-section">
                        <p class="sub-title wow fadeInUp">I NOSTRI PRODOTTI PIÙ VENDUTI</p>
                        <div class="title text-4 wow fadeInUp">CONSIGLIATI DALLO CHEF</div>
                        <p class="wow fadeInUp">
                            Scoprite le nostre specialità più amate, preparate secondo le ricette tradizionali emiliane.<br>
                            I nostri chef hanno creato un universo di sapori autentici che vi conquisteranno!
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-item wow fadeInUp">
                        <div class="wrap-image">
                            <img class="lazyload" 
                                 data-src="{{ asset('images/nuove/tortelli_zucca.png') }}"
                                 src="{{ asset('images/nuove/tortelli_zucca.png') }}" 
                                 alt="Tortelli di Zucca" />
                        </div>
                        <div class="content">
                            <div class="price">€4.00</div>
                            <h4 class="name"><a href="#">TORTELLI DI ZUCCA</a></h4>
                            <div class="rating">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-item wow fadeInUp" data-wow-delay="0.1s">
                        <div class="wrap-image">
                            <img class="lazyload" 
                                 data-src="{{ asset('images/nuove/cappelletti_brodo.png') }}"
                                 src="{{ asset('images/nuove/cappelletti_brodo.png') }}" 
                                 alt="Cappelletti in Brodo" />
                        </div>
                        <div class="content">
                            <div class="price">€6.12</div>
                            <h4 class="name"><a href="#">CAPPELLETTI IN BRODO</a></h4>
                            <div class="rating">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="wrap-image">
                            <img class="lazyload" 
                                 data-src="{{ asset('images/nuove/lasagne.png') }}"
                                 src="{{ asset('images/nuove/lasagne.png') }}" 
                                 alt="Lasagne" />
                        </div>
                        <div class="content">
                            <div class="price">€5.50</div>
                            <h4 class="name"><a href="#">LASAGNE</a></h4>
                            <div class="rating">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-item wow fadeInUp">
                        <div class="wrap-image">
                            <img class="lazyload" 
                                 data-src="{{ asset('images/nuove/tagliatelle_ragu.png') }}"
                                 src="{{ asset('images/nuove/tagliatelle_ragu.png') }}" 
                                 alt="Tagliatelle al Ragù" />
                        </div>
                        <div class="content">
                            <div class="price">€3.54</div>
                            <h4 class="name"><a href="#">TAGLIATELLE AL RAGÙ</a></h4>
                            <div class="rating">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-item wow fadeInUp" data-wow-delay="0.1s">
                        <div class="wrap-image">
                            <img class="lazyload" 
                                 data-src="{{ asset('images/nuove/tortellini_ragu.png') }}"
                                 src="{{ asset('images/nuove/tortellini_ragu.png') }}" 
                                 alt="Tortellini al Ragù" />
                        </div>
                        <div class="content">
                            <div class="price">€8.50</div>
                            <h4 class="name"><a href="#">TORTELLINI AL RAGÙ</a></h4>
                            <div class="rating">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="wrap-image">
                            <img class="lazyload" 
                                 data-src="{{ asset('images/nuove/parmigiana_melanzane.png') }}"
                                 src="{{ asset('images/nuove/parmigiana_melanzane.png') }}" 
                                 alt="Parmigiana di Melanzane" />
                        </div>
                        <div class="content">
                            <div class="price">€6.90</div>
                            <h4 class="name"><a href="#">PARMIGIANA DI MELANZANE</a></h4>
                            <div class="rating">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item1 wow fadeInRight" data-wow-duration="3s">
            <img src="{{ asset('images/items/item-section-best-selling.png') }}" alt="">
        </div>
        <div class="item2 wow fadeInLeft" data-wow-duration="3s">
            <img src="{{ asset('images/items/item-section-best-selling2.png') }}" alt="">
        </div>
    </section>

    <!-- Section Testimonials -->
    <section class="section-testimonial tf-spacing-6">
        <div class="swiper-container slide-testimonials">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="icon wow fadeInUp">
                            <img src="{{ asset('icons/blockquote.svg') }}" alt="">
                        </div>
                        <p class="paragraph wow fadeInUp">
                            Ordiniamo sempre la pasta fresca da Tortelliamo per le cene in famiglia e non siamo mai delusi! 
                            I tortelli di zucca e i cappelletti in brodo sono semplicemente ECCEZIONALI! Ottimo lavoro. 
                            Sicuramente torneremo presto per provare le altre specialità che preparate con tanta passione e tradizione!
                        </p>
                        <h5 class="wow fadeInUp"><a href="#">MARCO BIANCHI</a></h5>
                        <div class="rating wow fadeInUp">
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="icon wow fadeInUp">
                            <img src="{{ asset('icons/blockquote.svg') }}" alt="">
                        </div>
                        <p class="paragraph wow fadeInUp">
                            La qualità dei prodotti è eccellente! La pasta fresca è sempre perfetta e le lasagne sono divine. 
                            Il servizio di consegna è puntuale e il personale molto gentile. Consigliatissimo!
                        </p>
                        <h5 class="wow fadeInUp"><a href="#">GIULIA ROSSI</a></h5>
                        <div class="rating wow fadeInUp">
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next button section-testimonial-next">
                <i class="icon-arrow-draw"></i>
            </div>
            <div class="swiper-button-prev button section-testimonial-prev">
                <i class="icon-arrow-draw"></i>
            </div>
        </div>
        <div class="wrap-service-item">
            <div class="swiper-container slide-layout-3 mb-0">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="service-item wow fadeInUp">
                            <div class="wrap-image">
                                <img class="lazyload" 
                                     data-src="{{ asset('images/nuove/tradizione.png') }}"
                                     src="{{ asset('images/nuove/tradizione.png') }}" 
                                     alt="Tradizione" />
                            </div>
                            <div class="content">
                                <div class="icon">
                                    <i class="icon-croissant"></i>
                                </div>
                                <h2>IL GUSTO DELLA TRADIZIONE</h2>
                                <p>
                                    Da generazioni, la nostra passione per la pasta fresca continua immutata, 
                                    utilizzando solo ingredienti genuini e ricette tradizionali.
                                </p>
                                <a class="tf-btn-default" href="#">SCOPRI DI PIÙ<i class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="wrap-image">
                                <img class="lazyload" 
                                     data-src="{{ asset('images/nuove/consegna.png') }}"
                                     src="{{ asset('images/nuove/consegna.png') }}" 
                                     alt="Consegna" />
                            </div>
                            <div class="content">
                                <div class="icon">
                                    <i class="icon-shopping-bag"></i>
                                </div>
                                <h2>CONSEGNA GRATUITA</h2>
                                <p>
                                    Ordina online o telefonicamente e ricevi i nostri prodotti freschi direttamente a casa tua, 
                                    con consegna gratuita nel comune di Novellara.
                                </p>
                                <a class="tf-btn-default" href="#">SCOPRI DI PIÙ<i class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="wrap-image">
                                <img class="lazyload" 
                                     data-src="{{ asset('images/section/service3.jpg') }}"
                                     src="{{ asset('images/section/service3.jpg') }}" 
                                     alt="Novità" />
                            </div>
                            <div class="content">
                                <div class="icon">
                                    <i class="icon-blog"></i>
                                </div>
                                <h2>ULTIME NOVITÀ</h2>
                                <p>
                                    Seguici sui nostri canali social per scoprire le novità e le specialità stagionali 
                                    che prepariamo ogni giorno.
                                </p>
                                <a class="tf-btn-default" href="#">SCOPRI DI PIÙ<i class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Location/Contact -->
    <section id="contatti" class="section-location tf-spacing-2 pt-0">
        <div class="tf-container w-1550">
            <div class="row">
                <div class="col-xl-4">
                    <div class="wrap-image wow fadeInLeft">
                        <img class="lazyload" 
                             data-src="{{ asset('images/nuove/negozio.jpg') }}"
                             src="{{ asset('images/nuove/negozio.jpg') }}" 
                             alt="Il nostro negozio" />
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="content">
                        <div class="heading-section wow fadeInUp">
                            <div class="sub-title">DOVE TROVARCI</div>
                            <div class="title text-4">COME RAGGIUNGERCI?</div>
                            <p>
                                Goditi un piatto di pasta fresca, una specialità gastronomica o un buon bicchiere di vino
                                in un'atmosfera accogliente. I nostri artigiani hanno creato un universo di delizie
                                culinarie emiliane!
                            </p>
                        </div>
                        <h5 class="wow fadeInUp">CHIAMACI PER ORDINARE O PRENOTARE:</h5>
                        <div class="number text-4 wow fadeInUp">
                            <a href="tel:3208626210">320 862 6210</a>
                        </div>
                        <h5 class="wow fadeInUp">INFORMAZIONI NEGOZIO</h5>
                        <p class="infor wow fadeInUp">Piazza Cesare Battisti 3, Novellara, Reggio Emilia</p>
                        <p class="infor wow fadeInUp">
                            <a href="mailto:info@tortelliamo.it">info@tortelliamo.it</a>
                        </p>
                        <p class="infor wow fadeInUp">Lun - Dom: 9:00 - 14:00, 16:00 - 20:00, Festivi: Chiuso</p>
                    </div>
                    <a href="https://maps.google.com/?q=Piazza+Cesare+Battisti+3+Novellara" 
                       target="_blank" 
                       class="tf-btn btn-color-secondary btn-switch-text wow fadeInUp">
                        <span>
                            <span class="btn-double-text" data-text="Indicazioni stradali">Indicazioni stradali</span>
                        </span>
                    </a>
                </div>
                <div class="col-xl-4">
                    <div class="map-box relative h-full wow fadeInRight">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2826.8!2d10.7333!3d44.8500!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478014e0a0a0a0a0%3A0x0!2sPiazza%20Cesare%20Battisti%203%2C%20Novellara%2C%20RE!5e0!3m2!1sit!2sit!4v1234567890" 
                            width="100%" 
                            height="100%" 
                            style="border:0; min-height: 400px;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection

@push('scripts')
<script>
    // Inizializzazione mappa (esempio con Mapbox o Google Maps)
    document.addEventListener('DOMContentLoaded', function() {
        // Aggiungi qui il codice per inizializzare la mappa
        console.log('Mappa pronta per l\'inizializzazione');
    });
</script>
@endpush