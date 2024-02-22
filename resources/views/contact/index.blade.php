<!-- resources/views/contacts/index.blade.php -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

@extends('layouts.base')
@section('content')
    {{-- use flowbite for the ui --}}
    <div class="relative overflow-x-auto">
        <div class="container">
            <div class="mb-3">
                <a href="{{ route('contacts.create') }}" class="btn btn-primary">Create New Contact</a>
            </div>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Contact name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Phone
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Organization
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($contacts as $contact)
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">
                                {{ $contact->first_name }} {{ $contact->last_name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $contact->email }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $contact->phone }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $contact->organization->name }}
                            </td>
                    
                        </tr>
                    @empty
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4" colspan="5">No contacts found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
