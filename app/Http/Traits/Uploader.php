<?php


namespace App\Http\Traits;


use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

trait Uploader
{
    public function UploadImage(UploadedFile $file , string $FolderName = null){
        //get filename with extension
        $filenamewithextension = $file->getClientOriginalName();

        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        $filename = preg_replace("/\s/", "-", $filename);

        //get file extension
        $extension = $file->getClientOriginalExtension();

        //filename to store
        $filenametostore = $filename.'_' . rand(100000 , 100000000) . time() .'.'.$extension;

        //$basePath = '../vpn.ai1polaris.com/Uploads/';
        if ($FolderName){
            $path =   $FolderName . '/'  . date('Y/m/d') . '/';
        }else{
            $path =  date('Y/m/d') . '/';
        }

        //Upload File
        $file->storeAs( $path , $filenametostore , ['disk' => 'publichtml']);

        return 'https://mrmesghalifarm.ir/Uploads/' . $path . $filenametostore;

    }
    public function UploadPDF(UploadedFile $file , string $FolderName = null){
        //get filename with extension
        $filenamewithextension = $file->getClientOriginalName();

        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        $filename = preg_replace("/\s/", "-", $filename);

        //get file extension
        $extension = $file->getClientOriginalExtension();

        //filename to store
        $filenametostore = $filename.'_' . rand(100000 , 100000000) . time() .'.'.$extension;

        //$basePath = '../vpn.ai1polaris.com/Uploads/';
        if ($FolderName){
            $path =   $FolderName . '/'  . date('Y/m/d') . '/';
        }else{
            $path =  date('Y/m/d') . '/';
        }

        //Upload File
        if(env('APP_ENV') == 'production'){
            $file->storeAs( $path , $filenametostore , ['disk' => 'publichtml']);
        }else{
            $file->storeAs( $path , $filenametostore , ['disk' => 'public']);
        }

        return 'https://mrmesghalifarm.ir/Uploads/' . $path . $filenametostore;
    }
}
