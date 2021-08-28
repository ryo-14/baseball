
  <header>
       @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/teams') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
  </header>