@extends('layouts.app')
@include("layouts.header")

<div class="mx-auto max-w-md p-4 bg-gray-100 rounded">
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
