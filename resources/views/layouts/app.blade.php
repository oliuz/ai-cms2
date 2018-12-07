<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.parts.head')
  </head>
  <!-- Body-->
  <body>
    @include('layouts.parts.category')
    @include('layouts.parts.offcategory')
    @include('layouts.parts.offmenu')
    @include('layouts.parts.topbar')
    <!-- Navbar-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="navbar navbar-sticky">
      @include('layouts.parts.search')
      @include('layouts.parts.navbar')
      @include('layouts.parts.toolbar')
    </header>
    <!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper">
      @include('layouts.parts.title')
      @include('layouts.parts.content')
      @include('layouts.parts.footer')
    </div>
    <!-- Back To Top Button-->
    <a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    @include('layouts.parts.scripts')
  </body>
</html>