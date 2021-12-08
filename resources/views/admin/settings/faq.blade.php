@extends('layouts.admin')
@section('content')
    <!-- Vertical Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>FAQ</strong></h2>
                </div>
                <div class="body">
                    <form action="{{route('faq.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="row g-3">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="email_address">Question 1</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="q1" value="{{$gs->q1}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Réponse</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="a1" value="{{$gs->a1}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Question 2</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="q2" value="{{$gs->q2}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Réponse</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="a2" value="{{$gs->a2}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Question 3</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="q3" value="{{$gs->q3}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Réponse</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="a3" value="{{$gs->a3}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Question 4</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="q4" value="{{$gs->q4}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Réponse</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="a4" value="{{$gs->a4}}">
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
