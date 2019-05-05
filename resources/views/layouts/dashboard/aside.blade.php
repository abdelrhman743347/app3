<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('dashboard/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{auth()->user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
{{--        <form action="#" method="get" class="sidebar-form">--}}
{{--            <div class="input-group">--}}
{{--                <input type="text" name="q" class="form-control" placeholder="Search...">--}}
{{--                <span class="input-group-btn">--}}
{{--                      <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>--}}
{{--                      </button>--}}
{{--                    </span>--}}
{{--            </div>--}}
{{--        </form>--}}
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu tree" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="{{ request()->is('categories') ? 'active' : '' }}">
                <a href="{{route('categories.index')}}">
                    <i class="fa fa-th"></i> <span>Category</span>
                </a>
            </li>

            <li class="{{ request()->is('posts') ? 'active' : '' }}">
                <a href="{{route('posts.index')}}">
                    <i class="fa fa-th"></i> <span>Posts</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
