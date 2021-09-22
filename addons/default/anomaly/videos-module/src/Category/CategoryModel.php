<?php namespace Anomaly\VideosModule\Category;

use Anomaly\VideosModule\Category\Contract\CategoryInterface;
use Anomaly\Streams\Platform\Model\Videos\VideosCategoriesEntryModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryModel extends VideosCategoriesEntryModel implements CategoryInterface
{
    use HasFactory;

    /**
     * @return CategoryFactory
     */
    protected static function newFactory()
    {
        return CategoryFactory::new();
    }
}
