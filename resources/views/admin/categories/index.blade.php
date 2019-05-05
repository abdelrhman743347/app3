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
            @include('layouts.dashboard.session')

            <form action="{{ route('categories.index') }}" method="get">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" name="search" class="form-control" placeholder="Search" value="{{ request()->search }}">
                    </div>

                    <div class="col-md-4">

                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>Search</button>

                        <a href="{{ route('categories.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Add Category</a>
                    </div>
                </div>
            </form><!-- end of form -->
            <h3 class="box-title" style="margin-bottom: 15px">categories <small>{{ $categories->total() }}</small></h3>

        @if($categories->count() > 0)
                <div class="table-responsive project-stats ">
                    <table class="table ">
                        <thead>
                        <tr >
                            <th>#</th>
                            <th>Category Name</th>
{{--                            <th>Related Post</th>--}}
                            <th>Posts count</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($categories as $index=>$category)
                            <tr>
                                <td>{{$index+1  }}</td>
                                <td><a href="{{ route('posts.index', ['category_id' => $category->id]) }}" >{{$category->name }}</a></td>
{{--                                <td><a href="{{ route('posts.index', ['category_id' => $category->id]) }}" class="btn btn-info btn-sm">Related Posts</a></td>--}}
                                <td>{{$category->posts->count()  }}</td>
                                <td>
                                        <a href="{{ route('categories.edit', $category->id) }} " class="btn btn-info" >Edit</a>

                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-danger delete">Delete</button>
                                        </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $categories->appends(request()->query())->links() }}
            @else
                <h1>No Data Found</h1>
            @endif
        </section>
        <!-- /.content -->
    </div>
@endsection
