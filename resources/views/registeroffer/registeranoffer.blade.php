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
						
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-8 control-label">Where are you driving to?</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<label for="name" class="col-md-8 control-label">Departure Date & Time</label>
						<div class="col-md-6">
							<input id="depatureDate" type="text" class="form-control">
						</div>
						
						<label for="name" class="col-md-8 control-label">Arrival Date & Time</label>
						<div class="col-md-6">
							<input id="arrivalDate" type="text" class="form-control">
						</div>
						</br>
						
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
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