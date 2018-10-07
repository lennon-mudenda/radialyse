<header>
      <!-- Navbar
    ================================================== -->
      <div class="navbar navbar-static-top">
        <div class="navbar-inner">
          <div class="container">
            <!-- logo -->
            <div class="logo">
              <a href="{{ url('/') }}"><img src="/assets/img/unissalogoold.png" alt=""/>
              </a>
            </div>
            <!-- end logo -->

            <!-- top menu -->
            <div class="navigation">
              <nav>
                <ul class="nav topnav">
                  <li @if(url()->current() == url('/')) class="active" @endif>
                    <a href="{{ url('/') }}"><i class="icon-home"></i> Home </a>
                  </li>
                  <li class="dropdown 
                    @if(substr(url()->current(), 0,strlen(url('/destinations'))) == url('/destinations')) 
                    active 
                    @endif
                    ">
                    <a href="{{ url('/destinations') }}">
                      <i class="icon-plane"></i> Destinations <i class="icon-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ url('/destinations/1') }}">Russia</a></li>
                      <li><a href="{{ url('/destinations/2') }}">Ukraine</a></li>
                      <li><a href="{{ url('/destinations/3') }}">USA</a></li>
                      <li><a href="{{ url('/destinations/4') }}">Switzerland</a></li>
                      <li><a href="{{ url('/destinations/5') }}">Poland</a></li>
                      <li><a href="{{ url('/destinations/6') }}">Cyprus</a></li>
                      <li><a href="{{ url('/destinations/7') }}">China</a></li>
                    </ul>
                  </li>                 
                  <li @if(url()->current() == url('/services')) class="active" @endif>
                    <a href="{{ url('/services') }}">
                      <i class="icon-cogs"></i> Services
                    </a>
                  </li>
                  <li @if(url()->current() == url('/about')) class="active" @endif>
                    <a href="{{ url('/about') }}">
                      <i class="icon-group"></i> About Us
                    </a>
                  </li>
                  <li @if(url()->current() == url('/contact')) class="active" @endif>
                    <a href="{{ url('/contact') }}">
                      <i class="icon-envelope-alt"></i> Contact Us
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
            <!-- end menu -->

          </div>
        </div>
      </div>
    </header>