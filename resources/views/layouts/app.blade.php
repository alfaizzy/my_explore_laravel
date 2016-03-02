<!DOCTYPE html>
<html>
  @if (Auth::user())

    @include('layouts.head')
    <!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
    <body class="hold-transition skin-blue layout-boxed sidebar-mini">
      <!-- Site wrapper -->
      <div class="wrapper">

        @include('layouts.header')
        <div class="content-wrapper">
          <section class="content">
            @yield('content')
          </section>
          </div><!-- /.content-wrapper -->
          @include('layouts.footer')

          <!-- Control Sidebar -->

          <!-- Add the sidebar's background. This div must be placed
               immediately after the control sidebar -->
          <div class="control-sidebar-bg"></div>
        </div><!-- ./wrapper -->
        <!-- jQuery 2.1.4 -->
        @include('layouts.jquery_footer')
      </body>

  @else

    @include('layouts.head')
    <!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
    <body class="hold-transition skin-blue layout-boxed sidebar-mini">
      <!-- Site wrapper -->
          @yield('content')
      <!-- jQuery 2.1.4 -->
      @include('layouts.jquery_footer')
    </body>

  @endif




</html>
