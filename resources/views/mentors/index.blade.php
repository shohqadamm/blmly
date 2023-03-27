@extends('layouts.app')

@section('content')
<h1>All Mentors</h1>

<ul>
    @foreach ($mentors as $mentor)
    <li>{{ $mentor->name }}</li>
    <li>{{ $mentor->email }}</li>
    <li>{{ $mentor->phone }}</li>
    <a href="{{ route('mentor.show', ['id' => $mentor->id]) }}">View Mentor</a>
    <!-- Display other mentor data here -->
    @endforeach
</ul>
@endsection