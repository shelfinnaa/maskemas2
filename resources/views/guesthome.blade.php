@extends('guestnavigation')

@section('style')
<style>
        .fixed-height-container {
            height: 4.5em; /* Adjust the height as needed */
            overflow: hidden;
        }

        .truncated-text {
            margin: 0; /* Reset margin to avoid extra space */
            line-height: 1.5; /* Adjust line height as needed */
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
            -webkit-line-clamp: 3; /* Number of lines to show */
            text-overflow: ellipsis;
        }
</style>
@endsection

@section('main')
<!-- SLIDER AREA START (slider-3) -->
<div class="ltn__slider-area ltn__slider-3  section-bg-1">
    <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
        <!-- ltn__slide-item -->
        <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3">
            <div class="ltn__slide-item-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <h6 class="slide-sub-title animated">
                                        {{ $page_content->where('id', 1)->first()->content }}</h6>
                                    <h1 class="slide-title animated ">
                                        {{ $page_content->where('id', 2)->first()->content }}</h1>
                                    <div class="btn-wrapper animated">
                                        <a href="/shop" class="theme-btn-1 btn btn-effect-1 text-uppercase">Explore
                                            Products</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item-img">
                                <img src="{{ $page_content->where('id', 14)->first()->content }}" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__slide-item -->
        <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3">
            <div class="ltn__slide-item-inner  text-right text-end">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <h6 class="slide-sub-title animated">
                                        {{ $page_content->where('id', 3)->first()->content }} </h6>
                                    <h1 class="slide-title animated ">
                                        {{ $page_content->where('id', 4)->first()->content }}</h1>
                                    <div class="slide-brief animated">
                                        <p>{{ $page_content->where('id', 5)->first()->content }}</p>
                                    </div>
                                    <div class="btn-wrapper animated">
                                        <a href="/shop" class="theme-btn-1 btn btn-effect-1 text-uppercase">Explore
                                            Products</a>
                                        <a href="/about" class="btn btn-transparent btn-effect-3 text-uppercase">LEARN
                                            MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item-img slide-img-left">
                                <img src="{{ $page_content->where('id', 15)->first()->content }}" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
    </div>
</div>
<!-- SLIDER AREA END -->


<div class="ltn__utilize-overlay"></div>



<!-- BANNER AREA START -->
<div class="ltn__banner-area mt-120 mt--90 d-none">
    <div class="container">
        <div class="row ltn__custom-gutter--- justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="shop.html"><img src="{{ $page_content->where('id', 21)->first()->content }}"
                                alt="Banner Image"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="shop.html"><img src="{{ $page_content->where('id', 19)->first()->content }}"
                                alt="Banner Image"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="shop.html"><img src="{{ $page_content->where('id', 20)->first()->content }}"
                                alt="Banner Image"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BANNER AREA END -->

<!-- BANNER AREA START -->
<div class="ltn__banner-area mt-120">
    <div class="container">
        <div class="row ltn__custom-gutter--- justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="shop.html"><img src="{{ $page_content->where('id', 21)->first()->content }}"
                                alt="Banner Image"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__banner-item">
                            <div class="ltn__banner-img">
                                <a href="shop.html"><img src="{{ $page_content->where('id', 19)->first()->content }}"
                                        alt="Banner Image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__banner-item">
                            <div class="ltn__banner-img">
                                <a href="shop.html"><img src="{{ $page_content->where('id', 20)->first()->content }}"
                                        alt="Banner Image"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BANNER AREA END -->

<!-- PRODUCT TAB AREA START (product-item-3) -->

<div class="ltn__product-tab-area ltn__product-gutter pt-85 pb-70">
    <div class="container">
        @if ($products->isNotEmpty())
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h1 class="section-title">Our Products</h1>
        @endif
    </div>
    <div class="tab-content">
        <div class="tab-pane fade active show" id="liton_tab_3_1">
            <div class="ltn__product-tab-content-inner">
                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                    <!-- ltn__product-item -->
                    @forelse($products as $product)
                        <!-- ltn__product-item -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-6">
                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                <div class="product-img mt-4">
                                    @if ($product->productImages->isNotEmpty())
                                        <a href="{{ route('products.show', ['product' => $product->id]) }}">
                                            <img src="{{ asset($product->productImages[0]->image_path) }}"
                                                alt="{{ $product->name }}" style="width: 200px; height: 200px;">
                                        </a>
                                    @else
                                        <h5>No Image Added </h5>
                                    @endif
                                </div>

                                <div class="product-info">
                                    <h1 class="product-title m-2"><a href="">{{ $product->name }}</a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- PRODUCT TAB AREA END -->

<!-- TESTIMONIAL AREA START (testimonial-4) -->
@if ($feedbacks->isNotEmpty())
    <div class="ltn__testimonial-area section-bg-1 pt-290 pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h6 class="section-subtitle ltn__secondary-color">// Testimonials</h6>
                        <h1 class="section-title">Clients Feedbacks<span>.</span></h1>
                    </div>
                </div>
            </div>

            <div class="row ltn__testimonial-slider-3-active slick-arrow-1 slick-arrow-1-inner">
                @foreach ($feedbacks as $testimony)
                    <div class="col-lg-12">
                        <div class="ltn__testimonial-item ltn__testimonial-item-4">
                            <div class="ltn__testimoni-img overflow-hidden">
                                <img src="{{ asset($testimony->person_image) }}"
                                class="me-4 border" alt="Img" style="aspect-ratio:1/1; object-fit: cover;"/>
                            </div>
                            <div class="ltn__testimoni-info">
                            <p class="truncated-text overflow-hidden fixed-height-container">
                                {{ $testimony->feedback }} </p>
                                <h4>{{ $testimony->person_name }}</h4>
                                <h6>{{ $testimony->person_title }} of {{ $clients[$testimony->client - 1]->name }}</h6>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--  -->
            </div>
        </div>
    </div>
@endif

<!-- TESTIMONIAL AREA END -->

<!-- FEATURE AREA START ( Feature - 3) -->

<!-- FEATURE AREA END -->

@include('footer')
<!-- FOOTER AREA END -->

<!-- Body main wrapper end -->

<!-- preloader area start -->
<div class="preloader d-none" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<!-- preloader area end -->

<!-- All JS Plugins -->
<script src="js/plugins.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>

</body>

</html>
@endsection
