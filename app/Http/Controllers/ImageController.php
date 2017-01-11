<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Image;

class ImageController extends Controller
{
    public function imageUpload(){

    return view('image-upload');
    }

    public function imageUploadPost(Request $request){

        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);
        $image = new Image;
        $image->name = $request->name;
        $image->image = $imageName;
        $image->save();
        return back()
        ->with('success','Image Uploaded successfully.')
        ->with('path',$imageName);


    }

    public function show(){
        $images = Image::where('id','=', 4)->get();
        return view('display',['images'=> $images]);
    }
}
