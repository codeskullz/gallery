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
        'fotos' => \System\Models\File::class
    ];
}
