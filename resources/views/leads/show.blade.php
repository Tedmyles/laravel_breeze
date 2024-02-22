@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $lead->name }}</h1>
        <p>Email: {{ $lead->email }}</p>
        <!-- Add more details as needed -->
        <a href="{{ route('lead.edit', $lead->id) }}" class="btn btn-warning">Edit</a>
        <!-- Add delete button -->
    </div>
@endsection
