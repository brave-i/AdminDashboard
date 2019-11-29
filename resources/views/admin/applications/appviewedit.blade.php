@extends('layouts.applications.layout')
@section('subcontent')


<div class="card card-info">
    <div class="card-header">
        Edit a User
    </div>

    <div class="card-body box box-solid box-success">
        <form action="{{ route("admin.appviewupdate") }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('app_country') ? 'has-error' : '' }}">

                <input type="text" value="{{$status}}" name="status" hidden>


                <label for="app_id">App ID* </label>
                <input type="text" id="app_id" name="app_id" class="form-control" value="{{$application->id}}" readonly>

                <label for="numberof applicants">Number of Applicants* </label>
                <input type="text" id="noa" name="noa" class="form-control" value="Note">
                
                
                <label for="app_state">State* </label>
                <input type="text" id="app_state" name="app_state" class="form-control" value="{{$application->app_state}}">
                <p class="helper-block">
                </p>
                <br/>


                <label for="app_city">City* </label>
                <input type="text" id="app_city" name="app_city" class="form-control" value="{{$application->app_city}}">
                
                <label for="neighborhoods">Neighborhoods* </label>
                <input type="text" id="neighborhoods" name="neighborhoods" class="form-control" value="{{$application->neighborhoods}}">

                <label for="amenities">Amenities* </label>
                <input type="text" id="amenities" name="amenities" class="form-control" value="{{$application->amenities}}">
                <p class="helper-block">
                </p>
                <br/>

                <label for="total_target_rent">Total Target Rent* </label>
                <input type="text" id="total_target_rent" name="total_target_rent" class="form-control" value="{{$application->total_target_rent}}">
                

                <label for="individual_target_rent">Individual Target Rent* </label>
                <input type="text" id="individual_target_rent" name="individual_target_rent" class="form-control" value="{{$application->individual_target_rent}}">
                
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">

        <div class="card card-info">
            <div class="card-header">
                Applicent 1
            </div>
            <div class="card-body box box-solid box-success">

                <label for="use_name">Name* </label>
                <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
                <label for="use_name">User ID* </label>
                <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
                <label for="use_name">Email* </label>
                <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
                <p class="helper-block">
                    </p>
                    <br/>

                <label for="use_name">State Income* </label>
                <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
                <label for="use_name">Verified Income* </label>
                <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
                <p class="helper-block">
                    </p>
                    <br/>

                <label for="use_name">FICO Score* </label>
                <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
                <label for="use_name">Credit Account Balance* </label>
                <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
                <p class="helper-block">
                    </p>
                    <br/>

            </div>
        </div>
        
    </div>

    <div class="col-sm-6">
        <div class="card card-info">
            <div class="card-header">
                Applicent 1
            </div>
            <div class="card-body box box-solid box-success">

                <label for="use_name">Name* </label>
                <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
                <label for="use_name">User ID* </label>
                <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
                <label for="use_name">Email* </label>
                <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
                <p class="helper-block">
                    </p>
                    <br/>

                <label for="use_name">State Income* </label>
                <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
                <label for="use_name">Verified Income* </label>
                <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
                <p class="helper-block">
                    </p>
                    <br/>

                <label for="use_name">FICO Score* </label>
                <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
                <label for="use_name">Credit Account Balance* </label>
                <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
                <p class="helper-block">
                    </p>
                    <br/>

            </div>
        </div>
    
    </div>

</div>


@endsection