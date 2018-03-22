<div class="top-bar">
  <div class="container d-flex justify-content-between align-items-center">
    @foreach ($commonVariables as $value)
    <div class="info-box d-flex">
      <a href="tel:" class="mr-3"><i class="fa fa-phone"></i>{{ $value->phone }}</a>
      <a href="mailto:{{ $value->email }}"><i class="fa fa-envelope"></i>{{ $value->email }}</a>
    </div>
    <div class="social-box">

      <a href="{{ $value->facebook }}"><i class="fa fa-facebook"></i></a>
      <a href="{{ $value->twitter }}"><i class="fa fa-twitter"></i></a>
      <a href="{{ $value->linkedin }}" target="_blank"><i class="fa fa-linkedin"></i></a>

      <a href="/404" class="search-button"><i class="fa fa-search"></i></a>
    </div>
    <div class="popup-search ">
    <form class="search-form " action="/search" method="get">
      <div class="">
        <input type="text" class="search-query " name="keyword" placeholder="Search ...">
        <button type="submit" class="btn "><i class="fa fa-search" aria-hidden="true"></i></button>
      </div>
    </form>
  </div>
    @endforeach
  </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="/"><img src="/assets/img/logo.png" class="img-fluid logo" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse navbar-right justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        @if ( ! $menuData->isEmpty() )
        @foreach ($menuData->sortBy('menu_order') as $value)

        <li class="nav-item {{{ (Request::is(preg_replace('|/|','',$value->menu_link)) ? 'active' : '') }}}"><a class="nav-link font-weight-medium" href="{{ $value->menu_link }}">{{ $value->menu_title }}</a></li>

        @endforeach
        @endif
      </ul>
    </div>
  </div>
</nav>
