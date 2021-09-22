<?php namespace Anomaly\VideosModule\Video;

use Anomaly\VideosModule\Video\Contract\VideoInterface;
use Anomaly\Streams\Platform\Model\Videos\VideosVideosEntryModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VideoModel extends VideosVideosEntryModel implements VideoInterface
{
    use HasFactory;

    /**
     * @return VideoFactory
     */
    protected static function newFactory()
    {
        return VideoFactory::new();
    }
}
