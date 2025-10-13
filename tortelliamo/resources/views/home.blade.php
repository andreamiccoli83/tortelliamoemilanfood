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
                                Ogni giorno prepariamo pasta fresca e specialità seguendo le antiche ricette emiliane,
                                utilizzando solo ingredienti di prima qualità.
                            </p>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                        <div id="map">MAPPA</div>
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