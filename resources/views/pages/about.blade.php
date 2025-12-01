@extends('layouts.base2')

@section('content')

 <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-b.jpg">
        <div class="breadcumb-overlay" data-bg-src="assets/img/bg/breadcumb-bg-overlay.png">

        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">
                            About Us</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">
                                    Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="overflow-hidden space-top bg-black2" id="about-sec">
    <div class="container">
        <div class="row justify-content-between align-items-center" >
            <div class="col-lg-12">
                <div class="title-area">
                    <span class="shadow-title">Introduction</span>
                    <h2 class="sec-title text-white">Who we are</h2>
                    <p class="sec-text text-white" id="vision-mission">BONSTRUCTION ENGINEERING is a dynamic construction engineering company committed to shaping modern infrastructure through innovation, precision, and excellence. We specialize in delivering high-quality engineering and construction solutions that meet today's standards and tomorrow's expectations.</p>
                </div>
            </div>
        </div>

        <!-- Mission & Vision Section -->
        <div class="row gy-4 mt-40" >
            <div class="col-lg-6">
                <div class="mission-vision-card">
                    <div class="card-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="card-title text-white">Our Mission</h3>
                    <p class="card-text text-white">To deliver innovative, high-quality, and sustainable construction engineering solutions that exceed client expectations while upholding the highest levels of professionalism, precision, and safety.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mission-vision-card">
                    <div class="card-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="card-title text-white">Our Vision</h3>
                    <p class="card-text text-white">To become a leading and widely trusted construction engineering firm recognized for superior project delivery, modern engineering solutions, and impactful contributions to infrastructure development across Africa and beyond.</p>
                </div>
            </div>
        </div>

        <div class="row gy-4 mt-10">
            <div class="col-lg-6">
                <div class="img-box1">
                    <div class="img1 img-shine" data-mask-src="assets/img/shape/about-1-mask.png">
                        <img src="assets/img/normal/about_1_1.png" alt="Modern Infrastructure Construction">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="img-box1">
                    <div class="img1 img-shine" data-mask-src="assets/img/shape/about-1-mask.png">
                        <img src="assets/img/normal/about_1_2.png" alt="Engineering Precision">
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-60">
            <div class="row gy-40 flex-row-reverse">
                <div class="col-xl-3 text-xl-end">
                    <div class="about-tag">
                        <div class="about-experience-tag">
                            <span class="circle-title-anime">Engineering Excellence<i class="fas fa-star"></i>
                            </span>
                        </div>
                        <div class="about-tag-thumb">
                            <img src="assets/img/normal/about_1_3.png" alt="Quality Construction">
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="about-wrap1">
                        <p class="sec-text text-white">At BONSTRUCTION ENGINEERING, quality and safety are at the heart of everything we do. We leverage modern technologies and advanced engineering practices to ensure projects are delivered on time, within budget, and to the highest levels of craftsmanship.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<section class="service-area-1 overflow-hidden space-bottom bg-black2 pt-80">
    <div class="container">
        <div class="row justify-content-center text-center mb-60">
            <div class="col-lg-8">
                <div class="title-area">
                    <span class="shadow-title">Services</span>
                    <h2 class="sec-title text-white">Our Services</h2>
                    <p class="sec-text text-white">Comprehensive construction engineering solutions</p>
                </div>
            </div>
        </div>
        <div class="row gy-40">
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-card-icon">
                        <div class="icon">
                            <img src="assets/img/icon/service-icon1-1.png" alt="Construction Services">
                        </div>
                    </div>
                    <div class="box-content">
                        <h3 class="box-title"><a href="service-details">Construction</a></h3>
                        <p class="box-text">Residential, commercial & industrial building with quality standards.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-card-icon">
                        <div class="icon">
                            <img src="assets/img/icon/service-icon1-2.png" alt="Civil & Structural Engineering">
                        </div>
                    </div>
                    <div class="box-content">
                        <h3 class="box-title"><a href="service-details">Engineering</a></h3>
                        <p class="box-text">Structural design, roads, bridges and foundation engineering.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-card-icon">
                        <div class="icon">
                            <img src="assets/img/icon/service-icon1-3.png" alt="Project Management">
                        </div>
                    </div>
                    <div class="box-content">
                        <h3 class="box-title"><a href="service-details">Project Management</a></h3>
                        <p class="box-text">Expert coordination from planning to quality assurance.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-card-icon">
                        <div class="icon">
                            <img src="assets/img/icon/service-icon1-5.png" alt="Infrastructure Development">
                        </div>
                    </div>
                    <div class="box-content">
                        <h3 class="box-title"><a href="service-details">Infrastructure</a></h3>
                        <p class="box-text">Urban development, water systems and comprehensive planning.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <div class="space">
        <div class="container">
            <div class="counter-card-wrap ">
                <div class="counter-card">
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number">20</span>+</h2>
                        <p class="box-text">PROJECTS COMPLETED</p>
                    </div>
                </div>
                <div class="counter-card">
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number">100</span>%</h2>
                        <p class="box-text">QUALITY ASSURED</p>
                    </div>
                </div>
                <div class="counter-card">
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number">3</span>+</h2>
                        <p class="box-text">YEARS EXPERIENCE</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
<section class="space bg-black2 position-relative" id="process-area2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7">
                <div class="title-area text-center">
                    <h2 class="sec-title text-white">Our Approach</h2>
                    <p class="sec-text text-white">
                        A value-driven methodology ensuring precision, quality, and sustainability in every project.
                    </p>
                </div>
            </div>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-xl-4 col-md-6">
                <div class="process-card2" data-bg-src="assets/img/bg/process-card2-bg.png">
                    <div class="box-icon">
                        <img src="assets/img/icon/process_card_2_1.svg" alt="Planning">
                    </div>
                    <div class="box-content">
                        <h3 class="box-title">Client Planning</h3>
                        <p class="box-text">
                            Understanding client goals through feasibility studies and detailed project planning.
                        </p>
                        <p class="box-number">Step 01</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="process-card2" data-bg-src="assets/img/bg/process-card2-bg.png">
                    <div class="box-icon">
                        <img src="assets/img/icon/process_card_2_2.svg" alt="Engineering">
                    </div>
                    <div class="box-content">
                        <h3 class="box-title">Precision Engineering</h3>
                        <p class="box-text">
                            Innovative structural designs using advanced technologies and sustainable practices.
                        </p>
                        <p class="box-number">Step 02</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="process-card2" data-bg-src="assets/img/bg/process-card2-bg.png">
                    <div class="box-icon">
                        <img src="assets/img/icon/process_card_2_3.svg" alt="Construction">
                    </div>
                    <div class="box-content">
                        <h3 class="box-title">Quality Construction</h3>
                        <p class="box-text">
                            High-standard execution with rigorous quality control and safety protocols.
                        </p>
                        <p class="box-number">Step 03</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <div class="bg-smoke3" id="corporate-values">
        <div class="container" >
            <div class="video-area-1-1 space-bottom position-relative" data-sec-pos="top-half"
                data-pos-for="#process-area2">
                <div class="video-wrap1 style2 overflow-hidden">
                     <div class="video-box1" data-overlay="black2" data-opacity="3"
                    data-mask-src="assets/img/shape/video_1_1_mask.png"><img src="assets/img/normal/video_1_1.png"
                        alt="img"> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                        class="play-btn style3 popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                    @include('components.why-choose-us')
                </div>
            </div>
        </div>
    </div>
    <div id="our-team"></div>
    @include('components.team-section', [
        'teamAreaClass' => 'team-area-9 overflow-hidden bg-smoke3 space-bottom',
        'textColor' => 'text-black',
        'buttonEnabled' => 'd-none'
        ])
    <section class=" testi-sec-1 overflow-hidden space overflow-hidden">
        <div class="container">
                @include('components.testimonies')
                <div id="our-clientele"></div>
                @include('components.clientel-area')
        </div>
    </section>

@endsection



