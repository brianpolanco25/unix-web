<!--::header part start::-->
<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="img/logo_unix.png" alt="logo" />
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="ti-menu"></span>
            </button>

            <div
                class="collapse navbar-collapse main-menu-item justify-content-center"
                id="navbarSupportedContent" 
            >
                <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about-us">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#academy">Academia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="btn_menu" href="#">Inicio de sesión</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a
                    class="nav-link dropdown-toggle"
                    href="blog.html"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >
                    Pages
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="project.html">project</a>
                    <a class="dropdown-item" href="single-blog.html"
                        >Single blog</a
                    >
                    <a class="dropdown-item" href="elements.html">Elements</a>
                    </div>
                </li> --}}
                
                </ul>
            </div>
            <div class="social_icon d-none d-lg-block">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter-alt"></i></a>
                <a href="#"><i class="ti-dribbble"></i></a>
                <a href="#"><i class="ti-instagram"></i></a>
            </div>
            </nav>
        </div>
        </div>
    </div>
    </header>