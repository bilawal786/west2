@extends('layouts.front')
@section('content')
<!-- Page Content-->
<main class="page-content" style="margin-top: 50px">

    <section class="section-55 section-lg-top-115 section-lg-bottom-115 text-sm-left">
        <div class="container">
            <div class="row product-item">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-0 text-center">
                    <!-- Slick Carousel-->
                    <div data-arrows="false" data-loop="false" data-dots="false" data-swipe="true" data-xs-items="1" data-photo-swipe-gallery="gallery" data-child="#child-carousel" data-for=".thumbnail-carousel" class="slick-slider carousel-parent">
                        <a data-photo-swipe-item="" data-size="568x688" href="" class="item"><img src="https://westindiescare.ikaedigital.com/{{$product['photo']}}" alt="" width="568" height="688"></a>
                       @if($product['gallery'])
                        @foreach(json_decode($product['gallery']) as $gall)
                        <a data-photo-swipe-item="" data-size="568x688" href="" class="item"><img src="https://westindiescare.ikaedigital.com/gallery/{{$gall}}" alt="" width="568" height="688"></a>
                        @endforeach
                           @endif
                       </div>
                    <div id="child-carousel" data-for=".carousel-parent" data-arrows="false" data-loop="false" data-dots="false" data-swipe="true" data-items="2" data-xs-items="4" data-sm-items="4" data-md-items="5" data-lg-items="5" data-slide-to-scroll="1" class="slick-slider thumbnail-carousel">
                        <div class="item">
                            <div class="product-thumbnail"><img src="https://westindiescare.ikaedigital.com/{{$product['photo']}}" alt="" width="109" height="110"></div>
                        </div>
                        @if($product['gallery'])
                        @foreach(json_decode($product['gallery']) as $gall)
                        <div class="item">
                            <div class="product-thumbnail"><img src="https://westindiescare.ikaedigital.com/gallery/{{$gall}}" alt="" width="109" height="110"></div>
                        </div>
                        @endforeach
                            @endif
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 text-sm-left">
                    <form method="POST" action="{{route('addtocart')}}">
                        @csrf
                    <h1>{{$product['title']}}</h1>
                    <div class="about-container offset-top-20">
                        <p>{{$product['description']}}</p>
                    </div>
                    <div class="quantity-wrap offset-top-20"><span>Quantité</span>
                            <label>
                                <input value="1" type="number" id="replyNumber" min="0" step="1" name="quantity" data-bind="value:replyNumber">
                            </label>
                    </div>
                        <input type="hidden" name="product_id" value="{{$product['id']}}">
                    <div class="product-price offset-top-25"><span class="h5 price-new">{{$product['price']}} €</span><span class="h5 price-old">
                      @if($product['oldprice'])
                                <del>{{$product['oldprice']}} €</del>
                            @endif
                        </span></div>
                    <button type="submit" class="btn btn-transparent btn-sm btn-icon btn-icon-right offset-top-25"><span>Ajouter au panier</span> &nbsp; <span class="icon icon-xs material-icons-keyboard_arrow_right"></span></button>
                    </form>
                </div>
            </div>
            <div class="row offset-top-30">
                <div class="col-xs-12">
                    <div class="responsive-tabs horizontal-tabs">
                        <ul class="resp-tabs-list resp-tabs-list-mod-1">
                            <li class="btn btn-transparent btn-sm">Description</li>
                        </ul>
                        <div class="resp-tabs-container">
                            <div class="row row-no-gutter">
                                <div class="col-sm-10 col-md-8 col-lg-6">
                                    <div class="text-sm-left fadeIn animated">
                                        <p>{{$product['description']}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
