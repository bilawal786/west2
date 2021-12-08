@extends('layouts.front')
@section('content')
    <!-- Swiper-->
    <div class="swiper-container swiper-slider">
        <div class="swiper-wrapper">
            <div data-slide-bg="{{asset($gs->simage1)}}" class="swiper-slide">
                <div class="swiper-slide-caption">
                    <div data-caption-animate="fadeInUp" class="container text-left">
                        <div class="row">
                            <div class="col-xs-12 col-sm-9 col-md-7 col-lg-6">
                                <h1>{{$gs->stext1}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-slide-bg="{{asset($gs->simage2)}}" class="swiper-slide">
                <div class="swiper-slide-caption">
                    <div data-caption-animate="fadeInUp" class="container text-left">
                        <div class="row">
                            <div class="col-xs-12 col-sm-9 col-md-7 col-lg-6">
                                <h1>{{$gs->stext2}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-slide-bg="{{asset($gs->simage3)}}" class="swiper-slide">
                <div class="swiper-slide-caption">
                    <div class="container text-left">
                        <div class="row">
                            <div data-caption-animate="fadeInUp" class="col-xs-12 col-sm-9 col-md-7 col-lg-6">
                                <h1>{{$gs->stext3}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination"></div>
    </div>
    </header>

    <!-- Page Content-->
    <main class="page-content">
        <!--section 1-->
        <div class="range range-no-gutter">
            <div class="cell-xs-12 cell-sm-6 cell-md-3">
                <a href="#faq"> <div class="banner-block border-right"><span class="icon icon-primary icon-sm fl-bigmug-line-like51"></span>
                    <p class="h5 text-regular">NOS CONSEILS</p>
                </div></a>
            </div>
            <div class="cell-xs-12 cell-sm-6 cell-md-3">
                <a href="{{route('front.about')}}">
                    <div class="banner-block border-right"><span class="icon icon-primary icon-sm fl-bigmug-line-nine16"></span>
                    <p class="h5 text-regular">A PROPOS<br class="visible-md"></p>
                    </div>
                </a>
            </div>
            <div class="cell-xs-12 cell-sm-6 cell-md-3">
                <a href="#testimonial"><div class="banner-block border-right"><span class="icon icon-primary icon-sm fl-bigmug-line-foggy3"></span>
                    <p class="h5 text-regular">Témoignages <br class="visible-md"></p>
                </div>></a>
            </div>
            <div class="cell-xs-12 cell-sm-6 cell-md-3">
                <a href="{{route('front.blogs')}}"><div class="banner-block"><span class="icon icon-primary icon-sm fl-bigmug-line-notification4"></span>
                    <p class="h5 text-regular">BLOG</p>
                </div></a>
            </div>
        </div>
     <section class="section-55 section-sm-top-115 section-sm-bottom-0 text-center" style="margin-bottom: 20px !important;">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <img style="width: 100%" src="{{asset($gs->banner)}}" alt="">
                 </div>
             </div>
         </div>
     </section>




        <section class="section-55 text-center" id="video">
            <div class="container">
                <div class="heading-variant-4">
                    <p><span class="icon icon-sm icon-dark fl-bigmug-line-photo181"></span></p>
                    <h1>Video</h1>
                </div>
            </div>
            <br>
            <div class="col-xs-12">
                <div class="post-blog post-blog-mod-2">
                    <div class="post-img">
                        <iframe src="https://www.youtube.com/embed/{{$gs->video}}" allowfullscreen="" class="post-video"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!--section 8-->
        <section class="section-55 section-lg-top-115 text-center" id="products">
            <div class="container">
                <h1>Catalogue des produits</h1>
                <div class="row clearleft-custom offset-top-45">
                    @foreach($products as $product)
                    <div class="col-xs-12 col-sm-6 col-lg-3">
                        <div class="product"><img src="https://westindiescare.ikaedigital.com/{{$product['photo']}}" alt="">
                            <div class="caption">
                                <h5><a href="{{route('front.product', ['id' => $product['id']])}}">{{$product['title']}}</a></h5>
                                <div class="product-price"><span class="price-old h6">
                                        @if($product['oldprice'])
                                    <del>{{$product['oldprice']}} €</del>
                                        @endif
                                    </span><span class="price-new h6">{{$product['price']}} €</span></div>
                                <div class="product-footer">
                                    <div class="icon-group-inline"><a href="{{route('front.product', ['id' => $product['id']])}}"><span class="icon icon-sm icon-primary icon-circle-sm fl-bigmug-line-shopping204"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="section-55 section-sm-top-115 section-sm-bottom-115 text-center" id="instagram">
            <div class="container">
                <div class="heading-variant-4">
                    <p><span class="icon icon-sm icon-dark fl-bigmug-line-photo181"></span></p>
                    <h1>Galerie</h1>
                </div>
                <!-- RD Instafeed-->
            </div>
            <div data-photo-swipe-gallery="gallery" class="range range-condensed offset-top-40">
                <div class="cell-xs-12 cell-sm-6 cell-md-3"><a data-photo-swipe-item="" data-size="1200x800" href="{{asset($gallery->image1)}}" class="img-thumbnail-variant-3"><img src="{{asset($gallery->image1)}}" alt=""></a></div>
                <div class="cell-xs-12 cell-sm-6 cell-md-3"><a data-photo-swipe-item="" data-size="1200x800" href="{{asset($gallery->image2)}}" class="img-thumbnail-variant-3"><img src="{{asset($gallery->image2)}}" alt=""></a></div>
                <div class="cell-xs-12 cell-sm-6 cell-md-3"><a data-photo-swipe-item="" data-size="1200x800" href="{{asset($gallery->image3)}}" class="img-thumbnail-variant-3"><img src="{{asset($gallery->image3)}}" alt=""></a></div>
                <div class="cell-xs-12 cell-sm-6 cell-md-3"><a data-photo-swipe-item="" data-size="1200x800" href="{{asset($gallery->image4)}}" class="img-thumbnail-variant-3"><img src="{{asset($gallery->image4)}}" alt=""></a></div>
                <div class="cell-xs-12 cell-sm-6 cell-md-3"><a data-photo-swipe-item="" data-size="1200x800" href="{{asset($gallery->image5)}}" class="img-thumbnail-variant-3"><img src="{{asset($gallery->image5)}}" alt=""></a></div>
                <div class="cell-xs-12 cell-sm-6 cell-md-3"><a data-photo-swipe-item="" data-size="1200x800" href="{{asset($gallery->image6)}}" class="img-thumbnail-variant-3"><img src="{{asset($gallery->image6)}}" alt=""></a></div>
                <div class="cell-xs-12 cell-sm-6 cell-md-3"><a data-photo-swipe-item="" data-size="1200x800" href="{{asset($gallery->image7)}}" class="img-thumbnail-variant-3"><img src="{{asset($gallery->image7)}}" alt=""></a></div>
                <div class="cell-xs-12 cell-sm-6 cell-md-3"><a data-photo-swipe-item="" data-size="1200x800" href="{{asset($gallery->image8)}}" class="img-thumbnail-variant-3"><img src="{{asset($gallery->image8)}}" alt=""></a></div>

            </div>

        </section>

        <!--section faq-->
        <section class="section-top-40 text-sm-left" id="faq">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Nos conseils</h1>
                        <!-- Responsive-tabs-->
                        <div data-type="accordion" class="responsive-tabs">
                            <ul class="resp-tabs-list">
                                <li class="h6">{{$gs->q1}}</li>
                                <li class="h6">{{$gs->q2}}</li>
                                <li class="h6">{{$gs->q3}}</li>
                                <li class="h6">{{$gs->q4}}</li>
                            </ul>
                            <div class="resp-tabs-container">
                                <div>{{$gs->a1}}</div>
                                <div>{{$gs->a2}}</div>
                                <div>{{$gs->a3}}</div>
                                <div>{{$gs->a4}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-55 section-lg-115 text-center" id="testimonial">
            <div class="container">
                <div class="heading-variant-1">
                    <h1>Témoignages</h1>
                </div>
                <div class="row offset-top-40">
                    <div class="col-xs-12 col-sm-6 col-lg-4 text-sm-left">
                        <article class="thumbnail-custom-1 max-width-370">
                            <div class="caption-mod-2">
                                <blockquote class="quote-1">
                                    <p>
                                        <q>{{$gs->review1}}</q>
                                    </p>
                                    <p>
                                        <cite>{{$gs->rg1}}</cite>
                                    </p>
                                </blockquote>
                            </div>
                        </article>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-4 text-sm-left offset-top-40 offset-sm-top-0">
                        <article class="thumbnail-custom-1 max-width-370">
                            <div class="caption-mod-2">
                                <blockquote class="quote-1">
                                    <p>
                                        <q>{{$gs->review2}}</q>
                                    </p>
                                    <p>
                                        <cite>{{$gs->rg2}}</cite>
                                    </p>
                                </blockquote>
                            </div>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 text-sm-left offset-top-40 offset-lg-top-0">
                        <article class="thumbnail-custom-1 max-width-370">
                            <div class="caption-mod-2">
                                <blockquote class="quote-1">
                                    <p>
                                        <q>{{$gs->review3}}</q>
                                    </p>
                                    <p>
                                        <cite>{{$gs->rg3}}</cite>
                                    </p>
                                </blockquote>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

@endsection
