{{-- https://stackoverflow.com/questions/39749683/laravel-extends-and-include. --}}
<!doctype html>
<html class="no-js" lang="">

<head>
    @include('admin.layouts.head')
</head>

<body>
    <aside id="left-panel" class="left-panel">
        @include('admin.layouts.aside')
    </aside>
    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            @include('admin.layouts.right-header')
        </header>

        <div class="breadcrumbs">
            @yield('breadcrumbs')
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <footer class="site-footer">
            @include('admin.layouts.footer')
        </footer>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    @include('admin.layouts.scripts')
</body>

</html>
