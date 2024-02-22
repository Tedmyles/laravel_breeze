<div>
    <!-- resources/views/contacts/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Contact</h1>

        <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Contact Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $contact->name }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $contact->email }}">
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $contact->phone }}">
            </div>

            <div class="form-group">
                <label for="organization_id">Organization</label>
                <select class="form-control" id="organization_id" name="organization_id">
                    @foreach($organizations as $organization)
                        <option value="{{ $organization->id }}" {{ $contact->organization_id == $organization->id ? 'selected' : '' }}>{{ $organization->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Contact</button>
        </form>
    </div>
@endsection
<!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
</div>
