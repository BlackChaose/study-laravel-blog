<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
/* use Illuminate\Foundation\Testing\WithFaker; */
use Tests\TestCase;

class ArticleCategoryControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        $categories = factory(\App\ArticleCategory::class, 10)->create();
        $response = $this->get(route('article_categories.index'));
        $response->assertStatus(200);
        $response->assertSeeText($categories[0]->name);
        $response->assertSeeText($categories[3]->name);
    }
}
