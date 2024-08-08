<!-- Form to edit an existing contact -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Contact</h1>
        <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $contact->name }}" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $contact->email }}" required>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="{{ $contact->phone }}">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="{{ $contact->address }}">
            <button type="submit">Save</button>
        </form>
    </div>
@endsection
