<footer class="pt-8 pt-md-11 bg-white">
    <div class="container">
        <div class="row" id="accordionFooter">
            <div class="col-12 col-md-4 col-lg-4">

                <!-- Brand -->
                <H2>{{env('APP_NAME')}}</H2>

                <!-- Text -->
                <p class="text-gray-800 mb-4 font-size-sm-alone">
                    A179, Shyam Vihar PH-1, South Wrest Delhi, Pin-110043
                </p>

                <div class="mb-4">
                    <a href="tel:+919142562743" class="text-gray-800 font-size-sm-alone">+91-9142562743</a>
                </div>

                <div class="mb-4">
                    <a href="mailto:support@teachmeonline.in" class="text-gray-800 font-size-sm-alone">support@teachmeonline.in</a>
                </div>

                <!-- Social -->
                <ul class="list-unstyled list-inline list-social mb-4 mb-md-0">
                    <li class="list-inline-item list-social-item">
                        <a href="#" class="text-secondary font-size-sm w-36 h-36 shadow-dark-hover d-flex align-items-center justify-content-center rounded-circle border-hover">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item list-social-item">
                        <a href="#" class="text-secondary font-size-sm w-36 h-36 shadow-dark-hover d-flex align-items-center justify-content-center rounded-circle border-hover">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item list-social-item">
                        <a href="#" class="text-secondary font-size-sm w-36 h-36 shadow-dark-hover d-flex align-items-center justify-content-center rounded-circle border-hover">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item list-social-item">
                        <a href="#" class="text-secondary font-size-sm w-36 h-36 shadow-dark-hover d-flex align-items-center justify-content-center rounded-circle border-hover">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-12 col-md-4 col-lg-2">
                <div class="mb-5 mb-xl-0 footer-accordion">

                    <!-- Heading -->
                    <div id="widgetOne">
                        <h5 class="mb-5">
                            <button class="text-dark fw-medium footer-accordion-toggle d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#widgetcollapseOne" aria-expanded="true" aria-controls="widgetcollapseOne">
                                Our Company
                                <span class="ms-auto text-dark">
                                    <!-- Icon -->
                                    <svg width="15" height="2" viewBox="0 0 15 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="15" height="2" fill="currentColor"/>
                                    </svg>

                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 7H15V9H0V7Z" fill="currentColor"/>
                                        <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor"/>
                                    </svg>

                                </span>
                            </button>
                        </h5>
                    </div>

                    <div id="widgetcollapseOne" class="collapse show" aria-labelledby="widgetOne" data-parent="#accordionFooter">
                        <!-- List -->
                        <ul class="list-unstyled text-gray-800 font-size-sm-alone mb-6 mb-md-8 mb-lg-0">
                            <li class="mb-3">
                                <a href="./about-v1.html" class="text-reset">
                                    Our Company
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="{{route('aboutus')}}" class="text-reset">
                                    About Us
                                </a>
                            </li>

                            <li class="mb-3">
                                <a href="{{route('contactus')}}" class="text-reset">
                                    Contact Us
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="./contact-us.html" class="text-reset">
                                    Careers
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="{{route('termsofuse')}}" class="text-reset">
                                    Terms Of Use
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="{{route('privacypolicy')}}" class="text-reset">
                                    Privacy & Policy
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="{{route('refundandcancellation')}}" class="text-reset">
                                    Refund and Cancellation
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 col-lg-2">
                <div class="mb-5 mb-xl-0 ms-xl-6 footer-accordion">

                    <!-- Heading -->
                    <div id="widgetTwo">
                        <h5 class="mb-5">
                            <button class="text-dark fw-medium footer-accordion-toggle d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#widgetcollapseTwo" aria-expanded="false" aria-controls="widgetcollapseTwo">
                                Topics
                                <span class="ms-auto text-dark">
                                    <!-- Icon -->
                                    <svg width="15" height="2" viewBox="0 0 15 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="15" height="2" fill="currentColor"/>
                                    </svg>

                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 7H15V9H0V7Z" fill="currentColor"/>
                                        <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor"/>
                                    </svg>

                                </span>
                            </button>
                        </h5>
                    </div>

                    <div id="widgetcollapseTwo" class="collapse" aria-labelledby="widgetTwo" data-parent="#accordionFooter">
                        <!-- List -->
                        <ul class="list-unstyled text-gray-800 font-size-sm-alone mb-6 mb-md-8 mb-lg-0">
                            <li class="mb-3">
                                <a href="{{url('html')}}" class="text-reset">
                                    HTML
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="{{url('css')}}" class="text-reset">
                                    CSS
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="{{url('design')}}" class="text-reset">
                                    Design
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="{{url('javascript')}}" class="text-reset">
                                    JavaScript
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="{{url('ruby')}}" class="text-reset">
                                    Ruby
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="{{url('php')}}" class="text-reset">
                                    PHP
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="{{url('android')}}" class="text-reset">
                                    Android
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 offset-md-4 col-lg-2 offset-lg-0">
                <div class="mb-5 mb-xl-0 ms-xl-6 footer-accordion">

                    <!-- Heading -->
                    <div id="widgetThree">
                        <h5 class="mb-5">
                            <button class="text-dark fw-medium footer-accordion-toggle d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#widgetcollapseThree" aria-expanded="false" aria-controls="widgetcollapseThree">
                                Tracks
                                <span class="ms-auto text-dark">
                                    <!-- Icon -->
                                    <svg width="15" height="2" viewBox="0 0 15 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="15" height="2" fill="currentColor"/>
                                    </svg>

                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 7H15V9H0V7Z" fill="currentColor"/>
                                        <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor"/>
                                    </svg>

                                </span>
                            </button>
                        </h5>
                    </div>

                    <div id="widgetcollapseThree" class="collapse" aria-labelledby="widgetThree" data-parent="#accordionFooter">
                        <!-- List -->
                        <ul class="list-unstyled text-gray-800 font-size-sm-alone mb-0">
                            <li class="mb-3">
                                <a href="{{url('design')}}" class="text-reset">
                                    Web Design
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="{{url('webdevelopment')}}" class="text-reset">
                                    Web Development
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="{{url('railsdevelopment')}}" class="text-reset">
                                    Rails Development
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="{{url('phpdevelopment')}}" class="text-reset">
                                    PHP Development
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="{{url('androiddevelopment')}}" class="text-reset">
                                    Android Development
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="{{url('reactdevelopment')}}" class="text-reset">
                                    React Js Developemnt
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 col-lg-2 d-xl-flex">
                <div class="mb-5 mb-xl-0 ms-xl-auto footer-accordion">

                    <!-- Heading -->
                    <div id="widgetFour">
                        <h5 class="mb-5">
                            <button class="text-dark fw-medium footer-accordion-toggle d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#widgetcollapseFour" aria-expanded="false" aria-controls="widgetcollapseFour">
                                Support
                                <span class="ms-auto text-dark">
                                    <!-- Icon -->
                                    <svg width="15" height="2" viewBox="0 0 15 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="15" height="2" fill="currentColor"/>
                                    </svg>

                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 7H15V9H0V7Z" fill="currentColor"/>
                                        <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor"/>
                                    </svg>

                                </span>
                            </button>
                        </h5>
                    </div>

                    <div id="widgetcollapseFour" class="collapse" aria-labelledby="widgetFour" data-parent="#accordionFooter">
                        <!-- List -->
                        <ul class="list-unstyled text-gray-800 font-size-sm-alone mb-0">
                            <li class="mb-3">
                                <a href="{{url('contactus')}}" class="text-reset">
                                    24X7 Shpport Online
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="{{url('contactus')}}" class="text-reset">
                                    Email Us
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="{{url('contactus')}}" class="text-reset">
                                    Call US
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="{{url('contactus')}}" class="text-reset">
                                    Wahtsapp Chat
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-md-5">
                <div class="border-top pb-5 pt-6 py-md-4 text-center text-xl-start d-flex flex-column d-md-block d-xl-flex flex-xl-row align-items-center">
                    <p class="text-gray-800 font-size-sm-alone d-block mb-0 mb-md-2 mb-xl-0 order-1 order-md-0 px-9 px-md-0">Copyright © 2023 {{env('APP_NAME')}} All Right Reserved.</p>

                    <div class="ms-xl-auto d-flex flex-column flex-md-row align-items-stretch align-items-md-center justify-content-center">
                        <ul class="navbar-nav flex-row flex-wrap font-size-sm-alone mb-3 mb-md-0 mx-n4 me-md-5 justify-content-center justify-content-lg-start order-1 order-md-0">
                            <li class="nav-item py-2 py-md-0 px-0 border-top-0">
                                <a href="{{url('/')}}" class="nav-link px-4 fw-normal text-gray-800">Home</a>
                            </li>
                            <li class="nav-item py-2 py-md-0 px-0 border-top-0">
                                <a href="{{route('privacypolicy')}}" class="nav-link px-4 fw-normal text-gray-800">Site Map</a>
                            </li>
                            <li class="nav-item py-2 py-md-0 px-0 border-top-0">
                                <a href="{{route('privacypolicy')}}" class="nav-link px-4 fw-normal text-gray-800">Privacy policy</a>
                            </li>
                            <li class="nav-item py-2 py-md-0 px-0 border-top-0">
                                <a href="{{route('privacypolicy')}}" class="nav-link px-4 fw-normal text-gray-800">Web Use Policy</a>
                            </li>
                            <li class="nav-item py-2 py-md-0 px-0 border-top-0">
                                <a href="{{route('privacypolicy')}}" class="nav-link px-4 fw-normal text-gray-800">Cookie Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</footer>
