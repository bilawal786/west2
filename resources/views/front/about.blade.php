@extends('layouts.front')
@section('content')

    <!-- Page Content-->
    <main class="page-content">

        <section class="section-55 section-lg-top-115 text-center" >
            <div class="container">
                <h1>À propos de nous</h1>
                <p>{!! $gs->about !!}</p>
            </div>
        </section>

@endsection
