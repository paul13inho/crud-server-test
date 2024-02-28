@extends('layouts.app')
@include("layouts.header")

<div class="mx-auto max-w-md p-4 bg-white rounded">

    <h2 class="text-2xl font-bold mb-4">Delete Data</h2>

    <form action="{{ route('delete-data') }}" method="post" class="mb-4">
        @csrf
        <label for="deleteId" class="block mb-2">ID to Delete:</label>
        <input type="number" id="deleteId" name="deleteId" class="w-full p-2 mb-4 border" required>

        <button type="submit" class="w-full p-2 bg-red-500 text-white rounded hover:bg-red-600">Delete</button>
    </form>

    @if (session('deleteMessage'))
        <p class="text-center text-red-500 mb-4">{{ session('deleteMessage') }}</p>
    @endif

    <h2 class="text-2xl font-bold mb-4">Check Data</h2>

    @if ($data->isNotEmpty())
        <table class="w-full border">
            <thead>
            <tr class="bg-gray-200">
                <th class="p-2 border">ID</th>
                <th class="p-2 border">Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($data as $row)
                <tr>
                    <td class="p-2 border">{{ $row->id }}</td>
                    <td class="p-2 border">{{ $row->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>No data available.</p>
    @endif

</div>
