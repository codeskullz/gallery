<?php namespace NielsVanDenDries\Gallery\Models;

use Model;

class Fotos extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    public $table = 'nielsvandendries_gallery_photos';

    public $rules = [
    ];

    public $attachMany = [
        'fotos' => [\System\Models\File::class]
    ];

    public function getPhotoDetailsAttribute()
    {
        $photoDetails = [];

        foreach ($this->fotos as $photo) {
            $photoDetails[] = [
                'url' => $photo->getPath(),
                'title' => $photo->title,
                'description' => $photo->description,
            ];
        }

        return $photoDetails;
    }
}
