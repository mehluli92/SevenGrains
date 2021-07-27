  <ul class="nav">
    <li class="nav-item" style="padding-right: 400px">
      <a class="nav-link active" href="#">
        <img src="{{URL::asset('images/static/logo.jpeg')}}" height="50" alt="" loading="lazy"
            style="margin-top: 2px;"
          />
      </a>
    </li>
    <!--email-->
    <li class="nav-item me-3 me-lg-1" style="padding-top:10px;" >
      <span><i class="far fa-lg fa-envelope"></i></span> <br>
      admin@sevengrains.co.zw
  </li>
    <!--phone-->
    <li class="nav-item me-3 me-lg-1" style="padding-left: 30px; padding-top:10px; padding-right:250px;">
      <span><i class="fas fa-phone"></i></span> <br>
      +263713387987
  </li>
    <!-- Authentication Links -->
    @guest
    <li class="nav-item" style="padding-top:10px;">
        <a href="" class="btn btn btn-outline-success btn-sm waves-effect" data-toggle="modal" data-target="#modalLoginForm">Sign In</a>
    </li>
    @if (Route::has('register'))
        <li class="nav-item" style="padding-top:10px;">
            <div class="">
                <a href="" class="btn btn btn-outline-success btn-sm waves-effect" data-toggle="modal" data-target="#modalRegisterForm">Sign Up</a>
              </div>
        </li>
    @endif
@else
    


    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
@endguest
<!-- End authentication-->
  </ul>