<?php

namespace App\Http\Controllers;

use App\Models\Name;
use Illuminate\Http\Request;

class NameController extends Controller
{
    public function index()
    {
        $nextId = Name::max('id') + 1;
        $message = '';

        return view('index', compact('nextId', 'message'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $record = Name::create([
            'name' => $request->input('name'),
        ]);

        $message = $record ? 'Record added successfully!' : 'Error adding record';

        return redirect()->route('index')->with('message', $message);
    }








}
