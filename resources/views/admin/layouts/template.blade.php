<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('ui/backend') }}/assets/" data-template="vertical-menu-template-free">

<!-- head -->
@include('admin.layouts.includes.head')
<!--/ head  -->

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- side Menu -->
            @include('admin.layouts.includes.sidemenu')
            <!-- /side Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Top Navbar -->
                @include('admin.layouts.includes.topnav')
                <!-- /Top Navbar -->


                <!-- Main content -->
                <div class="container my-2">
                    <div class="main-content">
                        <div class="content-wrapper">
                            @yield('main-content')
                        </div>
                    </div>
                </div>
                <!-- /
                <!--/ Main content -->


                <!-- Footer -->
                @include('admin.layouts.includes.footer')
                <!-- / Footer -->
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->



    <!--scripts-->
    @include('admin.layouts.includes.scripts')
    <!--/scripts-->
</body>

</html>
