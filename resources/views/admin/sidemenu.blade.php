<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="{{URL::asset('theme-assets/images/backgrounds/02.jpg')}}">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">       
        <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="Seven grains" src="{{URL::asset('images/static/logo.jpeg')}}"/>
            <h3 class="brand-text">Seven Grains</h3></a></li>
        <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
      </ul>
    </div>
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="active"><a href="{{ route('admin') }}"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
        </li>
        <li class=" nav-item"><a href="#"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Charts</span></a>
        </li>
        <li class=" nav-item"><a href="{{ route('events.create') }}"><i class="la la-hourglass-start"></i><span class="menu-title" data-i18n="">Events</span></a>
        </li>
        <li class=" nav-item"><a href="{{ route('posts.create') }}"><i class="la la-pencil-square-o"></i><span class="menu-title" data-i18n="">Blog</span></a>
        </li>
        <li class=" nav-item"><a href="{{route('users.index')}}"><i class="la la-users"></i><span class="menu-title" data-i18n="">Users</span></a>
        </li>
      </ul>
    </div>
    <div class="navigation-background"></div>
  </div>

  
