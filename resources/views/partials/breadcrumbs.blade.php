<section id="subintro">
      <div class="container">
        <div class="row">
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              @if (url()->current() == url('/contact'))
                <li class="active">Contact us</li>
              @elseif (url()->current() == url('/about'))
                <li class="active">About us</li>
              @elseif (url()->current() == url('/services'))
                <li class="active">Our Services</li>
              @elseif (str_contains(url()->current(),url('/destinations')))
                <li @empty($dest) class="active" @endempty >
                  Destinations
                  @isset ($dest)
                      <i class="icon-angle-right"></i>
                  @endisset
                </li>
                @isset ($dest)
                  <li class="active">{{ $dest->name }}</li>
                @endisset
              @endif
            </ul>
          </div>
          <div class="span4">
            <div class="search">
              <form class="input-append">
                <input class="search-form" id="appendedPrependedInput" type="text" placeholder="Search here.." />
                <button class="btn btn-dark" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
      </div>
</section>