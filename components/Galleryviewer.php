<?php namespace Nielsvandendries\Gallery\Components;

use Cms\Classes\ComponentBase;
use Nielsvandendries\Gallery\Models\Fotos;

/**
 * Galleryviewer Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Galleryviewer extends ComponentBase
{
    public $fotos;
    public function componentDetails()
    {
        return [
            'name' => 'Galleryviewer Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        // define this as public $foto;
        $this->images = Fotos::with('fotos')->first();
    }
}
