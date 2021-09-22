<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleVideosCreateSeriesStream extends Migration
{

    /**
     * This migration creates the stream.
     * It should be deleted on rollback.
     *
     * @var bool
     */
    protected $delete = true;

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'series',
        'title_column' => 'title',
        'translatable' => true,
        'versionable' => false,
        'trashable' => true,
        'searchable' => true,
        'sortable' => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [

        'title' => [
            'translatable' => true,
            'required' => true,
        ],
        'slug' => [
            'unique' => true,
            'required' => true,
        ],

        'description' => [
            'translatable' => true,
            'required' => true,
        ],
    ];

}
