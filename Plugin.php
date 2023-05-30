<?php namespace NielsVanDenDries\Gallery;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Nielsvandendries\Gallery\Components\Galleryviewer' => 'Galleryviewer'
        ];
    }

    public function registerSettings()
    {
    }
}
