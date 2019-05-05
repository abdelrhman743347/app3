@extends('layouts.front.app')
@section('title','Category')
@section('content')
    <br>
    <div class="container">
        <h1>Categroy: {{$category->name}} </h1>
        <span>{{$posts->total()}}</span>
        <hr>
        <div class="row mb-3">
            @foreach($posts as $post)
                <div class="col-6 col-sm-4 themed-grid-col">
                    <div class="card mb-3  text-center">
                        <div class="card-header bg-blue text-green">
                            {{$post->title}}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Writer:{{$post->writer->name}}</h5>
                            <p class="card-text">{{$post->description}}</p>
                            <a href="{{url('post',['id'=>$post->id])}}" class="btn btn-primary">Read more</a>
                        </div>
                        <div class="card-footer text-muted">
                            {{$post->created_at}};
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

        {{--        <div class="row">--}}
        {{--            <div class="col-md-9">--}}
        {{--                <div class="row">--}}
        {{--                    <div class="row">--}}
        {{--                        @foreach($posts as $post)--}}
        {{--                            <div class="col-md-4">--}}
        {{--                                <div class="card mb-3  text-center">--}}
        {{--                                    <div class="card-header bg-blue text-green">--}}
        {{--                                        {{$post->title}}--}}
        {{--                                    </div>--}}
        {{--                                    <div class="card-body">--}}
        {{--                                        <h5 class="card-title">Writer:{{$post->writer->name}}</h5>--}}
        {{--                                        <p class="card-text">{{$post->description}}</p>--}}
        {{--                                        <a href="{{url('post',['id'=>$post->id])}}" class="btn btn-primary">Read more</a>--}}

        {{--                                    </div>--}}
        {{--                                    <div class="card-footer text-muted">--}}
        {{--                                        {{$post->created_at}};--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                            </div>--}}
        {{--                            --}}{{--                    <a class="dropdown-item" href="#">{{$post->title}}</a>--}}
        {{--                        @endforeach--}}
        {{--                    </div>--}}

        {{--                </div>--}}


        {{--            </div>--}}
        {{--            <div class="col-md-3">--}}
        {{--                {{$posts->count()}} Post--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{ $posts->appends(request()->query())->links() }}
    </div>

@endsection
