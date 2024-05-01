<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use Illuminate\Http\Request;
use App\Models\File;
class FileUpload extends Controller
{
  public function fileUpload(Request $req){
        $req->validate([
        'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $fileModel = new File;
        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('media', $fileName, 'public');
            $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
						$req->file->move(public_path('\media'), $fileName);
            $fileModel->save();
            return ['data'=>$fileName];
        }
   }
}