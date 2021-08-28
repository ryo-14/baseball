@extends ('layouts.giants.base')
<p>{{$team->team_name}}</p>
            
            @if (Route::has('login'))
                <div class="links">
                          @foreach($players as $player)
                          <a href="{{ url('players',["team_name_en"=>$player->team_name_en]) }}">{{ $player->name }}</a>
                          @endforeach
                </div>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
             </div>
            @endif
  </head>