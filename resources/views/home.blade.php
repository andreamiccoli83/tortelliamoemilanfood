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
                                             data-src="{{ asset('images/nuove/adriano_disegno.png') }}"
                                             src="{{ asset('images/nuove/adriano_disegno.png') }}" 
                                             alt="Adriano">
                                    </div>
                                    <div class="fade-item fade-item2">
                                        <div class="sub-title text-1">
                                            Ciao sono Adriano
                                        </div>
                                        <div class="under-line">
                                            <img class="lazyload" 
                                                 data-src="{{ asset('images/logo/line.png') }}"
                                                 src="{{ asset('images/logo/line.png') }}" 
                                                 alt="">
                                        </div>
                                    </div>
                                    <h1 class="title fade-item fade-item3 mb-0">
                                        BENVENUTI <br>
                                        DA TORTELLIAMO
                                    </h1>
                                    <p class="sub-title text-1 fade-item fade-item3 mb-0">Gastronomia a Novellara</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="main-content home-page">
    
    <!-- Section Welcome - La Nostra Pasta Fresca -->
    <section id="benvenuti" class="section-welcome section-pasta-fresca" style="padding-top: 100px; padding-bottom: 60px;">
        <div class="tf-container w-1550">
            <!-- Titolo centrato con Adriano a destra -->
            <div class="row" style="margin-bottom: 50px;">
                <div class="col-12">
                    <div class="heading-section text-center" style="position: relative;">
                        <img src="{{ asset('images/nuove/adriano_impasta.png') }}" 
                             alt="Adriano" 
                             class="wow fadeInDown"
                             style="height: 150px; width: auto; margin-bottom: 10px;">
                        <p class="sub-title wow fadeInUp">TRADIZIONE GUARDANDO ALL'INNOVAZIONE</p>
                        <div class="title text-4 wow fadeInUp">LA NOSTRA PASTA FRESCA</div>
                    </div>
                </div>
            </div>
            
            <style>
                .pasta-grid-fix {
                    display: grid !important;
                    grid-template-columns: repeat(2, 1fr) !important;
                    grid-template-rows: repeat(2, 1fr) !important;
                    gap: 8px !important;
                    height: 400px !important;
                    width: 100% !important;
                }
                .pasta-grid-fix .pasta-grid-item {
                    overflow: hidden;
                    border-radius: 8px;
                }
                .pasta-grid-fix .pasta-grid-item img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }
            </style>
            
            <!-- Layout 3 colonne -->
            <div class="row align-items-center justify-content-center">
                <!-- Colonna 1: Griglia 4 foto (2x2) -->
                <div class="col-lg-4">
                    <div class="pasta-grid-fix wow fadeInLeft" data-wow-duration="2s">
                        <div class="pasta-grid-item">
                            <img src="{{ asset('images/nuove/pasta_fresca/cappelletti.jpg') }}" alt="Cappelletti">
                        </div>
                        <div class="pasta-grid-item">
                            <img src="{{ asset('images/nuove/pasta_fresca/lasagne.jpg') }}" alt="Lasagne">
                        </div>
                        <div class="pasta-grid-item">
                            <img src="{{ asset('images/nuove/pasta_fresca/gnocchi.jpg') }}" alt="Gnocchi">
                        </div>
                        <div class="pasta-grid-item">
                            <img src="{{ asset('images/nuove/pasta_fresca/rosette.jpg') }}" alt="Rosette">
                        </div>
                    </div>
                </div>
                
                <!-- Colonna 2: Foto centrale con arco -->
                <div class="col-lg-4">
                    <div class="wrap-image hover-img left mx-auto wow fadeInUp" data-wow-duration="2s">
                        <img class="lazyload" 
                             data-src="{{ asset('images/nuove/pasta-fresca.jpg') }}"
                             src="{{ asset('images/nuove/pasta-fresca.jpg') }}" 
                             alt="Prodotti Tortelliamo" />
                    </div>
                </div>
                
                <!-- Colonna 3: Testo descrittivo -->
                <div class="col-lg-4">
                    <div class="pasta-content">
                        <p class="desc wow fadeInUp" style="font-size: 15px; line-height: 1.7; margin-bottom: 15px;">
                            Non esistono innovazioni senza tradizione. L'innovazione non esclude la tradizione.
                            La nostra pasta è fatta tutti i giorni con prodotti genuini: uova fresche pastorizzate 
                            e soprattutto prodotti locali, quando possibile a km 0.
                        </p>
                        <p class="desc wow fadeInUp" data-wow-delay="0.2s" style="font-size: 15px; line-height: 1.7; margin-bottom: 20px;">
                            Utilizziamo la pastorizzazione del prodotto per garantire la conservazione 
                            e mantenere la freschezza.
                        </p>
                        <ul class="pasta-types wow fadeInUp" data-wow-delay="0.4s" style="list-style: none; padding: 0;">
                            <li style="padding: 8px 0; border-bottom: 1px solid rgba(0,0,0,0.1);"><strong>Pasta ripiena:</strong> tortelli, cappelletti</li>
                            <li style="padding: 8px 0; border-bottom: 1px solid rgba(0,0,0,0.1);"><strong>Pasta al forno:</strong> lasagne, rosette, crespelle</li>
                            <li style="padding: 8px 0; border-bottom: 1px solid rgba(0,0,0,0.1);"><strong>Pasta lunga:</strong> tagliatelle, tagliolini</li>
                            <li style="padding: 8px 0; border-bottom: 1px solid rgba(0,0,0,0.1);"><strong>Pasta al torchio:</strong> gramigna, bigoli, passatelli</li>
                            <li style="padding: 8px 0; border-bottom: 1px solid rgba(0,0,0,0.1);"><strong>Pasta fresca:</strong> gnocchi</li>
                            <li style="padding: 8px 0;"><strong>Pasta vegana</strong></li>
                        </ul>
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
                    <div class="heading-section text-center" style="position: relative;">
                        <img src="{{ asset('images/nuove/adriano_chiude_cappelletti.png') }}" 
                             alt="Adriano" 
                             class="wow fadeInDown"
                             style="height: 150px; width: auto; margin-bottom: 10px;">
                        <p class="sub-title wow fadeInUp">TUTTI I GIORNI</p>
                        <div class="title text-4 wow fadeInUp">GASTRONOMIA</div>
                    </div>
                    <!-- Punti chiave visibili -->
                    <ul class="list-check wow fadeInUp" style="margin-top: 20px; margin-bottom: 30px;">
                        <li><i class="icon-check1"></i> <strong>PIATTI PRONTI</strong> - Pasto completo dagli antipasti ai dolci, da gustare e da asporto</li>
                        <li><i class="icon-check1"></i> <strong>CONSUMO SUL POSTO</strong> - Vieni a trovarci per un pranzo veloce o una pausa gustosa</li>
                        <li><i class="icon-check1"></i> <strong>ORDINA SU WHATSAPP</strong> - Prenota i tuoi piatti preferiti e ritirali quando vuoi</li>
                    </ul>
                </div>
                <div class="swiper-container slide-our-menu">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="our-menu-item hover-img wow fadeInUp">
                                <div class="wrap-image">
                                    <img class="lazyload" 
                                         data-src="{{ asset('images/nuove/banco3.jpg') }}"
                                         src="{{ asset('images/nuove/banco3.jpg') }}" 
                                         alt="Gastronomia" />
                                </div>
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="our-menu-item hover-img wow fadeInUp" data-wow-delay="0.1s">
                                <div class="wrap-image">
                                    <img class="lazyload" 
                                         data-src="{{ asset('images/nuove/banco4.jpg') }}"
                                         src="{{ asset('images/nuove/banco4.jpg') }}" 
                                         alt="Gastronomia" />
                                </div>
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="our-menu-item hover-img wow fadeInUp" data-wow-delay="0.2s">
                                <div class="wrap-image">
                                    <img class="lazyload" 
                                         data-src="{{ asset('images/nuove/banco2.jpg') }}"
                                         src="{{ asset('images/nuove/banco2.jpg') }}" 
                                         alt="Gastronomia" />
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
                                 data-src="{{ asset('images/nuove/prodotti.jpg') }}"
                                 src="{{ asset('images/nuove/prodotti.jpg') }}" 
                                 alt="Sicurezza Alimentare" />
                        </div>
                       {{--  <div class="item1 wow rotateIn" data-wow-duration="2s">
                            <img src="{{ asset('images/nuove/cesto.png') }}" alt="cesto" style="width: 355px; height: 355px; object-fit: contain;">
                        </div> --}}
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="content">
                        <div class="heading-section">
                            <img src="{{ asset('images/nuove/adriano_buono.png') }}" 
                                 alt="Adriano" 
                                 class="wow fadeInDown"
                                 style="height: 150px; width: auto; margin-bottom: 10px;">
                            <p class="sub-title wow fadeInUp">PRODUTTORI LOCALI</p>
                            <div class="title text-4 wow fadeInUp">I NOSTRI PRODOTTI</div>
                            <p class="wow fadeInUp line-clamp-4">
                                Oltre ai nostri piatti, offriamo una selezione di prodotti artigianali 
                                di produttori locali. Qualità e tradizione del territorio.
                            </p>
                        </div>
                        <ul class="list-check wow fadeInUp">
                            <li><i class="icon-check1"></i> Vini: lambrusco e birre artigianali</li>
                            <li><i class="icon-check1"></i> Sughi pronti per pasta</li>
                            <li><i class="icon-check1"></i> Basi, giardiniere, composte e marmellate</li>
                            <li><i class="icon-check1"></i> Liquori artigianali</li>
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

    <!-- Section Best Selling Products -->
    <section id="acquista" class="section-best-selling tf-spacing-2" style="background-color: #f8f5f0; padding-top: 60px;">
        <div class="tf-container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-section">
                        <p class="sub-title wow fadeInUp">I NOSTRI PRODOTTI</p>
                        <div class="title text-4 wow fadeInUp">ACQUISTA ONLINE</div>
                        <div class="wow fadeInUp" style="text-align: center; margin: 20px 0;">
                            <img src="{{ asset('images/nuove/adriano_vespa.png') }}" alt="Spedizioni" style="height: 150px; width: auto;">
                            <p style="font-size: 14px; margin-top: 10px; font-weight: 600; color: var(--Primary);">SPEDIZIONI IN TUTTA ITALIA</p>
                        </div>
                        <p class="wow fadeInUp">
                            Ordina le nostre specialità e ricevile comodamente a casa tua.<br>
                            Pasta fresca, tortelli e prodotti tipici emiliani direttamente dal nostro laboratorio!
                        </p>
                    </div>
                </div>
                
                @if(false)
                @forelse($products as $index => $product)
                <div class="col-lg-4 col-sm-6">
                    <div class="product-item wow fadeInUp" data-wow-delay="{{ $index * 0.1 }}s">
                        <div class="wrap-image">
                            @if($product->image)
                            <img class="lazyload" 
                                data-src="{{ asset($product->image) }}"
                                src="{{ asset($product->image) }}" 
                                alt="{{ $product->name }}" />
                            @else
                            <img class="lazyload" 
                                data-src="{{ asset('images/products/placeholder.jpg') }}"
                                src="{{ asset('images/products/placeholder.jpg') }}" 
                                alt="{{ $product->name }}" />
                            @endif
                        </div>
                        <div class="content">
                            <div class="price">{{ $product->formatted_price }}</div>
                            <h4 class="name">
                                @if($product->stripe_payment_link && $product->stock_available)
                                <a href="{{ $product->stripe_payment_link }}" target="_blank" rel="noopener">
                                    {{ strtoupper($product->name) }}
                                </a>
                                @else
                                <a href="tel:{{ str_replace(' ', '', $contact['phone']) }}">
                                    {{ strtoupper($product->name) }}
                                </a>
                                @endif
                            </h4>
                            <div class="rating">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </div>
                            
                            @if($product->stock_available)
                                @if($product->stripe_payment_link)
                                <!-- Pulsante Ordina con Stripe -->
                                <a href="{{ $product->stripe_payment_link }}" 
                                target="_blank" 
                                rel="noopener"
                                class="tf-btn-default" 
                                style="margin-top: 15px; display: inline-block;">
                                    <i class="icon-shopping-bag"></i> Ordina Ora
                                </a>
                                @else
                                
                                @endif
                            @else
                            <!-- Non disponibile -->
                            <p style="margin-top: 10px; color: #999; font-style: italic;">Non disponibile</p>
                            @endif
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <p style="text-align: center; padding: 40px; font-size: 18px;">
                        Nessun prodotto disponibile al momento. 
                        <a href="tel:{{ str_replace(' ', '', $contact['phone']) }}">Chiamaci</a> per maggiori informazioni.
                    </p>
                </div>
                @endforelse
                @endif

                <div class="col-12">
                    <div class="product-item wow fadeInUp" style="text-align: center; padding: 40px; background: #fff; border: 1px solid rgba(0,0,0,0.08); border-radius: 12px;">
                        <h3 style="margin-bottom: 10px;">Prossimamente in vendita</h3>
                        <p style="margin: 0;">Stiamo preparando alcuni prodotti che saranno disponibili online. Torna a trovarci!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Servizi -->
    <section id="servizi" class="section-testimonial tf-spacing-6">
        <!-- Titolo sezione -->
        <div class="tf-container">
            <div class="heading-section text-center wow fadeInUp" style="margin-bottom: 50px; position: relative;">
                <img src="{{ asset('images/nuove/adriano_servizi.png') }}" 
                     alt="Adriano" 
                     class="wow fadeInDown"
                     style="height: 150px; width: auto; margin-bottom: 10px;">
                <p class="sub-title">COSA FACCIAMO</p>
                <div class="title text-4">I NOSTRI SERVIZI</div>
            </div>
        </div>
        
        <style>
            .service-item .wrap-image {
                height: 280px;
                overflow: hidden;
            }
            .service-item .wrap-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            /* Forza 5 colonne visibili nello slider servizi su desktop larghi */
            @media (min-width: 1280px) {
                .slide-layout-4 .swiper-slide {
                    width: 20% !important; /* 5 colonne */
                    margin-right: 0 !important; /* evita overflow dato dallo spaceBetween */
                }
                /* Evita lo "slittamento": nessuna trasformazione del wrapper e cursore normale */
                .slide-layout-4 .swiper-wrapper {
                    transform: none !important;
                    transition: none !important;
                }
                .slide-layout-4 .swiper-container,
                .slide-layout-4 .swiper-wrapper {
                    cursor: default !important;
                }
            }
        </style>
        
        <div class="wrap-service-item">
            <div class="swiper-container slide-layout-4 mb-0">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="service-item wow fadeInUp" data-gallery="catering">
                            <div class="wrap-image">
                                <img class="lazyload" 
                                     data-src="{{ asset('images/nuove/buffet.jpg') }}"
                                     src="{{ asset('images/nuove/buffet.jpg') }}" 
                                     alt="Catering" />
                            </div>
                            <div class="content">
                                <div class="icon">
                                    <i class="icon-serving-dish"></i>
                                </div>
                                <h2>CATERING</h2>
                                <p>
                                    Buffet e banchetti per matrimoni,<br>cerimonie e eventi aziendali.
                                </p>
                                <p style="margin-top: 10px;">
                                    <a href="#" class="open-catering-gallery" style="font-weight: 600; text-decoration: underline;">
                                        Guarda la gallery
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-item wow fadeInUp" data-wow-delay="0.1s" data-gallery="streetfood">
                            <div class="wrap-image">
                                <img class="lazyload" 
                                     data-src="{{ asset('images/nuove/street_food.jpg') }}"
                                     src="{{ asset('images/nuove/street_food.jpg') }}" 
                                     alt="Street Food" />
                            </div>
                            <div class="content">
                                <div class="icon">
                                    <i class="icon-shopping-bag"></i>
                                </div>
                                <h2>STREET FOOD</h2>
                                <p>
                                    Il nostro food truck porta la tradizione<br>emiliana nelle piazze e mercati.
                                </p>
                                <p style="margin-top: 10px;">
                                    <a href="#" class="open-streetfood-gallery" style="font-weight: 600; text-decoration: underline;">
                                        Guarda la gallery
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-item wow fadeInUp" data-wow-delay="0.2s" data-gallery="sagre">
                            <div class="wrap-image">
                                <img class="lazyload" 
                                     data-src="{{ asset('images/nuove/sagre/sagra4.jpg') }}"
                                     src="{{ asset('images/nuove/sagre/sagra4.jpg') }}" 
                                     alt="Sagre" />
                            </div>
                            <div class="content">
                                <div class="icon">
                                    <i class="icon-star"></i>
                                </div>
                                <h2>SAGRE</h2>
                                <p>
                                    Presenti alle sagre locali con tortelli,<br>gnocco fritto e specialità tipiche.
                                </p>
                                <p style="margin-top: 10px;">
                                    <a href="#" class="open-sagre-gallery" style="font-weight: 600; text-decoration: underline;">
                                        Guarda la gallery
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-item wow fadeInUp" data-wow-delay="0.3s" data-gallery="eventi">
                            <div class="wrap-image">
                                <img class="lazyload" 
                                     data-src="{{ asset('images/nuove/eventi/eventi7.jpg') }}"
                                     src="{{ asset('images/nuove/eventi/eventi7.jpg') }}" 
                                     alt="Eventi" />
                            </div>
                            <div class="content">
                                <div class="icon">
                                    <i class="icon-cake"></i>
                                </div>
                                <h2>EVENTI</h2>
                                <p>
                                    Feste private, compleanni e ricorrenze<br>con menù personalizzati su richiesta.
                                </p>
                                <p style="margin-top: 10px;">
                                    <a href="#" class="open-eventi-gallery" style="font-weight: 600; text-decoration: underline;">
                                        Guarda la gallery
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-item wow fadeInUp" data-wow-delay="0.4s" data-gallery="truck">
                            <div class="wrap-image">
                                <img class="lazyload" 
                                     data-src="{{ asset('images/nuove/truck/truck00.jpg') }}"
                                     src="{{ asset('images/nuove/truck/truck00.jpg') }}" 
                                     alt="Food Truck" />
                            </div>
                            <div class="content">
                                <div class="icon">
                                    <i class="icon-shopping-bag"></i>
                                </div>
                                <h2>FOOD TRUCK</h2>
                                <p>
                                    Il nostro truck porta i sapori emiliani<br>direttamente ai tuoi eventi.
                                </p>
                                <p style="margin-top: 10px;">
                                    <a href="#" class="open-truck-gallery" style="font-weight: 600; text-decoration: underline;">
                                        Guarda la gallery
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Team -->
    <section id="team" class="section-post tf-spacing-5 pt-0">
        <div class="box-post default" data-wow-delay="0.1s">
            <div class="wrap-content">
                <div class="content wow fadeInUp">
                    <div style="margin-bottom: 20px;">
                        <img src="{{ asset('images/nuove/adriano_team.png') }}" 
                             alt="Adriano" 
                             style="height: 150px; width: auto;">
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
       
        <div class="wrap-image">
            <img class="lazyload" 
                 data-src="{{ asset('images/nuove/staff.jpg') }}"
                 src="{{ asset('images/nuove/staff.jpg') }}" 
                 alt="Il nostro team" />
        </div>
        <div class="wrap-image">
            <img class="lazyload" 
                 data-src="{{ asset('images/nuove/team02.jpg') }}"
                 src="{{ asset('images/nuove/team02.jpg') }}" 
                 alt="Il nostro team" />
        </div>
        <div class="wrap-image">
            <img class="lazyload" 
                 data-src="{{ asset('images/nuove/staff1.jpg') }}"
                 src="{{ asset('images/nuove/staff1.jpg') }}" 
                 alt="Il nostro team" />
        </div>
         
    </section>

    <!-- Section Location/Contact -->
    <section id="contatti" class="section-location" style="padding-top: 150px; padding-bottom: 135px;">
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
                        <div class="heading-section text-center wow fadeInUp" style="position: relative;">
                            <img src="{{ asset('images/nuove/adriano_dove_siamo.png') }}" 
                                 alt="Adriano" 
                                 class="wow fadeInDown"
                                 style="height: 150px; width: auto; margin-bottom: 10px;">
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
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2828.8814814289476!2d10.728671999899326!3d44.84434694214133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47802093c72814e7%3A0xb918086d60542d3!2sPiazza%20Cesare%20Battisti%2C%203%2C%2042017%20Novellara%20RE!5e0!3m2!1sit!2sit!4v1765827970945!5m2!1sit!2sit" 
                            width="100%" 
                            height="100%" 
                            style="border:0; min-height: 400px; border-radius: 50%;" 
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