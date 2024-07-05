<!doctype html>
<html lang="en">

   @include('backend.header')

    <body data-topbar="dark">
        <div id="layout-wrapper">

            
           @include('backend.topnavbar')

            <!-- ========== Left Sidebar Start ========== -->
            @include('backend.leftsidebar')
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                @yield('content')
            </div> 
            @include('backend.footer')

    </body>

</html>