@include('guestnavigation')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image plr--9---"
    data-bg="img/bg/9.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">// Welcome to our company</h6>
                        <h1 class="section-title white-color">Shop Grid</h1>
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
                <div class="ltn__shop-options">
                    <ul>
                        <li>
                            <div class="short-by text-center">
                                <select class="nice-select">
                                    <option>Default sorting</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by new arrivals</option>
                                    <option>Sort by price: low to high</option>
                                    <option>Sort by price: high to low</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="showing-product-number text-right text-end">
                                <span>Showing 9 of 20 results</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="liton_product_grid">
                        <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                            <div class="row">
                                @forelse($products as $product)
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-3 col-lg-4 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img mt-4">
                                                @if ($product->productImages->isNotEmpty())
                                                    <a href="{{ route('productdetails', ['product' => $product->id]) }}">
                                                        <img src="{{ asset($product->productImages[0]->image_path) }}"
                                                            alt="{{ $product->name }}" style="width: 200px; height: 200px;">
                                                    </a>
                                                @else
                                                    <h5>No Image Added </h5>
                                                @endif
                                            </div>

                                            <div class="product-info">
                                                <h1 class="product-title m-2"><a
                                                        href="">{{ $product->name }}</a>
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-12">
                                        <p>No Products Available</p>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
