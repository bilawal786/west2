@extends('layouts.front')

@section('content')

    <main class="page-content" style="margin-top: 50px">
        <!--Breadcrumbs-->

        <section class="section-55 section-lg-top-115 section-lg-bottom-125 text-sm-left">
            <div class="container">
                <div class="row offset-top-25">
                    <div class="col-xs-12 col-sm-6">
                        <h5>Connexion</h5>

                        <form class="form-login" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="exampleInputEmail">Email</label>
                                    <input placeholder="Email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" required value="">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <label for="exampleInputPassword1">Le mot de passe</label>
                                    <input placeholder="Mot de passe" class="form-control @error('password') is-invalid @enderror" type="password" required name="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-12" style="margin-top: 20px">
                                    <button type="submit" class="btn btn-transparent btn-sm btn-icon btn-icon-right" name="login" value="Log in">
                                        <i class="icofont-unlock"></i>Connexion
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h5>S'inscrire</h5>
                        <form class="form-login"  method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="exampleInputEmail">Prénom</label>
                                    <input placeholder="Prénom" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" required value="">
                                    @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <label for="exampleInputEmail">Nom de famille</label>
                                    <input placeholder="Nom de famille" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" required value="">
                                    @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <label for="exampleInputEmail">Email</label>
                                    <input placeholder="Email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" required value="">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <label for="exampleInputPassword1">Mot de passe</label>
                                    <input placeholder="Mot de passe" class="form-control @error('password') is-invalid @enderror" type="password" required name="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <label for="exampleInputPassword1">Confirmez le mot de passe</label>
                                    <input placeholder="Confirmez le mot de passe" class="form-control @error('password') is-invalid @enderror" type="password" required name="password_confirmation">
                                </div>
                                <div class="col-sm-12" style="margin-top: 20px">
                                    <button type="submit" class="btn btn-transparent btn-sm btn-icon btn-icon-right" name="login" value="Log in">
                                        <i class="icofont-unlock"></i>S'inscrire
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
