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
            @include('layouts.dashboard.errors')
            <form action="{{ route('categories.update', $category->id) }}" method="post">
                @csrf
                {{ method_field('put') }}

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <input type="text" name="name" class="form-control" value="{{ $category->name }}"
                               placeholder="Category Name" required>
                    </div>

                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Update Category</button>
                    </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection
