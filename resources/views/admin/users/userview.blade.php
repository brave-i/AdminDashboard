@extends('layouts.applications.layout')
@section('subcontent')


<div class="card card-info">
    <div class="card-header">
        Edit a User
    </div>

    <div class="card-body box box-solid box-success">
        <form action="{{ route("admin.applications.update", [$application->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('app_country') ? 'has-error' : '' }}">

                <input type="text" value="{{$status}}" name="status" hidden>

                <label for="user_id">User ID* </label>
                <input type="text" id="user_id" name="user_id" class="form-control" value="admin@email.com">
                


                <label for="user_email">Email* </label>
                <input type="text" id="user_email" name="user_email" class="form-control" value="admin">
                
                
                <label for="use_name">Name* </label>
                <input type="text" id="use_name" name="use_name" class="form-control" value="Note">
                <p class="helper-block">
                </p>
                <br/>


                <label for="user_dob">DOB* </label>
                <input type="text" id="user_dob" name="user_dob" class="form-control" value="admin">
                
                <label for="user_phone">Phone* </label>
                <input type="text" id="user_phone" name="user_phone" class="form-control" value="Note">
                <p class="helper-block">
                </p>
                <br/>
                

                <label for="use_address">Current Address* </label>
                <input type="text" id="use_address" name="use_address" class="form-control" value="Note">
                

                <label for="use_street">Street* </label>
                <input type="text" id="use_street" name="use_street" class="form-control" value="Note">
                
   
                 <label for="user_zip">Zip* </label>
                <input type="text" id="user_zip" name="user_zip" class="form-control" value="Note">
                
                
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
            Financial Information (Plaid)
        </div>
        <div class="card-body box box-solid box-success">

            <label for="use_name">Last Year Income* </label>
            <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
            <label for="use_name">Last Year Income Before Tax* </label>
            <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
            <p class="helper-block">
                </p>
                <br/>

            <label for="use_name">Projected Yearly Income* </label>
            <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
            <label for="use_name">Projected Yearly Income Before Tax* </label>
            <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
            <p class="helper-block">
                </p>
                <br/>


            <label for="use_name">Max Number of Overlapping Income Streams* </label>
            <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
            <label for="use_name">Income Streams* </label>
            <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
            <p class="helper-block">
                </p>
                <br/>

            <label for="use_name">Income Stream Name* </label>
            <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
            <label for="use_name">Monthly Income* </label>
            <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
                        
            <label for="use_name">Days* </label>
            <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
            <label for="use_name">Confidence* </label>
            <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
            <p class="helper-block">
            </p>
            <br/>

            <label for="use_name">Income Stream Name* </label>
            <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
            <label for="use_name">Verified Income* </label>
            <input type="text" id="user_id" name="user_id" class="form-control" value="Note">

        </div>
    </div>
    
  </div>

  <div class="col-sm-6">
      <div class="card card-info">
        <div class="card-header">
            My Pannel2
        </div>
        <div class="card-body">
            <label for="use_name">FICO Score* </label>
            <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
            <label for="use_name">Credit History Length* </label>
            <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
            <label for="use_name">Number of Credit Accounts* </label>
            <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
            <p class="helper-block">
            </p>
            <br/>

            <label for="use_name">Credit Account ID* </label>
            <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
            <label for="use_name">Insititution Name* </label>
            <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
            <label for="use_name">Balance* </label>
            <input type="text" id="user_id" name="user_id" class="form-control" value="Note">
            <label for="use_name">Tradeline Age* </label>
            <input type="text" id="user_id" name="user_id" class="form-control" value="Note" readonly>
            
            <p class="helper-block">
            </p>
            <br/>

        </div>
    </div>
  </div>
</div>


@endsection