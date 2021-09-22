<?php

namespace Anomaly\VideosModule\Http\Controller;

use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Anomaly\VideosModule\Video\Contract\VideoRepositoryInterface;

class VideosController extends PublicController
{
   public function index(){

       $this->breadcrumbs->add('Home','/');
       $this->breadcrumbs->add('Videos','videos');
       $this->template->set('meta_title','Videos');
       return $this->view->make('anomaly.module.videos::videos/index');
   }

    public function view(VideoRepositoryInterface  $videos, $slug){

       if(!$video=$videos->findBySlug($slug)){
           abort(404);
       }

        $this->breadcrumbs->add('Home','/');
        $this->breadcrumbs->add('Videos','videos');
        $this->breadcrumbs->add($video->series->title,$video->series->route('view'));
        $this->breadcrumbs->add($video->title,$video->route('view'));
        $this->template->set('meta_title',$video->title);
        return $this->view->make('anomaly.module.videos::videos/view',compact('video'));
    }
}
