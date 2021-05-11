<?php

namespace App\Http\Controllers;

use App\DesignPatterns\Fundamental\PropertyContainer\BlogPost;
use App\DesignPatterns\Fundamental\PropertyContainer\PropertyContainer;

class FundamentalPatternsController extends Controller
{
    /**
     * Контейнер свойств (property container)
     *
     * @url http://127.0.0.1:8000/fundamentals/property-container
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * @throws \Exception
     */
    public function PropertyContainer()
    {
        $name = 'Контейнер свойств';
        $description = PropertyContainer::getDescription();

        $item = new BlogPost();

        $item->setTitle('Заголовок статьи');
        $item->getCategory();
        $item->setCategory(10);

        $item->addProperty('view_count', 100);

        $item->addProperty('last_update', '2020-02-01');
        $item->setProperty('last_update', '2020-02-02');

        $item->addProperty('read_only', true);
        $item->deleteProperty('read_only');

        dd($item);

        return view('dump', compact('name', 'description', 'item'));
    }
}
