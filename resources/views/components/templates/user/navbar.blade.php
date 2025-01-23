<header class="header d-flex flex-wrap align-items-center" data-page="home" data-overlay="true">
    <div class="container d-flex flex-wrap flex-xl-nowrap align-items-center justify-content-between">
        <a class="brand header_logo d-flex align-items-center" href="{{route('home.index')}}">
            <span class="logo">
                <div>
                    <img src="{{URL::to('/')}}/assets/img/logos/logo_long_danakirti.png" alt="logo" style="width: 13vw; min-width: 200px;">
                </div>
            </span>
        </a>
        <nav class="header_nav">
            <ul class="header_nav-list">
                <li class="header_nav-list_item dropdown">
                    <a
                        class="nav-link dropdown-toggle d-inline-flex align-items-center"
                        href="#"
                        data-bs-toggle="collapse"
                        data-bs-target="#shopMenu"
                        aria-expanded="false"
                        aria-controls="shopMenu"
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
                                <a class="dropdown-item" href="#">Pelatihan 01</a>
                            </li>
                            <li class="list-item nav-item" data-page="shop2">
                                <a class="dropdown-item" href="#">Pelatihan 02</a>
                            </li>
                            <li class="list-item nav-item" data-page="product">
                                <a class="dropdown-item" href="#">Pelatihan 03</a>
                            </li>
                            <li class="list-item nav-item" data-page="product2">
                                <a class="dropdown-item" href="#">Pelatihan 04</a>
                            </li>
                            <li class="list-item nav-item" data-page="compare">
                                <a class="dropdown-item" href="#">Pelatihan 05</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="header_nav-list_item dropdown">
                    <a
                        class="nav-link dropdown-toggle d-inline-flex align-items-center"
                        href="#"
                        data-bs-toggle="collapse"
                        data-bs-target="#newsMenu"
                        aria-expanded="false"
                        aria-controls="newsMenu"
                    >
                        Produk
                        <i class="icon-caret_down icon"></i>
                    </a>
                    <div class="dropdown-menu collapse" id="newsMenu">
                        <ul class="dropdown-list">
                            <li class="list-item nav-item" data-page="news">
                                <a class="dropdown-item" href="#">Produk 01</a>
                            </li>
                            <li class="list-item nav-item" data-page="news2">
                                <a class="dropdown-item" href="#">Produk 02</a>
                            </li>
                            <li class="list-item nav-item" data-page="post">
                                <a class="dropdown-item" href="#">Produk 03</a>
                            </li>
                            <li class="list-item nav-item" data-page="post2">
                                <a class="dropdown-item" href="#">Produk 04</a>
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
                        Katalog
                        <i class="icon-caret_down icon"></i>
                    </a>
                    <div class="dropdown-menu collapse" id="pagesMenu">
                        <ul class="dropdown-list">
                            <li class="list-item nav-item" data-page="about">
                                <a class="dropdown-item" href="about.html">Katalog 01</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>

        {{-- <div class="header_user d-flex justify-content-end align-items-center">
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
            <a class="header_user-action d-inline-flex align-items-center justify-content-center" href="wishlist.html">
                <i class="icon-heart"></i>
            </a>
            <a
                class="header_user-action d-inline-flex align-items-center justify-content-center"
                data-bs-toggle="offcanvas"
                data-bs-target="#cartOffcanvas"
                aria-controls="cartOffcanvas"
            >
                <i class="icon-basket"></i>
            </a>
        </div> --}}

        <span class="header_trigger d-inline-flex d-xl-none flex-column justify-content-between">
            <span class="line line--short"></span>
            <span class="line line"></span>
            <span class="line line--short"></span>
            <span class="line line"></span>
        </span>
    </div>
</header>
