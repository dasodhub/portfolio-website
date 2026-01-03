@extends('layouts.master')

@section('title', 'Projects')

@section('content')
    <h1>My Projects</h1>

    @if (count($projects) > 0 )

        <ul>
            @foreach ($projects as $project )
                <li>
                    <strong>{{ $project['title'] }}</strong>
                    {{ $project['description'] }}
                </li>
            @endforeach
        </ul>

        @else

            <p>No projects found.</p>

    @endif

@endsection
