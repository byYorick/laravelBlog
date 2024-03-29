@extends('pages.layout')

@section('content')
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    @foreach($posts as $post)
                    <article class="post">
                        <div class="post-thumb">
                            <a href="{{route('post', [ 'slug' => $post->slug])}}"><img src="{{$post->getImage()}}" alt=""></a>

                            <a href="{{route('post', [ 'slug' => $post->slug])}}" class="post-thumb-overlay text-center">
                                <div class="text-uppercase text-center">View Post</div>
                            </a>
                        </div>
                        <div class="post-content">
                            <header class="entry-header text-center text-uppercase">
                                <h6><a href="#"> {{$post->getCategory()}}</a></h6>

                                <h1 class="entry-title"><a href="{{route('post', [ 'slug' => $post->slug])}}">{{$post->title}}</a></h1>


                            </header>
                            <div class="entry-content">
                                <p>{{$post->description}}</p>

                            </div>
                            <div class="social-share">
                                <span class="social-share-title pull-left text-capitalize">By  {{$post->date}}</span>
                                <ul class="text-center pull-right">
                                    <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    @endforeach


                    <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                </div>
                @include('pages._sidebar')
            </div>
        </div>
    </div>
@endsection
