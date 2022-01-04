<?php

namespace App\Http\Controllers;

use App\Models\Ces;
use Illuminate\Http\Request;

class CesRecordController extends Controller
{
    public function index()
    {
        $data['ces'] = Ces::where('valid', 0)->paginate(10);

        return view('ces.all-records', compact('data'));
    }

    public function show($id)
    {
        $data['ces'] = Ces::find($id);

        return view('ces.show', compact('data'));
    }
}
