<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.head')
</head>
<body>
  <main id="wrapper" class="d-flex flex-column container">
    <header class="container">
      @include('includes.header')
    </header>
    @yield('content')
    <footer>
      @include('includes.footer')
    </footer>
  </main>
  <script type="text/javascript" src="{{ asset('assets/js/modernizr-custom.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
  {!! NoCaptcha::renderJs() !!}
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5aa5a32d58ec4f85"></script>
  <a href="#" id="toTop"><span id="toTopHover"><i class="fa fa-angle-up" aria-hidden="true"></i></span></a>
</body>
</html>
