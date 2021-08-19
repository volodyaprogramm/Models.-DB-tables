<?php


namespace App\Model;


class Index extends AbstractModel
{
    public $title =
        [
            "keyone"=> 'good',
            "keytwo"=> '221',
            "keytree"=> 'Spain'
        ];

    public function getIndexByTitle($title)
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