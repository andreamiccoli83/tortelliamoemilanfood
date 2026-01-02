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
                                <li><a href="https://www.instagram.com/tortelliamoemilianfood/" target="_blank" rel="noopener"><i class="icon-instagram2"></i></a></li>
                                <li><a href="https://www.facebook.com/TortelliAmoFoodLab/" target="_blank" rel="noopener"><i class="icon-fb"></i></a></li>
                                <li><a href="https://www.tripadvisor.it/Restaurant_Review-g1785702-d28254988-Reviews-Tortelliamo-Novellara_Province_of_Reggio_Emilia_Emilia_Romagna.html?m=69573" target="_blank" rel="noopener"><i class="icon-trip"></i></a></li>
                                <li><a href="https://wa.me/393208626210" target="_blank" rel="noopener"><i class="icon-phone"></i></a></li>
                                 <li><a href="mailto:info@tortelliamo.it"><i class="icon-envelope-o"></i></a></li>
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
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="footer-menu-list latest-new">
                            <h4 class="title">ORDINI & CONTATTI</h4>
                            <p class="mb-9">
                                <a href="mailto:info@tortelliamo.it">info@tortelliamo.it</a>
                            </p>
                            <p class="mb-9">
                                <a href="tel:3208626210">320 862 6210</a>
                            </p>
                            
                            <div style="margin-top: 20px;">
                                <a href="https://www.toogoodtogo.com/it/find/novellara/tortelliamo/bakedgoods/salvailnatale2-1601108" 
                                   target="_blank"
                                   rel="noopener"
                                   style="display: inline-block;">
                                    <img src="{{ asset('images/logo/TGTG.png') }}" 
                                         alt="Too Good To Go" 
                                         style="max-width: 80px; height: auto;">
                                </a>
                            </div>
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