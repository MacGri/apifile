<?php

namespace App\Http\Controllers\Download;

use App\Download;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function store(Request $request)
    {
//        dd($request->file);
        $path = $request->file->store('uploads', 'public');

        $download = Download::create([
            'user_id' => \Auth::id(),
            'title' => $request->title,
            'path' => $path,
            'mime' => $request->file->getMimeType(),
            'size' => $request->file->getSize(),
        ]);

        return $download->id;
    }

    public function show(Download $download)
    {
        $extension = explode('.', $download->path);
        $fileName = $download->title . '.' . $extension[1] ?? '';

        return response()->download(storage_path('app/public/' . $download->path), $fileName);
    }

    public function upload(Request $request, Download $download)
    {
        $path = $request->file('image')->store('uploads', 'public');
        return view('default', ['puth' => $path]);
    }

    public function destroy(Download $download)
    {
        if (!\Storage::disk('public')->delete($download->path)) {
            return;
        }
        if ($download->delete()) {
            return ['result' => true];
        }
    }
}
