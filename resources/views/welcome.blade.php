<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    @include('trangchu.head')
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        @include('trangchu.menu')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          @include('trangchu.navbar')

          <!-- / Navbar -->

          <!-- Content wrapper -->
               {{-- @include('Content') --}}
               @yield('content')
            <!-- / Content -->

            <!-- Footer -->
            @include('trangchu.footer')

    @include('trangchu.script')
  </body>
</html>
