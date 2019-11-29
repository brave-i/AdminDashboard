@extends('layouts.applications.layout')
@section('subcontent')

<div class="card">
    <div class="card-header">
        Application Details
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        Country
                    </th>
                    <td>
                        {{ $application->app_country }}
                    </td>
                </tr>
                <tr>
                    <th>
                        City
                    </th>
                    <td>
                        {{ $application->app_city }}
                    </td>
                </tr>
                <tr>
                    <th>
                        State
                    </th>
                    <td>
                        {{ $application->app_state }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection