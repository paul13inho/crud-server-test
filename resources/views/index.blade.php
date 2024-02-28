@extends('layouts.app')
@include("layouts.header")

<form action="{{ route("index") }}" method="post" class="mx-auto max-w-md p-4 bg-gray-100 rounded">
    @csrf

    <label for="id" class="block mb-2">ID:</label>
    <input type="text" id="id" name="id" value="{{ $nextId }}" disabled class="w-full p-2 mb-4 border">

    <label for="name" class="block mb-2">Name:</label>
    <input type="text" id="name" name="name" class="w-full p-2 mb-4 border">

    @if (session('message'))
        <p id="message" class="text-center text-green-500 mb-4">{{ session('message') }}</p>
    @endif

    <button type="submit" class="w-full p-2 bg-green-500 text-white rounded hover:bg-green-600">Add to Database</button>
</form>
