<?php


namespace App\Model;


class Gallery extends AbstractModel
{
    public $title =
        [
            "keyone"=> 'Levi',
            "keytwo"=> '13',
            "keytree"=> 'Ukraine'
        ];

    public function getGalleryByTitle($title)
    {

        if (array_key_exists($title, $this->title)) {
            return $this->title[$title];
        } else {
            return false;
        }

    }
    public function list()
    {
        return $this->title;
    }
}