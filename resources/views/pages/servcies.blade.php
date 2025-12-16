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
                            Services</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">
                                    Home</a></li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


<section class="space bg-black2" id="services">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6">
                <div class="title-area">
                    <span class="shadow-title">Services</span>
                    <h2 class="sec-title text-white">Our Professional Services</h2>
                    <p class="sec-text text-white">We offer comprehensive construction engineering solutions through innovation, precision, and excellence. Our multidisciplinary team delivers projects that are efficient, durable, and perfectly aligned with client requirements.</p>
                </div>
            </div>
            <div class="col-auto">
                <div class="sec-btn">
                    <a href="service" class="th-btn btn-mask th-btn-icon d-none">All Services</a>
                </div>
            </div>
        </div>

        <!-- Road & Bridge Construction -->
        <div class="property-card-wrap" id="road-bridge-construction">
            <div class="property-thumb img-shine" data-mask-src="assets/img/shape/property-card1-img-mask.png">
                <img src="assets/img/property/roads.png" alt="Road & Bridge Construction">
            </div>
            <div class="property-card">
                <div class="property-card-number">01</div>
                <div class="property-card-details">
                    <h4 class="property-card-subtitle"><a href="service-details">Infrastructure Connectivity</a></h4>
                    <span class="property-card-title ">Road & Bridge Construction</span>
                    <p class="property-card-text">We specialize in comprehensive road construction, bridge development, and transportation infrastructure. Our expertise includes highway construction, bridge engineering, road rehabilitation, and transportation network development to enhance connectivity and economic growth.</p>
                    <div class="property-btn-wrap">
                        <a href="service-details" class="th-btn btn-mask2 th-btn-icon">View Details</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Building Construction -->
        <div class="property-card-wrap" id="building-construction">
            <div class="property-thumb img-shine" data-mask-src="assets/img/shape/property-card1-img-mask.png">
                <img src="assets/img/property/property12.png" alt="Building Construction">
            </div>
            <div class="property-card">
                <div class="property-card-number">02</div>
                <div class="property-card-details">
                    <h4 class="property-card-subtitle"><a href="service-details">Structural Excellence</a></h4>
                    <span class="property-card-title ">Building Construction</span>
                    <p class="property-card-text">We deliver high-quality residential, commercial, and industrial building construction. Our services include structural design, construction management, and turnkey project delivery, ensuring durable and functional structures that meet modern construction standards.</p>
                    <div class="property-btn-wrap">
                        <a href="service-details" class="th-btn btn-mask2 th-btn-icon">View Details</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Electrification -->
        <div class="property-card-wrap" id="electrification">
            <div class="property-thumb img-shine" data-mask-src="assets/img/shape/property-card1-img-mask.png">
                <img src="assets/img/property/solar.png" alt="Electrification">
            </div>
            <div class="property-card">
                <div class="property-card-number">03</div>
                <div class="property-card-details">
                    <h4 class="property-card-subtitle"><a href="service-details"> Electrical Infrastructure</a></h4>
                    <span class="property-card-title ">Solar Energy System Solutions</span>
                    <p class="property-card-text">We provide comprehensive electrification services including power distribution systems, electrical infrastructure, and energy solutions. Our expertise covers industrial electrification, residential power systems, and sustainable energy integration for modern infrastructure.</p>
                    <div class="property-btn-wrap">
                        <a href="service-details" class="th-btn btn-mask2 th-btn-icon">View Details</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Water Resources -->
        <div class="property-card-wrap" id="water-resources">
            <div class="property-thumb img-shine" data-mask-src="assets/img/shape/property-card1-img-mask.png">
                <img src="assets/img/property/water.png" alt="Water Resources">
            </div>
            <div class="property-card">
                <div class="property-card-number">04</div>
                <div class="property-card-details">
                    <h4 class="property-card-subtitle"><a href="service-details">Sustainable Water Management</a></h4>
                    <span class="property-card-title ">Water Resources</span>
                    <p class="property-card-text">We specialize in water resource management including drainage systems, flood control, water supply infrastructure, and sanitation solutions. Our expertise ensures sustainable water management and efficient resource utilization for communities and industries.</p>
                    <div class="property-btn-wrap">
                        <a href="service-details" class="th-btn btn-mask2 th-btn-icon">View Details</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Facility Management -->
        <div class="property-card-wrap" id="facility-management">
            <div class="property-thumb img-shine" data-mask-src="assets/img/shape/property-card1-img-mask.png">
                <img src="assets/img/property/facility.png" alt="Facility Management">
            </div>
            <div class="property-card">
                <div class="property-card-number">05</div>
                <div class="property-card-details">
                    <h4 class="property-card-subtitle"><a href="service-details">Operational Excellence</a></h4>
                    <span class="property-card-title ">Facility Management</span>
                    <p class="property-card-text">We provide comprehensive facility management services including maintenance, operations, and building management. Our solutions ensure optimal performance, safety, and longevity of infrastructure assets through professional management practices.</p>
                    <div class="property-btn-wrap">
                        <a href="service-details" class="th-btn btn-mask2 th-btn-icon">View Details</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Commissioning -->
        <div class="property-card-wrap" id="commissioning">
            <div class="property-thumb img-shine" data-mask-src="assets/img/shape/property-card1-img-mask.png">
                <img src="assets/img/property/commissioning.png" alt="Commissioning">
            </div>
            <div class="property-card">
                <div class="property-card-number">06</div>
                <div class="property-card-details">
                    <h4 class="property-card-subtitle"><a href="service-details">System Verification & Handover</a></h4>
                    <span class="property-card-title ">Commissioning</span>
                    <p class="property-card-text">We offer professional commissioning services to ensure all systems operate as designed. Our comprehensive testing, verification, and handover processes guarantee project readiness and operational efficiency from day one.</p>
                    <div class="property-btn-wrap">
                        <a href="service-details" class="th-btn btn-mask2 th-btn-icon">View Details</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Procurement -->
        <div class="property-card-wrap" id="procurement">
            <div class="property-thumb img-shine" data-mask-src="assets/img/shape/property-card1-img-mask.png">
                <img src="assets/img/property/procurement.png" alt="Procurement">
            </div>
            <div class="property-card">
                <div class="property-card-number">07</div>
                <div class="property-card-details">
                    <h4 class="property-card-subtitle"><a href="service-details">Strategic Sourcing</a></h4>
                    <span class="property-card-title ">Procurement</span>
                    <p class="property-card-text">We manage comprehensive procurement services including vendor selection, material sourcing, and supply chain management. Our strategic approach ensures quality materials, competitive pricing, and timely delivery for all project requirements.</p>
                    <div class="property-btn-wrap">
                        <a href="service-details" class="th-btn btn-mask2 th-btn-icon">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
