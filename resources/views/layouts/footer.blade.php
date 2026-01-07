    <footer class="footer-wrapper footer-layout1 bg-black2">
        <div class="footer-wrap bg-white" data-mask-src="assets/img/bg/footer-bg-mask.png">
            <div class="widget-area space">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-6 col-xl-4">
                            <div class="widget footer-widget">
                                <div class="th-widget-about">
                                    <div class="about-logo"><a href="index.html"><img src="assets/img/logo-blac.png"
                                                alt="Builda"></a></div>
                                    <p class="about-text">
                                        Bonstruction Engineering delivers reliable, safe, and innovative construction and project management solutions across Nigeria.
                                    </p>
                                    <div class="th-social style7"><a href="https://www.facebook.com/"><i
                                                class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i
                                                class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i
                                                class="fab fa-linkedin-in"></i></a> <a
                                            href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a> <a
                                            href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget footer-widget">
                                <h3 class="widget_title">Get In Touch</h3>
                                <div class="th-widget-contact">
                                    <div class="info-box_text">
                                        <div class="icon"><img src="assets/img/icon/location-dot.svg" alt="img"></div>
                                        <div class="details">
                                            <p>No. 3, Kaltungo Street,</p>
                                            <p>Garki II, Abuja</p>
                                        </div>
                                    </div>
                                    <div class="info-box_text">
                                        <div class="icon"><img src="assets/img/icon/phone.svg" alt="img"></div>
                                        <div class="details">
                                            <p><a href="tel:+2348168445981" class="info-box_link">+234 816 844 5981</a></p>
                                            <p><a href="tel:+2348123059106" class="info-box_link">+234 812 305 9106</a></p>
                                        </div>
                                    </div>
                                    <div class="info-box_text">
                                        <div class="icon"><img src="assets/img/icon/envelope.svg" alt="img"></div>
                                        <div class="details">
                                            <p><a href="mailto:info@bonstruction.com"
                                                    class="info-box_link">info@bonstruction.com</a></p>
                                                     <p><a href="mailto:info@bonstruction.com"
                                                    class="info-box_link">support@bonstruction.com</a></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget widget_nav_menu footer-widget">
                                <h3 class="widget_title">Useful Link</h3>
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        <li><a href="/about">About us</a></li>
                                        <li><a href="/services">Featured Projects</a></li>
                                        <li><a href="/services">Our Best Services</a></li>
                                        <li><a href="/contact">Request Visit</a></li>
                                        <li><a href="/contact">FAQ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto d-none">
                            <div class="widget widget_nav_menu footer-widget">
                                <h3 class="widget_title">Explore</h3>
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        <li><a href="service.html">All Properties</a></li>
                                        <li><a href="team.html">Our Agents</a></li>
                                        <li><a href="service.html">All Projects</a></li>
                                        <li><a href="about.html">Our Process</a></li>
                                        <li><a href="contact.html">Neighborhood</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="newsletter-wrap style3">
                        <h5 class="newsletter-title">Newsletter To Get Updated The Latest News</h5>
                        <form action="#" class="newsletter-form">
                            <div class="form-group"><input type="text" class="form-control" placeholder="Enter Email">
                            </div><button class="th-btn btn-mask">Subscribe Now <span class="btn-icon"><img
                                        src="assets/img/icon/paper-plane.svg" alt="img"></span></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row gy-2 align-items-center">
                        <div class="col-lg-6">
                            <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2025 <a
                                    href="https://vicsystems.us"> Developed by vicSystems Technologies Ltd. </a></p>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end">
                            <div class="footer-links">
                                <ul>
                                    <li><a href="/terms">Terms of service</a></li>
                                    <li><a href="/privacy-policy">Privacy policy</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Cookie consent popup -->
    <div id="cookie-consent" class="cookie-consent" role="dialog" aria-live="polite" aria-label="cookie consent">
        <div class="cookie-content">
            <div class="cookie-text">
                <p>We use cookies to enhance your experience on our site. <br> By continuing, you agree to our use of cookies. <a href="/privacy-policy" class="underline">Learn more</a></p>
            </div>
            <div class="cookie-actions" style="display:flex;gap:8px;align-items:center">
                <button id="cookie-accept" class="th-btn ">Allow cookies</button>
                <button id="cookie-reject" class="th-btn ">Reject</button>
                <button id="cookie-close" class="th-btn btn-secondary">Close</button>
            </div>
        </div>
    </div>

    <script>
        (function(){
            const key = 'cookieConsent';
            const banner = document.getElementById('cookie-consent');
            const accept = document.getElementById('cookie-accept');
            const reject = document.getElementById('cookie-reject');
            const closeBtn = document.getElementById('cookie-close');

            function show(){ if(!banner) return; banner.classList.add('show'); }
            function hide(){ if(!banner) return; banner.classList.remove('show'); }

            document.addEventListener('DOMContentLoaded', function(){
                if(!localStorage.getItem(key)) show();
            });

            if(accept){ accept.addEventListener('click', function(){ localStorage.setItem(key,'accepted'); hide(); /* fire analytics here */ }); }
            if(reject){ reject.addEventListener('click', function(){ localStorage.setItem(key,'rejected'); hide(); }); }
            if(closeBtn){ closeBtn.addEventListener('click', function(){ hide(); }); }
        })();
    </script>

    <!-- New Year Modal -->
    <style>
    /* New Year modal styles */
    #newYearModal{display:none;position:fixed;inset:0;z-index:9999;font-family:inherit}
    #newYearModal.show{display:block}
    #newYearModal .ny-overlay{position:fixed;inset:0;background:rgba(0,0,0,.6)}
    #newYearModal .ny-content{position:fixed;left:50%;top:50%;transform:translate(-50%,-50%);max-width:90%;max-height:90%;border-radius:8px;overflow:hidden;display:flex;align-items:center;justify-content:center;background:transparent;padding:0}
    #newYearModal .ny-image{max-width:100%;max-height:100%;display:block}
    #newYearModal .ny-close{position:absolute;top:8px;right:8px;z-index:10001;background:rgba(255,255,255,.95);border:none;padding:6px 10px;border-radius:6px;cursor:pointer;font-weight:600}
    @media (max-width:480px){ #newYearModal .ny-close{top:6px;right:6px;padding:5px 8px} }
    </style>

    <div id="newYearModal" class="" aria-hidden="true" role="dialog" aria-label="New Year Message">
        <div class="ny-overlay" id="nyOverlay"></div>
        <div class="ny-content" role="document">
            <button id="nyClose" class="ny-close" aria-label="Close">Cancel</button>
            <img src="/assets/img/newyear.jpg" alt="Happy New Year" class="ny-image">
        </div>
    </div>

    <script>
        (function(){
            var modal = document.getElementById('newYearModal');
            var overlay = document.getElementById('nyOverlay');
            var close = document.getElementById('nyClose');

            function show(){ if(!modal) return; modal.classList.add('show'); modal.setAttribute('aria-hidden','false'); }
            function hide(){ if(!modal) return; modal.classList.remove('show'); modal.setAttribute('aria-hidden','true'); }

            document.addEventListener('DOMContentLoaded', function(){
                // show modal after a tiny delay so it's noticeable
                setTimeout(show, 250);
            });

            if(overlay) overlay.addEventListener('click', hide);
            if(close) close.addEventListener('click', hide);
            document.addEventListener('keydown', function(e){ if(e.key === 'Escape') hide(); });
        })();
    </script>

    </footer>
