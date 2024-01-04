@include('guestnavigation')

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image"
    data-bg="img/bg/9.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">Maskemas</h6>
                        <h1 class="section-title white-color">{{$product->name}}</h1>
                    </div>
                    <div class="ltn__breadcrumb-list">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- SHOP DETAILS AREA START -->
<div class="ltn__shop-details-area pb-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="ltn__shop-details-inner mb-60">
                    <div class="row">
                        <div class="col-md-5">
                            <div id="productCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($product->productImages as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                            <img class="d-block w-100 squared-image"
                                                src="{{ asset($image->image_path) }}" alt="Product Image">
                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#productCarousel" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#productCarousel" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="modal-product-info shop-details-info pl-0">
                                <h1 dir="ltr">{{$product->name}}</h1>
                                <hr>
                                <div dir="ltr">
                                <a href="{{ $whatsAppLink }}" class="theme-btn-1 btn btn-effect-1" title="Add to Cart"
                                    data-bs-toggle="modal" data-bs-target="#add_to_cart_modal" >
                                    <i class="fab fa-whatsapp" ></i>
                                    <span>Whatsapp</span>
                                </a>
                                <div>
                                <hr>
                                <!-- Shop Tab Start -->
                                <div class="ltn__shop-details-tab-inner ltn__shop-details-tab-inner-2">
                                    <div class="tab-pane fade active show" id="liton_tab_details_1_1">
                                        <div class="ltn__shop-details-tab-content-inner">
                                            <!-- Wrap the content you want to align right in a separate div -->
                                            <div class="text-right">
                                                <p style="white-space: pre-line" dir="ltr">{{$product->description}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Shop Tab End -->

                            </div>
                        </div>


                    </div>
                    </div>



                    <!-- Shop Tab Start -->
                     @if ($product->productType->isNotEmpty())
                    <div class="ltn__shop-details-tab-inner ltn__shop-details-tab-inner-2 " >
                        <div class="ltn__shop-details-tab-menu" >

                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="liton_tab_details_1_1">
                                <div class="ltn__shop-details-tab-content-inner">
                                    <h4 class="title-2" dir="ltr">Product Type</h4>
                                    <table class="table table-custom mt-3" dir="ltr">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Product Code</th>
                                                <th scope="col">Volume</th>
                                                <th scope="col">Dimension</th>
                                                <th scope="col">Pack Size</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($product->productType as $productType)
                                            <tr>
                                                <td>{{ $productType->name}}</td>
                                                <td>{{ $productType->code}}</td>
                                                <td>{{ $productType->volume}}</td>
                                                <td>{{ $productType->dimension}}</td>
                                                <td>{{ $productType->pack_size}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Shop Tab End -->
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP DETAILS AREA END -->



</div>
</div>

@include('footer')
<!-- Body main wrapper end -->

<!-- All JS Plugins -->
<script src="js/plugins.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>


</body>

</html>
