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

            <form action="{{ route('posts.index') }}" method="get">
                <div class="row">
                    <div class="col-md-3">
                        <input type="text" name="search" class="form-control" placeholder="Search" value="{{ request()->search }}">
                    </div>

                    <div class="col-md-3">
                        <select name="category_id" class="form-control">
                            <option value="">Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ request()->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>Search</button>
                            <a href="{{ route('posts.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Add Post</a>
                    </div>

                </div>
            </form><!-- end of form -->
{{--            <link rel="stylesheet" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">--}}
{{--            <script>--}}
{{--                $(document).ready( function () {--}}
{{--                    $('#myTable').DataTable();--}}
{{--                } );--}}
{{--            </script>--}}

            <h3 class="box-title" style="margin-bottom: 15px">Posts <small>{{ $posts->total() }}</small></h3>

            @if($posts->count() > 0)
                <div class="table-responsive project-stats ">
                    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

                    <table id="myTable"class="table">
{{--                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">--}}
                        <thead>
                        <tr >
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Writer</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($posts as $index=>$post)
                            <tr>
                                <td>{{$index+1  }}</td>
                                <td><a href="{{route('posts.show', [$post->id, $post->category_id])}}">{{$post->title  }}</a></td>
                                <td>{{$post->description  }}</td>
                                <td><a href="{{ route('posts.index', ['category_id' => $category->id]) }}" >{{$post->category->name }}</a></td>

{{--                                <td>{{$post->category->name}}</td>--}}
                                <td>{{$post->writer->name}}</td>


                                <td>
                                    <a href="{{ route('posts.edit', $post->id) }} " class="btn btn-info" >Edit</a>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline-block;">
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
                </div>
                {{ $posts->appends(request()->query())->links() }}
            @else
                <h1>No Data Found</h1>
            @endif
        </section>
        <!-- /.content -->
    </div>
@endsection
