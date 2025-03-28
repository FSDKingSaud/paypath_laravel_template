<!-- ======== 1.1. header section ======== -->
<header>
    <nav class="container navbar navbar-expand-lg ">
        <div class="container-fluid">
            <!-- site logo -->
            <a class="nav-logo p-0" href="{{ route('home') }}"><img src="assets/images/Logo.png" alt="logo"></a>
            <!-- navigation button  -->
            <button class="navbar-toggle" onclick="if (!window.__cfRLUnblockHandlers) return false; openNav()"
                type="button" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <!-- navigation bar manu  -->
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul
                    class="navbar-nav d-flex justify-content-center align-items-center gap-lg-2 gap-md-2 gap-sm-2 gap-2 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ \Illuminate\Support\Facades\Route::is('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ \Illuminate\Support\Facades\Route::is('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ \Illuminate\Support\Facades\Route::is('feature') ? 'active' : '' }}"
                            href="{{ route('feature') }}">Feature</a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link" href="#">Pages <i class="fa-sharp fa-solid fa-sort-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('pricing') }}">Pricing</a></li>
                            <li><a class="dropdown-item" href="{{ route('contact') }}">Contact</a></li>
                            <li><a class="dropdown-item" href="{{ route('team') }}">Team</a></li>
                            <li><a class="dropdown-item" href="{{ route('testimonials') }}">Testimonials</a></li>
                            <li><a class="dropdown-item" href="{{ route('blogs') }}">Blogs</a></li>
                            <li><a class="dropdown-item" href="{{ route('faq') }}">FAQ</a></li>
                            <li><a class="dropdown-item" href="404">404</a></li>
                            <li><a class="dropdown-item" href="{{ route('coming') }}">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a id="search-bar-bt" class="nav-link" href="#"><i
                                class="fa-solid fa-magnifying-glass"></i></a>
                    </li>
                    <li class="nav-item header_btn ">
                        <a class="nav-link nav-hrf btn-hover1" href="#">Create Account</a>
                    </li>
                    <li class="nav-item" onclick="if (!window.__cfRLUnblockHandlers) return false; open_right_side()">
                        <a class="nav-link" href="#"><i class="fa-sharp fa-solid fa-bars"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--============ navigation left slidebar================-->
    <aside>
        <div id="mySidenav" class="sidenav">
            <div class="side-nav-logo d-flex justify-content-between align-items-center ps-4 pe-3">
                <figure class="navbar-brand"><a href="index{{ route('home') }}"><img src="assets/images/Logo.png"
                            alt="img" class="nav-logo"></a></figure>
                <div class="closebtn" onclick="if (!window.__cfRLUnblockHandlers) return false; closeNav()">
                    <i class="fa-solid fa-square-xmark side-bar-close-btn"></i>
                </div>
            </div>
            <ul>
                <li class="nav-item">
                    <a class="nav-link {{ \Illuminate\Support\Facades\Route::is('home') ? 'active' : '' }}"
                        aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ \Illuminate\Support\Facades\Route::is('about') ? 'active' : '' }}"
                        href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ \Illuminate\Support\Facades\Route::is('feature') ? 'active' : '' }}"
                        href="{{ route('feature') }}">Feature</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ \Illuminate\Support\Facades\Route::is('pricing') ? 'active' : '' }}"
                        href="{{ route('pricing') }}">Pricing</a>
                </li>
                <li class="nav-item">
                    <div class="d-flex align-items-center justify-content-between pt-3" id="slid-btn">
                        <button class="a-slid">Pages</button>
                        <i class="fa-solid fa-caret-down pe-4"></i>
                    </div>
                    <ul id="slid-drop" class="myst">
                        <li><a href="contact{{ route('home') }}">Contact</a></li>
                        <li><a href="team{{ route('home') }}">Team</a></li>
                        <li><a href="testimonials{{ route('home') }}">Testimonials</a></li>
                        <li><a href="blogs{{ route('home') }}">Blogs</a></li>
                        <li><a href="faq{{ route('home') }}">FAQ</a></li>
                        <li><a href="404{{ route('home') }}">404</a></li>
                        <li><a href="coming{{ route('home') }}">Coming Soon</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>
    <!--================== navigation drop search bar================-->
    <div class="search" id="search-bar">
        <form class="d-flex nav-search">
            <input type="text" name="search" placeholder="Enter your text">
            <button class="btn-hover1" type="submit">Search</button>
        </form>
        <button id="remove-btn">
            <i class="fa-solid fa-square-xmark "></i>
        </button>
    </div>
    <!--=================navigation Right slidebar==================-->
    <section class="right-sidbar" id="right_side">
        <div class="d-flex justify-content-between align-items-center">
            <!-- site logo -->
            <a class="p-0 " href="index{{ route('home') }}"><img src="assets/images/Logo.png" alt="logo"></a>
            <button class="close_right_sidebar fa-solid fa-xmark"
                onclick="if (!window.__cfRLUnblockHandlers) return false; close_right_sade()"> </button>
        </div>
        <p class="mt-4 pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
        </p>
        <a href="#" class="btn-hover1">Discover More</a>
        <hr>
        <h5 class="mt-4 mb-4">Connected details:</h5>
        <ul class="d-flex flex-column gap-3">
            <li>
                <a href="#"> <i class="fa-solid fa-phone"></i></a>
                <a href="#">yourname@email.com</a>
            </li>
            <li>
                <a href="#"><i class="fa-solid fa-envelope"></i></a>
                <a href="#">+123-456-7890</a>
            </li>
            <li>
                <a href="#"><i class="fa-solid fa-clock"></i></a>
                <a href="#">Office Hours: 8AM - 11PM Sunday -
                    Weekend Day</a>
            </li>
        </ul>
        <span class="d-flex gap-4 mt-4">
            <a href="#" class="p-0"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="p-0"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="p-0"><i class="fa-brands fa-twitter"></i></a>
        </span>
    </section>
</header>
<!-- ======== End of 1.1. header section ========  -->
