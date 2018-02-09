<section class="jumbotron text-center">
		<div class="container">
			<div class="album text-muted">
			  <div class="container">
				<div class="row">
					<div class="dropdown">
					  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						@if(Request::is('*/en'))
							English
						@elseif(Request::is('*/fr'))
							French
						@elseif(Request::is('*/de'))
							Deutsch
						@else
							-
						@endif
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="./en">English</a>
						<a class="dropdown-item" href="./fr">French</a>
						<a class="dropdown-item" href="./de">German</a>
					  </div>
					</div>
				</div>
			  </div>
			</div>
		</div>
	</section>