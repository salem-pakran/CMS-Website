@extends('master')
@section('content')
@if($home)
@foreach($home as $value)
    @if($value->section_title=='banner_image')
    <style type="text/css">
        .tm-main-bg { background-image: url({{ asset('/uploads') }}/{{$value->data}}); }
    </style>
    @endif
@endforeach
@endif
        <div class="row">
            <div class="col-12">
                <div class="tm-main-bg"></div>
            </div>
        </div>

        <!-- Main -->
        <main>
            <!-- Welcome section -->
            <section class="tm-welcome">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-header-floating " style="background: rgb(121, 118, 118)">@if($home)
                        @foreach($home as $value)
                            @if($value->section_title=='second_title')
                                {{$value->data}}
                            @endif
                        @endforeach
                        @endif
                        </h2>
                    </div>
                </div>

                <div class="row tm-welcome-row">
                    @if($post)
                    @foreach($post as $value)
                    @if($value->section_title=='second_section')
                    <article class="col-lg-6 tm-media">
                        <img src="{{asset('/uploads')}}/{{$value->image}}" alt="Welcome image" class="img-fluid tm-media-img" />
                        <div class="tm-media-body">
                            <a href="#" class="tm-article-link"><h3 class="tm-article-title text-uppercase">{{$value->title}}</h3></a>
                            <p>{!! $value->description !!}</p>
                        </div>
                    </article>
                    @endif
                    @endforeach
                    @endif
                </div>


            </section>

            <!-- Featured -->
            <section class="tm-featured">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-section-header-small" style="background: rgb(121, 118, 118)" >
                        @if($home)
                        @foreach($home as $value)
                            @if($value->section_title=='forth_icon')
                                {{$value->data}}
                            @endif
                        @endforeach
                        @endif
                        </h2>
                    </div>
                </div>

                <!-- Carousel -->
                <div class="grid tm-carousel">
                    @if($post)
                    @foreach($post as $value)
                    @if($value->section_title=='slider')
                    <figure class="effect-honey">
                        <img src="{{asset('/uploads')}}/{{$value->image}}" alt="Featured Item">
                        <figcaption>
                            <h4><i>{!! $value->description !!}</i></h4>
                        </figcaption>
                    </figure>
                    @endif
                    @endforeach
                    @endif

                </div>
            </section>

        </main>
        <footer>
            @include('footer')
        </footer>

@endsection

@push('footer-script')

@endpush
