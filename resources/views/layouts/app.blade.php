<!DOCTYPE html>
<html lang="en">

@section('htmlheader')
    @include('layouts.partials.htmlheader')
@show

<body>
    @include('layouts.partials.navigation')

    <!-- Content Wrapper. Contains page content -->
    <div class="container theme-showcase" role="main">

        <div class="page-header">
            <h1>@yield('title')</h1>
        </div>

        @yield('content')
    </div><!-- /.content-wrapper -->

    @section('scripts')
        @include('layouts.partials.scripts')
    @show
</body>
</html>
