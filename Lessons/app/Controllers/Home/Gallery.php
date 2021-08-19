<?php
namespace App\Controllers\Home;


use App\Controllers\AbstractControllers;
use App\Model\Gallery as ModelAbout;

class Gallery extends AbstractControllers

{
    public function index()
    {

        $modelclass = new ModelAbout();
        $list = $modelclass->list();

        $this->gener('Gallery', $list);
    }

    public function about()
    {
        $funget = new ModelAbout();
        $aboutfun = $funget->getAboutByTitle("keyone");

        $this->gener('Model',$aboutfun);
    }

}