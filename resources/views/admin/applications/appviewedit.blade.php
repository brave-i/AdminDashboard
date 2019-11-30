@extends('layouts.applications.layout')
@section('subcontent')


<div class="card">
    <div class="card-header">
        Edit a Application
    </div>

    <div class="card-body">
        <form action="{{ route("admin.appviewupdate") }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('app_country') ? 'has-error' : '' }}">

                <input type="text" value="{{$status}}" name="status" hidden>
                
                <div class="form-group row">
                  <label for="app_id" class="col-sm-2 col-form-label">App ID:</label>
                  <div class="col-sm-10">
                    <input type="text" id="app_id" name="app_id" class="form-control" value="{{$application->id}}" readonly>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="numberof applicants" class="col-sm-2 col-form-label">Number of Applicants:</label>
                  <div class="col-sm-10">
                    <input type="text" id="noa" name="noa" class="form-control" value="Note">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="app_state" class="col-sm-2 col-form-label">State:</label>
                  <div class="col-sm-10">
                    <input type="text" id="app_state" name="app_state" class="form-control" value="{{$application->app_state}}">
                  </div>
                </div>
                <p class="helper-block"></p><br/>

                <div class="form-group row">
                  <label for="app_city" class="col-sm-2 col-form-label">City:</label>
                  <div class="col-sm-10">
                    <input type="text" id="app_city" name="app_city" class="form-control" value="{{$application->app_city}}">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="neighborhoods" class="col-sm-2 col-form-label">Neighborhoods:</label>
                  <div class="col-sm-10">
                    <input type="text" id="neighborhoods" name="neighborhoods" class="form-control" value="{{$application->neighborhoods}}">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="amenities" class="col-sm-2 col-form-label">Amenities:</label>
                  <div class="col-sm-10">
                    <input type="text" id="amenities" name="amenities" class="form-control" value="{{$application->amenities}}">
                  </div>
                </div>
                <p class="helper-block"></p><br/>
                
                <div class="form-group row">
                  <label for="total_target_rent" class="col-sm-2 col-form-label">Total Target Rent:</label>
                  <div class="col-sm-10">
                    <input type="text" id="total_target_rent" name="total_target_rent" class="form-control" value="{{$application->total_target_rent}}">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="individual_target_rent" class="col-sm-2 col-form-label">Individual Target Rent:</label>
                  <div class="col-sm-10">
                    <input type="text" id="individual_target_rent" name="individual_target_rent" class="form-control" value="{{$application->individual_target_rent}}">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-danger">Submit</button>
                  </div>
                </div>
                
            </div>
            <!-- <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div> -->
        </form>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">

        <div class="card">
            <div class="card-header">
                Applicent 1
            </div>
            <div class="card-body">
                <div class="form-group row">
                  <label for="xxx" class="col-sm-6 col-form-label">Name:</label>
                  <div class="col-sm-6">
                    <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="xxx" class="col-sm-6 col-form-label">User ID:</label>
                  <div class="col-sm-6">
                    <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="xxx" class="col-sm-6 col-form-label">Email:</label>
                  <div class="col-sm-6">
                    <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
                  </div>
                </div>
                <p class="helper-block"></p><br/>


                <div class="form-group row">
                  <label for="xxx" class="col-sm-6 col-form-label">State Income:</label>
                  <div class="col-sm-6">
                    <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="xxx" class="col-sm-6 col-form-label">Verified Income:</label>
                  <div class="col-sm-6">
                    <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
                  </div>
                </div>
                <p class="helper-block"></p><br/>


                <div class="form-group row">
                  <label for="xxx" class="col-sm-6 col-form-label">FICO Score:</label>
                  <div class="col-sm-6">
                    <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="xxx" class="col-sm-6 col-form-label">Credit Account Balance:</label>
                  <div class="col-sm-6">
                    <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
                  </div>
                </div>

            </div>
        </div>
        
    </div>

    <div class="col-sm-6">

        <div class="card">
            <div class="card-header">
                Applicent 2
            </div>
            <div class="card-body">
                <div class="form-group row">
                  <label for="xxx" class="col-sm-6 col-form-label">Name:</label>
                  <div class="col-sm-6">
                    <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="xxx" class="col-sm-6 col-form-label">User ID:</label>
                  <div class="col-sm-6">
                    <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="xxx" class="col-sm-6 col-form-label">Email:</label>
                  <div class="col-sm-6">
                    <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
                  </div>
                </div>
                <p class="helper-block"></p><br/>


                <div class="form-group row">
                  <label for="xxx" class="col-sm-6 col-form-label">State Income:</label>
                  <div class="col-sm-6">
                    <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="xxx" class="col-sm-6 col-form-label">Verified Income:</label>
                  <div class="col-sm-6">
                    <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
                  </div>
                </div>
                <p class="helper-block"></p><br/>


                <div class="form-group row">
                  <label for="xxx" class="col-sm-6 col-form-label">FICO Score:</label>
                  <div class="col-sm-6">
                    <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="xxx" class="col-sm-6 col-form-label">Credit Account Balance:</label>
                  <div class="col-sm-6">
                    <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
                  </div>
                </div>

            </div>
        </div>
        
    </div>

</div>


@endsection