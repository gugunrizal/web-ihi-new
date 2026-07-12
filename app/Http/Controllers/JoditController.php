<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JoditController extends Controller
{
    public function upload(Request $request)
    {
        // dd($request->all(), $request->file());
        if (!$request->hasFile('files')) {

            return response()->json([
                'success' => false,
                'message' => 'File tidak ditemukan'
            ]);
        }

        $file = $request->file('files');

        $folder = 'berita/' . date('Y') . '/' . date('m');

        $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

        $path = $file->storeAs($folder, $filename, 'public');

        return response()->json([
            'success' => true,
            'files' => [
                asset('storage/' . $path)
            ]
        ]);
    }
}
