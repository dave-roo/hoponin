@extends('layouts.mainlayout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-8 control-label">@lang('messages.targetdrivinglocation')</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label for="name" class="col-md-8 control-label">Set Price</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-8 control-label">Number of passengers?</label>

                            <div class="col-md-6">
								<select class="form-control">
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								  <option>6</option>
								  <option>7</option>
								  <option>8</option>
								  <option>9</option>
								  <option>10</option>
								</select>
                            </div>
                        </div>
					
						
						<label for="name" class="col-md-8 control-label">Details</label>
						<div class="col-md-6">
							<textarea id="depatureDate" type="text" class="form-control"></textarea>
						</div>
						</br>
						
                        <div class="form-group">
                            <div class="col-md-2">
								@if(App::getLocale()=='en')
									<a class="btn btn-secondary" href="/hoponin/registeranofferdetails/en">Back</a>
								@elseif(App::getLocale()=='fr')
									<a class="btn btn-secondary" href="/hoponin/registeranofferdetails/fr">Back</a>
								@elseif(App::getLocale()=='de')
									<a class="btn btn-secondary" href="/hoponin/registeranofferdetails/de">Back</a>
								@endif

								@if(App::getLocale()=='en')
									<a class="btn btn-primary" href="/hoponin/registeranofferdetails/en">Next</a>
								@elseif(App::getLocale()=='fr')
									<a class="btn btn-primary" href="/hoponin/registeranofferdetails/fr">Next</a>
								@elseif(App::getLocale()=='de')
									<a class="btn btn-primary" href="/hoponin/registeranofferdetails/de">Next</a>
								@endif
                            </div>
                        </div>
						
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection