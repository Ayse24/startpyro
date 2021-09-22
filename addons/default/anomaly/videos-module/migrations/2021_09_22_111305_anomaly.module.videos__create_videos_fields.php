<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleVideosCreateVideosFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'title' => 'anomaly.field_type.text',
        'name' => 'anomaly.field_type.text',
        'description' => 'anomaly.field_type.textarea',
        'slug' => [
            'type' => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'title',
                'type' => '_'
            ],
        ],

        'poster'=> 'anomaly.field_type.file',

        'series'=>[
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'title_name'=>'title',
               'related'=>\Anomaly\VideosModule\Series\SeriesModel::class,
            ],
        ],
        'categories'=>[
            'type' => 'anomaly.field_type.multiple',
            'config' => [
                'title_name'=>'name',
                'related'=>\Anomaly\VideosModule\Category\CategoryModel::class,
            ],
        ]
    ];

}
