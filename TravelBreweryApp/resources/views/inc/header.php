
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#index-navbar-right">
        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand" href="/">Travel Brewery</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="index-navbar-right">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a class="page-scroll" href="<?php if(!strpos($_SERVER['SCRIPT_NAME'], '/')): ?>index.php<?php endif;?>#about">About</a>
        </li>
        <li>
          <a class="page-scroll" href="<?php if(!strpos($_SERVER['SCRIPT_NAME'], '/')): ?>index.php<?php endif;?>#services">Our Services</a>
        </li>
        <li>
          <a class="page-scroll" href="<?php if(!strpos($_SERVER['SCRIPT_NAME'], '/')): ?>index.php<?php endif;?>#iti-portfolio">Tours</a>
        </li>
        <li>
          <a href="/itinerary">Trip Itinerary</a>
        </li>
        <li>
          <a class="page-scroll" href="/blogs">Blog</a>
        </li>
        <li>
          <a class="page-scroll" href="/terms-conditions">Terms and Conditions</a>
        </li>
        <li>
          <a class="page-scroll" href="<?php if(!strpos($_SERVER['SCRIPT_NAME'], '/')): ?>index.php<?php endif;?>#contact">Contact</a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
