<?php

namespace Database\Factories;

use App\Models\BlogPost;
use Dotenv\Util\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BlogPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(rand(3, 8), true);
        $txt = $this->faker->realText(rand(1000, 4000));
        $is_published = rand(1, 5) > 1;
        $createdAt = $this->faker->dateTimeBetween('-3 months', '-2 months');

        return [
            'category_id'   =>  rand(1, 11),
            'user_id'       =>  (rand(1, 5) == 5) ? 1 : 2,
            'title'         =>  $title,
            'slug'          =>  \Illuminate\Support\Str::slug($title),
            'excerpt'       =>  $this->faker->text(rand(40, 100)),
            'content_raw'   =>  $txt,
            'content_html'  =>  $txt,
            'is_published'  =>  $is_published,
            'published_at'  =>  $is_published ? $this->faker->dateTimeBetween('-1 months', '-1 days') : null,
            'created_at'    =>  $createdAt,
            'updated_at'    =>  $createdAt
        ];
    }
}
