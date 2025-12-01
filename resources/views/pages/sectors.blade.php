@extends('layouts.base2')

@section('content')

    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
            <div class="breadcumb-overlay" data-bg-src="assets/img/bg/breadcumb-bg-overlay.png">

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">
                            Sectors</h1>
                            <ul class="breadcumb-menu">
                                <li>
                                    <a href="index.html">
                                        About us</a>
                                </li>
                                <li>
                                    Sectors</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


            <section class="space overflow-hidden">
        <div class="sec-bg-shape2-1 spin shape-mockup d-xl-block d-none" data-top="6%" data-left="4%">
            <img src="assets/img/shape/section_shape_2_1.jpg" alt="img">
        </div>
        <div class="sec-bg-shape2-2 wave-anim shape-mockup d-xl-block d-none"
            data-bg-src="assets/img/shape/section_shape_2_2.jpg" data-top="12%" data-right="4%">

        </div>
        <div class="sec-bg-shape2-3 jump shape-mockup d-xl-block d-none" data-bottom="0" data-left="3%">
            <img src="assets/img/shape/section_shape_2_3.jpg" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xxl-6 col-lg-8">
                    <div class="title-area text-center">
                        <span class="sub-title text-title">
                           Explore Sectors</span>
                        {{-- <h2 class="sec-title">
                            Recent Ongoing Projects</h2>
                        <p>Quis nulla blandit vulputate morbi adipiscing sem vestibulum. Nulla turpis integer dui sed
                            posuere sem. Id molestie mi arcu gravida lorem potenti.</p> --}}
                    </div>
                </div>
            </div>
        </div>
   <div class="container-fluid p-lg-0">
    <div class="slider-area project-slider4 slider-drag-wrap">
        <div class="swiper th-slider"
            data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2.5"},"1500":{"slidesPerView":"2.5","spaceBetween":"64"}},"grabCursor":"true","slideToClickedSlide":"true","centeredSlides": "true"}'>
            <div class="swiper-wrapper">
                <!-- Infrastructure -->
                <div class="swiper-slide">
                    <div class="portfolio-card style4">
                        <div class="portfolio-img">
                            <img src="assets/img/project/project_4_1.png" alt="Infrastructure Project">
                        </div>
                        <div class="portfolio-content">
                            <h3 class="portfolio-title">
                                <a href="service-details.html">
                                    Infrastructure Development</a>
                            </h3>
                            <p class="portfolio-location">
                                Roads, Bridges & Public Works</p>
                            <p class="portfolio-text">
                                Comprehensive infrastructure solutions including highways, bridges, and urban development projects that enhance connectivity and economic growth.</p>
                        </div>
                    </div>
                </div>

                <!-- Housing -->
                <div class="swiper-slide">
                    <div class="portfolio-card style4">
                        <div class="portfolio-img">
                            <img src="assets/img/project/project_4_2.png" alt="Housing Project">
                        </div>
                        <div class="portfolio-content">
                            <h3 class="portfolio-title">
                                <a href="service-details.html">
                                    Residential Housing</a>
                            </h3>
                            <p class="portfolio-location">
                                Housing Development</p>
                            <p class="portfolio-text">
                                Quality residential construction including affordable housing, residential estates, and community development projects for sustainable living.</p>
                        </div>
                    </div>
                </div>

                <!-- Energy & Renewable Resources -->
                <div class="swiper-slide">
                    <div class="portfolio-card style4">
                        <div class="portfolio-img">
                            <img src="assets/img/project/project_4_3.png" alt="Energy Project">
                        </div>
                        <div class="portfolio-content">
                            <h3 class="portfolio-title">
                                <a href="service-details.html">
                                    Energy & Renewable Resources</a>
                            </h3>
                            <p class="portfolio-location">
                                Sustainable Energy Solutions</p>
                            <p class="portfolio-text">
                                Development of renewable energy infrastructure including solar farms, wind energy projects, and sustainable power generation facilities.</p>
                        </div>
                    </div>
                </div>

                <!-- Power & Electrification -->
                <div class="swiper-slide">
                    <div class="portfolio-card style4">
                        <div class="portfolio-img">
                            <img src="assets/img/project/project_4_4.png" alt="Power Project">
                        </div>
                        <div class="portfolio-content">
                            <h3 class="portfolio-title">
                                <a href="service-details.html">
                                    Power & Electrification</a>
                            </h3>
                            <p class="portfolio-location">
                                Electrical Infrastructure</p>
                            <p class="portfolio-text">
                                Power distribution systems, substations, and electrification projects that bring reliable electricity to communities and industries.</p>
                        </div>
                    </div>
                </div>

                <!-- Oil & Gas -->
                <div class="swiper-slide">
                    <div class="portfolio-card style4">
                        <div class="portfolio-img">
                            <img src="assets/img/project/project_4_5.png" alt="Oil & Gas Project">
                        </div>
                        <div class="portfolio-content">
                            <h3 class="portfolio-title">
                                <a href="service-details.html">
                                    Oil & Gas Infrastructure</a>
                            </h3>
                            <p class="portfolio-location">
                                Energy Sector Construction</p>
                            <p class="portfolio-text">
                                Specialized construction for oil and gas facilities including pipelines, storage terminals, and processing plants with safety compliance.</p>
                        </div>
                    </div>
                </div>

                <!-- Ocean & Water Resources -->
                <div class="swiper-slide">
                    <div class="portfolio-card style4">
                        <div class="portfolio-img">
                            <img src="assets/img/project/project_4_6.png" alt="Water Resources Project">
                        </div>
                        <div class="portfolio-content">
                            <h3 class="portfolio-title">
                                <a href="service-details.html">
                                    Ocean & Water Resources</a>
                            </h3>
                            <p class="portfolio-location">
                                Water Management Systems</p>
                            <p class="portfolio-text">
                                Water resource projects including dams, irrigation systems, water treatment plants, and coastal protection infrastructure.</p>
                        </div>
                    </div>
                </div>

                <!-- Defense & Military -->
                <div class="swiper-slide">
                    <div class="portfolio-card style4">
                        <div class="portfolio-img">
                            <img src="assets/img/project/project_4_7.png" alt="Defense Project">
                        </div>
                        <div class="portfolio-content">
                            <h3 class="portfolio-title">
                                <a href="service-details.html">
                                    Defense & Military Infrastructure</a>
                            </h3>
                            <p class="portfolio-location">
                                Strategic Facilities</p>
                            <p class="portfolio-text">
                                Secure construction projects including military bases, defense facilities, and strategic infrastructure with enhanced security features.</p>
                        </div>
                    </div>
                </div>

                <!-- Transport -->
                <div class="swiper-slide">
                    <div class="portfolio-card style4">
                        <div class="portfolio-img">
                            <img src="assets/img/project/project_4_8.png" alt="Transport Project">
                        </div>
                        <div class="portfolio-content">
                            <h3 class="portfolio-title">
                                <a href="service-details.html">
                                    Transport Infrastructure</a>
                            </h3>
                            <p class="portfolio-location">
                                Transportation Networks</p>
                            <p class="portfolio-text">
                                Airports, seaports, railway systems, and logistics hubs that facilitate efficient movement of goods and people across regions.</p>
                        </div>
                    </div>
                </div>

                <!-- Mining -->
                <div class="swiper-slide">
                    <div class="portfolio-card style4">
                        <div class="portfolio-img">
                            <img src="assets/img/project/project_4_9.png" alt="Mining Project">
                        </div>
                        <div class="portfolio-content">
                            <h3 class="portfolio-title">
                                <a href="service-details.html">
                                    Mining Infrastructure</a>
                            </h3>
                            <p class="portfolio-location">
                                Mining & Extraction Facilities</p>
                            <p class="portfolio-text">
                                Mining site development, processing plants, and related infrastructure for efficient and sustainable mineral resource extraction.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-pagination style3 d-sm-block d-none">
            </div>
        </div>
    </div>
    <div class="btn-wrap justify-content-center mt-55">
        {{-- <a href="project.html" class="th-btn style3 th-btn-icon">
            Explore All Sectors</a> --}}
    </div>
</div>
    </section>



@endsection
