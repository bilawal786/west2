@extends('layouts.admin')
@section('content')
    <!-- Vertical Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Galerie</strong></h2>
                </div>
                <div class="body">
                    <form action="{{route('gallery.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="row g-3">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="email_address">Image 1</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="image1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset($gallery->image1)}}" style="height: 100px" alt="">
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Image 2</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="image2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset($gallery->image2)}}" style="height: 100px" alt="">
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Image 3</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="image3">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset($gallery->image3)}}" style="height: 100px" alt="">
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Image 4</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="image4">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset($gallery->image4)}}" style="height: 100px" alt="">
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Image 5</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="image5">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset($gallery->image5)}}" style="height: 100px" alt="">
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Image 6</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="image6">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset($gallery->image6)}}" style="height: 100px" alt="">
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Image 7</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="image7">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset($gallery->image7)}}" style="height: 100px" alt="">
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Image 8</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="image8">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset($gallery->image8)}}" style="height: 100px" alt="">
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
