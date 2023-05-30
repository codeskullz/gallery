<?php namespace NielsVanDenDries\Gallery\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Fotos extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'gallery' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('NielsVanDenDries.Gallery', 'main-menu-item', 'side-menu-item');
    }
}
