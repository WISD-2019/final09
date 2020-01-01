<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="">電影售票</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/home') }}">電影介紹
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('searchtime.index') }}">時刻查詢</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reservation.index') }}">開始訂票</a>
                </li>
                <li class="nav-item">
                    @if (Route::has('login'))
                        @auth
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
                        @else
                        <li class="nav-item">
                            <a class="nav-link" a href="{{ route('login') }}">登入</a>
                        </li>
                        <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" a href="{{ route('register') }}">註冊</a>
                                @endif
                        @endauth
                    @endif
                   </li>
                </li>
            </ul>
        </div>
    </div>
</nav>
