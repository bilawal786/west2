@extends('layouts.admin')
@section('content')
    <!-- Vertical Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Réglages</strong></h2>
                </div>
                <div class="body">
                    <form action="{{route('user.profileupdate')}}" method="POST" class="kenne-form" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="email_address">Prenom</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="fname" value="{{$user->fname}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Nom</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lname" value="{{$user->lname}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Email</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" value="{{$user->email}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Telephone</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Mot de passe actuel (laisser vide pour laisser
                                    inchangé)</label>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="oldpassword">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Nouveau mot de passe (laisser vide pour laisser
                                    inchangé)</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="newpassword">
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">Sauvegarder</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Vertical Layout -->

@endsection
