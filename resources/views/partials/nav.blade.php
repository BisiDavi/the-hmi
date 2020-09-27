<nav class="navbar float-panel container-fluid" data-top="0" data-scroll="200">
  <div class="row content-area">
    <div class="logo">
      <a href="/"><img src="{{ asset('images/logo.png') }}" />
      </a>
    </div>
    <div>
      <ul>
        <div id="menulinks" class="menu-links">
          <li class="menu {{ Request::is('/') ? 'active': ''}}">
            <a href="{{ url('/') }}">Home</a>
          </li>
          <li 
          class="menu {{ Request::is('events') ? 'active': ''}}">
            <a href="{{ url('/events') }}">Events</a>
          </li>
          <li 
          class="menu {{ Request::is('special-2') ? 'active': ''}}">
            <a href="{{  url('/special-2') }}">Special</a>
          </li>
          <li 
          class="menu {{ Request::is('menu-2') ? 'active': ''}}">
            <a href="{{  url('/menu-2') }}">Menu</a>
          </li>
          <li 
          class="menu {{ Request::is('latest-news') ? 'active': ''}}">
            <a href="{{  url('/latest-news') }}">Latest News</a>
          </li>
          <li 
          class="menu {{ Request::is('gallery') ? 'active': ''}}">
            <a href="{{  url('/gallery') }}">Gallery</a>
          </li>
          <li 
          class="menu contact {{ Request::is('contact-us-2') ? 'active': ''}}">
            <a href="{{  url('/contact-us-2') }}">Contact us</a>
          </li>
          <li class="menu">
            <a href="#">
              <button class="btn btn-success d-block d-sm-none font-weight-bold">
                (01323) 840459
              </button>
            </a>
          </li>
      </ul>
    </div>
    <div class="header-links">
      <ul class="social-icons ">
          <a href="#" > 
           <img src="{{ asset('images/facebook.svg') }}" class="" alt="facebook">
          </a>
        </li>
        <li>
          <a href="#"> <i class="fa fa-twitter rounded-circle p-2 mr-2 text-white" aria-hidden="true"></i></a>
        </li>
        <li>
          <a href="#"> <i class="fa fa-envelope-o rounded-circle p-2 mr-2 text-white" aria-hidden="true"></i></a>
        </li>
        <li>
          <a href="#">
            <button class="btn btn-success font-weight-bold">
              (01323) 840459
            </button>
          </a>
        </li>
      </ul>
    </div>
    <div class="menu-icon d-block">
      <a href="javascript:void(0);" onclick="openMenu()">
        <i class="fa fa-2x fa-bars" aria-hidden="true"></i>
      </a>
    </div>
    <div id="menusidebar" style="display:none" class="menu-sidebar">
      <ul class="sidebar-menu">
        <li class="close-button">
          <a href="javascript:void(0);" onclick="closeMenu()">
            <i class="fa fa-2x fa-window-close" aria-hidden="true"></i>
          </a>
        </li>
        <li class="menu"><a href="/">Home</a></li>
        <li class="menu">
          <a href="/events">Events</a>
        </li>
        <li class="menu">
          <a href="'/special-2">Special</a>
        </li>
        <li class="menu">
          <a href="'/menu-2">Menu</a>
        </li>
        <li class="menu">
          <a href="/latest-news">Latest News</a>
        </li>
        <li class="menu">
          <a href="/gallery">Gallery</a>
        </li>
        <li class="menu contact">
          <a href="/contact-us-2">Contact us</a>
        </li>
        <li class="menu">
          <a href="#">
            <button class="btn btn-success d-block d-sm-none font-weight-bold">
              (01323) 840459
            </button>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
