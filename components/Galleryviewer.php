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
    public $images;
    public $item;

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
        return [
            'name' => [
                'title'             => 'naam',
                'description'       => 'Select the Gallery',
                'type'              => 'dropdown',
            ]
        ];
    }

    public function getnameOptions()
    {
        return Fotos::get()->lists('naam', 'naam');
    }

    public function onRun()
    {
        $this->item = Fotos::where('naam', $this->property('naam'))->get()->toArray();

        $fotos = Fotos::with('fotos')->first();
    
        $photoDetails = [];
    
        if ($fotos) {
            $photoDetails = $fotos->photoDetails;
        }
    
        $this->page['photoDetails'] = $photoDetails;
    }

}
