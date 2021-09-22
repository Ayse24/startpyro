<?php namespace Anomaly\VideosModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class VideosModule extends Module
{

    /**
     * The navigation display flag.
     *
     * @var bool
     */
    protected $navigation = true;

    /**
     * The addon icon.
     *
     * @var string
     */
    protected $icon = 'fa fa-puzzle-piece';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'videos' => [
            'buttons' => [
                'new_video',
            ],
        ],
        'series' => [
            'buttons' => [
                'new_series',
            ],
        ],
        'categories' => [
            'buttons' => [
                'new_category',
            ],
        ],
    ];

}
