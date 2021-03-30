<?php

namespace App\Repositories;

use App\Models\BlogPost as Model;

/**
 * Class BlogCategoryRepository
 *
 * @package App\Repositories
 */
class BlogPostRepository extends CoreRepository
{
    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    public function getAllWithPaginate()
    {
        $columns = [
            'id',
            'title',
            'slug',
            'is_published',
            'published_at',
            'user_id',
            'category_id',
        ];

        $result = $this->startConditions()
            ->select($columns)
            ->orderBy('id', 'DESC')
            // ->with(['category', 'user'])
            ->with([
                // можно так
                'category' => function ($query) {
                $query->select(['id', 'title']);
                },
                // или так
                'user:id,name',
            ])
            ->paginate(25);

        return $result;
    }
    /**
     * Получить модель для редактирования в админке
     *
     * @param int $id
     *
     * @return \App\Models\BlogCategory
     */
    public function getEdit($id)
    {
        return $this->startConditions()->find($id);
    }
}
