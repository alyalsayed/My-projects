<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
 @include('admin.layouts.head')
  </head>

  <body>

    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
    <header class="topbar" data-navbarbg="skin5">
     @include('admin.layouts.navbar')
    </header>
    <aside class="left-sidebar" data-sidebarbg="skin5">

      @include('admin.layouts.sidebar')
    </aside>
      <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Employees</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.employees.index')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{route('admin.employees.create')}}">Add New</a></li>
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- End Bread crumb -->

        <!-- Container fluid -->
        <div class="container-fluid">
          <!-- Start Page Content -->
         @yield('content')
          <!-- End Page Content -->

        </div>
        <!-- End Container fluid -->

        <!-- footer -->
        <footer class="footer text-center">
            @include('admin.layouts.footer')
        </footer>
        <!-- End footer -->

      </div>
      <!-- End Page wrapper -->
    </div>
    <!-- End Wrapper -->

    <!-- All Jquery -->
    <!-- ============================================================== -->
        @include('admin.layouts.scripts')
  </body>
</html>
