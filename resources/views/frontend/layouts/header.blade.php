<div class="navbar-area">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="index.html" class="logo">
            <img src="{{ asset('') }}frontend/assets/img/logos/logo-1.png" class="logo-one" alt="Logo">
            <img src="{{ asset('') }}frontend/assets/img/logos/footer-logo1.png" class="logo-two"
                alt="Logo">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('') }}frontend/assets/img/logos/logo-1.png" class="logo-one"
                        alt="Logo">
                    <img src="{{ asset('') }}frontend/assets/img/logos/footer-logo1.png" class="logo-two"
                        alt="Logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{url('/')}}" class="nav-link active">
                                Home
                                {{-- <i class='bx bx-chevron-down'></i> --}}
                            </a>
                            {{-- <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link active">
                                        Home One
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-2.html" class="nav-link">
                                        Home Two
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-3.html" class="nav-link">
                                        Home Three
                                    </a>
                                </li>
                            </ul> --}}
                        </li>
                        <li class="nav-item">
                            <a href="about" class="nav-link">
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Pages
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="book" class="nav-link">
                                        Booking
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="team" class="nav-link">
                                        Team
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="faq" class="nav-link">
                                        FAQ
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="restaurant" class="nav-link">
                                        Restaurant
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="reservation" class="nav-link">
                                        Reservation
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="gallery" class="nav-link">
                                        Gallery
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="testimonials" class="nav-link">
                                        Testimonials
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="checkout" class="nav-link">
                                        Check out
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="sign-in" class="nav-link">
                                        Sign In
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="sign-up" class="nav-link">
                                        Sign Up
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="terms-condition" class="nav-link">
                                        Terms & Conditions
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="privacy-policy" class="nav-link">
                                        Privacy Policy
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="404" class="nav-link">
                                        404 page
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="coming-soon" class="nav-link">
                                        Coming Soon
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Services
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="services-1" class="nav-link">
                                        Services Style One
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="services-2" class="nav-link">
                                        Services Style Two
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="service-details" class="nav-link">
                                        Service Details
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Blog
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="blog-1.html" class="nav-link">
                                        Blog Style One
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-2.html" class="nav-link">
                                        Blog Style Two
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-details.html" class="nav-link">
                                        Blog Details
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Rooms
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="room.html" class="nav-link">
                                        Rooms
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="room-details.html" class="nav-link">
                                        Room Details
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="contact" class="nav-link">
                                Contact
                            </a>
                        </li>
                            {{-- This Book Now for Mobile version --}}
                        <li class="nav-item-btn">
                            <a href="#" class="default-btn btn-bg-one border-radius-5">Book Now</a>
                        </li>
                    </ul>

                    <div class="nav-btn">
                        <a href="" class="default-btn btn-bg-one border-radius-5">Book Now</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>