<?php namespace Anomaly\VideosModule\Video;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var VideoModel
     */
    protected $model = VideoModel::class;


    /**
     * @return array
     * @throws \Exception
     */
    public function definition()
    {
        return [];
    }
}
