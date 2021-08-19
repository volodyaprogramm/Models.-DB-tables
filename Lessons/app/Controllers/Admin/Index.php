<?php
namespace App\Controllers\Admin;


use App\Controllers\AbstractControllers;
use App\Model\Index as ModelAbout;

class Index extends AbstractControllers

{
    public function index()
    {

        $modelclass = new ModelAbout();
        $list = $modelclass->list();

        $this->gener('Index', $list);
    }

    public function about()
    {
        $funget = new ModelAbout();
        $aboutfun = $funget->getAboutByTitle("keyone");

        $this->gener('Model',$aboutfun);
    }

}