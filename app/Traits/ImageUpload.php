<?php

namespace App\Traits;

trait ImageUpload
{
    public function upload($file){
        
       // $filename=unique().'_'.time().'.'.$file->getClientOriginalExtension();
       $filename=time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path($this->folderPath),$filename);
        return $filename;
    }
}
