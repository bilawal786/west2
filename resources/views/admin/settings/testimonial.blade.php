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
                    <form action="{{route('testimonial.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="row g-3">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="email_address">Revoir 1</label>
                                <div class="form-group">
                                    <textarea name="review1" class="form-control" id="" cols="30" rows="5">{{$gs->review1}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Nom</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="rg1" value="{{$gs->rg1}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Revoir 2</label>
                                <div class="form-group">
                                    <textarea name="review2" class="form-control" id="" cols="30" rows="5">{{$gs->review2}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Nom</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="rg2" value="{{$gs->rg2}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Revoir 3</label>
                                <div class="form-group">
                                    <textarea name="review3" class="form-control" id="" cols="30" rows="5">{{$gs->review3}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Nom</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="rg3" value="{{$gs->rg3}}">
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
