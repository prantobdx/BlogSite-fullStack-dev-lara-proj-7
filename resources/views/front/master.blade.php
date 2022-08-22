<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <title>Blog-Site @yield('title')</title>

  @include('front.includes.css')

</head>

<body>
  

<!-- preloader start -->
<div class="preloader">
    <img src="{{ asset('/') }}front-assets/images/preloader.gif" alt="preloader">
</div>
<!-- preloader end -->

<!-- navigation -->
<header>
    <!-- top header -->
      @include('front.includes.header.header-top')
    <!-- nav bar -->
      @include('front.includes.header.menu')
      <!--Nav bar end -->
</header>

<!-- Search Form -->
  @include('front.includes.header.search')
<!-- /navigation -->

  @yield('body')

<!-- footer -->
<footer class="bg-secondary">
    @include('front.includes.footer.big-footer')
  <!-- copyright -->
    @include('front.includes.footer.small-footer')
</footer>
<!-- /footer -->

@include('front.includes.script')

</body>

<!-- Mirrored from demo.themefisher.com/biztrox/homepage-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Mar 2022 08:07:05 GMT -->
</html>