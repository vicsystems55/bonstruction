<div class="th-menu-wrapper onepage-nav">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo"><a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo-whit.png') }}"
                    alt="Bonstruction"></a></div>
        <div class="th-mobile-menu allow-natural-scroll">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="menu-item-has-children">
                    <a href="#">
                        Company</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ route('about') }}">
                                About Us</a>
                        </li>
                        <li>
                            <a href="#">
                                Vision & Mission</a>
                        </li>

                        <li>
                            <a href="#">
                                Board of Directors</a>
                        </li>


                    </ul>
                </li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('projects') }}">Projects</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>
