<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::all();

        return response()->json($photos);
    }

    public function store(Request $request)
    {
        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'required|image',
                'latitude' => 'required|numeric',
                'longitude' => 'required|numeric',
            ]);

            $path = $request->file('photo')->store('photos', 'public');

            $photoUrl = url('storage/' . $path);

            $photo = new Photo();
            $photo->file_path = $path;
            $photo->latitude = $request->latitude;
            $photo->longitude = $request->longitude;
            $photo->save();

            return response()->json([
                'message' => 'Photo and location saved successfully',
                'photoUrl' => $photoUrl
            ]);
        } else {
            return response()->json(['message' => 'No file uploaded'], 400);
        }
    }
}

