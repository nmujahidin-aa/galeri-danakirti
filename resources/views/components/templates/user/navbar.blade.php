<header class="header d-flex flex-wrap align-items-center" data-page="home" data-overlay="true">
    <div class="container d-flex flex-wrap flex-xl-nowrap align-items-center justify-content-between">
        <a class="brand header_logo d-flex align-items-center" href="{{route('home.index')}}">
            <span class="logo">
                <img src="{{URL::to('/')}}/assets/img/logos/logo_danakirti.png" alt="logo" style="width: 48px;" class="d-inline d-xl-none">
                <img src="{{URL::to('/')}}/assets/img/logos/logo_long_danakirti.png" alt="logo" style="width: 9vw; max-width: 200px;" class="d-none d-xl-inline">
                </svg>
            </span>
            {{-- <span class="accent">Danakirti</span> --}}
        </a>
        <nav class="header_nav">
            <ul class="header_nav-list">
                <li class="header_nav-list_item">
                    <a
                        class="nav-link d-inline-flex align-items-center"
                        href="{{ route('home.index') }}"
                    >
                        Beranda
                    </a>
                </li>

                <li class="header_nav-list_item dropdown">
                    <a
                        class="nav-link dropdown-toggle d-inline-flex align-items-center"
                        href="#"
                        data-bs-toggle="collapse"
                        data-bs-target="#shopMenu"
                        aria-expanded="false"
                        aria-controls="shopMenu"
                    >
                        Pelatihan
                        <i class="icon-caret_down icon"></i>
                    </a>
                    <div class="dropdown-menu collapse" id="shopMenu">
                        <ul class="dropdown-list">
                            <li class="list-item nav-item" data-page="shop">
                                <a class="dropdown-item" href="{{route('course.pengembangan-diri.index')}}">Pengembangan Diri</a>
                            </li>
                            <li class="list-item nav-item" data-page="shop2">
                                <a class="dropdown-item" href="{{route('course.pelatihan-ekonomi.index')}}">Pelatihan Ekonomi</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="header_nav-list_item">
                    <a
                        class="nav-link d-inline-flex align-items-center"
                        href="{{ route('product.index') }}"
                    >
                        Produk
                    </a>
                </li>
                <li class="header_nav-list_item dropdown">
                    <a
                        class="nav-link dropdown-toggle d-inline-flex align-items-center"
                        href="#"
                        data-bs-toggle="collapse"
                        data-bs-target="#pagesMenu"
                        aria-expanded="false"
                        aria-controls="pagesMenu"
                    >
                        Katalog
                        <i class="icon-caret_down icon"></i>
                    </a>
                    <div class="dropdown-menu collapse" id="pagesMenu">
                        <ul class="dropdown-list">
                            <li class="list-item nav-item" data-page="about">
                                <a class="dropdown-item" href="{{route('catalog.event')}}">Kegiatan</a>
                            </li>
                            <li class="list-item nav-item" data-page="team">
                                <a class="dropdown-item" href="{{route('catalog.news')}}">Berita</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="header_nav-list_item dropdown">
                    <a
                        class="nav-link dropdown-toggle d-inline-flex align-items-center"
                        href="#"
                        data-bs-toggle="collapse"
                        data-bs-target="#pagesMenu"
                        aria-expanded="false"
                        aria-controls="pagesMenu"
                    >
                        Perusahaan
                        <i class="icon-caret_down icon"></i>
                    </a>
                    <div class="dropdown-menu collapse" id="pagesMenu">
                        <ul class="dropdown-list">
                            <li class="list-item nav-item" data-page="about">
                                <a class="dropdown-item" href="{{route('company.about')}}">Tentang Kami</a>
                            </li>
                            <li class="list-item nav-item" data-page="team">
                                <a class="dropdown-item" href="{{route('company.contact')}}">Hubungi Kami</a>
                            </li>
                            <li class="list-item nav-item" data-page="faq">
                                <a class="dropdown-item" href="{{route('company.faq')}}">FAQ</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
        <span class="header_trigger d-inline-flex d-xl-none flex-column justify-content-between">
            <span class="line line--short"></span>
            <span class="line line"></span>
            <span class="line line--short"></span>
            <span class="line line"></span>
        </span>
        <div class="header_user d-flex justify-content-end align-items-center">
            <form class="header_user-search" action="#" method="get" data-type="searchForm">
                <input class="header_user-search_field field required" type="text" placeholder="Search..." />
                <button
                    class="header_user-search_btn header_user-action d-inline-flex align-items-center justify-content-center"
                    type="submit"
                    data-trigger="search"
                >
                    <i class="icon-search"></i>
                </button>
            </form>
            <a class="header_user-action d-inline-flex align-items-center justify-content-center" href="{{route('auth.login.index')}}">
                <i class="icon-heart"></i>
            </a>
        </div>
    </div>
</header>


