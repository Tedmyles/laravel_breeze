@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Leads</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($leads as $lead)
                <tr>
                    <td>{{ $lead->name }}</td>
                    <td>{{ $lead->email }}</td>
                    <td>
                        <a href="{{ route('lead.show', $lead->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('lead.edit', $lead->id) }}" class="btn btn-warning">Edit</a>
                        <!-- Add delete button -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
