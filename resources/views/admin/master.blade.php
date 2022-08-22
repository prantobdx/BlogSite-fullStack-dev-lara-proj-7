<!DOCTYPE html>
 <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Blog-Biztrox @yield('title')</title>
        
        @include('admin.includes.assets.css')

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">


            {{-- @if(isset(Auth::user()->id)) --}}

            @if(Auth::check())
            @include('admin.includes.header')
            
            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.includes.menu')
            <!-- Left Sidebar End -->
            @endif

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="{{ Auth::check() ? 'main-content' : '' }}">

                <div class="page-content">
                    <!-- container-fluid start-->
                        @yield('body')
                    <!-- container-fluid end-->
                </div>
                <!-- End Page-content -->

                <!-- Modal -->
                    
                <!-- end modal -->

                 <!-- footer start -->
                 @if(Auth::check())
                    @include('admin.includes.footer')
                 @endif
                <!-- footer end -->
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->


        <!-- JAVASCRIPT strat -->
                @include('admin.includes.assets.script')
        <!-- JAVASCRIPT end -->
        
    </body>

</html>