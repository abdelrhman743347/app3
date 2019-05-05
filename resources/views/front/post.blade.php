@extends('layouts.front.app')
@section('title','Category')
@section('content')
    <br>
    <div class="container">
        <h1>{{$post->title}}</h1><hr>
        <div class="row mb-3">
            <div class="col-6 col-sm-4 themed-grid-col">Title:{{$post->title}}</div>
            <div class="col-6 col-sm-4 themed-grid-col">Writer: {{$post->writer->name}}</div>
            <div class="col-6 col-sm-4 themed-grid-col">
                Category: <a href="{{url('category',['category_id'=>$post->category_id])}}">Category: {{$post->category->name}}</a>
            </div>
            <hr>
            <hr>
            <div class="col-8 themed-grid-col">{{$post->content}}</div>

        </div>
    </div>
@endsection
