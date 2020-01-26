<?php

namespace App\Http\Controllers\Download;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function upload(Request $request)
    {
        $path = $request->file('image')->store('uploads', 'public');
        return view('default', ['puth' => $path]);
    }
}
