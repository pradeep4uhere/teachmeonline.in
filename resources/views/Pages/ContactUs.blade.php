@extends('Layouts.default')
@section('title', 'Teach Me Online')
@section('content')
 <!-- MODALS
    ================================================== -->
    <!-- Modal Sidebar account -->
    @include('ModelBox.loginModelBox')

    <!-- Modal Sidebar cart -->
    @include('ModelBox.cartModelBox')

    <!-- NAVBAR
    ================================================== -->
    @include('Common.innerHeader')

       <!-- PAGE TITLE
    ================================================== -->
    <header class="py-8 py-md-12 overlay overlay-primary overlay-80" style="background-image: url(assets/img/covers/cover-19.jpg);">
        <div class="container text-center py-xl-5">
            <h1 class="display-4 fw-semi-bold mb-0 text-white">Contact Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-scroll justify-content-center">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="#">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item text-white active" aria-current="page">
                        Contact Us
                    </li>
                </ol>
            </nav>
        </div>
        <!-- Img -->
        <img class="d-none img-fluid" src="..." alt="...">
    </header>

    <div class="container mt-11">
        <div class="row row-cols-md-2 mb-8 mb-lg-11">
            <div class="col-md">
                <h1 class="mb-6">Contact Details</h1>

                <div class="row row-cols-12 row-cols-xl-2">
                    <div class="col-xl mb-6">
                        <div class="media d-flex">
                            <div class="me-5">
                                <!-- Icon -->
                                <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.1563 6.10857C9.51012 6.10857 8.98438 5.57813 8.98438 4.9262C8.98438 4.27428 9.51012 3.74384 10.1563 3.74384C10.8024 3.74384 11.3282 4.27428 11.3282 4.9262C11.3282 5.57813 10.8025 6.10857 10.1563 6.10857Z" fill="currentColor"></path>
                                    <path d="M24.9751 21.6358L23.0707 8.82697C22.9047 7.70855 21.9705 6.89675 20.8494 6.89675H13.5955C14.2338 5.67842 14.2226 4.24519 13.5551 3.02396C12.8802 1.78912 11.6562 1.02758 10.2809 0.986735C10.1985 0.984321 10.114 0.984321 10.0311 0.986735C8.65603 1.02753 7.43212 1.78912 6.7572 3.02396C6.08995 4.2447 6.07852 5.67729 6.71687 6.89675H4.15064C3.02947 6.89675 2.09526 7.70855 1.92924 8.82677L0.0248985 21.6358C-0.0721255 22.2889 0.117186 22.9504 0.544297 23.4508C0.971456 23.9511 1.59178 24.2381 2.24629 24.2381H22.7537C23.4082 24.2381 24.0285 23.9511 24.4556 23.4508C24.8828 22.9505 25.0721 22.289 24.9751 21.6358ZM8.12554 3.7853C8.53683 3.03287 9.24813 2.58722 10.0769 2.56263C10.103 2.56185 10.1296 2.5615 10.1562 2.5615C10.1828 2.5615 10.2094 2.5619 10.2353 2.56263C11.0643 2.58722 11.7756 3.03287 12.1869 3.7853C12.6165 4.57128 12.6046 5.49924 12.1551 6.26788L10.1562 9.66325L8.15792 6.26887C7.70786 5.50003 7.69575 4.57158 8.12554 3.7853ZM23.2717 22.4221C23.1954 22.5116 23.0265 22.6617 22.7537 22.6617H8.59924C8.63571 22.2922 8.8052 21.737 9.44608 21.3821C9.82437 21.1727 9.96275 20.6936 9.75518 20.3119C9.5476 19.9302 9.07259 19.7906 8.69436 20.0001C7.86694 20.4581 7.32147 21.1774 7.11692 22.0798C7.06912 22.2906 7.04602 22.4883 7.0367 22.6617H2.24629C1.97353 22.6617 1.80463 22.5116 1.72826 22.4221C1.65189 22.3326 1.52977 22.1418 1.5702 21.8697L3.47455 9.06059C3.52508 8.72031 3.80942 8.47334 4.15069 8.47334H7.63832L9.15428 11.0485C9.36659 11.4102 9.74111 11.6262 10.1562 11.6262C10.5713 11.6262 10.9458 11.4102 11.1575 11.0495L12.6741 8.47334H20.8494C21.1906 8.47334 21.475 8.72031 21.5255 9.06073L23.4299 21.8697C23.4702 22.1418 23.3481 22.3326 23.2717 22.4221Z" fill="currentColor"></path>
                                    <path d="M13.5285 10.8785C13.1191 10.7407 12.6767 10.9641 12.5403 11.3771C12.4038 11.79 12.6251 12.2364 13.0344 12.3741C13.0424 12.3768 13.843 12.6656 14.1029 13.4521C14.2119 13.7824 14.5168 13.9913 14.8439 13.9913C14.9258 13.9913 15.0092 13.9782 15.0911 13.9506C15.5005 13.8129 15.7217 13.3665 15.5852 12.9535C15.0769 11.415 13.5915 10.8997 13.5285 10.8785Z" fill="currentColor"></path>
                                    <path d="M14.1905 15.8431C13.7836 15.6982 13.3373 15.9136 13.1938 16.3241C12.7528 17.5846 11.2415 18.126 11.2097 18.1371C10.8021 18.2758 10.5821 18.7212 10.7183 19.1333C10.8274 19.4636 11.1323 19.6725 11.4594 19.6725C11.5413 19.6725 11.6246 19.6594 11.7066 19.6318C11.7985 19.6009 13.9667 18.8514 14.6673 16.8488C14.8109 16.4383 14.5974 15.988 14.1905 15.8431Z" fill="currentColor"></path>
                                </svg>

                            </div>
                            <div class="media-body flex-shrink-1">
                                <h5 class="mb-4">Find Us</h5>
                                <address class="">
                                    A179, New South West Delhi,
                                    India 110043
                                </address>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl mb-6">
                        <div class="media d-flex">
                            <div class="me-5">
                                <!-- Icon -->
                                <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.9679 25C17.1609 25 16.3607 24.8573 15.5783 24.5731C12.1313 23.3209 8.93169 21.2814 6.32535 18.6751C3.71901 16.0688 1.67955 12.8692 0.427403 9.42217C0.0250265 8.31441 -0.0937186 7.1709 0.074585 6.02329C0.232245 4.94833 0.648634 3.90477 1.27878 3.00539C1.91172 2.10206 2.75553 1.35073 3.71897 0.832632C4.74637 0.280164 5.86775 0 7.05208 0C7.42043 0 7.73877 0.257363 7.81597 0.617504L9.04218 6.33988C9.0977 6.599 9.01806 6.86862 8.83072 7.05601L6.73544 9.15124C8.71202 13.0811 11.9193 16.2883 15.8491 18.2649L17.9444 16.1696C18.1318 15.9823 18.4014 15.9028 18.6605 15.9582L24.3829 17.1844C24.7431 17.2616 25.0004 17.5799 25.0004 17.9483C25.0004 19.1326 24.7202 20.2541 24.1677 21.2815C23.6496 22.2449 22.8983 23.0887 21.9949 23.7216C21.0956 24.3518 20.052 24.7682 18.977 24.9258C18.6402 24.9753 18.3034 25 17.9679 25ZM6.42789 1.59661C4.8657 1.76907 3.47913 2.58788 2.55837 3.90204C1.52296 5.37976 1.28152 7.19731 1.89595 8.88875C4.30327 15.5157 9.48475 20.6972 16.1117 23.1045C17.8031 23.719 19.6207 23.4776 21.0984 22.4421C22.4126 21.5213 23.2314 20.1348 23.4039 18.5726L18.7487 17.5751L16.5605 19.7633C16.3277 19.9961 15.9739 20.058 15.6759 19.9179C11.0282 17.7344 7.26604 13.9723 5.08253 9.32452C4.94255 9.02653 5.00436 8.67274 5.23721 8.43994L7.42541 6.25175L6.42789 1.59661Z" fill="currentColor"></path>
                                </svg>

                            </div>
                            <div class="media-body flex-shrink-1">
                                <h5 class="mb-4">Phone</h5>
                                <a href="tel:+919142562743" class="text-gray-800 d-block">+(91) 9142562743</a>
                                <a href="tel:+919142562743" class="text-gray-800 d-block">+(91) 9142562743</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl mb-6">
                        <div class="media d-flex">
                            <div class="me-5">
                                <!-- Icon -->
                                <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99974 3.0083C5.79444 3.0083 2.37305 6.42973 2.37305 10.635C2.37305 14.8405 5.79448 18.2619 9.99974 18.2619C14.2053 18.2619 17.6264 14.8405 17.6264 10.635C17.6264 6.42973 14.205 3.0083 9.99974 3.0083ZM9.99974 16.8797C6.55666 16.8797 3.7555 14.0783 3.7555 10.6353C3.7555 7.19219 6.55662 4.39103 9.99974 4.39103C13.4428 4.39103 16.244 7.19219 16.244 10.6353C16.244 14.0785 13.4428 16.8797 9.99974 16.8797Z" fill="currentColor"></path>
                                    <path d="M12.1193 10.4048H10.2761V7.73202C10.2761 7.35022 9.9666 7.04077 9.5848 7.04077C9.20301 7.04077 8.89355 7.35022 8.89355 7.73202V11.0961C8.89355 11.4779 9.20301 11.7873 9.5848 11.7873H12.1194C12.5012 11.7873 12.8106 11.4779 12.8106 11.0961C12.8106 10.7143 12.5011 10.4048 12.1193 10.4048Z" fill="currentColor"></path>
                                    <path d="M6.08489 15.5823C5.80102 15.3267 5.36391 15.35 5.10864 15.6336L3.0349 17.9378C2.77935 18.2214 2.80263 18.6585 3.08627 18.9138C3.2183 19.033 3.38372 19.0915 3.54849 19.0915C3.73767 19.0915 3.92614 19.0143 4.06255 18.8625L6.13629 16.5583C6.3918 16.2746 6.36852 15.8375 6.08489 15.5823Z" fill="currentColor"></path>
                                    <path d="M16.9661 17.9381L14.8924 15.634C14.6375 15.3501 14.2002 15.327 13.9163 15.5826C13.6325 15.8379 13.6097 16.275 13.865 16.5586L15.9387 18.8628C16.0749 19.0144 16.2633 19.0916 16.4525 19.0916C16.6171 19.0916 16.7825 19.033 16.9147 18.9141C17.1986 18.6588 17.2214 18.2217 16.9661 17.9381Z" fill="currentColor"></path>
                                    <path d="M5.96733 1.91597C4.59382 0.571053 2.3798 0.573123 1.03211 1.92105C0.361569 2.59132 -0.00479631 3.47819 4.74212e-05 4.41826C0.00512553 5.34705 0.373327 6.21665 1.03715 6.86689C1.17172 6.99845 1.34614 7.06411 1.52078 7.06411C1.69774 7.06411 1.87469 6.99638 2.00949 6.86181L5.9726 2.8987C6.10303 2.76808 6.17584 2.59085 6.17491 2.40632C6.17401 2.22171 6.09932 2.04523 5.96733 1.91597ZM1.5966 5.31939C1.45813 5.04037 1.38414 4.73162 1.38254 4.41088C1.37953 3.84315 1.60211 3.30581 2.00949 2.89843C2.41594 2.49222 2.95328 2.28921 3.49359 2.28921C3.80949 2.28921 4.12655 2.35855 4.4187 2.49726L1.5966 5.31939Z" fill="currentColor"></path>
                                    <path d="M18.9673 1.92072C17.6194 0.573026 15.4053 0.570721 14.0318 1.91564C13.9 2.04489 13.8252 2.22142 13.8242 2.40595C13.8233 2.59052 13.8963 2.76794 14.0268 2.89833L17.9899 6.86144C18.1247 6.99648 18.3016 7.06398 18.4786 7.06398C18.6532 7.06398 18.8279 6.99831 18.9622 6.86628C19.6263 6.21628 19.9945 5.34672 19.9993 4.41789C20.0042 3.47809 19.6376 2.59122 18.9673 1.92072ZM18.4028 5.3193L15.5807 2.4972C16.3729 2.12114 17.3459 2.25458 17.9899 2.89856C18.3973 3.30594 18.6199 3.84301 18.6169 4.41102C18.6152 4.73152 18.5413 5.04051 18.4028 5.3193Z" fill="currentColor"></path>
                                </svg>

                            </div>
                            <div class="media-body flex-shrink-1">
                                <h5 class="mb-4">Working Hours</h5>
                                <p class="mb-0">Mon-Fri: 8 AM - 6 PM</p>
                                <p class="mb-0">Sat-Sun: 8 AM - 2 PM</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl mb-6">
                        <div class="media d-flex">
                            <div class="me-5">
                                <!-- Icon -->
                                <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.3651 20H2.50025L9.0205 18.581C9.1475 18.5599 9.26518 18.5011 9.3583 18.4121L20.4055 7.36492C21.2125 6.55966 21.6627 5.46438 21.6555 4.32443C21.657 3.17561 21.2082 2.07199 20.4055 1.25011C19.6003 0.44311 18.505 -0.00714406 17.365 0.000162955C16.2177 -0.00998926 15.1173 0.45462 14.3245 1.28393L3.311 12.3311C3.21388 12.4093 3.14307 12.5154 3.10828 12.6351L1.68943 19.1554C1.6507 19.3895 1.72596 19.628 1.89215 19.7973C2.01689 19.9246 2.18689 19.9974 2.3651 20ZM17.365 1.35151C18.9882 1.35138 20.3042 2.66722 20.3043 4.29048C20.3043 4.30179 20.3043 4.31311 20.3041 4.32443C20.3152 5.09774 20.0101 5.84209 19.4596 6.3852L15.3042 2.19602C15.8516 1.652 16.5931 1.34808 17.365 1.35151ZM14.3582 3.1758L18.5136 7.33116L8.88528 16.9257L4.72992 12.804L14.3582 3.1758ZM4.1894 14.1555L7.53394 17.5L3.24343 18.446L4.1894 14.1555Z" fill="currentColor"></path>
                                    <path d="M23.8175 23.6486H1.18251C0.809333 23.6486 0.506836 23.9511 0.506836 24.3243C0.506836 24.6975 0.809333 25 1.18251 25H23.8175C24.1907 25 24.4932 24.6975 24.4932 24.3243C24.4932 23.9511 24.1907 23.6486 23.8175 23.6486Z" fill="currentColor"></path>
                                </svg>

                            </div>
                            <div class="media-body flex-shrink-1">
                                <h5 class="mb-4">Write to Us</h5>
                                <a href="mailto:info@skola.com" class="text-gray-800">info@teachmeonline.in</a>
                                <a href="mailto:courses@skola.com" class="text-gray-800">support@teachmeonline.in</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl mb-6">
                        <div class="media d-flex">
                            <div class="me-5">
                                <!-- Icon -->
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.0283 6.25C14.3059 6.25 12.9033 4.84833 12.9033 3.125C12.9033 1.40167 14.3059 0 16.0283 0C17.7509 0 19.1533 1.40167 19.1533 3.125C19.1533 4.84833 17.7509 6.25 16.0283 6.25ZM16.0283 1.25C14.995 1.25 14.1533 2.09076 14.1533 3.125C14.1533 4.15924 14.995 5 16.0283 5C17.0616 5 17.9033 4.15924 17.9033 3.125C17.9033 2.09076 17.0616 1.25 16.0283 1.25Z" fill="currentColor"></path>
                                    <path d="M16.0283 20C14.3059 20 12.9033 18.5983 12.9033 16.875C12.9033 15.1517 14.3059 13.75 16.0283 13.75C17.7509 13.75 19.1533 15.1517 19.1533 16.875C19.1533 18.5983 17.7509 20 16.0283 20ZM16.0283 15C14.995 15 14.1533 15.8408 14.1533 16.875C14.1533 17.9092 14.995 18.75 16.0283 18.75C17.0616 18.75 17.9033 17.9092 17.9033 16.875C17.9033 15.8408 17.0616 15 16.0283 15Z" fill="currentColor"></path>
                                    <path d="M3.94531 13.125C2.22275 13.125 0.820312 11.7233 0.820312 10C0.820312 8.27667 2.22275 6.875 3.94531 6.875C5.66788 6.875 7.07031 8.27667 7.07031 10C7.07031 11.7233 5.66788 13.125 3.94531 13.125ZM3.94531 8.125C2.91199 8.125 2.07031 8.96576 2.07031 10C2.07031 11.0342 2.91199 11.875 3.94531 11.875C4.97864 11.875 5.82031 11.0342 5.82031 10C5.82031 8.96576 4.97864 8.125 3.94531 8.125Z" fill="currentColor"></path>
                                    <path d="M6.12066 9.39154C5.90307 9.39154 5.69143 9.27817 5.57729 9.0766C5.40639 8.77661 5.51061 8.39484 5.8106 8.22409L13.5431 3.81568C13.8422 3.64325 14.2247 3.74823 14.3947 4.04914C14.5656 4.34912 14.4614 4.73075 14.1614 4.90164L6.42888 9.30991C6.33138 9.36484 6.22564 9.39154 6.12066 9.39154Z" fill="currentColor"></path>
                                    <path d="M13.8524 16.2665C13.7475 16.2665 13.6416 16.2398 13.5441 16.1841L5.81151 11.7757C5.51152 11.6049 5.40745 11.2231 5.5782 10.9232C5.74818 10.6224 6.12996 10.5182 6.42994 10.6899L14.1623 15.0981C14.4623 15.269 14.5665 15.6506 14.3958 15.9506C14.2807 16.1531 14.0691 16.2665 13.8524 16.2665Z" fill="currentColor"></path>
                                </svg>

                            </div>
                            <div class="media-body flex-shrink-1">
                                <h5 class="mb-4">Follow Us</h5>
                                <!-- Social -->
                                <ul class="list-unstyled list-inline list-social mb-4 mb-md-0 mx-n4">
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
                                    <li class="list-inline-item list-social-item">
                                        <a href="#" class="text-secondary font-size-sm w-36 h-36 shadow-dark-hover d-flex align-items-center justify-content-center rounded-circle border-hover">
                                            <i class="fab fa-skype"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md">
                <h1 class="mb-6">Have A Question?</h1>
                <form class="row">
                    <div class="form-group mb-6 col-xl-6">
                        <label for="exampleInputTitle1">Name</label>
                        <input type="text" class="form-control placeholder-1" id="exampleInputTitle1" placeholder="">
                    </div>

                    <div class="form-group mb-6 col-xl-6">
                        <label for="exampleInputTitle2">Email</label>
                        <input type="email" class="form-control placeholder-1" id="exampleInputTitle2" placeholder="">
                    </div>

                    <div class="form-group mb-6 col-12">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea class="form-control placeholder-1" id="exampleFormControlTextarea1" rows="6" placeholder="Content"></textarea>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block mw-md-300p">SEND</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="mb-8 mb-md-11 rounded overflow-hidden grayscal-hover">
            <div id="map">
            <div class="gmap_canvas"><iframe width="1380" height="485" id="gmap_canvas" src="https://maps.google.com/maps?q=Mahagun%20Mywoods&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">fmovies</a><br><style>.mapouter{position:relative;text-align:right;height:485px;width:1380px;}</style><a href="https://www.embedgooglemap.net">google maps embedded api</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:485px;width:1380px;}</style></div>
            </div>
        </div>
    </div>


<div>
</div>

    <!-- COUNTUP
    ================================================== -->

</div>

    <!-- ICON BLOCKS
    ================================================== -->
    <section class="py-5 pt-md-11 pb-md-10 bg-light text-center">
        <div class="container">
            <div class="mb-md-8 mb-4">
                <h1>Why Study With {{env('APP_NAME')}}</h1>
                <p class="font-size-lg mb-0 text-capitalize">Your Path to Learning Success.</p>
            </div>

            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="p-5 d-inline-block rounded-circle mb-6" style="border: 1px solid #F8C994;">
                        <div class="icon-circle icon-circle-lg" style="background-color: #f5debc; color: #EE8E00;">
                            <!-- Icon -->
                            <svg width="50" height="42" viewBox="0 0 50 42" xmlns="http://www.w3.org/2000/svg">
                                <path d="M40.7772 24.0457L34.8852 20.873C33.9687 20.3794 32.8878 20.4035 31.9939 20.9373C31.1 21.4711 30.5664 22.4115 30.5664 23.4525V30.7043C30.5664 31.7975 31.168 32.7919 32.1364 33.2993C32.5655 33.5241 33.0321 33.6353 33.4971 33.6353C34.0813 33.6353 34.6631 33.4595 35.1637 33.113L41.0558 29.0338C41.9005 28.4491 42.3706 27.4876 42.3133 26.4618C42.2561 25.436 41.6817 24.5328 40.7772 24.0457ZM33.4961 30.7037V23.4526L39.3879 26.6254L33.4961 30.7037Z" fill="currentColor"/>
                                <path d="M17.1875 19.5352H7.8125C7.00352 19.5352 6.34766 20.191 6.34766 21C6.34766 21.809 7.00352 22.4648 7.8125 22.4648H17.1875C17.9965 22.4648 18.6523 21.809 18.6523 21C18.6523 20.191 17.9965 19.5352 17.1875 19.5352Z" fill="currentColor"/>
                                <path d="M17.1875 25.7852H7.8125C7.00352 25.7852 6.34766 26.441 6.34766 27.25C6.34766 28.059 7.00352 28.7148 7.8125 28.7148H17.1875C17.9965 28.7148 18.6523 28.059 18.6523 27.25C18.6523 26.441 17.9965 25.7852 17.1875 25.7852Z" fill="currentColor"/>
                                <path d="M17.1875 32.0352H7.8125C7.00352 32.0352 6.34766 32.691 6.34766 33.5C6.34766 34.309 7.00352 34.9648 7.8125 34.9648H17.1875C17.9965 34.9648 18.6523 34.309 18.6523 33.5C18.6523 32.691 17.9965 32.0352 17.1875 32.0352Z" fill="currentColor"/>
                                <path d="M45.6055 0.00390625H4.39453C1.97139 0.00390625 0 1.97529 0 4.39844V37.6016C0 40.0247 1.97139 41.9961 4.39453 41.9961H45.6055C48.0286 41.9961 50 40.0247 50 37.6016V4.39844C50 1.97529 48.0286 0.00390625 45.6055 0.00390625ZM4.39453 2.93359H45.6055C46.4132 2.93359 47.0703 3.59072 47.0703 4.39844V12.5039H2.92969V4.39844C2.92969 3.59072 3.58682 2.93359 4.39453 2.93359ZM45.6055 39.0664H4.39453C3.58682 39.0664 2.92969 38.4093 2.92969 37.6016V15.4336H47.0703V37.6016C47.0703 38.4093 46.4132 39.0664 45.6055 39.0664Z" fill="currentColor"/>
                                <path d="M7.8125 9.18359C8.62151 9.18359 9.27734 8.52776 9.27734 7.71875C9.27734 6.90974 8.62151 6.25391 7.8125 6.25391C7.00349 6.25391 6.34766 6.90974 6.34766 7.71875C6.34766 8.52776 7.00349 9.18359 7.8125 9.18359Z" fill="currentColor"/>
                                <path d="M14.0625 9.18372C14.8715 9.18372 15.5273 8.52788 15.5273 7.71887C15.5273 6.90986 14.8715 6.25403 14.0625 6.25403C13.2535 6.25403 12.5977 6.90986 12.5977 7.71887C12.5977 8.52788 13.2535 9.18372 14.0625 9.18372Z" fill="currentColor"/>
                                <path d="M20.3125 9.18359C21.1215 9.18359 21.7773 8.52776 21.7773 7.71875C21.7773 6.90974 21.1215 6.25391 20.3125 6.25391C19.5035 6.25391 18.8477 6.90974 18.8477 7.71875C18.8477 8.52776 19.5035 9.18359 20.3125 9.18359Z" fill="currentColor"/>
                            </svg>

                        </div>
                    </div>

                    <h4 class="mb-1">Learn Anything</h4>
                    <p class="px-lg-7 px-xl-8">Explore an extensive range of courses covering various subjects, disciplines, and skill levels. From academic subjects to professional development and hobbies, we have something for everyone.</p>
                </div>

                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="p-5 d-inline-block rounded-circle mb-6" style="border: 1px solid #B7B3F8;">
                        <div class="icon-circle icon-circle-lg" style="background-color: #d3d8f8; color: #5066F5;">
                            <!-- Icon -->
                            <svg width="50" height="50" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                <path d="M42.6777 7.32231C37.9558 2.60048 31.6777 0 25 0C18.3223 0 12.0442 2.60048 7.32231 7.32231C2.60038 12.0441 0 18.3223 0 25C0 31.6777 2.60048 37.9558 7.32231 42.6777C12.0441 47.3996 18.3223 50 25 50C31.6777 50 37.9558 47.3995 42.6777 42.6777C47.3996 37.9559 50 31.6777 50 25C50 18.3223 47.3995 12.0442 42.6777 7.32231ZM41.6253 39.5856L40.2162 38.1764C39.4842 37.4445 39.3028 36.3304 39.7647 35.404L41.0257 32.875C42.2388 30.4418 42.88 27.7188 42.88 25C42.88 22.2812 42.2388 19.5581 41.0257 17.125L39.7647 14.596C39.3028 13.6696 39.4842 12.5555 40.2162 11.8236L41.6253 10.4144C45.1758 14.4502 47.1154 19.5763 47.1154 25C47.1154 30.4237 45.1758 35.5498 41.6253 39.5856ZM12.8168 34.1168L11.5559 31.5878C9.49914 27.4627 9.49914 22.5372 11.5559 18.4121L12.8168 15.8831C13.2154 15.0838 13.3953 14.2209 13.3707 13.3701C13.4213 13.3715 13.4719 13.3738 13.5227 13.3738C14.3238 13.3738 15.1315 13.1914 15.8832 12.8167L18.4122 11.5558C22.5373 9.49894 27.4628 9.49904 31.5879 11.5558L34.1169 12.8167C34.9161 13.2152 35.7788 13.395 36.6293 13.3705C36.6048 14.2212 36.7847 15.0838 37.1832 15.883L38.4441 18.412C40.5009 22.5371 40.5009 27.4626 38.4441 31.5877L37.1832 34.1167C36.7847 34.916 36.6048 35.7786 36.6293 36.6291C35.7788 36.6046 34.9161 36.7845 34.1169 37.183L31.5879 38.4439C27.4627 40.5007 22.5372 40.5006 18.4122 38.4439L15.8832 37.183C15.0839 36.7845 14.2213 36.6046 13.3708 36.6291C13.3952 35.7788 13.2153 34.9161 12.8168 34.1168ZM25 2.88462C30.4237 2.88462 35.5498 4.82423 39.5856 8.37471L38.1764 9.78385C37.4446 10.5157 36.3305 10.6973 35.404 10.2353L32.875 8.97433C30.4418 7.76125 27.7188 7.12 25 7.12C22.2812 7.12 19.5581 7.76125 17.125 8.97433L14.596 10.2353C13.6695 10.6972 12.5556 10.5158 11.8236 9.78385L10.4144 8.37471C14.4502 4.82423 19.5763 2.88462 25 2.88462ZM8.37471 10.4144L9.78385 11.8236C10.5158 12.5555 10.6972 13.6696 10.2353 14.596L8.97433 17.125C7.76125 19.5582 7.12 22.2812 7.12 25C7.12 27.7188 7.76125 30.4419 8.97433 32.875L10.2353 35.404C10.6972 36.3304 10.5158 37.4445 9.78385 38.1764L8.37471 39.5856C4.82423 35.5498 2.88462 30.4237 2.88462 25C2.88462 19.5763 4.82423 14.4502 8.37471 10.4144ZM25 47.1154C19.5763 47.1154 14.4502 45.1758 10.4144 41.6253L11.8236 40.2162C12.5555 39.4844 13.6696 39.3028 14.596 39.7647L17.125 41.0257C19.5582 42.2388 22.2812 42.88 25 42.88C27.7188 42.88 30.4419 42.2388 32.875 41.0257L35.404 39.7647C36.3305 39.3029 37.4445 39.4842 38.1764 40.2162L39.5856 41.6253C35.5498 45.1758 30.4237 47.1154 25 47.1154Z" fill="currentColor"/>
                            </svg>

                        </div>
                    </div>

                    <h4 class="mb-1">Flexible Learning</h4>
                    <p class="px-lg-7 px-xl-8">Study at your own pace and on your own schedule. Our platform allows you to access course materials anytime, anywhere, giving you the flexibility to fit learning into your busy life.</p>
                </div>

                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="p-5 d-inline-block rounded-circle mb-6" style="border: 1px solid #B2F4DC;">
                        <div class="icon-circle icon-circle-lg" style="background-color: #b2f4dc; color: #00C27C;">
                            <!-- Icon -->
                            <svg width="50" height="50" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                <path d="M36.7188 39.7461C36.7188 40.5552 36.063 41.2109 35.2539 41.2109C34.4448 41.2109 33.7891 40.5552 33.7891 39.7461C33.7891 38.937 34.4448 38.2812 35.2539 38.2812C36.063 38.2812 36.7188 38.937 36.7188 39.7461Z" fill="currentColor"/>
                                <path d="M29.3945 17.7734H31.1108C33.3912 17.7734 35.5354 18.6615 37.1479 20.274C37.429 20.5555 37.8056 20.7031 38.184 20.7031C38.5735 20.7031 38.9503 20.5433 39.2193 20.274C40.1783 19.315 41.3261 18.6146 42.5781 18.2026V22.168C42.5781 22.9771 43.2339 23.6328 44.043 23.6328C44.8521 23.6328 45.5078 22.9771 45.5078 22.168V17.7734H46.9727C47.7818 17.7734 48.4375 17.1177 48.4375 16.3086V1.46484C48.4375 0.655746 47.7818 0 46.9727 0H45.2564C42.659 0 40.1939 0.857925 38.1836 2.4395C36.1732 0.857925 33.7082 0 31.1108 0H29.3945C28.5854 0 27.9297 0.655746 27.9297 1.46484V16.3086C27.9297 17.1177 28.5854 17.7734 29.3945 17.7734ZM45.5078 2.92969V14.8438H45.2564C43.2205 14.8438 41.3033 15.3725 39.6484 16.3033V5.03235C41.2033 3.67355 43.1721 2.92969 45.2564 2.92969H45.5078ZM30.8594 2.92969H31.1108C33.1944 2.92969 35.1643 3.67126 36.7188 5.0293V16.3029C35.025 15.3503 33.107 14.8438 31.1108 14.8438H30.8594V2.92969Z" fill="currentColor"/>
                                <path d="M3.02734 50H46.9727C47.7818 50 48.4375 49.3443 48.4375 48.5352V33.8867C48.4375 33.0776 47.7818 32.4219 46.9727 32.4219H33.6418C32.9613 29.0829 30.0018 26.5625 26.4648 26.5625H22.0703V25.0675C23.896 23.6919 25 21.5286 25 19.2383V16.6222C25 12.8906 22.3755 9.64966 18.895 9.08356C14.397 8.3519 10.3516 11.7859 10.3516 16.3086V19.2383C10.3516 21.5286 11.4555 23.6919 13.2812 25.0675V26.5625H8.88672C4.8481 26.5625 1.5625 29.8481 1.5625 33.8867V48.5352C1.5625 49.3443 2.21825 50 3.02734 50ZM45.5078 47.0703H25V35.3516H45.5078V47.0703ZM13.2812 16.3086C13.2812 13.6845 15.6109 11.5177 18.4246 11.9755C20.5029 12.3135 22.0703 14.3112 22.0703 16.6222V19.2383C22.0703 20.8031 21.2471 22.2164 19.8685 23.019C19.418 23.2811 19.1406 23.7633 19.1406 24.2851V27.4204L17.6758 28.8853L16.2109 27.4204V24.2851C16.2109 23.7637 15.9336 23.2811 15.4831 23.019C14.1045 22.2164 13.2812 20.8031 13.2812 19.2383V16.3086ZM4.49219 33.8867C4.49219 31.4636 6.46362 29.4922 8.88672 29.4922H14.1392L16.6401 31.9927C16.9258 32.2788 17.3008 32.4219 17.6758 32.4219C18.0508 32.4219 18.4258 32.2788 18.7115 31.9927L21.2124 29.4922H26.4648C28.3745 29.4922 30.0026 30.7167 30.6076 32.4219H23.5352C22.7261 32.4219 22.0703 33.0776 22.0703 33.8867V42.6796C20.8454 41.758 19.3233 41.2109 17.6758 41.2109H10.3516V33.8867C10.3516 33.0776 9.69582 32.4219 8.88672 32.4219C8.07762 32.4219 7.42188 33.0776 7.42188 33.8867V42.6758C7.42188 43.4849 8.07762 44.1406 8.88672 44.1406H17.6758C19.5858 44.1406 21.2147 45.3652 21.8193 47.0703H4.49219V33.8867Z" fill="currentColor"/>
                            </svg>

                        </div>
                    </div>

                    <h4 class="mb-1">Learn With Experts</h4>
                    <p class="px-lg-7 px-xl-8">Engage in interactive and immersive learning experiences. Our courses incorporate multimedia elements, interactive quizzes, discussions, and practical exercises to enhance your understanding and retention.</p>
                </div>
            </div>
        </div>
    </section>
@include('Common.Footer')
@endsection


