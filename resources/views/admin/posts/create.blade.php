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
{{--            @include('layouts.dashboard.session')--}}

            @include('layouts.dashboard.errors')
            <form action="{{ route('posts.store', ['writer_id' => auth()->user()->id]) }}" method="post" >
                @csrf
                {{ method_field('post') }}

                <div class="form-group">
                    <label>Psot Category</label>

                    <select name="category_id" class="form-control">
                        <option value="">All Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Post Title</label>

                    <input type="text" name="title" class="form-control" value="{{ old('title') }}"
                           placeholder="Post title" required>
                </div>

                <div class="form-group">
                    <label>Description</label>

                    <input type="text" name="description" class="form-control" value="{{ old('description') }}"
                           placeholder="Post Description" required>
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea class="form-control" name="content" rows="3"  placeholder="Enter Content of The post"></textarea>
                </div>



                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add Post</button>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection
