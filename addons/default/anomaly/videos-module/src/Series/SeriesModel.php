<?php namespace Anomaly\VideosModule\Series;

use Anomaly\VideosModule\Series\Contract\SeriesInterface;
use Anomaly\Streams\Platform\Model\Videos\VideosSeriesEntryModel;
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
}
