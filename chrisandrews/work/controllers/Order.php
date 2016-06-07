<?php namespace ChrisAndrews\Work\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Order extends Controller
{
    public $implement = ['Backend\Behaviors\ReorderController'];
    
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'manage_projects' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('ChrisAndrews.Work', 'work', 'reorder');
    }
}