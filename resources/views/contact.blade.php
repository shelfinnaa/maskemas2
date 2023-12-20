@include('guestnavigation')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-70 bg-image"
    data-bg="{{ $page_content->where('id', 17)->first()->content }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">Maskemas</h6>
                        <h1 class="section-title white-color">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- CONTACT ADDRESS AREA START -->
<div class="ltn__contact-address-area mb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="img/icons/10.png" alt="Icon Image">
                    </div>
                    <h3>Email Address</h3>
                    <p>{{ $page_content->where('id', 10)->first()->content }}</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="img/icons/11.png" alt="Icon Image">
                    </div>
                    <h3>Phone Number</h3>
                    <p dir="ltr">{{ $page_content->where('id', 11)->first()->content }}</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="img/icons/12.png" alt="Icon Image">
                    </div>
                    <h3>Location</h3>
                    <p dir="ltr">Surabaya, Indonesia</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CONTACT ADDRESS AREA END -->
<div>
<h1 class="section-title text-center" dir="ltr">Do you have any inquiries?</h1>
<p class="text-center">Connect With Us Via WhatsApp</p>
<div class="account-create text-center pb-150">
    <div class="btn-wrapper">
        <a href="https://wa.me/{{ $page_content->where('id', 13)->first()->content }}" class="theme-btn-1 btn black-btn">CONTACT US</a>
    </div>
</div>
</div>
<!-- FOOTER AREA START -->
@include('footer')
<!-- FOOTER AREA END -->
</div>
<!-- Body main wrapper end -->

<!-- All JS Plugins -->
<script src="js/plugins.js"></script>
<!-- Contact Form -->
<script src="js/contact.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>

</body>

</html>
