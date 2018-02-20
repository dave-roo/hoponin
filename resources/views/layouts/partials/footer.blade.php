<section class="jumbotron text-center">
		<div class="container">
			<div class="album text-muted">
			  <div class="container">
				<div class="row">
					<div class="dropdown">
					  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						@if(App::getLocale()=='en')
							English
						@elseif(App::getLocale()=='fr')
							French
						@elseif(App::getLocale()=='de')
							Deutsch
						@else
							-
						@endif
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="{{ route('settoEnglish') }}">English</a>
						<a class="dropdown-item" href="{{ route('settoFrench') }}">French</a>
						<a class="dropdown-item" href="{{ route('settoGerman') }}">German</a>
					  </div>
					</div>
				</div>
			  </div>
			</div>
		</div>
	</section>