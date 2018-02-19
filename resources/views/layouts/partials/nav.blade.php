	<div class="navbar navbar-inverse bg-inverse">
      <div class="container d-flex justify-content-between">
		@if(App::getLocale()=='en')
			<a href="/hoponin/en" class="navbar-brand">Hop On In</a>
		@elseif(App::getLocale()=='fr')
			<a href="/hoponin/fr" class="navbar-brand">Hop On In</a>
		@elseif(App::getLocale()=='de')
			<a href="/hoponin/de" class="navbar-brand">Hop On In</a>
		@else
			<a href="/hoponin/" class="navbar-brand">Hop On In</a>
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
						<a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#Register">Register</a>
						<a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#Login">@lang('messages.login')</a>
					@endauth
				</div>
		@endif
			</div>
		</div>
    </div>
</head>
<body>

  <div class="modal fade" id="Login" role="dialog">
    <div class="modal-dialog">	
      <div class="modal-content">
        <div class="modal-header">
		  <div class="panel-heading">Login</div>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
			@include('auth.login')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div> 
    </div>
  </div>

  <div class="modal fade" id="Register" role="dialog">
    <div class="modal-dialog">	
      <div class="modal-content">
        <div class="modal-header">
		  <div class="panel-heading">Register</div>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
			@include('auth.register')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div> 
    </div>
  </div>