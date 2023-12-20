@include('guestnavigation')

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-60 bg-image" data-bg="{{ $page_content->where('id', 16)->first()->content }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">Maskemas</h6>
                        <h1 class="section-title white-color">About Us</h1>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<div class="ltn__about-us-area pt-200--- pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="about-us-img-wrap about-img-left">
                    <img src="img/others/6.png" alt="About Us Image">
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">Know More About Us</h6>
                        <h1 class="section-title">{{ $page_content->where('id', 7)->first()->content }}</h1>
                        <p>{{ $page_content->where('id', 6)->first()->content }}</p>
                    </div>
                    <div class="about-author-info d-flex">
                        <div class="author-name-designation  align-self-center">
                            <h4 class="mb-0">Mas Kemas</h4>
                            <small>Solusi Kemasanmu</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->

<!-- LOGIN AREA START -->
<div class="ltn__login-area pb-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="account-create text-center pt-50">
                    <h1>Vision</h1>
                    <p>{{ $page_content->where('id', 8)->first()->content }}</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="account-create text-center pt-50">
                    <h1>Mission</h1>
                    <p>{{ $page_content->where('id', 9)->first()->content }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOGIN AREA END -->

@include('footer')

<script src="js/plugins.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>

</body>

</html>
