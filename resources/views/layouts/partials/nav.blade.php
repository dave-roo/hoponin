	<div class="navbar navbar-inverse bg-inverse">
      <div class="container d-flex justify-content-between">
		@if(App::getLocale()=='en')
			<a href="/hoponin/en" class="navbar-brand">Hop On In</a>
		@elseif(App::getLocale()=='fr')
			<a href="/hoponin/fr" class="navbar-brand">Hop On In</a>
		@elseif(App::getLocale()=='de')
			<a href="/hoponin/de" class="navbar-brand">Hop On In</a>
		@else
			<a href="/hoponin/" class="navbar-brand">unknown</a>
		@endif
		
		@if (Route::has('login'))
			@auth
			<div class="top-right">
				<div class="btn-group">
					@if(Request::is('*/register*')==false && App::getLocale()=='en')
						<a href="/hoponin/registeroffer/en" class="btn btn-secondary">Offer a Ride (En)</a>
					@elseif(Request::is('*/register*')==false && App::getLocale()=='fr')
						<a href="/hoponin/registeroffer/fr" class="btn btn-secondary">Offer a Ride (Fr)</a>
					@elseif(Request::is('*/register*')==false && App::getLocale()=='de')
						<a href="/hoponin/registeroffer/de" class="btn btn-secondary">Offer a Ride (De)</a>
					@endif

					<div class="btn-group" role="group">
					<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						{{ Auth::user()->name }}
					</button>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
					</ul>
					</div>
					
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
				</div>
				@else
				<div class="btn-group">
					@if(Request::is('*/register*')==false)
						@if(App::getLocale()=='en')
							<a class="btn btn-secondary" href="/hoponin/registeroffer/en">Offer a Ride (En)</a>
						@elseif(App::getLocale()=='fr')
							<a class="btn btn-secondary" href="/hoponin/registeroffer/fr">Offer a Ride (Fr)</a>
						@elseif(App::getLocale()=='de')
							<a class="btn btn-secondary" href="/hoponin/registeroffer/de">Offer a Ride (De)</a>
						@endif
					@endif
						<a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
						<a href="{{ route('login') }}" class="btn btn-secondary">@lang('messages.login')</a>
					@endauth
				</div>
		@endif
			</div>
		</div>
    </div>
</head>
<body>
