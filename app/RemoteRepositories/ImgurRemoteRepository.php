<?php

namespace App\RemoteRepositories;

/**
 * 
 */
class ImgurRemoteRepository {
	
	public static function upload($file) {
            return static::imgurUploadedService($file, 'xphQY8b');
        }
        
        private static function imgurUploadedService($file, $album) {
            $isImgValidType = 
                   $file->type == "image/png" 
                || $file->type == "image/jpeg" 
                || $file->type == "image/gif";
            
          	if (! $isImgValidType) {
        		return toJson([
        		    'message'=>'We do not support this image extension', 
        		    'uploaded'=>false,
        		    'file'=>$file
        	    ]);
        	}
        	
        	if (! (($file->size / 1024 / 1024) <= 1)) {
        		return toJson([
        		    'message'=>'Exceeds our maximum file size', 
        		    'uploaded'=>false
                ]);
        	}
            
            $imageUploadedName = static::imgur($file, $album);
        	
        	if (isset($imageUploadedName['error'])) {
        	    return toJson([
            	    'message' => 'Error when try uploading', 
            	    'uploaded' => false,
            	    'error'=> $imageUploadedName
                ]);
        	}
        	
        	return  $imageUploadedName['image'];
        }
        
        private static function imgur($file, $uploadAlbum)
        {
            $curl = \curl_init();
            
            $fileTempName = curl_file_create(
                realpath($file->tmp_name),
                $file->type,
                'image'
            );
            
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api.imgur.com/3/image",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => false,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => [
                      'image' => $fileTempName,
                      'type' => 'file',
                      'album'=> $uploadAlbum
                ],
                CURLOPT_HTTPHEADER => [
                    "Authorization: Bearer " . env('IMGUR_TOKEN')
                ],
            ]);
            
            $response = curl_exec($curl);
            $err = curl_error($curl);
            
            curl_close($curl);
            
            if ($err) {
              return ["error"=> $err, "response"=> $response];
            }
            
            $jsonResponse = json_decode($response);
            return ["image"=>$jsonResponse->data->link, "response"=> $jsonResponse];
        }
}