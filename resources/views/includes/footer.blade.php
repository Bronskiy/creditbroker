<div class="row-copyright">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <p class="mb-0">© 2002-<?php echo date("Y"); ?> Complete Lending Solutions Pty Limited ABN 96 101 182 987 | Australian Credit License 378240 | <a href="/terms-and-conditions">Terms &amp; Conditions</a><br><a href="https://cls.com.au/" target="_blank">cls.com.au</a> | <a href="https://qedrealty.com.au/" target="_blank">qedrealty.com.au</a> | <a href="https://bidsquare.com.au/" target="_blank">bidsquare.com.au</a></p>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="social-box">
        @foreach ($commonVariables as $value)

        <a href="{{ $value->facebook }}"><i class="fa fa-facebook"></i></a>
        <a href="{{ $value->twitter }}"><i class="fa fa-twitter"></i></a>
        <a href="{{ $value->linkedin }}" target="_blank"><i class="fa fa-linkedin"></i></a>

        @endforeach
      </div>
    </div>
  </div>
</div>
