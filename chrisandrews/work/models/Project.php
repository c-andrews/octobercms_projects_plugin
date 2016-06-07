<?php namespace ChrisAndrews\Work\Models;

use Model;

/**
 * Model
 */
class Project extends Model
{
use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'chrisandrews_work_projects';


    public $attachOne = [
        'feature_image' => 'System\Models\File'
    ];

    public $attachMany = [
        'images' => 'System\Models\File'
    ];



    public function getFeatureImage()
    {
        if ( $this->feature_image )
        {
            return $this->feature_image->getPath();
        }
        else
        {
            return "";
        }
    }


    public function getImages()
    {
        $images = array();

        if ( $this->images )
        {
            foreach ( $this->images as $image ) 
            {
                if ( $image )
                    array_push( $images, $image->getPath() );
            }
        }

        return $images;
    }

    // $project->setSortableOrder($project->id, 1);
}