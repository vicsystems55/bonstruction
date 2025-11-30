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
                            Contact Us</h1>
                        <ul class="breadcumb-menu">
                            <li>
                                <a href="index.html">
                                    Home</a>
                            </li>
                            <li>
                                Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space" id="contact-sec">
        <div class="contact-bg-shape1-1 jump shape-mockup" data-bottom="30%" data-left="2%">
            <img src="assets/img/shape/section_shape_2_3.jpg" alt="img">
        </div>
        <div class="container">
            <div class="row gx-35">
                <div class="col-lg-5">
                    <div class="title-area">
                        <h2 class="sec-title">Contact info</h2>
                        <p>
                            Get in touch with BONSTRUCTION ENGINEERING for innovative construction solutions and
                            infrastructure development projects.
                        </p>
                    </div>
                    <div class="about-contact-grid">
                        <div class="about-contact-icon text-white">
                            <img src="assets/img/icon/location-dot.svg" alt="icon">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="about-contact-details-title">Location:</h6>
                            <p class="about-contact-details-text">
                                No. 3, Kaltungo Street,
                            </p>
                            <p class="about-contact-details-text">
                                Garki II, Abuja
                            </p>
                        </div>
                    </div>
                    <div class="about-contact-grid">
                        <div class="about-contact-icon text-white">
                            <img src="assets/img/icon/phone.svg" alt="icon">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="about-contact-details-title">Phone:</h6>
                            <p class="about-contact-details-text">
                                <a href="tel:+2348168445981">
                                    +234 816 844 5981
                                </a>
                            </p>
                            <p class="about-contact-details-text">
                                <a href="tel:+2348123059106">
                                    +234 812 305 9106
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="about-contact-grid">
                        <div class="about-contact-icon text-white">
                            <img src="assets/img/icon/envelope.svg" alt="icon">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="about-contact-details-title">Email:</h6>
                            <p class="about-contact-details-text">
                                <a href="mailto:info@bonstruction.com">
                                    info@bonstruction.com
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="location-map contact-sec-map">
            <div class="contact-map">
               <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.715316178635!2d7.476274375683472!3d9.01249900000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0b7c5c7f6e85%3A0x8e6f7c5c7f6e85!2sNo.%203%2C%20Kaltungo%20St%2C%20Garki%20II%2C%20Abuja!5e0!3m2!1sen!2sng!4v1690000000000!5m2!1sen!2sng"
    width="100%"
    height="600"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
</iframe>
            </div>
         <div class="location-map-address">
    <div class="thumb">
        <img src="assets/img/property/property_inner_1.jpg" alt="Bonstruction Engineering Office">
    </div>
    <div class="media-body">
        <h4 class="title">
            Address:</h4>
        <p class="text">
            No. 3, Kaltungo Street, Garki II, Abuja</p>
        <h4 class="title">
            Phone:</h4>
        <p class="text">
            +234 816 844 5981<br>
            +234 812 305 9106
        </p>
        <h4 class="title">
            Email:</h4>
        <p class="text">
            info@bonstruction.com</p>
    </div>
</div>
        </div>
    </div>
    <div class="space contact-area-5 z-index-common" id="contact-sec">
        <div class="contact-thumb6-1">
            <img src="assets/img/normal/contact_thumb_6_21.png" alt="img">
        </div>
        <div class="container">
            <div class="row gx-60 gy-60 justify-content-end">
                <div class="col-lg-6">
                    <div class="appointment-wrap contact-wrap6">
                        <h2 class="form-title fw-semibold mb-35">
                            Get in Touch</h2>
                        <form action="https://html.themehour.net/builda/demo/mail.php" method="POST"
                            class="appointment-form ajax-contact">
                            <div class="row">
                                <div class="form-group style-border2 style-radius col-lg-6">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Your Name*">
                                    <i class="fal fa-user">

                                    </i>
                                </div>
                                <div class="form-group style-border2 style-radius col-lg-6">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email*">
                                    <i class="fal fa-envelope">

                                    </i>
                                </div>
                                <div class="form-group style-border2 style-radius col-md-12">
                                    <select name="subject" id="subject" class="form-select">
                                        <option value="" disabled="disabled" selected="selected" hidden>
                                            Select Service Type</option>
                                        <option value="Real Estate">
                                            Real Estate</option>
                                        <option value="Apartment">
                                            Apartment</option>
                                        <option value="Residencial">
                                            Residencial</option>
                                        <option value="Deluxe">
                                            Deluxe</option>
                                    </select>
                                    <i class="fal fa-angle-down">

                                    </i>
                                </div>
                                <div class="col-12 form-group style-border2 style-radius">
                                    <i class="far fa-comments">

                                    </i>
                                    <textarea placeholder="Type Your Message" class="form-control">

</textarea>
                                </div>
                                <div class="col-12 form-btn">
                                    <button class="th-btn style4">
                                        Submit Message <span class="btn-icon">
                                            <img src="assets/img/icon/paper-plane.svg" alt="img">
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3">

                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
