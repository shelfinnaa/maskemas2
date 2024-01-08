<!-- FOOTER AREA START -->
<footer class="ltn__footer-area  ">
    <div class="footer-top-area  section-bg-1 plr--5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-about-widget">
                        <div class="footer-logo mb-n5">
                            <div class="site-logo">
                                <img src="{{ asset('img/logo.png') }}" alt="Logo" height="60">
                            </div>
                        </div>
                        <div class="footer-address mt-n5">
                            <ul>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="icon-placeholder"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p>Surabaya</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="icon-call"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p dir="ltr"><a href="tel:{{ $page_content->where('id', 11)->first()->content }}"> {{ $page_content->where('id', 11)->first()->content }}</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="icon-mail"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p dir="ltr"><a href="mailto:{{ $page_content->where('id', 10)->first()->content }}">{{ $page_content->where('id', 10)->first()->content }}</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-menu-widget clearfix">
                        <h4 class="footer-title">Company</h4>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="/about">About</a></li>
                                <li><a href="/shop">All Products</a></li>
                                <li><a href="/contact">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-xl-2 col-md-6 col-sm-6 col-12"> --}}
                    {{-- <div class="footer-widget footer-menu-widget clearfix">
                        <h4 class="footer-title">Services</h4>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="/track">Order tracking</a></li>
                                <li><a href="/login">Login</a></li>
                                <li><a href="account.html">My account</a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
                <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-menu-widget clearfix">
                        <h4 class="footer-title">Customer Care</h4>
                        <div class="footer-menu">
                            <ul>
                                {{-- <li><a href="account.html">My account</a></li> --}}
                                <li><a href="/login">Login</a></li>
                                <li><a href="/track">Order tracking</a></li>
                                <li><a href="/contact">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-sm-6 col-12">

                    <div class="footer-widget footer-newsletter-widget fix">
                        <h4 class="footer-title">Newsletter</h4>
                        <p>Receive updates via email</p>
                        <div class="footer-newsletter">
                            <form action="#">
                                <input type="email" name="email" placeholder="Email*">
                                <div class="btn-wrapper">
                                    <button class="theme-btn-1 btn" type="submit"><i
                                            class="fas fa-location-arrow"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
</footer>
