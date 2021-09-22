<?php namespace Anomaly\VideosModule\Series;

use Anomaly\VideosModule\Series\Contract\SeriesInterface;
use Anomaly\Streams\Platform\Model\Videos\VideosSeriesEntryModel;
use Anomaly\VideosModule\Video\VideoModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SeriesModel extends VideosSeriesEntryModel implements SeriesInterface
{
    use HasFactory;

    /**
     * @return SeriesFactory
     */
    protected static function newFactory()
    {
        return SeriesFactory::new();
    }


    public function videos(){

        return $this->hasMany(VideoModel::class,'series_id');
    }
}
