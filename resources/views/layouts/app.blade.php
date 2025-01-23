<!DOCTYPE html>
<html lang="en">
    <x-templates.user.head />
    <body>
        <x-templates.user.navbar />
        <!-- Homepage content start -->
        <main>
            @yield('content')
        </main>
        <!-- Homepage content end -->
        <x-templates.user.footer/>
        <script src="{{URL::to('/')}}/assets/js/common.min.js"></script>
        <div class="cartOffcanvas offcanvas offcanvas-end" tabindex="-1" id="cartOffcanvas">
            <div class="cartOffcanvas_header d-flex align-items-center justify-content-between">
                <h2 class="cartOffcanvas_header-title" id="cartOffcanvasLabel">Cart</h2>
                <button class="cartOffcanvas_header-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="icon-close"></i>
                </button>
            </div>
            <div class="cartOffcanvas_body">
                <ul class="cartOffcanvas_body-list">
                    <li class="cartOffcanvas_body-list_item d-sm-flex align-items-center">
                        <div class="media">
                            <a href="product.html" target="_blank" rel="noopener norefferer">
                                <picture>
                                    <source data-srcset="{{URL::to('/')}}/assets/img/placeholder.jpg" srcset="{{URL::to('/')}}/assets/img/placeholder.jpg" type="image/webp" />
                                    <img class="lazy" data-src="{{URL::to('/')}}/assets/img/placeholder.jpg" src="{{URL::to('/')}}/assets/img/placeholder.jpg" alt="media" />
                                </picture>
                            </a>
                        </div>
                        <div class="main d-flex flex-wrap justify-content-between align-items-end align-items-lg-center">
                            <a class="main_title" href="product.html" target="_blank" rel="noopener norefferer">
                                <span class="main_title-product"> Jonny Chronic - French Macaroon </span>
                            </a>
                            <div class="main_price">
                                <span class="price">$14.98</span>
                            </div>
                            <div class="qty d-flex align-items-center justify-content-between">
                                <span class="qty_minus control disabled d-flex align-items-center">
                                    <i class="icon-minus"></i>
                                </span>
                                <input class="qty_amount" type="number" readonly value="1" min="1" max="99" />
                                <span class="qty_plus control d-flex align-items-center">
                                    <i class="icon-plus"></i>
                                </span>
                            </div>
                            <a class="btn--underline" href="#">Remove</a>
                        </div>
                    </li>
                    <li class="cartOffcanvas_body-list_item d-sm-flex align-items-center">
                        <div class="media">
                            <a href="product.html" target="_blank" rel="noopener norefferer">
                                <picture>
                                    <source data-srcset="{{URL::to('/')}}/assets/img/placeholder.jpg" srcset="{{URL::to('/')}}/assets/img/placeholder.jpg" type="image/webp" />
                                    <img class="lazy" data-src="{{URL::to('/')}}/assets/img/placeholder.jpg" src="{{URL::to('/')}}/assets/img/placeholder.jpg" alt="media" />
                                </picture>
                            </a>
                        </div>
                        <div class="main d-flex flex-wrap justify-content-between align-items-end align-items-lg-center">
                            <a class="main_title" href="product.html" target="_blank" rel="noopener norefferer">
                                <span class="main_title-product"> House Shatter – Durban Poison </span>
                            </a>
                            <div class="main_price">
                                <span class="price">$6.96</span>
                            </div>
                            <div class="qty d-flex align-items-center justify-content-between">
                                <span class="qty_minus control disabled d-flex align-items-center">
                                    <i class="icon-minus"></i>
                                </span>
                                <input class="qty_amount" type="number" readonly value="1" min="1" max="99" />
                                <span class="qty_plus control d-flex align-items-center">
                                    <i class="icon-plus"></i>
                                </span>
                            </div>
                            <a class="btn--underline" href="#">Remove</a>
                        </div>
                    </li>
                    <li class="cartOffcanvas_body-list_item d-sm-flex align-items-center">
                        <div class="media">
                            <a href="product.html" target="_blank" rel="noopener norefferer">
                                <picture>
                                    <source data-srcset="{{URL::to('/')}}/assets/img/placeholder.jpg" srcset="{{URL::to('/')}}/assets/img/placeholder.jpg" type="image/webp" />
                                    <img class="lazy" data-src="{{URL::to('/')}}/assets/img/placeholder.jpg" src="{{URL::to('/')}}/assets/img/placeholder.jpg" alt="media" />
                                </picture>
                            </a>
                        </div>
                        <div class="main d-flex flex-wrap justify-content-between align-items-end align-items-lg-center">
                            <a class="main_title" href="product.html" target="_blank" rel="noopener norefferer">
                                <span class="main_title-product"> Natures: CBD Tincture </span>
                            </a>
                            <div class="main_price">
                                <span class="price">$7.49</span>
                            </div>
                            <div class="qty d-flex align-items-center justify-content-between">
                                <span class="qty_minus control disabled d-flex align-items-center">
                                    <i class="icon-minus"></i>
                                </span>
                                <input class="qty_amount" type="number" readonly value="1" min="1" max="99" />
                                <span class="qty_plus control d-flex align-items-center">
                                    <i class="icon-plus"></i>
                                </span>
                            </div>
                            <a class="btn--underline" href="#">Remove</a>
                        </div>
                    </li>
                </ul>
                <div class="cartOffcanvas_body-total d-flex justify-content-between align-items-center">
                    <span>Total</span>
                    <span class="cartTotal">$29.43</span>
                </div>
                <a class="cartOffcanvas_body-btn btn" href="cart.html">Proceed to checkout</a>
            </div>
        </div>
        <x-templates.user.script />
    </body>
</html>
