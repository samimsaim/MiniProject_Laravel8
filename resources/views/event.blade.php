@extends('layouts.app')

@section('content')

    <h1><strong>{{ $name }}</h1></strong>

    <br><h3>People that have been on this event:</h3>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->first_name }} {{ $user->last_name }}</li>
        @endforeach
    </ul>

    <h2><a href="/dashboard/del_event/{{ $name }}">Delete Participation</a></h2>
@endsection