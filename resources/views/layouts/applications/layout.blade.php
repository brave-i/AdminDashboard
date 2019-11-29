@extends('layouts.admin')
@section('content')

<ul class="nav nav-tabs mb-3">
    <li class="nav-item">
        <a class="nav-link {{$status=="created"?"active":""}}" href="?status=created">Created</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{$status=="pending"?"active":""}}" href="?status=pending">Pending</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{$status=="submitted"?"active":""}}" href="?status=submitted">Submitted</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{$status=="declined"?"active":""}}" href="?status=declined">Declined</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{$status=="withdrwan"?"active":""}}" href="?status=withdrwan">Withdrawn</a>
    </li>


</ul>

@yield('subcontent')

@endsection