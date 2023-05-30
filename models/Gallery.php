<?php namespace NielsVanDenDries\Gallery\Models;

use Model;

/**
 * Model
 */
class Gallery extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nielsvandendries_gallery_galleries';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
