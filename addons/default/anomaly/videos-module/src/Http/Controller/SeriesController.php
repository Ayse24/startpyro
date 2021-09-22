<?php

namespace Anomaly\VideosModule\Http\Controller;

use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Anomaly\VideosModule\Series\Contract\SeriesRepositoryInterface;

class SeriesController  extends PublicController
{

    public function index(){

        $this->breadcrumbs->add('Home','/');
        $this->breadcrumbs->add('Videos','videos');
        $this->breadcrumbs->add('Series',$this->url->route('anomaly.module.videos::series.index'));
        $this->template->set('meta_title','Series');
        return $this->view->make('anomaly.module.videos::series/index');
    }

    public function view(SeriesRepositoryInterface $series, $slug){

        if(!$series=$series->findBySlug($slug)){
            abort(404);
        }

        $this->breadcrumbs->add('Home','/');
        $this->breadcrumbs->add('Videos','videos');
        $this->breadcrumbs->add('Model',$this->url->route('anomaly.module.videos::series.index'));
        $this->breadcrumbs->add($series->title,$series->route('view'));

        $this->template->set('meta_title',$series->title);
        return $this->view->make('anomaly.module.videos::series/view',compact('series'));
    }

}
