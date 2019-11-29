@extends('layouts.applications.layout')
@section('subcontent')

<div class="card">
    <div class="card-header">
        Create a new Application
    </div>

    <div class="card-body">
        <form action="{{ route("admin.applications.store")}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label for="app_country">Country*</label>
                <input type="text" value="{{$status}}" name="status" hidden>
                <input type="text" id="app_country" name="app_country" class="form-control" value="{{ old('app_country', isset($application) ? $application->app_country : '') }}">
                    @if($errors->has('app_country'))
                    <p class="help-block">
                        {{ $errors->first('app_country') }}
                    </p>
                    @endif
                <p class="helper-block">
                    Please input a Country
                </p>

                <label for="app_city">City*</label>
                <input type="text" id="app_city" name="app_city" class="form-control" value="{{ old('app_city', isset($application) ? $application->app_city : '') }}">
                    @if($errors->has('app_city'))
                    <p class="help-block">
                        {{ $errors->first('app_city') }}
                    </p>
                    @endif
                <p class="helper-block">
                    Please input a City
                </p>

                <label for="app_state">State*</label>
                <input type="text" id="app_state" name="app_state" class="form-control" value="{{ old('app_state', isset($application) ? $application->app_state : '') }}">
                    @if($errors->has('app_state'))
                    <p class="help-block">
                        {{ $errors->first('app_state') }}
                    </p>
                    @endif
                <p class="helper-block">
                    Please input a State
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection