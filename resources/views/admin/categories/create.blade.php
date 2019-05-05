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
            <form action="{{ route('categories.store') }}" method="post" >
                @csrf
                {{ method_field('post') }}

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                               placeholder="Category Name" required>
                    </div>

                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add Category</button>
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection
