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
    public $gallery;

    public function componentDetails()
    {
        return [
            'name' => 'Gallery Viewer',
            'description' => 'Displays a gallery of you choise'
        ];
    }

    public function defineProperties()
    {
    }

    public function onRun()
    {
        $fotos = Fotos::first();
        $photoDetails = [];
            if ($fotos) {
                $photoDetails = $fotos->photoDetails;
            }
        $this->page['photoDetails'] = $photoDetails;
        $this->gallery = Fotos::get()->toArray();
    }
}
