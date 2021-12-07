@extends('layouts.front')
@section('content')
    <!-- Page Content-->
    <main class="page-content" style="margin-top: 50px">

        <!--section grid-->
        <section class="section-55 section-lg-top-115 section-lg-bottom-125 text-sm-left">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 section-inset-1">
                        <div class="table-mobile-variant-2 table-responsive-variant-2">
                            <table class="table table-striped text-left table-border-none head-separator table-cart">
                                <thead>
                                <tr class="bg-light">
                                    <th></th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cartitems as $cart)
                                <tr class="h5">
                                    <td class="text-center"><a href="{{route('removecart', ['id' =>$cart->id ])}}"><span class="icon icon-md fl-bigmug-line-recycling10 icon-dark"></span></a></td>
                                    <td>
                                        <div class="media-variant-1">
                                            <div class="media-body"><a  class="text-dark">{{$cart->name}}</a></div>
                                        </div>
                                    </td>
                                    <td class="text-sbold text-dark">{{$cart->price}}  €</td>
                                    <td>
                                        <div class="media-variant-1">
                                            <div class="media-body"><a  class="text-dark">{{$cart->quantity}}</a></div>
                                        </div>
                                    </td>
                                    <td class="text-sbold text-dark">{{$cart->price * $cart->quantity}}  €</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-xs-12 offset-top-55">
                        <h6 class="text-uppercase text-ebold">Totaux du panier</h6>
                        <table class="table table-total table-border-none text-left">
                            <tr class="bg-light">
                                <td>total</td>
                                <td>{{$total}} €</td>
                            </tr>
                        </table>
                        <a href="{{route('checkout')}}">
                            <button class="btn btn-transparent btn-sm btn-icon btn-icon-right pull-sm-right offset-top-30"><span>Passer à la caisse</span> &nbsp; <span class="icon icon-xs material-icons-keyboard_arrow_right"></span></button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
