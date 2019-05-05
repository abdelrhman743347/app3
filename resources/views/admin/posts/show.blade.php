@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper" style="min-height: 901px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->

        <section class="content">
            <div class="row center-block">
{{--                <div class="col-md-3">--}}

                    <a href="{{ route('posts.edit', $post->id) }} " class="btn btn-info" >Edit POST</a>

                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        {{ method_field('delete') }}
                        <button type="submit" class="btn btn-danger delete">Delete POST</button>
                    </form>
{{--                </div>--}}

            </div>

                <div class="form-group">
                    <label>Category</label>
                    <p>
                    {{$post->category->name}}

                    </p>
                </div>

            <div class="form-group">
                    <label>Post title</label>
                    <p>
                        {{ $post->title }}"
                    </p>
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <p>
                        {{ $post->description }}"
                    </p>
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <p>
                        {{ $post->content }}
                    </p>
                </div>

        </section>
        <!-- /.content -->
    </div>
@endsection
