<?php

namespace App\DesignPatterns\Fundamental\PropertyContainer;

/**
 * Class BlogPost
 * @package App\DesignPatterns\Fundamental\PropertyContainer
 */
class BlogPost extends PropertyContainer
{
    /**
     * @var
     */
    private $title;
    /**
     * @var
     */
    private $category_id;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category_id;
    }

    public function setCategory($id)
    {
        $this->category_id = $id;
    }

}
