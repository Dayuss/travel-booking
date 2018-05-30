@include('layouts.header')

@include('layouts.sidebar')

    <div class="content-container wrap">
        <nav class="navbar navbar-default">
            <div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><i class="fa fa-bar-chart"></i> Travel</a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a href="{{ url('logout') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Logout</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <span class="page-title red"><h2>{{ $page }}</h2></span>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">

                    <ol class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li class="active">{{ $page }}</a>
                        </li>
                    </ol>
                </div>
            </div>
            @yield('content')


        </div>
    </div>
@include('layouts.footer')