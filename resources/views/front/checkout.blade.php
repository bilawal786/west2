@extends('layouts.front')
@section('content')
    <main class="page-content" style="margin-top: 50px">

        <!--section grid-->
        <section class="section-55 section-lg-top-115 section-lg-bottom-125 text-sm-left">
            <div class="container">
                <form class="row form-custom"  action="{{route('checkout.submit')}}" method="POST" id="payment-form" enctype="multipart/form-data">
                    @csrf
                <div class="row offset-top-40 offset-lg-top-115">
                    <div class="col-xs-12 col-sm-6">
                        <h5>Détails de la facturation</h5>
                            <div class="form-group col-xs-12 col-sm-6 col-md-12">
                                <label for="exampleInputName">prénom*</label>
                                <input type="text" placeholder="prénom" id="exampleInputName" name="fname" required value="{{$user->fname}}" class="form-control">
                            </div>
                            <div class="form-group col-xs-12 col-sm-6 col-md-12">
                                <label for="exampleInputName2">Nom de famille*</label>
                                <input type="text" placeholder="Nom de famille" name="lname" value="{{$user->lname}}" required id="exampleInputName2" class="form-control">
                            </div>
                            <div class="form-group col-xs-12 col-sm-6 col-md-12">
                                <label for="exampleInputEmail">adresse e-mail*</label>
                                <input type="text" placeholder="Adresse e-mail" name="email" value="{{$user->email}}" required id="exampleInputEmail" class="form-control">
                            </div>
                            <div class="form-group col-xs-12 col-sm-6 col-md-12">
                                <label for="exampleInputPhone">Téléphone*</label>
                                <input type="text" placeholder="Téléphone" name="phone" value="{{$user->phone}}" required id="exampleInputPhone" class="form-control">
                            </div>
                            <div class="form-group col-xs-12">
                                <label for="exampleInputCountry">Pays*</label>
                                <!--Select 2-->
                                <input type="text" placeholder="Pays" name="country" value="{{$user->country}}" required id="exampleInputPhone" class="form-control">
                            </div>
                            <div class="form-group col-xs-12">
                                <label for="exampleInputAddress">address*</label>
                                <input type="text" placeholder="Apartment, suite, unit etc. (optional)" required name="address" value="{{$user->address}}" class="form-control">
                            </div>

                    </div>
                    <div class="col-xs-12 col-sm-6 offset-top-40 offset-sm-top-0">
                        <h5>Votre commande</h5>
                        <div class="table-responsive">
                            <table class="table table-striped text-left table-border-none table-half">
                                <thead>
                                <tr class="bg-light">
                                    <th class="text-dark">Produit</th>
                                    <th class="text-dark">Quantité</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cartitems as $cart)
                                <tr>
                                    <td><a>{{$cart->name}}</a></td>
                                    <td class="text-sbold text-dark">{{$cart->quantity}}</td>
                                    <td class="text-sbold text-dark">{{$cart->price * $cart->quantity}} €</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-striped text-left table-border-none table-half">
                                <thead>
                                <tr class="bg-light">
                                    <th class="text-dark">Total</th>
                                    <th>{{$total}} €</th>
                                    <input type="hidden" name="total" value="{{$total}}">
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="payment-wrap offset-sm-top-45">
                            <div class="woocommerce-checkout-payment" id="payment" style="padding: 30px">
                                <ul class="wc_payment_methods payment_methods methods">
                                    <li class="wc_payment_method payment_method_bacs">
                                        <input checked="checked" value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs" type="radio">
                                        <label for="payment_method_bacs">Payez via votre carte</label>
                                        <div class="payment_box payment_method_bacs visibales">
                                            <div class="payment-method">
                                                <div class="payment-accordion">
                                                    <div class="order-button-payment">
                                                        <div class="clearfix">
                                                            <label>Moyen de paiement <span class="required">*</span></label>
                                                            <select name="pay" class="form-control" id="pay">
                                                                <option value="complete">Payer par carte bancaire</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group stripe-payment-method-div">
                                                            <label>{{ __('Carte bancaire') }}</label> <span class="text-danger">*</span>
                                                            <div id="card-element"></div>
                                                            <div id="card-errors" class="text-danger" role="alert"></div>
                                                        </div>
                                                        <input id="card-button" class="btn btn-transparent btn-sm btn-icon pull-sm-right offset-top-30" value="Payer" type="submit" data-secret="{{ $intent }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </section>
    </main>
@endsection
@section('script')

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripeKey = "{{ env('STRIPE_PUBLISHABLE_KEY') }}";
    </script>
    <script src="js/stripe.js"></script>
    <script>
@endsection
