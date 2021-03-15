<nav id="nav2" class="navbar navbar-expand-sm shadow-sm fixed-top">
    <a class="navbar-brand" href="/"><img src="images/loog.png" width="60" height="60"  /></a>
    <button  class="navbar-toggler " type="button"
     data-toggle="collapse" data-target="#navbarsExampleDefault"
     aria-controls="navbarsExampleDefault"
    aria-expanded="false" aria-label="Toggle navigation">

      <span class="fa fa-bars" style="color:white"></span>

    </button>

    <div class="collapse navbar-collapse " id="navbarsExampleDefault">

      <ul class="navbar-nav ml-auto">

       
            @guest
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="/register">Register</a>

            </li>
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/home">Admin Home</a>
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


      </ul>


  </nav>

