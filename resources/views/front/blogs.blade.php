@extends('layouts.front')
@section('content')
<!--section blog-->
<section class="section-55 section-lg-top-125 section-lg-bottom-125 text-sm-left">
    <div class="container">
        <div class="range">
            @foreach($blogs as $blog)
            <div class="cell-xs-12 cell-sm-6 cell-md-4">
                <article class="post-blog post-blog-mod-1">
                    <div class="post-img"><img src="{{asset($blog->image)}}" alt=""></div>
                    <div class="post-meta-top">
                        <time datetime="2016"><a href="#" class="text-base">{{$blog->created_at->format('d-m-y')}}</a></time>
                    </div>
                    <div class="post-title">
                        <h5 class="text-regular"><a href="#">{{$blog->title}}</a></h5>
                    </div>
                    <div class="post-body">
                        <p>{{$blog->description}}
{{--                            <a href="blog_post.html" class="btn-link btn-link-primary">read more</a></p>--}}
                    </div>
                </article>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
