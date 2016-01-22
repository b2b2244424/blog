<?php

namespace Admin\Service;

class UploadService{

	/*public function uploadImage()
    {
        $data = [
            'success' => false,
            'msg' => 'Failed!',
            'file_path' => ''
        ];

        if ($file = I(file('upload_file')))
        {
            $extension       = 'jpg';
            $folderName      = '/uploads/images/' . date("Ym", time()) .'/'.date("d", time());
            $safeName        = rand(0,9).'.'.$extension;
            $file->move_uploaded_file(PUBLIC_PATH, $safeName);
            $data['file_path'] = $folderName .'/'. $safeName;
            $data['msg'] = "Succeeded!";
            $data['success'] = true;
        }
        return $data;
    }*/
}