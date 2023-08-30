@extends('master')
@push('style')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css') }}"><!--هذا سبب عدم ظهور السهوم للانتقال في المنتجات-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/chosen.min.css') }}">
@endpush
@section('content')
@if($services)
@foreach($services as $value)
  @if($value->section_title=='banner_image')
  <style type="text/css">
      .tm-services-bg { background-image: url({{ asset('/uploads') }}/{{$value->data}}); }
  </style>
  @endif
@endforeach
@endif
        <div class="row">
            <div class="col-12">
                <div class="tm-main-bg tm-services-bg"></div>
            </div>
        </div>

        <!-- Main -->
        <main>
            <!-- Our Digital Services  -->
            <section class="tm-welcome">
                <div class="row">
                    <div class="col-12">
                      <h2 class="tm-section-header tm-header-floating">
                        @if($services)
                        @foreach($services as $value)
                          @if($value->section_title=='second_title')
                            {{$value->data}}
                          @endif
                        @endforeach
                        @endif
                      </h2>
                    </div>
                </div>
                <!--Bestsellers-->
                <div class="row tm-welcome-row tm-services">
                  <section style="background:rgb(35, 37, 37) ; width:300%" >
                    <div class="text-center container py-5">
                      <h4 class="mt-4 mb-5"><strong>Bestsellers</strong></h4>

                      <div class="row" >
                          @if($post)
                          @foreach($post as $value)
                          @if($value->section_title=='second_section')
                          <div class="col-lg-4 col-md-6 mb-4" >
                              <div class="card" style="background-color: rgba(128, 116, 116, 0.15);">
                                <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                                  <img src="{{asset('/uploads')}}/{{$value->image}}"  width="250" height="214" alt="Partner Image" class="img-fluid" />
                                  <a href="#!">
                                    <div class="mask">
                                      <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5>
                                          <span class="badge bg-primary ms-2">New</span><span
                                            class="badge bg-success ms-2">Eco</span><span class="badge bg-danger ms-2">-10%</span>
                                        </h5>
                                      </div>
                                    </div>
                                    <div class="hover-overlay">
                                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </div>
                                  </a>
                                </div>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="#" class="product-name" style="color: aliceblue"><span>{{$value->title}} [White]</span></a>
                                    </div>
                                  <h6 class="mb-3">
                                    <s style="color: rgb(152, 153, 155)">${{$value->price}}</s><strong class="ms-2 text-danger">${{$value->price}}</strong>
                                  </h6>
                                </div>
                              </div>
                          </div>
                          @endif
                          @endforeach
                          @endif
                      </div>

                    </div>
                  </section>
                </div>
            </section>


            <!-- Our Strategic Partners -->
            <section class="tm-featured">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-section-header tm-section-header-small mb-3">
                              @if($services)
                              @foreach($services as $value)
                                @if($value->section_title=='forth_title')
                                  {{$value->data}}
                                @endif
                              @endforeach
                              @endif
                            </h2>
                        </div>
                    </div>

                    <!--MAIN SLIDE-->
                    <section>
                        <div class="wrap-main-slide">
                            <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
                                <div class="item-slide">
                                    <img src="assets/images/main-slider-1-1.jpg" alt="" class="img-slide">
                                    <div class="slide-info slide-1">
                                        <h2 class="f-title">Kid Smart <b>Watches</b></h2>
                                        <span class="subtitle">Compra todos tus productos Smart por internet.</span>
                                        <p class="sale-info">Only price: <span class="price">$59.99</span></p>
                                        <a href="#" class="btn-link">Shop Now</a>
                                    </div>
                                </div>
                                <div class="item-slide">
                                    <img src="assets/images/main-slider-1-2.jpg" alt="" class="img-slide">
                                    <div class="slide-info slide-2">
                                        <h2 class="f-title">Extra 25% Off</h2>
                                        <span class="f-subtitle">On online payments</span>
                                        <p class="discount-code">Use Code: #FA6868</p>
                                        <h4 class="s-title">Get Free</h4>
                                        <p class="s-subtitle">TRansparent Bra Straps</p>
                                    </div>
                                </div>
                                <div class="item-slide">
                                    <img src="assets/images/main-slider-1-3.jpg" alt="" class="img-slide">
                                    <div class="slide-info slide-3">
                                        <h2 class="f-title">Great Range of <b>Exclusive Furniture Packages</b></h2>
                                        <span class="f-subtitle">Exclusive Furniture Packages to Suit every need.</span>
                                        <p class="sale-info">Stating at: <b class="price">$225.00</b></p>
                                        <a href="#" class="btn-link">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!--Most Viewed Products-->
                    <section>
                      <div class="wrap-show-advance-info-box style-1 box-in-site">
                        <h3 class="title-box">Most Viewed Products</h3>
                        <div class="wrap-products">
                          <div class="products slide-carousel owl-carousel style-nav-1 equal-container owl-loaded owl-drag" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive="{&quot;0&quot;:{&quot;items&quot;:&quot;1&quot;},&quot;480&quot;:{&quot;items&quot;:&quot;2&quot;},&quot;768&quot;:{&quot;items&quot;:&quot;3&quot;},&quot;992&quot;:{&quot;items&quot;:&quot;3&quot;},&quot;1200&quot;:{&quot;items&quot;:&quot;5&quot;}}">
                            <div class="owl-stage-outer">
                              <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2582px;">

                                @if($post)
                                @foreach($post as $value)
                                  @if($value->section_title=='second_section')
                                <div class="owl-item active" style="width: 322.667px;">
                                  <div class="product product-style-2 equal-elem " style="height: 405px;">
                                    <div class="product-thumnail">
                                      <a href="detail.php" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{asset('/uploads')}}/{{$value->image}}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                      </a>
                                      <div class="group-flash">
                                        <span class="flash-item new-label">new</span>
                                        <span class="flash-item sale-label">sale</span>
                                      </div>
                                      <div class="wrap-btn">
                                        <a href="#" class="function-link">quick view</a>
                                        <a href="#" class="function-link" style="background: springgreen">${{$value->price}}</a>
                                      </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>{{$value->title}} [White]</span></a>
                                        <!--<div class="wrap-price"><span class="product-price" style="color: aliceblue">$/*$value->price*//span></div>-->
                                    </div>
                                  </div>
                                </div>
                                @endif
                                @endforeach
                                @endif

                              </div>
                            </div>
                            <div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><i class="fa fa-angle-left" aria-hidden="true"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            </div>
                            <div class="owl-dots disabled">
                            </div>
                          </div>
                        </div><!--End wrap-products-->
                      </div>
                    </section>
            </section>

            <!--Our unique approaches for you-->

            <section>
                            <div>
                              <div class="row">
                                  <div class="col-12">
                                      <h2 class="tm-section-header tm-section-header-small mb-5">
                                        @if($services)
                                        @foreach($services as $value)
                                            @if($value->section_title=='third_title')
                                                {{$value->data}}
                                            @endif
                                        @endforeach
                                        @endif</h2>
                                  </div>
                              </div>
                              <div class="row tm-approach-row">
                                @if($post)
                                @foreach($post as $value)
                                @if($value->section_title=='third_section')
                                  <div class="col-md-6">
                                      <div class="tm-approach-box">
                                          <div class="tm-media tm-media-2 tm-media-v-center tm-solid-border">
                                              <i class="fab fa-4x fa-acquisitions-incorporated tm-service-icon"></i>
                                              <div>
                                                  <p><a rel="nofollow" target="_parent" href="https://templatemo.com/tm-542-new-vision">New Vision</a> {!! $value->description !!}</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                @endif
                                @endforeach
                                @endif
                              </div>
                            </div>

                        </section>


        </main>

        <footer>
          @include('footer')
        </footer>

@endsection

@push('footer-scripts')

<script src="{{asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
<script src="{{asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{asset('assets/js/chosen.jquery.min.js') }}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{asset('assets/js/jquery.sticky.js') }}"></script>
<script src="{{asset('assets/js/functions.js') }}"></script>

@endpush





