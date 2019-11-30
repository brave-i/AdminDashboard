@extends('layouts.applications.layout')
@section('subcontent')


<div class="card">
    <div class="card-header">
        Edit a User
    </div>


    <div class="card-body">

        <form action="{{ route("admin.userviewupdate") }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('app_country') ? 'has-error' : '' }}">

                <input type="text" value="{{$status}}" name="status" hidden>

                <div class="form-group row">
                  <label for="user_id" class="col-sm-2 col-form-label">User ID:</label>
                  <div class="col-sm-10">
                    <input type="text" id="user_id" name="user_id" class="form-control" value="{{$user->id}}" readonly>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="email" class="col-sm-2 col-form-label">Email:</label>
                  <div class="col-sm-10">
                    <input type="text" id="email" name="email" class="form-control" value="{{$user->email}}" placeholder="Email">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="name" class="col-sm-2 col-form-label">Name:</label>
                  <div class="col-sm-10">
                    <input type="text" id="name" name="name" class="form-control" value="{{$user->name}}" placeholder="Name">
                  </div>
                </div>

                <p class="helper-block">
                </p>
                <br/>


                <div class="form-group row">
                  <label for="date_of_birth" class="col-sm-2 col-form-label">DOB:</label>
                  <div class="col-sm-10">
                    <input type="text" id="date_of_birth" name="date_of_birth" class="form-control" value="{{$user->date_of_birth}}" placeholder="Date of Birth">
                  </div>
                </div>
                
                <label for="phone">Phone* </label>
                
                <div class="form-group row">
                  <label for="phone" class="col-sm-2 col-form-label">Phone:</label>
                  <div class="col-sm-10">
                    <input type="text" id="phone" name="phone" class="form-control" value="{{$user->phone}}" placeholder="Phone">
                  </div>
                </div>

                <p class="helper-block">
                </p>
                <br/>
                
                <div class="form-group row">
                  <label for="current_address" class="col-sm-2 col-form-label">Current Address:</label>
                  <div class="col-sm-10">
                    <input type="text" id="current_address" name="current_address" class="form-control" value="{{$user->current_address}}" placeholder="Current Address">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="street" class="col-sm-2 col-form-label">Streets:</label>
                  <div class="col-sm-10">
                    <input type="text" id="street" name="street" class="form-control" value="{{$user->street}}" placeholder="Street">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="zip" class="col-sm-2 col-form-label">Zip:</label>
                  <div class="col-sm-10">
                    <input type="text" id="zip" name="zip" class="form-control" value="{{$user->zip}}" placeholder="Zip">
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
            Financial Information (Plaid)
        </div>
        <div class="card-body">


            <div class="form-group row">
              <label for="xxx" class="col-sm-6 col-form-label">Last Year Income:</label>
              <div class="col-sm-6">
                <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
              </div>
            </div>
  
            <div class="form-group row">
              <label for="xxx" class="col-sm-6 col-form-label">Last Year Income Before Tax:</label>
              <div class="col-sm-6">
                <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
              </div>
            </div>
            <p class="helper-block"></p><br/>

            <div class="form-group row">
              <label for="xxx" class="col-sm-6 col-form-label">Projected Yearly Income:</label>
              <div class="col-sm-6">
                <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
              </div>
            </div>

            <div class="form-group row">
              <label for="xxx" class="col-sm-6 col-form-label">Projected Yearly Income Before Tax:</label>
              <div class="col-sm-6">
                <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
              </div>
            </div>
            <p class="helper-block"></p><br/>

            <div class="form-group row">
              <label for="xxx" class="col-sm-6 col-form-label">Max Number of Overlapping Income Streams*:</label>
              <div class="col-sm-6">
                <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
              </div>
            </div>

            <div class="form-group row">
              <label for="xxx" class="col-sm-6 col-form-label">Income Streams*:</label>
              <div class="col-sm-6">
                <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
              </div>
            </div>

            <p class="helper-block"></p><br/>

            <div class="form-group row">
              <label for="xxx" class="col-sm-6 col-form-label">Income Stream Name:</label>
              <div class="col-sm-6">
                <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
              </div>
            </div>

            <div class="form-group row">
              <label for="xxx" class="col-sm-6 col-form-label">Monthly Income:</label>
              <div class="col-sm-6">
                <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
              </div>
            </div>

            <div class="form-group row">
              <label for="xxx" class="col-sm-6 col-form-label">Days:</label>
              <div class="col-sm-6">
                <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
              </div>
            </div>

            <div class="form-group row">
              <label for="xxx" class="col-sm-6 col-form-label">Confidence:</label>
              <div class="col-sm-6">
                <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
              </div>
            </div>
            <p class="helper-block"></p><br/>

        </div>
    </div>
    
  </div>

  <div class="col-sm-6">
      <div class="card">
        <div class="card-header">
            Second Pannel
        </div>
        <div class="card-body">
            <div class="form-group row">
              <label for="xxx" class="col-sm-6 col-form-label">FICO Score:</label>
              <div class="col-sm-6">
                <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
              </div>
            </div>

            <div class="form-group row">
              <label for="xxx" class="col-sm-6 col-form-label">Credit History Length:</label>
              <div class="col-sm-6">
                <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
              </div>
            </div>

            <div class="form-group row">
              <label for="xxx" class="col-sm-6 col-form-label">Number of Credit Accounts:</label>
              <div class="col-sm-6">
                <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
              </div>
            </div>



            <div class="form-group row">
              <label for="xxx" class="col-sm-6 col-form-label">Credit Account ID:</label>
              <div class="col-sm-6">
                <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
              </div>
            </div>

            <div class="form-group row">
              <label for="xxx" class="col-sm-6 col-form-label">Insititution Name:</label>
              <div class="col-sm-6">
                <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
              </div>
            </div>

            <div class="form-group row">
              <label for="xxx" class="col-sm-6 col-form-label">Balance:</label>
              <div class="col-sm-6">
                <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
              </div>
            </div>

            <div class="form-group row">
              <label for="xxx" class="col-sm-6 col-form-label">Tradeline Age:</label>
              <div class="col-sm-6">
                <input type="text" id="xxx" name="xxx" class="form-control" value="Note">
              </div>
            </div>

            <p class="helper-block"></p><br/>

        </div>
    </div>
  </div>
</div>


@endsection