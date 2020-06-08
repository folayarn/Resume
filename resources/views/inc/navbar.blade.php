<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container-fluid">
    <a class="navbar-brand" href="/">{{config('app.name','MyCV')}}</a>
    <button  class="navbar-toggler btn btn-lg btn-success" type="button"
     data-toggle="collapse" data-target="#navbarsExampleDefault"
     aria-controls="navbarsExampleDefault"
    aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse " id="navbarsExampleDefault">

      <ul class="navbar-nav" id="pully">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>

        @guest

        <li class="nav-item ">
            <li class="nav-item">

            </li>
            @if (Route::has('register'))
                <li class="nav-item">


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


            <a class="nav-link" href="/skills">Skills</a></li>
            <li class="nav-item ">

                <a class="nav-link" href="/posts">Projects</a>
            </li>
            <li class="nav-item ">

                <a class="nav-link" href="/services">Services</a>
            </li>
            <li class="nav-item ">

                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item ">

                <a class="nav-link" href="/contact">Contact</a>
            </li>

      </ul>

    </div>
  </nav>

