@include('guestnavigation')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-70 bg-image plr--9---"
    data-bg="{{ $page_content->where('id', 18)->first()->content }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between text-right">
                    <div class="section-title-area ltn__section-title-2 text-right"> <!-- Change text-left to text-right -->
                        <h6 class="section-subtitle ltn__secondary-color">Maskemas</h6>
                        <h1 class="section-title white-color">Our Products</h1>
                    </div>
                    <div class="ltn__breadcrumb-list">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- PRODUCT DETAILS AREA START -->
<div class="ltn__product-area ltn__product-gutter mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h4>Our packaging provides numerous opportunities to enhance the visual attractiveness of your products. We would be happy to assist you in choosing the right packaging choice that will make your products stand out</h4>
                </div>
                <div class="tab-content text-center">
                    <div class="tab-pane fade active show" id="liton_product_grid">
                        <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                            <div class="row">
                                @forelse($products as $product)
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-3 col-lg-4 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <form action="{{ route('productdetail') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <div class="product-img mt-4">
                                                @if ($product->productImages->isNotEmpty())

                                                        <img src="{{ asset($product->productImages[0]->image_path) }}"
                                                            alt="{{ $product->name }}" style="width: 200px; height: 200px;">

                                                @else
                                                    <h5>No Image Added </h5>
                                                @endif
                                            </div>
                                            <div class="product-info">
                                                <h1 class="product-title m-2">{{ $product->name }}</h1>
                                                <button type="submit" class="btn btn-link no-underline">See More</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                @empty
                                    <div class="section-title-area text-center">
                                        <p>No Products Available</p>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@include('footer')
<script src="js/plugins.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>

</body>

</html>
