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
                            Projects</h1>
                        <ul class="breadcumb-menu">
                            <li>
                                <a href="index.html">
                                    Home</a>
                            </li>
                            <li>
                                Projects</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="new-projects"></div>
    <section class="space bg-light1 overflow-hidden" id="property-sec">
        <div class="project-bg-shape2-1 sec-bg-shape2-1 text-white jump shape-mockup" data-bottom="9%" data-left="3%">
            <img src="assets/img/shape/section_shape_2_3.jpg" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-xxl-6 col-xl-7 col-lg-6">
                    <div class="title-area">
                        <span class="sub-title5 text-whit">
                            <span class="line line1">

                            </span> Our Projects</span>
                        <h2 class="sec-title text-whit">
                            Completed Projects</h2>
                        <p class="sec-text text-whit">
                        </p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn d-none">
                        <a href="project.html" class="th-btn style-border3 th-btn-icon">
                            Browse All Project</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="slider-area project-slider2">
                <div class="swiper th-slider" id="projectSlider2"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="portfolio-card style1">
                                <div class="portfolio-img img-shine" data-bs-toggle="modal"
                                    data-bs-target="#portfolioModal">
                                    <img src="assets/img/project/completed1.png" alt="project image">
                                    {{-- <div class="portfolio-card-shape">
                                        <img src="assets/img/project/project_shape1_1.png" alt="img">
                                    </div> --}}
                                </div>
                                <div class="portfolio-content d-non">
                                    <h3 class="portfolio-title">
                                        <a href="#">
                                            2025/26</a>
                                    </h3>
                                    <p class="portfolio-text">
                                        WATER SUPPLIES IN BUJI LGA, JIGAWA STATE (AGENCY) HADEJIA
                                        JAMAARE RIVER
                                        BASIN DEVELOPMENT AUTHORITY</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="portfolio-card style2">
                                <div class="portfolio-img img-shine" data-bs-toggle="modal"
                                    data-bs-target="#portfolioModal">
                                    <img src="assets/img/project/completed2.png" alt="project image">
                                    {{-- <div class="portfolio-card-shape">
                                        <img src="assets/img/project/project_shape1_1.png" alt="img">
                                    </div> --}}
                                </div>
                                <div class="portfolio-content d-none">
                                    <h3 class="portfolio-title">
                                        <a href="#">
                                            Dance & Music Theatre</a>
                                    </h3>
                                    <p class="portfolio-text">
                                        Modern architecture is a design approach that emphasizes simplicity,
                                        functionality, and innovation. It moves away from excessive.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="portfolio-card style2">
                                <div class="portfolio-img img-shine" data-bs-toggle="modal"
                                    data-bs-target="#portfolioModal">
                                    <img src="assets/img/project/completed3.png" alt="project image">
                                    {{-- <div class="portfolio-card-shape">
                                        <img src="assets/img/project/project_shape1_1.png" alt="img">
                                    </div> --}}
                                </div>
                                <div class="portfolio-content d-none">
                                    <h3 class="portfolio-title">
                                        <a href="#">
                                            Villa Zuiderpark</a>
                                    </h3>
                                    <p class="portfolio-text">
                                        The project’s architecture expresses complementary features of a villa, made up
                                        of calm, quiet areas designed for family life, as well as reception areas,</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="portfolio-card style1">
                                <div class="portfolio-img img-shine" data-bs-toggle="modal"
                                    data-bs-target="#portfolioModal">
                                    <img src="assets/img/project/completed7.png" alt="project image">
                                    {{-- <div class="portfolio-card-shape">
                                        <img src="assets/img/project/project_shape1_1.png" alt="img">
                                    </div> --}}
                                </div>
                                <div class="portfolio-content d-noe">
                                    <h3 class="portfolio-title">
                                        <a href="#">
                                            2023</a>
                                    </h3>
                                    <p class="portfolio-text">
                                        CONSTRUCTION OF GATE HOUSE AND 3.7KM PERIMETER FENCING IN GASHUA YOBE STATE</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="portfolio-card style2">
                                <div class="portfolio-img img-shine" data-bs-toggle="modal"
                                    data-bs-target="#portfolioModal">
                                    <img src="assets/img/project/completed5.png" alt="project image">
                                    {{-- <div class="portfolio-card-shape">
                                        <img src="assets/img/project/project_shape1_1.png" alt="img">
                                    </div> --}}
                                </div>
                                <div class="portfolio-content d-none">
                                    <h3 class="portfolio-title">
                                        <a href="#">
                                            Dance & Music Theatre</a>
                                    </h3>
                                    <p class="portfolio-text">
                                        Modern architecture is a design approach that emphasizes simplicity,
                                        functionality, and innovation. It moves away from excessive.</p>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="portfolio-card style2">
                                <div class="portfolio-img img-shine" data-bs-toggle="modal"
                                    data-bs-target="#portfolioModal">
                                    <img src="assets/img/project/completed6.png" alt="project image">
                                    {{-- <div class="portfolio-card-shape">
                                        <img src="assets/img/project/project_shape1_1.png" alt="img">
                                    </div> --}}
                                </div>
                                <div class="portfolio-content d-none">
                                    <h3 class="portfolio-title">
                                        <a href="#">
                                            Villa Zuiderpark</a>
                                    </h3>
                                    <p class="portfolio-text">
                                        The project’s architecture expresses complementary features of a villa, made up
                                        of calm, quiet areas designed for family life, as well as reception areas,</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="portfolio-card style2">
                                <div class="portfolio-img img-shine" data-bs-toggle="modal"
                                    data-bs-target="#portfolioModal">
                                    <img src="assets/img/project/completed8.png" alt="project image">
                                    {{-- <div class="portfolio-card-shape">
                                        <img src="assets/img/project/project_shape1_1.png" alt="img">
                                    </div> --}}
                                </div>
                                <div class="portfolio-content d-none">
                                    <h3 class="portfolio-title">
                                        <a href="#">
                                            Villa Zuiderpark</a>
                                    </h3>
                                    <p class="portfolio-text">
                                        The project’s architecture expresses complementary features of a villa, made up
                                        of calm, quiet areas designed for family life, as well as reception areas,</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="portfolio-card style2">
                                <div class="portfolio-img img-shine" data-bs-toggle="modal"
                                    data-bs-target="#portfolioModal">
                                    <img src="assets/img/project/completed9.png" alt="project image">
                                    {{-- <div class="portfolio-card-shape">
                                        <img src="assets/img/project/project_shape1_1.png" alt="img">
                                    </div> --}}
                                </div>
                                <div class="portfolio-content d-none">
                                    <h3 class="portfolio-title">
                                        <a href="#">
                                            Villa Zuiderpark</a>
                                    </h3>
                                    <p class="portfolio-text">
                                        The project’s architecture expresses complementary features of a villa, made up
                                        of calm, quiet areas designed for family life, as well as reception areas,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><button data-slider-prev="#projectSlider2" class="slider-arrow style3 slider-prev">
                    <img src="assets/img/icon/arrow-left.svg" alt="img">
                </button>
            </div>
        </div>
    </section>


    <div id="new-projects"></div>
    <section class="space bg-black overflow-hidden" id="property-sec">
        <div class="project-bg-shape2-1 sec-bg-shape2-1 text-white jump shape-mockup" data-bottom="9%" data-left="3%">
            <img src="assets/img/shape/section_shape_2_3.jpg" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-xxl-6 col-xl-7 col-lg-6">
                    <div class="title-area">
                        <span class="sub-title5 text-white">
                            <span class="line line1">

                            </span> Our Projects</span>
                        <h2 class="sec-title text-white">
                            New Projects</h2>
                        <p class="sec-text text-dark">
                        </p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn d-none">
                        <a href="project.html" class="th-btn style-border3 th-btn-icon">
                            Browse All Project</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="slider-area project-slider2">
                <div class="swiper th-slider" id="projectSlider2"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="portfolio-card style2">
                                <div class="portfolio-img img-shine" data-bs-toggle="modal"
                                    data-bs-target="#portfolioModal">
                                    <img src="assets/img/project/new1.png" alt="project image">
                                    <div class="portfolio-card-shape d-none">
                                        <img src="assets/img/project/new3.png" alt="img">
                                    </div>
                                </div>
                                <div class="portfolio-content ">
                                    <h3 class="portfolio-title ">
                                        <a class="" href="#">
                                            2025/26</a>
                                    </h3>
                                    <p class="portfolio-text ">
                                        SOLAR POWER INSTALLATION TRAINING FOR ARTISANS IN KATSINA CENTRAL SENATORIAL
                                        DISTRICT NASRDA </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="portfolio-card style2">
                                <div class="portfolio-img img-shine" data-bs-toggle="modal"
                                    data-bs-target="#portfolioModal">
                                    <img src="assets/img/project/new2.png" alt="project image">
                                    {{-- <div class="portfolio-card-shape">
                                        <img src="assets/img/project/project_shape1_1.png" alt="img">
                                    </div> --}}
                                </div>
                                <div class="portfolio-content d-none">
                                    <h3 class="portfolio-title">
                                        <a href="#">
                                            Dance & Music Theatre</a>
                                    </h3>
                                    <p class="portfolio-text">
                                        Modern architecture is a design approach that emphasizes simplicity,
                                        functionality, and innovation. It moves away from excessive.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="portfolio-card style1">
                                <div class="portfolio-img img-shine" data-bs-toggle="modal"
                                    data-bs-target="#portfolioModal">
                                    <img src="assets/img/project/new3.png" alt="project image">
                                    {{-- <div class="portfolio-card-shape">
                                        <img src="assets/img/project/project_shape1_1.png" alt="img">
                                    </div> --}}
                                </div>
                                <div class="portfolio-content d-none">
                                    <h3 class="portfolio-title">
                                        <a href="#">
                                            Villa Zuiderpark</a>
                                    </h3>
                                    <p class="portfolio-text">
                                        The project’s architecture expresses complementary features of a villa, made up
                                        of calm, quiet areas designed for family life, as well as reception areas,</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="portfolio-card style1">
                                <div class="portfolio-img img-shine" data-bs-toggle="modal"
                                    data-bs-target="#portfolioModal">
                                    <img src="assets/img/project/new1.png" alt="project image">
                                    {{-- <div class="portfolio-card-shape">
                                        <img src="assets/img/project/project_shape1_1.png" alt="img">
                                    </div> --}}
                                </div>
                                <div class="portfolio-content ">
                                    <h3 class="portfolio-title ">
                                        <a class="" href="#">
                                            2025/26</a>
                                    </h3>
                                    <p class="portfolio-text ">
                                        SOLAR POWER INSTALLATION TRAINING FOR ARTISANS IN KATSINA CENTRAL SENATORIAL
                                        DISTRICT NASRDA </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="portfolio-card style1">
                                <div class="portfolio-img img-shine" data-bs-toggle="modal"
                                    data-bs-target="#portfolioModal">
                                    <img src="assets/img/project/new3.png" alt="project image">
                                    {{-- <div class="portfolio-card-shape">
                                        <img src="assets/img/project/project_shape1_1.png" alt="img">
                                    </div> --}}
                                </div>
                                <div class="portfolio-content d-none">
                                    <h3 class="portfolio-title">
                                        <a href="#">
                                            Villa Zuiderpark</a>
                                    </h3>
                                    <p class="portfolio-text">
                                        The project’s architecture expresses complementary features of a villa, made up
                                        of calm, quiet areas designed for family life, as well as reception areas,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><button data-slider-prev="#projectSlider2" class="slider-arrow style3 slider-prev">
                    <img src="assets/img/icon/arrow-left.svg" alt="img">
                </button>
            </div>
        </div>
    </section>


    <div id="on-going-projects"></div>
    <section class="space bg-light1 overflow-hidden" id="property-sec">
        <div class="project-bg-shape2-1 sec-bg-shape2-1 text-whit jump shape-mockup" data-bottom="9%" data-left="3%">
            <img src="assets/img/shape/section_shape_2_3.jpg" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-xxl-6 col-xl-7 col-lg-6">
                    <div class="title-area">
                        <span class="sub-title5 text-whit">
                            <span class="line line1">

                            </span> Our Projects</span>
                        <h2 class="sec-title text-whit">
                            Ongoing Projects</h2>
                        {{-- <p class="sec-text text-whit">
                            CONSTRUCTION OF WAREHOUSE CHAD BASIN RBDA 2025/266</p> --}}
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn d-none">
                        <a href="project.html" class="th-btn style-border3 th-btn-icon">
                            Browse All Project</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="slider-area project-slider2">
                <div class="swiper th-slider" id="projectSlider2"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="portfolio-card style1">
                                <div class="portfolio-img img-shine" data-bs-toggle="modal"
                                    data-bs-target="#portfolioModal">
                                    <img src="assets/img/project/ongoing1.png" alt="project image">
                                    {{-- <div class="portfolio-card-shape">
                                        <img src="assets/img/project/project_shape1_1.png" alt="img">
                                    </div> --}}
                                </div>
                                <div class="portfolio-content ">
                                    <h3 class="portfolio-title">
                                        <a href="#">
                                            2025</a>
                                    </h3>
                                    <p class="portfolio-text">
                                        CONSTRUCTION AND EQUIPING OF CBT CENTER IN IYAMHO EDO SATE</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="portfolio-card style2">
                                <div class="portfolio-img img-shine" data-bs-toggle="modal"
                                    data-bs-target="#portfolioModal">
                                    <img src="assets/img/project/ongoing2.png" alt="project image">
                                    {{-- <div class="portfolio-card-shape">
                                        <img src="assets/img/project/project_shape1_1.png" alt="img">
                                    </div> --}}
                                </div>
                                <div class="portfolio-content d-none">
                                    <h3 class="portfolio-title">
                                        <a href="#">
                                            Villa Zuiderpark</a>
                                    </h3>
                                    <p class="portfolio-text">
                                        The project’s architecture expresses complementary features of a villa, made up
                                        of calm, quiet areas designed for family life, as well as reception areas,</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="portfolio-card style2">
                                <div class="portfolio-img img-shine" data-bs-toggle="modal"
                                    data-bs-target="#portfolioModal">
                                    <img src="assets/img/project/ongoing3.png" alt="project image">
                                    {{-- <div class="portfolio-card-shape">
                                        <img src="assets/img/project/project_shape1_1.png" alt="img">
                                    </div> --}}
                                </div>
                                <div class="portfolio-content d-none">
                                    <h3 class="portfolio-title">
                                        <a href="#">
                                            European Lard Station</a>
                                    </h3>
                                    <p class="portfolio-text">
                                        Hemicycle and offices for the Headquarters of the European Parliament including:
                                        a 750-seat hemicycle, 1133 offices for members of Parliament,</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="portfolio-card style2">
                                <div class="portfolio-img img-shine" data-bs-toggle="modal"
                                    data-bs-target="#portfolioModal">
                                    <img src="assets/img/project/ongoing4.png" alt="project image">
                                    {{-- <div class="portfolio-card-shape">
                                        <img src="assets/img/project/project_shape1_1.png" alt="img">
                                    </div> --}}
                                </div>
                                <div class="portfolio-content d-none">
                                    <h3 class="portfolio-title">
                                        <a href="#">
                                            Dance & Music Theatre</a>
                                    </h3>
                                    <p class="portfolio-text">
                                        Modern architecture is a design approach that emphasizes simplicity,
                                        functionality, and innovation. It moves away from excessive.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="portfolio-card style2">
                                <div class="portfolio-img img-shine" data-bs-toggle="modal"
                                    data-bs-target="#portfolioModal">
                                    <img src="assets/img/project/ongoing5.png" alt="project image">
                                    {{-- <div class="portfolio-card-shape">
                                        <img src="assets/img/project/project_shape1_1.png" alt="img">
                                    </div> --}}
                                </div>
                                <div class="portfolio-content d-none">
                                    <h3 class="portfolio-title">
                                        <a href="#">
                                            Dance & Music Theatre</a>
                                    </h3>
                                    <p class="portfolio-text">
                                        Modern architecture is a design approach that emphasizes simplicity,
                                        functionality, and innovation. It moves away from excessive.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><button data-slider-prev="#projectSlider2" class="slider-arrow style3 slider-prev">
                    <img src="assets/img/icon/arrow-left.svg" alt="img">
                </button>
            </div>
        </div>
    </section>




    {{-- <div class="th-modal modal fade allow-natural-scroll d-none" id="portfolioModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="container">
                    <button type="button" class="icon-btn btn-close bg-title-dark" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="fa-regular fa-xmark">

                        </i></button>
                    <div class="page-single bg-title-dark">
                        <div class="page-img mb-30">
                            <img class="w-100 rounded-20" src="assets/img/project/project_pop1_1.png"
                                alt="portfolio Image">
                        </div>
                        <div class="page-content">
                            <h2 class="h3 page-title text-white fw-medium">
                                Where Visibility Meets Success</h2>
                            <div class="row gy-30">
                                <div class="col-xl-7">
                                    <p class="mb-20 text-light">
                                        The timeline varies depending on the complexity of the project. Simple projects
                                        may take a few weeks, while more complex ones could extend to several months.
                                        Timelines are influenced by factors like scope, feedback iterations, and client
                                        responsiveness.</p>
                                    <p class="mb-xl-4 mb-0 text-light">
                                        Project timelines vary based on complexity and scope. Small projects may take a
                                        few weeks, while larger ones could span several months. Timelines are
                                        established during project kickoff. We use a range of industry-standard tools
                                        such as Sketch.</p>
                                </div>
                                <div class="col-xl-5">
                                    <div class="checklist">
                                        <ul>
                                            <li class="text-light">
                                                <strong>Service Category:</strong> Rubix Carabil Tower
                                            </li>
                                            <li class="text-light">
                                                <strong>Clients:</strong> David Malan
                                            </li>
                                            <li class="text-light">
                                                <strong>Project Date:</strong> 13 June, 2020
                                            </li>
                                            <li class="text-light">
                                                <strong>Avenue End Date:</strong> 22 July, 2023
                                            </li>
                                            <li class="text-light">
                                                <strong>Locations:</strong> NewYork - 2546 Firs, USA
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row gy-30 gx-40 align-items-center">
                                <div class="col-xl-6">
                                    <div class="page-img mb-0">
                                        <img class="w-100 rounded-20" src="assets/img/project/project_pop2_1.png"
                                            alt="portfolio Image">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <h4 class="box-title text-white fw-medium">
                                        Services Benefits:</h4>
                                    <p class="text-light">
                                        We can do both. We can adhere to existing brand guidelines, ensuring
                                        consistency, or help develop new ones if a client is looking for a fresh
                                        identity. Our goal is to align the UI/UX design with the brand's overall
                                        strategy product meets the needs.</p>
                                    <div class="checklist style3">
                                        <ul>
                                            <li class="text-light">
                                                <i class="far fa-check-circle">

                                                </i>We use the latest diagnostic equipment
                                            </li>
                                            <li class="text-light">
                                                <i class="far fa-check-circle">

                                                </i>Automotive service our clients receive
                                            </li>
                                            <li class="text-light">
                                                <i class="far fa-check-circle">

                                                </i>We are a member of Professional Service
                                            </li>
                                            <li class="text-light">
                                                <i class="far fa-check-circle">

                                                </i>Digital how will activities impact traditional
                                            </li>
                                            <li class="text-light">
                                                <i class="far fa-check-circle">

                                                </i>Architect and technical engineer
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
