<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class ImageController extends Controller
{
    public function upload(Request $request, $productId)
    {
        $filename = $productId . '/' . md5(time()) . '.'
            . $request->file('file')->getClientOriginalExtension();

        $result = Storage::disk('s3')->put(
            $filename,
            file_get_contents($request->file('file')->getRealPath()),
            'public'
        );
        dd($result);
    }
}
