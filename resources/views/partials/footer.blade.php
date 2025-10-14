<footer id="footer" class="footer">
    <div class="wrap-footer">
        <div class="footer-body">
            <div class="tf-container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="footer-info">
                            <div class="footer-logo">
                                <a href="{{ route('home') }}">
                                    <img id="logo_footer" 
                                         alt="Tortelliamo" 
                                         src="{{ asset('images/logo/logo_tortelliamo.png') }}"
                                         data-retina="{{ asset('images/logo/logo_tortelliamo.png') }}">
                                </a>
                            </div>
                            <p class="text">
                                Il nostro concetto di gastronomia è ispirato alla tradizione culinaria emiliana,
                                con un focus sulla pasta fresca fatta a mano. Scopri i nostri prodotti artigianali
                            </p>
                            <ul class="tf-social-icon flex items-center gap-10">
                                <li><a href="#" target="_blank"><i class="icon-fb"></i></a></li>
                                <li><a href="#" target="_blank"><i class="icon-trip"></i></a></li>
                                <li><a href="mailto:info@tortelliamo.it"><i class="icon-envelope-o"></i></a></li>
                                <li><a href="#" target="_blank"><i class="icon-instagram2"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="footer-menu-list">
                            <h4 class="title fw-7">ORARI DI APERTURA</h4>
                            <ul>
                                <li>Lun - Ven: 9:00 - 14:00, 16:00 - 20:00</li>
                                <li>Sab: 9:00 - 14:00, 16:00 - 20:00</li>
                                <li>Dom: 9:00 - 14:00</li>
                                <li>Festivi: Chiuso</li>
                                <li>Orario produzione: 5:00 - 12:00</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="footer-menu-list location">
                            <h4 class="title fw-7">DOVE SIAMO</h4>
                            <ul>
                                <li>
                                    <div class="text">
                                        <span>Indirizzo</span><br>
                                        <p>Piazza Cesare Battisti 3</p>
                                        <p>Novellara, Reggio Emilia, Italia</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="text">
                                        <span>Ordini & Contatti:</span>
                                        <p class="mb-9">
                                            <a href="mailto:info@tortelliamo.it">info@tortelliamo.it</a>
                                        </p>
                                        <p>
                                            <a href="tel:3208626210">320 862 6210</a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="footer-menu-list latest-new">
                            <h4 class="title">ULTIME NOVITÀ</h4>
                            <p>Registra la tua email per non perdere novità e offerte speciali!</p>
                            <form class="form-send-email" action="{{ route('newsletter.subscribe') }}" method="POST">
                                @csrf
                                <fieldset>
                                    <input type="email" 
                                           name="email" 
                                           placeholder="Email *" 
                                           aria-required="true"
                                           required>
                                </fieldset>
                                <div class="button-submit">
                                    <button type="submit">
                                        <img src="{{ asset('icons/send.svg') }}" alt="Invia">
                                    </button>
                                </div>
                                <div class="checkbox-item">
                                    <label for="check-1" class="relative">
                                        <input type="checkbox" name="privacy" checked id="check-1" required>
                                        <span class="btn-checkbox"></span>
                                        Accetto la Privacy Policy
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tf-container">
                <div class="row">
                    <div class="footer-bottom">
                        <p>Copyright © {{ date('Y') }} Tortelliamo. Tutti i diritti riservati.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>