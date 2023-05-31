<?php namespace NielsVanDenDries\Gallery\Models;

use Model;

/**
 * Model
 */
class Fotos extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nielsvandendries_gallery_photos';

    /**
     * @var array Validation rules
     */
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
                // Voeg hier eventueel andere velden toe die je wilt weergeven
            ];
        }

        return $photoDetails;
    }
}
