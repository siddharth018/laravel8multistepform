<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
Use Image;
Use App\Photo;
use Intervention\Image\Exception\NotReadableException;
 
 
class ImageController extends Controller
{
 
public function index()
{
  return view('image');
}
 
public function save(Request $request)
{
 request()->validate([
      'photo_name' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
 ]);
 
 if ($files = $request->file('photo_name')) {
     
    // for save original image
    $ImageUpload = Image::make($files);
    $originalPath = 'public/images/';
    $ImageUpload->save($originalPath.time().$files->getClientOriginalName());
     
    // for save thumnail image
    $thumbnailPath = 'public/thumbnail/';
    $ImageUpload->resize(250,125);
    $ImageUpload = $ImageUpload->save($thumbnailPath.time().$files->getClientOriginalName());
 
  $photo = new Photo();
  $photo->photo_name = time().$files->getClientOriginalName();
  $photo->save();
  }
 
  $image = Photo::latest()->first(['photo_name']);
  return Response()->json($image);
 
 
}
}