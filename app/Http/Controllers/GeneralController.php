<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GeneralController extends Controller
{

    public function check()
    {
        $data = DB::table('names')->select('id', 'name')->get();

        return view('check', compact('data'));
    }


    public function deleteIndex()
    {
        $data = $this->getAllData();

        return view('delete', compact('data'));
    }

    public function deleteData(Request $request)
    {
        $request->validate([
            'deleteId' => 'required|integer',
        ]);

        $deleteId = $request->input('deleteId');

        $exists = DB::table('names')->where('id', $deleteId)->exists();

        if ($exists) {
            DB::table('names')->where('id', $deleteId)->delete();

            $deleteMessage = "Record with ID $deleteId deleted successfully!";

        } else {
            $deleteMessage = "Record with ID $deleteId does not exist.";
        }

        return redirect()->route('delete-index')->with('deleteMessage', $deleteMessage);
    }

    private function getAllData()
    {
        return DB::table('names')->select('id', 'name')->get();
    }








}
