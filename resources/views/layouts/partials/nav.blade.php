	<div class="navbar navbar-inverse bg-inverse">
      <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand">Hop On In</a>
		
		@if (Route::has('login'))
			
			<div class="top-right">
				@auth
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
							{{ Auth::user()->name }} <span class="caret"></span>
						</a>

						<ul class="dropdown-menu">
							<li>
								<a href="{{ route('logout') }}"
									onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
									Logout
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
				</ul>
				@else
					<button class="btn btn-secondary" data-toggle="modal" data-target="#Register">Register</button>
					<button class="btn btn-primary" data-toggle="modal" data-target="#Login">@lang('messages.login')</button>
				@endauth
			</div>
		@endif
		
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