<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Models\Image;

class ImageController extends Controller
{
    public function upload(Request $request, $productId)
    {
        $filename = md5(time()) . '.'
            . $request->file('file')->getClientOriginalExtension();

        $result = Storage::put(
            'products/' . $productId . '/' . $filename,
            file_get_contents($request->file('file')->getRealPath()),
            'public'
        );

        if ($result) {
            $image = new Image;
            $image->product_id = $productId;
            $image->filename = $request->file('file')->getClientOriginalName();
            $image->real_name = $filename;
            $image->save();

            $status = [
                'type' => 'success',
                'message' => 'Images uploaded successfully.'
            ];

            $request->session()->flash('status', $status);
        }
    }
}
