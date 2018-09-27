
  <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="/">
          {{ config('app.name', 'Travel Brewery') }}
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <ul class="nav navbar-nav">

          <li>
            <a class="page-scroll" href="<?php if(!strpos($_SERVER['SCRIPT_NAME'], '/')): ?>/index.php<?php endif;?>#about">About</a>
          </li>
          <li>
            <a class="page-scroll" href="<?php if(!strpos($_SERVER['SCRIPT_NAME'], '/')): ?>/index.php<?php endif;?>#services">Our Services</a>
          </li>
          <li>
            <a class="page-scroll" href="<?php if(!strpos($_SERVER['SCRIPT_NAME'], '/')): ?>/index.php<?php endif;?>#iti-portfolio">Tours</a>
          </li>
          <li>
            <a href="/itinerary">Trip Itinerary</a>
          </li>
          <li>
            <a class="page-scroll" href="/blogs">Blog</a>
          </li>
          <li>
            <a href="/terms-conditions">Terms and Conditions</a>
          </li>
          <li>
            <a class="page-scroll" href="<?php if(!strpos($_SERVER['SCRIPT_NAME'], '/')): ?>/index.php<?php endif;?>#contact">Contact</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <!-- Authentication Links -->
          @if (Auth::guest())
          <li><a href="/login">Login</a></li>
          <li><a href="/register">Register</a></li>
          @else
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
              <li><a href="/dashboard">Dashboard</a></li>
              <li>
                <a href="/logout"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Logout
              </a>

              <form id="logout-form" action="/logout" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </li>
        @endif

      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
  </nav>
