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
            'name' => 'Galleryviewer',
            'description' => 'Displays a gallery of you choise'
        ];
    }

    public function defineProperties()
    {
        return [
            'naam' => [
                'title'             => 'Gallery',
                'description'       => 'Watch the Simpson',
                'type'              => 'dropdown',
            ]
        ];
    }

    // Functie de de gegevens ophaalt uit de database
    public function getNaamOptions()
    {
        return Fotos::get()->lists('naam', 'naam');
    }

    public function onRun()
    {
        $fotos = Fotos::with('fotos')->where('naam', $this->property('naam'))->first();
        $photoDetails = [];
        if ($fotos) {
            $photoDetails = $fotos->photoDetails;
        }
        $this->page['photoDetails'] = $photoDetails;
        $this->gallery = Fotos::get()->toArray();
    }
}
