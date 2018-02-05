	<div class="navbar navbar-inverse bg-inverse">
      <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand">Hop On In</a>
		
		@if (Route::has('login'))
			@auth
			<div class="top-right">
				<div class="btn-group">
					<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					{{ Auth::user()->name }}
					</button>
					<div class="dropdown-menu">
					<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
					</div>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
				</div>
				@else
				<div class="btn-group">
					<button class="btn btn-secondary" data-toggle="modal" data-target="#Register">Offer a Ride</button>
					<button class="btn btn-secondary" data-toggle="modal" data-target="#Register">Register</button>
					<button class="btn btn-primary" data-toggle="modal" data-target="#Login">@lang('messages.login')</button>
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