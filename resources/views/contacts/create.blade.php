<!-- Form to create a new contact -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Contact</h1>
        <form action="{{ route('contacts.store') }}" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address">
            <button type="submit">Save</button>
        </form>
    </div>
@endsection
